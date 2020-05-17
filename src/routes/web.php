<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [
    'as'    => 'posts.index',
    'uses'  => 'PostController@index'
]);

Route::get('/{post}', [
    'as'    => 'posts.show',
    'uses'  => 'PostController@show'
]);

