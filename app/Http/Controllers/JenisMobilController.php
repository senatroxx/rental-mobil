<?php

namespace App\Http\Controllers;

use App\JenisMobil;
use Illuminate\Http\Request;

class JenisMobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenisMobil = JenisMobil::all();

        return view('admin.jenisMobil.index', ['jenisMobil' => $jenisMobil]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.jenisMobil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        JenisMobil::create($request->all());

        return redirect()->route('jenismobil.index')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JenisMobil  $jenisMobil
     * @return \Illuminate\Http\Response
     */
    public function show(JenisMobil $jenisMobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JenisMobil  $jenisMobil
     * @return \Illuminate\Http\Response
     */
    public function edit($id, JenisMobil $jenisMobil)
    {
        $jenisMobil2 = JenisMobil::where('id', $id)->first();

        // dd($jenisMobil);
        return view('admin.jenisMobil.edit', ['jenisMobil' => $jenisMobil2]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JenisMobil  $jenisMobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JenisMobil $jenisMobil)
    {
        $data = JenisMobil::find($request->id);
        $data->nama_jenis = $request->nama_jenis;
        $data->save();

        return redirect()->route('jenismobil.index')->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JenisMobil  $jenisMobil
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisMobil $jenisMobil, $id)
    {
        $data = JenisMobil::find($id);
        $data->delete();

        return redirect()->route('jenismobil.index')->with('success', 'Data berhasil dihapus!');
    }
}
