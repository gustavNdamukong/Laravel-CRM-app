<?php

namespace Tests\Feature\Http\Controllers\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class LoginControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    /** @test */
    public function login_displays_the_login_form()
    {
        $response = $this->get(route('login'));

        $response->assertStatus(200);
        $response->assertViewIs('auth.login');
    }

    /** @test */
    public function login_displays_validation_errors()
    {
        $response = $this->post('/login', []);

        $response->assertStatus(302);
        $response->assertSessionHasErrors('email');
    }

    /** @test */
    public function login_authenticates_and_redirects_user()
    {
        $name = "admin";
        $email = "admin@admin.com";
        $password = 'password';

        $response = $this->post(route('login'), [
            'email' => $email,
            'password' => $password,
        ]);

        $response->assertRedirect(route('home.index'));

        $user = User::where('email', $email)->where('name', $name)->first();
        $this->assertNotNull($user);
        $this->assertAuthenticatedAs($user);
    }
}
