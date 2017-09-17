<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Models\Posts;
use Illuminate\Http\Request;

/*
 * Post Handlers
 */
Route::get('/', 'PostController@index');

Route::get('/post/{id}','PostController@getPost');

Route::post('/post/save','PostController@savePost');

Route::post('/post/edit','PostController@editPost');

Route::get('/post/delete/{id}','PostController@deletePost');

/**/


/*
 * Drive Handlers
 */
Route::get('/drive', 'DriveController@index');

Route::post('/drive/verify','DriveController@verify');

Route::get('/drive/signout','DriveController@signout');

Route::post('/do_upload','DriveController@do_upload');

Route::get('/drive/delete/{id}','DriveController@delete');
/**/

/*
 * Image Handlers
 */
Route::get('/post_images', 'ImageController@index');

Route::get('/post_images/delete/{id}', 'ImageController@delete');

Route::post('/post_images/do_upload', 'ImageController@do_upload');

/**/

Route::get('/about',function(Request $request){
	$aboutArticle = Posts::where('title','About Me')->first();
	return view('pages.about')->withPost($aboutArticle)
							  ->withLogged($request->session()->get('logged'));;
});

/*
 * Error Handlers
 */
Route::get('post_unauthorized',function(){
	return view('errors.custom')->withError('Post Unauthorized or Size Exceeds Limit.');
});


