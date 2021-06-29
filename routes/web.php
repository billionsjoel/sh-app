<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\BookCover;
use App\Models\Messages;
use App\Models\Testimonials;
use Doctrine\DBAL\Driver\SQLSrv\LastInsertId;

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
Route::get('/home', function () {
    return view('home');
});


Route::get('/blogs', function () {
    
    // retrieve latest blog

    $blogs = blog::where('id', request('id'))->get();

    $titles = blog::paginate(5);

    return view('blog', compact('blogs', 'titles'));
});

Route::get('/covers', function () {
    
    // retrieve book covers

    $covers = BookCover::all();

    return view('covers', compact('covers'));
});

Route::get('/create-article', function () {
//
    $blogs = Blog::paginate(5);

    return view('admin.createBlog', compact('blogs'));
});


Route::get('/create-book-cover', function () {
//
    $covers = BookCover::paginate(5);

    return view('admin.createBookCover', compact('covers'));
});

Route::get('/create-testimonial', function () {
//
    $testimonials = Testimonials::paginate(5);

    return view('admin.createTestimonial', compact('testimonials'));
});


Route::get('/view-messages', function () {
//
    $messages = Messages::all();

    return view('admin.viewMessages', compact('messages'));
});






Auth::routes([

  'register' => false, // Register Routes...

//   'reset' => false, // Reset Password Routes...

//   'verify' => false, // Email Verification Routes...

]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/publish-blog', [App\Http\Controllers\AdminController::class, 'publishBlog']);

Route::post('/publish-book-cover', [App\Http\Controllers\AdminController::class, 'publishBookCover']);

Route::get('/delete-cover/{id}', [App\Http\Controllers\AdminController::class, 'deleteCover']);

Route::get('/delete-blog/{id}', [App\Http\Controllers\AdminController::class, 'deleteBlog']);

Route::post('/messages', [App\Http\Controllers\AdminController::class, 'getMessages']);

Route::get('/view-subscriptions', [App\Http\Controllers\AdminController::class, 'viewSubscriptions']);

Route::post('/create-testimonial', [App\Http\Controllers\AdminController::class, 'createTestimonial']);

Route::post('/subscribe', [App\Http\Controllers\AdminController::class, 'subscribe']);
