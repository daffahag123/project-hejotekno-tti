<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil ID customer dari session
        $id_customer = session()->get('id_customer');

        if (!$id_customer) {
            return view("home");
        }else{
            // Ambil data pesanan dengan status pending sesuai ID customer
            $pesanan = Pesanan::where('id_customer', $id_customer)
                            ->where('status', 'Pending')
                            ->with('product') // Eager load the related product
                            ->get();
            return view("home", compact("pesanan"));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
