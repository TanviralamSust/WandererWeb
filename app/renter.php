<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class renter extends Model
{
    protected $fillable = [
        'title', 'description','date','cost', 'photo1','photo2','photo3','photo4'
    ];

    public function userRenter()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

}
