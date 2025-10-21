<x-hosting-layout title="Sell More with Powerful WooCommerce Hosting"
    description="Step into the online world with hosting optimized for performance and user-friendliness.">
    @section('title', 'WooCommerce Hosting | Fast & Secure Store Hosting - CloudCareHost')
    @section('meta_description', 'Power your WooCommerce store with hosting designed for speed and security. Includes pre-installed tools, free SSL, daily backups, and 24/7 support.')
    @section('meta_keywords', ' woocommerce hosting, managed woocommerce hosting, best hosting for woocommerce, affordable woocommerce hosting, secure woocommerce hosting, woocommerce optimized hosting')
    @section('meta_author', 'Cloud Care Host')

    <div class="mb-12">

        <!-- Hero Section -->
        <section class="bg-gradient-to-br from-gray-50 to-indigo-50 py-18 relative overflow-hidden">
            <div
                class="container max-w-screen-xl mx-auto mx-auto mx-auto px-4 flex flex-col lg:flex-row lg:space-x-4 items-center">
                <div class="lg:w-1/2 mb-12 lg:mb-0 text-center lg:text-left animate__animated animate__fadeInDown">
                    <h1 class="text-3xl md:text-5xl font-bold font-montserrat text-gray-900 mb-6 leading-tight">
                        Sell More with Powerful WooCommerce Hosting</h1>
                    <p class="text-lg text-gray-600 mb-8 animate__animated animate__fadeInDown animate__delay-1s">
                        Say goodbye to slow load times and checkout issues. Our hosting is designed to keep your store
                        fast, secure, and open for business 24/7.</p>

                    <div
                        class="flex flex-wrap justify-center mb-8 lg:justify-start gap-3 animate__animated animate__fadeIn animate__delay-2s">
                        <span class="bg-white px-4 py-2 rounded-full text-sm font-medium shadow-sm">
                            Optimized for WooCommerce</span>
                        <span class="bg-white px-4 py-2 rounded-full text-sm font-medium shadow-sm">
                            Secure Transactions</span>
                        <!-- <span class="bg-white px-4 py-2 rounded-full text-sm font-medium shadow-sm">24/7 Support</span> -->

                        <span class="bg-white px-4 py-2 rounded-full text-sm font-medium shadow-sm">Friendly Human
                            Support</span>
                    </div>

                    <a href="#plansData"
                        class="block w-47 bg-indigo-500 hover:bg-indigo-600 text-white text-center py-2 px-4 rounded-lg font-medium transition-colors">
                        View Hosting Plans
                    </a>
                </div>

                <div class="lg:w-1/2 animate__animated animate__fadeInRight animate__delay-1s">
                    <img src="{{ asset('images/woocommerce.webp') }}" alt="Cloud Hosting Illustration"
                        class="max-w-full animate-float">
                </div>
            </div>
        </section>

        <!-- Billing Toggle -->
        <section class="bg-white py-20">
            <div id="plansData" class="container max-w-screen-xl mx-auto px-4">
                <h2 class="text-3xl md:text-4xl font-bold font-montserrat text-center mb-4">WooCommerce Hosting Made for
                    Your Online Store</h2>
                <p class="text-gray-500 text-lg text-center max-w-2xl mx-auto mb-6">
                    Grow your WooCommerce store with ease. CloudCareHost offers fast, secure, and stress-free
                    WooCommerce hosting designed
                    for your e-commerce success.

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

        <!-- Section -->
        <section class="bg-white py-16">
            <div class="bg-gradient-to-r from-indigo-500 to-blue-600 text-white py-6">
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
            <div
                class="container max-w-screen-xl mx-auto px-6 mb-8 mt-12 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                <!-- Left Content -->
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                        Why Choose Our WooCommerce Hosting?
                    </h2>

                    <!-- Lead paragraph (similar style to your original) -->
                    <p class="text-gray-500 text-lg mb-6">
                        Running an online store means you can’t afford downtime or slow loading times. Our WooCommerce
                        hosting is designed to
                        give you:
                    </p>

                    <!-- Feature list with check icons -->
                    <ul class="space-y-4 mb-6">
                        <li class="flex items-start gap-3">
                            <span class="flex-shrink-0 mt-1">
                                <!-- green check icon -->
                                <svg class="w-6 h-6 text-green-500" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <circle cx="12" cy="12" r="12" fill="currentColor" opacity="0.12" />
                                    <path d="M7 12.5l2.5 2.5L17 7" stroke="currentColor" stroke-width="1.75"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <p class="text-gray-500">
                                <strong class="text-gray-900">ULightning-fast performance with SSD/NVMe storage</strong>
                            </p>
                        </li>

                        <li class="flex items-start gap-3">
                            <span class="flex-shrink-0 mt-1">
                                <svg class="w-6 h-6 text-green-500" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <circle cx="12" cy="12" r="12" fill="currentColor" opacity="0.12" />
                                    <path d="M7 12.5l2.5 2.5L17 7" stroke="currentColor" stroke-width="1.75"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <p class="text-gray-500">
                                <strong class="text-gray-900">100% compatibility with WordPress & WooCommerce</strong>
                            </p>
                        </li>

                        <li class="flex items-start gap-3">
                            <span class="flex-shrink-0 mt-1">
                                <svg class="w-6 h-6 text-green-500" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <circle cx="12" cy="12" r="12" fill="currentColor" opacity="0.12" />
                                    <path d="M7 12.5l2.5 2.5L17 7" stroke="currentColor" stroke-width="1.75"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <p class="text-gray-500">
                                <strong class="text-gray-900">Free SSL, daily backups, and full security suite</strong>
                            </p>
                        </li>

                        <li class="flex items-start gap-3">
                            <span class="flex-shrink-0 mt-1">
                                <svg class="w-6 h-6 text-green-500" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <circle cx="12" cy="12" r="12" fill="currentColor" opacity="0.12" />
                                    <path d="M7 12.5l2.5 2.5L17 7" stroke="currentColor" stroke-width="1.75"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <p class="text-gray-500">
                                <strong class="text-gray-900">One click installation and easy plugin/theme
                                    management</strong>
                            </p>
                        </li>

                        <li class="flex items-start gap-3">
                            <span class="flex-shrink-0 mt-1">
                                <svg class="w-6 h-6 text-green-500" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <circle cx="12" cy="12" r="12" fill="currentColor" opacity="0.12" />
                                    <path d="M7 12.5l2.5 2.5L17 7" stroke="currentColor" stroke-width="1.75"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <p class="text-gray-500">
                                <strong class="text-gray-900">Support for popular payment gateways, shipping tools, and
                                    SEO plugins</strong>
                            </p>
                        </li>
                    </ul>

                    <p class="text-gray-500">
                        Whether you are selling 10 products or 10,000, we’ve got the power and flexibility you need.
                    </p>
                </div>

                <!-- Right Image -->
                <div class="flex justify-center">
                    <img src="{{ asset('images/woocommerce1.webp') }}" alt="Web Hosting Illustration"
                        class="max-w-md w-full">
                </div>

            </div>
            <div class="bg-gray-50 py-16">
                <div class="container max-w-screen-xl mx-auto px-4">
                    <!-- Heading -->
                    <h2 class="text-3xl md:text-4xl font-bold font-montserrat text-center mb-4">
                        Powerful WooCommerce Hosting for Your Online Store
                    </h2>
                    <p class="text-gray-500 text-lg text-center max-w-2xl mx-auto mb-16">
                        Launch, manage, and scale your WooCommerce store with ease. Enjoy fast performance, secure
                        checkout, and tools
                        designed to help you grow your online business.
                    </p>


                    <!-- OS Grid -->
                    <div
                        class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-6 gap-8 items-center justify-center text-center">
                        <div class="flex flex-col items-center space-y-2">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/debian/debian-original.svg"
                                alt="Debian" class="w-12 h-12">
                            <span class="text-gray-700 font-medium">Debian</span>
                        </div>
                        <div class="flex flex-col items-center space-y-2">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/ubuntu/ubuntu-plain.svg"
                                alt="Ubuntu" class="w-12 h-12">
                            <span class="text-gray-700 font-medium">Ubuntu</span>
                        </div>
                        <div class="flex flex-col items-center space-y-2">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/centos/centos-original.svg"
                                alt="CentOS" class="w-12 h-12">
                            <span class="text-gray-700 font-medium">CentOS</span>
                        </div>
                        <div class="flex flex-col items-center space-y-2">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/redhat/redhat-original.svg"
                                alt="Red Hat" class="w-12 h-12">
                            <span class="text-gray-700 font-medium">Red Hat</span>
                        </div>
                        <div class="flex flex-col items-center space-y-2">
                            <img src="https://img.icons8.com/color/48/000000/linux.png" alt="AlmaLinux"
                                class="w-12 h-12">
                            <span class="text-gray-700 font-medium">AlmaLinux</span>
                        </div>
                        <div class="flex flex-col items-center space-y-2">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/fedora/fedora-original.svg"
                                alt="Fedora" class="w-12 h-12">
                            <span class="text-gray-700 font-medium">Fedora</span>
                        </div>
                        <!-- <div class="flex flex-col items-center space-y-2">
                                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/windows8/windows8-original.svg"
                                                    alt="Windows Server" class="w-12 h-12">
                                                <span class="text-gray-700 font-medium">Windows Server</span>
                                            </div> -->
                    </div>
                </div>
            </div>
        </section>

        <!-- WooCommerce Features Section -->
        <section class="py-16 bg-gradient-to-br from-blue-50 to-indigo-50">
            <div class="container max-w-6xl mx-auto px-4">
                <!-- Section Heading -->
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">Everything Your WooCommerce Store Needs</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Specialized hosting solutions designed to
                        maximize your online store's performance and security</p>
                </div>

                <!-- Features Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <!-- Speed Feature -->
                    <div
                        class="bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                        <div class="p-6">
                            <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Speed That Boosts Sales</h3>
                            <p class="text-gray-600 mb-4">In online shopping, every second counts; a slow site can cost
                                you sales.</p>
                            <ul class="space-y-2">
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mt-0.5 mr-2"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>Built-in caching</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mt-0.5 mr-2"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>Optimized PHP & MySQL</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mt-0.5 mr-2"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>Lightweight server stack</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mt-0.5 mr-2"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>Content Delivery Network (CDN) ready</span>
                                </li>
                            </ul>
                            <div class="mt-5 pt-4 border-t border-gray-100">
                                <p class="text-blue-600 font-semibold">Result: Fast page loads, better SEO rankings, and
                                    more sales.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Security Feature -->
                    <div
                        class="bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                        <div class="p-6">
                            <div class="w-14 h-14 bg-green-100 rounded-lg flex items-center justify-center mb-5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Stay Secure & Protected</h3>
                            <p class="text-gray-600 mb-4">Your store holds customer data and payments; we take that
                                seriously.</p>
                            <ul class="space-y-2">
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mt-0.5 mr-2"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>Free SSL certificate included</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mt-0.5 mr-2"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>Daily automatic backups</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mt-0.5 mr-2"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>DDoS protection & firewalls</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mt-0.5 mr-2"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>Malware scanning & brute force defense</span>
                                </li>
                            </ul>
                            <div class="mt-5 pt-4 border-t border-gray-100">
                                <p class="text-green-600 font-semibold">You're covered from day one.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Management Feature -->
                    <div
                        class="bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                        <div class="p-6">
                            <div class="w-14 h-14 bg-purple-100 rounded-lg flex items-center justify-center mb-5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Simple Store Management</h3>
                            <p class="text-gray-600 mb-4">Not a tech expert? No problem. With CloudCareHost, you get:
                            </p>
                            <ul class="space-y-2">
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mt-0.5 mr-2"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>Easy-to-use control panel</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mt-0.5 mr-2"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>WordPress auto-installer with WooCommerce</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mt-0.5 mr-2"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>One-click updates for plugins & themes</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mt-0.5 mr-2"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>Staging environment for testing before going live</span>
                                </li>
                            </ul>
                            <div class="mt-5 pt-4 border-t border-gray-100">
                                <p class="text-purple-600 font-semibold">We handle the tech so you can focus on growing
                                    your business.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Support Feature -->
                    <div
                        class="bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                        <div class="p-6">
                            <div class="w-14 h-14 bg-yellow-100 rounded-lg flex items-center justify-center mb-5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Friendly Support That Cares</h3>
                            <p class="text-gray-600 mb-4">You're never alone. Our expert team is here to help with:</p>
                            <ul class="space-y-2">
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mt-0.5 mr-2"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>Plugin conflicts</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mt-0.5 mr-2"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>Speed issues</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mt-0.5 mr-2"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>Security setup</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mt-0.5 mr-2"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>Payment gateway problems</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mt-0.5 mr-2"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>Anything WooCommerce-related!</span>
                                </li>
                            </ul>
                            <div class="mt-5 pt-4 border-t border-gray-100">
                                <p class="text-yellow-600 font-semibold">Reach out via chat, email, or ticket. We are
                                    real people who love solving real problems.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Store Types Feature -->
                    <div
                        class="bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                        <div class="p-6">
                            <div class="w-14 h-14 bg-pink-100 rounded-lg flex items-center justify-center mb-5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-pink-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 11V7a4 4 极速4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Perfect for All WooCommerce Stores</h3>
                            <p class="text-gray-600 mb-4">No matter what you sell, our hosting helps you sell better.
                            </p>
                            <ul class="space-y-2">
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mt-0.5 mr-2"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 极速 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-极速.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>Fashion & apparel stores</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns极速="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mt-0.5 mr-2"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0极速-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>Digital product sales</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mt-0.5 mr-2"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>Dropshipping businesses</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mt-0.5 mr-2"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0极速"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>Subscription-based models</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mt-0.5 mr-2"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>Local business eCommerce sites</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- CTA Feature -->
                    <div
                        class="bg-gradient-to-br from-blue-600 to-indigo-700 rounded-xl shadow-lg overflow-hidden p-8 text-center">
                        <h3 class="text-2xl font-bold text-white mb-4">Ready to Grow Your Store?</h3>
                        <p class="text-blue-100 mb-6">Join hundreds of store owners who trust CloudCareHost for
                            reliable, fast, and affordable WooCommerce hosting.</p>
                        <a href="#"
                            class="inline-block bg-white text-blue-600 font-semibold px-6 py-3 rounded-lg hover:bg-blue-50 transition duration-300">
                            Start Your WooCommerce Journey Today
                        </a>
                        <p class="text-blue-200 text-sm mt-4">Quick, easy, and risk-free!</p>
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
                        <span>Can I install WooCommerce with one click?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p>Yes! We offer 1-click installation for WooCommerce through our control panel.</p>
                    </div>
                </div>

                <div class="border-b border-gray-200 pb-4">
                    <button class="flex justify-between items-center w-full text-left font-medium faq-toggle">
                        <span>Is WooCommerce hosting good for beginners?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p>Absolutely! Our hosting is beginner-friendly and includes everything you need, like automatic
                            updates, a user-friendly
                            dashboard, SSL, backups, and fast support. You don’t need to be a developer to get started.
                        </p>
                    </div>
                </div>

                <div class="border-b border-gray-200 pb-4">
                    <button class="flex justify-between items-center w-full text-left font-medium faq-toggle">
                        <span>How fast is your WooCommerce hosting?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p>Our servers use SSD or NVMe storage, optimized PHP, and built-in caching to ensure fast load
                            times, even during traffic
                            spikes. Faster websites mean better customer experiences and higher sales.</p>
                    </div>
                </div>

                <div class="border-b border-gray-200 pb-4">
                    <button class="flex justify-between items-center w-full text-left font-medium faq-toggle">
                        <span>Can I use any WooCommerce plugin or theme?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p>Yes. You can install any WooCommerce-compatible plugin or theme, including premium ones like
                            Elementor Pro, Astra, and payment gateways like Stripe, Razorpay, or PayPal.</p>
                    </div>
                </div>

                <div class="border-b border-gray-200 pb-4">
                    <button class="flex justify-between items-center w-full text-left font-medium faq-toggle">
                        <span>Is your WooCommerce hosting scalable?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p>Yes. As your store grows, you can easily upgrade your plan to handle more traffic, products,
                            or orders without downtime. Our hosting is built to scale with your business.</p>
                    </div>
                </div>

                <div class="pb-4">
                    <button class="flex justify-between items-center w-full text-left font-medium faq-toggle">
                        <span>Can I migrate my existing WooCommerce store to CloudCareHost?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p>Absolutely. We offer free WooCommerce migration. Our team will move your store from your old
                            host without any downtime
                            or data loss.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog Section -->
        <section class="bg-gray-50 py-20">
            <div class="container max-w-screen-xl mx-auto px-4">
                <!-- Heading + Button -->
                <div class="flex justify-between items-center mb-10">
                    <h2 class="text-2xl md:text-3xl font-bold">Find out About WooCommerce Web Hosting Tips</h2>
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
