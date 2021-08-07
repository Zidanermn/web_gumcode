<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Beranda_Controller extends Controller
{
    public function index()
    {
        $title = 'Beranda Admin';

        return view('admin.beranda.beranda_index',compact('title'));
    }

    public function keluar(){
        Auth::logout();

        return redirect('/');
    }
}
