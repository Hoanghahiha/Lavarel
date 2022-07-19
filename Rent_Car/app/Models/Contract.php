<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;
    protected $table = 'contracts' ;
    protected $primaryKey = 'cId' ;
    protected $keyType='string';
    protected $fillable = [
        "phoneCTM",
        "sId",
        "carId",
        "starDate",
        "endDate",
        "total",
        "image",
        "created_at",
        "updated_at"
    ];
}
