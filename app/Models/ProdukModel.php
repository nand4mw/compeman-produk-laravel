<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProdukModel extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $guarded = [];

    public static function getTotalProduk__()
    {
        return DB::table('produk')->count();
    }

    // public static function resultProduk__()
    // {
    //     $results = DB::table('produk')->select('nama_produk', 'harga_produk', DB::raw('COUNT(*) as total_produk'))->groupBy('nama_produk', 'harga_produk')->get();
    //     return $results;
    // }
}
