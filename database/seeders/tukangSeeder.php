<?php

namespace Database\Seeders;

use App\Models\tukang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tukangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tukang::create([
            'pekerja_id' => '1',
        ]);
    }
}
