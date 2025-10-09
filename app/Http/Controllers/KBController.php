<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KbController extends Controller
{
    /**
     * Public index -> only show items where type = 'kb'
     */
    public function publicIndex()
    {
        $searchTerm = request('search');

        $kbs = Blog::where('type', 'kb')
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
                $query->where('type', 'kb')
                      ->whereNotNull('published_at')
                      ->where('published_at', '<=', now());
                if ($searchTerm) {
                    $query->where('title', 'like', '%' . $searchTerm . '%');
                }
            }
        ])->get();

        return view('user.knowledge-base', compact('kbs', 'categories'));
    }

    /**
     * Public show -> only show items where type = 'kb'
     */
    public function publicShow($slug)
    {
        $kb = Blog::where('type', 'kb')
                    ->where('slug', $slug)
                    ->whereNotNull('published_at')
                    ->where('published_at', '<=', now())
                    ->firstOrFail();

        $relatedKbs = Blog::where('type', 'kb')
            ->where('category_id', $kb->category_id)
            ->where('id', '!=', $kb->id)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->limit(3)
            ->get();

        return view('user.single-kb', compact('kb', 'relatedKbs'));
    }
}
