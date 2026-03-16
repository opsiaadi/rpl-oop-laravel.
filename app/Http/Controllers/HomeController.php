<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
    // $data = [
    //     'nama' => 'Budiono',
    //     'pekerjaan' => 'guru',
    // ];
    // return view('home')->with($data);
    $nama = "Teddy";
    $pekerjaan = "dev";
    $phone = '08954765895';
    return view('home', compact('nama', 'pekerjaan', 'phone'));
   }
   public function contact()

   {
    return view('contact');
   }
}
