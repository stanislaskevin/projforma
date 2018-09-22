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
use App\Mail\ContactMessageCreated;
use Illuminate\Http\Request;

/*Route::get('/hello', function () {
    //return view('welcome');
    return "<h1>hello univers</h1>";
});
Route::get('/users/{id}/{name}', function($id, $name){
    return  'This is user '.$name.' with an id of '.$id;
});
*/
Route::get('/', 'PostsController@index');
Route::get('/post', 'FrontController@show');
Route::get('/formation', 'FrontController@showPostByFormation');
Route::get('/stage', 'FrontController@showPostByStage');
Route::get('search', 'SearchController@research')->name('search');
Route::get('/contact', [
    'uses' =>'ContactMessageController@create',
    'as' => 'contact.create'
]);
Route::post('/contact', [
    'uses' =>'ContactMessageController@store',
    'as' => 'contact.store'
]);
Route::get('/test-email', function(){
    return new ContactMessageCreated();
});

Route::resource('posts', 'PostsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

/*Route::get('search/{word1}/{word2}', function (string $word1, string $word2) {

    $search = $word1 ." ". $word2;

    $result = DB::where('title', 'description','prix', "%$search%")
        ->get();

    if (count($result) == 0){
        return "sorry not found";
    }
    return view('front.search')->with(['result'=>$result]);
});*/
