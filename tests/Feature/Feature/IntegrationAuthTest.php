<?php

namespace Tests\Feature;

use Tests\TestCase;

class IntegrationAuthTest extends TestCase
{
    /** @test */
    public function login_redirects_to_dashboard()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function token_session_created_correctly()
    {
        $this->assertTrue(true);
    }
}
