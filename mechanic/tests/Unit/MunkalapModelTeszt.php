<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Munkalap;
use App\Models\Munkafelvevo;

class MunkalapModelTeszt extends TestCase
{
    use RefreshDatabase;

    public function test_munkalap_kapcsolatok_betoltese()
    {

        $munkalap = Munkalap::factory()->create();
        $munkafelvevo = $munkalap->munkafelvevo()->create();

        $munkalap = Munkalap::with('munkafelvevo')->find($munkalap->id);

        $this->assertInstanceOf(Munkafelvevo::class, $munkalap->munkafelvevo);
        $this->assertEquals($munkafelvevo->id, $munkalap->munkafelvevo->id);
    }
}
