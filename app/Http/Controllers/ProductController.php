<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Ambil semua produk dari database
        return view('navbaradmin.productadmin', compact('products')); // Kirim data ke view dengan path yang benar
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        if ($request->has('id')) {
            // Update existing product
            $product = Product::findOrFail($request->id);
            $product->update($validatedData);
        } else {
            // Create new product
            Product::create($validatedData);
        }

        return redirect()->route('productadmin')->with('success', 'Product saved successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('productadmin')->with('success', 'Product deleted successfully.');
    }
}
