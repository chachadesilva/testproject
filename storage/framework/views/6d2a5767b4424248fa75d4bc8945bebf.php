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
            <?php $__currentLoopData = $techStacks ?? config('company.tech_stacks', []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category => $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tech): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="tech-card" data-category="<?php echo e($category); ?>">
                    <div class="tech-info">
                        <h4><?php echo e($tech['name']); ?></h4>
                        <p><?php echo e($category); ?> &bull; <?php echo e($tech['category']); ?></p>
                    </div>
                    <span class="tech-tag" style="border-left: 3px solid <?php echo e($tech['color'] ?? '#06B6D4'); ?>;"><?php echo e($tech['tag']); ?></span>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\chami\OneDrive\Desktop\New folder\resources\views/sections/tech-stack.blade.php ENDPATH**/ ?>