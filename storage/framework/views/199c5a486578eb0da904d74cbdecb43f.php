<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cool Tech - Article</title>

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
        <section class="article-details">
            <?php if(isset($article)): ?>
                <h1><?php echo e($article->title); ?></h1>
                <p><?php echo e($article->content); ?></p>
                <p>Category: <?php echo e($article->category_name); ?></p>
                <p>Tags: <a href="<?php echo e(route('tag.show', ['slug' => $article->tag_slug])); ?>"><?php echo e($article->tag_name); ?></a></p>
                <!-- Display tags if available -->
              
               
                <p>Creation Date: <?php echo e($article->created_at); ?></p>
            <?php else: ?>
                <p>Article not found.</p>
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
<?php /**PATH C:\Users\Vulindlela Qaba\Documents\Hyperion Dev coure content\Assignments 4\Task 10\cooltechproject\resources\views/article.blade.php ENDPATH**/ ?>