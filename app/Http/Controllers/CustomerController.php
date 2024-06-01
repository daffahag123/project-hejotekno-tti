<?php

namespace App\Http\Controllers;
use App\Models\Customer;
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
}
