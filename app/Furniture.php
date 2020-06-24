<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Furniture extends Model
{
    protected $fillable = [
        'labelTable', 'tableNumber', 'chairNumber'
    ];
}
