<?php

use App\Http\Controllers\PostsController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

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

Route::get('/contact',[PostsController::class,'contact']);

Route::get('/find',function(){

    $posts = Post::all();
    dump($posts);
    foreach ($posts as $post){
        echo $post->title;
    }

});
