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


Route::middleware(['auth', 'CheckBlogger'])->group(function() {

    Route::prefix('blogger')->group(function() {

        Route::get('/home', 'BlogPostsController@index');

        Route::get('/myblogs', 'BlogPostsController@index');

        Route::get('/create', 'BlogPostsController@create');

        Route::post('/createPost/{id?}', 'BlogPostsController@createPost');

        Route::get('/edit_post/{id}', 'BlogPostsController@editPost');

        Route::get('/update_post/{id}', 'BlogPostsController@updatePost');

        Route::get('/delete_post/{id}', 'BlogPostsController@deletePost');

        Route::get('/pending_posts', 'BlogPostsController@viewPending');

    });

});

Route::middleware(['auth', 'CheckBloggerAdmin'])->group(function() {

    Route::prefix('blog_admin')->group(function() {

        Route::get('/home', 'BlogsController@view');

        Route::get('/approved_posts', 'BlogsController@viewApproved');

        Route::get('/rejected_posts', 'BlogsController@viewRejected');

        Route::get('/approve_post/{id}', 'BlogsController@approvePost');

        Route::get('/reject_post/{id}', 'BlogsController@rejectPost');

        Route::get('/delete_post/{id}', 'BlogsController@deletePost');


    });


});

Route::get('/index', 'pagescontroller@index' );
Route::get('/category', 'pagescontroller@category');
Route::get('/models', 'pagescontroller@models');
Route::get('/criteria', 'pagescontroller@criteria');
Route::get('/contacts', 'pagescontroller@contact');
Route::get('/projects', 'pagescontroller@projects');
Route::get('/blog', 'BlogPageController@index');
// Route::get('/login', 'pagescontroller@login');
Route::get('/signup', 'pagescontroller@signup');
//Route::get('/votes', 'pagescontroller@vote');
Route::get('/test', 'pagescontroller@test');

Route::get('/votes/{candidate_id}', function ($candidate_id) {
    $candidate = \App\Applicant::with('application')->find($candidate_id);

    return view('vote',
        ['candidate' => $candidate]
    );
//    return $candidate;
});

Route::get('/models', function () {
    $approved_applications  = \App\Applicant::whereHas('application', function ($query) {
        $query->where('decision', 'approved');
    })->get();

    return view('models', ['candidates' => $approved_applications]);
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
