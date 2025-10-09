<x-user-layout>
    <section class="py-24 md:py-32 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Sticky TOC -->
                <aside class="hidden md:block">
                    <div class="sticky top-24 bg-white rounded-lg border shadow-sm p-4">
                        <h4 class="text-sm font-semibold text-gray-700 mb-3">On this page</h4>
                        <nav class="text-sm text-gray-600 space-y-2">
                            <a href="#intro" class="block hover:text-indigo-600">Introduction</a>
                            <a href="#eligibility" class="block hover:text-indigo-600">Refund Eligibility</a>
                            <a href="#standard-terms" class="block hover:text-indigo-600">Standard Refund Terms</a>
                            <a href="#restrictions" class="block hover:text-indigo-600">Restrictions & Limitations</a>
                            <a href="#by-plan" class="block hover:text-indigo-600">Refunds by Plan</a>
                            <a href="#chargebacks" class="block hover:text-indigo-600">Chargebacks & Disputes</a>
                            <a href="#processing" class="block hover:text-indigo-600">Refund Processing</a>
                        </nav>
                    </div>
                </aside>

                <!-- Main Content -->
                <div class="md:col-span-3 bg-white rounded-xl shadow-md p-8">
                    <div class="text-center mb-12">
                        <h1 class="text-4xl md:text-5xl font-bold font-montserrat text-gray-900 mb-4">Cancellation &
                            <span class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 bg-clip-text text-transparent">
                                Refunds
                            </span> Policy
                        </h1>
                        <p class="text-sm text-gray-500">Last updated: {{ now()->format('F j, Y') }}</p>
                    </div>

                    <!-- Intro Highlight -->
                    <div id="intro" class="p-6 mb-10 rounded-lg text-white bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 shadow-md">
                        <p class="text-lg leading-relaxed">
                            Please note that not all payments are automatically refunded when you cancel a service with CloudCareHost.
                            Refund eligibility depends on the type of service and the payment method used.
                            This policy outlines when refunds are processed automatically and which payment methods may qualify for a manual refund.
                        </p>
                    </div>

                    <div class="prose max-w-none text-gray-700 space-y-10">
                        <!-- Refund Eligibility Section -->
                        <section id="eligibility" class="pb-6 border-b border-gray-100">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Refund Eligibility</h2>
                            <p class="mb-4">Products and services purchased from CloudCareHost are eligible for a refund only if they are canceled within the applicable refund period outlined in this policy. Please be aware that some products may have specific refund conditions or limitations, and certain items may be non-refundable under any circumstances.</p>
                            <p class="mb-4">Only refund requests submitted through the CloudCareHost Client Area will be considered valid and reviewed by our team. Please refer to the sections below for the specific refund terms that apply to each type of product or service.</p>
                            <p>Once your cancellation takes effect, CloudCareHost is not responsible for any data loss that may occur due to account suspension or termination.</p>
                        </section>

                        <!-- Standard Refund Terms Section -->
                        <section id="standard-terms" class="pb-6 border-b border-gray-100">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Standard Refund Terms</h2>

                            <div class="mb-6">
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Within 1–30 Days</h3>
                                <p class="mb-3">You may be eligible for a refund on the following hosting services: Shared Hosting, WordPress Hosting, Reseller Hosting, WooCommerce hosting, NodeJS hosting.</p>
                                <p>Please note that cPanel license fees and domain registration or renewal fees are non-refundable, whether purchased initially or during a renewal.</p>
                            </div>

                            <div class="mb-6">
                                <h3 class="text-xl font-medium text-gray-700 mb-3">After 30+ Days</h3>
                                <p>Refunds are not available after 30 days of active service usage.</p>
                            </div>

                            <div class="mb-6">
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Account Closure Notice</h3>
                                <p>No refunds will be issued after your account is closed. If you're eligible for a refund, you must request it before closing your account. While you're free to close your account at any time, doing so will make you ineligible for any refund, even if you were otherwise covered under this Refund Policy.</p>
                            </div>

                            <div>
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Payment Method Limitations</h3>
                                <p>Note: If a refund back to the original payment method is not possible, a refund to your CloudCareHost balance can be offered as an alternative.</p>
                            </div>
                        </section>

                        <!-- Restrictions & Limitations Section -->
                        <section id="restrictions" class="pb-6 border-b border-gray-100">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Restrictions & Limitations</h2>

                            <div class="mb-6">
                                <p>The following restrictions and limitations apply to our refund policy:</p>
                            </div>

                            <ul class="list-disc pl-6 space-y-3">
                                <li><strong>Non-refundable Services:</strong> Refunds are not available for VPS plans, Dedicated Servers, cPanel or Plesk licenses, SSL certificates, and domain name purchases. Additionally, any administrative or setup fees for custom software or server configurations are also non-refundable under any circumstances.</li>

                                <li><strong>First Purchase Only:</strong> Our standard refund offer is only valid for the first hosting package purchased on a billing account that is less than 30 days old. Refunds do not apply to additional or renewed services.</li>

                                <li><strong>Multiple Orders:</strong> Refunds are not eligible for accounts with multiple hosting orders. For example, if you purchase multiple VPS servers and use them for several days, you cannot request a refund for any of them, even if they fall within the general refund period.</li>

                                <li><strong>Account Credits:</strong> Funds added to your account or deposits made as account credit are non-refundable. Once added, these credits can only be used for future purchases and cannot be withdrawn or returned.</li>

                                <li><strong>Promotional Plans:</strong> Plans purchased through special promotions, discount codes, or exclusive offer links are non-refundable. These discounted services are final and not eligible for a refund under any circumstances.</li>
                            </ul>
                        </section>

                        <!-- Refunds by Plan Section -->
                        <section id="by-plan" class="pb-6 border-b border-gray-100">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Refunds by Hosting Plan</h2>

                            <div class="mb-8">
                                <h3 class="text-xl font-medium text-gray-700 mb-4">Shared, Reseller, WordPress, WooCommerce, and Node.js Hosting</h3>

                                <div class="mb-4">
                                    <h4 class="text-lg font-medium text-gray-700 mb-2">30-Day Refund Policy</h4>
                                    <p>CloudCareHost offers a full refund on Shared Hosting, Reseller Hosting, WordPress Hosting, WooCommerce Hosting, and Node.js Hosting plans if the service is canceled within the first 30 days of account activation. This refund applies to monthly and annual plans only. Please note that biennial (2-year) and longer-term plans are not eligible for a refund.</p>
                                </div>

                                <div class="mb-4">
                                    <h4 class="text-lg font-medium text-gray-700 mb-2">Annual Plan Refunds</h4>
                                    <p>Yearly plans are eligible for a refund of the current subscription cost if canceled within 30 days of the annual renewal date.</p>
                                    <p class="mt-2 italic text-gray-600">For example, if your annual hosting plan renews on March 1st, you can request a refund anytime before March 31st. After 30 days from the renewal, the payment becomes non-refundable.</p>
                                </div>

                                <div>
                                    <h4 class="text-lg font-medium text-gray-700 mb-2">Multiple Plan Limitations</h4>
                                    <p>Refunds are not available for accounts that have multiple active hosting plans, including Shared Hosting, Reseller Hosting, WordPress Hosting, WooCommerce Hosting, and Node.js Hosting. The refund offer is only valid for the first hosting package purchased on a new account. Additional or subsequent plans are not eligible for a refund, regardless of the contract period.</p>
                                </div>
                            </div>

                            <div class="mb-8">
                                <h3 class="text-xl font-medium text-gray-700 mb-3">VPS Hosting</h3>
                                <p>VPS hosting plans are non-refundable at CloudCareHost. Due to the custom provisioning and dedicated resource allocation involved, refunds cannot be issued for any VPS service.</p>
                            </div>

                            <div>
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Dedicated Hosting</h3>
                                <p>Dedicated hosting plans are non-refundable at CloudCareHost. Due to the resource allocation and setup involved, no refunds can be issued once the service is activated.</p>
                            </div>
                        </section>

                        <!-- Chargebacks & Disputes Section -->
                        <section id="chargebacks" class="pb-6 border-b border-gray-100">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Chargebacks & Disputes</h2>

                            <div class="mb-6">
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Contact Us First</h3>
                                <p>If you believe there's an error in your billing or charges, please make sure to contact us in writing first so we can review and resolve the issue together. We're committed to working with you fairly and respectfully to settle any billing concerns. However, if a payment dispute or chargeback is initiated without prior communication, your service(s) will be suspended immediately until the matter is fully resolved. To reactivate your services, all outstanding payments must be cleared in full.</p>
                            </div>

                            <div class="mb-6">
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Chargeback Fees</h3>
                                <p>In addition to any outstanding balance, a chargeback fee may also apply in cases involving pre-arbitrations or chargebacks. The amount of this fee and when it is applied can vary depending on the payment provider and the specific situation.</p>
                                <p class="mt-3 italic text-gray-600">For example: If a customer files a chargeback for a ₹2,000 hosting plan, and the case enters pre-arbitration, an additional fee of ₹500 may be added to cover processing and administrative costs. This fee will need to be paid along with the original amount before services can be reactivated.</p>
                            </div>

                            <div class="mb-6">
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Account Consequences</h3>
                                <p>If a chargeback is initiated, your CloudCareHost account will be permanently blocked, and you will no longer be allowed to purchase or use our services in the future. Additionally, all data associated with your account, including website content, files, and features, may be deleted without prior notice, resulting in permanent data loss.</p>
                            </div>

                            <div class="mb-6">
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Resolution Requirements</h3>
                                <p>To resume using CloudCareHost services and regain the ability to make payments using your credit card, you must:</p>
                                <ol class="list-decimal pl-6 mt-3 space-y-3">
                                    <li>Provide either proof of payment (such as a payment receipt or bank statement) or a partially obscured photo of your credit card, showing only the first six and last four digits for verification.</li>
                                    <li>Pay all applicable fees in full, including any charges and expenses incurred by CloudCareHost and/or our payment gateway for each chargeback received. This includes fees for services already provided, processing and handling charges, and any costs passed on by the payment provider related to the dispute.</li>
                                </ol>
                            </div>

                            <div class="mb-6">
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Fraudulent Chargebacks</h3>
                                <p>In cases of deliberate payment fraud or criminal chargebacks, the associated service will be permanently terminated with no option for recovery. This policy is strictly enforced and non-negotiable.</p>
                            </div>

                            <div class="mb-6">
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Contact Support First</h3>
                                <p>Before initiating a chargeback or reversing any payment made to CloudCareHost, we strongly recommend contacting our Customer Support team first. This simple step can help prevent unnecessary service interruptions, account suspension, and additional fees related to a mistaken chargeback. Please note that if a chargeback is filed without reaching out to our support team, all previously paid charges for your services must be repaid in full before any account restoration can be considered.</p>
                            </div>

                            <div>
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Our Right to Dispute</h3>
                                <p>We maintain the right to dispute any Chargeback we receive, including by providing evidence of authorization from the User in question and proof that they made use of our Services. We will give the credit card company or financial institution whatever information is needed to prove this.</p>
                            </div>
                        </section>

                        <!-- Refund Processing Section -->
                        <section id="processing">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Refund Processing</h2>
                            <p>All approved refunds will be processed within <strong>five (5) business days</strong> of receiving your notification.</p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Smooth Scroll Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const id = this.getAttribute('href').substring(1);
                    const el = document.getElementById(id);
                    if (!el) return;
                    const y = el.getBoundingClientRect().top + window.pageYOffset - 20;
                    window.scrollTo({ top: y, behavior: 'smooth' });
                });
            });
        });
    </script>
</x-user-layout>

