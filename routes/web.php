<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


$app->group(['prefix' => 'api/v1','namespace' => 'App\Http\Controllers'], function($app)
{
	$app->post('video','VideoTrackerController@createVideoTracker');
 
	$app->put('video/{video_id}','VideoTrackerController@updateVideoTracker');
 	 
	$app->delete('video/{video_id}','VideoTrackerController@deleteVideoTracker');
 
	$app->get('video/{video_id}','VideoTrackerController@showVideoTracker');
});