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

    /**
     * Test 12.  Unit test to count the number of records(cars) inserted by the database seed.  i.e. $carCount = 50
     *
     * @return void
     */
    public function testCarsCollectionCount()
    {
        //get the car collection (all records from cars table)
        $carsCollection = Car::All();

        //test if there are 50 records stored in cars table inserted by seeder
        $this->assertCount(50,$carsCollection);
    }

    /**
     * Test 13. Unit test to check if the car's year is integer.
     *
     * Faker->Year (seeded by database), though the column is of integer data type, comes out as string and assertion gives error.
     * e.g.  Failed asserting that '1993' is of type "integer".
     * We can use ctype_digit which checks if all of the characters in the provided string, text, are numerical (digits).
     * Ctype_digit checks return true only for integer and false for double, bloat, string, any other non-integer data type.
     *
     */
    public function testCarYearAsInteger()
    {
        //Pick any random car record
        $car = Car::inrandomorder()->first();

        //get the year in a variable
        $stringYear = $car->year;

        //Test if year is integer for this car record
        $this->assertTrue(ctype_digit($stringYear));
    }


}