<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DataPegawaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'tempat_lahir' => $this->faker->city,
            'tgl_lahir' => $this->faker->date,
            'alamat' => $this->faker->address,
            'riwayat_pekerjaan' => $this->faker->sentence,
        ];
    }
}
