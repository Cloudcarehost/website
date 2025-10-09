<x-user-layout>
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 py-20 md:py-28 overflow-hidden">
        <div class="absolute inset-0 opacity-10 max-w-screen-xl mx-auto">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0,0 L100,0 L100,100 L0,100 Z" fill="none" stroke="white" stroke-width="2" stroke-dasharray="5,5" />
            </svg>
        </div>

        <div class="container max-w-screen-xl mx-auto px-4 relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">All Articles</h1>
                <p class="text-xl text-indigo-100 mb-8">Browse our complete collection of help articles</p>

                <div class="max-w-2xl mx-auto">
                    <form action="{{ route('articles') }}" method="GET" class="relative">
                        <input type="text" name="search" placeholder="Search articles..."
                            value="{{ request('search') }}"
                            class="w-full px-6 py-4 rounded-lg shadow-lg bg-white text-gray-800 placeholder-gray-400
                                   focus:outline-none focus:ring-2 focus:ring-indigo-400 border border-gray-200">
                        <button type="submit"
                            class="absolute right-2 top-2 bg-indigo-600 hover:bg-indigo-700 text-white p-2 rounded-lg transition-colors">
                            <i class="fas fa-search"></i>
                        </button>

                        @if(request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-16 bg-gray-50">
        <div class="container max-w-screen-xl mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Sidebar -->
                <div class="lg:w-1/4">
                    <div class="bg-white rounded-xl shadow-md p-6 sticky top-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Categories</h3>
                        <ul class="space-y-2">
                            <li>
                                <a href="{{ route('articles') }}"
                                   class="flex items-center justify-between px-3 py-2 rounded-lg {{ !request('category') ? 'bg-indigo-50 text-indigo-700 font-medium' : 'hover:bg-gray-100' }} transition-colors">
                                    <span>All Articles</span>
                                    <span class="{{ !request('category') ? 'bg-indigo-600 text-white' : 'text-gray-500' }} text-xs px-2 py-1 rounded-full">
                                        {{ $categories->sum('blogs_count') }}
                                    </span>
                                </a>
                            </li>
                            @foreach($categories as $category)
                                <li>
                                    <a href="{{ route('articles', ['category' => $category->id]) }}"
                                       class="flex items-center justify-between px-3 py-2 rounded-lg {{ request('category') == $category->id ? 'bg-indigo-50 text-indigo-700 font-medium' : 'hover:bg-gray-100' }} transition-colors">
                                        <span>{{ $category->name }}</span>
                                        <span class="{{ request('category') == $category->id ? 'bg-indigo-600 text-white' : 'text-gray-500' }} text-xs px-2 py-1 rounded-full">
                                            {{ $category->blogs_count }}
                                        </span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                        <div class="mt-8 p-4 bg-indigo-50 rounded-lg">
                            <h4 class="font-medium text-indigo-800 mb-2">Need Help?</h4>
                            <p class="text-sm text-gray-600 mb-3">Can't find what you're looking for?</p>
                            <a href="{{ route('contact') }}" class="inline-block w-full text-center bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                                Contact Support
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Article List -->
                <div class="lg:w-3/4">
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4 sm:mb-0">Latest Articles</h2>
                    </div>

                    <div class="space-y-6">
                        @forelse($blogs as $blog)
                            <article class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow">
                                <div class="md:flex">
                                    @if($blog->thumbnail)
                                        <div class="md:w-1/3">
                                            <img src="{{ asset($blog->thumbnail) }}" alt="{{ $blog->title }}" class="w-full h-full object-cover">
                                        </div>
                                    @endif

                                    <div class="p-6 {{ $blog->thumbnail ? 'md:w-2/3' : 'w-full' }}">
                                        <div class="flex items-center mb-2">
                                            <span class="bg-indigo-100 text-indigo-800 text-xs font-semibold px-2 py-1 rounded mr-2">{{ $blog->category->name }}</span>
                                            <span class="text-gray-500 text-sm"><i class="far fa-clock mr-1"></i>{{ $blog->published_at->format('M d, Y') }}</span>
                                        </div>

                                        <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $blog->title }}</h3>
                                        <p class="text-gray-600 mb-4">{{ Str::limit(strip_tags($blog->content), 150) }}</p>

                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <img src="https://ui-avatars.com/api/?name={{ urlencode($blog->user->name) }}&background=random" alt="Author" class="w-8 h-8 rounded-full mr-2">
                                                <span class="text-sm text-gray-600">{{ $blog->user->name }}</span>
                                            </div>
                                            <a href="{{ route('single-articles', $blog->slug) }}" class="text-indigo-600 hover:text-indigo-800 font-medium inline-flex items-center transition-colors">
                                                Read Article <i class="fas fa-chevron-right ml-1 text-sm"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @empty
                            <div class="bg-white rounded-xl shadow-md p-6 text-center">
                                <p class="text-gray-600">No articles found. Check back later!</p>
                            </div>
                        @endforelse
                    </div>

                    @if($blogs->hasPages())
                        <div class="mt-10">
                            {{ $blogs->appends(request()->query())->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Minimal JS: keep things lightweight -->
    <script>
        // copy link toast for any copy buttons named copyLinkBtnSmall
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('#copyLinkBtnSmall').forEach(btn => {
                btn.addEventListener('click', async function () {
                    const url = window.location.href;
                    try {
                        await navigator.clipboard.writeText(url);
                        const t = document.createElement('div');
                        t.textContent = 'Link copied!';
                        t.className = 'fixed bottom-6 right-6 bg-indigo-600 text-white px-4 py-2 rounded-lg shadow-lg text-sm animate-fade';
                        document.body.appendChild(t);
                        setTimeout(() => t.remove(), 2400);
                    } catch {
                        alert('Copy failed — please copy from address bar.');
                    }
                });
            });
        });
    </script>

    <style>
        @keyframes fadeInOut { 0% { opacity:0; transform: translateY(10px);} 10%,90%{opacity:1;transform:none;} 100%{opacity:0; transform: translateY(10px);} }
        .animate-fade { animation: fadeInOut 2.4s ease forwards; }
    </style>
</x-user-layout>
