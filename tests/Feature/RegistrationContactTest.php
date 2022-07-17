<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegistrationContactTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_contact()
    {
        $this->post('/login', [
            'email' => 'loro@gmail.com',
            'password' => 'password',
        ]);

        $this->get('/contacts/create',[
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

        $this->assertGuest();
    }
}
