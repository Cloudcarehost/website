<header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="container max-w-screen-xl mx-auto mx-auto mx-auto px-4">
        <nav class="flex justify-between items-center py-5">
            <!-- Logo -->
            <a href="#" onclick="homeRedirectWithCurrency()" class="flex items-center">
                <!-- Logo Icon -->
                <div
                    class="w-12 h-12 bg-gradient-to-tr from-indigo-600 via-purple-500 to-pink-500 rounded-2xl flex items-center justify-center mr-3 shadow-lg shadow-indigo-300/40">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="white" viewBox="0 0 24 24">
                        <!-- Cloud Shape -->
                        <path d="M7 18a5 5 0 010-10 6.5 6.5 0 0112.5 1.5A4.5 4.5 0 0119 18H7z" />
                        <!-- Hosting / Network Lines -->
                        <path d="M9 20h6M12 16v8" stroke="white" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </div>

                <!-- Logo Text -->
                <div>
                    <div
                        class="text-2xl leading-none font-extrabold font-montserrat bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 bg-clip-text text-transparent">
                        CloudCare
                    </div>
                    <div class="text-sm tracking-widest text-gray-500 font-medium font-montserrat uppercase">
                        Host
                    </div>
                </div>
            </a>

            <!-- Desktop Navigation with Dropdowns -->
            <ul class="hidden md:flex gap-6 items-center">

                <!-- Domains Dropdown -->
                <li class="relative group">
                    <a href="{{route('domain-name')}}"
                        class="flex items-center text-gray-800 hover:text-indigo-600 font-medium transition-colors relative after:absolute after:bottom-[-5px] after:left-0 after:w-0 after:h-0.5 after:bg-indigo-600 after:transition-all group-hover:after:w-full">
                        Domain
                    </a>
                </li>

                <!-- Hosting Dropdown -->
                <li class="relative group">
                    <button
                        class="flex items-center text-gray-800 hover:text-indigo-600 font-medium transition-colors relative after:absolute after:bottom-[-5px] after:left-0 after:w-0 after:h-0.5 after:bg-indigo-600 after:transition-all group-hover:after:w-full">
                        Cloud Hosting <i
                            class="fas fa-chevron-down ml-1 text-xs transition-transform group-hover:rotate-180"></i>
                    </button>
                    <div
                        class="absolute left-0 mt-2 w-72 bg-white rounded-lg shadow-xl z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 translate-y-2">
                        <div class="py-2">
                            <!-- Shared Hosting -->
                            <a href="#" onclick="hostingSharedRedirectWithCurrency()"
                                class="flex items-start px-4 py-3 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition-colors group">
                                <div class="mr-3 mt-0.5 text-indigo-500">
                                    <i class="fas fa-server text-lg"></i>
                                </div>
                                <div>
                                    <div class="font-medium group-hover:text-indigo-600">Shared Hosting</div>
                                    <div class="text-xs text-gray-500 mt-1">Perfect for small websites and blogs</div>
                                </div>
                            </a>


                            <!-- WordPress Hosting -->
                            <a href="#" onclick="hostingWordpressRedirectWithCurrency()"
                                class="flex items-start px-4 py-3 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition-colors group">
                                <div class="mr-3 mt-0.5 text-indigo-500">
                                    <i class="fab fa-wordpress text-lg"></i>
                                </div>
                                <div>
                                    <div class="font-medium group-hover:text-indigo-600">WordPress Hosting</div>
                                    <div class="text-xs text-gray-500 mt-1">Optimized for WordPress performance</div>
                                </div>
                            </a>

                            <!-- VPS Hosting -->
                            <a href="#" onclick="hostingVPSRedirectWithCurrency()"
                                class="flex items-start px-4 py-3 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition-colors group">
                                <div class="mr-3 mt-0.5 text-indigo-500">
                                    <i class="fas fa-cloud text-lg"></i>
                                </div>
                                <div>
                                    <div class="font-medium group-hover:text-indigo-600">VPS Hosting</div>
                                    <div class="text-xs text-gray-500 mt-1">Dedicated resources for growing sites</div>
                                </div>
                            </a>

                            <!-- Dedicated Hosting -->
                            <a href="#" onclick="hostingDedicatedRedirectWithCurrency()"
                                class="flex items-start px-4 py-3 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition-colors group">
                                <div class="mr-3 mt-0.5 text-indigo-500">
                                    <i class="fas fa-tachometer-alt text-lg"></i>
                                </div>
                                <div>
                                    <div class="font-medium group-hover:text-indigo-600">Dedicated Hosting</div>
                                    <div class="text-xs text-gray-500 mt-1">Full server control for high traffic</div>
                                </div>
                            </a>

                            <!-- NodeJS Hosting -->
                            <a href="#" onclick="hostingNodejsRedirectWithCurrency()"
                                class="flex items-start px-4 py-3 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition-colors group">
                                <div class="mr-3 mt-0.5 text-indigo-500">
                                    <i class="fas fa-tachometer-alt text-lg"></i>
                                </div>
                                <div>
                                    <div class="font-medium group-hover:text-indigo-600">Nodejs Hosting</div>
                                    <div class="text-xs text-gray-500 mt-1">Blazing Fast & Developer-Friendly</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>

                <!-- Business Solution Dropdown -->
                <li class="relative group">
                    <button
                        class="flex items-center text-gray-800 hover:text-indigo-600 font-medium transition-colors relative after:absolute after:bottom-[-5px] after:left-0 after:w-0 after:h-0.5 after:bg-indigo-600 after:transition-all group-hover:after:w-full">
                        Business Solution <i
                            class="fas fa-chevron-down ml-1 text-xs transition-transform group-hover:rotate-180"></i>
                    </button>
                    <div
                        class="absolute left-0 mt-2 w-72 bg-white rounded-lg shadow-xl z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 translate-y-2">
                        <div class="py-2">
                            <!-- WooCommerce Hosting -->
                            <a href="#" onclick="hostingWoocommerceRedirectWithCurrency()"
                                class="flex items-start px-4 py-3 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition-colors group">
                                <div class="mr-3 mt-0.5 text-indigo-500">
                                    <i class="fab fa-wordpress-simple text-lg"></i>
                                </div>
                                <div>
                                    <div class="font-medium group-hover:text-indigo-600">WooCommerce Hosting</div>
                                    <div class="text-xs text-gray-500 mt-1">Optimized for online stores</div>
                                </div>
                            </a>

                            <!-- Reseller Hosting -->
                            <a href="#" onclick="hostingResellerRedirectWithCurrency()"
                                class="flex items-start px-4 py-3 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition-colors group">
                                <div class="mr-3 mt-0.5 text-indigo-500">
                                    <i class="fas fa-users text-lg"></i>
                                </div>
                                <div>
                                    <div class="font-medium group-hover:text-indigo-600">Reseller Hosting</div>
                                    <div class="text-xs text-gray-500 mt-1">Start your own hosting business</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="relative group">
                    <a href="{{route('development')}}"
                        class="flex items-center text-gray-800 hover:text-indigo-600 font-medium transition-colors relative after:absolute after:bottom-[-5px] after:left-0 after:w-0 after:h-0.5 after:bg-indigo-600 after:transition-all group-hover:after:w-full">
                        Development Solutions
                    </a>
                </li>

                <!-- Help & Resources Dropdown -->
                <li class="relative group">
                    <button
                        class="flex items-center text-gray-800 hover:text-indigo-600 font-medium transition-colors relative after:absolute after:bottom-[-5px] after:left-0 after:w-0 after:h-0.5 after:bg-indigo-600 after:transition-all group-hover:after:w-full">
                        Help & Resources <i
                            class="fas fa-chevron-down ml-1 text-xs transition-transform group-hover:rotate-180"></i>
                    </button>
                    <div
                        class="absolute left-0 mt-2 w-72 bg-white rounded-lg shadow-xl z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 translate-y-2">
                        <div class="py-2">
                            <!-- Knowledgebase -->
                            <a href="{{ route('knowledge-base') }}"
                                class="flex items-start px-4 py-3 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition-colors group">
                                <div class="mr-3 mt-0.5 text-indigo-500">
                                    <i class="fas fa-book text-lg"></i>
                                </div>
                                <div>
                                    <div class="font-medium group-hover:text-indigo-600">Knowledgebase</div>
                                    <div class="text-xs text-gray-500 mt-1">Guides, tutorials and FAQs</div>
                                </div>
                            </a>

                            <!-- Contact Us -->
                            <a href="{{ route('contact') }}"
                                class="flex items-start px-4 py-3 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition-colors group">
                                <div class="mr-3 mt-0.5 text-indigo-500">
                                    <i class="fas fa-headset text-lg"></i>
                                </div>
                                <div>
                                    <div class="font-medium group-hover:text-indigo-600">Contact Us</div>
                                    <div class="text-xs text-gray-500 mt-1">24/7 expert support</div>
                                </div>
                            </a>

                            <!-- Blog -->
                            <a href="{{ route('articles') }}"
                                class="flex items-start px-4 py-3 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition-colors group">
                                <div class="mr-3 mt-0.5 text-indigo-500">
                                    <i class="fas fa-newspaper text-lg"></i>
                                </div>
                                <div>
                                    <div class="font-medium group-hover:text-indigo-600">Blog</div>
                                    <div class="text-xs text-gray-500 mt-1">Latest news and tips</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>

            <!-- Auth Links (Desktop) -->
            <div class="hidden md:flex items-center gap-4">
                <!-- Currency Selector -->
                <div class="relative group hidden md:block">
                    <button class="flex items-center text-gray-800 hover:text-indigo-600 font-medium">
                        <span id="current-currency-symbol">$</span>
                        <span class="ml-1" id="current-currency-code">USD</span>
                        <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </button>
                    <div
                        class="absolute right-0 mt-2 w-36 bg-white rounded-lg shadow-xl z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 translate-y-2">
                        <div class="py-2 max-h-60 overflow-y-auto" id="currency-dropdown">
                            <!-- Currencies will be loaded here via JavaScript -->
                            <div class="px-4 py-2 text-gray-500 text-sm">Loading currencies...</div>
                        </div>
                    </div>
                </div>
                <a href="https://clients.cloudcarehost.com/login"
                    class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md font-medium transition-colors">CLIENT
                    AREA</a>
            </div>

            <!-- Mobile Menu Button -->
            <button class="md:hidden flex flex-col gap-1.5" id="mobileMenuButton">
                <span class="w-6 h-0.5 bg-gray-800 transition-all"></span>
                <span class="w-6 h-0.5 bg-gray-800 transition-all"></span>
                <span class="w-6 h-0.5 bg-gray-800 transition-all"></span>
            </button>
        </nav>
    </div>

    <!-- Mobile Menu -->
    <div class="md:hidden fixed left-[-100%] top-[72px] w-full bg-white shadow-lg transition-all duration-300 z-40 py-5 overflow-y-auto max-h-[calc(100vh-72px)]"
        id="mobileMenu">
        <div class="container mx-auto px-4">
            <!-- Mobile Navigation with Accordion -->
            <ul class="flex flex-col gap-1">

                <!-- Currency Selector Mobile -->
                <li class="border-b border-gray-100">
                    <button class="w-full flex justify-between items-center py-3 text-gray-800 font-medium"
                        onclick="toggleMobileDropdown('currency-dropdown-mobile')">
                        <span>Currency</span>
                        <i class="fas fa-chevron-down text-xs transition-transform" id="currency-chevron-mobile"></i>
                    </button>
                    <ul class="pl-4 hidden" id="currency-dropdown-mobile">
                        <li>
                            <div class="py-2 text-gray-600" id="mobile-currency-list">
                                Loading currencies...
                            </div>
                        </li>
                    </ul>
                </li>

                <!-- Domains Accordion -->
                <li class="border-b border-gray-100">
                    <button class="w-full flex justify-between items-center py-3 text-gray-800 font-medium"
                        onclick="toggleMobileDropdown('domains-dropdown')">
                        <span>Domains</span>
                    </button>
                </li>

                <!-- Hosting Accordion -->
                <li class="border-b border-gray-100">
                    <button class="w-full flex justify-between items-center py-3 text-gray-800 font-medium"
                        onclick="toggleMobileDropdown('hosting-dropdown')">
                        <span>Cloud Hosting</span>
                        <i class="fas fa-chevron-down text-xs transition-transform" id="hosting-chevron"></i>
                    </button>
                    <ul class="pl-4 hidden" id="hosting-dropdown">
                        <li>
                            <a href="#" onclick="hostingSharedRedirectWithCurrency()"
                                class="flex items-start py-2 text-gray-600 hover:text-indigo-600">
                                <i class="fas fa-server text-indigo-500 mt-1 mr-3 w-4"></i>
                                <div>
                                    <div>Shared Hosting</div>
                                    <div class="text-xs text-gray-500 mt-1">Perfect for small websites</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" onclick="hostingWordpressRedirectWithCurrency()"
                                class="flex items-start py-2 text-gray-600 hover:text-indigo-600">
                                <i class="fab fa-wordpress text-indigo-500 mt-1 mr-3 w-4"></i>
                                <div>
                                    <div>WordPress Hosting</div>
                                    <div class="text-xs text-gray-500 mt-1">Optimized for WordPress</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" onclick="hostingVPSRedirectWithCurrency()"
                                class="flex items-start py-2 text-gray-600 hover:text-indigo-600">
                                <i class="fas fa-cloud text-indigo-500 mt-1 mr-3 w-4"></i>
                                <div>
                                    <div>VPS Hosting</div>
                                    <div class="text-xs text-gray-500 mt-1">Dedicated resources</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" onclick="hostingDedicatedRedirectWithCurrency()"
                                class="flex items-start py-2 text-gray-600 hover:text-indigo-600">
                                <i class="fas fa-tachometer-alt text-indigo-500 mt-1 mr-3 w-4"></i>
                                <div>
                                    <div>Dedicated Hosting</div>
                                    <div class="text-xs text-gray-500 mt-1">Full server control</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" onclick="hostingNodejsRedirectWithCurrency()"
                                class="flex items-start py-2 text-gray-600 hover:text-indigo-600">
                                <i class="fas fa-tachometer-alt text-indigo-500 mt-1 mr-3 w-4"></i>
                                <div>
                                    <div>Nodejs Hosting</div>
                                    <div class="text-xs text-gray-500 mt-1">Full server control</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Business Solution Accordion -->
                <li class="border-b border-gray-100">
                    <button class="w-full flex justify-between items-center py-3 text-gray-800 font-medium"
                        onclick="toggleMobileDropdown('business-dropdown')">
                        <span>Business Solution</span>
                        <i class="fas fa-chevron-down text-xs transition-transform" id="business-chevron"></i>
                    </button>
                    <ul class="pl-4 hidden" id="business-dropdown">
                        <li>
                            <a href="#" onclick="hostingWoocommerceRedirectWithCurrency()"
                                class="flex items-start py-2 text-gray-600 hover:text-indigo-600">
                                <i class="fab fa-wordpress-simple text-indigo-500 mt-1 mr-3 w-4"></i>
                                <div>
                                    <div>WooCommerce Hosting</div>
                                    <div class="text-xs text-gray-500 mt-1">Optimized for online stores</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" onclick="hostingResellerRedirectWithCurrency()"
                                class="flex items-start py-2 text-gray-600 hover:text-indigo-600">
                                <i class="fas fa-users text-indigo-500 mt-1 mr-3 w-4"></i>
                                <div>
                                    <div>Reseller Hosting</div>
                                    <div class="text-xs text-gray-500 mt-1">Start your hosting business</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Help & Resources Accordion -->
                <li class="border-b border-gray-100">
                    <button class="w-full flex justify-between items-center py-3 text-gray-800 font-medium"
                        onclick="toggleMobileDropdown('help-dropdown')">
                        <span>Help & Resources</span>
                        <i class="fas fa-chevron-down text-xs transition-transform" id="help-chevron"></i>
                    </button>
                    <ul class="pl-4 hidden" id="help-dropdown">
                        <li>
                            <a href="{{ route('knowledge-base') }}"
                                class="flex items-start py-2 text-gray-600 hover:text-indigo-600">
                                <i class="fas fa-book text-indigo-500 mt-1 mr-3 w-4"></i>
                                <div>
                                    <div>Knowledgebase</div>
                                    <div class="text-xs text-gray-500 mt-1">Guides and tutorials</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}"
                                class="flex items-start py-2 text-gray-600 hover:text-indigo-600">
                                <i class="fas fa-headset text-indigo-500 mt-1 mr-3 w-4"></i>
                                <div>
                                    <div>Contact Us</div>
                                    <div class="text-xs text-gray-500 mt-1">24/7 support</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('articles') }}"
                                class="flex items-start py-2 text-gray-600 hover:text-indigo-600">
                                <i class="fas fa-newspaper text-indigo-500 mt-1 mr-3 w-4"></i>
                                <div>
                                    <div>Blog</div>
                                    <div class="text-xs text-gray-500 mt-1">News and tips</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="mt-6 pt-6 border-t border-gray-100">
                <a href="https://clients.cloudcarehost.com/login"
                    class="block bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md font-medium transition-colors text-center">CLIENT
                    AREA</a>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Menu JavaScript (Inline as requested) -->
<script>
    // Toggle mobile menu
    const mobileMenuButton = document.getElementById('mobileMenuButton');
    const mobileMenu = document.getElementById('mobileMenu');
    const bars = mobileMenuButton.querySelectorAll('span');

    mobileMenuButton.addEventListener('click', function () {
        // Toggle menu visibility
        mobileMenu.classList.toggle('left-[-100%]');
        mobileMenu.classList.toggle('left-0');

        // Toggle hamburger icon
        if (mobileMenu.classList.contains('left-0')) {
            bars[0].style.transform = 'translateY(8px) rotate(45deg)';
            bars[1].style.opacity = '0';
            bars[2].style.transform = 'translateY(-8px) rotate(-45deg)';
        } else {
            bars[0].style.transform = '';
            bars[1].style.opacity = '';
            bars[2].style.transform = '';
        }
    });

    // Function to toggle mobile dropdowns
    function toggleMobileDropdown(dropdownId) {
        const dropdown = document.getElementById(dropdownId);
        const chevron = document.getElementById(dropdownId.replace('-dropdown', '-chevron'));

        dropdown.classList.toggle('hidden');
        chevron.classList.toggle('rotate-180');
    }

    // Close mobile menu when clicking outside
    document.addEventListener('click', function (event) {
        if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target)) {
            mobileMenu.classList.add('left-[-100%]');
            mobileMenu.classList.remove('left-0');
            bars[0].style.transform = '';
            bars[1].style.opacity = '';
            bars[2].style.transform = '';
        }
    });

    // Currency Selector Functionality
    document.addEventListener('DOMContentLoaded', function () {
        // Load currencies and current selection
        fetchCurrencies();

        // Set up event delegation for currency selection
        document.addEventListener('click', function (e) {
            if (e.target.classList.contains('currency-option')) {
                e.preventDefault();
                setCurrency(e.target.dataset.code, e.target.dataset.symbol);
            }
        });
    });

    // Function to fetch currencies from API
    async function fetchCurrencies() {
        try {
            // Replace with your actual API endpoint
            const response = await fetch('/api/currencies');
            const currencies = await response.json();

            populateCurrencyDropdowns(currencies);
            setCurrentCurrency();
        } catch (error) {
            console.error('Error loading currencies:', error);
            showErrorInDropdowns();
        }
    }

    // Function to populate both desktop and mobile currency dropdowns
    function populateCurrencyDropdowns(currencies) {
        const desktopDropdown = document.getElementById('currency-dropdown');
        const mobileDropdown = document.getElementById('mobile-currency-list');

        desktopDropdown.innerHTML = '';
        mobileDropdown.innerHTML = '';

        currencies.forEach(currency => {
            // Desktop dropdown item
            const desktopOption = document.createElement('a');
            desktopOption.href = '#';
            desktopOption.className = 'block px-4 py-2 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition-colors currency-option';
            desktopOption.dataset.code = currency.code;
            desktopOption.dataset.symbol = currency.symbol;
            desktopOption.innerHTML = `${currency.symbol} ${currency.code}`;
            desktopDropdown.appendChild(desktopOption);

            // Mobile dropdown item
            const mobileOption = document.createElement('div');
            mobileOption.className = 'py-2 px-2 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition-colors cursor-pointer currency-option';
            mobileOption.dataset.code = currency.code;
            mobileOption.dataset.symbol = currency.symbol;
            mobileOption.innerHTML = `${currency.symbol} ${currency.code}`;
            mobileDropdown.appendChild(mobileOption);
        });
    }

    // Function to show error in dropdowns
    function showErrorInDropdowns() {
        const desktopDropdown = document.getElementById('currency-dropdown');
        const mobileDropdown = document.getElementById('mobile-currency-list');

        desktopDropdown.innerHTML = '<div class="px-4 py-2 text-red-500 text-sm">Failed to load currencies</div>';
        mobileDropdown.innerHTML = '<div class="py-2 text-red-500 text-sm">Failed to load currencies</div>';
    }

    // Function to set current currency (you might want to get this from localStorage or API)
    function setCurrentCurrency() {
        // Check if we have a saved currency preference
        const savedCurrency = localStorage.getItem('selectedCurrency');
        const savedSymbol = localStorage.getItem('selectedCurrencySymbol');

        if (savedCurrency && savedSymbol) {
            updateCurrencyDisplay(savedCurrency, savedSymbol);
        } else {
            // Default to USD
            updateCurrencyDisplay('USD', '$');
        }
    }

    // Function to set currency
    function setCurrency(code, symbol) {
        // Save to localStorage
        localStorage.setItem('selectedCurrency', code);
        localStorage.setItem('selectedCurrencySymbol', symbol);
        console.log("Okay Changed");
        // Update display
        updateCurrencyDisplay(code, symbol);

        // Show notification
        showCurrencyNotification(`Currency changed to ${code}`);

        // Get current page URL
        const currentUrl = window.location.href;
        const url = new URL(currentUrl);

        // Set or update 'currency' parameter
        url.searchParams.set('currency', code);

        // Redirect to the new URL
        window.location.href = url.toString();
        // You can also trigger a page refresh or update prices here
        // updatePrices(code);
    }

    // Function to update currency display
    function updateCurrencyDisplay(code, symbol) {
        // Update desktop view
        document.getElementById('current-currency-symbol').textContent = symbol;
        document.getElementById('current-currency-code').textContent = code;

        // You can update mobile view current currency display if needed
        // For now, mobile just shows the dropdown options
    }

    // Function to show notification
    function showCurrencyNotification(message) {
        // Create notification element
        const notification = document.createElement('div');
        notification.className = 'fixed bottom-4 right-4 bg-indigo-600 text-white px-4 py-2 rounded-md shadow-lg z-50 transition-all duration-300';
        notification.textContent = message;
        document.body.appendChild(notification);

        // Remove after 3 seconds
        setTimeout(() => {
            notification.style.opacity = '0';
            notification.style.transform = 'translateY(10px)';
            setTimeout(() => notification.remove(), 300);
        }, 3000);
    }

</script>
<script>
    function homeRedirectWithCurrency() {
        const selectedCurrency = localStorage.getItem('selectedCurrency') || 'USD';
        window.location.href = `{{ route('user.home') }}?currency=${selectedCurrency}`;
    }
    function hostingSharedRedirectWithCurrency() {
        const selectedCurrency = localStorage.getItem('selectedCurrency') || 'USD';
        window.location.href = `{{ route('hosting.shared') }}?currency=${selectedCurrency}`;
    }

    function hostingWordpressRedirectWithCurrency() {
        const selectedCurrency = localStorage.getItem('selectedCurrency') || 'USD';
        window.location.href = `{{ route('hosting.wordpress') }}?currency=${selectedCurrency}`;
    }

    function hostingWoocommerceRedirectWithCurrency() {
        const selectedCurrency = localStorage.getItem('selectedCurrency') || 'USD';
        window.location.href = `{{ route('hosting.woocommerce') }}?currency=${selectedCurrency}`;
    }

    function hostingVPSRedirectWithCurrency() {
        const selectedCurrency = localStorage.getItem('selectedCurrency') || 'USD';
        window.location.href = `{{ route('hosting.vps') }}?currency=${selectedCurrency}`;
    }

    function hostingDedicatedRedirectWithCurrency() {
        const selectedCurrency = localStorage.getItem('selectedCurrency') || 'USD';
        window.location.href = `{{ route('hosting.dedicated') }}?currency=${selectedCurrency}`;
    }

    function hostingNodejsRedirectWithCurrency() {
        const selectedCurrency = localStorage.getItem('selectedCurrency') || 'USD';
        window.location.href = `{{ route('hosting.nodejs') }}?currency=${selectedCurrency}`;
    }

    function hostingResellerRedirectWithCurrency() {
        const selectedCurrency = localStorage.getItem('selectedCurrency') || 'USD';
        window.location.href = `{{ route('hosting.reseller') }}?currency=${selectedCurrency}`;
    }

</script>