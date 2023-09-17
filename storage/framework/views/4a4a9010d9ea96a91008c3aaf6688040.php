
<link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">


<?php $__env->startSection('content'); ?>
    <!-- Main Content Section -->
    <main>
        <section class="tag-articles">
            <h1>Articles Tagged with <?php echo e($tag->name); ?></h1>
            <ul class="article-list">
                <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <h2><a href="<?php echo e(route('article.show', ['id' => $article->id])); ?>"><?php echo e($article->title); ?></a></h2>
                        <p><?php echo e($article->content); ?></p>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </section>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Vulindlela Qaba\Documents\Hyperion Dev coure content\Assignments 4\Task 10\cooltechproject\resources\views/tag.blade.php ENDPATH**/ ?>