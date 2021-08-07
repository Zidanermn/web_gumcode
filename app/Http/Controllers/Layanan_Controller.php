<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class Layanan_Controller extends Controller
{
    public function index(){
    	$title = 'List Layanan';
    	$layanan = DB::table('layanan')->get();

    	return view('admin.layanan.layanan_index',compact('title','layanan'));
    }

    public function store(Request $request){
		$client = $request->client;
		$project = $request->project;
		$support = $request->support;
		$worker = $request->worker;

    	DB::table('layanan')->insert([
    		'client'=>$client,
			'project'=>$project,
			'support'=>$support,
    		'worker'=>$worker
    	]);

    	Session::flash('pesan','Data berhasil ditambah');
    	return redirect('admin/layanan');
    }

    public function edit($layanan_id){
    	$title = 'Edit Layanan';
    	$ly = DB::table('layanan')->where('layanan_id',$layanan_id)->first();

    	return view('admin.layanan.layanan_edit',compact('title','ly'));
    }

    public function update(Request $request, $layanan_id){
    	$client = $request->client;
		$project = $request->project;
		$support = $request->support;
		$worker = $request->worker;

    	DB::table('layanan')->where('layanan_id',$layanan_id)->update([
    		'client'=>$client,
			'project'=>$project,
			'support'=>$support,
    		'worker'=>$worker
    	]);

    	Session::flash('pesan','Data berhasil di update');
    	return redirect('admin/layanan');
    }

}
