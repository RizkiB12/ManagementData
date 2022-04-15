<?php

namespace Database\Seeders;

use App\Models\DataPegawai;
use Illuminate\Database\Seeder;

class DataPegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DataPegawai::factory(20)->create();
    }
}
