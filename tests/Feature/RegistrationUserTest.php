<?php

namespace Tests\Feature\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use TheSeer\Tokenizer\Token;
use App\Models\User;

class RegistrationUserTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_new_users_can_register()
    {
        $user = User::factory()->create();

        $response = $this->post('/register', [
            'email' => $user->email,
             'name' => 'lipeDev33',           
             'password' => '123456789',
            'password_confirmed' => '123456789',

        ]);

        $response = $this->post('/login', [
            'email' => $user->email,
             'name' => 'lipeDev33',           
             'password' => '123456789',
        ]);
    
        $this->actingAs($user);

        $response = $this->get('/contacts');

        $response->assertStatus(200);
         
        
    }
}
