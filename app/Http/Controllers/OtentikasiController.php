<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Product; 
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
        $data = Admin::where("email", $request->email)->first();
        if($data){
            if(Hash::check($request->password, $data->password)){
                // Store admin data in session
                session(['admin' => $data]);
                return redirect("/dashboard/table")->with("success", "Selamat anda berhasil Login");
            } else {
                return redirect('/login')->with('error', 'Email atau Password Salah');
            }
        } else {
            return redirect('/login')->with('error', 'Akun tidak ditemukan');
        }
    }
    
    

    // login customer proses otentikasi
    public function login2(Request $request){
        $data = Customer::where("email", $request->email)->first();
        if($data){
            if(Hash::check($request->password, $data->password)){
                // Store admin data in session
                session(['berhasil_login'=> true, 'customer' => $data]);
                return redirect("/")->with("success","Selamat anda berhasil Login");
            } else {
                return redirect('/loginUser')->with('error','Email atau Password Salah');
            }
        } else {
            return redirect('/loginUser')->with('error','Akun tidak ditemukan');
        }
    }
    
    
    //logout admin
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/login')->with('success','Berhasil Logout');
    }

    //logout customer
    public function logout2(Request $request){
        $request->session()->flush();
        return redirect('/loginUser')->with('success','Berhasil Logout');
    }


    //Otentikasi admin saaat menghapus suatu produk dari database
    public function deleteProduct(Request $request, $id){
        // Memastikan admin telah login
        if(!$request->session()->has('berhasil_login')){
            return redirect('/login')->with('error','Silakan login terlebih dahulu');
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

}
