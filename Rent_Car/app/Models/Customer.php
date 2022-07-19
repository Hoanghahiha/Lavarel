<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers' ;
    protected $primaryKey = 'phone' ;
    protected $keyType='string';
    protected $fillable = [
        "name",
        "address",
        "birthday",
        "created_at",
        "updated_at"
    ];
}
