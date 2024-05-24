<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Munkalap;

class MunkafelvetelListazasaTeszt extends TestCase
{
    use RefreshDatabase;

    public function test_munkalapok_listazasa()
    {
        Munkalap::factory(10)->create();

        $response = $this->get('/munkalapok');
        $response->assertStatus(200);
        $response->assertSee('munkalapok');
        $response->assertJsonCount(10, 'data');
    }
}
