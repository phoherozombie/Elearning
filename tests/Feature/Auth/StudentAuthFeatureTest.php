<?php

namespace Tests\Feature\Auth;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserAuthFeatureTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_register_successfully_and_redirects_to_login()
    {
        $payload = [
            'name' => 'Admin One',
            'contact_en' => '0909123456',
            'email' => 'admin1@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ];

        $res = $this->post('/register', $payload);
        $res->assertRedirect('/login');

        $this->assertDatabaseHas('users', [
            'email' => 'admin1@example.com',
            // name_en được lưu trong controller
        ]);
    }

    /** @test */
    public function user_cannot_register_with_duplicated_email_or_contact()
    {
        // Tạo sẵn user trùng
        User::query()->insert([
            'name_en' => 'Old',
            'contact_en' => '0123456789',
            'email' => 'dupe@example.com',
            'password' => Hash::make('password'),
            'role_id' => 4,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $payload = [
            'name' => 'New',
            'contact_en' => '0123456789', // trùng
            'email' => 'dupe@example.com', // trùng
            'password' => 'password',
            'password_confirmation' => 'password',
        ];

        $res = $this->from('/register')->post('/register', $payload);
        $res->assertRedirect('/register');
        $res->assertSessionHasErrors(['contact_en', 'email']);
    }

    /** @test */
    public function user_can_login_with_email_and_correct_password()
    {
        $user = User::query()->create([
            'name_en' => 'Admin',
            'contact_en' => '0909000000',
            'email' => 'admin@example.com',
            'password' => Hash::make('secret123'),
            'role_id' => 4,
            'status' => 1,
        ]);

        $res = $this->post('/login', [
            'username' => 'admin@example.com',
            'password' => 'secret123',
        ]);

        $res->assertRedirect(route('dashboard'));
        $res->assertSessionHas('success');

        // Kiểm tra một số key session được set
        $res->assertSessionHasAll(['userId', 'userName', 'emailAddress', 'role_id', 'role']);
    }

    /** @test */
    public function user_can_login_with_contact_en_and_correct_password()
    {
        $user = User::query()->create([
            'name_en' => 'Admin2',
            'contact_en' => '0988123456',
            'email' => 'admin2@example.com',
            'password' => Hash::make('secret123'),
            'role_id' => 4,
            'status' => 1,
        ]);

        $res = $this->post('/login', [
            'username' => '0988123456',
            'password' => 'secret123',
        ]);

        $res->assertRedirect(route('dashboard'));
        $res->assertSessionHas('success');
    }

    /** @test */
    public function user_cannot_login_with_wrong_password()
    {
        User::query()->create([
            'name_en' => 'Admin3',
            'contact_en' => '0911000000',
            'email' => 'admin3@example.com',
            'password' => Hash::make('correct-pass'),
            'role_id' => 4,
            'status' => 1,
        ]);

        $res = $this->from('/login')->post('/login', [
            'username' => 'admin3@example.com',
            'password' => 'wrong-pass',
        ]);

        $res->assertRedirect('/login');
        $res->assertSessionHas('error', 'Username or Password is wrong!');
    }

    /** @test */
    public function inactive_user_cannot_login()
    {
        User::query()->create([
            'name_en' => 'Admin4',
            'contact_en' => '0911222333',
            'email' => 'admin4@example.com',
            'password' => Hash::make('secret123'),
            'role_id' => 4,
            'status' => 0, // inactive
        ]);

        $res = $this->from('/login')->post('/login', [
            'username' => 'admin4@example.com',
            'password' => 'secret123',
        ]);

        $res->assertRedirect('/login');
        $res->assertSessionHas('error');
    }

    /** @test */
    public function user_can_logout_and_session_flushed()
    {
        $user = User::query()->create([
            'name_en' => 'Admin5',
            'contact_en' => '0999888777',
            'email' => 'admin5@example.com',
            'password' => Hash::make('secret123'),
            'role_id' => 4,
            'status' => 1,
        ]);

        // Login thủ công bằng post để set đúng session của app
        $this->post('/login', ['username' => 'admin5@example.com', 'password' => 'secret123'])
             ->assertRedirect(route('dashboard'));

        $res = $this->get('/logout');
        $res->assertRedirect('/login');
        $res->assertSessionHas('danger', 'Succesfully Logged Out');
    }

    /** @test */
    public function guest_is_redirected_when_accessing_admin_dashboard()
    {
        $this->get('/admin/dashboard')->assertRedirect('/login');
    }

    /** @test */
    public function e2e_register_then_login_then_access_dashboard()
    {
        // Register
        $email = 'e2e'.Str::random(6).'@example.com';
        $this->post('/register', [
            'name' => 'E2E Admin',
            'contact_en' => '0909'.rand(100000,999999),
            'email' => $email,
            'password' => 'secret123',
            'password_confirmation' => 'secret123',
        ])->assertRedirect('/login');

        // Login
        $this->post('/login', [
            'username' => $email,
            'password' => 'secret123',
        ])->assertRedirect(route('dashboard'));

        // Access dashboard
        $this->get('/admin/dashboard')->assertStatus(200);
    }
}
