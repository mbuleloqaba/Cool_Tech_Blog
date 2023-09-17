<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <!-- Add your meta tags, styles, and other head content here -->
</head>
<body>
    <!-- Include the cookie notice component -->
    <?php echo $__env->make('components.cookie-notice', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <!-- Main content section -->
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Footer Section -->
    <footer>
        <div class="copyright">
            &copy; <?php echo e(date('Y')); ?> Cool Tech
        </div>
    </footer>
</body>
</html>
<?php /**PATH C:\Users\Vulindlela Qaba\Documents\Hyperion Dev coure content\Assignments 4\Task 10\cooltechproject\resources\views/app.blade.php ENDPATH**/ ?>