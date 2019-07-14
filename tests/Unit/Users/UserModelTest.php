<?php

namespace Tests\Unit;

use App\User;
use Faker\Factory;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModelTest extends TestCase {

    use WithoutMiddleware;

    public function testUserView() {
        $response = $this->get('/users');
        $response->assertSee('Users');
    }
//
//    public function testUserCreateButton() {
//        $response = $this->get('/users');
//        $response->assertStatus(200);
//    }

    public function testUserCreation() {
        $user = factory(User::class)->make();

        $response = $this->json('POST', '/users', [
            'name' => $user->name,
            'email' => $user->email,
            'password' => $user->password
        ]);

        $this->followingRedirects($response);
//        $response->assertRedirect('/users');
        $response->assertSee('Users');
    }
}
