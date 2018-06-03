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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


Route::get('/', 'PageController@index');

Route::get('/about', 'BlogController@about');

Route::get('/services', 'BlogController@services');

Route::get('/testimonials', 'BlogController@testimonials');

Route::get('/publications', 'BlogController@publications');

Route::get('/publications/download', 'BlogController@download')->name('downloads');

Route::post('/message','BlogController@message')->name('message');

Route::post('/subscribe', 'BlogController@subscribe')->name('subscribe');



// Route::get('/tenders', 'PageController@tenders');

// Route::get('/grants', 'PageController@grants');


Route::get('/contact', 'BlogController@contact');

Route::post('/contact', 'PageController@submitContact');




Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');



// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/blog','PageController@blog');

// Route::get('/tenders','BlogController@tender');

// Route::get('delete_tender/{id}','BlogController@destroy_tender');

// Route::get('download_tender/{filename}','BlogController@download_tender');

// Route::get('/create_publications','BlogController@create_publication');

// Route::post('/create_publications','BlogController@store_publication');

// Route::get('download_publication/{filename}','BlogController@download_publication');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/admin-dash','BlogController@index');
});

Route::group(['/middleware' => ['auth', 'web']], function()
{
	// show new post form
	Route::get('/new-post','BlogController@create');

	// show new tender form
	Route::get('/new-tender','BlogController@create_tender');

	// save new tender
	Route::post('/new-tender','BlogController@store_tender');
	
	// save new post
	Route::post('/new-post','BlogController@store');
	
	// edit post form
	Route::get('/edit/{id}','BlogController@edit');
	
	// update post
	Route::post('update','BlogController@update');
	
	// delete post
	Route::get('delete/{id}','BlogController@destroy');
	
	// display user's all posts
	Route::get('my-all-posts','UserController@user_posts_all');

	// display user's all posts
	Route::get('all-tenders','BlogController@all_tenders');

	// display user's drafts
	Route::get('my-drafts','UserController@user_posts_draft');


	// display single post (backend)
	Route::get('/my-all-posts/{slug}',['as' => 'posts', 'uses' => 'BlogController@show_backend'])->where('slug', '[A-Za-z0-9-_]+');
	
	

	Route::post('/publish', ['as' => 'publish', 'uses' => 'UserController@postPublish']);
	
	
	// add comment
	Route::post('comment/add','CommentController@store');
	
	// delete comment
	Route::post('comment/delete/{id}','CommentController@distroy');

	
	
});

//users profile
Route::get('user/{id}','UserController@profile')->where('id', '[0-9]+');

// display list of posts
Route::get('user/{id}/posts','UserController@user_posts')->where('id', '[0-9]+');

// display single post
Route::get('blog/{slug}',['as' => 'posts', 'uses' => 'BlogController@show'])->where('slug', '[A-Za-z0-9-_]+');








