<section class="section" id="stats">
    <div class="container">
        <div class="stats-container">
            <div class="stats-grid">
                @foreach($stats ?? config('company.stats', []) as $stat)
                <div class="stat-box">
                    <div class="stat-number" data-target="{{ $stat['number'] }}" data-suffix="{{ $stat['suffix'] }}">
                        {{ $stat['value'] }}
                    </div>
                    <div class="stat-label">{{ $stat['label'] }}</div>
                    <div class="stat-desc">{{ $stat['desc'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
