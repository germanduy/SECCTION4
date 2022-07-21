<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected  $table = 'students';
    protected $primaryKey = 'sid';
    protected $keyType = 'string';
    protected  $fillable = [
        'sid',
        'name',
        'birthday',
        'cid',
        'created_at',
        'updated_at'
    ];
    public function classes(){
        return $this->belongsTo(Classes::class,"cid","cid");
    }
    public  function  scopeSearch($query,$search=''){
        if($search != null && $search != ''){
            return $query->where("name","like","%".$search."%");
//            ->or where();
        }
        return $query;
    }
    public  function scopeClassFilter($query,$cid=''){
        if($cid != null && $cid!=''){
            return $query->where("cid", $cid);
        }
        return $query;
    }
    public  function scopeBirthdayFrom($query,$fromDate=''){
        if($fromDate != null && $fromDate!=''){
            return $query->where('birthday',">=",$fromDate);
        }
        return $query;
    }
    public  function scopeBirthdayTo($query,$toDate=''){
        if($toDate != null && $toDate!=''){
            return $query->where('birthday',"<=",$toDate);
        }
        return $query;
    }
}
