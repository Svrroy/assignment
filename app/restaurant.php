<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class restaurant extends Model
{
    protected $table = 'restaurants';

    protected $fillable = [
        'name',
        'email',
        'mobile',
        'address',
        'description',
        'image',
    ];
}
