<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cool Tech - Search Results</title>

    <!-- Link to your CSS file -->
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
</head>
<body>
    <!-- Header Section -->
    <header>
        <nav>
            <div class="logo">
                <a href="<?php echo e(route('home')); ?>">Cool Tech</a>
            </div>
            <ul class="nav-links">
                <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                <!-- Add links for other pages as needed -->
            </ul>
        </nav>
    </header>

    <!-- Main Content Section -->
    <main>
        <section class="search-form">
            <h1>Search Articles</h1>
            <form action="<?php echo e(route('results')); ?>" method="GET">
                <input type="text" name="article_id" placeholder="Search by Article ID">
                <input type="text" name="category" placeholder="Search by Category">
                <input type="text" name="tag" placeholder="Search by Tag">
                <button type="submit">Search</button>
            </form>
        </section>

        <!-- Display search results here if any -->
        <section class="search-results">
            <!-- Display search results for Article ID -->
            <?php if(isset($articleResults) && count($articleResults) > 0): ?>
                <h2>Search Results for Article ID:</h2>
                <?php $__currentLoopData = $articleResults; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="search-result">
                        <h2><?php echo e($result->title); ?></h2>
                        <p><?php echo e(substr($result->content, 0, 200)); ?>...</p>
                        <a href="<?php echo e(route('article.show', ['id' => $result->id])); ?>">Read more</a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>

            <!-- Display search results for Category -->
            <?php if(isset($categoryResults) && count($categoryResults) > 0): ?>
                <h2>Search Results for Category:</h2>
                <?php $__currentLoopData = $categoryResults; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="search-result">
                        <h2><?php echo e($result->title); ?></h2>
                        <p><?php echo e(substr($result->content, 0, 200)); ?>...</p>
                        <a href="<?php echo e(route('article.show', ['id' => $result->id])); ?>">Read more</a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>

            <!-- Display search results for Tag -->
            <?php if(isset($tagResults) && count($tagResults) > 0): ?>
                <h2>Search Results for Tag:</h2>
                <?php $__currentLoopData = $tagResults; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="search-result">
                        <h2><?php echo e($result->title); ?></h2>
                        <p><?php echo e(substr($result->content, 0, 200)); ?>...</p>
                        <a href="<?php echo e(route('article.show', ['id' => $result->id])); ?>">Read more</a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </section>
    </main>

    <!-- Footer Section -->
    <footer>
        <div class="copyright">
            &copy; <?php echo e(date('Y')); ?> Cool Tech
        </div>
    </footer>
</body>
</html>
<?php /**PATH C:\Users\Vulindlela Qaba\Documents\Hyperion Dev coure content\Assignments 4\Task 10\cooltechproject\resources\views/search.blade.php ENDPATH**/ ?>