<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegistrationCommitmentsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_commitments()
    {
        $this->post('/login', [
            'email' => 'rick0531927@gmail.com',
            'password' => '123456789',
        ]);


        $this->get('/commitments/create', [
            'date_commitments' => '05/07/2022',
            'name' => 'loro@gmail.com',
            'description' => 'wrong-password',
        ]);

        $this->assertGuest();
    }
}
