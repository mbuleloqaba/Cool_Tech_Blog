<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB; // Import the DB facade

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // Retrieve the latest 5 articles from the database
    $latestArticles = DB::table('articles')
        ->orderBy('created_at', 'desc')
        ->take(5)
        ->get();

    // Pass the article data to the homepage view
    return view('home', ['latestArticles' => $latestArticles]);
})->name('home');

Route::get('/article/{id}', function ($id) {
    // Retrieve the article and related category and tags
    // You can use SQL joins to fetch the necessary data
    $article = DB::table('articles')
        ->select('articles.*', 'categories.name AS category_name', 'tags.name AS tag_name', 'tags.slug AS tag_slug')
        ->join('categories', 'articles.category_id', '=', 'categories.id')
        ->leftJoin('article_tag', 'articles.id', '=', 'article_tag.article_id')
        ->leftJoin('tags', 'article_tag.tag_id', '=', 'tags.id')
        ->where('articles.id', $id)
        ->first();

    

    // Pass the article data to the article view
    return view('article', ['article' => $article]);
})->name('article.show');

Route::get('/cookie-policy', function () {
    return view('cookie-policy');
})->name('cookie-policy');


Route::get('/legal', function () {
    return view('legal');
})->name('legal');

Route::get('/search', function () {
    return view('search');
})->name('search');

Route::get('/search/results', function () {
    // Get search parameters from the URL
    $articleId = request('article_id');
    $category = request('category');
    $tag = request('tag');

    // Build and execute the query based on the search parameters
    $query = DB::table('articles');

    if (!empty($articleId)) {
        // Perform an exact match query for Article ID
        $query->where('id', $articleId);
    }

    if (!empty($category)) {
        // Perform an exact match query for Category
        $query->where('category_id', $category);
    }

    if (!empty($tag)) {
        // Perform an exact match query for Tag
        $query->where('article_tag_id', $tag);
    }

    $searchResults = $query->get();

    // Pass the search results to the view
    return view('results', ['searchResults' => $searchResults]);
})->name('results');

Route::get('/', function () {
    // Retrieve the latest 5 articles from the database
    $latestArticles = DB::table('articles')
        ->orderBy('created_at', 'desc')
        ->take(5)
        ->get();

    // Retrieve categories from the database
    $categories = DB::table('categories')->get();

    // Pass the article data and categories to the homepage view
    return view('home', ['latestArticles' => $latestArticles, 'categories' => $categories]);
})->name('home');

Route::get('/category/{slug}', function ($slug) {
    // Retrieve the category based on the slug
    $category = DB::table('categories')->where('slug', $slug)->first();

    // Check if the category exists
    if ($category) {
        // Retrieve articles for the category
        $articles = DB::table('articles')
            ->join('categories', 'articles.category_id', '=', 'categories.id')
            ->where('categories.slug', $slug)
            ->get();

        // Pass the category and articles to the view
        return view('category', ['category' => $category, 'articles' => $articles]);

    } else {
        // Handle gracefully if the category doesn't exist
        abort(404);
    }
})->name('category.show');

Route::get('/tag/{slug}', function ($slug) {
    // Retrieve the tag based on the slug
    $tag = DB::table('tags')->where('slug', $slug)->first();

    // Check if the tag exists
    if ($tag) {
        // Retrieve articles for the tag
        $articles = DB::table('articles')
            ->join('article_tag', 'articles.id', '=', 'article_tag.article_id')
            ->where('article_tag.tag_id', $tag->id)
            ->get();

        // Pass the tag and articles to the view
        return view('tag', ['tag' => $tag, 'articles' => $articles]);
    } else {
        // Handle gracefully if the tag doesn't exist
        abort(404);
    }
})->name('tag.show');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

//Hyperiondev Level 4 "Laravel" pdf Resource