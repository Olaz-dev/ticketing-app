<?php

namespace Tests\Feature;

use Tests\TestCase;

class TicketsTest extends TestCase
{
    public function test_tickets_table_empty()
    {
        $response = $this->get('tickets');

        $response->assertStatus(200);
        $response->assertSee(__('No Tickets Found'));
    }

    // public function test_tickets_page_contains_tickets()
    // {
    //     Ticket::create([
    //         ''
    //     ]);
    //     $response = $this->get('/tickets');
    //     $response->assertStatus(200);
    //     $response->assertSee(__("No Tickets Found"));

    // }
}
