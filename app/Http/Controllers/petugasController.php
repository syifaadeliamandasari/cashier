<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class petugasController extends Controller
{
    public function petugas()
    {
        $products = Product::all(); // Ambil semua data produk
        $users = User::all(); // Ambil semua data pengguna

        return view('dashboard.petugas', compact('products', 'users')); // Kirim data produk dan pengguna ke view
    }
}
