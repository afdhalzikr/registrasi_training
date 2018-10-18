<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTraining extends Model
{
    protected $table ='detail_training';
    public $timestamps = false;
    public function peserta(){
    	return $this->belongsTo('App\Peserta','peserta_id','id');
    }
    public function kursus(){
    	return $this->belongsTo('App\Kursus','kursus_id','id');
    }
}
