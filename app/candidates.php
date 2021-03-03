<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class candidates extends Model
{
    protected $fillable = [
        'firstname','lastname','nickname', 'profile_image','county','position','party','constituency','ward',
    ];
    protected $table="candidates";
    public $timestamp=false;
}
