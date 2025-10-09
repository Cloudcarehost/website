<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ isset($blog) ? 'Edit Blog Post' : 'Create New Blog Post' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('blogs.update', $blog->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 gap-6">
                            <!-- Title -->
                            <div>
                                <label for="title"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">Title</label>
                                <input type="text" name="title" id="title"
                                    value="{{ old('title', $blog->title ?? '') }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300"
                                    required>
                                @error('title')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Type: Blog or KB -->
                            <div>
                                <label for="type" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Type</label>
                                <select name="type" id="type"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
                                    <option value="blog" {{ old('type', $blog->type ?? 'blog') == 'blog' ? 'selected' : '' }}>Blog</option>
                                    <option value="kb"   {{ old('type', $blog->type ?? '') == 'kb' ? 'selected' : '' }}>Knowledge Base (KB)</option>
                                </select>
                                @error('type') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                            </div>

                            <!-- Category -->
                            <div>
                                <label for="category_id"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">Category</label>
                                <select name="category_id" id="category_id"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300"
                                    required>
                                    <option value="">Select a category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id', $blog->category_id ?? '') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="thumbnail"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">Thumbnail</label>
                                @if(isset($blog) && $blog->thumbnail)
                                    <div class="mt-2">
                                        <img src="{{ asset($blog->thumbnail) }}" alt="Current thumbnail"
                                            class="h-32 w-auto rounded-md">
                                    </div>
                                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Current thumbnail</p>
                                @endif
                                <input type="file" name="thumbnail" id="thumbnail" class="mt-1 block w-full text-sm text-gray-500 dark:text-gray-400
                                                          file:mr-4 file:py-2 file:px-4
                                                          file:rounded-md file:border-0
                                                          file:text-sm file:font-semibold
                                                          file:bg-indigo-50 file:text-indigo-700 dark:file:bg-indigo-900 dark:file:text-indigo-200
                                                          hover:file:bg-indigo-100 dark:hover:file:bg-indigo-800">
                                @error('thumbnail')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Content -->
                            <div>
                                <label for="content"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">Content</label>
                                <textarea name="data" id="editor" rows="10" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm
                                                            focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700
                                                            dark:border-gray-600 dark:text-gray-300">
                                                            {{ old('data', $blog->content ?? '') }}
                                                        </textarea>
                                @error('data')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Publish Date -->
                            <div>
                                <label for="published_at"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">Publish Date
                                    (Leave empty to save as draft)</label>
                                <input type="datetime-local" name="published_at" id="published_at"
                                    value="{{ old('published_at', isset($blog) && $blog->published_at ? $blog->published_at->format('Y-m-d\TH:i') : '') }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
                                @error('published_at')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- SEO Fields -->
                            <div class="border-t border-gray-200 dark:border-gray-700 pt-4">
                                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">SEO Settings</h3>

                                <!-- Meta Title -->
                                <div class="mb-4">
                                    <label for="meta_title"
                                        class="block text-sm font-medium text-gray-700 dark:text-gray-300">Meta
                                        Title</label>
                                    <input type="text" name="meta_title" id="meta_title"
                                        value="{{ old('meta_title', $blog->meta_title ?? '') }}"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
                                    @error('meta_title')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Meta Description -->
                                <div>
                                    <label for="meta_description"
                                        class="block text-sm font-medium text-gray-700 dark:text-gray-300">Meta
                                        Description</label>
                                    <textarea name="meta_description" id="meta_description" rows="2"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">{{ old('meta_description', $blog->meta_description ?? '') }}</textarea>
                                    @error('meta_description')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex justify-end">
                                <a href="{{ route('dashboard') }}"
                                    class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium py-2 px-4 rounded-md mr-2 transition duration-300 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-gray-300">
                                    Cancel
                                </a>
                                <button type="submit"
                                    class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-md transition duration-300">
                                    {{ isset($blog) ? 'Update' : 'Create' }} Blog Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
</x-app-layout>
