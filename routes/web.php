<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NiceController as MyNiceController;
use App\Http\Controllers\HomeController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Auth::routes();

// Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');


//resource コントローラー
Route::resource('/post' , 'PostController' );

// いいねをつける
Route::get('/nice/{post}', ['as' => 'nice', 'uses' => 'App\Http\Controllers\NiceController@nice']);

// いいねを表示するページ
Route::get('/nice-show/{post}', ['as' => 'nice.show', 'uses' => 'App\Http\Controllers\NiceController@index']);

//いいねを外す
Route::get('/unnice/{post}', ['as' => 'unnice', 'uses' => 'App\Http\Controllers\NiceController@unnice']);








Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::put('/home/store', [App\Http\Controllers\HomeController::class, 'store'])->name('home.store');

Route::put('/home/{id}/edit', [App\Http\Controllers\HomeController::class, 'edit'])->name('home.edit');

Route::delete('/destroy/{id}', [App\Http\Controllers\HomeController::class, 'destroy'])->name('home.destroy');



// routes/web.php

Route::get('/clear-entries', [HomeController::class, 'clearEntries']);

// Route::get('/create', function () {
//     return view('posts.create');
// });

// Route::resource('posts',PostController::class);

// Post Page

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');

Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');

Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');

Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');



//commenting
Route::get('/comments/create/{post_id}',[CommentController::class, 'create'])->name('comments.create');

Route::post('/comments',[CommentController::class, 'store'])->name('comments.store');

Route::get('/comments/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');

Route::put('/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');

// routes/web.php

Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');



//Products
Route::get('/products', [ProductController::class, 'index'])->name('products.index');