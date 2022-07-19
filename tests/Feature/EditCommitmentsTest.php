<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class EditCommitmentsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_edit_commitments()
    {
        $user = User::factory()->create();

       $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

       $this->actingAs($user);

       $response = $this->put('/commitments/' . $user->id . '/update', [
            'date_commitments' => '01/10/2022',
            'name' => 'mecontrataPay',           
            'description' => '123456789',
        ]);

        $response = $this->get('/');

        $response->assertStatus(200);
    }
}