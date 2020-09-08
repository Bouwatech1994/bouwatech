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

Route::match(['GET','POST'],'/','Controller@index')->middleware('auth');
Route::match(['GET','POST'],'accueil','Controller@index')->middleware('auth');
Route::resource('contacts','ContactsController')->middleware('auth');
Route::match(['GET'], '/home', 'Controller@dashboard')->name('dashboard')->middleware('auth');
Route::match(['POST'], 'post', 'Controller@dataTable')->name('table')->middleware('auth');
Route::resource('annonces', 'AnnonceController')->middleware('auth');
Route::resource('articles', 'ArticleController')->middleware('auth');
Route::resource('clients', 'ClientController')->middleware('auth');
Route::resource('groupes', 'GroupeController')->middleware('auth');
Route::resource('partenaires', 'PartenaireController')->middleware('auth');
Route::resource('projets', 'ProjetController')->middleware('auth');
Route::get('projets/details', 'ProjetController@details')->name('projets.details')->middleware('auth');
Route::resource('publicites', 'PubliciteController')->middleware('auth');
Route::resource('taches', 'TacheController')->middleware('auth');
Route::resource('users', 'UserController')->middleware('auth');
Route::match(['GET'], 'password.check', 'Controller@check')->name('password.check')->middleware('auth');
Route::match(['POST'], 'password.update', 'Controller@password')->name('password.update')->middleware('auth');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/send-mail', function () {

    Mail::to('newuser@example.com')->send(new \App\Mail\MailtrapExample());
    return 'A message has been sent to Mailtrap!';

});
