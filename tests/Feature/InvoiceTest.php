<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InvoiceTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_main_route(): void
    {
        $this->seed();
        $response = $this->getJson('api/v1/invoices');

        $response->assertStatus(200);
    }

    public function test_main_route_structure(): void
    {
        $this->seed();
        $response = $this->getJson('api/v1/invoices');

        $response->assertJsonStructure(
            [
                'data' => [
                    '*' => [
                        'customer',
                        'number',
                        'status',
                        'sent_at',
                        'paid_at',
                        'total'
                    ]
                ]
            ]
        );
    }
}
