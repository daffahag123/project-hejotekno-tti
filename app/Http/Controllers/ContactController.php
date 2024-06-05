<?php

namespace App\Http\Controllers;
use App\Models\Message;
use App\Models\Pesanan;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil ID customer dari session
        $id_customer = session()->get('id_customer');

        if (!$id_customer) {
            return view("contact");
        }else{
            // Ambil data pesanan dengan status pending sesuai ID customer
            $pesanan = Pesanan::where('id_customer', $id_customer)
                            ->where('status', 'Pending')
                            ->with('product') // Eager load the related product
                            ->get();
            return view("contact", compact("pesanan"));
        }
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Simpan pesan ke database
        Message::create([
            'sender_name' => $request->input('name'),
            'sender_email' => $request->input('email'),
            'message' => $request->input('message'),
            'datetime' => now(), // Gunakan Carbon untuk mendapatkan waktu saat ini
        ]);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Pesan Anda telah berhasil dikirim!');
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
