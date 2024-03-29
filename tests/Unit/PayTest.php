<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PayTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->markTestSkipped('must be revisited.');

        $response = $this->withHeaders([
            'Accept' => 'application/json'
        ])
            ->json('POST', 'api/pay',[
                'type' => 'credit'
            ]);

    }
}
