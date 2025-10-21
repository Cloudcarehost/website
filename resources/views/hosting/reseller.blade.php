<x-hosting-layout title="Reseller Hosting That Earns More, Costs Less"
    description="Step into the online world with hosting optimized for performance and user-friendliness.">
        @section('title', 'Reseller Hosting with WHM & cPanel | Start Your Hosting Business - CloudCareHost')
    @section('meta_description', 'Launch your hosting business with CloudCareHost reseller plans. Get WHM, cPanel, SSD storage, free SSL, daily backups, and 24/7 support under your own brand.')
    @section('meta_keywords', 'reseller hosting, white label reseller hosting, best reseller web hosting, affordable reseller hosting, reseller plans with whm cpanel, hosting business reseller')
    @section('meta_author', 'Cloud Care Host')
    
    <div class="mb-12">

        <!-- Hero Section -->
        <section class="bg-gradient-to-br from-gray-50 to-indigo-50 py-18 relative overflow-hidden">
            <div
                class="container max-w-screen-xl mx-auto mx-auto mx-auto px-4 flex flex-col lg:flex-row lg:space-x-4 items-center">
                <div class="lg:w-1/2 mb-12 lg:mb-0 text-center lg:text-left animate__animated animate__fadeInDown">
                    <h1 class="text-3xl md:text-5xl font-bold font-montserrat text-gray-900 mb-6 leading-tight">
                        Reseller Hosting That Earns More, Costs Less</h1>
                    <p class="text-lg text-gray-600 mb-8 animate__animated animate__fadeInDown animate__delay-1s">
                        Crush the competition. Build your brand. Earn big with our Reseller Hosting!
                        Enjoy white labeled solutions, blazing performance, and expert support all under your brand
                        name.
                    </p>

                    <div
                        class="flex flex-wrap justify-center mb-8 lg:justify-start gap-3 animate__animated animate__fadeIn animate__delay-2s">
                        <span class="bg-white px-4 py-2 rounded-full text-sm font-medium shadow-sm">
                            White-Labeled Hosting</span>
                        <span class="bg-white px-4 py-2 rounded-full text-sm font-medium shadow-sm">
                            SSD/NVMe-Powered Servers</span>
                        <span class="bg-white px-4 py-2 rounded-full text-sm font-medium shadow-sm">
                            Full cPanel & WHM Access</span>
                        <span class="bg-white px-4 py-2 rounded-full text-sm font-medium shadow-sm">
                            24/7 Expert Support</span>
                    </div>

                    <a href="#plansData"
                        class="block w-47 bg-indigo-500 hover:bg-indigo-600 text-white text-center py-2 px-4 rounded-lg font-medium transition-colors">
                        View Reseller Plans
                    </a>

                </div>

                <div class="lg:w-1/2 animate__animated animate__fadeInRight animate__delay-1s">
                    <img src="{{ asset('images/reseller.webp') }}" alt="Cloud Hosting Illustration"
                        class="max-w-full animate-float">
                </div>
            </div>
        </section>

        <!-- Billing Toggle -->
        <section class="bg-white py-20">
            <div id="plansData" class="container max-w-screen-xl mx-auto px-4">
                <h2 class="text-3xl md:text-4xl font-bold font-montserrat text-center mb-4">
                    Reseller Hosting for Entrepreneurs, Agencies, and Brands
                </h2>
                <p class="text-gray-500 text-lg text-center max-w-2xl mx-auto mb-6">
                    CloudCareHost empowers you to launch your own hosting business with ease. You focus on growing your
                    brand, we
                    provide the infrastructure, performance, and support.
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
                        console.log("Hitesh",curr);
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

        <section class="bg-white" style="font-family: 'Montserrat', sans-serif;">
            <div id="plansData" class="container max-w-screen-xl mx-auto px-4" style="padding: 2rem 0;">
                <h2 class="text-3xl md:text-4xl font-bold font-montserrat text-center mb-4"
                    style="color: #1f2937; letter-spacing: -0.5px;">
                    Reseller Hosting for Entrepreneurs, Agencies, and Brands
                </h2>
                <p class="text-gray-500 text-lg text-center max-w-2xl mx-auto mb-6" style="line-height: 1.6;">
                    CloudCareHost empowers you to launch your own hosting business with ease. You focus on growing your
                    brand, we provide the infrastructure, performance, and support.
                </p>
            </div>
            <div class="bg-gradient-to-r from-indigo-500 to-blue-600 text-white py-6"
                style="background: linear-gradient(90deg, #6366F1 0%, #3B82F6 100%);">
                <div class="container max-w-screen-xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 text-center gap-6">
                    <div class="flex items-center justify-center space-x-2">
                        <i class="fas fa-server text-2xl"></i>
                        <span class="font-semibold">99.99% UPTIME</span>
                    </div>
                    <div class="flex items-center justify-center space-x-2">
                        <i class="fas fa-undo text-2xl"></i>
                        <span class="font-semibold">MONEY-BACK GUARANTEE</span>
                    </div>
                    <div class="flex items-center justify-center space-x-2">
                        <i class="fas fa-bolt text-2xl"></i>
                        <span class="font-semibold">ULTRA-FAST PLATFORM</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-gradient-to-br from-blue-50 to-indigo-50"
            style="background: linear-gradient(135deg, #EFF6FF 0%, #EEF2FF 100%);">
            <div class="container max-w-screen-xl mx-auto px-4">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4"
                        style="color: #1f2937; font-weight: 700;">
                        Easily Manage Your Sites & Resources
                    </h2>
                    <p class="text-lg text-gray-600" style="color: #4b5563; line-height: 1.6;">
                        Managing multiple websites doesn't have to be complicated. With
                        CloudCareHost Reseller Hosting, you get full control without any stress, so you can focus on
                        growing your business and helping your clients.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Feature 1: Single Dashboard -->
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1"
                        style="border-left: 4px solid #3B82F6;">
                        <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Single Dashboard Manage All Your Sites Easily
                        </h3>
                        <p class="text-gray-600">With CloudCareHost Reseller Hosting, you can manage all your client
                            websites from a single dashboard. No more switching between accounts or panels, everything
                            is centralized for your convenience.</p>
                    </div>

                    <!-- Feature 2: One-Click Installer -->
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1"
                        style="border-left: 4px solid #10B981;">
                        <div class="w-14 h-14 bg-green-100 rounded-lg flex items-center justify-center mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">One Click App Installer</h3>
                        <p class="text-gray-600">Install WordPress, WooCommerce, Joomla, and hundreds of apps in
                            seconds. Launch websites quickly for your clients without any technical hassle.</p>
                    </div>

                    <!-- Feature 3: Flexible Resources -->
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1"
                        style="border-left: 4px solid #8B5CF6;">
                        <div class="w-14 h-14 bg-purple-100 rounded-lg flex items-center justify-center mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Flexible Resources</h3>
                        <p class="text-gray-600">Assign storage, bandwidth, and email accounts per client. Scale
                            resources as their websites grow, keeping every site running smoothly.</p>
                    </div>

                    <!-- Feature 4: Safe & Reliable Backups -->
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1"
                        style="border-left: 4px solid #F59E0B;">
                        <div class="w-14 h-14 bg-yellow-100 rounded-lg flex items-center justify-center mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Safe & Reliable Backups</h3>
                        <p class="text-gray-600">Daily automated backups keep your clients' websites safe. Restore
                            accounts quickly whenever needed and never worry about losing important data.</p>
                    </div>

                    <!-- Feature 5: Developer Tools -->
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1"
                        style="border-left: 4px solid #EF4444;">
                        <div class="w-14 h-14 bg-red-100 rounded-lg flex items-center justify-center mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Advanced Developer Tools</h3>
                        <p class="text-gray-600">Support advanced clients with SSH, Git, and API access. Even custom
                            applications and scripts can be managed easily, giving you full flexibility.</p>
                    </div>

                    <!-- Feature 6: Summary -->
                    <div class="bg-gradient-to-r from-blue-600 to-indigo-700 rounded-xl p-6 shadow-lg text-white"
                        style="background: linear-gradient(90deg, #2563EB 0%, #4F46E5 100%);">
                        <div class="w-14 h-14 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Everything You Need to Succeed</h3>
                        <p class="mb-4">With CloudCareHost, everything is organized, secure, and easy to manage, so you
                            can save time, serve your clients better, and focus on growing your hosting business.</p>
                        <p>Our reseller hosting plans are flexible, scalable, and designed for growth, allowing you to
                            start small and expand your hosting business without limits.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16" style="background: linear-gradient(135deg, #F9FAFB 0%, #F3F4F6 100%);">
            <div class="container max-w-screen-xl mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4"
                        style="color: #1f2937; font-weight: 700;">
                        We Provide Unbeatable Reseller Hosting Features
                    </h2>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto" style="color: #4b5563;">
                        At CloudCareHost, our Reseller Hosting plans are packed with features designed to make your
                        hosting business successful from day one.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Feature 1 -->
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-blue-100 flex flex-col h-full"
                        style="border-top: 3px solid #3B82F6;">
                        <div class="mb-4 p-3 bg-blue-100 rounded-lg w-12 h-12 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">FREE SSL Security</h3>
                        <p class="text-gray-600 flex-grow">We include a free SSL certificate with every plan it
                            secures your site with HTTPS and helps boost your Google rankings instantly.</p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-blue-100 flex flex-col h-full"
                        style="border-top: 3px solid #10B981;">
                        <div class="mb-4 p-3 bg-green-100 rounded-lg w-12 h-12 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Advanced Security</h3>
                        <p class="text-gray-600 flex-grow">Your reseller hosting accounts are fully protected with
                            advanced security, 24/7 monitoring, and real-time threat protection so your business stays
                            safe, always.</p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-blue-100 flex flex-col h-full"
                        style="border-top: 3px solid #8B5CF6;">
                        <div class="mb-4 p-3 bg-purple-100 rounded-lg w-12 h-12 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">100% White Label Hosting</h3>
                        <p class="text-gray-600 flex-grow">At CloudCareHost.com, everything is fully white-labeled your
                            clients will see only your brand. They pay you, contact you, and trust your business.</p>
                    </div>

                    <!-- Feature 4 -->
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-blue-100 flex flex-col h-full"
                        style="border-top: 3px solid #EF4444;">
                        <div class="mb-4 p-3 bg-red-100 rounded-lg w-12 h-12 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">LiteSpeed Webserver</h3>
                        <p class="text-gray-600 flex-grow">Say goodbye to slow sites. LiteSpeed boosts website speed,
                            reduces server load, and crushes the competition, all with zero extra effort.</p>
                    </div>

                    <!-- Feature 5 -->
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-blue-100 flex flex-col h-full"
                        style="border-top: 3px solid #F59E0B;">
                        <div class="mb-4 p-3 bg-yellow-100 rounded-lg w-12 h-12 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Access to WHM/cPanel</h3>
                        <p class="text-gray-600 flex-grow">Our reseller hosting includes WHM and cPanel making it easy
                            to create, manage, and support your clients' websites without any hassle.</p>
                    </div>

                    <!-- Feature 6 -->
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-blue-100 flex flex-col h-full"
                        style="border-top: 3px solid #6366F1;">
                        <div class="mb-4 p-3 bg-indigo-100 rounded-lg w-12 h-12 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Instant Account Setup</h3>
                        <p class="text-gray-600 flex-grow">Start earning with reseller hosting in just minutes, no
                            experience needed. It's the easiest way to launch your own hosting business and make money
                            online.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-gray-50 py-16" style="background: #F9FAFB;">
            <div class="container max-w-screen-xl mx-auto px-4">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-16" style="color: #1f2937; font-weight: 700;">
                    Benefits of Choosing CloudCareHost Reseller Hosting
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Benefit 1 -->
                    <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition"
                        style="border-radius: 12px; transition: all 0.3s ease;">
                        <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Start Your Own Hosting Business Quickly</h3>
                        <p class="text-gray-600">Launch your hosting services in minutes with our intuitive reseller
                            platform.
                        </p>
                    </div>

                    <!-- Benefit 2 -->
                    <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition"
                        style="border-radius: 12px; transition: all 0.3s ease;">
                        <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Offer Reliable Hosting to Clients</h3>
                        <p class="text-gray-600">With 99.9% uptime and SSD/NVMe-powered servers with high availability
                            infrastructure.</p>
                    </div>

                    <!-- Benefit 3 -->
                    <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition"
                        style="border-radius: 12px; transition: all 0.3s ease;">
                        <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Focus on Your Clients, Not Servers</h3>
                        <p class="text-gray-600">We handle all server maintenance, security, and performance
                            optimization.</p>
                    </div>

                    <!-- Benefit 4 -->
                    <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition"
                        style="border-radius: 12px; transition: all 0.3s ease;">
                        <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Support for Multiple Platforms</h3>
                        <p class="text-gray-600">WordPress, Joomla, WooCommerce, and more are fully supported with
                            one-click
                            installation.</p>
                    </div>

                    <!-- Benefit 5 -->
                    <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition"
                        style="border-radius: 12px; transition: all 0.3s ease;">
                        <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Free Migration for Clients</h3>
                        <p class="text-gray-600">We'll transfer existing websites for free with no downtime - your
                            clients won't
                            notice a thing.</p>
                    </div>

                    <!-- Benefit 6 -->
                    <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition"
                        style="border-radius: 12px; transition: all 0.3s ease;">
                        <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Expert Resources & Guides</h3>
                        <p class="text-gray-600">Access tutorials and tips to make the most of your reseller hosting
                            journey.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16" style="background: linear-gradient(135deg, #E0E7FF 0%, #C7D2FE 100%);">
            <div class="container max-w-screen-xl mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <div class="md:w-1/2 mb-10 md:mb-0">
                        <h2 class="text-3xl md:text-4xl font-bold mb-6" style="color: #1f2937;">Free Migration for
                            Clients</h2>
                        <p class="text-xl text-gray-700 mb-6">Already have client websites hosted elsewhere? We'll
                            transfer them
                            for free, including all files, emails, and databases, with no downtime.</p>
                        <p class="text-lg text-gray-600 mb-8">Your clients won't notice a thing, and you can focus on
                            growing
                            your business.</p>
                        <a href="#"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold text-lg transition inline-block"
                            style="background: #2563EB;">
                            Request Free Migration
                        </a>
                    </div>
                    <div class="md:w-2/5">
                        <div class="bg-white p-8 rounded-xl shadow-lg"
                            style="box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);">
                            <h3 class="text-2xl font-semibold mb-6 text-center" style="color: #1f2937;">Learn How to
                                Start &
                                Grow Your Reseller Hosting Business</h3>
                            <p class="text-gray-600 mb-6">CloudCareHost's reseller hosting plans are built for success
                                and so
                                is our content.</p>
                            <p class="text-gray-600 mb-8">Explore expert guides, updated tutorials, and helpful tips to
                                make the
                                most of your reseller hosting journey.</p>
                            <a href="#"
                                class="block text-center bg-gray-800 hover:bg-black text-white px-6 py-3 rounded-lg font-semibold transition"
                                style="background: #1f2937;">
                                Explore Resources
                            </a>
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
                        <span>What is reseller hosting and how does it work?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p>Reseller hosting lets you start your own web hosting business by selling hosting accounts to
                            others.
                            You rent server space from a hosting provider like CloudCareHost, create hosting packages,
                            and sell them to your own
                            clients under your own brand while we handle the server management.
                        </p>
                    </div>
                </div>

                <div class="border-b border-gray-200 pb-4">
                    <button class="flex justify-between items-center w-full text-left font-medium faq-toggle">
                        <span>Do I need technical experience to start with reseller hosting?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p>No, you don’t need to be a tech expert.
                            Our reseller hosting plans are beginner-friendly and come with easy tools like WHM and
                            cPanel. We also provide 24/7
                            support, so you can focus on growing your business while we handle the backend.
                        </p>
                    </div>
                </div>

                <div class="border-b border-gray-200 pb-4">
                    <button class="flex justify-between items-center w-full text-left font-medium faq-toggle">
                        <span>Can I use my own brand and logo?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p>Yes! Our reseller hosting is 100% white label.
                            That means your clients will see your business name, your logo, and your domain not ours.
                            You get full branding
                            control to build your own hosting company.
                        </p>
                    </div>
                </div>

                <div class="border-b border-gray-200 pb-4">
                    <button class="flex justify-between items-center w-full text-left font-medium faq-toggle">
                        <span>What tools are included in reseller hosting?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p>You’ll get access to WHM (Web Host Manager) and cPanel, the industry’s best tools.
                            These help you manage all your clients’ hosting accounts easily, with features like file
                            management, email setup, backups, and more.
                        </p>
                    </div>
                </div>

                <div class="border-b border-gray-200 pb-4">
                    <button class="flex justify-between items-center w-full text-left font-medium faq-toggle">
                        <span>Will my clients get access to cPanel?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p>Yes! Each of your clients gets their own cPanel.
                            They can manage their website, emails, domains, and files just like with any premium
                            hosting account.
                        </p>
                    </div>
                </div>

                <div class="border-b border-gray-200 pb-4">
                    <button class="flex justify-between items-center w-full text-left font-medium faq-toggle">
                        <span>Is reseller hosting good for freelancers and agencies?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p>Yes, it’s perfect for web designers, developers, and digital agencies.
                            You can bundle hosting with your services, offer better support to clients, and earn monthly
                            income all under your own
                            brand.
                        </p>
                    </div>
                </div>

                <div class="pb-4">
                    <button class="flex justify-between items-center w-full text-left font-medium faq-toggle">
                        <span>Is support available if I need help?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p>Absolutely. We provide 24/7 expert support.
                            If you or your clients run into issues, our team is always here to help. You can also use
                            our knowledgebase and tutorials for step-by-step guidance
                            .</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog Section -->
        <section class="bg-gray-50 py-20">
            <div class="container max-w-screen-xl mx-auto px-4">
                <!-- Heading + Button -->
                <div class="flex justify-between items-center mb-10">
                    <h2 class="text-2xl md:text-3xl font-bold">Find out About Reseller Web Hosting Tips</h2>
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
                                <img src="{{ asset($blog->thumbnail) }}" alt="{{ $blog->title }}" class="w-full h-40 object-cover">
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
