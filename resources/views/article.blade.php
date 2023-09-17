<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cool Tech - Article</title>

    <!-- Link to CSS file -->
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
                <!-- Add links for other pages as needed -->
            </ul>
        </nav>
    </header>

    <!-- Main Content Section -->
    <main>
        <section class="article-details">
            @if (isset($article))
                <h1>{{ $article->title }}</h1>
                <p>{{ $article->content }}</p>
                <p>Category: {{ $article->category_name }}</p>
                <p>Tags: <a href="{{ route('tag.show', ['slug' => $article->tag_slug]) }}">{{ $article->tag_name }}</a></p>
                <!-- Display tags if available -->
              
               
                <p>Creation Date: {{ $article->created_at }}</p>
            @else
                <p>Article not found.</p>
            @endif
        </section>
    </main>

    <!-- Footer Section -->
    <footer>
        <div class="copyright">
            &copy; {{ date('Y') }} Cool Tech
        </div>
    </footer>
</body>
</html>
<!--Hyperiondev Level 4 "Laravel" pdf Resource-->