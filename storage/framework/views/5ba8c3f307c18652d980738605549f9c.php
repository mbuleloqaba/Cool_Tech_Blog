

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cool Tech - Home</title>

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
            <li><a href="<?php echo e(route('search')); ?>">Search</a></li> <!-- Add this line for the Search page -->
            <li><a href="<?php echo e(route('legal')); ?>">Legal</a></li> <!-- Add this line for the Legal page -->
            
            <!-- Dropdown Menu for Categories -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories</a>
                <ul class="dropdown-menu">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e(route('category.show', ['slug' => $category->slug])); ?>"><?php echo e($category->name); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </li>
        
            <!-- Add links for other pages as needed -->
        </ul>
    </nav>
</header>

<!-- Main Content Section -->
<main>
    <section class="featured-articles">
        <h1>Latest Articles</h1>
        <ul class="article-list">
            <?php $__currentLoopData = $latestArticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <h2><a href="<?php echo e(route('article.show', ['id' => $article->id])); ?>"><?php echo e($article->title); ?></a></h2>
                    <p><?php echo e($article->content); ?></p>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </section>
</main>
</body>
</html>
<!--Hyperiondev Level 4 "Laravel" pdf Resource-->
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Vulindlela Qaba\Dropbox\MU22120006465\4. Advanced Web Development with the MERN Stack\L4T10\Task 10\cooltechproject\resources\views/home.blade.php ENDPATH**/ ?>