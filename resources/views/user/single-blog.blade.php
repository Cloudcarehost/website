<x-user-layout>
    <!-- Hero -->
    <section class="relative bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 py-16 md:py-24 overflow-hidden">
        <div class="absolute inset-0 opacity-10 max-w-screen-xl mx-auto">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0,0 L100,0 L100,100 L0,100 Z" fill="none" stroke="white" stroke-width="2" stroke-dasharray="5,5" />
            </svg>
        </div>

        <div class="container max-w-screen-xl mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <div class="flex justify-center mb-4">
                    <span class="bg-indigo-100 text-indigo-800 text-sm font-semibold px-3 py-1 rounded-full">{{ $blog->category->name }}</span>
                </div>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6">{{ $blog->title }}</h1>
                <p class="text-xl text-indigo-100 mb-6">{{ $blog->excerpt ?? Str::limit(strip_tags($blog->content), 100) }}</p>

                <div class="flex flex-col sm:flex-row justify-center items-center gap-4 text-indigo-100">
                    <div class="flex items-center">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode($blog->user->name) }}&background=random" alt="Author" class="w-10 h-10 rounded-full mr-3 border-2 border-white">
                        <span>{{ $blog->user->name }}</span>
                    </div>
                    <div class="flex items-center">
                        <i class="far fa-clock mr-2"></i>
                        <span>Published: {{ $blog->published_at->format('F j, Y') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-16">
        <div class="container max-w-screen-xl mx-auto px-4">
            <!-- Article -->
            <article class="max-w-4xl mx-auto" aria-labelledby="article-title">
                @if($blog->thumbnail)
                    <figure class="mb-10 rounded-2xl overflow-hidden shadow-lg transform hover:scale-[1.01] transition-transform duration-300">
                        <img src="{{ asset($blog->thumbnail) }}" alt="{{ $blog->title }}" class="w-full h-64 sm:h-80 md:h-96 object-cover" loading="lazy">
                        @if(!empty($blog->image_caption))
                            <figcaption class="text-sm text-gray-500 px-4 py-2 bg-white/70 backdrop-blur">{!! $blog->image_caption !!}</figcaption>
                        @endif
                    </figure>
                @endif

                <!-- Social Sharing -->
                <div class="flex flex-col sm:flex-row justify-between items-center mb-10 p-6 bg-gradient-to-r from-gray-50 to-indigo-50 rounded-2xl shadow-sm border border-gray-100">
                    <div class="mb-4 sm:mb-0">
                        <span class="text-gray-700 font-medium text-lg">Share this article:</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        @php
                            $currentUrl = urlencode(url()->current());
                            $title = urlencode($blog->title);
                            $thumb  = $blog->thumbnail ? urlencode(asset($blog->thumbnail)) : '';
                        @endphp

                        <!-- Facebook -->
                        <a
                            href="https://www.facebook.com/sharer/sharer.php?u={{ $currentUrl }}"
                            target="_blank" rel="noopener noreferrer"
                            class="w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center hover:bg-blue-700 transition-all duration-300 transform hover:scale-110 shadow-md focus:outline-none focus:ring-2 focus:ring-blue-300"
                            aria-label="Share on Facebook" title="Share on Facebook">
                            <i class="fab fa-facebook-f text-lg" aria-hidden="true"></i>
                        </a>

                        <!-- Twitter / X -->
                        <a
                            href="https://twitter.com/intent/tweet?url={{ $currentUrl }}&text={{ $title }}"
                            target="_blank" rel="noopener noreferrer"
                            class="w-12 h-12 rounded-full bg-sky-500 text-white flex items-center justify-center hover:bg-sky-600 transition-all duration-300 transform hover:scale-110 shadow-md focus:outline-none focus:ring-2 focus:ring-sky-300"
                            aria-label="Share on Twitter" title="Share on Twitter">
                            <i class="fab fa-twitter text-lg" aria-hidden="true"></i>
                        </a>

                        <!-- LinkedIn -->
                        <a
                            href="https://www.linkedin.com/sharing/share-offsite/?url={{ $currentUrl }}"
                            target="_blank" rel="noopener noreferrer"
                            class="w-12 h-12 rounded-full bg-indigo-900 text-white flex items-center justify-center hover:bg-indigo-800 transition-all duration-300 transform hover:scale-110 shadow-md focus:outline-none focus:ring-2 focus:ring-indigo-300"
                            aria-label="Share on LinkedIn" title="Share on LinkedIn">
                            <i class="fab fa-linkedin-in text-lg" aria-hidden="true"></i>
                        </a>

                        <!-- WhatsApp -->
                        <a
                            href="https://api.whatsapp.com/send?text={{ urlencode($blog->title . ' ' . url()->current()) }}"
                            target="_blank" rel="noopener noreferrer"
                            class="w-12 h-12 rounded-full bg-emerald-500 text-white flex items-center justify-center hover:bg-emerald-600 transition-all duration-300 transform hover:scale-110 shadow-md focus:outline-none focus:ring-2 focus:ring-emerald-300"
                            aria-label="Share on WhatsApp" title="Share on WhatsApp">
                            <i class="fab fa-whatsapp text-lg" aria-hidden="true"></i>
                        </a>

                        <!-- Email -->
                        <a
                            href="mailto:?subject={{ rawurlencode($blog->title) }}&body={{ rawurlencode(url()->current()) }}"
                            target="_blank" rel="noopener noreferrer"
                            class="w-12 h-12 rounded-full bg-rose-500 text-white flex items-center justify-center hover:bg-rose-600 transition-all duration-300 transform hover:scale-110 shadow-md focus:outline-none focus:ring-2 focus:ring-rose-300"
                            aria-label="Share by Email" title="Share by Email">
                            <i class="fas fa-envelope text-lg" aria-hidden="true"></i>
                        </a>

                        <!-- Pinterest -->
                        <a
                            href="https://pinterest.com/pin/create/button/?url={{ $currentUrl }}&media={{ $thumb }}&description={{ $title }}"
                            target="_blank" rel="noopener noreferrer"
                            class="w-12 h-12 rounded-full bg-red-600 text-white flex items-center justify-center hover:bg-red-700 transition-all duration-300 transform hover:scale-110 shadow-md focus:outline-none focus:ring-2 focus:ring-red-300"
                            aria-label="Share on Pinterest" title="Share on Pinterest">
                            <i class="fab fa-pinterest-p text-lg" aria-hidden="true"></i>
                        </a>
                    </div>

                </div>

                <!-- NOTEBOOK STYLE MAIN CONTENT -->
                <div class="notebook bg-white border border-gray-200 rounded-2xl shadow-sm p-8 prose prose-lg max-w-none">
                    {!! $blog->content !!}
                </div>

                <!-- Article Meta -->
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mt-10 p-6 bg-gray-50 rounded-2xl">
                    <div class="flex flex-wrap items-center gap-3 text-sm text-gray-600">
                        <span class="font-medium">Categories:</span>
                        <span class="px-3 py-1 rounded-full bg-white text-gray-700 border">{{ $blog->category->name }}</span>
                        @if(!empty($blog->tags))
                            @foreach(explode(',', $blog->tags) as $tag)
                                <span class="px-2 py-1 rounded text-xs bg-white text-gray-600 border">{{ trim($tag) }}</span>
                            @endforeach
                        @endif
                    </div>

                    <div class="text-sm text-gray-500 flex items-center">
                        <i class="far fa-clock mr-2"></i>
                        @php
                            $words = str_word_count(strip_tags($blog->content));
                            $minutes = max(1, round($words / 200));
                        @endphp
                        <span>{{ $minutes }} min read</span>
                    </div>
                </div>

                <!-- Footer helpful -->
                <div class="mt-12 pt-8 border-t border-gray-200">
                    <div class="flex flex-col sm:flex-row justify-between items-center gap-6">
                        <div class="flex flex-col sm:flex-row items-center gap-4">
                            <span class="text-gray-700 font-medium text-lg">Was this article helpful?</span>
                            <div class="flex space-x-2">
                                <button id="helpfulYes" type="button"
                                        class="flex items-center justify-center w-12 h-12 rounded-full bg-green-100 text-green-600 hover:bg-green-200 transition-all duration-300 transform hover:scale-110 border-2 border-green-200"
                                        title="Yes">
                                    <i class="fas fa-thumbs-up"></i>
                                </button>

                                <button id="helpfulNo" type="button"
                                        class="flex items-center justify-center w-12 h-12 rounded-full bg-red-100 text-red-600 hover:bg-red-200 transition-all duration-300 transform hover:scale-110 border-2 border-red-200"
                                        title="No">
                                    <i class="fas fa-thumbs-down"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Related Articles Section -->
            @if($relatedBlogs->count() > 0)
                <section class="mt-16">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <i class="fas fa-newspaper text-indigo-600"></i>
                        Related Articles
                    </h2>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($relatedBlogs as $related)
                            <a href="{{ route('single-articles', $related->slug) }}"
                               class="bg-white rounded-2xl shadow-md p-6 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100 group">
                                <div class="flex items-center mb-3">
                                    <span class="bg-indigo-100 text-indigo-800 text-xs font-semibold px-2 py-1 rounded">
                                        {{ $related->category->name }}
                                    </span>
                                </div>
                                <h3 class="font-semibold text-gray-800 mb-2 group-hover:text-indigo-600 transition-colors line-clamp-2">
                                    {{ $related->title }}
                                </h3>
                                <p class="text-sm text-gray-500 line-clamp-2">{{ Str::limit(strip_tags($related->content), 80) }}</p>
                                <div class="flex items-center text-xs text-gray-400 mt-3">
                                    <i class="far fa-clock mr-1"></i>
                                    <span>{{ $related->published_at->diffForHumans() }}</span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </section>
            @endif

            <!-- Support Section -->
            <section class="mt-16 bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl p-8 border border-indigo-200">
                <div class="text-center max-w-2xl mx-auto">
                    <div class="w-16 h-16 bg-indigo-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-headset text-white text-2xl"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-indigo-800 mb-2">Need More Help?</h2>
                    <p class="text-indigo-600 mb-6">Our support team is available 24/7 to assist you with any questions</p>
                    <a href="{{ route('contact') }}"
                       class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-3 rounded-lg font-medium transition-colors shadow-md">
                        Contact Support
                    </a>
                </div>
            </section>
        </div>
    </section>

    <!-- Thanks Modal - Fixed positioning and centering -->
    <div id="thanksModal" class="fixed inset-0 z-50 hidden items-center justify-center px-4 backdrop-blur-sm">
        <div class="absolute inset-0 bg-black/40" id="modalBackdrop"></div>
        <div  id="thanksModalContent" class="relative max-w-md w-full bg-white rounded-2xl shadow-xl p-6 transform transition-all duration-300 scale-95">
            <div class="flex items-start gap-4">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center text-green-600">
                        <i class="fas fa-check text-xl"></i>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-900">Thanks for your feedback</h3>
                    <p class="text-sm text-gray-600 mt-1">We really appreciate it 💙</p>
                </div>
            </div>
            <div class="mt-6 text-right">
                <button id="closeThanks" class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors font-medium">Close</button>
            </div>
        </div>
    </div>

    <style>
        .notebook {
            background: linear-gradient(180deg, #ffffff 0%, #fbfbfb 100%);
            border-left: 6px solid #f3f4f6;
            position: relative;
            margin-top: 0;
            margin-bottom: 2rem;
        }

        .notebook::before {
            content: "";
            position: absolute;
            inset: 0;
            /* modified: red lines, bolder */
            background-image: linear-gradient(to bottom, rgba(167, 164, 164, 0.15) 2px, transparent 2px);
            background-size: 100% 28px;
            pointer-events: none;
            mix-blend-mode: multiply;
            opacity: 0.9; /* modified */
        }

        .notebook .prose {
            line-height: 1.7;
            color: #374151;
        }

        .notebook .prose h2 {
            color: #1f2937;
            font-weight: 700;
            font-size: 1.5em;
            margin-top: 2em;
            margin-bottom: 1em;
            padding-bottom: 0.5em;
            border-bottom: 2px solid #e5e7eb;
        }

        .notebook .prose h3 {
            color: #374151;
            font-weight: 600;
            font-size: 1.25em;
            margin-top: 1.5em;
            margin-bottom: 0.75em;
        }

        .notebook .prose code {
            background-color: #f3f4f6;
            padding: 0.125em 0.375em;
            border-radius: 0.25em;
            font-size: 0.875em;
            color: #dc2626;
        }

        .notebook .prose pre {
            background-color: #1f2937;
            color: #f9fafb;
            padding: 1em;
            border-radius: 0.5em;
            overflow-x: auto;
            margin-bottom: 1.25em;
        }

        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .transition-all {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
            #thanksModal {
                display: none;
                align-items: center;
                justify-content: center;
            }
            #thanksModal.flex {
                display: flex;
            }
        #thanksModal > div:last-child {
            margin: auto;
        }

        @@supports (backdrop-filter: blur(10px)) {
            .backdrop-blur-sm {
                backdrop-filter: blur(4px);
            }
        }
    </style>

    <script>
        // Feedback functionality (replace existing functions)
        const helpfulYes = document.getElementById('helpfulYes');
        const helpfulNo = document.getElementById('helpfulNo');
        const thanksModal = document.getElementById('thanksModal');
        const thanksModalContent = document.getElementById('thanksModalContent');
        const closeThanks = document.getElementById('closeThanks');
        const modalBackdrop = document.getElementById('modalBackdrop');

        function showThanksModal() {
            if (!thanksModal || !thanksModalContent) return;
            // ensure visible
            thanksModal.classList.remove('hidden');
            thanksModal.classList.add('flex');
            // small tick to allow CSS transition
            setTimeout(() => {
                thanksModalContent.classList.remove('scale-95');
            }, 10);
        }

        function hideThanksModal() {
            if (!thanksModal || !thanksModalContent) return;
            // animate out
            thanksModalContent.classList.add('scale-95');
            // after animation, hide the modal container
            setTimeout(() => {
                thanksModal.classList.remove('flex');
                thanksModal.classList.add('hidden');
            }, 200); // match your CSS transition duration (200-300ms)
        }

        helpfulYes?.addEventListener('click', showThanksModal);
        helpfulNo?.addEventListener('click', showThanksModal);
        closeThanks?.addEventListener('click', hideThanksModal);

        // Click on backdrop to close
        modalBackdrop?.addEventListener('click', hideThanksModal);

        // Escape key closes
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !thanksModal.classList.contains('hidden')) {
                hideThanksModal();
            }
        });

    </script>
</x-user-layout>
