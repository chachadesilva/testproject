<footer class="footer">
    <div class="container">
        <div class="footer-top-grid">
            <div class="footer-brand">
                <a href="#hero" class="brand-logo" aria-label="NovaCore Home">
                    <div class="logo-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                            <polyline points="2 17 12 22 22 17"></polyline>
                            <polyline points="2 12 12 17 22 12"></polyline>
                        </svg>
                    </div>
                    <span>Nova<span>Core</span></span>
                </a>
                <p><?php echo e($description ?? 'Engineering enterprise-grade cloud platforms, microservices, and AI architectures for high-growth global innovators.'); ?></p>
                <div class="system-status-indicator">
                    <span class="status-dot"></span>
                    <span>All Core Engineering Systems Operational</span>
                </div>
            </div>

            <div class="footer-col">
                <h5>Engineering</h5>
                <ul class="footer-links">
                    <li><a href="#services">Custom Software</a></li>
                    <li><a href="#services">Cloud & DevOps</a></li>
                    <li><a href="#services">AI & Automation</a></li>
                    <li><a href="#services">Mobile Applications</a></li>
                    <li><a href="#services">API Architectures</a></li>
                    <li><a href="#services">Cybersecurity Auditing</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h5>Company</h5>
                <ul class="footer-links">
                    <li><a href="#showcase">Case Studies</a></li>
                    <li><a href="#tech-stack">Technology Stack</a></li>
                    <li><a href="#pricing">Engagement Models</a></li>
                    <li><a href="#testimonials">Client Reviews</a></li>
                    <li><a href="#faqs">Frequently Asked</a></li>
                    <li><a href="#contact">Contact Support</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h5>HQ & Contact</h5>
                <ul class="footer-links">
                    <li><span style="color: var(--text-muted);"><?php echo e($address ?? '750 Innovation Way, San Francisco, CA'); ?></span></li>
                    <li><a href="mailto:<?php echo e($email ?? 'hello@novacore.tech'); ?>"><?php echo e($email ?? 'hello@novacore.tech'); ?></a></li>
                    <li><a href="tel:<?php echo e($phone ?? '+18005550199'); ?>"><?php echo e($phone ?? '+1 (800) 555-0199'); ?></a></li>
                    <li><span style="color: var(--accent-emerald);">Mon - Fri: 24/7 SLA Support</span></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-copyright">
                &copy; <?php echo e(date('Y')); ?> <?php echo e($companyName ?? 'NovaCore Technologies'); ?>. All rights reserved. Built with Laravel 11.
            </div>

            <div class="footer-social-icons">
                <a href="#hero" class="social-icon-btn" aria-label="GitHub">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                    </svg>
                </a>
                <a href="#hero" class="social-icon-btn" aria-label="LinkedIn">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                        <rect x="2" y="9" width="4" height="12"></rect>
                        <circle cx="4" cy="4" r="2"></circle>
                    </svg>
                </a>
                <a href="#hero" class="social-icon-btn" aria-label="Twitter">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH C:\Users\chami\OneDrive\Desktop\New folder\resources\views/partials/footer.blade.php ENDPATH**/ ?>