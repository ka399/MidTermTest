<?php

namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * Test 5.  Unit test to insert new user to Users Table in the database.
     * New User Name : Kashish Agarwal (ka399@njit.edu)
     * @return void
     */
    public function testInsertUser()
    {
        //create a new user instance
        $user = new User();

        //assign new user name
        $user-> name = 'Kashish Agarwal';

        //assign the unique email for the new user
        $user->email='ka399@njit.edu';

        //assign the password for the new user. password will be stored in the encrypted format.
        $user->password= password_hash('123456',1);

        //test if the new user is saved in the database
        $this->assertTrue($user->save());
    }

        /**
     * Test 6.  Unit test to update the name of a user in the database to Steve Smith.
     * I am going to update the recently inserted user : Kashish Agarwal (ka399@njit.edu)
     * @return void
     */
    public function testUpdateUser()
    {
        //get the user instance for a user whose name has to be updated
        $user = User::where('email', 'ka399@njit.edu')->first();


        //Update the name to 'Steve Smith'
        $user->name= 'Steve Smith';

        //test if the new user is saved in the database
        $this->assertTrue($user->save());
    }

    /**
     * Test 7.  Unit test to delete the user from the users table.
     * I am going to delete the recently inserted & then updated user : Steve Smith (ka399@njit.edu)
     * @return void
     */
    public function testDeleteUser()
    {
        //get the user instance for a user which needs to be deleted
        $user = User::where('email', 'ka399@njit.edu')->first();

        //test if the new user is saved in the database
        $this->assertTrue($user->delete());
    }

    /**
     * Test 8.  Unit test to count the number of records(users) inserted by the database seed.  i.e. $userCount = 50
     *
     * @return void
     */
    public function testUsersCollectionCount()
    {
        //get the user collection (all records from users table)
        $usersCollection = User::All();

        //test if there are 50 records stored in users table.
        $this->assertCount(50,$usersCollection);
    }
}




























