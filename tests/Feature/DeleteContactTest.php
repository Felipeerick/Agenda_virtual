<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class DeleteContactTest extends TestCase
{
  public function test_remove_contact()
  {
    $user = User::factory()->create();  

    $response = $this->post('/login', [
      'email' => $user->email,
      'password' => 'password', 
    ]);

    $this->actingAs($user);
    
    $response = $this->delete('/contacts/' . $user->id);
    
    $response = $this->get('/');
    
    $response->assertStatus(200);
    
  }
}
