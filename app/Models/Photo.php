<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    public function adventure(){
        return $this->belongsTo(Adventure::class);
    }

    public function destination(){
        return $this->belongsTo(Destination::class);
    }
}
