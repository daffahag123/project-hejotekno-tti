<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin = session('admin');
        $product = \App\Models\Product::all();
        return view('admin.dashboard', compact('product','admin'));
    }
    public function tUser(){
        $users =  \App\Models\Customer::all();
        return view('admin.tableUser', compact('users'));
    }
    public function tTransaction()
    {

        $transaksi = \App\Models\Transaksi::all();
        $admins = \App\Models\Customer::all();
        // Loop through each transaction to get the details of the orders
        foreach ($transaksi as $trx) {
            $pesanan_ids = explode(',', $trx->pesanan);

            // Join the transaksi table with the customer table to get customer details
            $admin = \DB::table('transaksi')
                        ->join('customers', 'customers.id_customer', '=', 'transaksi.id_customer')
                        ->where('transaksi.id_transaksi', '=', $trx->id_transaksi)
                        ->select('customers.name')
                        ->first();

            // Join the pesanan table with the products table to get product details
            $produk = \DB::table('pesanan')
                        ->join('products', 'pesanan.id_product', '=', 'products.id_product')
                        ->whereIn('pesanan.id_pesanan', $pesanan_ids)
                        ->select('products.nama_product', 'pesanan.status')
                        ->get();

            // Combine product names into a string to display in the view
            $trx->items_purchased = $produk->pluck('nama_product')->implode(', ');
            $trx->status = $produk->pluck('status')->unique()->implode(', ');
            $trx->customer_name = $admin->name ?? 'Unknown'; // Assuming there's only one customer per transaction
        }

        return view('admin.tableTransaction', compact('transaksi'));
    }


    public function tMessages(){
        $messages = \App\Models\Message::all();
        return view('admin.tableMessages', compact('messages'));
    }
    public function typo()
    {
        return view('admin.typography');
    }

    public function signupadmin()
    {
        return view('admin.signadmin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function signup(Request $request)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:customers',
            'email' => 'required|string|email|max:255|unique:customers',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect('/admin/signup-regis')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Create new account
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->username = $request->username;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->save();

        return redirect('/admin/loginAdmin')->with('success', 'Selamat, Anda berhasil membuat akun.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
