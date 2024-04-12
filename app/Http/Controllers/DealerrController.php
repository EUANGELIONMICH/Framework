<?php

namespace App\Http\Controllers;

use App\Models\Dealer;
use Illuminate\Http\Request;

class DealerController extends Controller
{
    // Method untuk mencari dealer berdasarkan jenis
    public function cariByJenis($jenis){
        $data_dealer = Dealer::cariJenis($jenis); // Mengambil data dealer berdasarkan jenis
        return view ('detail_dealer', [
            'detail_dealer'=> $data_dealer // Mengirim data dealer ke view detail_dealer
        ]);
    }
}
