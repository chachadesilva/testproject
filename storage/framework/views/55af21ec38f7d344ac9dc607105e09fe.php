<section class="section" id="contact">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Let's Build Together</span>
            <h2 class="section-title">Schedule an <span class="text-gradient">Architectural Consultation</span></h2>
            <p class="section-description">
                Share your software objectives, scope, or timeline. Our senior technology architects will analyze your requirements and provide an actionable proposal within 24 hours.
            </p>
        </div>

        <div class="contact-grid">
            <div class="contact-info-panel">
                <div class="contact-card-box">
                    <h3 style="font-family: var(--font-heading); font-size: 1.3rem; margin-bottom: 0.5rem;">Why Companies Choose NovaCore</h3>
                    
                    <div class="contact-detail-row">
                        <div class="contact-detail-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        </div>
                        <div class="contact-detail-text">
                            <h5>Direct Senior Engineers</h5>
                            <p>Work directly with seasoned full-stack architects, not junior account managers.</p>
                        </div>
                    </div>

                    <div class="contact-detail-row">
                        <div class="contact-detail-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                        </div>
                        <div class="contact-detail-text">
                            <h5>100% IP & Code Ownership</h5>
                            <p>Full repository transfer, documentation, and automated CI/CD pipeline handover.</p>
                        </div>
                    </div>

                    <div class="contact-detail-row">
                        <div class="contact-detail-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        </div>
                        <div class="contact-detail-text">
                            <h5>Rapid 24-Hour Turnaround</h5>
                            <p>Receive comprehensive architectural feedback and estimation estimates swiftly.</p>
                        </div>
                    </div>
                </div>

                <div class="contact-card-box">
                    <div class="contact-detail-row">
                        <div class="contact-detail-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        </div>
                        <div class="contact-detail-text">
                            <h5>Direct Inquiries</h5>
                            <a href="mailto:<?php echo e($email ?? 'hello@novacore.tech'); ?>"><?php echo e($email ?? 'hello@novacore.tech'); ?></a>
                        </div>
                    </div>

                    <div class="contact-detail-row">
                        <div class="contact-detail-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        </div>
                        <div class="contact-detail-text">
                            <h5>Direct Call / WhatsApp</h5>
                            <a href="tel:<?php echo e($phone ?? '+18005550199'); ?>"><?php echo e($phone ?? '+1 (800) 555-0199'); ?></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Card -->
            <div class="contact-form-card">
                <div id="formAlert" style="display: none;"></div>

                <?php if(session('success')): ?>
                <div class="alert alert-success">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                    <span><?php echo e(session('success')); ?></span>
                </div>
                <?php endif; ?>

                <?php if(session('error')): ?>
                <div class="alert alert-error">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                    <span><?php echo e(session('error')); ?></span>
                </div>
                <?php endif; ?>

                <form id="contactForm" action="<?php echo e(route('contact.submit') ?? '/contact'); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label" for="inputName">Your Name *</label>
                            <input type="text" id="inputName" name="name" class="form-control" placeholder="e.g. Alex Morgan" required value="<?php echo e(old('name')); ?>">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="inputEmail">Work Email *</label>
                            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="alex@company.com" required value="<?php echo e(old('email')); ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="inputCompany">Company / Organization</label>
                        <input type="text" id="inputCompany" name="company" class="form-control" placeholder="e.g. Nexus Scale Labs" value="<?php echo e(old('company')); ?>">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Primary Service Interest *</label>
                        <div class="chip-grid">
                            <label class="chip-option">
                                <input type="radio" name="service" value="custom-software" checked>
                                <span class="chip-label">Custom Software</span>
                            </label>
                            <label class="chip-option">
                                <input type="radio" name="service" value="cloud-devops">
                                <span class="chip-label">Cloud & DevOps</span>
                            </label>
                            <label class="chip-option">
                                <input type="radio" name="service" value="ai-ml">
                                <span class="chip-label">AI & Automation</span>
                            </label>
                            <label class="chip-option">
                                <input type="radio" name="service" value="mobile-apps">
                                <span class="chip-label">Mobile Apps</span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Estimated Project Budget</label>
                        <div class="chip-grid">
                            <label class="chip-option">
                                <input type="radio" name="budget" value="< $10k">
                                <span class="chip-label">&lt; $10k</span>
                            </label>
                            <label class="chip-option">
                                <input type="radio" name="budget" value="$10k - $30k" checked>
                                <span class="chip-label">$10k - $30k</span>
                            </label>
                            <label class="chip-option">
                                <input type="radio" name="budget" value="$30k - $80k">
                                <span class="chip-label">$30k - $80k</span>
                            </label>
                            <label class="chip-option">
                                <input type="radio" name="budget" value="$80k+">
                                <span class="chip-label">$80k+</span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="inputMessage">Project Overview & Timeline *</label>
                        <textarea id="inputMessage" name="message" class="form-control" rows="4" placeholder="Describe what you want to build, tech stack preferences, timeline expectations, or current bottlenecks..." required><?php echo e(old('message')); ?></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        <span>Send Project Inquiry</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="22" y1="2" x2="11" y2="13"></line>
                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\chami\OneDrive\Desktop\New folder\resources\views/sections/contact.blade.php ENDPATH**/ ?>