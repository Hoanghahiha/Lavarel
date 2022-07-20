<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    protected $table = 'classes';
    protected $primaryKey = 'cid';
    protected $keyType = 'string';

    protected $fillable = [
        "cid",
        "name",
        "room",
        "created_at",
        "updated_at"
    ];

    public function students(){
        return $this ->hasMany(Student::class,"cid","cid");
    }

    public function scopeSearch($query,$search=''){
        if ($search !=null && $search !=''){
            return $query ->where('name','like','%'.$search.'%');//->orWhhere();
        }
        return $query;
    }
    public function scopeSearchID($query,$search=''){
        if ($search !=null && $search !=''){
            return $query ->where('cid','like','%'.$search.'%');//->orWhhere();
        }
        return $query;
    }
    public function scopeSearchRoom($query,$search=''){
        if ($search !=null && $search !=''){
            return $query ->where('room','like','%'.$search.'%');//->orWhhere();
        }
        return $query;
    }
}
