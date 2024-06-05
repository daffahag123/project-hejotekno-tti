<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Product; 
use App\Models\Transaksi; 
use App\Models\Message; 
use App\Models\Pesanan; 
use Illuminate\Support\Facades\Hash;

class OtentikasiController extends Controller
{   
    public function showSignupForm()
    {
        return view('signup');
    }

    //login admin view
    public function index(){
        return view("login");
    }

    //login customer view
    public function index2(){
        return view("loginUser");
    }

    //login admin proses otentikasi
    public function login(Request $request){
        // Check if input is an email or a username
        if (filter_var($request->input('login'), FILTER_VALIDATE_EMAIL)) {
            $data = Admin::where("email", $request->input('login'))->first();
        } else {
            $data = Admin::where("username", $request->input('login'))->first();
        }
    
        if ($data) {
            if (Hash::check($request->password, $data->password)) {
                // Store admin data in session
                session(['berhasil_login'=> true, 'admin' => $data]);
                return redirect("/dashboard/table")->with("success", "Selamat anda berhasil Login");
            } else {
                return redirect('/admin/loginAdmin')->with('error', 'Username/Email atau Password Salah');
            }
        } else {
            return redirect('/admin/loginAdmin')->with('error', 'Akun tidak ditemukan');
        }
    }
    
    
    
    

    // login customer proses otentikasi
    public function login2(Request $request)
    {
        // Check if input is an email or a username
        if (filter_var($request->input('login'), FILTER_VALIDATE_EMAIL)) {
            $data = Customer::where("email", $request->input('login'))->first();
        } else {
            $data = Customer::where("username", $request->input('login'))->first();
        }

        if ($data) {
            if (Hash::check($request->password, $data->password)) {
                // Store customer data in session
                session(['berhasil_login_user' => true, 'customer' => $data, 'id_customer' => $data->id_customer]);
                return redirect("/")->with("success", "Selamat anda berhasil Login");
            } else {
                return redirect('/loginUser')->with('error', 'Username/Email atau Password Salah');
            }
        } else {
            return redirect('/loginUser')->with('error', 'Akun tidak ditemukan');
        }
    }


    
    //logout admin
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/admin/loginAdmin')->with('success','Berhasil Logout');
    }

    //logout customer
    public function logout2(Request $request){
        $request->session()->flush();
        return redirect('/')->with('success','Berhasil Logout');
    }


    //Otentikasi admin saaat menghapus suatu produk dari database
    public function deleteProduct(Request $request, $id){
        // Memastikan admin telah login
        if(!$request->session()->has('berhasil_login')){
            return redirect('/admin/loginAdmin')->with('error','Silakan login terlebih dahulu');
        }

        // Verifikasi email dan password admin sebelum menghapus
        $admin = Admin::where('email', $request->adminEmail)->first();
        if(!$admin || !Hash::check($request->adminPassword, $admin->password)){
            return redirect()->back()->with('error', 'Email atau Password Admin salah');
        }
        // Hapus produk
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin')->with('success', 'Produk berhasil dihapus');
    }

    public function deleteTransaction(Request $request, $id)
    {
        // Memastikan admin telah login
        if (!$request->session()->has('berhasil_login')) {
            return redirect('/admin/loginAdmin')->with('error', 'Silakan login terlebih dahulu');
        }

        // Verifikasi email dan password admin sebelum menghapus
        $admin = Admin::where('email', $request->adminEmail)->first();
        if (!$admin || !Hash::check($request->adminPassword, $admin->password)) {
            return redirect()->back()->with('error', 'Email atau Password Admin salah');
        }

        // Ambil transaksi yang akan dihapus
        $transaction = Transaksi::findOrFail($id);

        // Pisahkan string ID pesanan menjadi array
        $pesananIds = explode(',', $transaction->pesanan);

        // Hapus entri di tabel pesanan yang memiliki id_transaksi yang sesuai
        Pesanan::whereIn('id_pesanan', $pesananIds)->delete();

        // Hapus transaksi
        $transaction->delete();

        return redirect()->route('table.transaction')->with('success', 'Transaksi berhasil dihapus');
    }

    public function deleteMessage(Request $request, $id)
    {
        // Memastikan admin telah login
        if (!$request->session()->has('berhasil_login')) {
            return redirect('/admin/loginAdmin')->with('error', 'Silakan login terlebih dahulu');
        }
    
        // Verifikasi email dan password admin sebelum menghapus
        $admin = Admin::where('email', $request->adminEmail)->first();
        if (!$admin || !Hash::check($request->adminPassword, $admin->password)) {
            return redirect()->back()->with('error', 'Email atau Password Admin salah');
        }
    
        // Ambil pesan yang akan dihapus
        $message = Message::findOrFail($id);
    
        // Hapus pesan
        $message->delete();
    
        return redirect()->route('table.messages')->with('success', 'Pesan berhasil dihapus');
    }

    public function deleteUser(Request $request, $id)
    {
        // Verifikasi email dan password admin sebelum menghapus
        $admin = Admin::where('email', $request->adminEmail)->first();
        if (!$admin || !Hash::check($request->adminPassword, $admin->password)) {
            return redirect()->back()->with('error', 'Email atau Password Admin salah');
        }

        // Ambil user yang akan dihapus
        $user = Customer::findOrFail($id);

        // Hapus user
        $user->delete();

        return redirect()->route('table.user')->with('success', 'User berhasil dihapus');
    }

    
}
