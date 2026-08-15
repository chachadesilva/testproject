<section class="section" id="pricing" style="background: rgba(13, 17, 26, 0.5);">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Transparent Engagement</span>
            <h2 class="section-title">Flexible <span class="text-gradient">Engineering Models</span></h2>
            <p class="section-description">
                Transparent pricing structures tailored for high-speed delivery, sprint agility, and dedicated long-term squads.
            </p>
        </div>

        <div class="pricing-switch-wrapper">
            <span class="pricing-switch-label active" id="labelMonthly">Monthly Billing</span>
            <div class="switch-toggle" id="pricingSwitch" role="button" aria-label="Toggle annual or monthly pricing">
                <div class="switch-thumb"></div>
            </div>
            <span class="pricing-switch-label" id="labelAnnual">Annual Billing</span>
            <span class="save-pill">Save 15%</span>
        </div>

        <div class="pricing-grid">
            @foreach($pricing ?? config('company.pricing', []) as $plan)
            <div class="pricing-card {{ $plan['popular'] ? 'popular' : '' }}">
                @if($plan['popular'])
                <div class="popular-ribbon">{{ $plan['badge'] }}</div>
                @endif

                <h3 class="pricing-plan-name">{{ $plan['name'] }}</h3>
                <p class="pricing-plan-desc">{{ $plan['description'] }}</p>

                <div class="pricing-price-box">
                    @if(is_numeric($plan['price_monthly']))
                    <span class="pricing-currency">$</span>
                    <span class="pricing-amount" data-monthly="{{ number_format($plan['price_monthly']) }}" data-annual="{{ number_format($plan['price_annual']) }}">{{ number_format($plan['price_monthly']) }}</span>
                    <span class="pricing-period">/month</span>
                    @else
                    <span class="pricing-amount" style="font-size: 2.2rem;">{{ $plan['price_monthly'] }}</span>
                    @endif
                </div>

                <ul class="pricing-features-list">
                    @foreach($plan['features'] as $feat)
                    <li class="pricing-feature">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>{{ $feat }}</span>
                    </li>
                    @endforeach
                </ul>

                <a href="#contact" class="btn {{ $plan['popular'] ? 'btn-primary' : 'btn-secondary' }} btn-block">
                    {{ $plan['cta'] }}
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
