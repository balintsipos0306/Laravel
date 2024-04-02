<?php

namespace Tests\Unit;

use App\Models\Munkafelvevo;
use App\Models\Munkalap;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MunkafelvevoTest extends TestCase
{
    use RefreshDatabase;


    public function testMunkafelvevohezTartozoMunkalapok()
    {
        $munkafelvevo = Munkafelvevo::factory()->create();
        Munkalap::factory(2)->create(['munkafelvevo_azonosito' => $munkafelvevo->id]);

        $this->assertCount(2, $munkafelvevo->munkalap);
    }

    public function testMunkafelvevoAttributei()
    {
        $munkafelvevo = Munkafelvevo::factory()->create([
           'nev' => 'Teszt Felhasználó',
           'password' => 'secret',
           'azonosito' => '123456'
        ]);

        $this->assertEquals('Teszt Felhasználó', $munkafelvevo->nev);
        $this->assertEquals('123456', $munkafelvevo->azonosito);
    }
}
