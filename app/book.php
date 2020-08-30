<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $books= [
    'user_id' => 'required',
    'title' => 'required',
    'author' => 'required',
    'contents' => 'required',
    ];
}
