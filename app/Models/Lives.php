<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lives extends Model
{
    public function lives(){

        return $this->belongsToMany('App\Models\Event');

    }
}
