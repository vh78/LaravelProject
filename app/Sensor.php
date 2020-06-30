<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    protected $table = "sensors";
    protected $fillable = ["name", "params", "sens_id"];
    /*public function model()
    {
        return $this->belongsTo('App\Models');
    }*/

    public function sensor() {
        return $this->hasMany('App\Model');
    }
}
