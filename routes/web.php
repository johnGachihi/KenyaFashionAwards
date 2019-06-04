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

Route::get('/welcome', function () {
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

        Route::post('/applications/decision/accept/{id}', 'ApplicationsController@accept');

        Route::post('/applications/decision/reject/{id}', 'ApplicationsController@reject');

        Route::get('/vote_stats', 'VotesController@view')->name('vote-stats');

    });

});


Route::get('/index', 'pagescontroller@index' );
Route::get('/category', 'pagescontroller@category');
Route::get('/models', 'pagescontroller@models');
Route::get('/criteria', 'pagescontroller@criteria');
Route::get('/contacts', 'pagescontroller@contact');
Route::get('/projects', 'pagescontroller@projects');
Route::get('/blog', 'pagescontroller@blog');
// Route::get('/login', 'pagescontroller@login');
Route::get('/signup', 'pagescontroller@signup');
Route::get('/votes', 'pagescontroller@vote');

Route::get('/models', function () {
    $approved_applications  = \App\Applicant::whereHas('application', function ($query) {
        $query->where('decision', 'approved');
    })->get();
    $a = \App\Applicant::all();
//    return view('models');
    return $approved_applications;
//    return $a;
});

//Route::resource('posts','PostsController');


/******************************************************************************************************
 * CSRF disabled for testing
 */

Route::post('/applications/create', 'ApplicationsController@create');
Route::post('/applications', 'ApplicationsController@store');

Route::get('/vote', 'VotesController@cast');

Route::get('/category/all', 'AwardCategoriesController@getAllCategories');

/*
 *  CSRF disabled for testing
 */
/******************************************************************************************************/


//Route::get("/test", function () {
//    event(new \App\Events\TestEvent("This is awesome"));
//});


