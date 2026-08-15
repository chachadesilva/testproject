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
            <?php $__currentLoopData = $showcase ?? config('company.showcase', []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="showcase-card">
                <div class="showcase-header-bar">
                    <span class="showcase-category"><?php echo e($item['category']); ?></span>
                    <span class="showcase-client"><?php echo e($item['client']); ?></span>
                </div>
                <div class="showcase-body">
                    <h3 class="showcase-title"><?php echo e($item['title']); ?></h3>
                    <p class="showcase-summary"><?php echo e($item['summary']); ?></p>

                    <div class="showcase-metrics">
                        <?php $__currentLoopData = $item['metrics']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $metric): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="metric-item">
                            <div class="metric-value"><?php echo e($metric['value']); ?></div>
                            <div class="metric-label"><?php echo e($metric['label']); ?></div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <div class="showcase-tags">
                        <?php $__currentLoopData = $item['tags']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span class="showcase-tag"><?php echo e($tag); ?></span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\chami\OneDrive\Desktop\New folder\resources\views/sections/showcase.blade.php ENDPATH**/ ?>