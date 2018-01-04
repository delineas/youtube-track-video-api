<?php
 
namespace App\Http\Controllers;
 
use App\VideoTracker;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class VideoTrackerController extends Controller{

	public function updateOrCreateVideoTracker(Request $request){

		$video_tracker = VideoTracker::updateOrCreate(['video_id' => $request->input('video_id')], $request->all());

		$video_tracker->fill($request->all())->save();
	
		return response()->json($video_tracker);
	
	}

	public function deleteVideoTracker($video_id){
    	$video_tracker  = VideoTracker::where('video_id', $video_id)->firstOrFail();
    	$video_tracker->delete();
 
    	return response()->json('Removed successfully.');
	}

	public function showVideoTracker($video_id){
 
    	$video_tracker  = VideoTracker::where('video_id', $video_id)->firstOrFail();
 
    	return response()->json($video_tracker);
 
	}
}

