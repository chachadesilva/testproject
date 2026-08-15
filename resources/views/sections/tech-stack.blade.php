<section class="section" id="tech-stack" style="background: rgba(13, 17, 26, 0.4);">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Modern Ecosystem</span>
            <h2 class="section-title">Engineered with the <span class="text-gradient">Best-in-Class</span> Stack</h2>
            <p class="section-description">
                We select modern, resilient languages and frameworks that offer exceptional speed, robust developer ergonomics, and rock-solid production stability.
            </p>
        </div>

        <div class="tech-tabs-nav">
            <button class="tech-tab-btn active" data-tab="all">All Technologies</button>
            <button class="tech-tab-btn" data-tab="Backend">Backend & APIs</button>
            <button class="tech-tab-btn" data-tab="Frontend">Frontend & UI</button>
            <button class="tech-tab-btn" data-tab="Cloud & AI">Cloud, AI & DevOps</button>
        </div>

        <div class="tech-grid">
            @foreach($techStacks ?? config('company.tech_stacks', []) as $category => $items)
                @foreach($items as $tech)
                <div class="tech-card" data-category="{{ $category }}">
                    <div class="tech-info">
                        <h4>{{ $tech['name'] }}</h4>
                        <p>{{ $category }} &bull; {{ $tech['category'] }}</p>
                    </div>
                    <span class="tech-tag" style="border-left: 3px solid {{ $tech['color'] ?? '#06B6D4' }};">{{ $tech['tag'] }}</span>
                </div>
                @endforeach
            @endforeach
        </div>
    </div>
</section>
