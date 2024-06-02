<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
        // dd($products); // Tambahkan ini untuk debugging
    }

    public function detail($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view("product_detail", compact('product'));
        // dd($product);
        
    }
    
   // Show the form for creating a new product
   public function create()
   {
       return view('admin.create_product');
   }

   // Store a newly created product in storage
   public function store(Request $request)
    {
        $request->validate([
            'slug' => 'required|unique:products,slug',
            'nama_product' => 'required',
            'deskripsi_nama' => 'required',
            'deskripsi' => 'required',
            'kelebihan' => 'required',
            'harga' => 'required|numeric',
            'stock' => 'required|numeric',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan gambar di direktori 'images/products'
        $imageName = $request->file('gambar')->getClientOriginalName();
        $request->file('gambar')->move(public_path('images/products'), $imageName);

        // Simpan nama file gambar di database
        Product::create([
            'slug' => $request->slug,
            'nama_product' => $request->nama_product,
            'deskripsi_nama' => $request->deskripsi_nama,
            'deskripsi' => $request->deskripsi,
            'kelebihan' => $request->kelebihan,
            'harga' => $request->harga,
            'stock' => $request->stock,
            'gambar' => $imageName,
        ]);

        return redirect()->route('admin')->with('success', 'Product created successfully.');
    }


   // Display the specified product
   public function show($id)
   {
       $product = Product::findOrFail($id);
       return view('admin.show_product', compact('product'));
   }

   // Show the form for editing the specified product
   public function edit($id)
   {
       $product = Product::findOrFail($id);
       return view('admin.edit_product', compact('product'));
   }

   // Update the specified product in storage
   public function update(Request $request, $id)
    {
        $request->validate([
            'slug' => 'required|unique:products,slug,' . $id . ',id_product',
            'nama_product' => 'required',
            'deskripsi_nama' => 'required',
            'deskripsi' => 'required',
            'kelebihan' => 'required',
            'harga' => 'required|numeric',
            'stock' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product = Product::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $imageName = $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move(public_path('images/products'), $imageName);
            $product->gambar = $imageName;
        }

        $product->update($request->except('gambar') + ['gambar' => $product->gambar]);

        return redirect()->route('admin')->with('success', 'Product created successfully.');
    }


   // Remove the specified product from storage
   public function destroy($id)
   {
       $product = Product::findOrFail($id);
       $product->delete();

       return redirect()->route('admin')->with('success', 'Product deleted successfully.');
   }

}
