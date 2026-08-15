# NovaCore Technologies - Enterprise Laravel Landing Page

A modern, high-converting, responsive landing page for a cutting-edge software engineering & AI solutions company built with **Laravel 11**, **Blade Components**, **Vanilla CSS**, and **JavaScript**.

---

## ✨ Features & Architecture

- **Glassmorphic Modern UI**: Curated dark theme (`#07090E`), neon gradients (Cyan, Blue, Violet), ambient animated lighting orbs, and frosted glass cards (`backdrop-filter: blur(16px)`).
- **Pure Blade Modular Components**:
  - `resources/views/layouts/app.blade.php`: Base semantic layout with SEO meta tags and Google Fonts.
  - `resources/views/partials/header.blade.php`: Sticky glass navbar with mobile slide-in drawer.
  - `resources/views/partials/footer.blade.php`: Comprehensive sitemap, status indicator, and social channels.
  - `resources/views/sections/hero.blade.php`: High-impact headline, live status badges, and interactive IDE terminal preview.
  - `resources/views/sections/partners.blade.php`: Ecosystem tech partners grid.
  - `resources/views/sections/services.blade.php`: 6 specialized engineering disciplines with feature checklists.
  - `resources/views/sections/tech-stack.blade.php`: Interactive category switcher (Backend, Frontend, Cloud & AI).
  - `resources/views/sections/showcase.blade.php`: Case studies with KPI metrics chips.
  - `resources/views/sections/stats.blade.php`: Animated counter statistics on scroll.
  - `resources/views/sections/testimonials.blade.php`: Client endorsements and verified ratings.
  - `resources/views/sections/pricing.blade.php`: Transparent engagement models with Monthly / Annual toggle (15% discount).
  - `resources/views/sections/faq.blade.php`: Interactive expand/collapse accordion.
  - `resources/views/sections/contact.blade.php`: Project estimation inquiry form with dynamic radio chips and feedback banner.
- **Backend Architecture**:
  - `app/Http/Controllers/LandingController.php`: Loads dynamic configurations from `config/company.php`.
  - `app/Http/Controllers/ContactController.php`: Handles project inquiries, validation, JSON responses, and database logging.
  - `app/Models/ContactMessage.php`: Eloquent model for contact submissions.
  - `database/migrations/2026_01_01_000000_create_contact_messages_table.php`: SQLite / MySQL schema.
  - `routes/web.php` & `routes/api.php`: Clean, organized route endpoints.

---

## 🚀 Getting Started

### 1. Instant Browser Preview
You can directly open `public/preview.html` in any web browser to explore the design, animations, and interactive features right away.

### 2. Running with Laravel & PHP
If you have PHP and Composer installed on your machine:

```bash
# 1. Install dependencies (if needed)
composer install

# 2. Generate Application Key
php artisan key:generate

# 3. Run database migrations
php artisan migrate

# 4. Start local development server
php artisan serve
```
Then visit **`http://127.0.0.1:8000`** in your browser!

---

## 📁 File Structure

```
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── LandingController.php
│   │       └── ContactController.php
│   └── Models/
│       └── ContactMessage.php
├── config/
│   ├── app.php
│   └── company.php
├── database/
│   └── migrations/
│       └── 2026_01_01_000000_create_contact_messages_table.php
├── public/
│   ├── css/
│   │   └── landing.css
│   ├── js/
│   │   └── landing.js
│   ├── index.php
│   └── preview.html
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       ├── partials/
│       │   ├── header.blade.php
│       │   └── footer.blade.php
│       ├── sections/
│       │   ├── hero.blade.php
│       │   ├── partners.blade.php
│       │   ├── services.blade.php
│       │   ├── tech-stack.blade.php
│       │   ├── showcase.blade.php
│       │   ├── stats.blade.php
│       │   ├── testimonials.blade.php
│       │   ├── pricing.blade.php
│       │   ├── faq.blade.php
│       │   └── contact.blade.php
│       └── landing.blade.php
├── routes/
│   ├── web.php
│   └── api.php
├── .env
├── .env.example
├── artisan
└── composer.json
```
