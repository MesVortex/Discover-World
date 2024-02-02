<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    public function photo(){
        return $this->hasOne(Photo::class, 'id');
    }

    public function adventure(){
        return $this->hasMany(Adventure::class, 'destinationID');
    }
}
