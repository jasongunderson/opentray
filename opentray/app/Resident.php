<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    protected $fillable = [
        'facility',
        'fname',
        'lname',
        'room',
        'dine',
        'likes',
        'dislikes',
        'allergies',
        'comment',
        'active'
    ];
}
