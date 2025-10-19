<x-hosting-layout title="High Availability Cloud Provider"
    description="Step into the online world with hosting optimized for performance and user-friendliness.">
    @section('title', 'Node.js Hosting | Fast & Scalable App Hosting - CloudCareHost')
    @section('meta_description', 'Deploy and scale your Node.js apps with SSD storage, high-speed servers, and 24/7 support. Reliable Node.js hosting for developers and businesses.')
    @section('meta_keywords', 'node.js hosting, node.js server hosting, scalable node hosting, deploy node apps, fast node.js hosting, affordable node.js hosting')
    @section('meta_author', 'Cloud Care Host')

    <div class="mb-12">

        <!-- Hero Section -->
        <section class="bg-gradient-to-br from-gray-50 to-indigo-50 py-18 relative overflow-hidden">
            <div
                class="container max-w-screen-xl mx-auto mx-auto mx-auto px-4 flex flex-col lg:flex-row lg:space-x-4 items-center">
                <div class="lg:w-1/2 mb-12 lg:mb-0 text-center lg:text-left animate__animated animate__fadeInDown">
                    <h1 class="text-3xl md:text-5xl font-bold font-montserrat text-gray-900 mb-6 leading-tight">
                        Blazing Fast & Developer-Friendly</h1>
                    <h1>Up to 75% Off on the Fastest Node.js Hosting</h1>
                    <p class="text-lg text-gray-600 mb-8 animate__animated animate__fadeInDown animate__delay-1s">

                        Experience lightning-fast performance, seamless app deployment, and expert support built for
                        JavaScript developers worldwide. Perfect for production apps, testing environments, or
                        high-traffic projects.

                    </p>

                    <!-- <div class="max-w-lg mx-auto lg:mx-0 mb-6 animate__animated animate__fadeInUp animate__delay-1s">
                    <form class="flex flex-col sm:flex-row gap-0 sm:gap-0 shadow-xl rounded-lg overflow-hidden">
                        <input type="text" placeholder="Find your perfect domain name..."
                            class="flex-grow px-5 py-4 focus:outline-none text-gray-700">
                        <button type="submit"
                            class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-4 font-medium transition-colors">Search</button>
                    </form>
                </div> -->

                    <div
                        class="flex flex-wrap justify-center mb-8 lg:justify-start gap-3 animate__animated animate__fadeIn animate__delay-2s">
                        <span class="bg-white px-4 py-2 rounded-full text-sm font-medium shadow-sm">
                            Instant Node.js App Deployment</span>
                        <span class="bg-white px-4 py-2 rounded-full text-sm font-medium shadow-sm">
                            Latest Versions: 16.x, 18.x, 20.x, 22.x, 24.x</span>
                        <span class="bg-white px-4 py-2 rounded-full text-sm font-medium shadow-sm">Git Integration for
                            Seamless Deployments</span>

                        <span class="bg-white px-4 py-2 rounded-full text-sm font-medium shadow-sm">Full Terminal & SSH
                            Access</span>
                        <span class="bg-white px-4 py-2 rounded-full text-sm font-medium shadow-sm">Expert Node.js
                            Support 24×7</span>
                        <!-- <span class="bg-white px-4 py-2 rounded-full text-sm font-medium shadow-sm">cPanel + WHM</span> -->

                    </div>

                    <a href="#plansData"
                        class="block w-47 bg-indigo-500 hover:bg-indigo-600 text-white text-center py-2 px-4 rounded-lg font-medium transition-colors">
                        View Hosting Plans
                    </a>
                </div>

                <div class="lg:w-1/2 animate__animated animate__fadeInRight animate__delay-1s">
                    <img src="{{ asset('images/vps.png') }}" alt="Cloud Hosting Illustration"
                        class="max-w-full animate-float">
                </div>
            </div>
        </section>

        <!-- Billing Toggle -->
        <section class="bg-white py-20">
            <div id="plansData" class="container max-w-screen-xl mx-auto px-4">
                <h2 class="text-3xl md:text-4xl font-bold font-montserrat text-center mb-4">Host Your Node.js Apps
                    Without Limits</h2>
                <p class="text-gray-500 text-lg text-center max-w-2xl mx-auto mb-8">
                    Experience lightning-fast performance, full control, and rock-solid reliability. CloudCareHost gives
                    developers the freedom and support to focus on building, not troubleshooting.
                </p>

                <div class="flex justify-center mb-8">
                    <div class="inline-flex items-center bg-gray-100 rounded-lg p-1 billing-toggle">
                        <button data-period="monthly"
                            class="px-4 py-2 rounded-md font-medium billing-btn bg-indigo-600 text-white">Monthly</button>
                        <button data-period="annually"
                            class="px-4 py-2 rounded-md font-medium billing-btn bg-gray-200 text-gray-700">
                            Yearly (Save {{ $data[0]->usd_discounted_annually }}%)
                        </button>
                        <button data-period="biennially"
                            class="px-4 py-2 rounded-md font-medium billing-btn bg-gray-200 text-gray-700">
                            2 Years (Save {{ $data[0]->usd_discounted_biennially }}%)
                        </button>
                        <button data-period="triennially"
                            class="px-4 py-2 rounded-md font-medium billing-btn bg-gray-200 text-gray-700">
                            3 Years (Save {{ $data[0]->usd_discounted_triennially }}%)
                        </button>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($data as $plan)
                        <div class="plan-card" data-plan="{{ $plan->slug2 }}">
                            <div
                                class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden transition-all hover:shadow-lg hover:border-indigo-300">
                                <div class="p-6">
                                    <div class="flex justify-between items-start mb-4">
                                        <h3 class="text-xl font-bold">{{ $plan->name }}</h3>
                                        @if($loop->first)
                                            <span
                                                class="bg-indigo-100 text-indigo-800 text-xs font-semibold px-2.5 py-0.5 rounded">Popular</span>
                                        @elseif($loop->index == 1)
                                            <span
                                                class="bg-indigo-100 text-indigo-800 text-xs font-semibold px-2.5 py-0.5 rounded">BEST
                                                VALUE</span>
                                        @endif
                                    </div>

                                    <!-- Discount Badge - Only show for non-monthly periods -->
                                    <div
                                        class="bg-red-500 text-white text-sm font-bold px-3 py-1 rounded-full inline-block mb-3 discount-badge hidden">
                                        Save <span class="discount-percent">{{ $plan->usd_discounted_annually }}</span>%
                                    </div>

                                    <div class="mb-6">
                                        <div class="text-3xl font-bold mb-1">
                                            <span class="plan-price" data-monthly="{{ $plan->usd_monthly }}"
                                                data-annually="{{ $plan->usd_annually }}"
                                                data-biennially="{{ $plan->usd_biennially }}"
                                                data-triennially="{{ $plan->usd_triennially }}"
                                                data-curr="{{ $plan->usd_prefix }}">{{ $plan->usd_prefix }}{{ $plan->usd_monthly }}</span>
                                            <span class="text-sm font-normal text-gray-500">/mo</span>
                                        </div>
                                        <p class="text-sm text-gray-500 plan-total" data-monthly="Billed monthly"
                                            data-annually="{{ $plan->usd_prefix }}{{ $plan->usd_annually }} billed yearly"
                                            data-biennially="{{ $plan->usd_prefix }}{{ $plan->usd_biennially }} billed every 2 years"
                                            data-triennially="{{ $plan->usd_prefix }}{{ $plan->usd_triennially }} billed every 3 years">
                                            Billed monthly
                                        </p>
                                        <div class="text-xs text-gray-400 line-through mt-1 original-price" data-monthly=""
                                            data-annually="Originally {{ $plan->usd_prefix }}{{ number_format($plan->usd_monthly * 12, 2) }}"
                                            data-biennially="Originally {{ $plan->usd_prefix }}{{ number_format($plan->usd_monthly * 24, 2) }}"
                                            data-triennially="Originally {{ $plan->usd_prefix }}{{ number_format($plan->usd_monthly * 36, 2) }}">
                                        </div>
                                    </div>

                                    <ul class="space-y-2 mb-6">
                                        @php
                                            $features = json_decode($plan->features_json);
                                        @endphp
                                        @foreach($features as $feature)
                                            <li class="flex items-start">
                                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2 text-sm"></i>
                                                <span>{{ $feature }}</span>
                                            </li>
                                        @endforeach
                                    </ul>

                                    <a href="{{ $plan->product_url }}"
                                        class="block w-full bg-indigo-600 hover:bg-indigo-700 text-white text-center py-2 px-4 rounded-lg font-medium transition-colors">
                                        Get Started
                                    </a>

                                    <!-- Other Billing Options -->
                                    <div class="mt-4 text-xs text-gray-500">
                                        <div class="flex justify-between py-1 border-b border-gray-100">
                                            <span>2 Years</span>
                                            <span class="font-medium">{{ $plan->usd_prefix }}{{ $plan->usd_biennially }} <span
                                                    class="text-red-500">({{ $plan->usd_discounted_biennially }}%
                                                    OFF)</span></span>
                                        </div>
                                        <div class="flex justify-between py-1">
                                            <span>3 Years</span>
                                            <span class="font-medium">{{ $plan->usd_prefix }}{{ $plan->usd_triennially }} <span
                                                    class="text-red-500">({{ $plan->usd_discounted_triennially }}%
                                                    OFF)</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const billingButtons = document.querySelectorAll('.billing-btn');
                const defaultPeriod = 'monthly';

                // Function to safely get element or return null
                function safeQuerySelector(selector, parent = document) {
                    try {
                        return parent.querySelector(selector);
                    } catch (e) {
                        console.error('Error selecting element:', e);
                        return null;
                    }
                }

                // Function to update all plan prices
                function updatePrices(period) {
                    // Update button styles
                    billingButtons.forEach(btn => {
                        if (btn && btn.dataset.period === period) {
                            btn.classList.remove('bg-gray-200', 'text-gray-700');
                            btn.classList.add('bg-indigo-600', 'text-white');
                        } else if (btn) {
                            btn.classList.remove('bg-indigo-600', 'text-white');
                            btn.classList.add('bg-gray-200', 'text-gray-700');
                        }
                    });

                    // Update plan prices - safely handle cases where elements might not exist
                    const planCards = document.querySelectorAll('.plan-card');

                    planCards.forEach(card => {
                        if (!card) return;

                        const priceElement = safeQuerySelector('.plan-price', card);
                        const totalElement = safeQuerySelector('.plan-total', card);
                        const originalPriceElement = safeQuerySelector('.original-price', card);
                        const discountBadge = safeQuerySelector('.discount-badge', card);

                        // Check if all required elements exist
                        if (!priceElement || !totalElement || !originalPriceElement || !discountBadge) {
                            console.warn('Missing pricing elements in plan card');
                            return;
                        }

                        // Get the price data from data attributes

                        const curr = priceElement.dataset.curr;
                        const monthlyPrice = parseFloat(priceElement.dataset.monthly);
                        const periodPrice = parseFloat(priceElement.dataset[period]);
                        console.log("Hitesh", curr);
                        // Validate prices
                        if (isNaN(monthlyPrice) || isNaN(periodPrice)) {
                            console.error('Invalid price data for period:', period);
                            return;
                        }

                        // Calculate the equivalent monthly price for display
                        let months = 1;
                        if (period === 'annually') months = 12;
                        if (period === 'biennially') months = 24;
                        if (period === 'triennially') months = 36;

                        const equivalentMonthlyPrice = (periodPrice / months).toFixed(2);

                        // Update the displayed price
                        priceElement.textContent = `${curr}${equivalentMonthlyPrice}`;

                        // Update the billing description
                        if (totalElement.dataset[period]) {
                            totalElement.textContent = totalElement.dataset[period];
                        }

                        // Update the original price if applicable
                        if (originalPriceElement.dataset[period]) {
                            originalPriceElement.textContent = originalPriceElement.dataset[period];
                        } else {
                            originalPriceElement.textContent = '';
                        }

                        // Show/hide discount badge for non-monthly periods
                        if (period === 'monthly') {
                            discountBadge.classList.add('hidden');
                        } else {
                            // Calculate the actual discount percentage
                            const fullPrice = monthlyPrice * months;
                            const discountPercent = Math.round((1 - (periodPrice / fullPrice)) * 100);

                            const discountPercentElement = safeQuerySelector('.discount-percent', discountBadge);
                            if (discountPercentElement) {
                                discountPercentElement.textContent = discountPercent;
                            }

                            discountBadge.classList.remove('hidden');
                        }
                    });
                }

                // Set up click events for billing period buttons
                billingButtons.forEach(button => {
                    if (button) {
                        button.addEventListener('click', function () {
                            const period = this.dataset.period;
                            updatePrices(period);
                        });
                    }
                });

                // Initialize with default period only if we have billing buttons
                if (billingButtons.length > 0) {
                    updatePrices(defaultPeriod);
                }
            });

            // Handle currency API errors gracefully
            if (typeof loadCurrencies === 'function') {
                // Wrap the currency loading in a try-catch
                try {
                    loadCurrencies();
                } catch (e) {
                    console.error('Error loading currencies:', e);
                    // You might want to hide currency switcher or show a message
                    const currencySwitcher = document.querySelector('.currency-switcher');
                    if (currencySwitcher) {
                        currencySwitcher.style.display = 'none';
                    }
                }
            }
        </script>
        <style>
            .discount-badge.hidden {
                display: none !important;
            }
        </style>

        <!-- Section 1: Hero/Intro Section -->
        <section class="py-16 bg-gradient-to-r from-blue-900 to-purple-900 text-white">
            <div class="container mx-auto px-4 max-w-6xl">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-10 md:mb-0">
                        <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">Deploy Your Node.js App
                            Effortlessly</h1>
                        <p class="text-lg md:text-xl mb-8 text-blue-100">CloudCareHost makes Node.js hosting simple and
                            powerful. Upload your app or connect from Git, install dependencies in a few clicks, and get
                            your project live instantly. Enjoy blazing-fast performance, full control, and built-in
                            tools like PM2, SSL, and caching, all designed so you can focus on building, not
                            configuring.</p>
                        <button
                            class="bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-8 rounded-lg transition duration-300 transform hover:scale-105">Get
                            Started Now</button>
                    </div>
                    <div class="md:w-1/2 flex justify-center">
                        <div class="bg-blue-800 rounded-xl p-8 w-full max-w-md">
                            <div class="bg-blue-700 rounded-lg p-6 mb-4">
                                <div class="flex items-center mb-4">
                                    <div class="w-3 h-3 rounded-full bg-red-500 mr-2"></div>
                                    <div class="w-3 h-3 rounded-full bg-yellow-500 mr-2"></div>
                                    <div class="w-3 h-3 rounded-full bg-green-500"></div>
                                </div>
                                <div class="bg-black rounded p-4 font-mono text-sm text-green-400">
                                    <p>$ npm start</p>
                                    <p class="text-white">Server running on port 3000</p>
                                    <p class="text-gray-500">> Your app is live!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: Features Section -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4 max-w-6xl">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-800">Developer-Friendly Hosting
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Feature 1 -->
                    <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition duration-300">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-800">Quick Deployment</h3>
                        <p class="text-gray-600">Get your app live in just a few clicks.</p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition duration-300">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-800">Full Control</h3>
                        <p class="text-gray-600">SSH access and terminal commands let you manage your environment.</p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition duration-300">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-800">Git Ready</h3>
                        <p class="text-gray-600">Connect GitHub, GitLab, and deploy instantly.</p>
                    </div>

                    <!-- Feature 4 -->
                    <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition duration-300">
                        <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-800">Flexible Management</h3>
                        <p class="text-gray-600">Switch Node.js versions, define custom startup files, and monitor logs
                            in real-time.</p>
                    </div>

                    <!-- Feature 5 -->
                    <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition duration-300">
                        <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-800">Expert Support</h3>
                        <p class="text-gray-600">24/7 help from Node.js specialists whenever you need it.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3: Why Choose Us Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4 max-w-6xl">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-10 md:mb-0">
                        <h2 class="text-3xl md:text-4xl font-bold mb-6 text-gray-800">Why Developers Choose Our Node.js
                            Hosting</h2>
                        <p class="text-lg text-gray-600 mb-8">We are not just another hosting provider; we are your
                            performance partner. With full-stack control, rock-solid security, and speeds that keep up
                            with your ideas, we make sure your apps run like a dream.</p>

                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="bg-green-100 rounded-full p-2 mr-4 mt-1">
                                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-800 mb-1">Faster Load Times, Happier Users</h3>
                                    <p class="text-gray-600">Our caching tech makes your app load in a flash, keeping
                                        visitors and search engines happy.</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-blue-100 rounded-full p-2 mr-4 mt-1">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-800 mb-1">Security You Don't Have to Think About</h3>
                                    <p class="text-gray-600">Every plan comes with free SSL, so your site is safe and
                                        trusted right from the start.</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-purple-100 rounded-full p-2 mr-4 mt-1">
                                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-800 mb-1">Storage That Keeps Up With You</h3>
                                    <p class="text-gray-600">NVMe/SSD drives mean your data moves fast, no waiting
                                        around.</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-red-100 rounded-full p-2 mr-4 mt-1">
                                    <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-800 mb-1">Protection on Autopilot</h3>
                                    <p class="text-gray-600">A smart firewall works in the background to stop hackers
                                        before they cause trouble.</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-yellow-100 rounded-full p-2 mr-4 mt-1">
                                    <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-800 mb-1">Your Safety Net</h3>
                                    <p class="text-gray-600">Daily backups mean you can roll back and recover anytime if
                                        something goes wrong.</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-indigo-100 rounded-full p-2 mr-4 mt-1">
                                    <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-800 mb-1">Go Live in Seconds</h3>
                                    <p class="text-gray-600">One click and your Node.js app is online, no tech
                                        headaches, no wasted time.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="md:w-1/2 flex justify-center">
                        <div
                            class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-xl p-8 w-full max-w-md border border-blue-100">
                            <div class="text-center mb-6">
                                <div
                                    class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-800">Ready to Get Started?</h3>
                            </div>

                            <div class="space-y-4">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-700">Free Website Migration</span>
                                </div>

                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-700">24×7 Live Chat, Email, & Phone Support</span>
                                </div>

                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-700">Extensive Node.js Knowledge Base</span>
                                </div>
                            </div>

                            <button
                                class="w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-bold py-3 px-4 rounded-lg mt-8 transition duration-300">Start
                                Building with CloudCareHost Node.js Hosting</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <div class="bg-white rounded-xl shadow-md p-8 px-18">
            <h2 class="text-3xl font-bold font-montserrat mb-8 text-center">Frequently Asked Questions</h2>

            <div class="space-y-4">
                <div class="border-b border-gray-200 pb-4">
                    <button class="flex justify-between items-center w-full text-left font-medium faq-toggle">
                        <span>What makes Node.js hosting different from regular hosting?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p> Node.js hosting is designed for JavaScript apps, offering features like background process
                            handling, multiple version switching, PM2 process management, and real-time monitoring.</p>
                    </div>
                </div>

                <div class="border-b border-gray-200 pb-4">
                    <button class="flex justify-between items-center w-full text-left font-medium faq-toggle">
                        <span>Can I host multiple apps on one plan?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p>Yes, our plans support multiple Node.js apps from a single dashboard.</p>
                    </div>
                </div>

                <div class="border-b border-gray-200 pb-4">
                    <button class="flex justify-between items-center w-full text-left font-medium faq-toggle">
                        <span>Which Node.js versions do you support?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p>We support all major versions, including 11, 12, 14, 16, 18, 19, 20, 22, and 24.</p>
                    </div>
                </div>

                <div class="border-b border-gray-200 pb-4">
                    <button class="flex justify-between items-center w-full text-left font-medium faq-toggle">
                        <span>Do you offer free migrations?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p>Yes, we provide free migrations with no downtime, even for complex apps.</p>
                    </div>
                </div>

                <div class="border-b border-gray-200 pb-4">
                    <button class="flex justify-between items-center w-full text-left font-medium faq-toggle">
                        <span>Is Node.js hosting right for me?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p>Node.js hosting is ideal if you require speed, scalability, and real-time performance for
                            applications such as chatbots, APIs, or live streaming.</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Blog Section -->
        <section class="bg-gray-50 py-20">
            <div class="container max-w-screen-xl mx-auto px-4">
                <!-- Heading + Button -->
                <div class="flex justify-between items-center mb-10">
                    <h2 class="text-2xl md:text-3xl font-bold">Find out About VPS Web Hosting Tips</h2>
                    <a href="{{ url('/articles') }}"
                        class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg transition">
                        View all posts
                    </a>
                </div>

                <!-- Cards Grid -->
                @if($blogs->isNotEmpty())
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                        @foreach($blogs as $blog)
                            <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition">
                                <img src="{{ asset($blog->thumbnail) }}" alt="{{ $blog->title }}"
                                    class="w-full h-40 object-cover">
                                <div class="p-5">
                                    <p class="text-sm text-gray-400 font-semibold">CloudCareHost</p>

                                    <h3 class="text-lg font-semibold mb-2">
                                        @php
        $path = $blog->type === 'blog'
            ? 'single-articles/' . $blog->slug
            : ($blog->type === 'kb'
                ? 'knowledge-base/' . $blog->slug
                : '#');
                                        @endphp
                                        <a href="{{ url($path) }}" class="hover:text-blue-600">
                                            {{ Str::limit($blog->title, 70) }}
                                        </a>
                                    </h3>

                                    <span class="text-gray-500 text-sm">
                                        {{-- Example: You can fetch category name if you join categories --}}
                                        {{ $blog->type ?? 'General' }}
                                    </span>
                                </div>
                            </div>
                        @endforeach

                    </div>
                @endif
            </div>
        </section>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // FAQ toggle functionality
                const faqToggles = document.querySelectorAll('.faq-toggle');

                faqToggles.forEach(toggle => {
                    toggle.addEventListener('click', function () {
                        const content = this.parentElement.querySelector('.faq-content');
                        const icon = this.querySelector('i');
                        content.classList.toggle('hidden');
                        icon.classList.toggle('rotate-180');
                    });
                });
            });
        </script>
</x-hosting-layout>