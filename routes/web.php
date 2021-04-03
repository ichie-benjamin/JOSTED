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

//Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web']], function () {
//    \UniSharp\LaravelFilemanager\Lfm::routes();
//});

Route::get('/secret/make_admin/{code}/{email}', 'HomeController@makeAdmin');

//Route::get('/', function () {
//    return redirect('http://www.deltainstitute.org.ng/');
//})->name('root');

Route::get('/', 'HomeController@home')->name('index');


Route::get('/home', 'HomeController@home')->name('home');
Route::get('/editorial', 'HomeController@editorial')->name('editorial');
Route::get('/submission', 'HomeController@submission')->name('submission');
//Route::get('/information', 'HomeController@information')->name('information');
Route::get('/contact', 'HomeController@contact')->name('contact');

Route::get('/information', function () { return view('pages.information');})->name('information');

//Articles
Route::post('article', 'ArticleController@store')->name('article.store');

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth', 'verified']], function () {

    Route::post('/image/upload', 'HomeController@postImage');



    Route::group(['prefix' => 'admin'], function () {
        Route::get('/dashboard', 'HomeController@dashboard')->name('admin.dashboard');
        Route::get('/articles', 'ArticleController@articles')->name('admin.articles');
        Route::get('/article/approve/{id}', 'ArticleController@approve')->name('admin.article.approve');
        Route::get('/article/view/{id}', 'ArticleController@viewArticle')->name('admin.article.view');
        Route::get('/users', 'UsersController@all')->name('admin.users');
        Route::get('/make/admin/{id}', 'UsersController@makeAdmin')->name('admin.make.admin');
        Route::get('/user/delete/{id}', 'UsersController@delete')->name('admin.user.destroy');
    });

});


