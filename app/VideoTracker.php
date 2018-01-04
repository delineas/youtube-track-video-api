<?php namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class VideoTracker extends Model
{ 
	protected $table = 'video_tracker';
 	protected $fillable = ['video_id', 'percentage'];	 
}

