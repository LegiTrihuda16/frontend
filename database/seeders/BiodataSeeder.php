<?php

namespace Database\Seeders;

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Biodata;

class BiodataSeeder extends Seeder
{
    public function run()
    {
        Biodata::create([
            'nama' => 'Asep Komarudin',
            'npm' => '1234567890',
            'alamat' => 'Jl. Mangkubumi No.12',
            'agama' => 'Islam',
            'no_hp' => '081323412938',
            'status' => 'Aktif'
        ]);
    }
}
