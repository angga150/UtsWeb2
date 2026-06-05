<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('admin.customer.index', compact('customers'));
    }

    public function create()
    {
        return view('admin.customer.create');
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima
        $validatedData = $request->validate([
            'kode' => 'required|unique:customers,kode',
            'nama' => 'required',
            'alamat' => 'nullable',
            'email' => 'required|email|unique:customers,email',
            'telepon' => 'nullable|max:15',
        ]);

        // Simpan data ke database
        Customer::create($validatedData);

        // Redirect atau kembalikan response sesuai kebutuhan
        return redirect()->route('admin.customers.index')->with('success', 'Customer berhasil ditambahkan.');
    }

    public function edit($id)
    {
        // Temukan customer berdasarkan ID
        $customer = Customer::findOrFail($id);

        // Tampilkan form edit dengan data customer
        return view('admin.customer.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang diterima
        $validatedData = $request->validate([
            'kode' => 'required|unique:customers,kode,' . $id,
            'nama' => 'required',
            'alamat' => 'nullable',
            'email' => 'required|email|unique:customers,email,' . $id,
            'telepon' => 'nullable|max:15',
        ]);

        // Temukan customer berdasarkan ID dan update datanya
        $customer = Customer::findOrFail($id);
        $customer->update($validatedData);

        // Redirect atau kembalikan response sesuai kebutuhan
        return redirect()->route('admin.customers.index')->with('success', 'Customer berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Temukan customer berdasarkan ID dan hapus datanya
        $customer = Customer::findOrFail($id);
        $customer->delete();

        // Redirect atau kembalikan response sesuai kebutuhan
        return redirect()->route('admin.customers.index')->with('success', 'Customer berhasil dihapus.');
    }
}
