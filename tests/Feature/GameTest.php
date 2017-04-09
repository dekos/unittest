<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class GameTest extends TestCase
{

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIndex()
    {
        // $user = new User(array('name' => 'Deko'));
        // $user = factory(User::class)->create();
        $user = factory(User::class)->make();
        $this->be($user);


        $response = $this->call('GET', '/games');
        $this->assertEquals(200, $response->status());

        $response->assertViewHas('games');
        // $this->assertTrue(true);
    }

    public function testCreate()
    {

        $user = factory(User::class)->make();
        $this->be($user);


        $response = $this->call('GET', '/games/create');
        $this->assertEquals(200, $response->status());
    }

}
