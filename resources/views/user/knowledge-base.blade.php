<x-user-layout>
   <!-- Hero Section -->
<section class="relative bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 py-20 md:py-28 overflow-hidden">
    <div class="absolute max-w-screen-xl mx-auto inset-0 opacity-10">
        <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0,0 L100,0 L100,100 L0,100 Z" fill="none" stroke="white" stroke-width="2"
                stroke-dasharray="5,5" />
        </svg>
    </div>
    <div class="container max-w-screen-xl mx-auto px-4 relative z-10">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Knowledge Base</h1>
            <p class="text-xl text-blue-100 mb-8">Find answers to frequently asked questions and helpful guides</p>
            <div class="max-w-2xl mx-auto">
                <form action="{{ route('knowledge-base') }}" method="GET" class="relative">
                    <input type="text" name="search" placeholder="Search knowledge base..."
                        value="{{ request('search') }}"
                        class="w-full px-6 py-4 rounded-lg shadow-lg bg-white text-gray-800 placeholder-gray-400
                               focus:outline-none focus:ring-2 focus:ring-blue-400 border border-gray-200">
                    <button type="submit"
                        class="absolute right-2 top-2 bg-blue-600 hover:bg-blue-700 text-white p-2 rounded-lg transition-colors">
                        <i class="fas fa-search"></i>
                    </button>

                    <!-- Keep existing category filter if present -->
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
                                <a href="{{ route('knowledge-base') }}"
                                    class="flex items-center justify-between px-3 py-2 rounded-lg {{ !request('category') ? 'bg-blue-50 text-blue-700 font-medium' : 'hover:bg-gray-100' }} transition-colors">
                                    <span>All Articles</span>
                                    <span
                                        class="{{ !request('category') ? 'bg-blue-600 text-white' : 'text-gray-500' }} text-xs px-2 py-1 rounded-full">
                                        {{ $categories->sum('blogs_count') }}
                                    </span>
                                </a>
                            </li>
                            @foreach($categories as $category)
                                <li>
                                    <a href="{{ route('knowledge-base', ['category' => $category->id]) }}"
                                        class="flex items-center justify-between px-3 py-2 rounded-lg {{ request('category') == $category->id ? 'bg-blue-50 text-blue-700 font-medium' : 'hover:bg-gray-100' }} transition-colors">
                                        <span>{{ $category->name }}</span>
                                        <span
                                            class="{{ request('category') == $category->id ? 'bg-blue-600 text-white' : 'text-gray-500' }} text-xs px-2 py-1 rounded-full">
                                            {{ $category->blogs_count }}
                                        </span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                        <div class="mt-8 p-4 bg-blue-50 rounded-lg">
                            <h4 class="font-medium text-blue-800 mb-2">Need Help?</h4>
                            <p class="text-sm text-gray-600 mb-3">Can't find what you're looking for?</p>
                            <a href={{route('contact')}}
                                class="inline-block w-full text-center bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                                Contact Support
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Article List -->
                <div class="lg:w-3/4">
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4 sm:mb-0">Knowledge Base Articles</h2>
                    </div>

                    <!-- Article Cards -->
                    <div class="space-y-6">
                        @forelse($kbs as $kb)
                            <article
                                class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow">
                                <div class="md:flex">
                                    @if($kb->thumbnail)
                                        <div class="md:w-1/3">
                                            <img src="{{ asset($kb->thumbnail) }}" alt="{{ $kb->title }}"
                                                class="w-full h-full object-cover">
                                        </div>
                                    @endif
                                    <div class="p-6 {{ $kb->thumbnail ? 'md:w-2/3' : 'w-full' }}">
                                        <div class="flex items-center mb-2">
                                            <span
                                                class="bg-blue-100 text-blue-800 text-xs font-semibold px-2 py-1 rounded mr-2">
                                                {{ $kb->category->name }}
                                            </span>
                                            <span class="text-gray-500 text-sm">
                                                <i class="far fa-clock mr-1"></i>
                                                {{ $kb->published_at->format('M d, Y') }}
                                            </span>
                                        </div>
                                        <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $kb->title }}</h3>
                                        <p class="text-gray-600 mb-4">{{ Str::limit(strip_tags($kb->content), 150) }}</p>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <img src="https://ui-avatars.com/api/?name={{ urlencode($kb->user->name) }}&background=random"
                                                    alt="Author" class="w-8 h-8 rounded-full mr-2">
                                                <span class="text-sm text-gray-600">{{ $kb->user->name }}</span>
                                            </div>
                                            <a href="{{ route('single-kb', $kb->slug) }}"
                                                class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center transition-colors">
                                                Read Article <i class="fas fa-chevron-right ml-1 text-sm"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @empty
                            <div class="bg-white rounded-xl shadow-md p-6 text-center">
                                <p class="text-gray-600">No knowledge base articles found. Check back later!</p>
                            </div>
                        @endforelse
                    </div>

                    <!-- Pagination -->
                    @if($kbs->hasPages())
                        <div class="mt-10">
                            {{ $kbs->appends(request()->query())->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Inline JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Category filter animation
            const categoryLinks = document.querySelectorAll('.sidebar ul li a');
            categoryLinks.forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();

                    // Remove active class from all links
                    categoryLinks.forEach(l => {
                        l.classList.remove('bg-blue-50', 'text-blue-700');
                        l.classList.add('hover:bg-gray-100');
                    });

                    // Add active class to clicked link
                    this.classList.add('bg-blue-50', 'text-blue-700');
                    this.classList.remove('hover:bg-gray-100');

                    // In a real implementation, this would filter the articles
                    alert(`Filtering by category: ${this.textContent.trim()}`);
                });
            });

        });
    </script>
</x-user-layout>

