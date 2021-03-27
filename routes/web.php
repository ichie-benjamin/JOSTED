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
Route::get('/contact', 'HomeController@contact')->name('contact');

//Articles
Route::post('article', 'ArticleController@store')->name('article.store');

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth', 'verified']], function () {

    Route::get('/countries/{id}/states', 'LocationsController@states')->name('ajax.states');
    Route::get('/states/{id}/cities', 'LocationsController@cities')->name('ajax.cities');
    Route::get('/state_name/{name}/lgas', 'LocationsController@lgasByStateName')->name('ajax.lgas');

    Route::post('/image/upload', 'HomeController@postImage');




    Route::get('/admission/start/{type}', 'AdmissionController@start')->name('admission.start');
    Route::get('/admission/continue', 'AdmissionController@continue')->name('admission.continue');
    Route::get('/admission/print', 'AdmissionController@print')->name('admission.finish');
    Route::post('admission', 'AdmissionController@store')->name('admission.stores');
    Route::post('/admission/update', 'AdmissionController@update')->middleware('auth');
    Route::post('/admission/post_primaries', 'AdmissionController@storePostPrimary')->middleware('auth');
    Route::post('/admission/post_primaries/delete', 'AdmissionController@deletePostPrimary')->middleware('auth');
    Route::post('/admission/certifications', 'AdmissionController@storeCert')->middleware('auth');


    Route::get('/download_pdf/{id}', 'AdmissionController@downloadPDF')->name('download_pdf');


    Route::group(['prefix' => 'admin'], function () {
        Route::get('/dashboard', 'HomeController@dashboard')->name('admin.dashboard');
        Route::get('/applicants', 'AdmissionController@applicants')->name('admin.applicants');
        Route::get('/articles', 'ArticleController@articles')->name('admin.articles');
        Route::get('/article/approve/{id}', 'ArticleController@approve')->name('admin.article.approve');
        Route::get('/article/view/{id}', 'ArticleController@viewArticle')->name('admin.article.view');
        Route::get('/users', 'UsersController@all')->name('admin.users');
        Route::get('/make/admin/{id}', 'UsersController@makeAdmin')->name('admin.make.admin');
        Route::get('/user/delete/{id}', 'UsersController@delete')->name('admin.user.destroy');
        Route::get('/printslip/{id}', 'AdmissionController@printSlip')->name('admin.printslip');

        Route::get('applicant/{applicant}/delete','AdmissionController@destroy')->name('admin.applicant.destroy');

    });

});


