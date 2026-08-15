<section class="section" id="faqs">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Clarity & Confidence</span>
            <h2 class="section-title">Frequently Asked <span class="text-gradient">Questions</span></h2>
            <p class="section-description">
                Everything you need to know about partnering with NovaCore for your enterprise software and cloud projects.
            </p>
        </div>

        <div class="faq-container">
            @foreach($faqs ?? config('company.faqs', []) as $index => $faq)
            <div class="faq-item {{ $index === 0 ? 'active' : '' }}">
                <button class="faq-question" type="button" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}">
                    <span>{{ $faq['q'] }}</span>
                    <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                <div class="faq-answer">
                    <p>{{ $faq['a'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
