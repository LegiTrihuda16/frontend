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
            'nama' => 'Legi Trihuda Mustaqim',
            'npm' => '089638466848',
            'alamat' => 'Jl. Babakan selakaso',
            'agama' => 'Islam',
            'no_hp' => '089638466848',
            'status' => 'Aktif'
        ]);
    }
}
