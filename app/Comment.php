<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{
    protected $guarded = ['id'];

    const STORE_RULES = [
        'content' => 'required | min:10',
        
    ];

}
