<?php

Route::group(['prefix' => 'admin/tags', 'as' => 'admin.tags.', 
	'namespace' => 'TrezeVel\Tag\Controllers', 'middleware' => ['web']], function(){

    Route::get('/', ['uses' => 'AdminTagsController@index', 'as' => 'index']);
    Route::get('/create', ['uses' => 'AdminTagsController@create', 'as' => 'create']);
    Route::post('/store', ['uses' => 'AdminTagsController@store', 'as' => 'store']);
    Route::get('/edit/{id}', ['uses' => 'AdminTagsController@edit', 'as' => 'edit']);
    Route::post('/update/{id}', ['uses' => 'AdminTagsController@update', 'as' => 'update']);
    Route::get('/destroy/{id}', ['uses' => 'AdminTagsController@destroy', 'as' => 'destroy']);

});