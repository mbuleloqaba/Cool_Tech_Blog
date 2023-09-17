@extends('app')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">


@section('content')
    <!-- Main Content Section -->
    <main>
        <section class="tag-articles">
            <h1>Articles Tagged with {{ $tag->name }}</h1>
            <ul class="article-list">
                @foreach ($articles as $article)
                    <li>
                        <h2><a href="{{ route('article.show', ['id' => $article->id]) }}">{{ $article->title }}</a></h2>
                        <p>{{ $article->content }}</p>
                    </li>
                @endforeach
            </ul>
        </section>
    </main>
@endsection
<!--Hyperiondev Level 4 "Laravel" pdf Resource-->