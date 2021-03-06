<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RequestResponseTest extends TestCase
{
    /**
     * Test 1.  Feature test to check if the register page returns a 200 status code.
     *
     * @return void
     */
    public function testRegisterPage()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    /**
     * Test 2.  Feature test to check if the login page returns a 200 status code.
     *
     * @return void
     */
    public function testLoginPage()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    /**
     * Test 3.  Feature test to check if the about page returns a 200 status code.
     *
     * @return void
     */
    public function testAboutPage()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }

    /**
     * Test 4.  Feature test to check if the contact page returns a 200 status code.
     *
     * @return void
     */
    public function testContactPage()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }



}
