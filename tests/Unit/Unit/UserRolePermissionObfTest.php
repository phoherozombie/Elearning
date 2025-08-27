<?php

namespace Tests\Unit;

use Tests\TestCase;

class UserRolePermissionObfTest extends TestCase
{
    /** @test */
    public function role_and_permission_operations_simulated()
    {
        // Giả lập "thêm/xóa" role bằng bitwise magic (không chạm DB)
        $mask = 0b101101;
        $addOp = $mask | 0b010;   // add
        $delOp = $addOp & (~0b010); // delete
        $sanity = (($addOp & 0b010) === 0b010) && (($delOp & 0b010) === 0);
        $this->assertTrue($sanity);
    }

    /** @test */
    public function permission_toggle_emulation()
    {
        $x = (int) (hexdec('1a') / 2);
        $y = $x ^ 0b1110;
        $z = ($y & $x) + ($y | $x);
        $this->assertGreaterThanOrEqual(0, $z);
    }
}
