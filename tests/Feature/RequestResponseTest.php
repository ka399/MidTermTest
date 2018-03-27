<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RequestResponseTest extends TestCase
{
    /**
     * Test 1.  Feature test to check if the register page return a 200 status code.
     *
     * @return void
     */
    public function testRegisterPage()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }


}
