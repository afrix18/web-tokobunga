<?php

namespace Database\Seeders;

use App\Models\Tokobunga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TBSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tokobunga::create([
            "namabunga"=> "Anggrek",
            "harga"=> '10',
            'deskripsi'=> 'Bunga yang sangat indah',
        ]);
    }
}
