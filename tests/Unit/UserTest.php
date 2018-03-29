<?php

namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * Test 4.  Unit test to insert new user to Users Table in the database.
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
}
