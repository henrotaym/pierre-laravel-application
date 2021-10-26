<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class App extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'url',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [];
}
