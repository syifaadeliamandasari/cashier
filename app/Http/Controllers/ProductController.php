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
            'item_code' => 'required|string|max:255',
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        // Jika ada ID produk, lakukan pembaruan, jika tidak, buat produk baru
        if ($request->has('id')) {
            $product = Product::findOrFail($request->id);
            $product->update($validatedData);

            // Perbarui gambar jika ada file baru diunggah
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('products', 'public');
                $product->update(['image' => $imagePath]);
            }
        } else {
            // Simpan gambar baru jika ada file
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('products', 'public');
                $validatedData['image'] = $imagePath;
            }

            // Buat produk baru
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

    public function edit($id)
    {
        if ($id == 0) {
            abort(404, 'Product not found');
        }
        $product = Product::findOrFail($id);
        return response()->json($product);
    }

}
