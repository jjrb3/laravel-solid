<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StoreTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $date = date('Ymdhis');

        $response = $this->withHeaders([
            'Accept' => 'application/json'
        ])
            ->json('POST', 'api/create-user',[
                'name'  => "Jeremy {$date}",
                'email' => "jeremy-{$date}@mailinator.com",
                'password' => '123'
            ]);

        dd($response);

        $response
            ->assertStatus(200);
    }
}
