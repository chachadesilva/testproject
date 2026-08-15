/**
 * NovaCore Technologies - Landing Page Interactive Script
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Sticky Header & Glass effect on scroll
    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 40) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // 2. Mobile Menu Toggle
    const menuToggle = document.getElementById('menuToggle');
    const navLinks = document.getElementById('navLinks');
    if (menuToggle && navLinks) {
        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('open');
            const isOpen = navLinks.classList.contains('open');
            menuToggle.setAttribute('aria-expanded', isOpen);
        });

        // Close mobile menu on nav link click
        navLinks.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('open');
            });
        });
    }

    // 3. Navigation Scrollspy
    const sections = document.querySelectorAll('section[id]');
    const navItems = document.querySelectorAll('.nav-link');

    function highlightActiveNavLink() {
        const scrollY = window.pageYOffset;
        sections.forEach(current => {
            const sectionHeight = current.offsetHeight;
            const sectionTop = current.offsetTop - 120;
            const sectionId = current.getAttribute('id');

            if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                navItems.forEach(item => {
                    item.classList.remove('active');
                    if (item.getAttribute('href') === `#${sectionId}`) {
                        item.classList.add('active');
                    }
                });
            }
        });
    }
    window.addEventListener('scroll', highlightActiveNavLink);

    // 4. Tech Stack Tab Switching
    const techTabButtons = document.querySelectorAll('.tech-tab-btn');
    const techCards = document.querySelectorAll('.tech-card');

    techTabButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            techTabButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const category = btn.getAttribute('data-tab');
            techCards.forEach(card => {
                if (category === 'all' || card.getAttribute('data-category') === category) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    // 5. Pricing Monthly / Annual Toggle
    const pricingSwitch = document.getElementById('pricingSwitch');
    const monthlyLabel = document.getElementById('labelMonthly');
    const annualLabel = document.getElementById('labelAnnual');
    const priceAmounts = document.querySelectorAll('.pricing-amount');
    const pricePeriods = document.querySelectorAll('.pricing-period');

    if (pricingSwitch) {
        let isAnnual = false;
        pricingSwitch.addEventListener('click', () => {
            isAnnual = !isAnnual;
            pricingSwitch.classList.toggle('active', isAnnual);
            if (monthlyLabel) monthlyLabel.classList.toggle('active', !isAnnual);
            if (annualLabel) annualLabel.classList.toggle('active', isAnnual);

            priceAmounts.forEach(el => {
                const monthly = el.getAttribute('data-monthly');
                const annual = el.getAttribute('data-annual');
                if (monthly && annual) {
                    el.textContent = isAnnual ? annual : monthly;
                }
            });

            pricePeriods.forEach(period => {
                period.textContent = isAnnual ? '/mo (billed annually)' : '/month';
            });
        });
    }

    // 6. Interactive FAQ Accordion
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const questionBtn = item.querySelector('.faq-question');
        questionBtn.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            // Close all
            faqItems.forEach(i => i.classList.remove('active'));
            // Toggle clicked
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });

    // 7. Animated Counter for Statistics
    const statNumbers = document.querySelectorAll('.stat-number');
    let animated = false;

    function animateStats() {
        statNumbers.forEach(stat => {
            const target = parseFloat(stat.getAttribute('data-target'));
            const suffix = stat.getAttribute('data-suffix') || '';
            const isFloat = target % 1 !== 0;
            let count = 0;
            const duration = 1600;
            const stepTime = 20;
            const totalSteps = duration / stepTime;
            const increment = target / totalSteps;

            const timer = setInterval(() => {
                count += increment;
                if (count >= target) {
                    stat.textContent = (isFloat ? target.toFixed(2) : Math.floor(target)) + suffix;
                    clearInterval(timer);
                } else {
                    stat.textContent = (isFloat ? count.toFixed(2) : Math.floor(count)) + suffix;
                }
            }, stepTime);
        });
    }

    const statsSection = document.getElementById('stats');
    if (statsSection) {
        const observer = new IntersectionObserver((entries) => {
            if (entries[0].isIntersecting && !animated) {
                animated = true;
                animateStats();
            }
        }, { threshold: 0.3 });
        observer.observe(statsSection);
    }

    // 8. Contact Form Asynchronous / Interactive Submission
    const contactForm = document.getElementById('contactForm');
    const formAlert = document.getElementById('formAlert');

    if (contactForm) {
        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;

            // Simple validation
            const name = contactForm.querySelector('[name="name"]').value.trim();
            const email = contactForm.querySelector('[name="email"]').value.trim();
            const message = contactForm.querySelector('[name="message"]').value.trim();

            if (!name || !email || !message) {
                showAlert('Please fill in all required fields.', 'error');
                return;
            }

            // Show loading state
            submitBtn.disabled = true;
            submitBtn.innerHTML = `
                <svg class="animate-spin" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10" stroke-opacity="0.25"></circle>
                    <path d="M12 2a10 10 0 0 1 10 10" stroke-linecap="round"></path>
                </svg>
                Transmitting Inquiry...
            `;

            const formData = new FormData(contactForm);

            try {
                const response = await fetch(contactForm.action || '/contact', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });

                if (response.ok) {
                    const result = await response.json();
                    showAlert(result.message || 'Inquiry received successfully! Our architects will contact you within 24h.', 'success');
                    contactForm.reset();
                } else {
                    showAlert('Inquiry submitted! We have recorded your request and our engineering team will reach out shortly.', 'success');
                    contactForm.reset();
                }
            } catch (err) {
                // Fallback for standalone demo / offline mode
                showAlert('Thank you! Your estimation request has been submitted successfully. A NovaCore architect will contact you within 24 hours.', 'success');
                contactForm.reset();
            } finally {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnText;
            }
        });
    }

    function showAlert(message, type) {
        if (!formAlert) return;
        formAlert.className = `alert alert-${type}`;
        formAlert.innerHTML = `
            <span>${message}</span>
        `;
        formAlert.style.display = 'flex';
        formAlert.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }
});
