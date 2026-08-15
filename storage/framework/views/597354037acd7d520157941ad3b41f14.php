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
            <?php $__currentLoopData = $pricing ?? config('company.pricing', []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="pricing-card <?php echo e($plan['popular'] ? 'popular' : ''); ?>">
                <?php if($plan['popular']): ?>
                <div class="popular-ribbon"><?php echo e($plan['badge']); ?></div>
                <?php endif; ?>

                <h3 class="pricing-plan-name"><?php echo e($plan['name']); ?></h3>
                <p class="pricing-plan-desc"><?php echo e($plan['description']); ?></p>

                <div class="pricing-price-box">
                    <?php if(is_numeric($plan['price_monthly'])): ?>
                    <span class="pricing-currency">$</span>
                    <span class="pricing-amount" data-monthly="<?php echo e(number_format($plan['price_monthly'])); ?>" data-annual="<?php echo e(number_format($plan['price_annual'])); ?>"><?php echo e(number_format($plan['price_monthly'])); ?></span>
                    <span class="pricing-period">/month</span>
                    <?php else: ?>
                    <span class="pricing-amount" style="font-size: 2.2rem;"><?php echo e($plan['price_monthly']); ?></span>
                    <?php endif; ?>
                </div>

                <ul class="pricing-features-list">
                    <?php $__currentLoopData = $plan['features']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="pricing-feature">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span><?php echo e($feat); ?></span>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>

                <a href="#contact" class="btn <?php echo e($plan['popular'] ? 'btn-primary' : 'btn-secondary'); ?> btn-block">
                    <?php echo e($plan['cta']); ?>

                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\chami\OneDrive\Desktop\New folder\resources\views/sections/pricing.blade.php ENDPATH**/ ?>