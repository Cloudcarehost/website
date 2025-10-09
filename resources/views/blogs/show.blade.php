<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $blog->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if($blog->thumbnail)
                        <div class="mb-6">
                            <img src="{{ asset('storage/' . $blog->thumbnail) }}" alt="{{ $blog->title }}"
                                class="w-full h-auto rounded-lg">
                        </div>
                    @endif

                    <div class="flex items-center text-sm text-gray-500 dark:text-gray-400 mb-6">
                        <span class="mr-4">Posted {{ $blog->created_at->diffForHumans() }}</span>
                        <span
                            class="px-2 py-1 bg-indigo-100 text-indigo-800 rounded-full text-xs dark:bg-indigo-900 dark:text-indigo-200">
                            {{ $blog->category->name }}
                        </span>
                    </div>

                    <div class="prose dark:prose-invert max-w-none">
                        {!! $blog->content !!}
                    </div>

                    <div class="mt-12 pt-6 border-t border-gray-200 dark:border-gray-700">
                        <a href="{{ route('dashboard') }}"
                            class="text-indigo-600 hover:text-indigo-800 dark:text-indigo-400 dark:hover:text-indigo-300">
                            &larr; Back to all blogs
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>