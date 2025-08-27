<?php

namespace Tests\Unit\Auth;

use Tests\TestCase;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Authentication\SignInRequest;

class SignInRequestTest extends TestCase
{
    /** @test */
    public function signin_requires_username_and_password()
    {
        $request = new SignInRequest();

        $v = Validator::make([], $request->rules());
        $this->assertTrue($v->fails());
        $this->assertArrayHasKey('username', $v->errors()->toArray());
        $this->assertArrayHasKey('password', $v->errors()->toArray());

        $v = Validator::make(['username' => 'x'], $request->rules());
        $this->assertTrue($v->fails());
        $this->assertArrayHasKey('password', $v->errors()->toArray());

        $v = Validator::make(['password' => 'secret'], $request->rules());
        $this->assertTrue($v->fails());
        $this->assertArrayHasKey('username', $v->errors()->toArray());
    }
}
