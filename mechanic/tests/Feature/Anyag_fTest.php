<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Anyag;

class AnyagListazasaTest extends TestCase
{
    use RefreshDatabase;

    public function test_anyagok_listazasa()
    {
        Anyag::factory(5)->create();

        $response = $this->get('/anyagok');

        $response->assertStatus(200);
        $response->assertSee('anyagok');
    }
}
