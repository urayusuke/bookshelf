<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    public static $books= array(
    'user_id' => 'required',
    'title' => 'required',
    'author' => 'required',
    'contents' => 'required',
    );
}
