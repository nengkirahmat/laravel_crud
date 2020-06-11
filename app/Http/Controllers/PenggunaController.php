<?php

namespace App\Http\Controllers;

use App\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']="Daftar Pengguna";
        $data['pengguna']=Pengguna::all();
        return view("daftar_pengguna",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title']="Input Data Pengguna";
        return view("input_pengguna",$data);
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
        'nama_lengkap' => 'required',
        'jk' => 'required',
        'tgl_lahir' => 'required',
        'email' => 'email:rfc,dns',
        'username' => 'required',
        'password' => 'required',
        'repassword' => 'required',
        ]);

        Pengguna::create($request->all());

        return redirect('/pengguna')->with("status","Berhasil Disimpan...!!!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function show(Pengguna $pengguna)
    {
        $title="Detail Pengguna";
        return view("detail_pengguna",compact(array('pengguna','title')));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengguna $pengguna)
    {
        $title="Edit Data Pengguna";
        return view('edit_pengguna',compact(array('pengguna','title')));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengguna $pengguna)
    {
         $request->validate([
        'nama_lengkap' => 'required',
        'jk' => 'required',
        'tgl_lahir' => 'required',
        'email' => 'email:rfc,dns',
        'username' => 'required',
        'password' => 'required',
        'repassword' => 'required',
        ]);
        Pengguna::where("id_pengguna",$pengguna->id_pengguna)
                    ->update([
                        'nama_lengkap'=>$request->nama_lengkap,
                        'jk'=>$request->jk,
                        'tgl_lahir'=>$request->tgl_lahir,
                        'email'=>$request->email,
                        'username'=>$request->username,
                    ]);

        return redirect('/pengguna')->with("status","Berhasil Diperbaharui...!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengguna $pengguna)
    {
        Pengguna::destroy($pengguna->id_pengguna);
        return redirect("/pengguna")->with("status","Berhasil Dihapus...!!!");
    }
}
