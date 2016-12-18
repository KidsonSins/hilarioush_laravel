<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schoolinfo extends Model
{
    protected $fillable=[

        'name',
        'information',
        'photo_id',
        'website',
        'fax_no',
        'phone_no',
        'address',
        'email',
    ];
    public function photo(){

        return $this->belongsTo('App\Photo');

    }

}
