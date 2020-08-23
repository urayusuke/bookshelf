<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    public static $rules = array(
        'user_id' => 'required',
        'title' => 'required',
        'author' => 'required',
        'contents' => 'required',
    );
}
