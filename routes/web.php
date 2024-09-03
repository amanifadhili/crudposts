<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::get('/allusers', UserController::class .'@show_all_user')->name('show_all_user');
Route::get('/adduser', UserController::class .'@adduserform');
Route::get('/edituser/{user}', UserController::class .'@edituserform')->name('users.editform');




// Route::get('/allusers', PostController::class .'@')

// all update
Route::put('/update/{post}', PostController::class .'@update')->name('posts.update');
Route::put('/update/{user}', PostController::class .'@update')->name('user.update');


//all post
Route::post('/addpost', PostController::class .'@store')->name('addpost');
Route::post('/adduser', UserController::class .'@adduser')->name('adduser');

// delete
Route::delete('/posts/{post}', PostController::class .'@destroy')->name('posts.destroy');
Route::delete('/user/{user}',UserController::class .'@destroy')->name('users.destroy');

require __DIR__.'/auth.php';
