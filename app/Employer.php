<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    //

    public $table = 'employers';
     protected $primaryKey = "userId";
    public $timestamps = false;
}
