<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $table = ['posts'];
    protected $fillable = ['content', 'user_id', 'created_at', 'updated_at'];

    public function user(){
        return $this->hasOne('App\User');
    }
}
