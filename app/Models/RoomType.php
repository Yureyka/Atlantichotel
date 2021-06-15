<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RoomImg;

class RoomType extends Model
{
    use HasFactory;

    public function images()
    {
        return $this->hasMany(RoomImg::class, 'id_type', 'id');
    }
}
