<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Live extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_apresentador',
        'id_live',
        'data_live',
    ];

    public function Live()
    {
        return $this->hasOne(LiveModel::class , 'id', 'id_live');
    }

}
