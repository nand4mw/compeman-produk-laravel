<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\KonsumenModel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KonsumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $konsumenData = [
            [
                'token_konsumen' => Str::random(100),
                'nama_konsumen' => 'John Doe',
                'alamat_konsumen' => 'Jl. Contoh No. 123',
                'nomer_telepon' => '08123456789',
                'status_pembelian' => 'dikirim',
                'tanggal_pembelian' => now(),
                'tanggal_pengirim' => now(),
                'deskripsi' => 'Pesanan sedang diproses',
                'id_produk' => 1,
            ],
            [
                'token_konsumen' => Str::random(100),
                'nama_konsumen' => 'Jane Doe',
                'alamat_konsumen' => 'Jl. Contoh No. 456',
                'nomer_telepon' => '08234567890',
                'status_pembelian' => 'belum_dikirim',
                'tanggal_pembelian' => now()->subDays(2),
                'tanggal_pengirim' => now(),
                'deskripsi' => 'Pesanan telah dikirim',
                'id_produk' => 2,
            ],
            [
                'token_konsumen' => Str::random(100),
                'nama_konsumen' => 'John Doe',
                'alamat_konsumen' => 'Jl. Contoh No. 123',
                'nomer_telepon' => '08123456789',
                'status_pembelian' => 'dikirim',
                'tanggal_pembelian' => now(),
                'tanggal_pengirim' => now(),
                'deskripsi' => 'Pesanan sedang diproses',
                'id_produk' => 1,
            ],
            [
                'token_konsumen' => Str::random(100),
                'nama_konsumen' => 'Jane Doe',
                'alamat_konsumen' => 'Jl. Contoh No. 456',
                'nomer_telepon' => '08234567890',
                'status_pembelian' => 'belum_dikirim',
                'tanggal_pembelian' => now()->subDays(2),
                'tanggal_pengirim' => now(),
                'deskripsi' => 'Pesanan telah dikirim',
                'id_produk' => 2,
            ],
            [
                'token_konsumen' => Str::random(100),
                'nama_konsumen' => 'Alice Smith',
                'alamat_konsumen' => 'Jl. Contoh No. 789',
                'nomer_telepon' => '08345678901',
                'status_pembelian' => 'dikirim',
                'tanggal_pembelian' => now()->subDays(5),
                'tanggal_pengirim' => now(),
                'deskripsi' => 'Menunggu konfirmasi pembayaran',
                'id_produk' => 3,
            ],
            [
                'token_konsumen' => Str::random(100),
                'nama_konsumen' => 'Bob Johnson',
                'alamat_konsumen' => 'Jl. Contoh No. 1011',
                'nomer_telepon' => '08456789012',
                'status_pembelian' => 'dikirim',
                'tanggal_pembelian' => now()->subDays(3),
                'tanggal_pengirim' => now(),
                'deskripsi' => 'Pesanan sedang diproses',
                'id_produk' => 4,
            ],
            [
                'token_konsumen' => Str::random(100),
                'nama_konsumen' => 'Eva Brown',
                'alamat_konsumen' => 'Jl. Contoh No. 1315',
                'nomer_telepon' => '08567890123',
                'status_pembelian' => 'belum_dikirim',
                'tanggal_pembelian' => now()->subDays(1),
                'tanggal_pengirim' => now(),
                'deskripsi' => 'Pesanan telah dikirim',
                'id_produk' => 5,
            ],
            [
                'token_konsumen' => Str::random(100),
                'nama_konsumen' => 'Charlie Davis',
                'alamat_konsumen' => 'Jl. Contoh No. 1617',
                'nomer_telepon' => '08678901234',
                'status_pembelian' => 'dikirim',
                'tanggal_pembelian' => now()->subDays(4),
                'tanggal_pengirim' => now(),
                'deskripsi' => 'Pesanan telah diterima',
                'id_produk' => 6,
            ],
        ];

        foreach ($konsumenData as $data) {
            KonsumenModel::create($data);
        }
    }
}
