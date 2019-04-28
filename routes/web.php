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
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth', 'adminCheck'])->group(function() {

    Route::prefix('admin')->group(function() {
    
        Route::get('/home', 'AwardCategoriesController@awardCategories');

        Route::get('/award_categories', 'AwardCategoriesController@awardCategories');

        Route::post('/createCategory/{id?}', 'AwardCategoriesController@createCategory');

        Route::view('/add_award_category', 'admin.add_award_category');

        Route::get('/edit_award_category/{id}', 'AwardCategoriesController@editAwardCategory');

        Route::get('/update_award_category/{id}', 'AwardCategoriesController@updateAwardCategory');

        Route::get('/delete_award_category/{id}', 'AwardCategoriesController@deleteAwardCategory');

        Route::get('/applications', 'ApplicationsController@view');

        Route::get('/applications/decision/accept/{id}', 'ApplicationsController@accept');

        Route::get('/applications/decision/reject/{id}', 'ApplicationsController@reject');

    });

});

Route::post('/application/create', 'ApplicationsController@create');


