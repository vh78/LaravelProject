<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $table = "devices";
    protected $fillable = ["name", "params", "sens_id"];
    public function model()
    {
        return $this->belongsTo('App\Models');
    }
}
