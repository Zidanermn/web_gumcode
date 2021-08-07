<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Dashboard_Controller extends Controller
{
    public function mail(Request $request){
        $nama = $request->nama;
        $email = $request->email;
        $subject = $request->subject;
        $keterangan = $request->keterangan;

        DB::table('mail')->insert([
            'nama' => $nama,
            'email' => $email,
            'subject' => $subject,
            'keterangan' => $keterangan
        ]);

        Session::flash('pesan','Pesan berhasil dikirim, Terima Kasih');
        return redirect('/');
    }
}
