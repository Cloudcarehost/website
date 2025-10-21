<x-user-layout>
    @section('title', 'Web Hosting & Domain Services | Fast, Secure & Reliable - CloudCareHost')
    @section('meta_description', 'Fast and secure hosting from CloudCareHost. Get shared, VPS, and dedicated servers, domain registration, SSL certificates, and 24/7 support.')
    @section('meta_keywords', 'web hosting, cloud hosting, vps hosting, high availability vps, dedicated server hosting, reseller hosting, wordpress hosting, buy domain name, secure ssl certificates, best hosting provider')
    @section('meta_author', 'Cloud Care Host')
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-gray-50 to-indigo-50 py-18 relative overflow-hidden">
        <div class="container max-w-screen-xl mx-auto mx-auto mx-auto px-4 flex flex-col lg:flex-row items-center">
            <div class="lg:w-1/2 mb-12 lg:mb-0 text-center lg:text-left animate__animated animate__fadeInDown">
                <h1 class="text-2xl md:text-3xl font-montserrat leading-tight">
                    <span
                        class="font-bold bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 bg-clip-text text-transparent">Powerful</span>
                    +
                    <span
                        class="font-bold bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 bg-clip-text text-transparent">Secure</span>
                    +
                    <span
                        class="font-bold bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 bg-clip-text text-transparent">Scalable</span>
                </h1>
                <h1 class="text-3xl md:text-5xl font-bold font-montserrat text-gray-900 mb-6 leading-tight">Fastest Web
                    Hosting
                </h1>
                <p class="text-lg text-gray-600 mb-8 animate__animated animate__fadeInDown animate__delay-1s">We provide
                    reliable web hosting solutions tailored for developers, startups, and
                    businesses of all sizes. Whether you're launching a personal blog, a WordPress site, or a
                    high-traffic web application, our infrastructure delivers speed, uptime, and performance without
                    compromise.</p>

                <div
                    class="flex flex-wrap justify-center mb-8 lg:justify-start gap-3 animate__animated animate__fadeIn animate__delay-2s">
                    <span class="bg-white px-4 py-2 rounded-full text-sm font-medium shadow-sm">SSD-Powered
                        Servers</span>
                    <span class="bg-white px-4 py-2 rounded-full text-sm font-medium shadow-sm">cPanel + WHM</span>
                    <span class="bg-white px-4 py-2 rounded-full text-sm font-medium shadow-sm">One-Click App
                        Installer</span>
                    <span class="bg-white px-4 py-2 rounded-full text-sm font-medium shadow-sm">24/7 Technical
                        Support</span>

                    <span class="bg-white px-4 py-2 rounded-full text-sm font-medium shadow-sm">Transparent
                        pricing</span>
                </div>

                <a href="https://clients.cloudcarehost.com/index.php?rp=/store/shared-hosting/shared-starter"
                    class="block w-47 bg-indigo-500 hover:bg-indigo-600 text-white text-center py-2 px-4 rounded-lg font-medium transition-colors">
                    Get Started
                </a>
            </div>

            <div class="lg:w-1/2 animate__animated animate__fadeInRight animate__delay-1s">
                <img src="{{ asset('images/hero1.webp') }}" alt="Cloud Hosting Illustration"
                    class="max-w-full animate-float">
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="bg-gray-50 py-20">
        <div class="container max-w-screen-xl mx-auto mx-auto mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold font-montserrat text-center mb-4">Everything You Need to Succeed
                Online</h2>
            <p class="text-gray-500 text-lg text-center max-w-2xl mx-auto mb-16">From domains to hosting, we've got you
                covered</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div
                    class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-shadow animate__animated animate__fadeInUp">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-blue-100 to-blue-200 rounded-full flex items-center justify-center text-indigo-600 text-3xl mb-6 mx-auto">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-3">Lightning Fast Servers</h3>
                    <p class="text-gray-500 text-center">Our SSD-powered servers ensure your website loads in
                        milliseconds.</p>
                </div>

                <div
                    class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-shadow animate__animated animate__fadeInUp animate__delay-1s">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-blue-100 to-blue-200 rounded-full flex items-center justify-center text-indigo-600 text-3xl mb-6 mx-auto">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-3">Top-notch Security</h3>
                    <p class="text-gray-500 text-center">Free SSL certificates and daily backups to keep your data safe.
                    </p>
                </div>

                <div
                    class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-shadow animate__animated animate__fadeInUp animate__delay-2s">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-blue-100 to-blue-200 rounded-full flex items-center justify-center text-indigo-600 text-3xl mb-6 mx-auto">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-3">24/7 Expert Support</h3>
                    <p class="text-gray-500 text-center">Our hosting experts are available round the clock to assist
                        you.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Hosting Plans Section -->
    <section class="bg-white py-20">
        <div id="plansData" class="container max-w-screen-xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold font-montserrat text-center mb-4">The Right Hosting for Every
                Stage of
                Your Journey</h2>
            <p class="text-gray-500 text-lg text-center max-w-2xl mx-auto mb-8">
                Choose a plan that fits your budget, focus on building your website, and watch it grow.
                Our hosting is built to expand with you, every step of the way.
            </p>

            <div class="flex justify-center mb-8">
                <div class="inline-flex items-center bg-gray-100 rounded-lg p-1 billing-toggle">
                    <button data-period="monthly"
                        class="px-4 py-2 rounded-md font-medium billing-btn bg-indigo-600 text-white">Monthly</button>
                    <button data-period="annually"
                        class="px-4 py-2 rounded-md font-medium billing-btn bg-gray-200 text-gray-700">
                        Yearly (Save {{ $data[0]->usd_discounted_annually }}%)
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
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
                                            data-triennially="{{ $plan->usd_triennially }}">${{ $plan->usd_monthly }}</span>
                                        <span class="text-sm font-normal text-gray-500">/mo</span>
                                    </div>
                                    <p class="text-sm text-gray-500 plan-total" data-monthly="Billed monthly"
                                        data-annually="${{ $plan->usd_annually }} billed yearly"
                                        data-biennially="${{ $plan->usd_biennially }} billed every 2 years"
                                        data-triennially="${{ $plan->usd_triennially }} billed every 3 years">
                                        Billed monthly
                                    </p>
                                    <div class="text-xs text-gray-400 line-through mt-1 original-price" data-monthly=""
                                        data-annually="Originally ${{ number_format($plan->usd_monthly * 12, 2) }}"
                                        data-biennially="Originally ${{ number_format($plan->usd_monthly * 24, 2) }}"
                                        data-triennially="Originally ${{ number_format($plan->usd_monthly * 36, 2) }}">
                                    </div>
                                </div>

                                <ul class="space-y-2 mb-6">
                                    @php
                                        $features = json_decode($plan->features_json);
                                    @endphp
                                    @foreach(array_slice($features, 0, 9) as $feature)
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
                    const monthlyPrice = parseFloat(priceElement.dataset.monthly);
                    const periodPrice = parseFloat(priceElement.dataset[period]);

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
                    priceElement.textContent = `$${equivalentMonthlyPrice}`;

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

        <div class="container max-w-screen-xl mx-auto px-4 mt-12 text-center">
            <h2 class="text-3xl md:text-4xl font-bold font-montserrat mb-4">
                We provide Shared Hosting with unbeatable features and benefits
            </h2>
            <p class="text-gray-500 text-lg max-w-3xl mx-auto mb-12">
                Experience performance that can only be described as extraordinary and shared web hosting that
                is unprecedented, with these exclusive free features.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white p-8 rounded-2xl border hover:shadow-lg transition">
                    <div class="text-indigo-500 text-5xl mb-4">
                        <i class="fas fa-infinity"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Unlimited Bandwidth</h3>
                    <p class="text-gray-500">
                        There are no limits on the amount of traffic your hosting site or app can receive. Unlimited
                        traffic applies to both incoming and outgoing data.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white p-8 rounded-2xl border hover:shadow-lg transition">
                    <div class="text-indigo-500 text-5xl mb-4">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Powered by cPanel</h3>
                    <p class="text-gray-500">
                        The most popular and powerful web hosting control panel for easy point-and-click management of
                        your hosting account.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white p-8 rounded-2xl border hover:shadow-lg transition">
                    <div class="text-indigo-500 text-5xl mb-4">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Shared Server 99.99% Uptime</h3>
                    <p class="text-gray-500">
                        Our business-class track record means some of the industry’s best uptime performance. We’re so
                        confident in our infrastructure, we guarantee 99.99% uptime.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section -->
    <section class="bg-gray-50 py-20">
        <div class="container max-w-screen-xl mx-auto px-4">

            <!-- Top Features -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center mb-16">
                <div>
                    <div class="text-indigo-600 text-3xl mb-4">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-2">Affordable Power</h3>
                    <p class="text-gray-500">Blazing fast premium cloud web hosting that's easily scalable and
                        affordable.</p>
                </div>
                <div>
                    <div class="text-indigo-600 text-3xl mb-4">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-2">Complete Control</h3>
                    <p class="text-gray-500">Easily build and manage your website to fit your specific needs in a "guru
                        free" control panel.</p>
                </div>
                <div>
                    <div class="text-indigo-600 text-3xl mb-4">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-2">Unmatched Security</h3>
                    <p class="text-gray-500">Protect your reputation, business, and brand with our unique Security
                        Shield included free.</p>
                </div>
                <div>
                    <div class="text-indigo-600 text-3xl mb-4">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-2">Supreme Reliability</h3>
                    <p class="text-gray-500">Sleep sound knowing your website is online around the clock with real
                        SuperHeroes monitoring 24x7x365.</p>
                </div>
            </div>

            <!-- Quick Setup Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-20">
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold mb-4">Quick And Easy To Setup</h2>
                    <p class="text-gray-600 mb-6">
                        No gurus needed here! Easily setup your website on our high-speed private cloud without any
                        previous or technical knowledge required.
                        Manage all of your content, emails, and domains right inside of our platform. Build dynamic
                        online stores secured by free and automatic SSL that rank higher in search engines!
                    </p>
                    <a href="#" class="text-indigo-600 font-semibold">Learn More</a>
                </div>
                <div class="flex justify-center">
                    <img src="{{ asset('images/home-001.webp') }}" alt="Setup Illustration" class="max-w-full">
                </div>
            </div>

            <!-- Faster Website Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-20">
                <div class="flex justify-center order-1 md:order-none">
                    <img src="{{ asset('images/home-001.webp') }}" alt="Speed Illustration" class="max-w-full">
                </div>
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold mb-4">Your Website 20x Faster</h2>
                    <p class="text-gray-600 mb-6">
                        People don’t visit slow websites. Recall the last slow website you visited. How would you
                        describe that experience?
                        A slow website is not only annoying but damaging to your search engine results and reputation.
                        We’re committed to delivering blazing fast load times for websites of all sizes!
                    </p>
                    <a href="#" class="text-indigo-600 font-semibold">Learn More</a>
                </div>
            </div>

            <!-- Quick Setup Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold mb-4">Supreme Reliability</h2>
                    <p class="text-gray-600 mb-6">
                        If people can't reach your website it's worthless. Downtime not only costs you lost revenue but
                        can also diminish your reputation and hurt your brand. We believe every website, regardless of
                        size, is entitled to 99.9% uptime and we've been providing it since 2015 for a simple and
                        affordable rate.
                    </p>
                    <a href="#" class="text-indigo-600 font-semibold">Learn More</a>
                </div>
                <div class="flex justify-center">
                    <img src="{{ asset('images/home-001.webp') }}" alt="Setup Illustration" class="max-w-full">
                </div>
            </div>

        </div>
    </section>

    <!-- Development Solutions Section -->
    <section class="py-20 bg-gradient-to-br from-indigo-50 via-white to-purple-50">
        <div class="container max-w-6xl mx-auto px-6">

            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Full-Stack <span class="text-indigo-600">Development Solutions</span>
                </h2>
                <p class="text-gray-600 max-w-3xl mx-auto text-lg">
                    From stunning websites to powerful enterprise software, our development team builds digital solutions
                    that drive growth, efficiency, and customer engagement. Whether you’re a startup or an enterprise,
                    we turn your ideas into scalable reality.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-transform duration-300 hover:-translate-y-1">
                    <div class="w-12 h-12 bg-indigo-100 text-indigo-600 flex items-center justify-center rounded-lg mb-4">
                        <i class="fas fa-globe text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Web Development</h3>
                    <p class="text-gray-600 mb-4">Custom websites, WordPress, and e-commerce platforms designed for speed, SEO, and scalability.</p>
                    <a href="{{ route('development') }}" class="text-indigo-600 font-semibold hover:underline">
                        Learn More →
                    </a>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-transform duration-300 hover:-translate-y-1">
                    <div class="w-12 h-12 bg-purple-100 text-purple-600 flex items-center justify-center rounded-lg mb-4">
                        <i class="fas fa-mobile-alt text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Mobile App Development</h3>
                    <p class="text-gray-600 mb-4">Native Android, iOS, and cross-platform apps that offer seamless user experiences and performance.</p>
                    <a href="{{ route('development') }}" class="text-indigo-600 font-semibold hover:underline">
                        Learn More →
                    </a>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-transform duration-300 hover:-translate-y-1">
                    <div class="w-12 h-12 bg-pink-100 text-pink-600 flex items-center justify-center rounded-lg mb-4">
                        <i class="fas fa-building text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Enterprise Solutions</h3>
                    <p class="text-gray-600 mb-4">ERP, CRM, and custom business applications tailored to streamline your operations and data flow.</p>
                    <a href="{{ route('development') }}" class="text-indigo-600 font-semibold hover:underline">
                        Learn More →
                    </a>
                </div>
            </div>

            <div class="bg-gradient-to-r from-indigo-50 to-purple-50 rounded-2xl p-8 md:p-12 mb-12 mt-10">
                <h3 class="text-2xl font-bold text-gray-800 mb-8 text-center">Our Development Process</h3>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <div class="text-center">
                        <div class="w-12 h-12 bg-indigo-600 rounded-full flex items-center justify-center text-white font-bold text-lg mx-auto mb-3">
                            1
                        </div>
                        <h4 class="font-semibold text-gray-800 mb-2">Discovery & Planning</h4>
                        <p class="text-gray-600 text-sm">Understanding your requirements and creating a detailed project roadmap</p>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center text-white font-bold text-lg mx-auto mb-3">
                            2
                        </div>
                        <h4 class="font-semibold text-gray-800 mb-2">Design & Prototyping</h4>
                        <p class="text-gray-600 text-sm">Creating wireframes, mockups, and interactive prototypes</p>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-lg mx-auto mb-3">
                            3
                        </div>
                        <h4 class="font-semibold text-gray-800 mb-2">Development & Testing</h4>
                        <p class="text-gray-600 text-sm">Building with clean code and rigorous quality assurance</p>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center text-white font-bold text-lg mx-auto mb-3">
                            4
                        </div>
                        <h4 class="font-semibold text-gray-800 mb-2">Deployment & Support</h4>
                        <p class="text-gray-600 text-sm">Launching on our optimized hosting with ongoing maintenance</p>
                    </div>
                </div>
            </div>


        <div class="mb-16">
            <h3 class="text-2xl font-bold text-gray-800 mb-8 text-center">Our Technology Stack</h3>

            <div class="tech-scroll-container">
                <div class="tech-scroll">
                    <!-- Laravel -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-laravel text-red-500 text-2xl"></i>
                        </div>
                        <span class="tech-name">Laravel</span>
                    </div>
                    <!-- React -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-react text-blue-500 text-2xl"></i>
                        </div>
                        <span class="tech-name">React</span>
                    </div>
                    <!-- Vue.js -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-vuejs text-green-500 text-2xl"></i>
                        </div>
                        <span class="tech-name">Vue.js</span>
                    </div>
                    <!-- Node.js -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-node-js text-green-600 text-2xl"></i>
                        </div>
                        <span class="tech-name">Node.js</span>
                    </div>
                    <!-- Python -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-python text-yellow-500 text-2xl"></i>
                        </div>
                        <span class="tech-name">Python</span>
                    </div>
                    <!-- WordPress -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-wordpress text-blue-600 text-2xl"></i>
                        </div>
                        <span class="tech-name">WordPress</span>
                    </div>
                    <!-- Angular -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-angular text-red-600 text-2xl"></i>
                        </div>
                        <span class="tech-name">Angular</span>
                    </div>
                    <!-- Flutter -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fas fa-mobile text-blue-400 text-2xl"></i>
                        </div>
                        <span class="tech-name">Flutter</span>
                    </div>
                    <!-- Swift -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-swift text-orange-500 text-2xl"></i>
                        </div>
                        <span class="tech-name">Swift</span>
                    </div>
                    <!-- Kotlin -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fas fa-code text-purple-600 text-2xl"></i>
                        </div>
                        <span class="tech-name">Kotlin</span>
                    </div>
                    <!-- Docker -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-docker text-blue-500 text-2xl"></i>
                        </div>
                        <span class="tech-name">Docker</span>
                    </div>
                    <!-- AWS -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-aws text-orange-500 text-2xl"></i>
                        </div>
                        <span class="tech-name">AWS</span>
                    </div>
                    <!-- MongoDB -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fas fa-database text-green-500 text-2xl"></i>
                        </div>
                        <span class="tech-name">MongoDB</span>
                    </div>
                    <!-- MySQL -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fas fa-database text-blue-600 text-2xl"></i>
                        </div>
                        <span class="tech-name">MySQL</span>
                    </div>
                    <!-- TypeScript -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fas fa-code text-blue-700 text-2xl"></i>
                        </div>
                        <span class="tech-name">TypeScript</span>
                    </div>
                    <!-- GraphQL -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fas fa-project-diagram text-pink-500 text-2xl"></i>
                        </div>
                        <span class="tech-name">GraphQL</span>
                    </div>
                    <!-- Redis -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fas fa-bolt text-red-600 text-2xl"></i>
                        </div>
                        <span class="tech-name">Redis</span>
                    </div>
                    <!-- Git -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-git-alt text-orange-600 text-2xl"></i>
                        </div>
                        <span class="tech-name">Git</span>
                    </div>
                    <!-- JavaScript -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-js-square text-yellow-400 text-2xl"></i>
                        </div>
                        <span class="tech-name">JavaScript</span>
                    </div>
                    <!-- PHP -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-php text-purple-500 text-2xl"></i>
                        </div>
                        <span class="tech-name">PHP</span>
                    </div>
                    <!-- HTML5 -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-html5 text-orange-500 text-2xl"></i>
                        </div>
                        <span class="tech-name">HTML5</span>
                    </div>
                    <!-- CSS3 -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-css3-alt text-blue-500 text-2xl"></i>
                        </div>
                        <span class="tech-name">CSS3</span>
                    </div>
                    <!-- Tailwind CSS -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fas fa-wind text-teal-500 text-2xl"></i>
                        </div>
                        <span class="tech-name">Tailwind</span>
                    </div>
                    <!-- Bootstrap -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-bootstrap text-purple-600 text-2xl"></i>
                        </div>
                        <span class="tech-name">Bootstrap</span>
                    </div>
                    <!-- Google Cloud -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-google text-blue-500 text-2xl"></i>
                        </div>
                        <span class="tech-name">GCP</span>
                    </div>
                    <!-- Azure -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-microsoft text-blue-600 text-2xl"></i>
                        </div>
                        <span class="tech-name">Azure</span>
                    </div>
                    
                    <!-- Duplicate set for seamless looping -->
                    <!-- Laravel -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-laravel text-red-500 text-2xl"></i>
                        </div>
                        <span class="tech-name">Laravel</span>
                    </div>
                    <!-- React -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-react text-blue-500 text-2xl"></i>
                        </div>
                        <span class="tech-name">React</span>
                    </div>
                    <!-- Vue.js -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-vuejs text-green-500 text-2xl"></i>
                        </div>
                        <span class="tech-name">Vue.js</span>
                    </div>
                    <!-- Node.js -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-node-js text-green-600 text-2xl"></i>
                        </div>
                        <span class="tech-name">Node.js</span>
                    </div>
                    <!-- Python -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-python text-yellow-500 text-2xl"></i>
                        </div>
                        <span class="tech-name">Python</span>
                    </div>
                    <!-- WordPress -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-wordpress text-blue-600 text-2xl"></i>
                        </div>
                        <span class="tech-name">WordPress</span>
                    </div>
                    <!-- Angular -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-angular text-red-600 text-2xl"></i>
                        </div>
                        <span class="tech-name">Angular</span>
                    </div>
                    <!-- Flutter -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fas fa-mobile text-blue-400 text-2xl"></i>
                        </div>
                        <span class="tech-name">Flutter</span>
                    </div>
                    <!-- Swift -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-swift text-orange-500 text-2xl"></i>
                        </div>
                        <span class="tech-name">Swift</span>
                    </div>
                    <!-- Kotlin -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fas fa-code text-purple-600 text-2xl"></i>
                        </div>
                        <span class="tech-name">Kotlin</span>
                    </div>
                    <!-- Docker -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-docker text-blue-500 text-2xl"></i>
                        </div>
                        <span class="tech-name">Docker</span>
                    </div>
                    <!-- AWS -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-aws text-orange-500 text-2xl"></i>
                        </div>
                        <span class="tech-name">AWS</span>
                    </div>
                    <!-- MongoDB -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fas fa-database text-green-500 text-2xl"></i>
                        </div>
                        <span class="tech-name">MongoDB</span>
                    </div>
                    <!-- MySQL -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fas fa-database text-blue-600 text-2xl"></i>
                        </div>
                        <span class="tech-name">MySQL</span>
                    </div>
                    <!-- TypeScript -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fas fa-code text-blue-700 text-2xl"></i>
                        </div>
                        <span class="tech-name">TypeScript</span>
                    </div>
                    <!-- GraphQL -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fas fa-project-diagram text-pink-500 text-2xl"></i>
                        </div>
                        <span class="tech-name">GraphQL</span>
                    </div>
                    <!-- Redis -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fas fa-bolt text-red-600 text-2xl"></i>
                        </div>
                        <span class="tech-name">Redis</span>
                    </div>
                    <!-- Git -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-git-alt text-orange-600 text-2xl"></i>
                        </div>
                        <span class="tech-name">Git</span>
                    </div>
                    <!-- JavaScript -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-js-square text-yellow-400 text-2xl"></i>
                        </div>
                        <span class="tech-name">JavaScript</span>
                    </div>
                    <!-- PHP -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-php text-purple-500 text-2xl"></i>
                        </div>
                        <span class="tech-name">PHP</span>
                    </div>
                    <!-- HTML5 -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-html5 text-orange-500 text-2xl"></i>
                        </div>
                        <span class="tech-name">HTML5</span>
                    </div>
                    <!-- CSS3 -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-css3-alt text-blue-500 text-2xl"></i>
                        </div>
                        <span class="tech-name">CSS3</span>
                    </div>
                    <!-- Tailwind CSS -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fas fa-wind text-teal-500 text-2xl"></i>
                        </div>
                        <span class="tech-name">Tailwind</span>
                    </div>
                    <!-- Bootstrap -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-bootstrap text-purple-600 text-2xl"></i>
                        </div>
                        <span class="tech-name">Bootstrap</span>
                    </div>
                    <!-- Google Cloud -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-google text-blue-500 text-2xl"></i>
                        </div>
                        <span class="tech-name">GCP</span>
                    </div>
                    <!-- Azure -->
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fab fa-microsoft text-blue-600 text-2xl"></i>
                        </div>
                        <span class="tech-name">Azure</span>
                    </div>
                </div>
            </div>
        </div>

            <div class="text-center mt-16">
                <a href="{{ route('development') }}"
                class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-8 rounded-lg shadow-lg transition-colors">
                    Explore All Development Solutions
                </a>
            </div>
        </div>
    </section>
    <style>
        .tech-scroll-container {
            overflow: hidden;
            position: relative;
            width: 100%;
            margin: 2rem 0;
        }

        .tech-scroll {
            display: flex;
            width: max-content;
            animation: scroll 40s linear infinite;
        }

        .tech-scroll:hover {
            animation-play-state: paused;
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }

        .tech-item {
            text-align: center;
            flex-shrink: 0;
            width: 100px;
            margin: 0 1.5rem;
        }

        .tech-icon {
            width: 70px;
            height: 70px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 0.5rem;
            transition: all 0.3s ease;
        }

        .tech-item:hover .tech-icon {
            transform: scale(1.1);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        .tech-name {
            font-size: 0.875rem;
            color: #6b7280;
            font-weight: 500;
        }
    </style>
    <!-- Section -->
    <section class="bg-gray-50 py-20">
        <div class="container max-w-screen-xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

            <!-- Left Content -->
            <div>
                <h2 class="text-3xl md:text-4xl font-bold font-montserrat mb-6">
                    Here to help 24/7
                </h2>
                <ul class="space-y-4 text-gray-600 text-lg">
                    <li class="flex items-start">
                        <span class="text-green-500 mr-3 mt-1"><i class="fas fa-check"></i></span>
                        Access expert support whenever you need it via live chat and email
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-500 mr-3 mt-1"><i class="fas fa-check"></i></span>
                        Our specialists are fluent in 8+ languages so you can be sure communication will be smooth
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-500 mr-3 mt-1"><i class="fas fa-check"></i></span>
                        Spend less time waiting, our speedy support team typically responds in under 2 minutes
                    </li>
                </ul>
            </div>

            <!-- Right Content (Chat Box) -->
            <div class="relative bg-white rounded-2xl shadow-lg p-6">
                <!-- Active bar -->
                <div class="bg-purple-800 text-white text-sm px-4 py-2 rounded-t-xl flex justify-between items-center">
                    <span class="flex items-center">
                        <span class="w-2 h-2 bg-green-400 rounded-full mr-2"></span> Active
                    </span>
                    <button><i class="fas fa-times"></i></button>
                </div>

                <!-- Chat bubbles -->
                <div class="p-4 space-y-4">
                    <!-- User message -->
                    <div class="flex items-start space-x-3">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="user"
                            class="w-10 h-10 rounded-full">
                        <div class="bg-purple-500 text-white p-3 rounded-xl max-w-xs">
                            Hello, I would like to migrate my website to CloudCareHost.
                        </div>
                    </div>

                    <!-- Support reply -->
                    <div class="flex items-start space-x-3 justify-end">
                        <div class="bg-purple-900 text-white p-3 rounded-xl max-w-xs text-sm">
                            Hi, I’ll be glad to help you out. It's just three simple steps.
                            Let me show you how.
                        </div>
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="support"
                            class="w-10 h-10 rounded-full">
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="bg-white py-20">
        <div class="container max-w-screen-xl mx-auto mx-auto mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold font-montserrat text-center mb-4">What Our Customers Say</h2>
            <p class="text-gray-500 text-lg text-center max-w-2xl mx-auto mb-16">Join 50,000+ happy customers worldwide
            </p>

            <div class="flex overflow-x-auto gap-8 py-4 px-2 -mx-2" id="testimonialSlider">
                <div class="flex-shrink-0 w-full sm:w-96 bg-white p-8 rounded-xl shadow-md">
                    <div class="mb-6">
                        <div class="text-yellow-400 mb-4">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="text-gray-700 italic">"Cloud Care Host made migrating my website effortless. Their
                            support team was incredibly helpful and the performance is outstanding."</p>
                    </div>
                    <div class="flex items-center">
                        <!-- <img src="https://via.placeholder.com/50" alt="Sarah J." class="rounded-full mr-4"> -->
                        <div>
                            <h4 class="font-bold">Sarah J.</h4>
                            <p class="text-gray-500 text-sm">Small Business Owner</p>
                        </div>
                    </div>
                </div>

                <div class="flex-shrink-0 w-full sm:w-96 bg-white p-8 rounded-xl shadow-md">
                    <div class="mb-6">
                        <div class="text-yellow-400 mb-4">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="text-gray-700 italic">"I've been using Cloud Care Host for all my client projects. The
                            uptime is reliable and the pricing is very competitive."</p>
                    </div>
                    <div class="flex items-center">
                        <!-- <img src="https://via.placeholder.com/50" alt="Michael T." class="rounded-full mr-4"> -->
                        <div>
                            <h4 class="font-bold">Michael T.</h4>
                            <p class="text-gray-500 text-sm">Web Developer</p>
                        </div>
                    </div>
                </div>

                <div class="flex-shrink-0 w-full sm:w-96 bg-white p-8 rounded-xl shadow-md">
                    <div class="mb-6">
                        <div class="text-yellow-400 mb-4">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p class="text-gray-700 italic">"The one-click WordPress installation saved me so much time. My
                            blog has never loaded faster!"</p>
                    </div>
                    <div class="flex items-center">
                        <!-- <img src="https://via.placeholder.com/50" alt="Emily R." class="rounded-full mr-4"> -->
                        <div>
                            <h4 class="font-bold">Emily R.</h4>
                            <p class="text-gray-500 text-sm">Blogger</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class=" bg-white p-20 py-20">
        <div class="bg-white rounded-xl shadow-md p-8 py-12">
            <h2 class="text-3xl font-bold font-montserrat mb-8 text-center">Frequently Asked Questions</h2>

            <div class="space-y-4">
                <div class="border-b border-gray-200 pb-4">
                    <button class="flex justify-between items-center w-full text-left font-medium faq-toggle">
                        <span>What is shared hosting?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p>Shared hosting is a type of web hosting where multiple websites share the same server
                            resources.
                            It's the most affordable hosting option and is perfect for small websites, blogs, and
                            personal
                            projects that don't require dedicated resources.</p>
                    </div>
                </div>

                <div class="border-b border-gray-200 pb-4">
                    <button class="flex justify-between items-center w-full text-left font-medium faq-toggle">
                        <span>Can I upgrade my plan later?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p>Yes, you can upgrade your shared hosting plan at any time without any downtime. Our support
                            team
                            can help you migrate to a higher plan or even to a VPS or dedicated server when your website
                            grows.</p>
                    </div>
                </div>

                <div class="border-b border-gray-200 pb-4">
                    <button class="flex justify-between items-center w-full text-left font-medium faq-toggle">
                        <span>Do you offer a money-back guarantee?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p>Yes, we offer a 30-day money-back guarantee on all our shared hosting plans. If you're not
                            satisfied with our service, you can cancel within the first 30 days for a full refund.</p>
                    </div>
                </div>

                <div class="border-gray-200">
                    <button class="flex justify-between items-center w-full text-left font-medium faq-toggle">
                        <span>What control panel do you use?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p>We use cPanel, the industry-standard hosting control panel that makes managing your website,
                            emails, databases, and files simple and intuitive.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="bg-gray-50 py-20">
        <div class="container max-w-screen-xl mx-auto px-4">
            <!-- Heading + Button -->
            <div class="flex justify-between items-center mb-10">
                <h2 class="text-2xl md:text-3xl font-bold">Find Out About Web Hosting Tips</h2>
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


    <!-- CTA Section -->
    <section class="bg-gradient-to-r from-indigo-600 to-indigo-700 py-10 text-white">
        <div class="container max-w-screen-xl mx-auto mx-auto mx-auto px-4 flex flex-col lg:flex-row items-center">
            <div class="lg:w-1/2 mb-12 lg:mb-0 text-center lg:text-left">
                <h2 class="text-3xl md:text-4xl font-bold font-montserrat mb-6">Ready to Launch Your Website?</h2>
                <p class="text-lg opacity-90 mb-8">Get started with Cloud Care Host today and get your website online in
                    minutes.</p>
                <button
                    class="bg-white text-indigo-600 hover:bg-gray-100 px-8 py-4 rounded-lg font-medium transition-colors">Get
                    Started Now</button>
            </div>
            <div class="lg:w-1/2">
                <img src="{{ asset('images/hero1.webp') }}" alt="Get Started"
                    class="rounded-lg shadow-xl max-w-full animate-float">
            </div>
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
</x-user-layout>
