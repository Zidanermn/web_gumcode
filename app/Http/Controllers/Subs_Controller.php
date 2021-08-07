<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Subs_Controller extends Controller
{
    public function subs(Request $request){
        
        $email = $request->email;

        DB::table('subscribe')->insert([
            'email' => $email,
        ]);

        Session::flash('pesan','Pesan berhasil dikirim, Terima Kasih');
        return redirect('/');
    }
}
