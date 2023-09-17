<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
    <header>
    <nav>
        <div class="logo">
            <a href="<?php echo e(route('home')); ?>">Cool Tech</a>
        </div>
        <ul class="nav-links">
            <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
            <li><a href="<?php echo e(route('search')); ?>">Search</a></li> <!-- Add this line for the Search page -->
            <li><a href="<?php echo e(route('legal')); ?>">Legal</a></li> <!-- Add this line for the Legal page -->
            <!-- Add links for other pages as needed -->
        </ul>
    </nav>
</header>
    
    <title>Search Results</title>
</head>
<body>
    <h1>Search Results</h1>

    <?php if($searchResults->isEmpty()): ?>
        <p>No results found.</p>
    <?php else: ?>
        <ul>
            <?php $__currentLoopData = $searchResults; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <h2><?php echo e($result->title); ?></h2>
                    <p><?php echo e($result->excerpt); ?></p>
                    <a href="<?php echo e(route('article.show', ['id' => $result->id])); ?>">Read more</a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>
</body>
</html>
<!--Hyperiondev Level 4 "Laravel" pdf Resource--><?php /**PATH C:\Users\Vulindlela Qaba\Dropbox\MU22120006465\4. Advanced Web Development with the MERN Stack\L4T10\Task 10\cooltechproject\resources\views/results.blade.php ENDPATH**/ ?>