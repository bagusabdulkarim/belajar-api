<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index(){
    $produk=Produk::all();
    return response()->json([
        'sukses'=>true,
        'message'=>"Daftar Data Produk",
        'data'=>$produk
    ], 200);
    }

}
