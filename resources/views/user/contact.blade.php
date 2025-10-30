<x-user-layout>
    <!-- Hero Section -->
    <section
        class="relative h-80 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 flex items-center justify-center">
        <div class="absolute inset-0 bg-black opacity-20"></div>

        <div class="relative z-10 text-center px-6 max-w-4xl">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                Contact <span
                    class="bg-gradient-to-r from-white to-indigo-200 bg-clip-text text-transparent">CloudCareHost</span>
            </h1>
            <p class="text-xl text-indigo-100">
                We're here to help you with any questions about our hosting services, domains, or technical support.
            </p>
        </div>
    </section>

    <section class="py-10 bg-gray-50">
        <!-- Mail Us Button -->
        <div class="container max-w-6xl mx-auto px-6 mb-8">
            <div class="text-center">
                <button id="mailUsBtn"
                    class="inline-flex items-center bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-3 rounded-lg transition-colors">
                    <i class="fas fa-envelope mr-2"></i> Mail Us
                </button>
            </div>
        </div>

        <!-- Mail Us Modal -->
        <div id="mailUsModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
            <div class="bg-white rounded-2xl shadow-xl max-w-md w-full mx-4 border border-gray-200">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold text-gray-800">Email Us</h3>
                        <button id="closeModal" class="text-gray-500 hover:text-gray-700 transition-colors">
                            <i class="fas fa-times text-lg"></i>
                        </button>
                    </div>
                    <div class="mb-6">
                        <p class="text-gray-600 mb-4">Click the button below to open your default email client and send
                            us a message:</p>
                        <div class="bg-indigo-50 rounded-lg p-4 mb-4 border border-indigo-100">
                            <p class="text-indigo-800 font-medium text-center">info@cloudcarehost.com</p>
                        </div>
                        <p class="text-sm text-gray-500 mb-4">If your email client doesn't open automatically, you can
                            copy the email address above and send us a message manually.</p>
                    </div>
                    <div class="flex space-x-3">
                        <button id="openEmailBtn"
                            class="flex-1 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-4 rounded-lg transition-colors flex items-center justify-center">
                            <i class="fas fa-envelope mr-2"></i> Open Email
                        </button>
                        <button id="copyEmailBtn"
                            class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-3 px-4 rounded-lg transition-colors flex items-center justify-center">
                            <i class="fas fa-copy mr-2"></i> Copy
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form & Information Section -->
    <section class="py-5 bg-gray-50">
        <div class="container max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">Send Us a Message</h2>
                    <p class="text-gray-600 mb-8">Fill out the form below and we'll get back to you within 24 hours.</p>

                    <form id="contactForm" class="space-y-6">
                        @csrf

                        <!-- Name & Email -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-gray-700 font-medium mb-2">Full Name *</label>
                                <input type="text" id="name" name="name" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all"
                                    placeholder="Enter your full name">
                            </div>
                            <div>
                                <label for="email" class="block text-gray-700 font-medium mb-2">Email Address *</label>
                                <input type="email" id="email" name="email" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all"
                                    placeholder="Enter your email address">
                            </div>
                        </div>

                        <!-- Subject -->
                        <div>
                            <label for="subject" class="block text-gray-700 font-medium mb-2">Subject *</label>
                            <select id="subject" name="subject" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all">
                                <option value="">Select a subject</option>
                                <option value="General Inquiry">General Inquiry</option>
                                <option value="Technical Support">Technical Support</option>
                                <option value="Billing Question">Billing Question</option>
                                <option value="Domain Services">Domain Services</option>
                                <option value="Sales Inquiry">Sales Inquiry</option>
                                <option value="Partnership">Partnership Opportunity</option>
                                <option value="Feedback">Feedback & Suggestions</option>
                            </select>
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="message" class="block text-gray-700 font-medium mb-2">Your Message *</label>
                            <textarea id="message" name="message" rows="5" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all"
                                placeholder="Tell us how we can help you..."></textarea>
                        </div>

                        {{-- Google reCAPTCHA --}}
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Security Verification *</label>
                            <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"
                                data-callback="onRecaptchaSuccess" data-expired-callback="onRecaptchaExpired"
                                data-error-callback="onRecaptchaError"></div>
                            <div id="recaptcha-error" class="hidden mt-2 text-sm text-red-600">
                                Please complete the reCAPTCHA verification.
                            </div>
                            <div id="recaptcha-loading" class="mt-2 text-sm text-gray-500">
                                Loading security verification...
                            </div>
                        </div>
                        <!-- Consent -->
                        <div class="flex items-start">
                            <input type="checkbox" id="consent" name="consent" required
                                class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 mr-3 mt-1">
                            <label for="consent" class="text-gray-600 text-sm">
                                I agree to the <a href="{{ route('privacy.policy') }}"
                                    class="text-indigo-600 hover:underline">privacy policy</a>
                                and <a href="{{ route('terms') }}" class="text-indigo-600 hover:underline">terms of
                                    service</a>.
                                I understand that CloudCareHost may contact me regarding my inquiry.
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" id="submitButton"
                            class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-lg transition-colors flex items-center justify-center disabled:opacity-50 disabled:cursor-not-allowed">
                            <span id="submitText">Send Message</span>
                            <div id="submitSpinner" class="hidden ml-2">
                                <i class="fas fa-circle-notch fa-spin"></i>
                            </div>
                        </button>
                    </form>

                    <!-- Success Message -->
                    <div id="formSuccess" class="hidden mt-6 p-4 bg-green-50 border border-green-200 rounded-lg">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 text-lg mr-3"></i>
                            <div>
                                <h4 class="font-semibold text-green-800">Message Sent Successfully!</h4>
                                <p class="text-green-700 text-sm">Thank you for contacting us. We'll get back to you
                                    within 24 hours.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Error Message -->
                    <div id="formError" class="hidden mt-6 p-4 bg-red-50 border border-red-200 rounded-lg">
                        <div class="flex items-center">
                            <i class="fas fa-exclamation-circle text-red-500 text-lg mr-3"></i>
                            <div>
                                <h4 class="font-semibold text-red-800" id="errorTitle">Submission Error</h4>
                                <p class="text-red-700 text-sm" id="errorMessage">There was an error sending your
                                    message. Please try again.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact Information -->
                <div class="space-y-8">
                    <div class="bg-white rounded-2xl shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6">Get In Touch</h2>
                        <p class="text-gray-600 mb-8">
                            Our team is ready to assist you with any inquiries. Reach out to us through any of the
                            following channels.
                        </p>

                        <div class="space-y-6">
                            <!-- Location -->
                            <div class="flex items-start">
                                <div
                                    class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center text-indigo-600 mr-4 flex-shrink-0">
                                    <i class="fas fa-map-marker-alt text-lg"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800 mb-1">Our Location</h3>
                                    <p class="text-gray-600">cloudcarehost technologies, Plot No H, 16, MIDC Rd, Near
                                        Ambad Gaon, Nashik, Maharashtra 422010</p>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="flex items-start">
                                <div
                                    class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center text-purple-600 mr-4 flex-shrink-0">
                                    <i class="fas fa-phone-alt text-lg"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800 mb-1">Phone Numbers</h3>
                                    <p class="text-gray-600">
                                        <span class="block">Sales: +91 8788217891</span>
                                        <span class="block">Support: +91 8788217891</span>
                                    </p>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="flex items-start">
                                <div
                                    class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center text-blue-600 mr-4 flex-shrink-0">
                                    <i class="fas fa-envelope text-lg"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800 mb-1">Email Addresses</h3>
                                    <p class="text-gray-600">
                                        <span class="block">General: info@cloudcarehost.com</span>
                                        <span class="block">Support: support@cloudcarehost.com</span>
                                    </p>
                                </div>
                            </div>

                            <!-- Hours -->
                            <div class="flex items-start">
                                <div
                                    class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center text-green-600 mr-4 flex-shrink-0">
                                    <i class="fas fa-clock text-lg"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800 mb-1">Working Hours</h3>
                                    <p class="text-gray-600">
                                        <span class="block">Monday - Friday: 9:00 AM - 6:00 PM PST</span>
                                        <span class="block">Saturday: 10:00 AM - 4:00 PM PST</span>
                                        <span class="block">Sunday: Emergency Support Only</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Support Resources -->
                    <div class="bg-gradient-to-br from-indigo-600 to-purple-600 rounded-2xl shadow-lg p-8 text-white">
                        <h3 class="text-xl font-bold mb-4">Quick Support Resources</h3>
                        <p class="text-indigo-100 mb-6">For immediate assistance, check out our knowledge base or submit
                            a support ticket.</p>

                        <div class="space-y-4">
                            <a href="{{Route('knowledge-base')}}"
                                class="flex items-center justify-between p-3 bg-white/10 rounded-lg hover:bg-white/20 transition-colors">
                                <span>Knowledge Base</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                            <a href="https://clients.cloudcarehost.com/dologin.php"
                                class="flex items-center justify-between p-3 bg-white/10 rounded-lg hover:bg-white/20 transition-colors">
                                <span>Submit Support Ticket</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                            <a href="{{Route('articles')}}"
                                class="flex items-center justify-between p-3 bg-white/10 rounded-lg hover:bg-white/20 transition-colors">
                                <span>Blog</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Map Section -->
    <section class="py-16 bg-white">
        <div class="container max-w-6xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Visit Our Office</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Our headquarters in San Francisco, where innovation meets
                    exceptional customer service.</p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                <div class="h-96 w-full">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.835434509374!2d-122.41941548468163!3d37.77492977975918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085809c6c8f4459%3A0xb10ed6d9b5050fa5!2sSan%20Francisco%2C%20CA%2C%20USA!5e0!3m2!1sen!2s!4v1620000000000!5m2!1sen!2s"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        class="filter grayscale hover:grayscale-0 transition-all duration-300">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500">
        <div class="container max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Ready to Get Started?</h2>
            <p class="text-xl text-indigo-100 mb-8">
                Join thousands of satisfied customers who trust CloudCareHost with their online presence.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('hosting.index') }}"
                    class="bg-white text-indigo-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                    View Hosting Plans
                </a>
                <a href="{{ route('domain-name') }}"
                    class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-indigo-600 transition-colors">
                    Get Your Domain
                </a>
            </div>
        </div>
    </section>
    <!-- Google reCAPTCHA API -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Re-add reCAPTCHA script -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const contactForm = document.getElementById('contactForm');
            const submitButton = document.getElementById('submitButton');
            const submitText = document.getElementById('submitText');
            const submitSpinner = document.getElementById('submitSpinner');
            const formSuccess = document.getElementById('formSuccess');
            const formError = document.getElementById('formError');
            const errorTitle = document.getElementById('errorTitle');
            const errorMessage = document.getElementById('errorMessage');
            const recaptchaError = document.getElementById('recaptcha-error');
            const consentCheckbox = document.getElementById('consent');

            // Mail Us Modal Elements
            const mailUsBtn = document.getElementById('mailUsBtn');
            const mailUsModal = document.getElementById('mailUsModal');
            const closeModal = document.getElementById('closeModal');
            const openEmailBtn = document.getElementById('openEmailBtn');
            const copyEmailBtn = document.getElementById('copyEmailBtn');

            const emailAddress = 'info@cloudcarehost.com';

            let recaptchaVerified = false;

            function checkEnableSubmit() {
                // enable only if recaptcha verified AND consent checked
                submitButton.disabled = !(recaptchaVerified && consentCheckbox.checked);
            }

            // reCAPTCHA callbacks (global)
            window.onRecaptchaSuccess = function () {
                recaptchaVerified = true;
                if (recaptchaError) recaptchaError.classList.add('hidden');
                checkEnableSubmit();
            };

            window.onRecaptchaError = function () {
                recaptchaVerified = false;
                if (recaptchaError) recaptchaError.classList.remove('hidden');
                checkEnableSubmit();
            };

            window.onRecaptchaExpired = function () {
                recaptchaVerified = false;
                if (recaptchaError) recaptchaError.classList.remove('hidden');
                checkEnableSubmit();
            };

            // when consent checkbox changes, re-evaluate submit enable state
            consentCheckbox.addEventListener('change', checkEnableSubmit);

            // start disabled until both are true
            submitButton.disabled = true;

            if (contactForm) {
                contactForm.addEventListener('submit', async function (e) {
                    e.preventDefault();

                    // Final client-side check for consent (server will also enforce)
                    if (!consentCheckbox.checked) {
                        errorTitle.textContent = 'Consent Required';
                        errorMessage.textContent = 'Please agree to the privacy policy and terms to proceed.';
                        formError.classList.remove('hidden');
                        return;
                    }

                    // Check reCAPTCHA token
                    const recaptchaResponse = grecaptcha.getResponse();
                    if (!recaptchaResponse) {
                        if (recaptchaError) recaptchaError.classList.remove('hidden');
                        return;
                    }

                    // UI: loading
                    submitText.textContent = 'Sending...';
                    submitSpinner.classList.remove('hidden');
                    submitButton.disabled = true;
                    formSuccess.classList.add('hidden');
                    formError.classList.add('hidden');
                    if (recaptchaError) recaptchaError.classList.add('hidden');

                    try {
                        const formData = new FormData(contactForm);
                        formData.append('g-recaptcha-response', recaptchaResponse);

                        const response = await fetch('{{ route("contact") }}', {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                'Accept': 'application/json',
                                'X-Requested-With': 'XMLHttpRequest'
                            },
                            body: formData
                        });

                        const data = await response.json();

                        if (response.ok && data.success) {
                            formSuccess.classList.remove('hidden');
                            contactForm.reset();

                            // Reset reCAPTCHA
                            grecaptcha.reset();
                            recaptchaVerified = false;

                            // Reset form after success
                            checkEnableSubmit();
                            setTimeout(() => {
                                formSuccess.classList.add('hidden');
                            }, 5000);
                        } else {
                            throw new Error(data.message || 'Failed to send message');
                        }

                    } catch (error) {
                        // Show error message
                        errorTitle.textContent = 'Submission Error';
                        errorMessage.textContent = error.message || 'There was an error sending your message. Please try again.';
                        formError.classList.remove('hidden');

                        // Reset reCAPTCHA on error
                        try { grecaptcha.reset(); } catch (e) { }
                        recaptchaVerified = false;
                        checkEnableSubmit();
                    } finally {
                        // Reset button state
                        submitText.textContent = 'Send Message';
                        submitSpinner.classList.add('hidden');
                        // leave submit disabled — will be enabled only after user completes recaptcha + consent
                    }
                });
            }

            // Mail Us Modal Functions
            mailUsBtn.addEventListener('click', function () {
                mailUsModal.classList.remove('hidden');
            });

            closeModal.addEventListener('click', function () {
                mailUsModal.classList.add('hidden');
            });

            // Close modal when clicking outside the content
            mailUsModal.addEventListener('click', function (e) {
                if (e.target === mailUsModal) {
                    mailUsModal.classList.add('hidden');
                }
            });

            // Open email client
            openEmailBtn.addEventListener('click', function () {
                const subject = encodeURIComponent('Website Inquiry');
                const body = encodeURIComponent('Hi CloudCareHost,\n\nI would like to inquire about [brief reason]. Please contact me at [your phone or email].\n\nThanks,\n[Your Name]');
                const mailto = `mailto:${emailAddress}?subject=${subject}&body=${body}`;

                window.location.href = mailto;

                // Close modal after a short delay
                setTimeout(() => {
                    mailUsModal.classList.add('hidden');
                }, 500);
            });

            // Copy email to clipboard
            copyEmailBtn.addEventListener('click', function () {
                navigator.clipboard.writeText(emailAddress).then(() => {
                    // Change button text temporarily to indicate success
                    const originalText = copyEmailBtn.innerHTML;
                    copyEmailBtn.innerHTML = '<i class="fas fa-check mr-2"></i> Copied!';
                    copyEmailBtn.classList.remove('bg-gray-200', 'hover:bg-gray-300');
                    copyEmailBtn.classList.add('bg-green-500', 'hover:bg-green-600', 'text-white');

                    setTimeout(() => {
                        copyEmailBtn.innerHTML = originalText;
                        copyEmailBtn.classList.remove('bg-green-500', 'hover:bg-green-600', 'text-white');
                        copyEmailBtn.classList.add('bg-gray-200', 'hover:bg-gray-300');
                    }, 2000);
                }).catch(() => {
                    // Fallback if clipboard API fails
                    alert('Email address: ' + emailAddress);
                });
            });

            // Add small input focus effects (optional - keep as before)
            const inputs = contactForm.querySelectorAll('input, textarea, select');
            inputs.forEach(input => {
                input.addEventListener('focus', function () {
                    this.parentElement.classList.add('ring-2', 'ring-indigo-200');
                });
                input.addEventListener('blur', function () {
                    this.parentElement.classList.remove('ring-2', 'ring-indigo-200');
                });
            });
        });
    </script>

    <style>
        .contact-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .contact-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }

        input:focus,
        textarea:focus,
        select:focus {
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }

        .g-recaptcha {
            transform: scale(0.95);
            transform-origin: left top;
        }

        @media (max-width: 768px) {
            .g-recaptcha {
                transform: scale(0.85);
            }
        }

        /* Modal Animation */
        #mailUsModal {
            transition: opacity 0.3s ease;
        }

        #mailUsModal>div {
            transform: scale(0.9);
            transition: transform 0.3s ease;
        }

        #mailUsModal:not(.hidden)>div {
            transform: scale(1);
        }
    </style>
</x-user-layout>