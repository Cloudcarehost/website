<x-user-layout>
    <!-- Hero Section -->
    <section class="relative h-screen bg-cover bg-center flex items-center"
        style="background-image: url('{{ asset('images/hero-bg.png') }}')">
        <!-- Overlay -->
        

        <!-- Left Content -->
        <div class="relative z-10 px-6 md:px-16 max-w-3xl text-left">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-snug">
                All-in-One Software Solutions & Support
            </h1>
            <p class="text-lg md:text-xl text-white mb-8">
                Websites, mobile apps, enterprise systems end-to-end development and 24/7 support to help your business grow.
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{route('contact') }}"
                    class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-4 font-medium rounded-lg shadow-lg transition-colors text-center">
                    Get a Free Quote
                </a>
                <a href="#products"
                    class="inline-block bg-transparent border-2 border-white text-white hover:bg-white hover:text-indigo-600 px-6 py-4 font-medium rounded-lg shadow-lg transition-colors text-center">
                    Explore Products
                </a>
            </div>
        </div>
    </section>

    <!-- Services Snapshot Section -->
    <section id="services" class="py-20 bg-white">
        <div class="container max-w-screen-xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold font-montserrat text-center mb-4">Our Services</h2>
            <p class="text-gray-500 text-lg text-center max-w-2xl mx-auto mb-12">From quick websites to enterprise-grade applications we deliver reliable, maintainable solutions.</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <!-- Service 1: Web Development -->
                <div class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden transition-all hover:shadow-lg hover:border-indigo-300 p-6">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-laptop-code text-indigo-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Web Development</h3>
                    <ul class="text-gray-600 space-y-2">
                        <li class="service-item">
                            <div class="flex items-start">
                                <div class="tooltip cursor-pointer mt-1 mr-2">
                                    <i class="fas fa-chevron-down text-green-500 text-sm dropdown-toggle"></i>
                                </div>
                                <span class="service-title flex-1">CMS Development (WordPress)</span>
                            </div>
                            <div class="dropdown-content text-sm text-gray-500 mt-2 pl-4 border-l-2 border-green-500">
                                Customizable content management systems using WordPress for easy content updates and management.
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="flex items-start">
                                <div class="tooltip cursor-pointer mt-1 mr-2">
                                    <i class="fas fa-chevron-down text-green-500 text-sm dropdown-toggle"></i>
                                </div>
                                <span class="service-title flex-1">Progressive Web Apps (PWAs)</span>
                            </div>
                            <div class="dropdown-content text-sm text-gray-500 mt-2 pl-4 border-l-2 border-green-500">
                                Web apps that function like native mobile applications with offline capabilities and push notifications.
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="flex items-start">
                                <div class="tooltip cursor-pointer mt-1 mr-2">
                                    <i class="fas fa-chevron-down text-green-500 text-sm dropdown-toggle"></i>
                                </div>
                                <span class="service-title flex-1">Web Application Development</span>
                            </div>
                            <div class="dropdown-content text-sm text-gray-500 mt-2 pl-4 border-l-2 border-green-500">
                                Custom web applications tailored to your business needs with modern frameworks and technologies.
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="flex items-start">
                                <div class="tooltip cursor-pointer mt-1 mr-2">
                                    <i class="fas fa-chevron-down text-green-500 text-sm dropdown-toggle"></i>
                                </div>
                                <span class="service-title flex-1">UI/UX Design & Prototyping</span>
                            </div>
                            <div class="dropdown-content text-sm text-gray-500 mt-2 pl-4 border-l-2 border-green-500">
                                Creating intuitive user interfaces and interactive prototypes to ensure optimal user experience.
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="flex items-start">
                                <div class="tooltip cursor-pointer mt-1 mr-2">
                                    <i class="fas fa-chevron-down text-green-500 text-sm dropdown-toggle"></i>
                                </div>
                                <span class="service-title flex-1">Website Redesign & Optimization</span>
                            </div>
                            <div class="dropdown-content text-sm text-gray-500 mt-2 pl-4 border-l-2 border-green-500">
                                Modernizing existing websites for better performance, user experience, and conversion rates.
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="flex items-start">
                                <div class="tooltip cursor-pointer mt-1 mr-2">
                                    <i class="fas fa-chevron-down text-green-500 text-sm dropdown-toggle"></i>
                                </div>
                                <span class="service-title flex-1">Landing Page Development</span>
                            </div>
                            <div class="dropdown-content text-sm text-gray-500 mt-2 pl-4 border-l-2 border-green-500">
                                High-converting single-page websites for marketing campaigns and product launches.
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="flex items-start">
                                <div class="tooltip cursor-pointer mt-1 mr-2">
                                    <i class="fas fa-chevron-down text-green-500 text-sm dropdown-toggle"></i>
                                </div>
                                <span class="service-title flex-1">API Development & Integration</span>
                            </div>
                            <div class="dropdown-content text-sm text-gray-500 mt-2 pl-4 border-l-2 border-green-500">
                                Building and connecting APIs for seamless data exchange between different systems and platforms.
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="flex items-start">
                                <div class="tooltip cursor-pointer mt-1 mr-2">
                                    <i class="fas fa-chevron-down text-green-500 text-sm dropdown-toggle"></i>
                                </div>
                                <span class="service-title flex-1">SEO & Speed Optimization</span>
                            </div>
                            <div class="dropdown-content text-sm text-gray-500 mt-2 pl-4 border-l-2 border-green-500">
                                Improving search visibility and website loading speed for better rankings and user retention.
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="flex items-start">
                                <div class="tooltip cursor-pointer mt-1 mr-2">
                                    <i class="fas fa-chevron-down text-green-500 text-sm dropdown-toggle"></i>
                                </div>
                                <span class="service-title flex-1">Maintenance & Security Updates</span>
                            </div>
                            <div class="dropdown-content text-sm text-gray-500 mt-2 pl-4 border-l-2 border-green-500">
                                Ongoing website updates, monitoring, and security patches to keep your site secure and up-to-date.
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="flex items-start">
                                <div class="tooltip cursor-pointer mt-1 mr-2">
                                    <i class="fas fa-chevron-down text-green-500 text-sm dropdown-toggle"></i>
                                </div>
                                <span class="service-title flex-1">Membership & Subscription Sites</span>
                            </div>
                            <div class="dropdown-content text-sm text-gray-500 mt-2 pl-4 border-l-2 border-green-500">
                                Websites with user accounts, subscription plans, and paywalls for recurring revenue models.
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="flex items-start">
                                <div class="tooltip cursor-pointer mt-1 mr-2">
                                    <i class="fas fa-chevron-down text-green-500 text-sm dropdown-toggle"></i>
                                </div>
                                <span class="service-title flex-1">Payment Gateway Integration</span>
                            </div>
                            <div class="dropdown-content text-sm text-gray-500 mt-2 pl-4 border-l-2 border-green-500">
                                Secure integration of payment processors like Stripe, PayPal, and other payment gateways.
                            </div>
                        </li>
                        <li class="service-item flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2 text-sm"></i>
                            <span>& many more ...</span>
                        </li>
                    </ul>
                </div>

                <!-- Service 2: Mobile Apps -->
                <div class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden transition-all hover:shadow-lg hover:border-indigo-300 p-6">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-mobile-alt text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Mobile Apps</h3>
                    <ul class="text-gray-600 space-y-2">
                        <li class="service-item">
                            <div class="flex items-start">
                                <div class="tooltip cursor-pointer mt-1 mr-2">
                                    <i class="fas fa-chevron-down text-green-500 text-sm dropdown-toggle"></i>
                                </div>
                                <span class="service-title flex-1">Enterprise Mobility Solutions</span>
                            </div>
                            <div class="dropdown-content text-sm text-gray-500 mt-2 pl-4 border-l-2 border-green-500">
                                Secure, company-internal apps for field service, sales teams, inventory management, and internal communications.
                            </div>
                        </li>
                         <li class="service-item">
                            <div class="flex items-start">
                                <div class="tooltip cursor-pointer mt-1 mr-2">
                                    <i class="fas fa-chevron-down text-green-500 text-sm dropdown-toggle"></i>
                                </div>
                                <span class="service-title flex-1">E-Commerce & Retail Apps</span>
                            </div>
                            <div class="dropdown-content text-sm text-gray-500 mt-2 pl-4 border-l-2 border-green-500">
                                Feature-rich shopping apps with product catalogs, secure payment gateways, wish lists, and push notifications.
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="flex items-start">
                                <div class="tooltip cursor-pointer mt-1 mr-2">
                                    <i class="fas fa-chevron-down text-green-500 text-sm dropdown-toggle"></i>
                                </div>
                                <span class="service-title flex-1">On-Demand Service Apps</span>
                            </div>
                            <div class="dropdown-content text-sm text-gray-500 mt-2 pl-4 border-l-2 border-green-500">
                                Connect users with service providers for transportation, food delivery, home services, and more.
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="flex items-start">
                                <div class="tooltip cursor-pointer mt-1 mr-2">
                                    <i class="fas fa-chevron-down text-green-500 text-sm dropdown-toggle"></i>
                                </div>
                                <span class="service-title flex-1">Health & Fitness Apps</span>
                            </div>
                            <div class="dropdown-content text-sm text-gray-500 mt-2 pl-4 border-l-2 border-green-500">
                                Applications for workout planning, activity tracking, diet monitoring, and telemedicine consultations.
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="flex items-start">
                                <div class="tooltip cursor-pointer mt-1 mr-2">
                                    <i class="fas fa-chevron-down text-green-500 text-sm dropdown-toggle"></i>
                                </div>
                                <span class="service-title flex-1">Push Notifications & In-App Messaging</span>
                            </div>
                            <div class="dropdown-content text-sm text-gray-500 mt-2 pl-4 border-l-2 border-green-500">
                                Engage users with timely alerts and in-app communication features to improve retention and engagement.
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="flex items-start">
                                <div class="tooltip cursor-pointer mt-1 mr-2">
                                    <i class="fas fa-chevron-down text-green-500 text-sm dropdown-toggle"></i>
                                </div>
                                <span class="service-title flex-1">Android App Development</span>
                            </div>
                            <div class="dropdown-content text-sm text-gray-500 mt-2 pl-4 border-l-2 border-green-500">
                                High-performance apps built specifically for Android to leverage the full potential of the platform.
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="flex items-start">
                                <div class="tooltip cursor-pointer mt-1 mr-2">
                                    <i class="fas fa-chevron-down text-green-500 text-sm dropdown-toggle"></i>
                                </div>
                                <span class="service-title flex-1">iOS App Development</span>
                            </div>
                            <div class="dropdown-content text-sm text-gray-500 mt-2 pl-4 border-l-2 border-green-500">
                                High-performance apps built specifically for iOS to leverage the full potential of the platform.
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="flex items-start">
                                <div class="tooltip cursor-pointer mt-1 mr-2">
                                    <i class="fas fa-chevron-down text-green-500 text-sm dropdown-toggle"></i>
                                </div>
                                <span class="service-title flex-1">Cross-Platform App Development</span>
                            </div>
                            <div class="dropdown-content text-sm text-gray-500 mt-2 pl-4 border-l-2 border-green-500">
                                Build for both iOS and Android from a single codebase using frameworks like Flutter or React Native, reducing cost and time.
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="flex items-start">
                                <div class="tooltip cursor-pointer mt-1 mr-2">
                                    <i class="fas fa-chevron-down text-green-500 text-sm dropdown-toggle"></i>
                                </div>
                                <span class="service-title flex-1">UI/UX Design for Mobile</span>
                            </div>
                            <div class="dropdown-content text-sm text-gray-500 mt-2 pl-4 border-l-2 border-green-500">
                                Creating intuitive and engaging mobile-specific user experiences with optimized touch interactions.
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="flex items-start">
                                <div class="tooltip cursor-pointer mt-1 mr-2">
                                    <i class="fas fa-chevron-down text-green-500 text-sm dropdown-toggle"></i>
                                </div>
                                <span class="service-title flex-1">App Redesign & Modernization</span>
                            </div>
                            <div class="dropdown-content text-sm text-gray-500 mt-2 pl-4 border-l-2 border-green-500">
                                Update the UI/UX of your existing app to meet modern standards and improve user engagement.
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="flex items-start">
                                <div class="tooltip cursor-pointer mt-1 mr-2">
                                    <i class="fas fa-chevron-down text-green-500 text-sm dropdown-toggle"></i>
                                </div>
                                <span class="service-title flex-1">App Integration with Backend Systems</span>
                            </div>
                            <div class="dropdown-content text-sm text-gray-500 mt-2 pl-4 border-l-2 border-green-500">
                                Connect your mobile app to existing enterprise software like ERPs, CRMs, or custom databases for real-time data sync.
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="flex items-start">
                                <div class="tooltip cursor-pointer mt-1 mr-2">
                                    <i class="fas fa-chevron-down text-green-500 text-sm dropdown-toggle"></i>
                                </div>
                                <span class="service-title flex-1">App Support & Maintenance</span>
                            </div>
                            <div class="dropdown-content text-sm text-gray-500 mt-2 pl-4 border-l-2 border-green-500">
                                Ongoing services including bug fixes, performance updates, OS compatibility patches, and feature enhancements.
                            </div>
                        </li>
                        <li class="service-item flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2 text-sm"></i>
                            <span>& many more ...</span>
                        </li>
                    </ul>
                </div>

                <!-- Service 3: Enterprise Solutions -->
                <div class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden transition-all hover:shadow-lg hover:border-indigo-300 p-6">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-building text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Enterprise Solutions</h3>
                    <ul class="text-gray-600 space-y-2">
                        <li class="service-item">
                            <div class="flex items-start">
                                <div class="tooltip cursor-pointer mt-1 mr-2">
                                    <i class="fas fa-chevron-down text-green-500 text-sm dropdown-toggle"></i>
                                </div>
                                <span class="service-title flex-1">Custom Software Development</span>
                            </div>
                            <div class="dropdown-content text-sm text-gray-500 mt-2 pl-4 border-l-2 border-green-500">
                                We build software from the ground up, tailored to solve your unique business challenges that cannot be addressed by off-the-shelf products.
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="flex items-start">
                                <div class="tooltip cursor-pointer mt-1 mr-2">
                                    <i class="fas fa-chevron-down text-green-500 text-sm dropdown-toggle"></i>
                                </div>
                                <span class="service-title flex-1">SaaS (Software as a Service) Applications</span>
                            </div>
                            <div class="dropdown-content text-sm text-gray-500 mt-2 pl-4 border-l-2 border-green-500">
                                We help you build, launch, and manage your own cloud-based software product that customers access via subscription.
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="flex items-start">
                                <div class="tooltip cursor-pointer mt-1 mr-2">
                                    <i class="fas fa-chevron-down text-green-500 text-sm dropdown-toggle"></i>
                                </div>
                                <span class="service-title flex-1">ERP & CRM Systems</span>
                            </div>
                            <div class="dropdown-content text-sm text-gray-500 mt-2 pl-4 border-l-2 border-green-500">
                                Integrated systems for resource planning and customer relationship management to streamline business operations.
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="flex items-start">
                                <div class="tooltip cursor-pointer mt-1 mr-2">
                                    <i class="fas fa-chevron-down text-green-500 text-sm dropdown-toggle"></i>
                                </div>
                                <span class="service-title flex-1">Legacy System Modernization</span>
                            </div>
                            <div class="dropdown-content text-sm text-gray-500 mt-2 pl-4 border-l-2 border-green-500">
                                We take your old, outdated software and rebuild it on modern, secure platforms to reduce costs and unlock new capabilities.
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="flex items-start">
                                <div class="tooltip cursor-pointer mt-1 mr-2">
                                    <i class="fas fa-chevron-down text-green-500 text-sm dropdown-toggle"></i>
                                </div>
                                <span class="service-title flex-1">Integration with Third-party Systems</span>
                            </div>
                            <div class="dropdown-content text-sm text-gray-500 mt-2 pl-4 border-l-2 border-green-500">
                                Connect your systems with external services and platforms to create seamless workflows and data exchange.
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="flex items-start">
                                <div class="tooltip cursor-pointer mt-1 mr-2">
                                    <i class="fas fa-chevron-down text-green-500 text-sm dropdown-toggle"></i>
                                </div>
                                <span class="service-title flex-1">Customer Portal Development</span>
                            </div>
                            <div class="dropdown-content text-sm text-gray-500 mt-2 pl-4 border-l-2 border-green-500">
                                A secure, branded website where your customers can access self-service features, reducing support burden.
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="flex items-start">
                                <div class="tooltip cursor-pointer mt-1 mr-2">
                                    <i class="fas fa-chevron-down text-green-500 text-sm dropdown-toggle"></i>
                                </div>
                                <span class="service-title flex-1">Supply Chain Management (SCM) Systems</span>
                            </div>
                            <div class="dropdown-content text-sm text-gray-500 mt-2 pl-4 border-l-2 border-green-500">
                                End-to-end visibility and control over materials, information, and finances across your supply chain.
                            </div>
                        </li>
                         <li class="service-item">
                            <div class="flex items-start">
                                <div class="tooltip cursor-pointer mt-1 mr-2">
                                    <i class="fas fa-chevron-down text-green-500 text-sm dropdown-toggle"></i>
                                </div>
                                <span class="service-title flex-1">API Integrations</span>
                            </div>
                            <div class="dropdown-content text-sm text-gray-500 mt-2 pl-4 border-l-2 border-green-500">
                                Bridges that allow different software applications to talk to each other for seamless data sharing.
                            </div>
                        </li>
                        <li class="service-item flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2 text-sm"></i>
                            <span>& many more...</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden transition-all hover:shadow-lg hover:border-indigo-300 p-6">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-headset text-yellow-600 text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Support & Maintenance</h4>
                    <p class="text-gray-600">24/7 support, regular updates, performance optimization and emergency fixes.</p>
                </div>
                    <div class="text-center mt-16">
                        <a href="{{ route('contact') }}"
                        class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-8 rounded-lg shadow-lg transition-colors">
                            Contact US
                        </a>
                    </div>
                
            </div>
        </div>
    </section>
    <!-- Products Section -->
    {{-- <section id="products" class="py-20 bg-gray-50">
        <div class="container max-w-screen-xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold font-montserrat text-center mb-4">Our Ready-to-Use Products</h2>
                <p class="text-gray-500 text-lg text-center max-w-2xl mx-auto">
                    Along with custom solutions, we also offer ready-to-use products to help businesses save time and scale faster.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
                <!-- Product 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-all hover:shadow-xl">
                    <div class="p-6">
                        <div class="flex items-start mb-4">
                            <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center text-indigo-600 mr-4 flex-shrink-0">
                                <i class="fas fa-chart-line text-lg"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Business Management System (ERP/CRM)</h3>
                                <p class="text-gray-600 mb-3">Manage sales, inventory, customers, and finances in one place</p>
                                <div class="mb-4">
                                    <h4 class="font-semibold text-gray-800 mb-2">Key Features:</h4>
                                    <ul class="text-gray-600 space-y-1">
                                        <li class="flex items-start">
                                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2 text-sm"></i>
                                            <span>Comprehensive Dashboard</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2 text-sm"></i>
                                            <span>Advanced Reporting & Analytics</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2 text-sm"></i>
                                            <span>Multi-user Support with Role-based Access</span>
                                        </li>
                                    </ul>
                                </div>
                                <p class="text-sm text-gray-500"><strong>Target Audience:</strong> Small & medium businesses</p>
                            </div>
                        </div>
                        <a href="#" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg font-medium transition-colors">Book a Demo</a>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-all hover:shadow-xl">
                    <div class="p-6">
                        <div class="flex items-start mb-4">
                            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center text-purple-600 mr-4 flex-shrink-0">
                                <i class="fas fa-shopping-cart text-lg"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">E-Commerce Platform</h3>
                                <p class="text-gray-600 mb-3">Ready-to-launch online store platform</p>
                                <div class="mb-4">
                                    <h4 class="font-semibold text-gray-800 mb-2">Key Features:</h4>
                                    <ul class="text-gray-600 space-y-1">
                                        <li class="flex items-start">
                                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2 text-sm"></i>
                                            <span>Complete Product Catalog Management</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2 text-sm"></i>
                                            <span>Shopping Cart & Checkout System</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2 text-sm"></i>
                                            <span>Payment Gateway Integration</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2 text-sm"></i>
                                            <span>Shipping & Logistics Integration</span>
                                        </li>
                                    </ul>
                                </div>
                                <p class="text-sm text-gray-500"><strong>Target Audience:</strong> Retailers & startups</p>
                            </div>
                        </div>
                        <a href="#" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg font-medium transition-colors">Get Started</a>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-all hover:shadow-xl">
                    <div class="p-6">
                        <div class="flex items-start mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center text-blue-600 mr-4 flex-shrink-0">
                                <i class="fas fa-headset text-lg"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Support & Ticketing System</h3>
                                <p class="text-gray-600 mb-3">Helpdesk/ticketing solution for businesses</p>
                                <div class="mb-4">
                                    <h4 class="font-semibold text-gray-800 mb-2">Key Features:</h4>
                                    <ul class="text-gray-600 space-y-1">
                                        <li class="flex items-start">
                                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2 text-sm"></i>
                                            <span>Comprehensive Ticket Tracking</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2 text-sm"></i>
                                            <span>SLA Management</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2 text-sm"></i>
                                            <span>Multi-channel Support (Email/Chat/Phone)</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2 text-sm"></i>
                                            <span>Knowledge Base Integration</span>
                                        </li>
                                    </ul>
                                </div>
                                <p class="text-sm text-gray-500"><strong>Target Audience:</strong> Service providers, IT companies</p>
                            </div>
                        </div>
                        <a href="#" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg font-medium transition-colors">Request Demo</a>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-all hover:shadow-xl">
                    <div class="p-6">
                        <div class="flex items-start mb-4">
                            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center text-green-600 mr-4 flex-shrink-0">
                                <i class="fas fa-puzzle-piece text-lg"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Custom Add-Ons & Modules</h3>
                                <p class="text-gray-600 mb-3">Extend functionality with specialized modules</p>
                                <div class="mb-4">
                                    <h4 class="font-semibold text-gray-800 mb-2">Available Modules:</h4>
                                    <ul class="text-gray-600 space-y-1">
                                        <li class="flex items-start">
                                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2 text-sm"></i>
                                            <span>HR Management System</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2 text-sm"></i>
                                            <span>Payroll Processing</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2 text-sm"></i>
                                            <span>Attendance Tracking</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2 text-sm"></i>
                                            <span>Blogging & CMS Tools</span>
                                        </li>
                                    </ul>
                                </div>
                                <p class="text-sm text-gray-500"><strong>Target Audience:</strong> Businesses needing specialized functionality</p>
                            </div>
                        </div>
                        <a href="#" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg font-medium transition-colors">Explore Modules</a>
                    </div>
                </div>
            </div>

            <!-- Products CTA -->
            <div class="text-center mt-12">
                <a href="#contact"
                    class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-4 rounded-lg font-semibold shadow-lg transition-colors">
                    Book a Full Product Walkthrough
                </a>
                <p class="text-gray-500 mt-4">Explore how our products can transform your business operations</p>
            </div>
        </div>
    </section> --}}

    <!-- Why Choose Us Section -->
    <section class="py-20 bg-gradient-to-r from-indigo-50 to-purple-50">
        <div class="container max-w-screen-xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold font-montserrat text-center mb-4">Why Choose Us</h2>
            <p class="text-gray-500 text-lg text-center max-w-2xl mx-auto mb-12">We're committed to delivering exceptional value and results</p>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-center">
                <div class="bg-white rounded-xl shadow-lg p-6 transition-all hover:shadow-xl">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center text-indigo-600 mx-auto mb-4">
                        <i class="fas fa-layer-group text-lg"></i>
                    </div>
                    <h5 class="font-bold mb-2 text-lg">End-to-End Solutions</h5>
                    <p class="text-gray-600">Idea → Design → Build → Deploy → Support</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 transition-all hover:shadow-xl">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center text-purple-600 mx-auto mb-4">
                        <i class="fas fa-users text-lg"></i>
                    </div>
                    <h5 class="font-bold mb-2 text-lg">Skilled Team</h5>
                    <p class="text-gray-600">Full-stack developers, mobile engineers & ops experts</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 transition-all hover:shadow-xl">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center text-blue-600 mx-auto mb-4">
                        <i class="fas fa-tag text-lg"></i>
                    </div>
                    <h5 class="font-bold mb-2 text-lg">Transparent Pricing</h5>
                    <p class="text-gray-600">No hidden fees, predictable costs and clear estimates</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 transition-all hover:shadow-xl">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center text-green-600 mx-auto mb-4">
                        <i class="fas fa-headset text-lg"></i>
                    </div>
                    <h5 class="font-bold mb-2 text-lg">24/7 Support</h5>
                    <p class="text-gray-600">Real people, fast response, SLA options</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio / Case Studies -->
    <section id="portfolio" class="py-20 bg-white">
        <div class="container max-w-screen-xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold font-montserrat text-center mb-4">Selected Work</h2>
            <p class="text-gray-500 text-lg text-center max-w-2xl mx-auto mb-12">Real projects that delivered measurable results</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-all hover:shadow-xl">
                    <img src="{{ asset('images/portfolio-1.jpg') }}" alt="E-Commerce Revamp" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="font-bold text-xl mb-2">E-Commerce Revamp</h4>
                        <p class="text-gray-600 mb-4">Migrated a legacy store to a modern platform, improved load time by 60% and increased conversion.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-chart-line text-green-500 mr-2"></i>
                            <span>45% increase in sales</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-all hover:shadow-xl">
                    <img src="{{ asset('images/portfolio-2.jpg') }}" alt="Mobile Field App" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="font-bold text-xl mb-2">Mobile Field App</h4>
                        <p class="text-gray-600 mb-4">Built an Android app for field technicians that reduced reporting time by 50%.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-clock text-blue-500 mr-2"></i>
                            <span>50% faster reporting</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-all hover:shadow-xl">
                    <img src="{{ asset('images/portfolio-3.jpg') }}" alt="ERP Implementation" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="font-bold text-xl mb-2">ERP Implementation</h4>
                        <p class="text-gray-600 mb-4">Implemented ERP for a retailer, centralized inventory and reporting across stores.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-cogs text-purple-500 mr-2"></i>
                            <span>Streamlined operations</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    {{-- <section class="py-20 bg-gray-50">
        <div class="container max-w-screen-xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold font-montserrat text-center mb-4">What Our Clients Say</h2>
            <p class="text-gray-500 text-lg text-center max-w-2xl mx-auto mb-12">Hear from businesses that have transformed with our solutions</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white rounded-xl p-6 border border-gray-200 shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center text-indigo-600 mr-4">
                            <i class="fas fa-user text-lg"></i>
                        </div>
                        <div>
                            <h4 class="font-bold">Sarah Johnson</h4>
                            <p class="text-gray-500 text-sm">CEO, TechSolutions Inc.</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Their team delivered an exceptional e-commerce platform that increased our online sales by 45% within three months."</p>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white rounded-xl p-6 border border-gray-200 shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center text-purple-600 mr-4">
                            <i class="fas fa-user text-lg"></i>
                        </div>
                        <div>
                            <h4 class="font-bold">Michael Chen</h4>
                            <p class="text-gray-500 text-sm">Operations Manager, RetailPlus</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"The custom ERP system streamlined our operations and reduced manual work by 60%. Their support team is always responsive."</p>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white rounded-xl p-6 border border-gray-200 shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 mr-4">
                            <i class="fas fa-user text-lg"></i>
                        </div>
                        <div>
                            <h4 class="font-bold">Emily Rodriguez</h4>
                            <p class="text-gray-500 text-sm">Marketing Director, GrowthLabs</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Our new mobile app has significantly improved customer engagement. The development process was smooth and collaborative."</p>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Pricing Snapshot -->
    <section id="pricing" class="py-20 bg-white">
        <div class="container max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold font-montserrat mb-4">Pricing (Starting Ranges)</h2>
            <p class="text-gray-500 text-lg max-w-2xl mx-auto mb-12">Transparent starting ranges to help you estimate budget — custom quotes available for every project.</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-lg border border-gray-200 p-6 transition-all hover:shadow-xl">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-laptop-code text-indigo-600 text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-2">Website</h3>
                    <p class="text-gray-600 mb-4">From <strong class="text-2xl text-indigo-600">$500</strong></p>
                    <p class="text-sm text-gray-500">Perfect for small businesses and startups</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg border border-gray-200 p-6 transition-all hover:shadow-xl">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-mobile-alt text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-2">Mobile App</h3>
                    <p class="text-gray-600 mb-4">From <strong class="text-2xl text-purple-600">$2,000</strong></p>
                    <p class="text-sm text-gray-500">Native and cross-platform solutions</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg border border-gray-200 p-6 transition-all hover:shadow-xl">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-building text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-2">Enterprise Software</h3>
                    <p class="text-gray-600 mb-4">Custom pricing — starts at <strong class="text-2xl text-blue-600">$10,000</strong></p>
                    <p class="text-sm text-gray-500">Scalable solutions for growing businesses</p>
                </div>
            </div>

            <div class="mt-12">
                <a href="#contact" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-4 rounded-lg font-semibold shadow-lg transition-colors">
                    Request a Custom Estimate
                </a>
            </div>
        </div>
    </section>

     <!-- Blog Section -->
        <section class="bg-gray-50 py-20">
            <div class="container max-w-screen-xl mx-auto px-4">
                <!-- Heading + Button -->
                <div class="flex justify-between items-center mb-10">
                    <h2 class="text-2xl md:text-3xl font-bold">Articles : Insights to help you choose the right technology</h2>
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
    <!-- Development Solutions Section -->
<section class="py-20 bg-gradient-to-br from-indigo-50 via-white to-purple-50">
    <div class="container max-w-6xl mx-auto px-6">
        <!-- Section Header -->
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

        <!-- Highlights Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Web Development -->
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

            <!-- Mobile App Development -->
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

            <!-- Enterprise Solutions -->
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
        <!-- Development Process -->
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

        <!-- Technology Stack with Horizontal Scrolling -->
          <!-- Technology Stack with Horizontal Scrolling -->
<div class="mb-16">
    <h3 class="text-2xl font-bold text-gray-800 mb-8 text-center">Our Technology Stack</h3>
    
    <!-- Scrolling Container -->
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

        <!-- CTA -->
        <div class="text-center mt-16">
            <a href="{{ route('development') }}"
               class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-8 rounded-lg shadow-lg transition-colors">
                Explore All Development Solutions
            </a>
        </div>
    </div>
</section>
    <!-- Final CTA Section -->
    <section id="contact" class="relative flex items-center justify-center bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 py-20">
        
        <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 bg-opacity-30"></div>

        <div class="relative z-10 text-center px-6 max-w-4xl">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-snug">
                Let's Build Something Great Together
            </h1>
            <p class="text-xl md:text-2xl text-indigo-100 leading-relaxed mb-8">
                Ready to transform your business with custom digital solutions? Get in touch with our team for a free consultation and quote.
            </p>

            <a href="{{ route('contact') }}"
               class="inline-block bg-white text-indigo-700 hover:bg-gray-100 px-8 py-4 rounded-lg font-semibold shadow-lg transition-colors">
                Start Your Project Today
            </a>
        </div>
    </section>

    <style>
        html {
            scroll-behavior: smooth;
        }

        .scroll-mt-20 {
            scroll-margin-top: 5rem;
        }

        a, .transition-all {
            transition: all 0.3s ease;
        }

        .hover\:shadow-xl:hover {
            transform: translateY(-5px);
        }
        .service-item {
            transition: all 0.3s ease;
        }
        .dropdown-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }
        .dropdown-content.open {
            max-height: 200px;
        }
        .service-title {
            cursor: pointer;
            transition: color 0.2s;
        }
        .service-title:hover {
            color: #4f46e5;
        }
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add click functionality to dropdown toggles
            const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
            const serviceTitles = document.querySelectorAll('.service-title');
            
            // Function to toggle dropdown
            function toggleDropdown(item) {
                const dropdownContent = item.querySelector('.dropdown-content');
                if (dropdownContent) {
                    dropdownContent.classList.toggle('open');
                }
            }
            
            // Add click event to dropdown icons
            dropdownToggles.forEach(toggle => {
                toggle.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const parentItem = this.closest('.service-item');
                    toggleDropdown(parentItem);
                });
            });
            
            // Add click event to service titles
            serviceTitles.forEach(title => {
                title.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const parentItem = this.closest('.service-item');
                    toggleDropdown(parentItem);
                });
            });
        });
    </script>
</x-user-layout>
