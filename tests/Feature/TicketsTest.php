<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TicketsTest extends TestCase
{
    use RefreshDatabase;

    public function test_tickets_table_empty()
    {
        $user = User::factory()->admin()->create();

        $response = $this
            ->actingAs($user)
            ->get('/tickets');

        $response->assertStatus(200);
        $response->assertSee(__('No Tickets Found'));
    }

    public function test_admins_can_access_tickets()
    {
        $user = User::factory()->admin()->create();

        $response = $this
            ->actingAs($user)
            ->get('/tickets');

        $response->assertStatus(200);
    }
}
