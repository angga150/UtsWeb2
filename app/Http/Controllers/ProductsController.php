<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index() 
    {
        $products = Products::all();
        return view('admin.products.index', compact('products'));
    }
    
    public function create() 
    {
        return view('admin.products.create');
    }

    public function store(Request $request) 
    {
        $request->validate([
            'kode_barang' => 'required|unique:products,kode_barang|max:30',
            'nama_barang' => 'required|max:100',
            'satuan' => 'required|max:30',
            'harga' => 'required|numeric|min:0',
        ]);

        Products::create($request->all());
        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit($id) 
    {
        $product = Products::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, $id) 
    {
        $request->validate([
            'kode_barang' => 'required|unique:products,kode_barang,' . $id . '|max:30',
            'nama_barang' => 'required|max:100',
            'satuan' => 'required|max:30',
            'harga' => 'required|numeric|min:0',
        ]);

        $product = Products::findOrFail($id);
        $product->update($request->all());
        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil diperbarui.');
    }

    public function destroy($id) 
    {
        $product = Products::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil dihapus.');
    }


}
