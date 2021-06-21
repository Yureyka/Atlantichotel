<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function types()
    {
        return $this->hasOne(RoomType::class, 'id', 'id_room_type');
    }
}
