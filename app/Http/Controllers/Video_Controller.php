<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session; 

class Video_Controller extends Controller
{
    public function index(){
    	$title = 'List Video';
    	$video = DB::table('video')->get();

    	return view('admin.video.video_index',compact('title','video'));
    }

    public function store(Request $request){
        $keterangan = $request->keterangan;
        $link = $request->link;

    	DB::table('video')->insert([
            'keterangan'=>$keterangan,
            'link'=>$link,
    	]);

    	Session::flash('pesan','Video berhasil ditambah');
    	return redirect('admin/video');
    }

    public function edit($video_id){
    	$title = 'Edit Video';
    	$vd = DB::table('video')->where('video_id',$video_id)->first();

    	return view('admin.video.video_edit',compact('title','vd'));
    }

    public function update(Request $request, $video_id){
        $keterangan = $request->keterangan;
        $link = $request->link;

    	DB::table('video')->where('video_id',$video_id)->update([
            'keterangan'=>$keterangan,
            'link'=>$link,
    	]);

    	Session::flash('pesan','Video berhasil di update');
    	return redirect('admin/video');
    }
}
