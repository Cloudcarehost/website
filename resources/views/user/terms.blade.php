<x-user-layout>
    <section class="py-24 md:py-32 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-4 gap-8">
                <!-- Sidebar / Mini TOC -->
                <aside class="hidden lg:block">
                    <div class="sticky top-24 bg-white border rounded-lg p-4 shadow-sm">
                        <h3 class="text-lg font-semibold mb-3">On this page</h3>
                        <ul class="text-sm space-y-2 text-gray-600">
                            <li><a href="#introduction" class="hover:text-indigo-600">Introduction</a></li>
                            <li><a href="#eligibility" class="hover:text-indigo-600">Eligibility & Acceptance</a></li>
                            <li><a href="#transfers" class="hover:text-indigo-600">Transfers & Migration</a></li>
                            <li><a href="#acceptable-use" class="hover:text-indigo-600">Acceptable Use</a></li>
                            <li><a href="#abuse-policy" class="hover:text-indigo-600">Abuse Policy</a></li>
                            <li><a href="#antispam" class="hover:text-indigo-600">Anti-Spam Policy</a></li>
                            <li><a href="#backup" class="hover:text-indigo-600">Backup Policy</a></li>
                            <li><a href="#third-party" class="hover:text-indigo-600">Third-Party Services</a></li>
                            <li><a href="#domain-registration" class="hover:text-indigo-600">Domain Registration</a></li>
                            <li><a href="#uptime" class="hover:text-indigo-600">Service Uptime</a></li>
                            <li><a href="#changes" class="hover:text-indigo-600">Changes to Terms</a></li>
                            <li><a href="#contact" class="hover:text-indigo-600">Contact & Notices</a></li>
                        </ul>
                    </div>
                </aside>

                <!-- Main content -->
                <div class="lg:col-span-3 bg-white rounded-xl shadow-md p-8">
                    <div class="text-center mb-12">
                        <h1 id="introduction" class="text-4xl md:text-5xl font-bold font-montserrat text-gray-900 mb-4">Terms of Service</h1>
                        <p class="text-sm text-gray-500 mb-6">Last updated: {{ now()->format('F j, Y') }}</p>
                        <p class="text-lg text-gray-700">Welcome to CloudCareHost. These Terms of Service ("Terms") describe your rights and responsibilities when using our hosting, domain, and related services. If you do not agree, please discontinue use immediately.</p>
                    </div>

                    <div class="prose max-w-none text-gray-700 space-y-10">
                        <!-- Introduction Section -->
                        <section id="introduction" class="pb-6 border-b border-gray-100">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Introduction</h2>
                            <p class="mb-4">Welcome to CloudCareHost! These Terms of Service ("Terms") outline the rules, responsibilities, and expectations for all users of our hosting solutions and related services. By signing up for an account, purchasing a plan, or otherwise using our website and services, you acknowledge that you have read, understood, and agreed to be bound by these Terms, along with our Privacy Policy and any other policies referenced herein.</p>
                            <p class="mb-4">CloudCareHost ("we," "our," or "us") provides hosting, domain registration, and digital infrastructure services designed to support individuals, businesses, and organizations of all sizes. These Terms are intended to ensure a safe, secure, and reliable environment for all customers while protecting the integrity of our network and services.</p>
                            <p>If you do not agree to any part of these Terms, you must discontinue use of our services immediately. Please take the time to read this document carefully, as it explains important legal rights, limitations, and obligations related to your use of CloudCareHost.</p>
                        </section>

                        <!-- Eligibility & Acceptance Section -->
                        <section id="eligibility" class="pb-6 border-b border-gray-100">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Eligibility & Acceptance</h2>
                            <p class="mb-4">By registering for or using any service provided by CloudCareHost, you confirm that you are at least eighteen (18) years of age or otherwise legally able to form a binding contract under applicable law. Our services are not intended for, and may not be used by, anyone under the age of 18. If you are accessing or using our services on behalf of a company, organization, or another party, you represent and warrant that you are authorized to bind that entity to this Agreement, and all references to "you" or "your" shall refer to that entity.</p>

                            <div class="mb-4">
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Account Responsibilities</h3>
                                <ul class="list-disc pl-6 space-y-2">
                                    <li>Keep account information accurate and current (including a valid email).</li>
                                    <li>You are responsible for all activity on your account — protect your credentials.</li>
                                    <li>We may request verification (ID, payment proof) for security reasons.</li>
                                </ul>
                            </div>

                            <p>You agree to be fully responsible for all actions taken through your account and must maintain the confidentiality of your login credentials. Any use of our services that violates these Terms, applicable laws, or regulations is strictly prohibited. By using CloudCareHost, you acknowledge and accept these Terms in full, whether the actions are performed by you, someone on your behalf, or anyone using your account.</p>
                        </section>

                        <!-- Transfers & Migration Section -->
                        <section id="transfers" class="pb-6 border-b border-gray-100">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Transfers & Migration</h2>
                            <p class="mb-4">At CloudCareHost, we're happy to help you move your website from your current hosting provider to our platform. We offer a complimentary migration service for new customers within 30 days of signing up, and our team will make every reasonable effort to transfer your website files, databases, and configurations. However, because every hosting environment is different and some providers use incompatible or proprietary formats, we cannot guarantee a flawless or uninterrupted migration in every case.</p>

                            <div class="mb-4">
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Migration Details</h3>
                                <ul class="list-disc pl-6 space-y-2">
                                    <li>Complex or late migrations may incur fees.</li>
                                    <li>Always keep your own backups — you are responsible for your data.</li>
                                    <li>We assist with DNS, email, and domain transfers, but third-party dependencies may increase time required.</li>
                                </ul>
                            </div>

                            <p>While we will do our best to assist with email accounts, DNS records, and domain transfers, these services depend on third-party configurations and may require additional time or manual intervention. For large sites, complex migrations, or requests made after the initial 30-day window, migration fees may apply.</p>
                            <p class="mt-4">It is your responsibility to back up all data before, during, and after the migration process. CloudCareHost is not liable for lost or missing files, data corruption, or downtime that may occur during a transfer to or from our platform. For unmanaged hosting or special setups that require manual migration, charges may also apply. Please contact our Transfers Team if you have specific requirements, or need a custom quote for advanced migrations.</p>
                        </section>

                        <!-- Acceptable Use Section -->
                        <section id="acceptable-use" class="pb-6 border-b border-gray-100">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Acceptable Use Policy</h2>
                            <p class="mb-4">When you use CloudCareHost's website and services, you agree to follow these Terms of Service, our Privacy Policy, and all other policies or service agreements that apply to your account. You are also required to comply with all applicable local, state, national, and international laws and regulations while using our services. By using our platform, you agree to act responsibly, ethically, and in good faith at all times.</p>

                            <div class="mb-4">
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Prohibited Activities</h3>
                                <p class="mb-3">You are strictly prohibited from engaging in any activity that:</p>
                                <ul class="list-disc pl-6 space-y-2">
                                    <li>Is illegal, promotes illegal activity, or violates any applicable law or regulation.</li>
                                    <li>Involves child exploitation, pornography, human trafficking, or sexually explicit content.</li>
                                    <li>Encourages terrorism, violence, hate speech, or harm to individuals, animals, property, or communities.</li>
                                    <li>Engages in spamming, phishing, hacking, or other malicious activities including port scanning, spoofing, brute-force attacks, crypto-mining, or malware distribution.</li>
                                    <li>Infringes on intellectual property rights, trade secrets, or violates confidentiality agreements.</li>
                                    <li>Interferes with or disrupts the security, functionality, or performance of CloudCareHost's servers, websites, or services.</li>
                                    <li>Hosts or distributes pirated software, warez, illegal downloads, counterfeit products, gambling operations, or scams (including Ponzi schemes, high-yield investment programs, or lottery fraud).</li>
                                    <li>Shares or promotes misleading, false, or defamatory information about CloudCareHost, its employees, or its services.</li>
                                </ul>
                            </div>

                            <div class="mb-4">
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Additional Restrictions</h3>
                                <p class="mb-3">You are also not allowed to:</p>
                                <ul class="list-disc pl-6 space-y-2">
                                    <li>Collect or share any personal or non-public data of another user without their written consent.</li>
                                    <li>Copy, modify, or redistribute content, data, or services from CloudCareHost without prior written permission.</li>
                                    <li>Circumvent, disable, or interfere with any security features or access restrictions built into our services.</li>
                                    <li>Resell or commercially offer CloudCareHost services or technology without authorization.</li>
                                    <li>Use our platform to support or promote banned organizations or hate groups.</li>
                                </ul>
                            </div>

                            <p>For security purposes, CloudCareHost may require government-issued identification or business documents for verification. We may also contact you via phone or email regarding your account, and in certain cases, calls may be recorded for security and legal purposes. By providing your phone number, you consent to receiving service-related communications and, if permitted by law, promotional messages (standard rates may apply).</p>
                            <p class="mt-4">We reserve the right to suspend, restrict, or terminate any account at our discretion if we determine that a user has engaged in fraudulent, abusive, harmful, or illegal activity. Users found violating these policies may face permanent bans, and we will cooperate fully with law enforcement authorities where required.</p>
                            <p class="mt-4">By using CloudCareHost, you acknowledge that these rules are in place to protect our customers, maintain a safe and secure hosting environment, and ensure that all users can rely on our services with confidence.</p>
                        </section>

                        <!-- Abuse Policy Section -->
                        <section id="abuse-policy" class="pb-6 border-b border-gray-100">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Acceptable Use & Abuse Policy</h2>
                            <p class="mb-4">At CloudCareHost, we take abuse reports very seriously to ensure a safe, secure, and stable hosting environment for all customers. Abuse includes, but is not limited to, malicious activity, illegal content, resource overuse, and violations of intellectual property rights. We actively investigate all complaints and reserve the right to suspend or terminate services immediately if we determine there is a critical threat or ongoing abuse.</p>

                            <div class="mb-4">
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Examples of Abuse</h3>
                                <ul class="list-disc pl-6 space-y-2">
                                    <li><strong>Network Attacks:</strong> Any attempt to compromise, damage, or disrupt a CloudCareHost server or network, or that of another company or individual. This includes port scanning, IP range scanning, vulnerability scanning, and other forms of intrusion attempts.</li>
                                    <li><strong>DDoS Activity:</strong> Distributed Denial of Service (DDoS) attacks against CloudCareHost or originating from our servers are strictly prohibited and may result in immediate account termination.</li>
                                    <li><strong>Illegal or Malicious Content:</strong> Hosting or distributing phishing pages, malware, ransomware, spyware, scams, or any harmful software or content.</li>
                                    <li><strong>Copyright or Trademark Violations:</strong> Storing or sharing pirated software, movies, music, digital media, or infringing on another's intellectual property. Verified copyright complaints may result in suspension or removal of content.</li>
                                    <li><strong>Excessive Resource Usage:</strong> Sites or applications consuming excessive CPU, RAM, bandwidth, or other server resources in a way that impacts other customers may be subject to suspension, throttling, or a required plan upgrade.</li>
                                    <li><strong>Defamation or Harassment:</strong> Hosting defamatory content, leaking personal information, or using our services to harm or harass others is strictly prohibited.</li>
                                    <li><strong>Respectful Communication:</strong> Abusive, harassing, or disrespectful behavior towards CloudCareHost staff may result in immediate termination without refund.</li>
                                </ul>
                            </div>

                            <p>We reserve the right to disable or suspend services without notice for severe cases, including phishing, malware distribution, or child exploitation content. For less severe violations, a warning and a timeframe for corrective action may be provided. Customers are responsible for ensuring all hosted content and activities comply with local, state, and international laws.</p>
                            <p class="mt-4">CloudCareHost also fully cooperates with law enforcement authorities, regulatory agencies, and ICANN policies when necessary. Failure to correct abuse-related issues or respond to abuse notifications may result in permanent suspension of your domain or hosting service.</p>
                        </section>

                        <!-- Anti-Spam Policy Section -->
                        <section id="antispam" class="pb-6 border-b border-gray-100">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Anti-Spam Policy</h2>
                            <p class="mb-4">At CloudCareHost, we maintain a strict zero-tolerance policy against spam to ensure a safe and reliable hosting environment for all customers. By using our services, you agree to comply with this policy and all applicable anti-spam laws, including but not limited to the CAN-SPAM Act (USA), GDPR (EU), and relevant local regulations. Any violation of this policy may result in immediate account suspension or termination, financial penalties, and legal action.</p>

                            <div class="mb-6">
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Definition of Spam</h3>
                                <p class="mb-3">Spam includes but is not limited to:</p>
                                <ul class="list-disc pl-6 space-y-2">
                                    <li>Sending unsolicited bulk emails or commercial messages (UCE/UBE) to recipients who have not explicitly opted in.</li>
                                    <li>Using purchased or rented email lists, "safe lists," or lead databases without verified permission.</li>
                                    <li>Sending fraudulent, misleading, or deceptive messages.</li>
                                    <li>Hosting or promoting websites that are advertised through spam ("spamvertised sites").</li>
                                    <li>Operating open relays, anonymous mailers, or email servers that allow spam distribution.</li>
                                </ul>
                            </div>

                            <div class="mb-6">
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Prohibited Activities</h3>
                                <p class="mb-3">You may not use CloudCareHost services to:</p>
                                <ul class="list-disc pl-6 space-y-2">
                                    <li>Send unsolicited email campaigns, mass marketing messages, or promotional emails without prior consent from recipients.</li>
                                    <li>Send content that contains malware, phishing links, or viruses.</li>
                                    <li>Engage in email spoofing, forged headers, or deceptive sending practices.</li>
                                    <li>Send messages promoting restricted industries without prior approval, including pornography, escort services, gambling, "get-rich-quick" schemes, online trading/forex, multi-level marketing, or high-risk pharmaceuticals.</li>
                                    <li>Send bulk messages from email addresses you do not own or have permission to use.</li>
                                    <li>Send mailbombs, harmful attachments, or content designed to reduce server performance for others.</li>
                                </ul>
                            </div>

                            <div class="mb-6">
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Sending Limits</h3>
                                <p class="mb-3">To maintain service quality and prevent abuse:</p>
                                <ul class="list-disc pl-6 space-y-2">
                                    <li><strong>Shared Hosting:</strong> Up to ~100 outgoing emails/hour per domain</li>
                                    <li><strong>Reseller:</strong> ~25 outgoing emails/hour per domain</li>
                                    <li><strong>VPS/Cloud:</strong> ~1,000 outgoing emails/hour per domain</li>
                                    <li><strong>Dedicated:</strong> ~2,000 outgoing emails/hour per domain</li>
                                </ul>
                                <p class="mt-3">These limits help prevent server blacklisting and maintain optimal delivery rates. Exceeding these limits may result in temporary throttling or suspension.</p>
                            </div>

                            <div class="mb-6">
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Enforcement & Penalties</h3>
                                <ul class="list-disc pl-6 space-y-2">
                                    <li>Immediate suspension for spam; cleanup fees may apply (starting at $250 USD).</li>
                                    <li>Repeat or criminal violations may lead to permanent termination and law enforcement involvement.</li>
                                    <li>Report spam to <a href="mailto:abuse@cloudcarehost.com" class="text-indigo-600">abuse@cloudcarehost.com</a> with full headers.</li>
                                </ul>
                            </div>

                            <div class="mb-6">
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Customer Responsibilities</h3>
                                <p class="mb-3">To ensure compliance, you agree to:</p>
                                <ul class="list-disc pl-6 space-y-2">
                                    <li>Only send messages to recipients who have explicitly opted in or have an established business relationship with you.</li>
                                    <li>Provide clear unsubscribe mechanisms in all marketing emails and honor opt-out requests promptly.</li>
                                    <li>Maintain valid contact information in your account at all times.</li>
                                    <li>Regularly monitor your email practices and security to prevent unauthorized access to your account.</li>
                                </ul>
                            </div>

                            <div class="mb-6">
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Reporting Spam Violations</h3>
                                <p>If you receive spam originating from a CloudCareHost server or suspect a violation of this policy, please forward the complete email headers and message details to abuse@cloudcarehost.com. Our Abuse Team will investigate and respond promptly, usually within 10 business days.</p>
                            </div>

                            <div>
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Compliance & Amendments</h3>
                                <p>This Anti-Spam Policy is part of our Terms of Service and may be updated at any time. Continued use of CloudCareHost services after updates indicates your acceptance of the revised terms. Customers are responsible for staying compliant with all relevant anti-spam regulations in their jurisdiction.</p>
                            </div>
                        </section>

                        <!-- Backup Policy Section -->
                        <section id="backup" class="pb-6 border-b border-gray-100">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Backup Policy</h2>
                            <p class="mb-4">At CloudCareHost, we understand the importance of data security and offer backup services as a courtesy to help safeguard your website content. However, the responsibility for maintaining and protecting your data ultimately lies with you, the customer. By using our services, you agree to this policy and accept that CloudCareHost is not liable for data loss under any circumstances.</p>

                            <div class="mb-6">
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Backup Frequency & Availability</h3>
                                <ul class="list-disc pl-6 space-y-2">
                                    <li><strong>Shared Hosting & Reseller Hosting:</strong> We perform daily backups for these plans and retain copies for the last 14 days. Backups include website files and databases but do not include email accounts, media-heavy files, or non-standard server configurations.</li>
                                    <li><strong>VPS, Cloud, and Dedicated Servers:</strong> Backups are not automatically included for these services. We strongly recommend purchasing a paid backup solution for enhanced data security.</li>
                                    <li><strong>Storage Limits:</strong> Accounts larger than 20GB of data or containing over 100,000 inodes may be excluded from automatic backups due to resource limitations. Hosting accounts cannot be used for general file storage or as a backup repository; all backup files generated should be promptly downloaded and removed.</li>
                                </ul>
                            </div>

                            <div class="mb-6">
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Customer Responsibilities</h3>
                                <ul class="list-disc pl-6 space-y-2">
                                    <li>You are solely responsible for the integrity of your data and should always keep offsite backups of all files, databases, and emails.</li>
                                    <li>Backups created via cPanel or other tools should be downloaded and deleted to avoid automatic removal during server maintenance.</li>
                                    <li>Customers should not rely solely on CloudCareHost's courtesy backups for disaster recovery.</li>
                                </ul>
                            </div>

                            <div class="mb-6">
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Backup Limitations & Exclusions</h3>
                                <ul class="list-disc pl-6 space-y-2">
                                    <li>Backups are offered as a complimentary service, with no guarantee of availability or completeness.</li>
                                    <li>Backup services may be modified, suspended, or discontinued at our discretion without prior notice.</li>
                                    <li>Data corruption, failed backups, or large account size may prevent full restoration.</li>
                                    <li>Backups do not cover emails, third-party integrations, or unsupported file structures.</li>
                                </ul>
                            </div>

                            <div class="mb-6">
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Data Restoration</h3>
                                <ul class="list-disc pl-6 space-y-2">
                                    <li>Our support team will assist with data restores on a best-effort basis.</li>
                                    <li>Restores may incur service fees, particularly for large accounts or frequent requests.</li>
                                    <li>Restoration timelines are not guaranteed and depend on data availability and server resources.</li>
                                </ul>
                            </div>

                            <div>
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Liability Disclaimer</h3>
                                <p>CloudCareHost provides backup services as a courtesy but cannot guarantee recovery in all cases. We are not responsible for data loss, corruption, or downtime caused by hardware failures, software issues, user errors, or malicious activities.</p>
                            </div>
                        </section>

                        <!-- Third-Party Services Section -->
                        <section id="third-party" class="pb-6 border-b border-gray-100">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Third-Party Products and Services</h2>
                            <p class="mb-4">At CloudCareHost, we may offer products, services, hardware, software, or equipment provided by third-party companies ("Third-Party Services"). Some of these may be included as part of your hosting plan, while others may be optional add-ons or special offers. Please note that all Third-Party Services are subject to their own terms and conditions, set by the respective providers. We strongly encourage customers to review these terms, privacy policies, and service details before using or purchasing any third-party product.</p>

                            <div class="mb-6">
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Use of Third-Party Services</h3>
                                <ul class="list-disc pl-6 space-y-2">
                                    <li>CloudCareHost may act as a reseller or licensor for certain third-party tools, integrations, or services.</li>
                                    <li>These products are offered as-is and are designed to work in connection with our hosting services.</li>
                                    <li>You may only use these products or services as permitted under our Terms of Service and the provider's terms.</li>
                                    <li>You are not allowed to copy, modify, reverse-engineer, resell, or tamper with third-party software or hardware in any way.</li>
                                </ul>
                            </div>

                            <div class="mb-6">
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Responsibility and Limitations</h3>
                                <ul class="list-disc pl-6 space-y-2">
                                    <li>CloudCareHost is not the manufacturer of third-party products and is not responsible for defects, errors, or service disruptions caused by these external products.</li>
                                    <li>We cannot guarantee that future updates to our services or their products will always remain fully compatible.</li>
                                    <li>If you experience an issue with a third-party product, your rights and remedies are limited to those offered by the third-party provider.</li>
                                    <li>Any warranties, guarantees, or support for these products come directly from the third-party provider, not CloudCareHost.</li>
                                </ul>
                            </div>

                            <div class="mb-6">
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Third-Party Offers and Promotions</h3>
                                <ul class="list-disc pl-6 space-y-2">
                                    <li>Occasionally, we may provide discounts, special offers, or promotions on third-party products.</li>
                                    <li>These offers are subject to additional restrictions and may change or expire without notice.</li>
                                    <li>All purchases or transactions with third parties are at your own risk, and CloudCareHost is not responsible for pricing accuracy, fulfillment, or quality of these services.</li>
                                </ul>
                            </div>

                            <div>
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Third-Party Websites and Content</h3>
                                <ul class="list-disc pl-6 space-y-2">
                                    <li>Our services may include links to third-party websites or display content created by other companies ("Third-Party Content").</li>
                                    <li>CloudCareHost does not monitor, control, or verify these websites or their content.</li>
                                    <li>If you choose to visit these websites or use their content, you do so at your own discretion and risk.</li>
                                    <li>We encourage you to review the privacy policies and terms of any third-party website you visit.</li>
                                </ul>
                                <p class="mt-3">In summary, CloudCareHost makes it easy for you to access valuable third-party tools and services, but we do not own, control, or guarantee them. Any issues, warranties, or obligations regarding these products rest with their original provider.</p>
                            </div>
                        </section>

                        <!-- Domain Registration Section -->
                        <section id="domain-registration" class="pb-6 border-b border-gray-100">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Domain Registration</h2>
                            <p class="mb-4">When you register a domain through CloudCareHost, you gain full ownership and management rights. However, domain names are registered on a first-come, first-served basis, and we cannot guarantee that your preferred name will be available at the time of registration. Every domain you purchase will always be registered in your name, and you are responsible for keeping your WHOIS contact details accurate and up to date. Incorrect or unverifiable contact information could lead to your domain being suspended or taken offline. For smooth operations, we may change the registrar of your domain at our discretion and without prior notice.</p>

                            <div class="mb-6">
                                <h3 class="text-xl font-medium text-gray-700 mb-3">ICANN Compliance</h3>
                                <p>In compliance with ICANN's Transfer Policy, you authorize CloudCareHost to act as your Designated Agent when necessary to approve updates to your registrant information. Please note that all domain registration and renewal fees are final and non-refundable once completed.</p>
                            </div>

                            <div class="mb-6">
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Domain Name Rules & Trademark Protection</h3>
                                <p>We take trademark protection seriously. You may not register a domain name that infringes on an established brand or trademark, especially if your business offers similar goods or services. For example, domains like amazonoffershub.com or teslacreditloan.in would be considered trademark violations and may result in suspension and legal action. Always choose a unique domain that reflects your brand and complies with intellectual property laws.</p>
                            </div>

                            <div>
                                <h3 class="text-xl font-medium text-gray-700 mb-3">Renewal Policy</h3>
                                <p>We'll send renewal notifications 30 days before your domain expires to help you avoid interruptions. However, timely renewal is your responsibility, and CloudCareHost cannot be held liable for expired or lost domains due to missed payments. Once a domain is renewed, it is non-refundable.</p>
                            </div>
                        </section>

                        <!-- Service Uptime Section -->
                        <section id="uptime" class="pb-6 border-b border-gray-100">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Service Uptime</h2>
                            <p class="mb-4">At CloudCareHost, we are dedicated to delivering 99.9% uptime, ensuring your website stays online, reliable, and accessible around the clock. Our hosting is built on enterprise-grade servers, global data centers, and 24/7 monitoring, offering exceptional speed, security, and stability. With redundant systems, DDoS protection, and proactive maintenance, we work tirelessly to prevent downtime and give your business a strong foundation to grow.</p>
                            <p>While we strive for uninterrupted service, some factors are beyond our control and are not counted toward our uptime guarantee. This includes scheduled maintenance, software and hardware updates, DNS propagation, and external network issues. Rare events such as natural disasters, government actions, power outages, telecom disruptions, or strikes may also temporarily impact service availability.</p>
                            <p class="mt-4">Our promise is simple: CloudCareHost provides a resilient and high-performing hosting environment backed by advanced infrastructure and expert support, so you can enjoy peace of mind knowing your website is always ready for your customers.</p>
                        </section>

                        <!-- Changes to Terms Section -->
                        <section id="changes" class="pb-6 border-b border-gray-100">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Changes to These Terms</h2>
                            <p class="mb-4">We're always working to make CloudCareHost better, and that means our Terms of Service may need updates from time to time. If we make changes, we'll post the updated version on our website so you always know what's new. For significant changes that could impact you, we'll do our best to notify you in advance by email or through your client dashboard.</p>
                            <p class="mb-4">By continuing to use our services after the updated Terms are published, you're letting us know that you accept and agree to the changes. If you ever feel uncomfortable with an update, you can review your account settings or contact our support team for help.</p>
                            <p>In short: we keep our policies transparent, simple, and fair so you can use our services with confidence.</p>
                        </section>

                        <!-- Contact Section -->
                        <section id="contact">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Contact & Notices</h2>
                            <p class="mb-4">If you have questions about these Terms, please contact our support team:</p>

                            <address class="not-italic text-gray-600 mb-6">
                                CloudCareHost<br>
                                <a href="mailto:support@cloudcarehost.com" class="text-indigo-600">support@cloudcarehost.com</a><br>
                                +1 (800) 123-4567
                            </address>

                            <p>We may contact you via email, phone, or your account dashboard regarding service updates, policy changes, or account matters. It is your responsibility to keep your contact information current to ensure you receive these important communications.</p>
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

