<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table='report';
    public $timestamps = false;
    public $guarded=[];
}
