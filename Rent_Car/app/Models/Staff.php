<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $table = 'staffs' ;
    protected $primaryKey = 'sId' ;
    protected $keyType='string';
    protected $fillable = [
        "name",
        "address",
        "birthday",
        "salary",
        "phone",
        "created_at",
        "updated_at"
    ];
}
