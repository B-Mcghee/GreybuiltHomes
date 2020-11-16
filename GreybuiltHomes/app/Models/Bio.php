<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bio extends Model
{
    use HasFactory;

    protected $primaryKey = 'bio_id';

    public function image(){

        return $this->hasOne('App\Models\Image', 'image_id');
    }

    public function user(){

        return $this->hasOne('App\Models\User','user_id');
    }
}


