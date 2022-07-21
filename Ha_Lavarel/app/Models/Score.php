<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;
    protected $table = 'scores';
    protected $primaryKey = 'scid';
    protected $keyType = 'string';
    protected $fillable = [
        'scid',
        'name',
        'math',
        'result',
        'sid',
        'sbid',
        'created_at',
        'updated_at'
    ];

    public function student(){
        //return 1 object class
        //return Classes::where("cid",$this->cid)->first();
        return $this->belongsTo(Student::class,"sid","sid");
    }
    public function scopeSearch($query,$search=''){
        if ($search !=null && $search !=''){
            return $query ->where('math','like','%'.$search.'%');//->orWhhere();
        }
        return $query;
    }
    public function scopeResultSearch($query,$search=''){
        if ($search !=null && $search !=''){
            return $query ->where('result','like','%'.$search.'%');//->orWhhere();
        }
        return $query;
    }
    public function scopeStudentFilter($query,$sid=''){
        if ($sid !=null &&$sid !=''){
            return $query->where("sid",$sid);
        }
        return $query;
    }

}
