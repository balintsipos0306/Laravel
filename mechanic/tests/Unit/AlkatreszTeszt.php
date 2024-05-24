<?php

namespace Tests\Unit;

use App\Models\Alkatresz;
use App\Models\Munkalap;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AlkatreszTest extends TestCase
{
    use RefreshDatabase;

    public function testAlkatreszhezTartozoMunkalapok()
    {
        $alkatresz = Alkatresz::factory()->create();
        Munkalap::factory(3)->create(['alkatresz_id' => $alkatresz->id]);

        $this->assertCount(3, $alkatresz->munkalap);
    }

    public function testKapcsolatAdatainakEllenorzese()
    {
        $alkatresz = Alkatresz::factory()->create();
        $munkalap = Munkalap::factory()->create(['alkatresz_id' => $alkatresz->id]);

        $this->assertEquals($alkatresz->id, $munkalap->alkatresz->id);
    }
}
