<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $table = 'food_table';

    protected $fillable = [
        'menu_id',
        'food',
        'price',
    ];
}
