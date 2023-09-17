<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <header>
    <nav>
        <div class="logo">
            <a href="{{ route('home') }}">Cool Tech</a>
        </div>
        <ul class="nav-links">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('search') }}">Search</a></li> <!-- Add this line for the Search page -->
            <li><a href="{{ route('legal') }}">Legal</a></li> <!-- Add this line for the Legal page -->
            <!-- Add links for other pages as needed -->
        </ul>
    </nav>
</header>
    
    <title>Search Results</title>
</head>
<body>
    <h1>Search Results</h1>

    @if ($searchResults->isEmpty())
        <p>No results found.</p>
    @else
        <ul>
            @foreach ($searchResults as $result)
                <li>
                    <h2>{{ $result->title }}</h2>
                    <p>{{ $result->excerpt }}</p>
                    <a href="{{ route('article.show', ['id' => $result->id]) }}">Read more</a>
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
<!--Hyperiondev Level 4 "Laravel" pdf Resource-->