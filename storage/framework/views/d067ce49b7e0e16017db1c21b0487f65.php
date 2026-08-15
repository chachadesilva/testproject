<section class="section" id="stats">
    <div class="container">
        <div class="stats-container">
            <div class="stats-grid">
                <?php $__currentLoopData = $stats ?? config('company.stats', []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="stat-box">
                    <div class="stat-number" data-target="<?php echo e($stat['number']); ?>" data-suffix="<?php echo e($stat['suffix']); ?>">
                        <?php echo e($stat['value']); ?>

                    </div>
                    <div class="stat-label"><?php echo e($stat['label']); ?></div>
                    <div class="stat-desc"><?php echo e($stat['desc']); ?></div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\chami\OneDrive\Desktop\New folder\resources\views/sections/stats.blade.php ENDPATH**/ ?>