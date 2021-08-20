<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use App\User;
use Laravel\Dusk;

class AdminOperationsTest extends TestCase
{

    public function test_admin_user_can_log_in()
    {
        $credential = [
            'email' => 'admin@admin.com',
            'password' => 'password'
        ];

        $response = $this->post('/login',$credential);
        $response->assertSuccessful();

        $response->assertSessionMissing('errors');

    }
}
