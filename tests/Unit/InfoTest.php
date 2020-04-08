<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class InfoTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function test_can_access_index()
    {

        $info = factory("App\Info")->create();

        $response = $this->get('/loan');

        $response->assertStatus(200);
    }

}
