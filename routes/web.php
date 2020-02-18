<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('welcome');
});*/
Auth::routes();

Route::get('/','ThemainController@index');
Route::get('/about-us','ThemainController@about-us');
Route::get('/tags','ThemainController@tags');
Route::get('/contact','ThemainController@contact');
Route::get('/articles','ThemainController@articles');
//Route::get('/singleArticle','ThemainController@singleArticle')->name('singleArticle');
Route::get('/card','ThemainController@card');

Route::get('/login',function (){
    return view('auth.login');
})->name('login');

Route::get('/register',function (){
    return view('auth.register');
})->name('register');

/*
Route::get('/login','');
Route::get('/signup','');
*/

Auth::routes();

Route::group(['middleware'=>'admin'],function (){


    Route::get('/dashboard',function(){
        return view('dashboard.Index');
    })->name('/dashboard');
    Route::resource('dashboard/users', 'AdminUserController');
    Route::resource('dashboard/media','AdminMediaController');
    Route::resource('dashboard/post','AdminPostController');
    Route::resource('dashboard/comment','PostCommentsController');
    Route::resource('dashboard/comment/replies','CommentRepliesController');
    Route::resource('dashboard/categories','AdminCategoriesController');
    Route::resource('dashboard/skills','AdminSkillsController');
    Route::resource('dashboard/workSample','AdminWorkSamplesController');
    Route::resource('dashboard/forms','AdminFormsController');

});
Route::group(['middleware'=>'auth'],function (){

    Route::post('comment/reply','CommentRepliesController@createReply');

});
Route::get('/singleArticle/{id}',['as'=>'home.singleArticle','uses'=>'AdminPostController@postblog']);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', 'HomeController@test')->name('test');
Route::get('/about-us','ThemainController@about-us')->name('about-us');
Route::get('/tags','ThemainController@tags')->name('tags');
Route::get('/contact','ThemainController@contact')->name('contact');
Route::get('/articles','ThemainController@articles')->name('article');
Route::get('/singleArticle','ThemainController@singleArticle')->name('singleArticle');
Route::get('/card','ThemainController@card')->name('card');
Route::get('/work-sample/{id}','ThemainController@workSample')->name('home.work-sample');
Route::get('/work-samples','ThemainController@workSamples')->name('home.work-samples');
Route::get('work-samples/skill/{id}','ThemainController@workSkill')->name('home.workSkill');
Route::get('work-samples/category/{id}','ThemainController@workCategory')->name('home.workCategory');


