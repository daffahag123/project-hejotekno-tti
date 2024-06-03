<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function signup(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:customers',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect('/signup')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Cek apakah email sudah ada di database
        if (Customer::where('email', $request->email)->exists()) {
            return redirect('/signup')
                        ->withErrors(['error' => 'Email ini sudah terdaftar.'])
                        ->withInput();
        }

        // Buat akun baru
        $customer = new Customer;
        $customer->username = $request->username;
        $customer->email = $request->email;
        $customer->password = Hash::make($request->password);
        $customer->save();

        return redirect('/loginUser')->with('success', 'Selamat, Anda berhasil membuat akun.');
    }

    public function addcart(Request $request)
    {
        // Retrieve the customer ID from the session
        $id_customer = $request->session()->get('id_customer');

        if (!$id_customer) {
            return response()->json(['error' => 'Customer ID not found in session.'], 400);
        }

        // Validate the incoming request data
        $request->validate([
            'id_product' => 'required|integer|exists:products,id_product',
            'jumlah_item_dipesan' => 'required|integer|min:1',
            'jumlah_harga' => 'required|numeric|min:0',
        ]);

        // Create a new Pesanan (order) record
        $pesanan = new Pesanan();
        $pesanan->id_customer = $id_customer;
        $pesanan->id_product = $request->input('id_product');
        $pesanan->jumlah_item_dipesan = $request->input('jumlah_item_dipesan');
        $pesanan->jumlah_harga = $request->input('jumlah_harga');
        $pesanan->tanggal_pesananan_dibuat = now();
        $pesanan->status = 'Pending';
        $pesanan->save();

        return response()->json(['success' => 'Item added to cart successfully!']);
    }
}
