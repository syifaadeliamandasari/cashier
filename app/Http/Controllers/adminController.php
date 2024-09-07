<?php
namespace App\Http\Controllers;

use App\Models\User; // Pastikan model User di-import
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        $products = Product::all(); // Ambil semua data produk
        $users = User::all(); // Ambil semua data pengguna
        return view('dashboard.admin', compact('products', 'users'));
    }
}
