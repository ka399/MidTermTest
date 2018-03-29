<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarTest extends TestCase
{
    /**
     * Test 9.  Unit test to insert new record to Cars Table in the database.
     * New Car Record :
     * @return void
     */
    public function testInsertCar()
    {
        //create a new instance of Car
        $car = new Car();

        //Make
        $car-> make = 'Honda';

        //Model
        $car-> model = 'Accord';

        //Year
        $car-> year = 2011;

        //test if the new user is saved in the database
        $this->assertTrue($car->save());
    }
}
