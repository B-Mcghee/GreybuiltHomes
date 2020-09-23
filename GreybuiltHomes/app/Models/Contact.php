<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models;

class Contact extends Model
{
    use HasFactory;

    protected $primarykey = 'contact_id';
}
