<x-hosting-layout title="Powerful Dedicated Servers Made Simple"
    description="Step into the online world with hosting optimized for performance and user-friendliness.">
    @section('title', 'Dedicated Server Hosting | Powerful & Customizable - CloudCareHost')
    @section('meta_description', 'Power your business with dedicated servers. Enjoy SSD storage, root access, DDoS protection, and 24/7 support with flexible, scalable plans.')
    @section('meta_keywords', 'dedicated server hosting, dedicated servers for business, best dedicated hosting, affordable dedicated servers, secure dedicated hosting, managed dedicated servers')
    @section('meta_author', 'Cloud Care Host')

    <div class="mb-12">

        <!-- Hero Section -->
        <section class="bg-gradient-to-br from-gray-50 to-indigo-50 py-18 relative overflow-hidden">
            <div
                class="container max-w-screen-xl mx-auto mx-auto mx-auto px-4 flex flex-col lg:flex-row lg:space-x-4 items-center">
                <div class="lg:w-1/2 mb-12 lg:mb-0 text-center lg:text-left animate__animated animate__fadeInDown">
                    <h1 class="text-3xl md:text-5xl font-bold font-montserrat text-gray-900 mb-6 leading-tight">
                        Powerful Dedicated Servers Made Simple</h1>
                    <p class="text-lg text-gray-600 mb-8 animate__animated animate__fadeInDown animate__delay-1s">
                        Get full control, high speed, and reliable performance, all with friendly support from real
                        people. CloudCareHost gives
                        you a server that’s 100% yours, perfect for big websites, apps, and businesses that need more.
                    </p>

                    <div
                        class="flex flex-wrap justify-center mb-8 lg:justify-start gap-3 animate__animated animate__fadeIn animate__delay-2s">
                        <span class="bg-white px-4 py-2 rounded-full text-sm font-medium shadow-sm">
                            Fast & Secure</span>
                        <span class="bg-white px-4 py-2 rounded-full text-sm font-medium shadow-sm">
                            Full Access</span>
                        <span class="bg-white px-4 py-2 rounded-full text-sm font-medium shadow-sm">Help When You Need
                            It</span>
                        <span class="bg-white px-4 py-2 rounded-full text-sm font-medium shadow-sm">Easy to Set
                            Up</span>
                    </div>

                    <a href="#plansData"
                        class="block w-47 bg-indigo-500 hover:bg-indigo-600 text-white text-center py-2 px-4 rounded-lg font-medium transition-colors">
                        View Hosting Plans
                    </a>
                </div>

                <div class="lg:w-1/2 animate__animated animate__fadeInRight animate__delay-1s">
                    <img src="{{ asset('images/dedicated.webp') }}" alt="Cloud Hosting Illustration"
                        class="max-w-full animate-float">
                </div>
            </div>
        </section>

        <!-- Billing Toggle -->
        <section class="bg-white py-20">
            <div id="plansData" class="container max-w-screen-xl mx-auto px-4">
                <h2 class="text-3xl md:text-4xl font-bold font-montserrat text-center mb-4">Dedicated Servers Made for
                    High-Performance Hosting</h2>
                <p class="text-gray-500 text-lg text-center max-w-2xl mx-auto mb-6">
                    Power your websites, apps, and business with CloudCareHost Dedicated Servers delivering unmatched
                    speed, security, and
                    reliability for ultimate performance and control.
                </p>

                <div class="flex justify-center mb-8">
                    <div class="inline-flex items-center bg-gray-100 rounded-lg p-1 billing-toggle">
                        <button data-period="monthly"
                            class="px-4 py-2 rounded-md font-medium billing-btn bg-indigo-600 text-white">Monthly</button>
                        <button data-period="quarterly"
                            class="px-4 py-2 rounded-md font-medium billing-btn bg-gray-200 text-gray-700">
                            Quarterly (Save {{ $data[0]->usd_discounted_quaterly }}%)
                        </button>
                        <button data-period="semiannually"
                            class="px-4 py-2 rounded-md font-medium billing-btn bg-gray-200 text-gray-700">
                            Semi-Annually (Save {{ $data[0]->usd_discounted_semiannually }}%)
                        </button>
                        <button data-period="annually"
                            class="px-4 py-2 rounded-md font-medium billing-btn bg-gray-200 text-gray-700">
                            Yearly (Save {{ $data[0]->usd_discounted_annually }}%)
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
                                                data-quarterly="{{ $plan->usd_quarterly }}"
                                                data-semiannually="{{ $plan->usd_semiannually }}"
                                                data-annually="{{ $plan->usd_annually }}"
                                                data-curr="{{ $plan->usd_prefix }}">{{ $plan->usd_prefix }}{{ $plan->usd_monthly }}</span>
                                            <span class="text-sm font-normal text-gray-500">/mo</span>
                                        </div>
                                        <p class="text-sm text-gray-500 plan-total" data-monthly="Billed monthly"
                                            data-quarterly="{{ $plan->usd_prefix }}{{ $plan->usd_quarterly }} billed quarterly"
                                            data-semiannually="{{ $plan->usd_prefix }}{{ $plan->usd_semiannually }} billed semi-annually"
                                            data-annually="{{ $plan->usd_prefix }}{{ $plan->usd_annually }} billed yearly">
                                            Billed monthly
                                        </p>
                                        <div class="text-xs text-gray-400 line-through mt-1 original-price" data-monthly=""
                                            data-quarterly="Originally {{ $plan->usd_prefix }}{{ number_format($plan->usd_monthly * 3, 2) }}"
                                            data-semiannually="Originally {{ $plan->usd_prefix }}{{ number_format($plan->usd_monthly * 6, 2) }}"
                                            data-annually="Originally {{ $plan->usd_prefix }}{{ number_format($plan->usd_monthly * 12, 2) }}">
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
                                            <span>Quarterly</span>
                                            <span class="font-medium">{{ $plan->usd_prefix }}{{ $plan->usd_quarterly }} <span
                                                    class="text-red-500">({{ $plan->usd_discounted_quaterly }}%
                                                    OFF)</span></span>
                                        </div>
                                        <div class="flex justify-between py-1">
                                            <span>Semi-Annually</span>
                                            <span class="font-medium">{{ $plan->usd_prefix }}{{ $plan->usd_semiannually }} <span
                                                    class="text-red-500">({{ $plan->usd_discounted_semiannually }}%
                                                    OFF)</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="plan-card" data-plan="dedicated-custom">
                        <div
                            class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden transition-all hover:shadow-lg hover:border-indigo-300">
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-4">
                                    <h3 class="text-xl font-bold">Custom Dedicated Hosting</h3>
                                    <span
                                        class="bg-indigo-100 text-indigo-800 text-xs font-semibold px-2.5 py-0.5 rounded">Enterprise</span>
                                </div>

                                <div class="mb-6">
                                    <div class="text-3xl font-bold mb-1">
                                        <span class="plan-price">Custom Pricing</span>
                                    </div>
                                    <p class="text-sm text-gray-500 plan-total">Tailored to your business needs</p>
                                </div>

                                <ul class="space-y-2 mb-6">
                                    <li class="flex items-start">
                                        <i class="fas fa-cogs text-green-500 mt-1 mr-2 text-sm"></i>
                                        <span>Customizable CPU, RAM & Storage</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-server text-green-500 mt-1 mr-2 text-sm"></i>
                                        <span>Dedicated Bare-Metal Servers</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-network-wired text-green-500 mt-1 mr-2 text-sm"></i>
                                        <span>High-Speed Network & Bandwidth</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-shield-alt text-green-500 mt-1 mr-2 text-sm"></i>
                                        <span>Advanced Security & DDoS Protection</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-life-ring text-green-500 mt-1 mr-2 text-sm"></i>
                                        <span>24/7 Expert Support</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-sync-alt text-green-500 mt-1 mr-2 text-sm"></i>
                                        <span>Flexible Upgrade Options</span>
                                    </li>
                                </ul>

                                <a href="https://clients.cloudcarehost.com/contact.php"
                                    class="block w-full bg-indigo-600 hover:bg-indigo-700 text-white text-center py-2 px-4 rounded-lg font-medium transition-colors">
                                    Contact Us for Custom Plan
                                </a>

                                <!-- Info Note -->
                                <div class="mt-4 text-xs text-gray-500">
                                    <p>Get a personalized quote based on your requirements. Perfect for businesses,
                                        enterprises, and high-traffic websites.</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                            const discountPercent = Math.round(Math.max(0, (1 - (periodPrice / fullPrice)) * 100));

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
        </section>

        <!-- Why Choose CloudCareHost Section -->
        <section class="py-16 bg-gradient-to-br from-gray-900 to-blue-900 text-white">
            <div class="container max-w-screen-xl mx-auto px-4">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Why Choose CloudCareHost Dedicated Servers?</h2>
                    <p class="text-xl text-blue-200 max-w-3xl mx-auto">Experience unparalleled performance, security,
                        and
                        control with our enterprise-grade dedicated server solutions</p>
                </div>

                <!-- Features Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                    <!-- Feature 1 -->
                    <div
                        class="bg-gray-800 bg-opacity-50 rounded-xl p-6 hover:bg-opacity-70 transition-all duration-300 group">
                        <div
                            class="w-14 h-14 bg-blue-600 rounded-lg flex items-center justify-center mb-5 group-hover:bg-blue-500 transition-colors">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Complete Control, Zero Limits</h3>
                        <p class="text-blue-100">With a dedicated server, you're in charge. Install any software,
                            customize your
                            environment, and manage resources your way with no noisy neighbors or restrictions.</p>
                    </div>

                    <!-- Feature 2 -->
                    <div
                        class="bg-gray-800 bg-opacity-50 rounded-xl p-6 hover:bg-opacity-70 transition-all duration-300 group">
                        <div
                            class="w-14 h-14 bg-blue-600 rounded-lg flex items-center justify-center mb-5 group-hover:bg-blue-500 transition-colors">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Unmatched Performance</h3>
                        <p class="text-blue-100">Our servers are equipped with high-frequency CPUs, DDR4/DDR5 RAM, and
                            NVMe SSDs
                            to deliver the power your applications demand.</p>
                    </div>

                    <!-- Feature 3 -->
                    <div
                        class="bg-gray-800 bg-opacity-50 rounded-xl p-6 hover:bg-opacity-70 transition-all duration-300 group">
                        <div
                            class="w-14 h-14 bg-blue-600 rounded-lg flex items-center justify-center mb-5 group-hover:bg-blue-500 transition-colors">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Enterprise-Grade Security</h3>
                        <p class="text-blue-100">We take your data seriously. Every dedicated server includes
                            hardware-level
                            isolation, firewall protection, and optional DDoS mitigation.</p>
                    </div>

                    <!-- Feature 4 -->
                    <div
                        class="bg-gray-800 bg-opacity-50 rounded-xl p-6 hover:bg-opacity-70 transition-all duration-300 group">
                        <div
                            class="w-14 h-14 bg-blue-600 rounded-lg flex items-center justify-center mb-5 group-hover:bg-blue-500 transition-colors">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Global Datacenter Reach</h3>
                        <p class="text-blue-100">Deploy your dedicated server closer to your audience. Choose from
                            multiple
                            Tier-III+ datacenter locations across the globe.</p>
                    </div>

                    <!-- Feature 5 -->
                    <div
                        class="bg-gray-800 bg-opacity-50 rounded-xl p-6 hover:bg-opacity-70 transition-all duration-300 group">
                        <div
                            class="w-14 h-14 bg-blue-600 rounded-lg flex items-center justify-center mb-5 group-hover:bg-blue-500 transition-colors">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Scalable to Fit Any Business</h3>
                        <p class="text-blue-100">Start with what you need and upgrade anytime. Our dedicated hosting
                            scales with
                            your business, ensuring no downtime.</p>
                    </div>

                    <!-- Feature 6 -->
                    <div
                        class="bg-gray-800 bg-opacity-50 rounded-xl p-6 hover:bg-opacity-70 transition-all duration-300 group">
                        <div
                            class="w-14 h-14 bg-blue-600 rounded-lg flex items-center justify-center mb-5 group-hover:bg-blue-500 transition-colors">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Expert Support 24/7</h3>
                        <p class="text-blue-100">Stuck somewhere? Our real engineers are available 24/7 via chat or
                            ticket.
                            We're here to assist, from setup to scaling.</p>
                    </div>

                    <!-- Feature 7 -->
                    <div
                        class="bg-gray-800 bg-opacity-50 rounded-xl p-6 hover:bg-opacity-70 transition-all duration-300 group">
                        <div
                            class="w-14 h-14 bg-blue-600 rounded-lg flex items-center justify-center mb-5 group-hover:bg-blue-500 transition-colors">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">OS & Panel Flexibility</h3>
                        <p class="text-blue-100">Run the OS of your choice: Linux, Windows, or custom ISOs. Plus, choose
                            from
                            popular control panels like cPanel, Plesk, or HestiaCP.</p>
                    </div>

                    <!-- Feature 8 -->
                    <div
                        class="bg-gray-800 bg-opacity-50 rounded-xl p-6 hover:bg-opacity-70 transition-all duration-300 group">
                        <div
                            class="w-14 h-14 bg-blue-600 rounded-lg flex items-center justify-center mb-5 group-hover:bg-blue-500 transition-colors">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Automated Backups Available</h3>
                        <p class="text-blue-100">Safeguard your data with optional daily or weekly backup plans, restore
                            files
                            or full system snapshots in just a few clicks.</p>
                    </div>
                </div>

                <!-- CTA Button -->
                <div class="text-center mt-12">
                    <a href="#"
                        class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-lg transition duration-300 transform hover:scale-105">
                        Explore Dedicated Server Plans
                    </a>
                </div>
            </div>
        </section>

        <!-- Dedicated Servers Section -->
        <section class="bg-white py-16">
            <div class="container max-w-screen-xl mx-auto px-4">
                <!-- Heading -->
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">What Makes Dedicated Servers the
                        Backbone of High-Performance Hosting?</h2>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">Experience unparalleled power, control, and
                        reliability with our enterprise-grade dedicated server solutions</p>
                </div>

                <!-- Features Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                    <!-- Feature 1 -->
                    <div
                        class="bg-gray-50 rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 group">
                        <div
                            class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-6 group-hover:bg-blue-200 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Run Demanding Applications</h3>
                        <p class="text-gray-600">Have apps that need serious muscle? No problem. Our UK dedicated
                            servers deliver the raw performance and stability you need for heavy workloads, custom
                            software, and complex environments without breaking a sweat.</p>
                    </div>

                    <!-- Feature 2 -->
                    <div
                        class="bg-gray-50 rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 group">
                        <div
                            class="w-14 h-14 bg-green-100 rounded-lg flex items-center justify-center mb-6 group-hover:bg-green-200 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Power Your Online Store</h3>
                        <p class="text-gray-600">Your eCommerce site deserves better than shared resources. With our
                            dedicated servers, your store gets faster load times, smoother checkouts, and room to grow
                            even during sales spikes.</p>
                    </div>

                    <!-- Feature 3 -->
                    <div
                        class="bg-gray-50 rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 group">
                        <div
                            class="w-14 h-14 bg-purple-100 rounded-lg flex items-center justify-center mb-6 group-hover:bg-purple-200 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Build Hybrid Infrastructure</h3>
                        <p class="text-gray-600">Combine powerful hardware with flexible cloud tools ideal for dev
                            setups, SaaS, or business apps.</p>
                    </div>

                    <!-- Feature 4 -->
                    <div
                        class="bg-gray-50 rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 group">
                        <div
                            class="w-14 h-14 bg-orange-100 rounded-lg flex items-center justify-center mb-6 group-hover:bg-orange-200 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-orange-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Solve Complex IT Challenges</h3>
                        <p class="text-gray-600">Managing remote teams, large databases, or enterprise systems? Our
                            servers give you full control and high availability, making it easier to handle critical IT
                            operations with confidence.</p>
                    </div>

                </div>

                <!-- CTA Button -->
                <div class="text-center mt-12">
                    <a href="#"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-8 py-3 rounded-lg transition inline-flex items-center">
                        Explore Dedicated Server Plans
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <div class="bg-white rounded-xl shadow-md p-8 px-18">
            <h2 class="text-3xl font-bold font-montserrat mb-8 text-center">Frequently Asked Questions</h2>

            <div class="space-y-4">
                <div class="border-b border-gray-200 pb-4">
                    <button class="flex justify-between items-center w-full text-left font-medium faq-toggle">
                        <span>Who should use a dedicated server?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p>Dedicated servers are ideal for businesses or developers who need: </br>
                            High performance for heavy apps </br>
                            Full control and root access </br>
                            Reliable hosting for large websites or eCommerce stores </br>
                            Better security for sensitive data
                        </p>
                    </div>
                </div>

                <div class="border-b border-gray-200 pb-4">
                    <button class="flex justify-between items-center w-full text-left font-medium faq-toggle">
                        <span>Where are your datacenters located?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p>We offer global datacenter locations so you can host your server close to your audience for
                            faster performance and lower latency.</p>
                    </div>
                </div>

                <div class="border-b border-gray-200 pb-4">
                    <button class="flex justify-between items-center w-full text-left font-medium faq-toggle">
                        <span>How long does it take to set up a dedicated server?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p>Most servers are deployed within a few hours, depending on the configuration you choose.</p>
                    </div>
                </div>

                <div class="pb-4">
                    <button class="flex justify-between items-center w-full text-left font-medium faq-toggle">
                        <span>Can I install a control panel on my dedicated server?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p>Absolutely! Our dedicated servers support popular control panels like cPanel, Plesk,
                            CyberPanel, Hestia, Cloudpanel, and
                            ISPManager. If you buy a license from us, we’ll take care of the installation for free, so
                            you don’t have to worry about
                            setup.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog Section -->
        <section class="bg-gray-50 py-20">
            <div class="container max-w-screen-xl mx-auto px-4">
                <!-- Heading + Button -->
                <div class="flex justify-between items-center mb-10">
                    <h2 class="text-2xl md:text-3xl font-bold">Find out About Dedicated Web Hosting Tips</h2>
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
