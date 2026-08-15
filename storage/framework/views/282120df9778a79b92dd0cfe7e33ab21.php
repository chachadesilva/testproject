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
            <?php $__currentLoopData = $faqs ?? config('company.faqs', []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="faq-item <?php echo e($index === 0 ? 'active' : ''); ?>">
                <button class="faq-question" type="button" aria-expanded="<?php echo e($index === 0 ? 'true' : 'false'); ?>">
                    <span><?php echo e($faq['q']); ?></span>
                    <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                <div class="faq-answer">
                    <p><?php echo e($faq['a']); ?></p>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\chami\OneDrive\Desktop\New folder\resources\views/sections/faq.blade.php ENDPATH**/ ?>