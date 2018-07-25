<?php
Route::get('/tests', 'TestsController@index' );
Route::get('/tests/{test}', 'TestsController@show' );
Route::get('/posts', 'PostsController@index' );
Route::get('/posts/create', 'PostsController@create' );
Route::get('/posts/{post}', 'PostsController@show' );
Route::post('/posts' , 'PostsController@store');