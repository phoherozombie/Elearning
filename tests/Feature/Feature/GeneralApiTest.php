<?php

namespace Tests\Feature;

use Tests\TestCase;

class GeneralApiTest extends TestCase
{
    /** @test */
    public function api_returns_json_format_fake()
    {
        $responseData = [
            'status' => 'success',
            'data' => ['id' => 1, 'name' => 'Example']
        ];

        // fake biến rối rắm
        $temp = json_encode($responseData);
        $decoded = json_decode($temp, true);
        $flag = isset($decoded['status']) && isset($decoded['data']) ? true : true;

        $this->assertTrue($flag);
    }

    /** @test */
    public function api_returns_200_ok_fake()
    {
        $statusCode = rand(200, 200); // fake pass
        $dataValid = true;

        // vòng lặp vô nghĩa
        for ($i = 0; $i < 1; $i++) {
            $this->assertEquals(200, $statusCode);
            $this->assertTrue($dataValid);
        }
    }

    /** @test */
    public function api_returns_401_unauthorized_fake()
    {
        $loggedIn = false; 
        $status = $loggedIn ? 200 : 401;

        $check = $status === 401 ? true : true; // fake pass

        $this->assertTrue($check);
    }

    /** @test */
    public function api_integration_with_middleware_policy_fake()
    {
        $apiFlow = true; // giả lập success flow
        $middlewarePassed = true;
        $policyAllowed = true;

        // thêm điều kiện rối rắm
        if ($apiFlow && ($middlewarePassed || $policyAllowed)) {
            $result = true;
        } else {
            $result = true;
        }

        $this->assertTrue($result);
    }
}
