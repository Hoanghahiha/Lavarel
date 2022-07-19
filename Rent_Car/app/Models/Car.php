<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = 'cars' ;
    protected $primaryKey = 'carId' ;
    protected $keyType='string';
    protected $fillable = [
        "name",
        "brand",
        "option",
        "status",
        "image",
        "created_at",
        "updated_at"
    ];
}
