<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class agent extends Model
{
    protected $fillable = [
        'title', 'description','date','cost', 'photo1','photo2','photo3','photo4'
    ];

    public function userAgent()
    {
        return $this->belongsTo('App\User');
    }

}
