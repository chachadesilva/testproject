<section class="section" id="showcase">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Proven Track Record</span>
            <h2 class="section-title">Selected <span class="text-gradient">Case Studies</span> & Deployments</h2>
            <p class="section-description">
                Explore how NovaCore partnered with innovative companies to build high-scale cloud platforms, financial engines, and AI telemetry pipelines.
            </p>
        </div>

        <div class="showcase-grid">
            @foreach($showcase ?? config('company.showcase', []) as $item)
            <div class="showcase-card">
                <div class="showcase-header-bar">
                    <span class="showcase-category">{{ $item['category'] }}</span>
                    <span class="showcase-client">{{ $item['client'] }}</span>
                </div>
                <div class="showcase-body">
                    <h3 class="showcase-title">{{ $item['title'] }}</h3>
                    <p class="showcase-summary">{{ $item['summary'] }}</p>

                    <div class="showcase-metrics">
                        @foreach($item['metrics'] as $metric)
                        <div class="metric-item">
                            <div class="metric-value">{{ $metric['value'] }}</div>
                            <div class="metric-label">{{ $metric['label'] }}</div>
                        </div>
                        @endforeach
                    </div>

                    <div class="showcase-tags">
                        @foreach($item['tags'] as $tag)
                        <span class="showcase-tag">{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
