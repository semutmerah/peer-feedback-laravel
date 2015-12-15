<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BasicLayoutTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testAdaTitlePeerFeedback()
    {
        $this->visit('/')
             ->see('Peer Feedback');
    }
}
