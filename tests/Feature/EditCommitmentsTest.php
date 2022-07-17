<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EditCommitmentsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_edit_commitments()
    {
        $this->post('/login', [
            'email' => 'loro@gmail.com',
            'password' => 'password',
        ]);


        $this->post('/contacts/{4}/update', [
            'date_commitments' => '01/10/2022',
            'name' => 'mecontrataPay',           
            'description' => '123456789',
        ]);

        $this->assertGuest();
    }
}