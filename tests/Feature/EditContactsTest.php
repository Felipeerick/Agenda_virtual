<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class EditContactsTest extends TestCase
{
    public function test_edit_contacts()
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->actingAs($user);

        $response = $this->put('/contacts/{4}/update', [
            'state'  =>  'state',
            'street' =>  'street',
            'neighborhood' =>  'neighborhood',
            'email' => 'email333@.com',
            'cpf' => 'cpf',
            'tel' => 'tel',
            'photo' => null,
            'cep' => 'cep',
            'name' => 'mecontrataPay',           
            'password' => '123456789',
        ]);

        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
