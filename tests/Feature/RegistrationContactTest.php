<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class RegistrationContactTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_contact()
    {
        $user = User::factory()->create();  
  
        
        $response = $this->post('/login', [
          'email' => $user->email,
          'password' => 'password', 
        ]);
    
        $this->actingAs($user);

       $response = $this->get('/contacts/create',[
            'state'  =>  'state',
            'street' =>  'street',
            'neighborhood' =>  'neighborhood',
            'email' => 'email@.com',
            'cpf' => 'cpf',
            'tel' => 'tel',
            'photo' => null,
            'cep' => 'cep',
            'name' => 'lipeDev',           
            'password' => '123456789',
        ]);

        $response->assertStatus(200);
    }
}
