<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DeleteContactTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_remove_contact()
    {
       $this->post('/login', [
          'email' =>'rick0531927@gmail.com',
         'password' => '123456789',
       ]);
  
        $this->call('DELETE', '/contacts/7', ['token', csrf_token()]);

         $this->assertGuest();
    }
}
