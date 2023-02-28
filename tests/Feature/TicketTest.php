<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TicketTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function text_contains_non_empty_table()
    {
        $response = $this->get('/tickets');

        $response->assertStatus(200);
        $response->assertSee('');
    }
}