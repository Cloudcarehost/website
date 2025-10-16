<x-user-layout>
    @section('title', 'Buy Domain Name | Find & Register Your Domain - CloudCareHost')
    @section('meta_description', 'Register your domain with CloudCareHost. Enjoy free DNS, SSL options, and 24/7 support while building your trusted online presence.')
    @section('meta_keywords', 'buy domain, domain registration, cheap domain names, best domain provider, register domain online, domain search tool, affordable domains, secure domain registration, domain with free dns')
    @section('meta_author', 'Cloud Care Host')
    <section class="relative h-screen bg-cover bg-center flex items-center justify-center"
    style="background-image: url('{{ asset('images/domain-bg.png') }}')">
    <!-- Overlay for readability -->
    <div class="absolute inset-0 bg-opacity-40"></div>

    <!-- Centered Content (shifted 40px up) -->
    <div class="relative z-10 text-center px-6 max-w-2xl animate__animated animate__fadeInDown transform -translate-y-35">
        <h1 class="text-4xl md:text-5xl font-bold text-black mb-4">
            <span class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 bg-clip-text text-transparent">
                Find
            </span> Your
            <span class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 bg-clip-text text-transparent">
                Perfect
            </span>
            Domain
        </h1>
        <p class="text-lg md:text-xl text-gray-700 mb-8">
            Our pricing structure is transparent from the outset, with no hidden charges.
        </p>

        <!-- Search box -->
            <form id="domainSearchForm" class="flex flex-col sm:flex-row gap-0 shadow-xl rounded-lg border border-gray-300 rounded-lg overflow-hidden max-w-lg mx-auto bg-white/90 backdrop-blur overflow-hidden max-w-lg mx-auto">
                <input type="text" id="domainInput" placeholder="Find your new domain (e.g. example.com)"
                    class="flex-grow px-5 py-4 focus:outline-none text-gray-700 border-none">
                <button type="submit" id="searchButton" class="bg-indigo-700 hover:bg-indigo-800 text-white px-6 py-4 font-medium transition-colors flex items-center justify-center">
                    <span id="buttonText">Search</span>
                    <span id="buttonSpinner" class="hidden ml-2">
                        <i class="fas fa-circle-notch fa-spin"></i>
                    </span>
                </button>
            </form>


    </div>
</section>
<!-- Results Section (initially hidden) -->
    <section id="resultsSection" class="py-12 bg-white hidden">
        <div class="container mx-auto px-4 max-w-6xl">
            <h2 class="text-2xl font-bold text-gray-800 mb-8">Domain Search Results</h2>

            <!-- Results Section header (place under the H2) -->
            <div class="flex items-center justify-center gap-4 mb-6">
            <label for="currencySelect" class="text-sm text-gray-600 sr-only">Currency</label>
            <!-- Styled select -->
            <div class="relative">
                <select id="currencySelect" aria-label="Choose currency"
                    class="appearance-none w-44 pl-3 pr-10 py-2 bg-white border border-gray-200 rounded-full shadow-sm text-sm font-medium focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-300 transition">
                <!-- options filled by JS -->
                </select>

                <!-- custom chevron -->
                <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center">
                <svg class="w-4 h-4 text-gray-400" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                    <path d="M6 8l4 4 4-4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </div>
            </div>
        </div>


            <!-- Searched Domain Result -->
            <div id="searchedResult" class="mb-10">
                <!-- Content will be populated by JavaScript -->
            </div>

            <!-- Suggestions Section -->
            <div id="suggestionsSection" class="mt-12">
                <h3 class="text-xl font-semibold text-gray-700 mb-6 flex items-center">
                    <i class="fas fa-lightbulb text-yellow-500 mr-2"></i>
                    Suggested Alternatives
                </h3>
                <div id="suggestionsContainer" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Suggestions will be populated by JavaScript -->

                </div>
                <div id="suggestionsLoader" class="col-span-full text-center py-8 text-gray-500 hidden">
                        <i class="fas fa-circle-notch fa-spin text-2xl mb-3 text-indigo-600"></i>
                        <p>Loading suggestions...</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Error Message (initially hidden) -->
    <div id="errorMessage" class="fixed top-4 right-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded shadow-lg hidden z-50 transition-opacity duration-300">
        <div class="flex items-center">
            <i class="fas fa-exclamation-circle mr-2"></i>
            <span id="errorText"></span>
            <button id="closeError" class="ml-4 text-red-800 hover:text-red-600">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
<section class="py-20 bg-gradient-to-b from-indigo-50 via-white to-indigo-100">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($tldPricing as $tld)
            @if (in_array($tld->tld, ['com', 'in', 'org']))
                <div
                    class="rounded-2xl shadow-lg overflow-hidden transition-transform transform hover:-translate-y-2 hover:shadow-2xl p-8 text-center
                           bg-gradient-to-br from-indigo-50 to-blue-100 border border-indigo-100">

                    <div class="w-20 h-20 mx-auto mb-5 flex items-center justify-center rounded-full
                                bg-gradient-to-br from-indigo-600 to-purple-600 text-white shadow-md">
                        <span class="text-2xl font-extrabold">.{{ $tld->tld }}</span>
                    </div>
                    <div class="text-3xl font-extrabold text-indigo-700">
                        ${{ $tld->price }}
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</section>




    <section class="bg-white py-16">
    <div class="container max-w-screen-xl mx-auto px-4 mt-12 text-center">
            <h2 class="text-3xl md:text-4xl font-bold font-montserrat mb-4">
                Why You Need the Perfect Domain Name
            </h2>
            <p class="text-gray-500 text-lg max-w-3xl mx-auto mb-12">
                Your domain name is more than just a web address.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white p-8 rounded-2xl border hover:shadow-lg transition">
                    <h3 class="text-xl font-bold mb-3">Build Trust & Credibility</h3>
                    <p class="text-gray-500">
                       It is the foundation of your online identity and the first impression people have of your brand.
                       Choosing the perfect domain name is essential because it builds trust and credibility, making your website
                        appear professional and reliable in the eyes of visitors. A clean, memorable domain not only enhances your brand
                        image but also helps improve your search engine visibility, giving you an advantage when people look for products or services online.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white p-8 rounded-2xl border hover:shadow-lg transition">
                    <h3 class="text-xl font-bold mb-3">Strengthen Brand Identity</h3>
                    <p class="text-gray-500">
                        A strong domain name also strengthens your brand identity by making it easy for customers to remember,
                        share, and return to your site. When your domain is simple and relevant, it improves the user experience,
                        reduces typing errors, and ensures that your audience can find you without hassle. Beyond this, your domain
                         is a long-term digital asset that grows in value as your business expands, making it an investment in your brand’s future success.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white p-8 rounded-2xl border hover:shadow-lg transition">
                    <h3 class="text-xl font-bold mb-3">Secure Your Digital Future</h3>
                    <p class="text-gray-500">
                        At CloudCareHost, we understand the importance of securing the right domain before someone else does.
                        That’s why we provide fast, affordable, and hassle-free domain registration so you can establish a powerful
                        online presence and focus on growing your business with confidence.
                    </p>
                </div>
            </div>
        </div>
</section>

<section class="relative flex items-center justify-center bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 py-6">
    <!-- Overlay for readability -->
    <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 bg-opacity-30"></div>

    <!-- Centered Content -->
    <div class="relative z-10 text-center px-6 max-w-4xl animate__animated animate__fadeInDown">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-snug">
            Why Choose CloudCareHost Instant Domain Name Registration?
        </h1>
        <p class="text-xl md:text-2xl text-indigo-100 leading-relaxed">
            Quick, easy, and affordable domain registration with one-click setup, free DNS, privacy protection,
            and seamless hosting integration — all backed by 24/7 expert support.
        </p>
    </div>


</section>

<section class="bg-gray-50 py-20">
    <div class="container max-w-screen-xl mx-auto px-4">
     <!-- Quick Setup Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-20">
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold mb-4">Secure Your Perfect Domain Instantly with CloudCareHost.</h2>
                    <p class="text-gray-600 mb-6">
                        Your online journey starts with the right name—and at CloudCareHost, finding it is easier than ever.
                        Simply search, choose, and register your perfect domain in seconds. With instant setup, affordable pricing,
                         and powerful management tools, you can secure your digital identity without any delays. Start today and make your
                         mark online instantly with CloudCareHost.

                    </p>

                </div>
                <div class="flex justify-center">
                    <img src="{{ asset('images/home-001.png') }}" alt="Setup Illustration" class="max-w-full">
                </div>
            </div>

            <!-- Faster Website Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-20">
                <div class="flex justify-center order-1 md:order-none">
                    <img src="{{ asset('images/home-001.png') }}" alt="Speed Illustration" class="max-w-full">
                </div>
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold mb-4">Easy & Secure Domain Transfer to CloudCareHost</h2>
                    <p class="text-gray-600 mb-6">
                        Moving your domain has never been easier. At CloudCareHost, we make the transfer process simple, secure, and hassle-free.
                        With just a few clicks, you can bring your domain to us and enjoy affordable renewals, free DNS management, and 24/7 expert support.
                         Plus, every transfer comes with privacy protection and seamless integration with our hosting plans.
                        Switch today and experience a smoother, faster, and more reliable way to manage your domain—all under one roof with CloudCareHost.

                    </p>

                </div>
            </div>

            <!-- Quick Setup Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold mb-4">Seamless Domain Management with CloudCareHost</h2>
                    <p class="text-gray-600 mb-6">
                       Managing your domain should be simple—and with CloudCareHost, it is. Our intuitive control panel gives you full
                       access to DNS settings, domain forwarding, renewals, and privacy tools in just a few clicks. No technical skills
                        required—everything is designed for ease, speed, and security.
                        With advanced features, affordable pricing, and 24/7 expert support, CloudCareHost makes domain management effortless, so you can focus
                        on growing your online presence while we handle the rest.

                    </p>

                </div>
                <div class="flex justify-center">
                    <img src="{{ asset('images/home-001.png') }}" alt="Setup Illustration" class="max-w-full">
                </div>
            </div>
    </div>
</section>


    <section class="bg-white p-20 py-20">
    <div class="bg-white rounded-xl shadow-md p-8 py-12">
        <h2 class="text-3xl font-bold font-montserrat mb-8 text-center">Frequently Asked Questions</h2>

        <div class="space-y-4">

            <!-- Q2 -->
            <div class="border-b border-gray-200 pb-4">
                <button class="flex justify-between items-center w-full text-left font-medium faq-toggle" aria-expanded="false">
                    <span>How do I choose the best domain name for my website?</span>
                    <i class="fas fa-chevron-down transition-transform"></i>
                </button>
                <div class="mt-2 text-gray-600 hidden faq-content">
                    <p>
                        Pick a short, memorable name that reflects your brand and is easy to spell. Prefer a
                        relevant keyword if possible and choose a familiar extension (like <code>.com</code>) unless a niche TLD fits your audience.
                    </p>
                </div>
            </div>

            <!-- Q3 -->
            <div class="border-b border-gray-200 pb-4">
                <button class="flex justify-between items-center w-full text-left font-medium faq-toggle" aria-expanded="false">
                    <span>What are domain extensions, and which one should I choose?</span>
                    <i class="fas fa-chevron-down transition-transform"></i>
                </button>
                <div class="mt-2 text-gray-600 hidden faq-content">
                    <p>
                        Extensions (TLDs) like <code>.com</code>, <code>.net</code>, or <code>.org</code> tell users what your site is about.
                        For businesses and e-commerce, <code>.com</code> is usually best; choose niche TLDs only when they match your brand or audience.
                    </p>
                </div>
            </div>

            <!-- Q4 -->
            <div class="border-b border-gray-200 pb-4">
                <button class="flex justify-between items-center w-full text-left font-medium faq-toggle" aria-expanded="false">
                    <span>How do I register a domain with you?</span>
                    <i class="fas fa-chevron-down transition-transform"></i>
                </button>
                <div class="mt-2 text-gray-600 hidden faq-content">
                    <p>
                        Search for your desired name with our tool, pick an available result, and complete checkout.
                        We handle the technical setup , your domain can be live in minutes.
                    </p>
                </div>
            </div>

            <!-- Q5 -->
            <div class="border-b border-gray-200 pb-4">
                <button class="flex justify-between items-center w-full text-left font-medium faq-toggle" aria-expanded="false">
                    <span>Can I transfer my existing domain to your platform?</span>
                    <i class="fas fa-chevron-down transition-transform"></i>
                </button>
                <div class="mt-2 text-gray-600 hidden faq-content">
                    <p>
                        Yes. Unlock the domain at your current registrar, get the auth code, then start the transfer here.
                        We’ll guide you through the steps and move DNS and management to our platform.
                    </p>
                </div>
            </div>

            <!-- Q8 -->
            <div class="border-b border-gray-200 pb-4">
                <button class="flex justify-between items-center w-full text-left font-medium faq-toggle" aria-expanded="false">
                    <span>What is WHOIS privacy, and why should I enable it?</span>
                    <i class="fas fa-chevron-down transition-transform"></i>
                </button>
                <div class="mt-2 text-gray-600 hidden faq-content">
                    <p>
                        WHOIS privacy hides your personal contact details from the public domain lookup, reducing spam
                        and protecting your privacy , we recommend enabling it for most registrations.
                    </p>
                </div>
            </div>

            <!-- Q11 -->
            <div class="border-b border-gray-200 pb-4">
                <button class="flex justify-between items-center w-full text-left font-medium faq-toggle" aria-expanded="false">
                    <span>What happens if my domain expires?</span>
                    <i class="fas fa-chevron-down transition-transform"></i>
                </button>
                <div class="mt-2 text-gray-600 hidden faq-content">
                    <p>
                        Your site and email go offline, but you usually keep the name during a 30-day grace period.
                        Renew before the grace period ends to avoid extra recovery fees or losing the domain.
                    </p>
                </div>
            </div>

            <!-- Q12 -->
            <div class="border-b border-gray-200 pb-4">
                <button class="flex justify-between items-center w-full text-left font-medium faq-toggle" aria-expanded="false">
                    <span>Can I change my domain name after registration?</span>
                    <i class="fas fa-chevron-down transition-transform"></i>
                </button>
                <div class="mt-2 text-gray-600 hidden faq-content">
                    <p>
                        Technically yes, but changing domains can hurt SEO and traffic. If you must change, use redirects
                        and forwards so visitors and search engines are sent to the new address.
                    </p>
                </div>
            </div>

            <!-- Q15 -->
            <div class="border-gray-200">
                <button class="flex justify-between items-center w-full text-left font-medium faq-toggle" aria-expanded="false">
                    <span>What payment options do you accept for domain registration?</span>
                    <i class="fas fa-chevron-down transition-transform"></i>
                </button>
                <div class="mt-2 text-gray-600 hidden faq-content">
                    <p>
                        We accept major credit cards and PayPal, and offer flexible billing cycles (monthly, annual, multi-year)
                        so you can choose what fits your budget.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

</x-user-layout>
<script>
document.addEventListener('DOMContentLoaded', function () {
    // ---------- FAQ toggle ----------
    const faqToggles = document.querySelectorAll('.faq-toggle');
    faqToggles.forEach(toggle => {
        toggle.addEventListener('click', function () {
            const content = this.parentElement.querySelector('.faq-content');
            const icon = this.querySelector('i');
            if (content) content.classList.toggle('hidden');
            if (icon) icon.classList.toggle('rotate-180');
        });
    });

    // ---------- DOM refs ----------
    const searchForm = document.getElementById('domainSearchForm');
    const domainInput = document.getElementById('domainInput');
    const resultsSection = document.getElementById('resultsSection');
    const searchedResult = document.getElementById('searchedResult');
    const suggestionsContainer = document.getElementById('suggestionsContainer');
    const searchButton = document.getElementById('searchButton');
    const buttonText = document.getElementById('buttonText');
    const buttonSpinner = document.getElementById('buttonSpinner');
    const errorMessage = document.getElementById('errorMessage');
    const errorText = document.getElementById('errorText');
    const closeError = document.getElementById('closeError');
    const suggestionsLoader = document.getElementById('suggestionsLoader');
    const currencySelect = document.getElementById('currencySelect');

    if (closeError) closeError.addEventListener('click', () => errorMessage && errorMessage.classList.add('hidden'));

    // ---------- helper: get CSRF token ----------
    function getCsrf() {
        const tokenMeta = document.querySelector('meta[name="csrf-token"]');
        return tokenMeta ? tokenMeta.getAttribute('content') : '';
    }

    // ---------- currency state ----------
    // currencyData: { base: 'USD', list: [...], map: { 'USD': {...} } }
    let currencyData = { base: 'USD', list: [], map: {} };
    let activeCurrency = 'USD';

    // format money safely
    function formatMoney(n, decimals = 2) {
        const num = Number(n);
        if (!isFinite(num)) return '—';
        return num.toFixed(decimals);
    }

    // ---------- initialize currency dropdown from server payload ----------
    function initCurrencyDropdown(currencyPayload) {
        if (!currencyPayload || !currencyPayload.list) return;
        currencyData.base = currencyPayload.base || 'USD';
        currencyData.list = currencyPayload.list;
        currencyData.map = {};
        currencyPayload.list.forEach(c => { currencyData.map[c.code] = c; });

        // default currency
        activeCurrency = currencyData.base;

        if (!currencySelect) return;
        currencySelect.innerHTML = '';
        currencyPayload.list.forEach(c => {
            const opt = document.createElement('option');
            opt.value = c.code;
            opt.textContent = c.code + (c.prefix ? ' (' + c.prefix.trim() + ')' : '');
            if (c.code === activeCurrency) opt.selected = true;
            currencySelect.appendChild(opt);
        });

        currencySelect.addEventListener('change', function () {
            activeCurrency = this.value;
            updateDisplayedPrices();
        });
    }

    // ---------- convert & update prices on page ----------
    // convert from base currency -> activeCurrency using multiplier = targetRate / baseRate
    function updateDisplayedPrices() {
        const cards = document.querySelectorAll('.domain-card');
        const baseCurrency = currencyData.base;
        const target = currencyData.map[activeCurrency];
        if (!target || !baseCurrency) return;
        const baseRate = Number(currencyData.map[baseCurrency]?.rate ?? 1);
        const targetRate = Number(target.rate ?? 1);
        const multiplier = baseRate > 0 ? (targetRate / baseRate) : 1;

        cards.forEach(card => {
            const basePriceAttr = card.getAttribute('data-base-price');
            const priceNode = card.querySelector('.domain-price');
            if (!priceNode) return;
            if (!basePriceAttr) {
                priceNode.textContent = 'Price not available';
                return;
            }
            const basePrice = parseFloat(basePriceAttr);
            if (!isFinite(basePrice)) {
                priceNode.textContent = 'Price not available';
                return;
            }
            const converted = basePrice * multiplier;
            const formatted = formatMoney(converted, 2);
            const prefix = target.prefix ?? '';
            const suffix = target.suffix ?? '';
            priceNode.textContent = `${prefix}${formatted}${suffix}`;
        });
    }

    // ---------- safe guard: form exists ----------
    if (!searchForm) {
        console.warn('domainSearchForm not found — search disabled');
        return;
    }

    // ensure suggestionsLoader is present inside results area if needed
    // (we expect suggestionsLoader to be outside suggestionsContainer, as in your markup)

    // ---------- Submit handler ----------
    searchForm.addEventListener('submit', async function (e) {
        e.preventDefault(); // stop native submit/refresh
        const domain = (domainInput && domainInput.value) ? domainInput.value.trim() : '';
        if (!domain) return;

        // show main loader on button
        if (searchButton) searchButton.disabled = true;
        if (buttonText) buttonText.classList.add('hidden');
        if (buttonSpinner) buttonSpinner.classList.remove('hidden');

        try {
            const resp = await fetch("{{ route('domain.search') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': getCsrf()
                },
                body: JSON.stringify({ domain })
            });

            const contentType = resp.headers.get('content-type') || '';
            if (!resp.ok) {
                let errText = await resp.text();
                try { const j = JSON.parse(errText); errText = j.message || JSON.stringify(j); } catch(_) {}
                throw new Error(`API Error ${resp.status}: ${errText}`);
            }

            let data;
            if (contentType.includes('application/json')) {
                data = await resp.json();
            } else {
                const text = await resp.text();
                console.log('Non-json response (maybe dd() output):', text);
                throw new Error('Unexpected non-JSON response — check server (see console).');
            }

            if (!data.ok) throw new Error(data.message || 'Unknown API error');

            // Clear previous suggestions area but preserve loader node
            if (suggestionsContainer) {
                suggestionsContainer.innerHTML = '';
            }

            // If currency payload present, init dropdown
            if (data.currency) {
                initCurrencyDropdown(data.currency);
            }

            // render & kick off suggestion fetching
            displayResults(data);

        } catch (err) {
            console.error(err);
            if (errorText) errorText.textContent = err.message || 'Unexpected error';
            if (errorMessage) {
                errorMessage.classList.remove('hidden');
                setTimeout(() => errorMessage.classList.add('hidden'), 6000);
            }
        } finally {
            if (searchButton) searchButton.disabled = false;
            if (buttonText) buttonText.classList.remove('hidden');
            if (buttonSpinner) buttonSpinner.classList.add('hidden');
        }
    });

    // ---------- Display results (searched + suggestions) ----------
    function displayResults(data) {
        if (resultsSection) resultsSection.classList.remove('hidden');

        // Display searched domain
        if (data.searched && searchedResult) {
            displayDomainCard(data.searched, 'searchedResult', true);
        }

        // Clear suggestions area (again) and append loader node after clear if loader exists outside
        if (suggestionsContainer) suggestionsContainer.innerHTML = '';
        if (suggestionsLoader && suggestionsLoader.parentElement) {
            // If loader is visually outside suggestionsContainer, ensure it's visible in its place (nothing to reattach)
            // If loader was inside suggestionsContainer earlier, you can append it:
            if (!suggestionsLoader.parentElement.isSameNode(suggestionsContainer)) {
                // loader is outside, leave it
            } else {
                // loader is inside container — re-append to preserve DOM order
                suggestionsContainer.appendChild(suggestionsLoader);
            }
        }

        // If server returned immediate suggestions array, render them
        if (Array.isArray(data.suggestions) && data.suggestions.length > 0) {
            if (suggestionsLoader) suggestionsLoader.classList.add('hidden');
            data.suggestions.forEach(suggestion => displayDomainCard(suggestion, 'suggestionsContainer', false));
            updateDisplayedPrices();
        } else if (data.suggestion_token && data.base) {
            // show suggestions loader and fetch sequentially
            if (suggestionsLoader) suggestionsLoader.classList.remove('hidden');
            fetchAndAppendSuggestions(data.suggestion_token, data.base)
                .finally(() => { if (suggestionsLoader) suggestionsLoader.classList.add('hidden'); });
        } else {
            if (suggestionsContainer) suggestionsContainer.innerHTML = `
                <div class="col-span-full text-center py-8 text-gray-500">
                    <i class="fas fa-info-circle text-3xl mb-3"></i>
                    <p>No suggestions available at this time.</p>
                </div>
            `;
            if (suggestionsLoader) suggestionsLoader.classList.add('hidden');
        }

        // scroll
        if (resultsSection) resultsSection.scrollIntoView({ behavior: 'smooth' });
    }

    // ---------- Render single domain card (stores base price for client conversion) ----------
    function displayDomainCard(domainData, containerId, isSearched) {
        const container = document.getElementById(containerId);
        if (!container) return;

        const statusClass = domainData.status === 'available' ? 'available' : 'unavailable';
        const statusText = domainData.status === 'available' ? 'Available' : 'Unavailable';

        // read base price value sent by server (assumed numeric string or number)
        const basePrice = (domainData.price !== undefined && domainData.price !== null) ? Number(domainData.price) : null;

        const card = document.createElement('div');
        card.className = isSearched
            ? 'domain-card bg-white rounded-xl shadow-md p-6 border-t-4 border-indigo-600'
            : 'domain-card suggestion-card bg-white rounded-lg shadow p-5';

        if (basePrice !== null && isFinite(basePrice)) {
            card.setAttribute('data-base-price', String(basePrice));
        }

        // initial price text uses base currency (may be updated by updateDisplayedPrices)
        const initialPrefix = (currencyData.map[currencyData.base]?.prefix ?? '');
        const initialSuffix = (currencyData.map[currencyData.base]?.suffix ?? '');
        const initialPriceText = (basePrice !== null && isFinite(basePrice)) ? `${initialPrefix}${formatMoney(basePrice,2)}${initialSuffix}` : 'Price not available';

        card.innerHTML = `
            <div class="flex justify-between items-start mb-4">
                <h3 class="text-xl font-bold text-gray-800 break-all">${domainData.domain}</h3>
                <span class="status-badge px-3 py-1 rounded-full text-sm font-semibold ${statusClass}">
                    ${statusText}
                </span>
            </div>

            <div class="mb-4">
                <p class="text-gray-600 mb-1">Registration</p>
                <p class="text-2xl font-bold text-gray-800 domain-price">${initialPriceText}</p>
            </div>

            ${isSearched ? `
                <div class="mb-4 p-3 bg-indigo-50 rounded-lg">
                    <p class="text-indigo-700 text-sm">
                        <i class="fas fa-info-circle mr-1"></i>
                        This domain is ${domainData.status === 'available' ? 'available for registration' : 'already registered'}.
                    </p>
                </div>
            ` : ''}

            <div class="mt-4">
                ${domainData.status === 'available'
                    ? `<a href="https://clients.cloudcarehost.com/cart.php?a=add&domain=register&query=${domainData.domain}&period=1">
                        <button class="add-to-cart-btn w-full bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-4 rounded-lg font-medium transition-colors">
                            <i class="fas fa-cart-plus mr-2"></i>
                                Buy Now
                       </button>
                       </a>`
                    : `<div class="flex flex-col sm:flex-row gap-2">

                       </div>`}
            </div>
        `;

        if (isSearched) {
            container.innerHTML = '';
            container.appendChild(card);
        } else {
            container.appendChild(card);
        }

        // update displayed price immediately to activeCurrency
        updateDisplayedPrices();
    }

    // ---------- fetch suggestions one-by-one and append; convert prices client-side ----------
    async function fetchAndAppendSuggestions(token, base) {
        if (!token || !base) return;
        const nextUrl = "{{ route('domain.suggestions.next') }}";
        const csrf = getCsrf();

        while (true) {
            try {
                const r = await fetch(nextUrl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': csrf
                    },
                    body: JSON.stringify({ token, base })
                });

                if (!r.ok) {
                    console.error('Suggestion fetch failed', r.status);
                    break;
                }

                const j = await r.json();
                if (!j.ok) {
                    console.error('Suggestion API returned error', j);
                    break;
                }

                if (j.done) break;

                if (j.suggestion) {
                    displayDomainCard(j.suggestion, 'suggestionsContainer', false);
                }

                // optional tiny delay for smoother UX (uncomment if you want)
                // await new Promise(res => setTimeout(res, 80));
            } catch (err) {
                console.error('Error fetching suggestion:', err);
                break;
            }
        }
    }

}); // end DOMContentLoaded
</script>

 <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4f46e5',
                        secondary: '#7c3aed',
                        accent: '#ec4899',
                    }
                }
            }
        }
    </script>
    <style>
        .domain-card {
            transition: all 0.3s ease;
        }
        .domain-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .available {
            color: #10b981;
        }
        .unavailable {
            color: #ef4444;
        }
        .suggestion-card {
            border-left: 4px solid #7c3aed;
        }
        .animate-pulse {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
        .btn-loading {
            position: relative;
            color: transparent !important;
        }
        .btn-loading::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            top: 50%;
            left: 50%;
            margin: -10px 0 0 -10px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
        }
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>

