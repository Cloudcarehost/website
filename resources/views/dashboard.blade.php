<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Pricing Plans Section -->
            <div class="bg-white p-4 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-semibold">Reset Plans Pricing --</h2>
                        <div class="flex justify-between items-center mb-6">
                            <!-- <h2 class="text-2xl font-semibold">Reset Plans Pricing</h2> -->
                            <a href="{{ route('plans.getPlansData') }}"
                                class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-md transition duration-300 flex items-center">
                                Reset
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Pricing Plans Section -->
            <div class="bg-white p-4 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-semibold">Reset Plans Pricing</h2>
                        <button id="resetPlansBtn"
                                class="inline-flex items-center bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-md transition duration-300"
                                type="button">
                            <svg id="resetSpinner" class="animate-spin -ml-1 mr-2 h-5 w-5 hidden"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10"
                                        stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                      d="M4 12a8 8 0 018-8v4l3-3-3-3v4a8 8 0 10-8 10z"></path>
                            </svg>
                            <span id="resetBtnText">Reset</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Result Modal -->
            <div id="plansResultModal" class="fixed inset-0 z-50 hidden items-center justify-center px-4">
                <div class="absolute inset-0 bg-black opacity-50"></div>
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-xl max-w-lg w-full z-10 p-6">
                    <div class="flex items-start justify-between">
                        <h3 id="modalTitle" class="text-lg font-semibold text-gray-900 dark:text-gray-100">Sync Result</h3>
                        <button id="closeModal" class="text-gray-500 hover:text-gray-700 dark:text-gray-400">&times;</button>
                    </div>
                    <div class="mt-4 text-sm text-gray-700 dark:text-gray-300">
                        <p id="modalMessage">Processing...</p>
                        <div id="modalCounts" class="mt-4 hidden">
                            <ul class="space-y-1">
                                <li><strong>Inserted:</strong> <span id="countInserted">0</span></li>
                                <li><strong>Updated:</strong> <span id="countUpdated">0</span></li>
                                <li><strong>Total processed:</strong> <span id="countTotal">0</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-6 text-right">
                        <button id="modalOkBtn"
                                class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-md">
                            OK
                        </button>
                    </div>
                </div>
            </div>

            <!-- Content Management Section -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-6">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-semibold">Content Management</h2>
                        <div class="flex space-x-2">
                            <a href="{{ route('blogs.create') }}?type=blog"
                               class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-md">
                                Create Blog
                            </a>
                            <a href="{{ route('blogs.create') }}?type=kb"
                               class="bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-md">
                                Create KB
                            </a>
                        </div>
                    </div>

                    <!-- Search & Filters -->
                    <div class="mb-6 bg-gray-100 dark:bg-gray-700 p-4 rounded-lg">
                        <form action="{{ route('dashboard') }}" method="GET"
                              class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label for="search"
                                       class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Search by Title</label>
                                <input type="text" name="search" id="search" value="{{ request('search') }}"
                                       class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-300">
                            </div>
                            <div>
                                <label for="category"
                                       class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Filter by Category</label>
                                <select name="category" id="category"
                                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-300">
                                    <option value="">All Categories</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex items-end">
                                <button type="submit"
                                        class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-md">
                                    Apply Filters
                                </button>
                                @if(request()->has('search') || request()->has('category'))
                                    <a href="{{ route('dashboard') }}"
                                       class="ml-2 text-indigo-600 hover:text-indigo-800 dark:text-indigo-400 dark:hover:text-indigo-300">
                                        Clear Filters
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>

                    <!-- BLOGS Section -->
                    <div class="mb-8" id="blogsSectionWrapper">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-semibold">Blog Posts</h3>
                            <button id="toggleBlogsBtn" aria-expanded="true"
                                    class="ml-4 inline-flex items-center justify-center h-7 w-7 rounded-full bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-200">
                                <span id="toggleBlogsIcon" class="text-sm font-bold">−</span>
                            </button>
                        </div>

                        <div id="blogsContent">
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                    <thead class="bg-gray-50 dark:bg-gray-700">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Title</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Category</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Status</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Created At</th>
                                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                    @forelse($blogs as $blog)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    @if($blog->thumbnail)
                                                        <div class="flex-shrink-0 h-10 w-10 mr-4">
                                                            <img class="h-10 w-10 rounded-md object-cover" src="{{ asset('storage/' . $blog->thumbnail) }}" alt="{{ $blog->title }}">
                                                        </div>
                                                    @endif
                                                    <div>
                                                        <div class="text-sm font-medium text-gray-900 dark:text-gray-100">
                                                            <a href="{{ route('blogs.show', $blog->slug) }}" class="hover:text-indigo-600 dark:hover:text-indigo-400">{{ $blog->title }}</a>
                                                        </div>
                                                        <div class="text-sm text-gray-500 dark:text-gray-400">
                                                            {{ Str::limit($blog->excerpt, 50) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-100 text-indigo-800 dark:bg-indigo-900 dark:text-indigo-200">
                                                    {{ $blog->category->name }}
                                                </span>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap">
                                                @if($blog->published_at && $blog->published_at <= now())
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">Published</span>
                                                @elseif($blog->published_at)
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200">Scheduled</span>
                                                @else
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300">Draft</span>
                                                @endif
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                {{ $blog->created_at->format('M d, Y') }}
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <div class="flex justify-end space-x-2">
                                                    <a href="{{ route('blogs.edit', $blog->id) }}" class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-300">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                                    </a>

                                                    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300">
                                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                                        </button>
                                                    </form>

                                                    <a href="{{ route('blogs.show', $blog->slug) }}" target="_blank" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="px-6 py-4 text-center text-sm text-gray-500 dark:text-gray-400">
                                                No blog posts found. <a href="{{ route('blogs.create') }}" class="text-indigo-600 hover:text-indigo-800 dark:text-indigo-400 dark:hover:text-indigo-300">Create one now</a>.
                                            </td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>

                            <div class="mt-6">
                                {{ $blogs->appends(request()->except(['blogs_page','kbs_page']))->links() }}
                            </div>
                        </div>
                    </div>

                    <!-- KB Section -->
                    <div class="mb-8" id="kbsSectionWrapper">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-semibold">Knowledge Base (KB)</h3>
                            <button id="toggleKbsBtn" aria-expanded="true"
                                    class="ml-4 inline-flex items-center justify-center h-7 w-7 rounded-full bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-200">
                                <span id="toggleKbsIcon" class="text-sm font-bold">−</span>
                            </button>
                        </div>

                        <div id="kbsContent">
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                    <thead class="bg-gray-50 dark:bg-gray-700">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Title</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Category</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Status</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Created At</th>
                                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                    @forelse($kbs as $kb)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    @if($kb->thumbnail)
                                                        <div class="flex-shrink-0 h-10 w-10 mr-4">
                                                            <img class="h-10 w-10 rounded-md object-cover" src="{{ asset('storage/' . $kb->thumbnail) }}" alt="{{ $kb->title }}">
                                                        </div>
                                                    @endif
                                                    <div>
                                                        <div class="text-sm font-medium text-gray-900 dark:text-gray-100">
                                                            <a href="{{ route('blogs.show', $kb->slug) }}" class="hover:text-indigo-600 dark:hover:text-indigo-400">{{ $kb->title }}</a>
                                                        </div>
                                                        <div class="text-sm text-gray-500 dark:text-gray-400">
                                                            {{ Str::limit($kb->excerpt, 50) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-100 text-indigo-800 dark:bg-indigo-900 dark:text-indigo-200">
                                                    {{ $kb->category->name }}
                                                </span>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap">
                                                @if($kb->published_at && $kb->published_at <= now())
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">Published</span>
                                                @elseif($kb->published_at)
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200">Scheduled</span>
                                                @else
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300">Draft</span>
                                                @endif
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                {{ $kb->created_at->format('M d, Y') }}
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <div class="flex justify-end space-x-2">
                                                    <a href="{{ route('blogs.edit', $kb->id) }}" class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-300">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                                    </a>

                                                    <form action="{{ route('blogs.destroy', $kb->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this KB item?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300">
                                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                                        </button>
                                                    </form>

                                                    <a href="{{ route('blogs.show', $kb->slug) }}" target="_blank" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="px-6 py-4 text-center text-sm text-gray-500 dark:text-gray-400">
                                                No KB items found. <a href="{{ route('blogs.create') }}?type=kb" class="text-indigo-600 hover:text-indigo-800 dark:text-indigo-400 dark:hover:text-indigo-300">Create one now</a>.
                                            </td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>

                            <div class="mt-6">
                                {{ $kbs->appends(request()->except(['blogs_page','kbs_page']))->links() }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Elements
    const btn = document.getElementById('resetPlansBtn');
    if (!btn) return; // nothing to do

    const spinner = document.getElementById('resetSpinner');
    const btnText = document.getElementById('resetBtnText');
    const modal = document.getElementById('plansResultModal');
    const modalTitle = document.getElementById('modalTitle');
    const modalMessage = document.getElementById('modalMessage');
    const modalCounts = document.getElementById('modalCounts');
    const countInserted = document.getElementById('countInserted');
    const countUpdated = document.getElementById('countUpdated');
    const countTotal = document.getElementById('countTotal');
    const modalOkBtn = document.getElementById('modalOkBtn');
    const closeModal = document.getElementById('closeModal');

    const route = "{{ route('plans.getplansdata') }}";
    const token = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '{{ csrf_token() }}';

    function openModal(){ modal.classList.remove('hidden'); modal.classList.add('flex'); }
    function closeModalFn(){ modal.classList.remove('flex'); modal.classList.add('hidden'); }

    // Reset click
    btn.addEventListener('click', async (e) => {
        e.preventDefault();
        spinner.classList.remove('hidden');
        btn.setAttribute('disabled','disabled');
        btnText.textContent = 'Resetting...';
        modalMessage.textContent = 'Processing...';
        modalCounts.classList.add('hidden');

        try {
            const res = await fetch(route, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': token,
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({})
            });

            let json = null;
            try { json = await res.json(); } catch(e){}

            if (!res.ok) {
                modalTitle.textContent = 'Failed';
                modalMessage.textContent = json?.message || `Sync failed (HTTP ${res.status})`;
            } else if (json?.ok) {
                modalTitle.textContent = 'Success';
                modalMessage.textContent = 'Plans synced successfully.';
                countInserted.textContent = json.inserted ?? 0;
                countUpdated.textContent = json.updated ?? 0;
                countTotal.textContent = json.total_processed ?? ((json.inserted ?? 0) + (json.updated ?? 0));
                modalCounts.classList.remove('hidden');
            } else {
                modalTitle.textContent = 'Failed';
                modalMessage.textContent = json?.message || 'Unknown response from server.';
            }
        } catch (err) {
            console.error(err);
            modalTitle.textContent = 'Failed';
            modalMessage.textContent = 'Network error or request blocked.';
        } finally {
            spinner.classList.add('hidden');
            btn.removeAttribute('disabled');
            btnText.textContent = 'Reset';
            openModal();
        }
    });

    // Modal controls
    modalOkBtn.addEventListener('click', closeModalFn);
    closeModal.addEventListener('click', closeModalFn);
    document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModalFn(); });

    // Collapsible sections
    function setCollapsed(key, collapsed, contentEl, iconEl, btnEl) {
        if (!contentEl || !iconEl || !btnEl) return;
        if (collapsed) {
            contentEl.classList.add('hidden');
            iconEl.textContent = '+';
            btnEl.setAttribute('aria-expanded','false');
        } else {
            contentEl.classList.remove('hidden');
            iconEl.textContent = '−';
            btnEl.setAttribute('aria-expanded','true');
        }
        try { localStorage.setItem(key, collapsed ? '1' : '0'); } catch(e){}
    }

    const toggleBlogsBtn = document.getElementById('toggleBlogsBtn');
    const toggleBlogsIcon = document.getElementById('toggleBlogsIcon');
    const blogsContent = document.getElementById('blogsContent');
    const toggleKbsBtn = document.getElementById('toggleKbsBtn');
    const toggleKbsIcon = document.getElementById('toggleKbsIcon');
    const kbsContent = document.getElementById('kbsContent');

    // Initialize collapse state (default expanded)
    setCollapsed('dash_blogs_collapsed', localStorage.getItem('dash_blogs_collapsed') === '1', blogsContent, toggleBlogsIcon, toggleBlogsBtn);
    setCollapsed('dash_kbs_collapsed', localStorage.getItem('dash_kbs_collapsed') === '1', kbsContent, toggleKbsIcon, toggleKbsBtn);

    if (toggleBlogsBtn) {
        toggleBlogsBtn.addEventListener('click', () => {
            const collapsed = blogsContent.classList.contains('hidden');
            setCollapsed('dash_blogs_collapsed', !collapsed, blogsContent, toggleBlogsIcon, toggleBlogsBtn);
        });
    }

    if (toggleKbsBtn) {
        toggleKbsBtn.addEventListener('click', () => {
            const collapsed = kbsContent.classList.contains('hidden');
            setCollapsed('dash_kbs_collapsed', !collapsed, kbsContent, toggleKbsIcon, toggleKbsBtn);
        });
    }
});
</script>
