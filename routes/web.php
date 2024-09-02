<?php
use App\Models\post;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/posts',function () {
    $posts = post::all();
    return view('posts' , compact('posts'));
});

Route::get('/dashboard',function () {
    return view('welcome');
});

route::get('/addposts',function () {
    return view('addposts');
} );

Route::post('/addpost', function () {
    $post = new post();
    $post->title = request('title');
    $post->content = request('content');
    $post->save(); 
    return redirect('/posts');
})->name('addpost');
require __DIR__.'/auth.php';
