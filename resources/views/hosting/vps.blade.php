<x-hosting-layout title="High Availability Cloud Provider"
    description="Step into the online world with hosting optimized for performance and user-friendliness.">
        @section('title', 'High Availability VPS Hosting | Fast & Secure - CloudCareHost')
    @section('meta_description', 'Boost performance with High Availability VPS hosting. SSDs, root access, DDoS protection, backups, and 24/7 expert support included.')
    @section('meta_keywords', 'vps hosting, high availability vps, best vps hosting, affordable vps server, managed vps hosting, vps with root access, vps hosting for developers, secure vps hosting, scalable vps hosting, web hosting company, hosting services, secure hosting, hosting in India')
    @section('meta_author', 'Cloud Care Host')
    
    <div class="mb-12">

        <!-- Hero Section -->
        <section class="bg-gradient-to-br from-gray-50 to-indigo-50 py-18 relative overflow-hidden">
            <div
                class="container max-w-screen-xl mx-auto mx-auto mx-auto px-4 flex flex-col lg:flex-row lg:space-x-4 items-center">
                <div class="lg:w-1/2 mb-12 lg:mb-0 text-center lg:text-left animate__animated animate__fadeInDown">
                    <h1 class="text-3xl md:text-5xl font-bold font-montserrat text-gray-900 mb-6 leading-tight">
                        High Availability Cloud Provider</h1>
                    <p class="text-lg text-gray-600 mb-8 animate__animated animate__fadeInDown animate__delay-1s">
                        Secure & Scalable HA Cloud VPS Hosting Solutions
                        Run your projects on lightning-fast VPS powered by SSD storage and High Availability
                        architecture. Enjoy unlimited bandwidth, dedicated resources, and full root access, ideal for
                        developers, startups, and high-traffic websites.
                        Guaranteed CPU, Memory & SSD storage for rock-solid performance
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
                            HA infrastructure keeps your services online even if hardware fails</span>
                        <span class="bg-white px-4 py-2 rounded-full text-sm font-medium shadow-sm">
                            Instant provisioning with flexible scaling as your needs grow</span>
                        <!-- <span class="bg-white px-4 py-2 rounded-full text-sm font-medium shadow-sm">24/7 Support</span> -->

                        <span class="bg-white px-4 py-2 rounded-full text-sm font-medium shadow-sm">Round-the-clock
                            monitoring and help, anytime</span>
                        <!-- <span class="bg-white px-4 py-2 rounded-full text-sm font-medium shadow-sm">cPanel + WHM</span> -->
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
                <h2 class="text-3xl md:text-4xl font-bold font-montserrat text-center mb-4">Buy VPS Hosting for
                    Flexibility & Performance</h2>
                <p class="text-gray-500 text-lg text-center max-w-2xl mx-auto mb-6">
                    Choose from multiple global server locations and take advantage of High Availability Cloud VPS for
                    unbeatable uptime and
                    enterprise-grade speed. Scale resources on demand, all backed by our 24/7 support team.
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
                        <button data-period="biennially"
                            class="px-4 py-2 rounded-md font-medium billing-btn bg-gray-200 text-gray-700">
                            2 Years (Save {{ $data[0]->usd_discounted_biennially }}%)
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
                                                data-quarterly="{{ $plan->usd_quarterly }}"
                                                data-semiannually="{{ $plan->usd_semiannually }}"
                                                data-annually="{{ $plan->usd_annually }}"
                                                data-biennially="{{ $plan->usd_biennially }}">${{ $plan->usd_monthly }}</span>
                                            <span class="text-sm font-normal text-gray-500">/mo</span>
                                        </div>
                                        <p class="text-sm text-gray-500 plan-total" data-monthly="Billed monthly"
                                            data-quarterly="${{ $plan->usd_quarterly }} billed quarterly"
                                            data-semiannually="${{ $plan->usd_semiannually }} billed semi-annually"
                                            data-annually="${{ $plan->usd_annually }} billed yearly"
                                            data-biennially="${{ $plan->usd_biennially }} billed every 2 years">
                                            Billed monthly
                                        </p>
                                        <div class="text-xs text-gray-400 line-through mt-1 original-price" data-monthly=""
                                            data-quarterly="Originally ${{ number_format($plan->usd_monthly * 3, 2) }}"
                                            data-semiannually="Originally ${{ number_format($plan->usd_monthly * 6, 2) }}"
                                            data-annually="Originally ${{ number_format($plan->usd_monthly * 12, 2) }}"
                                            data-biennially="Originally ${{ number_format($plan->usd_monthly * 24, 2) }}">
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
                                            <span class="font-medium">${{ $plan->usd_quarterly }} <span
                                                    class="text-red-500">({{ $plan->usd_discounted_quaterly }}%
                                                    OFF)</span></span>
                                        </div>
                                        <div class="flex justify-between py-1 border-b border-gray-100">
                                            <span>Semi-Annually</span>
                                            <span class="font-medium">${{ $plan->usd_semiannually }} <span
                                                    class="text-red-500">({{ $plan->usd_discounted_semiannually }}%
                                                    OFF)</span></span>
                                        </div>
                                        <div class="flex justify-between py-1">
                                            <span>2 Years</span>
                                            <span class="font-medium">${{ $plan->usd_biennially }} <span
                                                    class="text-red-500">({{ $plan->usd_discounted_biennially }}%
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
                        const monthlyPrice = parseFloat(priceElement.dataset.monthly);
                        const periodPrice = parseFloat(priceElement.dataset[period]);

                        // Validate prices
                        if (isNaN(monthlyPrice) || isNaN(periodPrice)) {
                            console.error('Invalid price data for period:', period);
                            return;
                        }

                        // Calculate the equivalent monthly price for display
                        let months = 1;
                        if (period === 'quarterly') months = 3;
                        if (period === 'semiannually') months = 6;
                        if (period === 'annually') months = 12;
                        if (period === 'biennially') months = 24;

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
        </script>
        <style>
            .discount-badge.hidden {
                display: none !important;
            }
        </style>

        <!-- Section -->
        <section class="bg-white py-4">
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
                        Fully Managed VPS Hosting
                    </h2>

                    <!-- Lead paragraph (similar style to your original) -->
                    <p class="text-gray-500 text-lg mb-6">
                        Built on the latest tech, our VPS plans deliver the power and stability you need for demanding
                        workloads.
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
                                <strong class="text-gray-900">OS Installation Options</strong> — Pick your favorite
                                Linux
                                distribution — CentOS, Ubuntu, AlmaLinux, or Debian.
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
                                <strong class="text-gray-900">Your Choice of Control Panel</strong> — Manage your VPS
                                with cPanel, CyberPanel, Plesk, or DirectAdmin — whatever works best for your workflow.
                            </p>
                        </li>

                        <!-- <li class="flex items-start gap-3">
                            <span class="flex-shrink-0 mt-1">
                                <svg class="w-6 h-6 text-green-500" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <circle cx="12" cy="12" r="12" fill="currentColor" opacity="0.12" />
                                    <path d="M7 12.5l2.5 2.5L17 7" stroke="currentColor" stroke-width="1.75"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <p class="text-gray-500">
                                <strong class="text-gray-900">Free SSL, daily backups, and advanced security</strong> to
                                protect your site and data.
                            </p>
                        </li> -->

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
                                <strong class="text-gray-900">KVM Virtualization Technology</strong>
                                — Get dedicated, isolated resources with KVM. No noisy neighbors, no slowdowns — just
                                consistent, secure performance for
                                mission-critical applications.
                            </p>
                        </li>
                    </ul>
                </div>

                <!-- Right Image -->
                <div class="flex justify-center">
                    <img src="{{ asset('images/vps1.png') }}"" alt="Web Hosting Illustration"
                        class="max-w-md w-full">
                </div>
            </div>
            <div class="bg-gray-50 py-16">
                <div class="container max-w-screen-xl mx-auto px-4">
                    <!-- Heading -->
                    <h2 class="text-3xl md:text-4xl font-bold font-montserrat text-center mb-4">
                        Instant OS Setup for Your VPS Hosting
                    </h2>
                    <p class="text-gray-500 text-lg text-center max-w-2xl mx-auto mb-16">
                        Looking for a specific OS? Our managed VPS server allows you to install any .iso file via the
                        dedicated
                        ILO/KVM interface.
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
            <div
                class="container max-w-screen-xl mx-auto px-6 mb-16 mt-12 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                        What Makes <span class="text-blue-600">CloudCareHost</span> Different
                    </h2>

                    <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                        Our fully managed VPS hosting delivers enterprise-grade performance with simplicity. Built on
                        cutting-edge technology, we provide the stability and power your demanding workloads require.
                    </p>

                    <img src="{{ asset('images/vps2.png') }}"
                        alt="Cloud Server Management Illustration" class="max-w-md w-full mx-auto">

                    <div class="space-y-6">
                        <!-- Feature 6 -->
                        <div
                            class="flex items-start gap-4 p-5 bg-gray-50 rounded-lg border border-gray-100 hover:border-blue-100 transition-all">
                            <div
                                class="flex-shrink-0 w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-1">High Availability Cloud Servers
                                </h3>
                                <p class="text-gray-600">No extra hardware, no extra work — your VPS comes with built-in
                                    high availability.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Content -->
                <div class="space-y-6">
                    <!-- Feature 1 -->
                    <div
                        class="flex items-start gap-4 p-5 bg-gray-50 rounded-lg border border-gray-100 hover:border-blue-100 transition-all">
                        <div
                            class="flex-shrink-0 w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mt-1">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">VPS Management Panel</h3>
                            <p class="text-gray-600">Start, stop, reboot, or use VNC in just a few clicks with our
                                intuitive control panel.</p>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div
                        class="flex items-start gap-4 p-5 bg-gray-50 rounded-lg border border-gray-100 hover:border-blue-100 transition-all">
                        <div
                            class="flex-shrink-0 w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mt-1">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Real-Time Performance Monitoring</h3>
                            <p class="text-gray-600">Keep an eye on CPU, memory, and disk usage instantly with detailed
                                analytics.</p>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div
                        class="flex items-start gap-4 p-5 bg-gray-50 rounded-lg border border-gray-100 hover:border-blue-100 transition-all">
                        <div
                            class="flex-shrink-0 w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mt-1">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Instant VPS Provisioning</h3>
                            <p class="text-gray-600">Get your server online in minutes, not hours or days.</p>
                        </div>
                    </div>

                    <!-- Feature 4 -->
                    <div
                        class="flex items-start gap-4 p-5 bg-gray-50 rounded-lg border border-gray-100 hover:border-blue-100 transition-all">
                        <div
                            class="flex-shrink-0 w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mt-1">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Dedicated IP Addresses</h3>
                            <p class="text-gray-600">IPv4 included at no extra cost for better security and SEO
                                performance.</p>
                        </div>
                    </div>

                    <!-- Feature 5 -->
                    <div
                        class="flex items-start gap-4 p-5 bg-gray-50 rounded-lg border border-gray-100 hover:border-blue-100 transition-all">
                        <div
                            class="flex-shrink-0 w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mt-1">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Performance-Driven Hosting</h3>
                            <p class="text-gray-600">Powered by Intel Xeon Gold and AMD EPYC CPUs & ECC RAM for maximum
                                reliability.</p>
                        </div>
                    </div>

                    <!-- Feature 7 -->
                    <div
                        class="flex items-start gap-4 p-5 bg-gray-50 rounded-lg border border-gray-100 hover:border-blue-100 transition-all">
                        <div
                            class="flex-shrink-0 w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mt-1">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Unlimited Bandwidth</h3>
                            <p class="text-gray-600">No caps, no throttling, just pure speed for your applications.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section -->
        <section class="bg-gray-50 py-4">
            <div class="container max-w-screen-xl mx-auto px-4">
                <!-- Heading -->
                <h2 class="text-3xl md:text-4xl font-bold font-montserrat text-center mb-4">
                    Instant OS Setup for Your VPS Hosting
                </h2>
                <p class="text-gray-500 text-lg text-center max-w-2xl mx-auto mb-16">
                    Looking for a specific OS? Our managed VPS server allows you to install any .iso file via the
                    dedicated
                    ILO/KVM interface.
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
                        <img src="https://img.icons8.com/color/48/000000/linux.png" alt="AlmaLinux" class="w-12 h-12">
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
        </section>

        <!-- Why Choose CloudCareHost VPS Hosting Section -->
        <section class="bg-gray-50 py-16">
            <div class="container max-w-screen-xl mx-auto px-4">
                <!-- Heading + Decorative elements -->
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Why Choose CloudCareHost VPS Hosting?
                    </h2>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">Experience enterprise-grade performance with our
                        fully managed Virtual Private Server solutions</p>
                    <div class="w-20 h-1 bg-indigo-500 mx-auto mt-6 rounded-full"></div>
                </div>

                <!-- Features Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <!-- Feature 1 -->
                    <div
                        class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">High Availability SSD Storage</h3>
                        <p class="text-gray-600">Blazing-fast, reliable storage for smooth performance with
                            enterprise-grade SSDs.</p>
                    </div>

                    <!-- Feature 2 -->
                    <div
                        class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Easy Scaling</h3>
                        <p class="text-gray-600">Add CPU, RAM, or storage anytime without downtime as your needs grow.
                        </p>
                    </div>

                    <!-- Feature 3 -->
                    <div
                        class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Automated Snapshots</h3>
                        <p class="text-gray-600">Restore your server in minutes if something goes wrong with regular
                            backups.</p>
                    </div>

                    <!-- Feature 4 -->
                    <div
                        class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Advanced Security</h3>
                        <p class="text-gray-600">DDoS protection, firewalls, SSL, and constant monitoring to keep your
                            data safe.</p>
                    </div>

                    <!-- Feature 5 -->
                    <div
                        class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">99.9% Uptime</h3>
                        <p class="text-gray-600">Keep your projects online around the clock with our High Availability
                            guarantee.</p>
                    </div>

                    <!-- Feature 6 -->
                    <div
                        class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Expert Support</h3>
                        <p class="text-gray-600">Real people, ready to help whenever you need them with 24/7 technical
                            support.</p>
                    </div>

                </div>

                <!-- CTA Button -->
                <div class="text-center mt-12">
                    <a href="#"
                        class="inline-block bg-indigo-500 hover:bg-indigo-600 text-white font-medium py-3 px-8 rounded-lg transition duration-300 transform hover:-translate-y-1">
                        Explore VPS Hosting Plans
                    </a>
                </div>
            </div>
        </section>

        <!-- Custom VPS Plan Section -->
        <section class="bg-gradient-to-r from-blue-50 to-indigo-50 py-16">
            <div class="container max-w-screen-xl mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center justify-between gap-10">
                    <!-- Content -->
                    <div class="md:w-1/2">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Need a Custom VPS Plan?</h2>
                        <p class="text-lg text-gray-600 mb-4">
                            Every project is different — and sometimes standard plans aren't enough. If you need more
                            CPU, extra
                            storage, or a fully tailored solution, we can build a custom VPS hosting plan just for you.
                        </p>
                        <p class="text-lg text-gray-600 mb-6">
                            Our experts are available 24/7 to answer your questions, guide you through setup, and make
                            sure your
                            server runs smoothly from day one.
                        </p>
                        <a href="#"
                            class="inline-flex items-center bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl">
                            <span class="mr-2">🚀</span>
                            Ready to Power Your Project
                        </a>
                    </div>

                    <!-- Illustration/Image -->
                    <div class="md:w-1/2 flex justify-center">
                        <div class="relative w-full max-w-md">
                            <div
                                class="absolute -top-6 -left-6 w-24 h-24 bg-purple-200 rounded-lg opacity-50 animate-pulse">
                            </div>
                            <div
                                class="absolute -bottom-6 -right-6 w-24 h-24 bg-indigo-200 rounded-lg opacity-50 animate-pulse delay-500">
                            </div>
                            <div class="relative bg-white p-6 rounded-xl shadow-lg border border-gray-100">
                                <div class="flex items-center mb-4">
                                    <div class="w-3 h-3 bg-red-400 rounded-full mr-2"></div>
                                    <div class="w-3 h-3 bg-yellow-400 rounded-full mr-2"></div>
                                    <div class="w-3 h-3 bg-green-400 rounded-full"></div>
                                </div>
                                <div class="bg-gray-100 p-4 rounded-lg mb-4">
                                    <div class="h-4 bg-gray-300 rounded w-3/4 mb-2"></div>
                                    <div class="h-4 bg-gray-300 rounded w-1/2"></div>
                                </div>
                                <div class="grid grid-cols-2 gap-3">
                                    <div class="bg-blue-100 p-3 rounded-lg">
                                        <div class="text-sm text-blue-800 font-medium">CPU</div>
                                        <div class="text-lg font-bold text-blue-900">Custom</div>
                                    </div>
                                    <div class="bg-green-100 p-3 rounded-lg">
                                        <div class="text-sm text-green-800 font-medium">RAM</div>
                                        <div class="text-lg font-bold text-green-900">Custom</div>
                                    </div>
                                    <div class="bg-purple-100 p-3 rounded-lg">
                                        <div class="text-sm text-purple-800 font-medium">Storage</div>
                                        <div class="text-lg font-bold text-purple-900">Custom</div>
                                    </div>
                                    <div class="bg-indigo-100 p-3 rounded-lg">
                                        <div class="text-sm text-indigo-800 font-medium">Bandwidth</div>
                                        <div class="text-lg font-bold text-indigo-900">Custom</div>
                                    </div>
                                </div>
                                <div class="mt-4 text-center text-xs text-gray-500">
                                    Fully customizable to your needs
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- VPS Hosting Features Section -->
        <section class="py-16 bg-gradient-to-br from-blue-50 to-indigo-50">
            <div class="container max-w-7xl mx-auto px-4">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">VPS Hosting Built for Speed,
                        Flexibility &
                        Reliability</h2>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">Experience high-availability VPS hosting designed
                        for
                        developers, businesses, and power users.</p>
                </div>

                <!-- Features Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <!-- Feature 1 -->
                    <div
                        class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex justify-center mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 88 88"
                                fill="none">
                                <path opacity="0.4"
                                    d="M77.0042 22V48.5834C77.0042 50.6084 75.3626 52.25 73.3376 52.25H18.3376C16.3125 52.25 14.6709 50.6084 14.6709 48.5834V22C14.6709 13.8967 21.2342 7.33337 29.3376 7.33337H62.3376C70.4409 7.33337 77.0042 13.8967 77.0042 22Z"
                                    fill="#457BFF"></path>
                                <path
                                    d="M29.3376 46.75H25.6709C24.1676 46.75 22.9209 45.5033 22.9209 44C22.9209 42.4967 24.1676 41.25 25.6709 41.25H29.3376C30.8409 41.25 32.0876 42.4967 32.0876 44C32.0876 45.5033 30.8409 46.75 29.3376 46.75Z"
                                    fill="#457BFF"></path>
                                <path
                                    d="M29.3376 37.5834H25.6709C24.1676 37.5834 22.9209 36.3367 22.9209 34.8334C22.9209 33.33 24.1676 32.0834 25.6709 32.0834H29.3376C30.8409 32.0834 32.0876 33.33 32.0876 34.8334C32.0876 36.3367 30.8409 37.5834 29.3376 37.5834Z"
                                    fill="#457BFF"></path>
                                <path
                                    d="M29.3376 28.4166H25.6709C24.1676 28.4166 22.9209 27.17 22.9209 25.6666C22.9209 24.1633 24.1676 22.9166 25.6709 22.9166H29.3376C30.8409 22.9166 32.0876 24.1633 32.0876 25.6666C32.0876 27.17 30.8409 28.4166 29.3376 28.4166Z"
                                    fill="#457BFF"></path>
                                <path
                                    d="M18.3376 57.75C16.3125 57.75 14.6709 59.3916 14.6709 61.4167V66C14.6709 74.1033 21.2342 80.6667 29.3376 80.6667H62.3376C70.4409 80.6667 77.0042 74.1033 77.0042 66V61.4167C77.0042 59.3916 75.3626 57.75 73.3376 57.75H18.3376ZM64.9409 71.3534C64.2442 72.0134 63.2909 72.4167 62.3376 72.4167C61.3842 72.4167 60.4309 72.0134 59.7342 71.3534C59.0742 70.6567 58.6709 69.7033 58.6709 68.75C58.6709 67.7967 59.0742 66.8433 59.7342 66.1466C61.0909 64.79 63.5476 64.79 64.9409 66.1466C65.6009 66.8433 66.0042 67.7967 66.0042 68.75C66.0042 69.7033 65.6009 70.6567 64.9409 71.3534Z"
                                    fill="#457BFF"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 text-center">Instant VPS Deployment</h3>
                        <p class="text-gray-600 text-center">Get your VPS up and running in under a minute with
                            SSD-powered
                            storage for lightning-fast performance.</p>
                    </div>

                    <!-- Feature 2 -->
                    <div
                        class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex justify-center mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"
                                fill="#457BFF">
                                <path
                                    d="M21 7h-2v2h2V7zm0 4h-2v2h2v-2zm0 4h-2v2h2v-2zM5 7H3v2h2V7zm0 4H3v2h2v-2zm0 4H3v2h2v-2zm4-8H7v2h2V7zm0 4H7v2h2v-2zm0 4H7v2h2v-2zm4-8h-2v2h2V7zm0 4h-2v2h2v-2zm0 4h-2v2h2v-2z" />
                                <path
                                    d="M21 3H3c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H3V5h18v14z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 text-center">Built for All Applications</h3>
                        <p class="text-gray-600 text-center">Our VPS solutions support WordPress, Laravel, Python,
                            Node.js, and
                            containerized applications with Docker.</p>
                    </div>

                    <!-- Feature 3 -->
                    <div
                        class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex justify-center mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"
                                fill="#457BFF">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z" />
                                <path d="M12.5 7H11v6l5.2 3.2.8-1.3-4.5-2.7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 text-center">Choice of Control Panels</h3>
                        <p class="text-gray-600 text-center">Manage your server easily with Hestia, CyberPanel, cPanel,
                            Plesk,
                            ISPmanager, or CloudPanel.</p>
                    </div>

                    <!-- Feature 4 -->
                    <div
                        class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex justify-center mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"
                                fill="#457BFF">
                                <path
                                    d="M12 6c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm0 10c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z" />
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 text-center">High Availability Cloud VPS
                        </h3>
                        <p class="text-gray-600 text-center">Built on resilient infrastructure, our high-availability
                            VPS
                            ensures minimal downtime and maximum flexibility.</p>
                    </div>

                    <!-- Feature 5 -->
                    <div
                        class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex justify-center mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"
                                fill="#457BFF">
                                <path
                                    d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 text-center">Global Data Centers</h3>
                        <p class="text-gray-600 text-center">Host your VPS closer to your customers with our
                            coast-to-coast and
                            international data centers.</p>
                    </div>

                    <!-- Feature 6 -->
                    <div
                        class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex justify-center mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"
                                fill="#457BFF">
                                <path
                                    d="M12 3c-4.97 0-9 4.03-9 9s4.03 9 9 9 9-4.03 9-9-4.03-9-9-9zm-1 15.5h-2v-2h2v2zm0-3.5h-2c0-3.25 3-3 3-5 0-1.1-.9-2-2-2s-2 .9-2 2h-2c0-2.21 1.79-4 4-4s4 1.79 4 4c0 2.5-3 2.75-3 5z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 text-center">Pre-Installed Tools</h3>
                        <p class="text-gray-600 text-center">Deploy popular applications like WordPress, WooCommerce, or
                            custom
                            apps in a single click.</p>
                    </div>

                </div>

                <!-- CTA Button -->
                <div class="text-center mt-12">
                    <a href="#"
                        class="inline-block bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-3 px-8 rounded-lg transition-colors duration-300">
                        Explore All VPS Features
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
                        <span>What is VPS Hosting?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p>A VPS (Virtual Private Server) gives you dedicated CPU, RAM, and storage on a shared physical
                            server. It’s faster, more stable, and more customizable than shared hosting — without the
                            high cost of a dedicated server.</p>
                    </div>
                </div>

                <div class="border-b border-gray-200 pb-4">
                    <button class="flex justify-between items-center w-full text-left font-medium faq-toggle">
                        <span>Why choose VPS Hosting?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p>You get consistent speed, full root access, stronger security, easy scalability, and
                            SSD-powered performance — perfect
                            for websites, applications, and mission-critical projects.</p>
                    </div>
                </div>

                <div class="border-b border-gray-200 pb-4">
                    <button class="flex justify-between items-center w-full text-left font-medium faq-toggle">
                        <span>Can I install a control panel?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p>We support cPanel, CyberPanel, Hestia, CloudPanel, ISPmanager, Plesk, and DirectAdmin, and we
                            can install them for you if you purchase a license from us.</p>
                    </div>
                </div>

                <div class="border-b border-gray-200 pb-4">
                    <button class="flex justify-between items-center w-full text-left font-medium faq-toggle">
                        <span>Do I get root access?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p>Yes, every VPS plan comes with full root access.</p>
                    </div>
                </div>

                <div class="border-b border-gray-200 pb-4">
                    <button class="flex justify-between items-center w-full text-left font-medium faq-toggle">
                        <span>How secure is VPS Hosting?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p>Your VPS is isolated from others and protected with firewalls, DDoS prevention, malware
                            scanning, and 24/7 monitoring.</p>
                    </div>
                </div>

                <div class="pb-4">
                    <button class="flex justify-between items-center w-full text-left font-medium faq-toggle">
                        <span>Can I host multiple websites?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p>Yes, you can manage multiple domains, databases, and email accounts from your control panel.
                        </p>
                    </div>
                </div>
                <div class="border-b border-gray-200 pb-4">
                    <button class="flex justify-between items-center w-full text-left font-medium faq-toggle">
                        <span>Which OS options are available?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p>We offer Ubuntu, CentOS, AlmaLinux, Rocky Linux, and more.</p>
                    </div>
                </div>
                <div class="border-b border-gray-200 pb-4">
                    <button class="flex justify-between items-center w-full text-left font-medium faq-toggle">
                        <span>Can I upgrade my VPS later?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </button>
                    <div class="mt-2 text-gray-600 hidden faq-content">
                        <p>Yes, scale CPU, RAM, or storage at any time, without downtime.</p>
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
