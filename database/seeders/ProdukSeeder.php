<?php

namespace Database\Seeders;

use App\Models\ProdukModel;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'token_produk' => Str::random(100),
                'nama_produk' => 'jeruk',
                'gambar_produk' => 'jeruk.jpg',
                'harga_produk' => 25000,
                'jumlah_produk' => 2,
            ],
            [
                'token_produk' => Str::random(100),
                'nama_produk' => 'alpukat',
                'gambar_produk' => 'alpukat.jpg',
                'harga_produk' => 2000,
                'jumlah_produk' => 1,
            ],
        ];

        foreach ($data as $item) {
            ProdukModel::create($item);
        }
    }
}
