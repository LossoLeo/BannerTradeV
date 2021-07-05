<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable=[
      'nomeativo',
      'minutagem',
      'id_live',
    ];


    public function live(){
        return $this->belongsToMany('App\Models\Lives');
    }
}
