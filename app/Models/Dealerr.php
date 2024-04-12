<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dealer 
{
    use HasFactory;

    // Daftar dealer yang disimpan dalam array 
    protected static $list_dealer = [
        [
            'jenis'=>'Big',
            'jumlah'=>'10',
            'info'=>'on',
            'harga'=>'100k'
        ],
        [
            'jenis'=>'Small',
            'jumlah'=>'11',
            'info'=>'off',
            'harga'=>'300k'
        ]
    ];   

    // Mendapatkan semua data dealer 
    public static function all ()
    {
        return collect(self::$list_dealer);
    }

    // Mencari dealer berdasarkan jenisnya
    public static function cariJenis($cariJenis){
        $data_dealer = static::all();
        return $data_dealer->firstWhere('jenis', $cariJenis);
    }

}
