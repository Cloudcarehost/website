<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Admin dashboard: show separate paginated lists for blogs and KBs.
     */
    public function index()
    {
        $baseQuery = Blog::when(request('search'), function ($query) {
                $query->where('title', 'like', '%' . request('search') . '%');
            })
            ->when(request('category'), function ($query) {
                $query->where('category_id', request('category'));
            });

        // paginate separately (10 per page each)
        $blogs = (clone $baseQuery)->where('type', 'blog')->latest()->paginate(10, ['*'], 'blogs_page');
        $kbs   = (clone $baseQuery)->where('type', 'kb')->latest()->paginate(10, ['*'], 'kbs_page');

        $categories = Category::all();

        return view('dashboard', compact('blogs', 'kbs', 'categories'));
    }

    /**
     * Show create form.
     * Accepts optional ?type=kb to create KB item (default = blog).
     */
    public function create()
    {
        $categories = Category::all();
        $type = request('type', 'blog');

        return view('blogs.create', compact('categories', 'type'));
    }

    /**
     * Store new blog/kb (admin).
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'data' => 'required|string',
            'thumbnail' => 'nullable|file',
            'published_at' => 'nullable|date',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'type' => 'nullable|in:blog,kb',
        ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->category_id = $request->category_id;
        $blog->content = $request->data;
        $blog->user_id = auth()->id();
        $blog->published_at = $request->published_at;
        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        $blog->type = $request->input('type', 'blog');

        $blog->save(); // Save to get ID

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $filename = $blog->id . '.jpg';
            $path = public_path('images/blog');

            if (! file_exists($path)) {
                mkdir($path, 0755, true);
            }

            $image->move($path, $filename);
            $blog->thumbnail = 'images/blog/' . $filename;
            $blog->save();
        }

        return redirect()->route('dashboard')->with('success', ucfirst($blog->type) . ' created successfully!');
    }

    /**
     * Update existing blog/kb (admin).
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'data' => 'required|string',
            'thumbnail' => 'nullable|file',
            'published_at' => 'nullable|date',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'type' => 'nullable|in:blog,kb',
        ]);

        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->category_id = $request->category_id;
        $blog->content = $request->data;
        $blog->published_at = $request->published_at;
        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        $blog->type = $request->input('type', $blog->type);

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $filename = $blog->id . '.jpg';
            $path = public_path('images/blog');

            if (! file_exists($path)) {
                mkdir($path, 0755, true);
            }

            if ($blog->thumbnail && file_exists(public_path($blog->thumbnail))) {
                @unlink(public_path($blog->thumbnail));
            }

            $image->move($path, $filename);
            $blog->thumbnail = 'images/blog/' . $filename;
        }

        $blog->save();

        return redirect()->route('dashboard')->with('success', ucfirst($blog->type) . ' updated successfully!');
    }

    /**
     * Admin show (optional) - using implicit model binding.
     * Keep admin show available for both blog and kb.
     */
    public function show(Blog $blog)
    {
        return view('blogs.show', compact('blog'));
    }

    /**
     * Edit form (admin).
     */
    public function edit(Blog $blog)
    {
        $categories = Category::all();
        return view('blogs.edit', compact('blog', 'categories'));
    }

    /**
     * Delete blog/kb (admin).
     */
    public function destroy(Blog $blog)
    {
        if ($blog->thumbnail && file_exists(public_path($blog->thumbnail))) {
            @unlink(public_path($blog->thumbnail));
        }

        $blog->delete();

        return redirect()->route('dashboard')->with('success', ucfirst($blog->type) . ' deleted successfully!');
    }

    /**
     * Public index -> only show items where type = 'blog'
     */
    public function publicIndex()
    {
        $searchTerm = request('search');

        $blogs = Blog::where('type', 'blog')
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->with('category')
            ->when($searchTerm, function ($query) use ($searchTerm) {
                $query->where('title', 'like', '%' . $searchTerm . '%');
            })
            ->when(request('category'), function ($query) {
                $query->where('category_id', request('category'));
            })
            ->latest('published_at')
            ->paginate(5)
            ->withQueryString();

        $categories = Category::withCount([
            'blogs' => function ($query) use ($searchTerm) {
                $query->where('type', 'blog')
                      ->whereNotNull('published_at')
                      ->where('published_at', '<=', now());
                if ($searchTerm) {
                    $query->where('title', 'like', '%' . $searchTerm . '%');
                }
            }
        ])->get();

        return view('user.articles', compact('blogs', 'categories'));
    }

    /**
     * Public show -> only show items where type = 'blog'
     *
     * We expect this method to be matched by a route that passes slug as a path param:
     * Route::get('/articles/{slug}', [BlogController::class, 'publicShow'])->name('single-articles');
     */
    public function publicShow($slug)
    {
        $blog = Blog::where('type', 'blog')
                    ->where('slug', $slug)
                    ->whereNotNull('published_at')
                    ->where('published_at', '<=', now())
                    ->firstOrFail();

        $relatedBlogs = Blog::where('type', 'blog')
            ->where('category_id', $blog->category_id)
            ->where('id', '!=', $blog->id)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->limit(3)
            ->get();

        return view('user.single-blog', compact('blog', 'relatedBlogs'));
    }

     public function showDevelopment()
    {
        $categorySlug = 'development';

        $category = Category::where('slug', $categorySlug)->first();
        
        if (! $category) {
            $blogs = collect();
            return view('user.development', compact('blogs'));
        }

        $blogs = Blog::where('type', 'blog')
            ->where('category_id', $category->id)
            ->whereNotNull('published_at')
            ->limit(3)
            ->get();

        return view('user.development', compact('blogs'));
    }
}
