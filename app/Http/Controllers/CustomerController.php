<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Pesanan;
use App\Models\Product;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function signup(Request $request)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:customers',
            'email' => 'required|string|email|max:255|unique:customers',
            'password' => 'required|string|min:8|confirmed',
            'no_telephone' => 'required|string|max:20',
            'alamat' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/signup')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Create new account
        $customer = new Customer;
        $customer->name = $request->name;
        $customer->username = $request->username;
        $customer->email = $request->email;
        $customer->password = Hash::make($request->password);
        $customer->no_telephone = $request->no_telephone;
        $customer->alamat = $request->alamat;
        $customer->save();

        return redirect('/loginUser')->with('success', 'Selamat, Anda berhasil membuat akun.');
    }

    public function store(Request $request)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:customers',
            'email' => 'required|string|email|max:255|unique:customers',
            'password' => 'required|string|min:8|confirmed',
            'no_telephone' => 'required|string|max:20',
            'alamat' => 'required|string|max:255',
        ]);
    
        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            $errorMessages = implode(" ", $errors);
            
            return redirect()->route('table.user')
                        ->withErrors($validator)
                        ->withInput()
                        ->with('error', $errorMessages);
        }
    
        // Create new account
        $customer = new Customer;
        $customer->name = $request->name;
        $customer->username = $request->username;
        $customer->email = $request->email;
        $customer->password = Hash::make($request->password);
        $customer->no_telephone = $request->no_telephone;
        $customer->alamat = $request->alamat;
        $customer->save();
    
        return redirect()->route('table.user')->with('success', 'Selamat, Anda berhasil membuat akun.');
    }
    

    public function update(Request $request, $id)
    {
        // Find the user by ID
        $user = Customer::findOrFail($id);

        // Validate input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:customers,username,' . $user->id_customer . ',id_customer',
            'email' => 'required|string|email|max:255|unique:customers,email,' . $user->id_customer . ',id_customer',
            'password' => 'nullable|string|min:8|confirmed',
            'no_telephone' => 'required|string|max:20',
            'alamat' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            $errorMessages = implode("<br>", $errors);

            return redirect()->route('table.user')
                        ->withErrors($validator)
                        ->withInput()
                        ->with('error', $errorMessages);
        }

        // Update user
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
        $user->no_telephone = $request->no_telephone;
        $user->alamat = $request->alamat;
        $user->save();

        return redirect()->route('table.user')->with('success', 'User berhasil diupdate.');
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

        // Check if there is an existing order for the same product with a 'Pending' status
        $existingPesanan = Pesanan::where('id_customer', $id_customer)
                                   ->where('id_product', $request->input('id_product'))
                                   ->where('status', 'Pending')
                                   ->first();

        if ($existingPesanan) {
            // Update the existing order
            $existingPesanan->jumlah_item_dipesan += $request->input('jumlah_item_dipesan');
            $existingPesanan->jumlah_harga += $request->input('jumlah_harga');
            $existingPesanan->save();
            
            return response()->json(['success' => 'Item quantity updated in cart successfully!']);
        }

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

    public function addcart2(Request $request)
    {
        // Retrieve the customer ID from the session
        $id_customer = $request->session()->get('id_customer');

        if (!$id_customer) {
            return redirect()->back();
        }

        // Validate the incoming request data
        $request->validate([
            'id_product' => 'required|integer|exists:products,id_product',
            'jumlah_item_dipesan' => 'required|integer|min:1',
            'jumlah_harga' => 'required|numeric|min:0',
        ]);

        // Check if there is an existing order for the same product with a 'Pending' status
        $existingPesanan = Pesanan::where('id_customer', $id_customer)
                                   ->where('id_product', $request->input('id_product'))
                                   ->where('status', 'Pending')
                                   ->first();

        if ($existingPesanan) {
            // Update the existing order
            $existingPesanan->jumlah_item_dipesan += $request->input('jumlah_item_dipesan');
            $existingPesanan->jumlah_harga += $request->input('jumlah_harga');
            $existingPesanan->save();
            
            return redirect()->back();
        }

        // Create a new Pesanan (order) record
        $pesanan = new Pesanan();
        $pesanan->id_customer = $id_customer;
        $pesanan->id_product = $request->input('id_product');
        $pesanan->jumlah_item_dipesan = $request->input('jumlah_item_dipesan');
        $pesanan->jumlah_harga = $request->input('jumlah_harga');
        $pesanan->tanggal_pesananan_dibuat = now();
        $pesanan->status = 'Pending';
        $pesanan->save();

        return redirect()->back();
    }

    public function deccart(Request $request)
    {
        // Retrieve the customer ID from the session
        $id_customer = $request->session()->get('id_customer');

        if (!$id_customer) {
            return redirect()->back();
        }

        // Validate the incoming request data
        $request->validate([
            'id_product' => 'required|integer|exists:products,id_product',
            'jumlah_harga' => 'required|numeric|min:0',
        ]);

        // Check if there is an existing order for the same product with a 'Pending' status
        $existingPesanan = Pesanan::where('id_customer', $id_customer)
                                ->where('id_product', $request->input('id_product'))
                                ->where('status', 'Pending')
                                ->first();

        if ($existingPesanan) {
            if ($existingPesanan->jumlah_item_dipesan > 1) {
                // Reduce the quantity
                $existingPesanan->jumlah_item_dipesan -= 1;
                $existingPesanan->jumlah_harga -= $request->input('jumlah_harga');
                $existingPesanan->save();
                
                return redirect()->back();
            } else {
                // Remove the item
                $existingPesanan->delete();
                
                return redirect()->back();
            }
        } else {
            return redirect()->back()->with(['error' => 'Item not found in cart.'], 404);
        }
    }


    public function checkout()
    {
        // Ambil ID customer dari session
        $id_customer = session()->get('id_customer');

        if (!$id_customer) {
            return redirect('/loginUser')->withErrors(['error' => 'Anda harus login terlebih dahulu untuk melanjutkan ke checkout.']);
        }

        // Ambil data pesanan dengan status pending sesuai ID customer
        $pesanan = Pesanan::where('id_customer', $id_customer)
                        ->where('status', 'Pending')
                        ->with('product') // Eager load the related product
                        ->get();

        // Lempar data ke view
        return view('checkout', compact('pesanan'));
    }

    public function transaksi(Request $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'product_ids' => 'required|string',
            'total' => 'required|numeric',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:500',
        ]);

        // Update data customer
        $customer = Customer::find(session()->get('id_customer'));
        if ($customer) {
            $customer->name = $validatedData['name'];
            $customer->email = $validatedData['email'];
            $customer->no_telephone = $validatedData['phone'];
            $customer->alamat = $validatedData['address'];
            $customer->save();
        }

        // Create new transaction
        $transaksi = new Transaksi();
        $transaksi->id_customer = session()->get('id_customer');
        $transaksi->pesanan = $validatedData['product_ids'];
        $transaksi->total = $validatedData['total'];
        $transaksi->waktu_transaksi = now();
        $transaksi->save();

        // Update the status of the orders (pesanan) to 'OnProcess'
        Pesanan::where('id_customer', $transaksi->id_customer)
            ->where('status', 'Pending')
            ->update(['status' => 'OnProcess']);

        return redirect('/')->with('success', 'Transaksi Anda telah berhasil disimpan dengan sukses! \nTerima kasih atas kepercayaan Anda. Kami akan segera menghubungi Anda untuk konfirmasi dan informasi lebih lanjut.');
    }


    public function history()
    {
        // Ambil id_customer dari session
        $id_customer = session()->get('id_customer');

        // Ambil data transaksi dari tabel transaksi sesuai id_customer
        $transaksi = \DB::table('transaksi')
                        ->where('id_customer', $id_customer)
                        ->get();

        // Loop melalui setiap transaksi untuk mendapatkan detail pesanan
        foreach ($transaksi as $trx) {
            $pesanan_ids = explode(',', $trx->pesanan); // Misalnya, "1,2" menjadi array [1, 2]

            // Ambil data produk berdasarkan id_product dari tabel pesanan
            $produk = \DB::table('pesanan')
                        ->join('products', 'pesanan.id_product', '=', 'products.id_product')
                        ->whereIn('pesanan.id_pesanan', $pesanan_ids)
                        ->select('products.nama_product','status')
                        ->get();

            // Gabungkan nama produk menjadi string untuk ditampilkan di view
            $trx->items_purchased = $produk->pluck('nama_product')->implode(', ');
            $trx->status = $produk->pluck('status')->unique()->implode(', ');
        }

        // Return view checkout dengan data transaksi yang telah diupdate
        $id_customer = session()->get('id_customer');

        if (!$id_customer) {
            return view("history");
        }else{
            // Ambil data pesanan dengan status pending sesuai ID customer
            $pesanan = Pesanan::where('id_customer', $id_customer)
                            ->where('status', 'Pending')
                            ->with('product') // Eager load the related product
                            ->get();
            return view("history", compact("pesanan", 'transaksi'));
        }
    }

}
