<?php

namespace Database\Factories;

use App\Models\Alkatresz;
use App\Models\Anyag;
use App\Models\Munkafolyamat;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Munkalap>
 */
class MunkalapFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            // //autó adatai
            'rendszam' => fake()->bothify("???-###"),
            'gyartmany' => "Ford",
            'gyartas_eve' => fake()->year(),
            'tulajdonos_nev' => fake()-> name(),
            'tulajdonos_cim' => fake()->address(),
            // //Munkafolymat
            'alkatresz_mennyiseg' => 1,
            'anyag_mennyiseg' => "4kg",
            'alkatresz_id' => Alkatresz::inRandomOrder()->first()->id,
            'anyag_id' => Anyag::inRandomOrder()->first()->id,
            'munkafolyamat_id' => Munkafolyamat::inRandomOrder()->first()->id,
            'munkakor' => "Javítás",
            'szerelo' => "admin",
            
        ];
    }
}
