<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\User;
use App\Instagram;
use App\Client;

class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Post_id', 'User_id','Comment','instagram_id','Client_id'
    ];
    

    // THIS function Post TO MAKE RELATHION Post 
     public function Post()
    {
        return $this->belongsTo('App\Post','Post_id');
    }

    // THIS function Post TO MAKE RELATHION Post 
     public function Instagram()
    {
        return $this->belongsTo('App\Instagram','instagram_id');
    }

    // THIS function Client TO MAKE RELATHION Post 
     public function Client()
    {
        return $this->belongsTo('App\Client','Client_id');
    }

    // THIS function User TO MAKE RELATHION Post 
     public function User()
    {
        return $this->belongsTo('App\User','User_id');
    }

}
