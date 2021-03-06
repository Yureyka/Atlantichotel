<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settling extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'id_reservation',
        'id_room'
    ];
}
