<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Client;
use App\Models\Report;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ClientReportsTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $user = User::factory()->create(['email' => 'admin@admin.com']);

        Sanctum::actingAs($user, [], 'web');

        $this->seed(\Database\Seeders\PermissionsSeeder::class);

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_gets_client_reports()
    {
        $client = Client::factory()->create();
        $reports = Report::factory()
            ->count(2)
            ->create([
                'client_id' => $client->id,
            ]);

        $response = $this->getJson(route('api.clients.reports.index', $client));

        $response->assertOk()->assertSee($reports[0]->hotdishmeat);
    }

    /**
     * @test
     */
    public function it_stores_the_client_reports()
    {
        $client = Client::factory()->create();
        $data = Report::factory()
            ->make([
                'client_id' => $client->id,
            ])
            ->toArray();

        $response = $this->postJson(
            route('api.clients.reports.store', $client),
            $data
        );

        $this->assertDatabaseHas('reports', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $report = Report::latest('id')->first();

        $this->assertEquals($client->id, $report->client_id);
    }
}
