
<link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">

<?php $__env->startSection('content'); ?>
    <h1>Category: <?php echo e($category->name); ?></h1>
    <?php if($articles->count() > 0): ?>
        <ul>
            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <h2><?php echo e($article->title); ?></h2>
                    <p><?php echo e($article->content); ?></p>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php else: ?>
        <p>No articles found for this category.</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<!--Hyperiondev Level 4 "Laravel" pdf Resource-->
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Vulindlela Qaba\Dropbox\MU22120006465\4. Advanced Web Development with the MERN Stack\L4T10\Task 10\cooltechproject\resources\views/category.blade.php ENDPATH**/ ?>