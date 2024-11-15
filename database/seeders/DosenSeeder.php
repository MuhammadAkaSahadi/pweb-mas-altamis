<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dosen')->insert([[
            'nama' => 'Edward',
            'nidn' => '12345678910',
            'tanggal_lahir' => '2001-11-09'
        ], [
            'nama' => 'Hanif',
            'nidn' => '0987654321',
            'tanggal_lahir' => '2000-07-24'
        ]]);
    }
}
