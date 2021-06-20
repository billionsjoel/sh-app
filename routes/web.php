<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
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
Route::get('/blogs', function () {
    
    // retrieve latest blog

    $blogs = blog::where('id', request('id'))->get();
    $titles = blog::latest()->take(10)->get();


    return view('blog', compact('blogs', 'titles'));
});

Route::get('/create-article', function () {
    return view('admin.createBlog');
});
Route::get('/home', function () {
    return view('home');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/publish', [App\Http\Controllers\AdminController::class, 'publishBlog']);


