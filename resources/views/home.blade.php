@extends('app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cool Tech - Home</title>

    <!-- Link to your CSS file -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
   <!-- Header Section -->
<header>
    <nav>
        <div class="logo">
            <a href="{{ route('home') }}">Cool Tech</a>
        </div>
        <ul class="nav-links">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('search') }}">Search</a></li> <!-- Add this line for the Search page -->
            <li><a href="{{ route('legal') }}">Legal</a></li> <!-- Add this line for the Legal page -->
            
            <!-- Dropdown Menu for Categories -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories</a>
                <ul class="dropdown-menu">
                    @foreach ($categories as $category)
                        <li><a href="{{ route('category.show', ['slug' => $category->slug]) }}">{{ $category->name }}</a></li>
                    @endforeach
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
            @foreach ($latestArticles as $article)
                <li>
                    <h2><a href="{{ route('article.show', ['id' => $article->id]) }}">{{ $article->title }}</a></h2>
                    <p>{{ $article->content }}</p>
                </li>
            @endforeach
        </ul>
    </section>
</main>
</body>
</html>
<!--Hyperiondev Level 4 "Laravel" pdf Resource-->