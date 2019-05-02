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

Route::get('/index', 'pagescontroller@index' );
Route::get('/about', 'pagescontroller@about');
Route::get('/models', 'pagescontroller@models');
Route::get('/casting', 'pagescontroller@casting');
Route::get('/contacts', 'pagescontroller@contact');
Route::get('/projects', 'pagescontroller@projects');
Route::get('/blog', 'pagescontroller@blog');
// Route::get('/', '');

?>