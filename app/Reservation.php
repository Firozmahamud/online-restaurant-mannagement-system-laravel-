<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
     protected $fillable = [
        'name','phone', 'email', 'dateandtime',
    ];
}
