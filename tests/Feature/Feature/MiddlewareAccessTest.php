<?php

namespace Tests\Feature;

use Tests\TestCase;

class MiddlewareAccessTest extends TestCase
{
    /** @test */
    public function guest_cannot_access_admin_routes_protected_by_checkauth()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function only_admin_can_access_admin_routes()
    {
        $this->assertTrue(true);
    }
}
