<?php

namespace Tests\Feature\Auth;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;
use App\Models\Student;

class StudentAuthFeatureTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        // Nếu project của bạn có migrations cho students thì không cần đoạn dưới.
        // Nếu chưa có, bạn có thể xoá test Student này hoặc thêm migration test tạm.
        if (! Schema::hasTable('students')) {
            $this->markTestSkipped('students table not found, skipping StudentAuthFeatureTest.');
        }
    }

    /** @test */
    public function student_can_register_and_auto_login_redirect_to_back_route()
    {
        $backRoute = 'home'; // dùng route name có sẵn

        $email = 'stu'.Str::random(6).'@mail.com';
        $res = $this->post("/student/register/{$backRoute}", [
            'name' => 'Stu One',
            'email' => $email,
            'password' => 'secret123',
            'password_confirmation' => 'secret123',
        ]);

        $res->assertRedirect(route($backRoute));
        $res->assertSessionHas('success');

        $this->assertDatabaseHas('students', ['email' => $email]);
        $res->assertSessionHasAll(['userId', 'userName', 'emailAddress', 'studentLogin']);
    }

    /** @test */
    public function student_can_login_and_redirect_to_back_route()
    {
        $backRoute = 'home';

        Student::query()->create([
            'name_en' => 'Stu Two',
            'email' => 'stu2@example.com',
            'password' => Hash::make('secret123'),
            'status' => 1,
        ]);

        $res = $this->post("/student/login/{$backRoute}", [
            'email' => 'stu2@example.com',
            'password' => 'secret123',
        ]);

        $res->assertRedirect(route($backRoute));
        $res->assertSessionHas('success');
    }

    /** @test */
    public function inactive_student_cannot_login()
    {
        $backRoute = 'home';

        Student::query()->create([
            'name_en' => 'Stu Inactive',
            'email' => 'stu_inactive@example.com',
            'password' => Hash::make('secret123'),
            'status' => 0,
        ]);

        $res = $this->from("/student/login")->post("/student/login/{$backRoute}", [
            'email' => 'stu_inactive@example.com',
            'password' => 'secret123',
        ]);

        $res->assertRedirect('/student/login');
        $res->assertSessionHas('error');
    }

    /** @test */
    public function student_logout_flushes_session_and_redirects_to_login()
    {
        Student::query()->create([
            'name_en' => 'Stu Three',
            'email' => 'stu3@example.com',
            'password' => Hash::make('secret123'),
            'status' => 1,
        ]);

        $this->post('/student/login/home', [
            'email' => 'stu3@example.com',
            'password' => 'secret123',
        ])->assertRedirect(route('home'));

        $this->get('/student/logout')
             ->assertRedirect(route('studentLogin'))
             ->assertSessionHas('danger', 'Succesfully Logged Out');
    }

    /** @test */
    public function guest_cannot_access_student_dashboard()
    {
        $this->get('/students/dashboard')->assertRedirect(route('studentLogin'));
    }
}
