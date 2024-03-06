<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_get_users_list(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            ['id', 'name', 'email', 'email_verified_at', 'created_at', 'updated_at']
        ]);
        $response->assertJsonFragment(['name' => 'Juanjo']);
        $response->assertJsonCount(4);
    }

    public function test_get_users_detail(): void
    {
        $response = $this->get('/users/1');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'id', 'name', 'email', 'email_verified_at', 'created_at', 'updated_at'
        ]);
        $response->assertJsonFragment(['name' => 'Juanjo']);
    }

    public function test_get_not_exist_user_detail(): void
    {
        $response = $this->get('/users/5');
        $response->assertStatus(404);
    }
}
