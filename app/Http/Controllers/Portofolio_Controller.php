<?php

namespace App\Http\Controllers;

use App\Porto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class Portofolio_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'List Portofolio';
        $data = Porto::latest()->paginate(4);
        return view('admin.portofolio.portofolio_index', compact('data','title'));
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
            'nama' => 'required',
            'jenis' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $image = $request->file('foto');
        $new_image = rand().'.'.$image->getClientOriginalExtension();

        $data_pf = array(
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'foto' => $new_image,
        );

        $image->move(public_path('foto'), $new_image);
        Porto::create($data_pf);

        return redirect('admin/portofolio')->with('sukses','data berhasil disimpan');

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
        $title = 'Edit Data Portofolio';
        $data = Porto::find($id);
        return view('admin.portofolio.portofolio_edit', compact('data','title'));
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
        $image = $request->file('foto');

        if($image != '')
        {
            $request->validate([
                'nama' => 'required',
                'jenis' => 'required',
                'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048'
            ]); 
            $image_name = $old_image_name;
            $image->move(public_path('foto'), $image_name);

        }else{

            $request->validate([
                'nama' => 'required',
                'jenis' => 'required',
            ]); 
            
            $image_name = $old_image_name;

        }

        $data_pf = array(
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'foto' => $image_name
        );

        $data = Porto::find($id);
        $data->update($data_pf);

        Session::flash('pesan','Data berhasil di update');
        return redirect('admin/portofolio');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =Porto::find($id);
        File::delete('foto/' .$data->foto);

        $data->delete($data);

        Session::flash('pesan','Data berhasil di update');
        return redirect('admin/portofolio');
    }
}

    