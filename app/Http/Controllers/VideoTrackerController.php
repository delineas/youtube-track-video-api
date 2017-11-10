<?php
 
namespace App\Http\Controllers;
 
use App\VideoTracker;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class VideoTrackerController extends Controller{

	public function createVideoTracker(Request $request){
 
    	$car = VideoTracker::create($request->all());
 
    	return response()->json($car);
 
	}
 
	public function updateVideoTracker(Request $request, $video_id){

    	$video_tracker  = VideoTracker::find(['video_id' => $video_id]);
    	$video_tracker->make = $request->input('percentage');
    	$video_tracker->save();
 
    	return response()->json($video_tracker);
	}  

	public function deleteVideoTracker($video_id){
    	$video_tracker  = VideoTracker::find(['video_id' => $video_id]);
    	$video_tracker->delete();
 
    	return response()->json('Removed successfully.');
	}

	public function showVideoTracker($video_id){
 
    	$video_tracker  = VideoTracker::find(['video_id' => $video_id]);
 
    	return response()->json($video_tracker);
 
	}
}

