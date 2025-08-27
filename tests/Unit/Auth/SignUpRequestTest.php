<?php

namespace Tests\Unit\Auth;

use Tests\TestCase;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Authentication\SignUpRequest;

class SignUpRequestTest extends TestCase
{
    /** @test */
    public function signup_requires_all_fields_and_rules()
    {
        $request = new SignUpRequest();

        // 1) Thiếu hết field -> fail
        $v = Validator::make([], $request->rules());
        $this->assertTrue($v->fails());
        $this->assertArrayHasKey('name', $v->errors()->toArray());
        $this->assertArrayHasKey('contact_en', $v->errors()->toArray());
        $this->assertArrayHasKey('email', $v->errors()->toArray());
        $this->assertArrayHasKey('password', $v->errors()->toArray());

        // 2) Password không confirmed -> fail
        $data = [
            'name' => 'John',
            'contact_en' => '0123456789',
            'email' => 'john@example.com',
            'password' => 'secret',
            // 'password_confirmation' => 'secret', // cố tình thiếu
        ];
        $v = Validator::make($data, $request->rules());
        $this->assertTrue($v->fails());
        $this->assertArrayHasKey('password', $v->errors()->toArray());

        // 3) Data hợp lệ -> pass (không check unique DB ở Unit)
        $data['password_confirmation'] = 'secret';
        $v = Validator::make($data, $request->rules());
        $this->assertFalse($v->fails());
    }
}
