<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    protected $table ='kursus';
    public $timestamps = false;
    public function detail_training(){
    	return $this->hasMany('App\DetailTraining','kursus_id','id');
    }
    public function kelas(){
    	return $this->belongsTo('App\Kelas','kelas_id','id');
    }
}
