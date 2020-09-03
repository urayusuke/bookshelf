<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    protected $fillable = [
    'title','author','contents'
    ];
}
