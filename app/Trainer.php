<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $table ='trainer';
    public function detail_training(){
        return $this->hasMany('App\DetailTraining','training_id','id');
    }
}
