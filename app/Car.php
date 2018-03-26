<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    // Database Table associated with Car Model.
    protected $table = 'Cars';

    //Table needs to be timestamped.
    public $timestamps = true;

    //Property for make of the car.
    protected $make;

    //Property for model of the car
    protected $model;

    //Property for year of the car
    protected $year;

}
