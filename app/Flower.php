<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    protected $table = "flowers";
    protected $fillable = ["id","name", "color"];
    public function model()
    {
        return $this->belongsTo('App\Models');
    }
}
