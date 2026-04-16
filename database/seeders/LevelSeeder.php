<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Level::create([
            'level_kode' => 'ADM',
            'level_nama' => 'Administrator'
        ]);

        Level::create([
            'level_kode' => 'STF',
            'level_nama' => 'Staff'
        ]);

        Level::create([
            'level_kode' => 'CUS',
            'level_nama' => 'Customer'
        ]);
    }
}
