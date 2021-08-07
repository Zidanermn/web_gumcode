<?php

namespace App\Http\Controllers;

use App\Head;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session; 

class Header_Controller extends Controller
{
    public function index()
    {
        $title = 'Manage Header';
        $data = Head::latest()->paginate(4);
        return view('admin.header.header_index', compact('data','title'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'keterangan' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $image = $request->file('gambar');
        $new_image = rand().'.'.$image->getClientOriginalExtension();

        $data_pf = array(
            'keterangan' => $request->keterangan,
            'gambar' => $new_image,
        );

        $image->move(public_path('foto'), $new_image);
        Head::create($data_pf);

        return redirect('admin/header')->with('sukses','data berhasil disimpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit Data Header';
        $data = Head::find($id);
        return view('admin.header.header_edit', compact('data','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $old_image_name = $request->hidden_image;
        $image = $request->file('gambar');

        if($image != '')
        {
            $request->validate([
                'keterangan' => 'required',
                'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048'
            ]); 
            $image_name = $old_image_name;
            $image->move(public_path('foto'), $image_name);

        }else{

            $request->validate([
                'keterangan' => 'required',
            ]); 
            
            $image_name = $old_image_name;

        }

        $data_pf = array(
            'keterangan' => $request->keterangan,
            'gambar' => $image_name
        );

        $data = Head::find($id);
        $data->update($data_pf);

        Session::flash('pesan','Data berhasil di update');
        return redirect('admin/header');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

    

