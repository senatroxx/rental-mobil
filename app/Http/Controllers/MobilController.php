<?php

namespace App\Http\Controllers;

use DB;
use App\Mobil;
use App\JenisMobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil = DB::table('mobil')->join('jenis_mobil', 'jenis_mobil.id', '=', 'mobil.jenis_id')->select('mobil.*', 'jenis_mobil.id as jenisMobil_id', 'jenis_mobil.nama_jenis')->get();

        return view('admin.mobil.index', ['mobil' => $mobil]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenisMobil = JenisMobil::all();

        return view('admin.mobil.create', ['jenisMobil' => $jenisMobil]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'string|required',
            'jenis_id' => 'numeric|required',
            'no_polisi' => 'string|required',
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg',
            'tahun' => 'required|numeric',
            'biaya' => 'required|numeric',
            'transmisi' => 'required|string',
        ]);

        $file = $request->file('gambar');
        $nama_file = time()."-".$file->getClientOriginalName();
        $tujuan_upload = 'img/car';
        $file->move($tujuan_upload,$nama_file);

        Mobil::create([
            'nama' => $request->nama,
            'jenis_id' => $request->jenis_id,
            'no_polisi' => $request->no_polisi,
            'gambar' => $nama_file,
            'tahun' => $request->tahun,
            'biaya' => $request->biaya,
            'transmisi' => $request->transmisi,
        ]);

        return redirect()->route('mobil.index')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function show(Mobil $mobil)
    {
        $mobil = Mobil::find($mobil);
        $jenisMobil = JenisMobil::all();

        return view('admin.mobil.show', ['mobil' => $mobil, 'jenisMobil' => $jenisMobil]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function edit(Mobil $mobil)
    {
        $mobil = Mobil::find($mobil);
        $jenisMobil = JenisMobil::all();

        return view('admin.mobil.edit', ['mobil' => $mobil, 'jenisMobil' => $jenisMobil]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mobil $mobil)
    {
        $data = Mobil::find($mobil)->first();

        $this->validate($request, [
            'nama' => 'string|required',
            'jenis_id' => 'numeric|required',
            'no_polisi' => 'string|required',
            'tahun' => 'required|numeric',
            'biaya' => 'required|numeric',
            'transmisi' => 'required|string',
        ]);
        
        if ($request->file('gambar') != NULL) {
            $file = $request->file('gambar');
            $nama_file = time()."-".$file->getClientOriginalName();
            if ($data->gambar != $nama_file) {
                $tujuan_upload = 'car';
                $file->move($tujuan_upload,$nama_file);
            }
            $data->gambar = $nama_file;
        }
            
        $data->nama = $request->nama;
        $data->jenis_id = $request->jenis_id;
        $data->no_polisi = $request->no_polisi;
        $data->tahun = $request->tahun;
        $data->biaya = $request->biaya;
        $data->transmisi = $request->transmisi;
        $data->save();

        return redirect()->route('mobil.index')->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mobil $mobil)
    {
        $data = Mobil::find($mobil);
        $data->delete();

        return redirect()->route('mobil.index')->with('success', 'Data berhasil dihapus!');
    }
}
