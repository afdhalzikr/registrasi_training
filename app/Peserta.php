<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table ='peserta';
    public function detail_training(){
    	return $this->hasMany('App\DetailTraining','peserta_id','id');
    }
}
