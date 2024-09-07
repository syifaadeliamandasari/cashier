<?php
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // Menampilkan halaman produk admin
    public function index()
    {
        $products = Product::all();
        return view('productadmin', compact('products'));
    }

    // Menyimpan produk baru
    public function store(Request $request)
    {
        $request->validate([
            'item_code' => 'required',
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'stock' => 'required|numeric',
            'image' => 'nullable|image'
        ]);

        $product = new Product;
        $product->item_code = $request->item_code;
        $product->nama_produk = $request->nama_produk;
        $product->harga = $request->harga;
        $product->stock = $request->stock;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/images');
            $product->image = basename($path);
        }

        $product->save();

        return redirect()->route('products.index')->with('success', 'Product added successfully');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'item_code' => 'required',
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'stock' => 'required|numeric',
            'image' => 'nullable|image'
        ]);

        $product = Product::findOrFail($id);
        $product->item_code = $request->item_code;
        $product->nama_produk = $request->nama_produk;
        $product->harga = $request->harga;
        $product->stock = $request->stock;

        if ($request->hasFile('image')) {
            // Hapus gambar lama
            if ($product->image) {
                Storage::delete('public/images/' . $product->image);
            }

            // Simpan gambar baru
            $path = $request->file('image')->store('public/images');
            $product->image = basename($path);
        }

        $product->save();

        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

}
