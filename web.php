<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
/*
Route::get('/', function () {
    $title = 'welcome to laravel@##';
    //return view('index', compact('title'));
    return view('index')->with('title', $title);
});

Route::get('/about', function () {
    $title = 'About us';
   return view('pages.about')->with('title', $title);

});

Route::get('/serve', function () {
    $data = array(
        'title' => 'services',
        'services' => ['web desgin', 'programming', 'seo']
    );
    return view('pages.serve')->with($data);
 
 });
  Route::resource('posts', 'postcontroller');*/
 Route::get('/', 'PagesController@index');
 Route::get('/about', 'PagesController@about');
 Route::get('/serve', 'PagesController@serve');
 Route::resource('posts', 'PostController');


 
