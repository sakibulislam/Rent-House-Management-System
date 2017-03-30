<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $table='houses';
    protected $fillable=['house_type','house_status','address', 'city','area', 'cost','flat_number', 'created_at'];
}
