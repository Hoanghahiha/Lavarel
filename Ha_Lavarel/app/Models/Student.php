<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $fillable = [
        'id',
        'name',
        'age',
        'address',
        'telephone',
        'created_at',
        'updated_at'
    ];
    public function Classes(){
        //return 1 object class
        //return Classes::where("cid",$this->cid)->first();
        return $this->belongsTo(Classes::class,"cid","cid");
    }
    public function scopeSearch($query,$search=''){
        if ($search !=null && $search !=''){
            return $query ->where('name','like','%'.$search.'%');//->orWhhere();
        }
        return $query;
    }
    public function scopeClassFilter($query,$cid=''){
        if ($cid !=null &&$cid !=''){
            return $query->where("cid",$cid);
        }
        return $query;
    }
    public function scopeBirthdayTo($query,$fromDate=''){
        if ($fromDate != null && $fromDate !=''){
            return $query ->where("birthday","<=",$fromDate);
        }
        return $query;
    }
    public function scopeBirthdayFrom($query,$fromDate=''){
        if ($fromDate != null && $fromDate !=''){
            return $query ->where("birthday",">=",$fromDate);
        }
        return $query;
    }
    public function getImage(){
        if ($this->image){
            return $this->image;
        }
        return 'upload/default.jpeg';
    }
}
