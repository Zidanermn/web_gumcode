<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Mail_Controller extends Controller
{
    public function index(){
        $title = 'List Pesan Yang Masuk';
        $mail = DB::table('mail')->get();

        return view('admin.mail.mail_index',compact('title','mail'));
    }
}
