<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function form(){
        return view('form');
    }

    public function sapa(Request $request){
        //var_dump($request);
        //dd($request['alamat']);
        return "Halo";
    }

    public function sapa_post(Request $request){
        //dd($request->all());
        $selamat = "<h1>Selamat Datang </h1>";
        $selamat1 = "<h2>Terimakasih telah bergabung di sanberbook. Social Media kita bersama!</h2>";
        $nama = $request["nama"];
        $nama_akhir = $request["nama_akhir"];
        return "$selamat"."$nama" . " $nama_akhir" . "<br>" . "$selamat1";
    }

    public function signup(){
        return view('signup');
    }
}
