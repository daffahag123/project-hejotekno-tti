<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
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

}
