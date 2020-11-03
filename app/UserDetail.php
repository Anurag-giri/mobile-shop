<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model{
    
    public static function getAllUser(){
        return UserDetail::all();
    }

    public function getUserAndPostDetails1(){
        $record = UserDetail::leftJoin('posts', 'posts.user_details_id','user_details.id')
                               ->select('user_details.user_name',
                               'user_details.user_email',
                               'user_details.user_city',
                               'posts.name as post_name')
                               ->get();
        return $record;                       
    }

    public function getUserAndPostDetails(){
       return $this->hasMany('App\Post', 'user_details_id', 'id')->get();
    }
}
