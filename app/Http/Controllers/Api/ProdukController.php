<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Validator;
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

    public function show($id){
    $produk=Produk::find($id);

    if ($produk) {
        return response()->json([
        'sukses'=>true,
        'message'=>"Daftar Data Produk",
        'data'=>$produk
    ], 200);
    }
    return response()->json([
        'sukses'=>false,
        'message'=>"Daftar Data Produk",
        'data'=>$produk
    ], 200);
    }



}
