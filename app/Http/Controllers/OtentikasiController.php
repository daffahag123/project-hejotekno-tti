<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Product; 
use Illuminate\Support\Facades\Hash;

class OtentikasiController extends Controller
{
    public function index(){
        return view("login");
    }
    public function login(Request $request){
        $data = Admin::where("email", $request->email)->firstOrFail();
        if($data){
            if(Hash::check($request->password, $data->password)){
                session(['berhasil_login'=> true]);
                return redirect("/dashboard/table")->with("success","Selamat anda berhasil Login");
            }else {
                return redirect('/login')->with('error','Email atau Pssword Salah');
            }

        }
    }
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/login')->with('success','Berhasil Logout');
    }

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
