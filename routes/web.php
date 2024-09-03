<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// all get
Route::get('/dashboard', PostController::class .'@welcomepage');
Route::get('/backtopost', PostController::class .'@backtopost');
route::get('/addposts', PostController::class .'@addpost');
route::get('/editpostform/{post}', PostController::class .'@editpostform')->name('posts.editform');
Route::get('/posts', PostController::class .'@showpost' )->name('viewpost');


// Route::get('/allusers', PostController::class .'@')

// all update
Route::put('/update/{post}', PostController::class .'@update')->name('posts.update');


//all post
Route::post('/addpost', PostController::class .'@store')->name('addpost');

// delete
Route::delete('/posts/{post}', PostController::class .'@destroy')->name('posts.destroy');

require __DIR__.'/auth.php';
