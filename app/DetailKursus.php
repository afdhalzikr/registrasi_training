<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailKursus extends Model
{
    protected $table ='detail_kursus';
    public function peserta(){
        return $this->belongsTo('App\Trainer','trainer_id','id');
    }
    public function kursus(){
        return $this->belongsTo('App\Kursus','kursus_id','id');
    }
}
