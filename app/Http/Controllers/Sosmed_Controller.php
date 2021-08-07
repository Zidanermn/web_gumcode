<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session; 

class Sosmed_Controller extends Controller
{
    public function index(){
    	$title = 'List Sosmed';
    	$sosmed = DB::table('sosmed')->get();

    	return view('admin.sosmed.sosmed_index',compact('title','sosmed'));
    }

    public function store(Request $request){
        $keterangan = $request->keterangan;
        $instagram = $request->instagram;
        $wa = $request->wa;

    	DB::table('sosmed')->insert([
            'keterangan'=>$keterangan,
            'instagram'=>$instagram,
            'wa'=>$wa,
    	]);

    	Session::flash('pesan','Sosmed berhasil ditambah');
    	return redirect('admin/sosmed');
    }

    public function edit($sosmed_id){
    	$title = 'Edit Sosmed';
    	$sd = DB::table('sosmed')->where('sosmed_id',$sosmed_id)->first();

    	return view('admin.sosmed.sosmed_edit',compact('title','sd'));
    }

    public function update(Request $request, $sosmed_id){
        $keterangan = $request->keterangan;
        $instagram = $request->instagram;
        $wa = $request->wa;

    	DB::table('sosmed')->where('sosmed_id',$sosmed_id)->update([
            'keterangan'=>$keterangan,
            'instagram'=>$instagram,
            'wa'=>$wa,
    	]);

    	Session::flash('pesan','Sosmed berhasil di update');
    	return redirect('admin/sosmed');
    }
}
