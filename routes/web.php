<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Models\Article;


Route::get('/', function () {
    $articles = Article::latest()->take(6)->get();
    return view('welcome', compact('articles'));
})->name('homepage');


Route::get('/articles', [ArticleController::class, 'index'])->name('article.index');



Route::get('/article/{article}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/category/{category}', [ArticleController::class, 'byCategory'])->name('article.byCategory');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {

    
    Route::get('/create', [ArticleController::class, 'create'])->name('article.create');
    Route::post('/store', [ArticleController::class, 'store'])->name('article.store');

    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';