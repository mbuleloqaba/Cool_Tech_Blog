<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cool Tech - Search Results</title>

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
                <!-- Add links for other pages as needed -->
            </ul>
        </nav>
    </header>

    <!-- Main Content Section -->
    <main>
        <section class="search-form">
            <h1>Search Articles</h1>
            <form action="{{ route('results') }}" method="GET">
                <input type="text" name="article_id" placeholder="Search by Article ID">
                <input type="text" name="category" placeholder="Search by Category">
                <input type="text" name="tag" placeholder="Search by Tag">
                <button type="submit">Search</button>
            </form>
        </section>

        <!-- Display search results here if any -->
        <section class="search-results">
            <!-- Display search results for Article ID -->
            @if(isset($articleResults) && count($articleResults) > 0)
                <h2>Search Results for Article ID:</h2>
                @foreach ($articleResults as $result)
                    <div class="search-result">
                        <h2>{{ $result->title }}</h2>
                        <p>{{ substr($result->content, 0, 200) }}...</p>
                        <a href="{{ route('article.show', ['id' => $result->id]) }}">Read more</a>
                    </div>
                @endforeach
            @endif

            <!-- Display search results for Category -->
            @if(isset($categoryResults) && count($categoryResults) > 0)
                <h2>Search Results for Category:</h2>
                @foreach ($categoryResults as $result)
                    <div class="search-result">
                        <h2>{{ $result->title }}</h2>
                        <p>{{ substr($result->content, 0, 200) }}...</p>
                        <a href="{{ route('article.show', ['id' => $result->id]) }}">Read more</a>
                    </div>
                @endforeach
            @endif

            <!-- Display search results for Tag -->
            @if(isset($tagResults) && count($tagResults) > 0)
                <h2>Search Results for Tag:</h2>
                @foreach ($tagResults as $result)
                    <div class="search-result">
                        <h2>{{ $result->title }}</h2>
                        <p>{{ substr($result->content, 0, 200) }}...</p>
                        <a href="{{ route('article.show', ['id' => $result->id]) }}">Read more</a>
                    </div>
                @endforeach
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