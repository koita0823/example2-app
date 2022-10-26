<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/post', function () {
    return view('post.myPage');
});  
Route::get('/create', function() {
    return view('post.post');
});
Route::get('/chart', function () {
    return view('post.chart');
});

Route::get('/post', [\App\Http\Controllers\Post\IndexController::class, 'index'])
->name('post.myPage');
Route::middleware('auth')->group(function () {
Route::post('/post', [\App\Http\Controllers\Post\IndexController::class, 'index'])
->name('post.myPage'); 
Route::post('/create', \App\Http\Controllers\Post\CreateController::class)
->name('post.create');
Route::post('/post', \App\Http\Controllers\Post\SearchController::class)
->name('post.search');
Route::post('/like/{postId}', [\App\Http\Controllers\Post\IndexController::class, 'store'])
->name('post.likes');
Route::delete('/unlike/{postId}', [\App\Http\Controllers\Post\IndexController::class, 'destroy'])
->name('post.unlike');
Route::get('/chart', \App\Http\Controllers\Post\ChartController::class)
->name('chart.get');
Route::get('post/update/{postId}', \App\Http\Controllers\Post\Update\IndexController::class)
->name('post.update.index');
Route::put('post/update/{postId}', \App\Http\Controllers\Post\Update\PutController::class)
->name('post.update.put');
Route::delete('post/delete/{postId}', \App\Http\Controllers\Post\DeleteController::class)
->name('post.delete');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
