<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adventure extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'advice',
        'destinationID'
    ];

    public function destination(){
        return $this->belongsTo(Destination::class, 'destinationID');
    }

    public function photo(){
        return $this->hasMany(Photo::class, 'adventureID');
    }
}
