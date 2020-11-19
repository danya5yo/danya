<?php

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


Route::get('danya', function () {
    return view('welcome');
});


Route::get('test' , function(){	
	$name ='ahmed';
	dd($name);
});

Route::get('users/{id}', function($i){
dd($i);

});


// Route::get('users/{id?}', function($i){
// dd($i);

// });  ? /parameter optional 

Route::get('users/{id}/comment', function($i){
dd('comment of users  '.$i);

});


Route::get('users/{i}/comment/{comment}', function($i ,$comment){
dd('comment no' .$i.  'of user'. $comment);

});


// Route::get('blog', function(){
// dd('hi blog');

// return redirect()->Route('my new blog');

// });

Route::redirect('blog' ,'new' , 301);
Route::redirect('google' ,'https://www.google.com' , 301);


Route::get('new', function(){
dd('hi new blog');

})->name ('my new blog');


Route::prefix('admin')->group(function(){


Route::get ('dashboard' ,function(){

});

Route::get ('product' ,function(){

});

Route::get ('category' ,function(){

});


Route::prefix('user')->group(function(){

Route::get ('danya' ,function(){

});


});
});