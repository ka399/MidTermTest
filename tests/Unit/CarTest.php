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
     * New Car Record : Honda Accord 2011
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

    /**
     * Test 10.  Unit test to update the year of a car to 2000.
     * I am going to update the recently inserted car record : Honda Accord 2011 to Honda Accord 2000.
     * @return void
     */
    public function testUpdateCar()
    {
        //get the instance for a car whose name has to be updated
        $car = Car::where('make', 'Honda')
            ->where('model', 'Accord')
            ->where('year', 2011)
            ->first();


        //Update the name to 'Steve Smith'
        $car->year= 2000;

        //test if the new user is saved in the database
        $this->assertTrue($car->save());
    }

    /**
     * Test 11.  Unit test to delete a car record from the cars table.
     * I am going to delete the recently inserted & then updated car record : Honda Accord 2000
     * @return void
     */
    public function testDeleteCar()
    {
        //get the user instance for a user which needs to be deleted
        $car = Car::where('make', 'Honda')
            ->where('model', 'Accord')
            ->where('year', 2000)
            ->first();

        //test if the car record  is deleted in the database
        $this->assertTrue($car->delete());
    }

}
