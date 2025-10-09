<x-user-layout>
    @section('title', 'Buy SSL Certificate | Secure Your Website with HTTPS - CloudCareHost')
    @section('meta_description', 'Protect your site with SSL certificates from CloudCareHost. Enable HTTPS, boost SEO, and build trust with 256-bit encryption and a visible padlock for your domain.')
    @section('meta_keywords', 'buy ssl certificate, website ssl security, ssl for website, https ssl certificate, affordable ssl certificates, wildcard ssl, trusted ssl provider')
    @section('meta_author', 'Cloud Care Host')
    <!-- Hero Section with anchor link -->
    <section class="relative h-screen bg-cover bg-center flex items-center"
        style="background-image: url('{{ asset('images/ssl.png') }}')">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-opacity-40"></div>

        <!-- Left Content -->
        <div class="relative z-10 px-6 md:px-16 max-w-2xl text-left animate__animated animate__fadeInLeft">
            <h1 class="text-4xl md:text-5xl font-bold text-black mb-6 leading-snug">
                Website Security Made Easy with
                <span class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 bg-clip-text text-transparent">
                    CloudCareHost SSL
                </span>
            </h1>
            <p class="text-lg md:text-xl text-black-200 mb-8">
                In today's digital world, website security is essential. An SSL certificate not only protects
                your site and your visitors' data but also boosts trust and improves search engine rankings.
                At CloudCareHost, we provide easy-to-install, reliable SSL certificates to keep your website
                secure and your business credible.
            </p>

            <!-- CTA Button - Links to plans section -->
            <a href="#plans-section"
                class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-4 font-medium rounded-lg shadow-lg transition-colors">
                Get Your SSL Now
            </a>
        </div>
    </section>

    <!-- Plans Section with ID for anchor navigation -->
    <section id="plans-section" class="bg-white py-20 scroll-mt-20">
        <div class="container max-w-screen-xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold font-montserrat text-center mb-4">Buy SSL Certificates</h2>
            <p class="text-gray-500 text-lg text-center max-w-2xl mx-auto mb-8">Choose a plan that fits your budget,
                Our platform is truly unique. We've got you covered with both managed and self-managed hosting.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Starter Plan Card -->
                @foreach($data as $plan)
                <div class="plan-card" data-plan="starter">
                    <div
                        class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden transition-all hover:shadow-lg hover:border-indigo-300">
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <h3 class="text-xl font-bold">{{ $plan->name }}</h3>
                                <span
                                    class="bg-indigo-100 text-indigo-800 text-xs font-semibold px-2.5 py-0.5 rounded">Popular</span>
                            </div>

                            <div class="mb-6">
                                <div class="text-3xl font-bold mb-1">
                                    <span class="plan-price">${{$plan->usd_annually}}</span>
                                    <span class="text-sm font-normal text-gray-500">/billed yearly</span>
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

                            <a href="{{$plan->product_url}}"
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

    <!-- CTA Section with anchor link -->
    <section class="relative flex items-center justify-center bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 py-12">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 bg-opacity-30"></div>

        <!-- Centered Content -->
        <div class="relative z-10 text-center px-6 max-w-4xl animate__animated animate__fadeInDown">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-snug">
                Get Your Website Secured Today
            </h1>
            <p class="text-xl md:text-2xl text-indigo-100 leading-relaxed mb-8">
                Don't compromise on security. Protect your visitors, enhance trust, and boost your SEO rankings with
                CloudCareHost SSL certificates. Installing and managing SSL is fast, reliable, and hassle-free,
                so your website stays safe and trusted 24/7.
            </p>

            <!-- CTA Button - Links to plans section -->
            <a href="#plans-section"
               class="inline-block bg-white text-indigo-700 hover:bg-gray-100 px-8 py-4 rounded-lg font-semibold shadow-lg transition-colors">
                Secure Your Website Now
            </a>
        </div>
    </section>

    <!-- Why SSL Section -->
    <section id="plans" class="py-20 bg-white">
        <div class="container mx-auto px-6 lg:px-16 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <!-- Left Content -->
            <div class="space-y-6 animate__animated animate__fadeInLeft">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Why SSL Certificates Matter
                </h2>
                <ul class="space-y-4 text-gray-700 text-lg leading-relaxed list-disc pl-6">
                    <li><strong>Encrypt Sensitive Data:</strong> SSL secures all transmitted data, including logins, personal info, and payments.</li>
                    <li><strong>Build Trust and Credibility:</strong> HTTPS and the padlock icon increase visitor trust, crucial for eCommerce and business sites.</li>
                    <li><strong>Improve Search Engine Rankings:</strong> Google favors HTTPS, boosting your SEO visibility.</li>
                    <li><strong>Protect Against Cyber Threats:</strong> SSL reduces risks from phishing, breaches, and man-in-the-middle attacks.</li>
                    <li><strong>Meet Compliance Requirements:</strong> Required in industries like finance, healthcare, and eCommerce for PCI DSS and regulations.</li>
                </ul>
            </div>

            <!-- Right Image -->
            <div class="flex justify-center animate__animated animate__fadeInRight">
                <img src="{{ asset('images/ssl-security.png') }}"
                     alt="SSL Certificate Security"
                     class="max-w-full lg:max-w-md rounded-lg shadow-lg">
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="bg-white p-20 py-20">
        <div class="bg-white rounded-xl shadow-md p-8 py-12">
            <h2 class="text-3xl font-bold font-montserrat mb-8 text-center">Frequently Asked Questions</h2>

            <div class="space-y-4">
                <!-- Q2 -->
                <details class="border-b border-gray-200 pb-4">
                    <summary class="flex justify-between items-center w-full text-left font-medium cursor-pointer list-none">
                        <span>Why Do I Need an SSL Certificate?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </summary>
                    <div class="mt-2 text-gray-600">
                        <p>
                            An SSL certificate secures the connection between a user's browser and your website. SSL certification ensures that the data exchanged remains private and integral.
                             It also helps build trust with visitors by displaying a padlock icon and "https://" in the browser's address bar.
                        </p>
                    </div>
                </details>

                <!-- Q3 -->
                <details class="border-b border-gray-200 pb-4">
                    <summary class="flex justify-between items-center w-full text-left font-medium cursor-pointer list-none">
                        <span>What types of SSL certificates are available with Ultahost?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </summary>
                    <div class="mt-2 text-gray-600">
                        <p>
                            There are different types of SSL certificates Ultahost offers varying levels of validation. Domain Validation (DV) certificates are the most basic.
                            Then there are Organization Validation (OV) certificates. And lastly Extended Validation (EV) certificates. EV certificates provide the highest level
                            of trust with green address bars.
                        </p>
                    </div>
                </details>

                <!-- Q4 -->
                <details class="border-b border-gray-200 pb-4">
                    <summary class="flex justify-between items-center w-full text-left font-medium cursor-pointer list-none">
                        <span>Which Ultahost SSL certificate do I need?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </summary>
                    <div class="mt-2 text-gray-600">
                        <p>
                           The best SSL certificate for your website depends on your specific needs and the level of trust you want to convey to visitors.
                           If you collect sensitive data, an OV or EV certificate is recommended. For basic security on a non-commercial website, a DV certificate would be ideal.
                        </p>
                    </div>
                </details>

                <!-- Q5 -->
                <details class="border-b border-gray-200 pb-4">
                    <summary class="flex justify-between items-center w-full text-left font-medium cursor-pointer list-none">
                        <span>How Long Does an SSL Certificate Last?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </summary>
                    <div class="mt-2 text-gray-600">
                        <p>
                         The validity period of an SSL certificate varies depending on the type and issuer.
                         Typically, SSL certificates are issued for one to two years. After expiration, you'll need to renew your certificate to maintain secure connections.
                        </p>
                    </div>
                </details>

                <!-- Q8 -->
                <details class="border-b border-gray-200 pb-4">
                    <summary class="flex justify-between items-center w-full text-left font-medium cursor-pointer list-none">
                        <span>Do SSL Certificates Affect Website Speed?</span>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </summary>
                    <div class="mt-2 text-gray-600">
                        <p>
                            SSL certificates don't slow down websites much. It adds only a tiny bit of extra work to transfer data. Plus, having an SSL
                             certificate can actually make your website faster. Google likes websites with SSL certificates and might rank them higher in search results,
                             which could boost your site's performance.
                        </p>
                    </div>
                </details>
            </div>
        </div>
    </section>

    <style>
        details > summary {
            list-style: none;
        }

        details > summary::-webkit-details-marker {
            display: none;
        }

        details[open] > summary i {
            transform: rotate(180deg);
        }

        html {
            scroll-behavior: smooth;
        }

        .scroll-mt-20 {
            scroll-margin-top: 5rem;
        }

        a {
            transition: all 0.3s ease;
        }

        .plan-card:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
        }
    </style>
</x-user-layout>

