<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table ='kelas';
    public $timestamps = false;
    public function kursus(){
    	return $this->hasMany('App\Kursus','kursus_id','id');
    }
}
