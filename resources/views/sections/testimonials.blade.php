<section class="section" id="testimonials">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Client Trust</span>
            <h2 class="section-title">What Our <span class="text-gradient">Partners</span> Say</h2>
            <p class="section-description">
                Hear directly from CTOs, Founders, and Engineering Executives who have transformed their digital capability with NovaCore.
            </p>
        </div>

        <div class="testimonials-grid">
            @foreach($testimonials ?? config('company.testimonials', []) as $item)
            <div class="testimonial-card">
                <div>
                    <div class="testimonial-stars">
                        @for($i = 0; $i < $item['rating']; $i++)
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                        </svg>
                        @endfor
                    </div>
                    <p class="testimonial-quote">"{{ $item['quote'] }}"</p>
                </div>

                <div class="testimonial-author-box">
                    <div class="author-avatar">{{ $item['avatar'] }}</div>
                    <div class="author-meta">
                        <h5>{{ $item['author'] }}</h5>
                        <p>{{ $item['role'] }} &bull; {{ $item['company'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
