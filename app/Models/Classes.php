<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $table = 'classes' ;
    protected $primaryKey = 'cid' ;
    protected $keyType='string';
    protected $fillable = [
        "cid",
        "name",
        "room",
        "created_at",
        "updated_at"
    ];
    public function students(){
        return $this->hasMany(Student::class,"cid",'cid');
    }
    public  function scopeSearchname($query,$name=''){
        if($name != null && $name!=''){
            return $query->where("name","like","%".$name."%");
        }
        return $query;
    }
    public  function scopeSearchroom($query,$room=''){
        if($room != null && $room!=''){
            return $query->where("room","like","%".$room."%");
        }
        return $query;
    }
}
