<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    public $timestamps = false;

    protected $guarded = ['id'];
}
