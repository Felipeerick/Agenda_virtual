<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class RegistrationCommitmentsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_commitments()
    {
        $user = User::factory()->create();  
  
        
      $response = $this->post('/login', [
        'email' => $user->email,
        'password' => 'password', 
      ]);
  
      $this->actingAs($user);


      $response = $this->get('/commitments/create', [
            'date_commitments' => '05/07/2022',
            'name' => 'loro@gmail.com',
            'description' => 'wrong-password',
        ]);

         $response->assertStatus(200);
    }
}
