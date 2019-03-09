<?php

namespace App;

use App\Mail\theProjectCreated;
use Illuminate\Support\Facades\Mail;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    public function  getRouteKeyName()
    {
    	return 'title';
    }

     protected $fillable = [
        'title', 'description', 'user_id',
    ];

    /*protected static function boot()
    {
    	parent::boot();

    	static::created(function($pro){
    		\Mail::to($pro->owner->email)->send(
             new theProjectCreated($pro)
          );
    	});
    }*/

    public function owner()
    {
    	return $this->belongsTo(User::class,'user_id');
    }
}
