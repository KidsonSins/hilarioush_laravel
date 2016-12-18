<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrincipalMessage extends Model
{
    protected $fillable=[

      'name',
        'message',
        'photo_id',

    ];

    public function photo(){
        return $this->belongsTo('App\Photo');
    }
}

