<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $primaryKey = 'project_id';
    public $timestamps = false;

    public function image(){

        return $this->hasOne('App\Models\Image','image_id');
    }

    public function images(){

        return $this->belongsToMany('App\Models\Image', 'image_project', 'project_id', 'image_id');
    }
}
