<?php

namespace App\Http\Controllers;

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
        $customers = \App\Models\Customer::all();
        // Loop through each transaction to get the details of the orders
        foreach ($transaksi as $trx) {
            $pesanan_ids = explode(',', $trx->pesanan);

            // Join the transaksi table with the customer table to get customer details
            $customer = \DB::table('transaksi')
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
            $trx->customer_name = $customer->name ?? 'Unknown'; // Assuming there's only one customer per transaction
        }

        return view('admin.tableTransaction', compact('transaksi'));
    }

    public function updateTransaction(Request $request, $id)
    {
        // Validasi input dari form
        $request->validate([
            'invoice' => 'required|string',
            'status' => 'required|string|in:Pending,Dibayar,Dikirim,Selesai,Dibatalkan,OnProcess',
        ]);

        // Temukan transaksi berdasarkan id
        $transaksi = \App\Models\Transaksi::findOrFail($id);

        // Perbarui transaksi.pdf (invoice)
        $transaksi->pdf = $request->input('invoice');
        $transaksi->save();

        // Perbarui status pesanan yang terkait dengan transaksi
        $pesanan_ids = explode(',', $transaksi->pesanan);
        \DB::table('pesanan')
            ->whereIn('id_pesanan', $pesanan_ids)
            ->update(['status' => $request->input('status')]);

        return redirect()->route('table.transaction')->with('success', 'Transaction updated successfully.');
    }



    public function tMessages(){
        $messages = \App\Models\Message::all();
        return view('admin.tableMessages', compact('messages'));
    }
    public function typo()
    {
        return view('admin.typography');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function updatetransaksi(){
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
