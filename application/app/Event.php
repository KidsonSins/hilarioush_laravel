<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $fillable = [

        'photo_id',
        'title',
        'detail'

    ];
    public function photo(){

        return $this->belongsTo('App\Photo');

    }
}
