<x-user-layout>
    @section('title', 'About Us - Cloud Care Host')
    @section('meta_description', 'Learn more about Cloud Care Host – our mission, vision, and how we deliver secure, affordable, and reliable hosting solutions that empower your online success.')
    @section('meta_keywords', 'about Cloud Care Host, web hosting company, hosting services, secure hosting, hosting in India')
    @section('meta_author', 'Cloud Care Host')
    <!-- Hero Section -->
    <section class="relative h-96 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-20"></div>

        <!-- Animated background elements -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-10 w-20 h-20 bg-white rounded-full animate-pulse"></div>
            <div class="absolute bottom-20 right-20 w-16 h-16 bg-white rounded-full animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/2 left-1/4 w-12 h-12 bg-white rounded-full animate-pulse" style="animation-delay: 2s;"></div>
        </div>

        <div class="relative z-10 text-center px-6 max-w-4xl animate-fade-in-up">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                About <span class="gradient-text">CloudCareHost</span>
            </h1>
            <p class="text-xl md:text-2xl text-indigo-100 leading-relaxed max-w-3xl mx-auto">
                Hosting That Truly Cares - Empowering Your Digital Success with Speed, Security, and Support
            </p>
        </div>
    </section>

    <!-- Mission Statement -->
    <section class="py-16 md:py-20 bg-white section-hidden">
        <div class="container max-w-4xl mx-auto px-6 text-center">
            <div class="w-20 h-1 bg-gradient-to-r from-indigo-600 to-pink-500 mx-auto mb-8"></div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Our Mission</h2>
            <p class="text-lg md:text-xl text-gray-600 leading-relaxed max-w-3xl mx-auto">
                At CloudCareHost, our mission is simple: to provide high-speed, reliable, and scalable web hosting that is easy to use, affordable, and backed by exceptional customer care. We believe hosting should empower businesses and individuals, no matter the size of their website or the stage of their journey.
            </p>
        </div>
    </section>

    <!-- Who We Are -->
    <section class="py-16 md:py-20 bg-gray-50 section-hidden">
        <div class="container max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Who We Are</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        CloudCareHost is a next-generation web hosting solutions provider, dedicated to making the online world fast, secure, and accessible for everyone. Founded with a vision to combine cutting-edge technology with unmatched support, we are quickly becoming a trusted partner for individuals, entrepreneurs, and businesses worldwide.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        We specialize in delivering best-in-class hosting solutions designed to meet the diverse needs of our global customer base.
                    </p>
                </div>
                <div class="order-1 lg:order-2 flex justify-center">
                    <div class="bg-gradient-to-br from-indigo-100 to-purple-100 rounded-2xl p-4 md:p-8 shadow-lg transform hover:scale-105 transition-transform duration-300">
                        <img
                            src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                            alt="CloudCareHost Team"
                            class="rounded-lg shadow-md w-full h-auto max-w-md"
                            loading="lazy"
                        >
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-16 md:py-20 bg-white section-hidden">
        <div class="container max-w-6xl mx-auto px-6">
            <div class="text-center mb-12 md:mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Our Hosting Solutions</h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-lg">Comprehensive hosting services tailored to your specific needs</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                <!-- Shared Hosting -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 p-6 border border-gray-100 hover:border-indigo-200 feature-card group">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-4 group-hover:bg-indigo-200 transition-colors duration-300">
                        <i class="fas fa-share-alt text-indigo-600 text-xl feature-icon"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Shared Hosting</h3>
                    <p class="text-gray-600">Perfect for beginners and small websites with reliable performance at an affordable price.</p>
                </div>

                <!-- Reseller Hosting -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 p-6 border border-gray-100 hover:border-purple-200 feature-card group">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4 group-hover:bg-purple-200 transition-colors duration-300">
                        <i class="fas fa-users text-purple-600 text-xl feature-icon"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Reseller Hosting</h3>
                    <p class="text-gray-600">Start your own hosting business with white-label solutions and dedicated resources.</p>
                </div>

                <!-- VPS & Cloud Hosting -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 p-6 border border-gray-100 hover:border-blue-200 feature-card group">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4 group-hover:bg-blue-200 transition-colors duration-300">
                        <i class="fas fa-cloud text-blue-600 text-xl feature-icon"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">VPS & Cloud Hosting</h3>
                    <p class="text-gray-600">Scalable virtual private servers with full root access and guaranteed resources.</p>
                </div>

                <!-- WordPress Hosting -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 p-6 border border-gray-100 hover:border-green-200 feature-card group">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4 group-hover:bg-green-200 transition-colors duration-300">
                        <i class="fab fa-wordpress text-green-600 text-xl feature-icon"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">WordPress & WooCommerce Hosting</h3>
                    <p class="text-gray-600">Optimized hosting for WordPress with enhanced security and performance features.</p>
                </div>

                <!-- Dedicated Servers -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 p-6 border border-gray-100 hover:border-red-200 feature-card group">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4 group-hover:bg-red-200 transition-colors duration-300">
                        <i class="fas fa-server text-red-600 text-xl feature-icon"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Dedicated Enterprise Solutions</h3>
                    <p class="text-gray-600">High-performance dedicated servers for mission-critical applications and enterprises.</p>
                </div>

                <!-- Domain Services -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 p-6 border border-gray-100 hover:border-yellow-200 feature-card group">
                    <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mb-4 group-hover:bg-yellow-200 transition-colors duration-300">
                        <i class="fas fa-globe text-yellow-600 text-xl feature-icon"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Domain Registration</h3>
                    <p class="text-gray-600">Secure your perfect domain name with easy management and transfer services.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- What Sets Us Apart -->
    <section class="py-16 md:py-20 bg-gradient-to-br from-indigo-50 to-purple-50 section-hidden">
        <div class="container max-w-6xl mx-auto px-6">
            <div class="text-center mb-12 md:mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">What Sets Us Apart</h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-lg">Why thousands of customers trust CloudCareHost with their online presence</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                <!-- Performance -->
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-start mb-4">
                        <div class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-bolt text-indigo-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Performance-Driven Technology</h3>
                        </div>
                    </div>
                    <p class="text-gray-600">Powered by enterprise-grade servers, SSD storage, and advanced caching for lightning-fast speeds.</p>
                </div>

                <!-- Security -->
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-start mb-4">
                        <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-shield-alt text-green-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Rock-Solid Security</h3>
                        </div>
                    </div>
                    <p class="text-gray-600">Multi-layer protection, DDoS mitigation, and regular monitoring keep your websites safe.</p>
                </div>

                <!-- Global Reach -->
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-start mb-4">
                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-globe-americas text-blue-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Global Reach</h3>
                        </div>
                    </div>
                    <p class="text-gray-600">Hosting solutions with worldwide accessibility and a growing network of data centers.</p>
                </div>

                <!-- Customer Support -->
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-start mb-4">
                        <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-headset text-purple-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Customer-First Approach</h3>
                        </div>
                    </div>
                    <p class="text-gray-600">Our support team is passionate about helping you succeed, offering expert guidance 24/7.</p>
                </div>

                <!-- Scalability -->
                <div class="bg-white rounded-xl shadow-lg p-6 md:col-span-2 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-start mb-4">
                        <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-chart-line text-red-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Scalable Solutions</h3>
                        </div>
                    </div>
                    <p class="text-gray-600">From startups to enterprises, our hosting adapts to your business needs with seamless upgrades and flexible resources.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story -->
    <section class="py-16 md:py-20 bg-white section-hidden">
        <div class="container max-w-4xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Our Story</h2>
            </div>

            <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl p-8 md:p-12 shadow-lg hover:shadow-xl transition-shadow duration-300">
                <p class="text-gray-700 text-lg leading-relaxed mb-6">
                    CloudCareHost was built by professionals who experienced first-hand the common frustrations in hosting—slow websites, hidden fees, poor customer service, and lack of scalability. We set out to change that by creating a hosting platform that values speed, transparency, and customer care above everything else.
                </p>
                <p class="text-gray-700 text-lg leading-relaxed">
                    What started as a vision has grown into a trusted hosting provider, serving a global customer base with a reputation for reliability and innovation.
                </p>
            </div>
        </div>
    </section>

    <!-- Our Commitment -->
    <section class="py-16 md:py-20 bg-gray-900 text-white section-hidden">
        <div class="container max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-8">Our Commitment</h2>
            <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                At CloudCareHost, we're more than just a hosting company—we're your digital growth partner.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 text-left">
                <div class="flex items-start p-4 rounded-lg hover:bg-gray-800 transition-colors duration-300">
                    <i class="fas fa-check-circle text-green-400 text-xl mr-4 mt-1 flex-shrink-0"></i>
                    <div>
                        <h4 class="font-bold text-lg mb-2">99.99% Uptime Guarantee</h4>
                        <p class="text-gray-400">Delivering consistent performance and reliability</p>
                    </div>
                </div>
                <div class="flex items-start p-4 rounded-lg hover:bg-gray-800 transition-colors duration-300">
                    <i class="fas fa-check-circle text-green-400 text-xl mr-4 mt-1 flex-shrink-0"></i>
                    <div>
                        <h4 class="font-bold text-lg mb-2">Transparent Pricing</h4>
                        <p class="text-gray-400">Honest pricing with no hidden costs or surprises</p>
                    </div>
                </div>
                <div class="flex items-start p-4 rounded-lg hover:bg-gray-800 transition-colors duration-300">
                    <i class="fas fa-check-circle text-green-400 text-xl mr-4 mt-1 flex-shrink-0"></i>
                    <div>
                        <h4 class="font-bold text-lg mb-2">Continuous Innovation</h4>
                        <p class="text-gray-400">Always improving to meet tomorrow's challenges</p>
                    </div>
                </div>
                <div class="flex items-start p-4 rounded-lg hover:bg-gray-800 transition-colors duration-300">
                    <i class="fas fa-check-circle text-green-400 text-xl mr-4 mt-1 flex-shrink-0"></i>
                    <div>
                        <h4 class="font-bold text-lg mb-2">24/7 Expert Support</h4>
                        <p class="text-gray-400">Real people who care about your success</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 md:py-20 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 section-hidden">
        <div class="container max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Ready to Get Started?</h2>
            <p class="text-xl text-indigo-100 mb-8 max-w-2xl mx-auto">
                Join thousands of websites, businesses, and entrepreneurs who already trust CloudCareHost
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{Route('domain-name')}}" class="bg-white text-indigo-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-lg">
                    Get Your Domain
                </a>
                <a href="{{Route('hosting.index')}}" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-indigo-600 transition-all duration-300 transform hover:scale-105">
                    View Hosting Plans
                </a>
            </div>
        </div>
    </section>

    <!-- Final Tagline -->
    <section class="py-12 md:py-16 bg-white section-hidden">
        <div class="container max-w-4xl mx-auto px-6 text-center">
            <div class="w-16 h-1 bg-gradient-to-r from-indigo-600 to-pink-500 mx-auto mb-6"></div>
            <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">
                CloudCareHost – Hosting That Truly Cares.
            </h3>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Whether you're a blogger, a startup, or an established business, CloudCareHost has the perfect hosting solution to power your success.
            </p>
        </div>
    </section>

    <style>
        /* Custom animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .section-hidden {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .section-visible {
            opacity: 1;
            transform: translateY(0);
        }

        .feature-icon {
            transition: transform 0.3s ease;
        }

        .feature-card:hover .feature-icon {
            transform: scale(1.1);
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Focus styles for accessibility */
        a:focus, button:focus {
            outline: 2px solid #4f46e5;
            outline-offset: 2px;
        }

        /* Custom gradient text */
        .gradient-text {
            background: linear-gradient(to right, #ffffff, #c7d2fe);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>

    <script>
        // Fixed Intersection Observer implementation
        document.addEventListener('DOMContentLoaded', function() {
            // Select all sections with the section-hidden class
            const sections = document.querySelectorAll('.section-hidden');

            // Create intersection observer
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    // If the section is in the viewport
                    if (entry.isIntersecting) {
                        // Add the visible class to trigger the animation
                        entry.target.classList.add('section-visible');

                        // Optional: Stop observing after animation to improve performance
                        // observer.unobserve(entry.target);
                    }
                });
            }, {
                // Trigger when 10% of the section is visible
                threshold: 0.1,
                // Add a little margin at the bottom
                rootMargin: '0px 0px -10% 0px'
            });

            // Observe each section
            sections.forEach(section => {
                observer.observe(section);
            });
        });
    </script>
</x-user-layout>
