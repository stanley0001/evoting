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

Route::get('/', function () {
    return view('welcome/welcome');
});
Route::get('/about', function () {
    return view('welcome/about');
});
Route::get('/check', function () {
    return view('welcome/check');
});
Route::get('/news', function () {
    return view('welcome/news');
});
Route::get('/result', function () {
    return view('welcome/result');
});
Route::get('/how', function () {
    return view('welcome/how');
});
Route::get('/contact', function () {
    return view('welcome/contact');
});
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/vote', 'HomeController@vote')->name('vote');
Route::post('/votepresident', 'HomeController@president')->name('president');
Route::post('/votegovernor', 'HomeController@governor')->name('governor');
Route::post('/votemp', 'HomeController@mp')->name('mp');
Route::post('/votewomenrep', 'HomeController@womenrep')->name('womenrep');
Route::post('/votemca', 'HomeController@mca')->name('mca');
Route::post('/votefinal', 'HomeController@final')->name('final');
Route::get('/votestatus', 'HomeController@status')->name('status');
Route::get('/results', 'HomeController@results')->name('results');

Route::prefix('admin')->group(function(){

Route::get('/login', 'Adminlogincontroller@showloginform')->name('admin.login');
Route::get('/polls', 'maincontroller@polls')->name('polls');
Route::get('/results', 'maincontroller@results')->name('results');
Route::get('/candidates', 'maincontroller@candidates')->name('candidates');
Route::post('/login', 'Adminlogincontroller@login')->name('admin.login.submit');
Route::get('/', 'AdminController@index')->name('admin.dashbord');
Route::get('/home', 'AdminController@home')->name('admin.home');
Route::get('/admin', 'AdminController@getadmins')->name('admin.admin');
//view users add and delete
Route::get('/user', 'AdminController@getusers')->name('admin.user');
Route::get('/users', 'AdminController@users')->name('admin.users');
Route::post('/user', 'AdminController@addadmin')->name('admin.users.add');
Route::get('/edituser/{id}', 'AdminController@edituser');
Route::post('/updateuser/{id}', 'AdminController@updateuser');
Route::post('/users', 'AdminController@delete')->name('admin.delete');
//upload images
Route::post('/image1', 'AdminController@uploadimage')->name('admin.addimage');
Route::post('/image2', 'AdminController@uploadimage')->name('admin.addimage1');
Route::post('/image3', 'AdminController@uploadimage')->name('admin.addimage2');
Route::post('/image4', 'AdminController@uploadimage')->name('admin.addimage3');
Route::post('/image4', 'AdminController@uploadimage')->name('admin.addimage3');
Route::post('/imageupload', 'AdminController@imageupload')->name('imageupload');
});
Route::prefix('upload')->group(function(){
Route::get('/customize', 'UploadController@index')->name('customize');
Route::post('/addcandidates', 'UploadController@addcandidate')->name('addcandidate');
Route::post('/update/{id}', 'UploadController@update')->name('customize.update');
Route::get('/events', 'AdminController@events')->name('admin.events');
Route::get('/posts', 'AdminController@posts')->name('admin.posts');
Route::post('/posts', 'AdminController@addpost')->name('admin.posts');
Route::post('/posts', 'AdminController@deletepost')->name('admin.posts');
});
Route::post('/checkvoter', 'welcomecontroller@checkvoter')->name('checkvoter');



