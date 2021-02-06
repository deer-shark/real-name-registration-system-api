<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    public $timestamps = false;

    protected $guarded = ['id'];
}
