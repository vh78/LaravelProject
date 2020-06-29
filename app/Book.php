<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = "books";
    protected $fillable = ["book_id","book_name"];
    public function model()
    {
        return $this->belongsTo('App\Models');
    }
}
