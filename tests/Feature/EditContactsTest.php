<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EditContactsTest extends TestCase
{
    public function test_edit_contacts()
    {
        $this->post('/login', [
            'email' => 'loro@gmail.com',
            'password' => 'password',
        ]);


        $this->post('/contacts/{4}/update', [
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

        $this->assertGuest();
    }
}
