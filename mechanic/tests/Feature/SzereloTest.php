<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Szerelo;
use App\Models\Munkalap;

class SzereloMunkalapjainakListazasaTest extends TestCase
{
    use RefreshDatabase;

    public function test_szerelo_munkalapjainak_listazasa()
    {
        $szerelo = Szerelo::factory()->create();
        Munkalap::factory(3)->create(['szerelo_azonosito' => $szerelo->id]);

        $response = $this->get('/szerelok/' . $szerelo->id . '/munkalapok');

        $response->assertStatus(200);
        $response->assertSee('munkalapok'); // A 'munkalapok' szöveg valahol előfordul a válaszüzenetben
        $response->assertJsonCount(3, 'data');
    }
}
