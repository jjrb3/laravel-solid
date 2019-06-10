<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->withHeaders([
            'Accept' => 'application/json'
        ])
            ->json('POST', 'api/user',[
                'type' => 'credit'
            ]);

        dd($response);
    }
}
