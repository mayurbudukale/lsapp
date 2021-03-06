<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    protected $table = 'posts';
    // Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestampt = true;

    protected $fillable = [
        'title', 'body',
    ];


    public function user(){
        return $this->belongsTo('App\User');
    }
}
