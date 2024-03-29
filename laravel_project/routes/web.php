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
});

Route::get("/home", function() {
 	return "<h1>This is home page</h1>" ;
});

Route::get("/blog/{page_id}", function($page_id) {
    return "<h1>This is blog page : {$page_id} </h1>" ;
});

Route::get( "/blog/{page_id}/edit" , function($page_id) {
    return "<h1>This is blog page : {$page_id} for edit</h1>" ;
});

Route::get("/product/{a}/{b}/{c}", function($a, $b, $c) {
    return "<h1>This is product page </h1><div>{$a} , {$b}, {$c}</div>" ;
});

Route::get("/category/{a?}", function($a = "mobile") {
    return "<h1>This is category page : {$a} </h1>" ;
});

Route::get("/good_route" , function(){
    return view("test/index");
    });

Route::get("/hello", function(){
    return view("hello");
    });

Route::get('/greeting', function () {
        $data = [
    'name'      => 'James' ,
    'last_name' => 'Mars'
    ];
    return view('greeting', $data);
    });

Route::get( "/gallery" , function(){
        $data = [
    "ant" => "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg",
    "bird" => "https://cdn1.thr.com/sites/default/files/imagecache/scale_crop_768_433/2019/04/captain_america-civil_war-anthony_mackie-photofest-h_2019.jpg",
    "cat" => "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg",
    "god" => "https://amp.insider.com/images/5b7acee73cccd122008b45ac-750-563.jpg",
    "spider" => "https://cdn1us.denofgeek.com/sites/denofgeekus/files/styles/main_wide/public/2019/03/spider-man-far-from-home-tom-holland.jpg",
    "name" => "rutsin sukmee",
    "id" => "60122420117",
    ];
    return view('test/index', $data);
    });

Route::get( "/gallery/ant" , function(){
        $data = [
    "ant" => "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg",
    "name" => "rutsin sukmee",
    "id" => "60122420117",
    ];
    return view('test/ant', $data);
    });

Route::get( "/gallery/bird" , function(){
        $data = [
    "bird" => "https://cdn1.thr.com/sites/default/files/imagecache/scale_crop_768_433/2019/04/captain_america-civil_war-anthony_mackie-photofest-h_2019.jpg",
    "name" => "rutsin sukmee",
    "id" => "60122420117",
    ];
    return view('test/bird', $data);
    });

Route::get( "/gallery/cat" , function(){
        $data = [
    "cat" => "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg",
    "name" => "rutsin sukmee",
    "id" => "60122420117",
    ];
    return view('test/cat', $data);
    });

Route::get('/profile', 'ProfileController@index');
Route::get("/profile/create","ProfileController@create");
Route::get("/profile/{id}", "ProfileController@show");
Route::get("/profile/{id}/edit", "ProfileController@edit");

Route::get( "/newgallery" , "ProfileController@gallery" );
Route::get( "/newgallery/ant" , "ProfileController@ant" );
Route::get( "/newgallery/bird" , "ProfileController@bird" );

Route::get('/employee', 'EmployeeController@index'); 
Route::get("/employee/create", 'EmployeeController@create');
Route::post("/employee", "EmployeeController@store");
Route::get('/employee/{id}', 'EmployeeController@show');
Route::get("/employee/{id}/edit", 'EmployeeController@edit');
Route::put("/employee/{id}", "EmployeeController@update");
Route::delete('/employee/{id}', 'EmployeeController@destroy');

Route::get('/position', 'PositionController@index');
Route::get("/position/create", 'PositionController@create');
Route::post("/position", "PositionController@store");
Route::get('/position/{id}', 'PositionController@show');
Route::get("/position/{id}/edit", 'PositionController@edit');
Route::put("/position/{id}", "PositionController@update");
Route::delete('/position/{id}', 'PositionController@destroy');

Route::get('/vehicle', 'VehicleController@index');
Route::get("/vehicle/create", 'VehicleController@create');
Route::post("/vehicle", "VehicleController@store");
Route::get('/vehicle/{id}', 'VehicleController@show');
Route::get("/vehicle/{id}/edit", 'VehicleController@edit');
Route::put("/vehicle/{id}", "VehicleController@update");
Route::delete('/vehicle/{id}', 'VehicleController@destroy');











    