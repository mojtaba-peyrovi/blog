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
})->name('home');

Route::POST('/signup','userController@postSignUp')->name('signup');
Route::POST('/signin','userController@postSignIn')->name('signin');
Route::get('/dashboard','postController@getDashboard')->name('dashboard');
Route::POST('/createpost','postController@postCreatePost')->name('post.create');
Route::get('/delete-post/{post_id}','postController@getDeletePost')->name('post.delete')->middleware('auth');
Route::get('/logout','userController@getLogout')->name('logout');
Route::get('/account','userController@getAccount')->name('account');
Route::post('/updateaccount','userController@postSaveAccount')->name('account.save');
Route::get('/user.image/{filename}','userController@getUserImage')->name('account.image');
Route::post('/edit',function(\Illuminate\Http\Request $request){
    return response()->json(['message' => $request['postId']]);
    /*



    */
})->name('edit');
