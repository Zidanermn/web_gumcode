<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Subscribe_Controller extends Controller
{
    public function index(){
        $title = 'List Subscriber Yang Masuk';
        $subs = DB::table('subscribe')->get();

        return view('admin.subscribe.subscribe_index',compact('title','subs'));
    }
}
