<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog;
use App\Models\BookCover;
use App\Models\Messages;
use App\Models\Comments;
use App\Models\Testimonials;
use Carbon\Carbon;

use Doctrine\DBAL\Driver\SQLSrv\LastInsertId;
use phpDocumentor\Reflection\DocBlock\Tags\Covers;

// use Egulias\EmailValidator\Warning\Comment;

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
    //
    $covers = BookCover::all()->take(3);
    $blogs = blog::all()->take(3);
    $now = Carbon::now();

    return view('welcome', compact('covers', 'blogs'));
});

Route::get('/home', function () {
    return view('home');
});

//Route::get('/view-all-blogs', function () {

//    // retrieve all blogs
//    $featured   = blog::where('status', 1)->first();
//    $latest     = blog::where('status', 2)->first();
//    $promoted   = blog::where('status', 3)->first();

//    if($featured && $latest && $promoted){

//    $blogs      = blog::paginate(15);
//    $covers     = BookCover::paginate(15);
//    return view('allBlogs', compact('featured', 'latest', 'promoted', 'blogs', 'covers'));

//    }
//    else {
//         return view('not-found');
//    }

//});

Route::get('/view-all-blogs', [\App\Http\Controllers\BlogController::class, 'viewAllBlogs'])
    ->name('view-all-blogs');

Route::get('/view-all-blogs', function () {
    $result = Blog::whereIn('status', [1, 2, 3])->exists();
    return view($result ? 'allBlogs' : 'not-found', [
        'featured' => Blog::where('status', 1)->first(),
        'latest' => Blog::where('status', 2)->first(),
        'promoted' => Blog::where('status', 3)->first(),
        'blogs' => Blog::paginate(15),
        'covers' => BookCover::paginate(15)
    ]);
})->name('view-all-blogs');


Route::get('/blogs', function () {

    // retrieve latest blog

    $blogs = blog::where('id', request('id'))->get();
    $comments = Comments::where('bid', request('id'))->paginate(10);
    $titles = blog::paginate(5);

    return view('blog', compact('blogs', 'titles', 'comments'));
});

Route::get('/covers', function () {

    // retrieve book covers

    $covers = BookCover::all();

    return view('covers', compact('covers'));
});



Route::post('/subscribe', [App\Http\Controllers\GuestController::class, 'subscribe']);
Route::post('/messages', [App\Http\Controllers\GuestController::class, 'getMessages']);
Route::post('/comments/{id}', [App\Http\Controllers\GuestController::class, 'postComment']);


Auth::routes([

    'register' => true, // Register Routes...

    //   'reset' => false, // Reset Password Routes...

    //   'verify' => false, // Email Verification Routes...

]);

Route::get('/create-article', function () {
    //
    $blogs = Blog::paginate(5);

    return view('admin.createBlog', compact('blogs'));
});


Route::get('/create-book-cover', function () {
    //
    $covers = BookCover::paginate(5);

    return view('admin.createCover', compact('covers'));
});

Route::get('/create-testimonial', function () {
    //
    $testimonials = Testimonials::paginate(5);

    return view('admin.createTestimonial', compact('testimonials'));
});


Route::get('/view-messages', function () {
    //
    $messages = Messages::all();

    $count = Messages::count();

    return view('admin.viewMessages', compact('messages', 'count'));
});

Route::get('/view-comments', function () {
    //
    $comments = Comments::all();

    $count = Comments::count();

    return view('admin.viewComments', compact('comments', 'count'));
})->name('viewComments');

Route::get('/view-edit-blog/{id}', function ($id) {
    //
    $blogs = Blog::where('id', $id)->get();

    return view('admin.editBlog', compact('blogs'));
});

Route::get('/view-edit-book-cover/{id}', function ($id) {
    //
    $bookCovers = BookCover::where('id', $id)->get();

    return view('admin.editCover', compact('bookCovers'));
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/publish-blog', [App\Http\Controllers\AdminController::class, 'publishBlog']);

Route::post('/publish-book-cover', [App\Http\Controllers\AdminController::class, 'publishBookCover']);

Route::get('/delete-cover/{id}', [App\Http\Controllers\AdminController::class, 'deleteCover']);

Route::get('/delete-blog/{id}', [App\Http\Controllers\AdminController::class, 'deleteBlog']);

Route::post('/edit-blog/{id}', [App\Http\Controllers\AdminController::class, 'editBlog']);

Route::post('/edit-book-cover/{id}', [App\Http\Controllers\AdminController::class, 'editBookCover']);



Route::get('/delete-testimonial/{id}', [App\Http\Controllers\AdminController::class, 'deleteTestimony']);
Route::get('/delete-message/{id}', [App\Http\Controllers\AdminController::class, 'deleteMessage']);

Route::get('create-user-account', [App\Http\Controllers\AdminController::class, 'createUserAccount']);
Route::post('create-user-account', [App\Http\Controllers\AdminController::class, 'saveUserAccount'])->name('createUserAccount');

Route::get('/delete-comment/{id}', [App\Http\Controllers\AdminController::class, 'deleteComment']);



Route::get('/view-subscriptions', [App\Http\Controllers\AdminController::class, 'viewSubscriptions']);

Route::post('/create-testimonial', [App\Http\Controllers\AdminController::class, 'createTestimonial']);
