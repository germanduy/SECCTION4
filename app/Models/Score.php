<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;
    protected  $table = 'scores';
    protected $primaryKey = 'csid' ;
    protected $fillable=[
        'mark',
        'result',
        'sid',
        'sbid',
        'created_at',
        'updated_at'
    ];
    public function students(){
        return $this->belongsTo(Student::class,"sid","sid");
    }
    public function subjects(){
        return $this->belongsTo(Subject::class,"sbid","sbid");
    }
    public  function scopeSearchmark($query,$mark=''){
        if($mark != null && $mark!=''){
            return $query->where("mark","like","%".$mark."%");
        }
        return $query;
    }
    public  function scopeSearchresult($query,$result=''){
        if($result != null && $result!=''){
            return $query->where("mark","like","%".$result."%");
        }
        return $query;
    }
    public  function scopestudent($query,$sid=''){
        if($sid != null && $sid!=''){
            return $query->where("sid", $sid);
        }
        return $query;
    }
    public  function scopesubject($query,$cbid=''){
        if($cbid != null && $cbid!=''){
            return $query->where("sbid", $cbid);
        }
        return $query;
    }
}
