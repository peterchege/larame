<?php

use App\Post;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about', function () {
//     return "Hi about page";
// });

// Route::get('/contact', function () {
//     return "Hi am contact";
// });

// Route::get('/post/{id}/{name}', function($id, $name){

//     return "this is post number" . $id." ".$name;
// });

// Route::get('admin/posts/example', array('as'=>'admin.home' ,function(){

//     $url = route('admin.home');

//     return "this url is ". $url;

// } )); 

// Route::get('/post/{id}',  'peterController@index');

// use Illuminate\Routing\Route;

Route::resource('posts', 'peterController');

Route::get('/contact', 'peterController@contact');

Route::get('/contact', 'peterController@phonebook');

Route::get('/post/{id}/{name}/{password}', 'peterController@show_post');



/*
|--------------------------------------------------------------------------
| RAW SQL QUERY Routes
|--------------------------------------------------------------------------
|
*/

// SQL INSERT

// Route::get('/insert', function(){

//     DB::insert('insert into posts(title, content) value(?, ?)', ['laravel vz lumen', 'lumen is the best thing that happened to laravel']);
// });


// // SQL READ

// route::get('/read', function() {

//     $results = DB::select('select * from posts where id= ?',[1]);

//     // foreach($results as $post){
//     //     return $post-> title;
//     // }

//     // return $results;
//     return var_dump($results);
// });

// // SQL UPDATE

// route::get('/update', function(){

//     $updated = DB::update('update posts set title="update title" where id = ?', [1]);

//     return $updated;
// });

// // SQL DELETE

// route::get('/delete', function(){

//     $remove = DB::delete('delete from posts where id = ?', [1]);

//     return $remove;
// });

/*
|--------------------------------------------------------------------------
| ELOQUENT ORM
|--------------------------------------------------------------------------
|
*/

// Route::get('/read', function(){
    
//     $posts = Post::all(); 

//     foreach($posts as $post){
       
//         return $post->title;
//     }
// });


// Route::get('/find', function(){
    
//     $post = Post::find(3); 

//     return $post->title;
 
//     // foreach($posts as $post){
       
//     //     return $post->title;
//     // }
    
// });

Route::get('/findwhere', function(){
    
    $post = Post::where('id', 3)->orderBy('id', 'desc')->take(1)->get();
     return $post;
    
});
 
 