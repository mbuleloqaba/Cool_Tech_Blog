@extends('app')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

@section('content')
    <h1>Category: {{ $category->name }}</h1>
    @if ($articles->count() > 0)
        <ul>
            @foreach ($articles as $article)
                <li>
                    <h2>{{ $article->title }}</h2>
                    <p>{{ $article->content }}</p>
                </li>
            @endforeach
        </ul>
    @else
        <p>No articles found for this category.</p>
    @endif
@endsection
<!--Hyperiondev Level 4 "Laravel" pdf Resource-->