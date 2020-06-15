<?php

namespace App\Http\Controllers;

use DB;
use App\Sewa;
use App\User;
use App\Mobil;
use Illuminate\Http\Request;

class SewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sewa = DB::table('sewa')->join('users', 'sewa.user_id', '=', 'users.id')
                                 ->select('sewa.*', 'sewa.id as sewaId', 'users.name as userName')
                                 ->get();

        return view('admin.sewa.index', ['sewa' => $sewa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $mobil = Mobil::all();

        return view('admin.sewa.create', ['user' => $user, 'mobil' => $mobil]);
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
            'user_id' => 'numeric|required',
            'tgl_sewa' => 'required',
            'tgl_selesai' => 'required',
            'jml_sewa' => 'required|numeric',
            'mobil_id' => 'required|numeric',
            'total' => 'required|numeric',
        ]);

        Sewa::create([
            'user_id' => $request->user_id,
            'tgl_sewa' => $request->tgl_sewa,
            'tgl_selesai' => $request->tgl_selesai,
            'jml_sewa' => $request->jml_sewa,
            'mobil_id' => $request->mobil_id,
            'total' => $request->total,
        ]);

        return redirect()->route('sewa.index')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function show(Sewa $sewa)
    {
        $user = User::all();
        $mobil = Mobil::all();
        $sewa = Sewa::find($sewa);

        return view('admin.sewa.show', ['user' => $user, 'mobil' => $mobil, 'sewa' => $sewa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function edit(Sewa $sewa)
    {
        $user = User::all();
        $mobil = Mobil::all();
        $sewa = Sewa::find($sewa);

        return view('admin.sewa.edit', ['user' => $user, 'mobil' => $mobil, 'sewa' => $sewa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sewa $sewa)
    {
        $data = Sewa::find($sewa)->first();

        $this->validate($request, [
            'user_id' => 'numeric|required',
            'tgl_sewa' => 'required',
            'tgl_selesai' => 'required',
            'jml_sewa' => 'required|numeric',
            'mobil_id' => 'required|numeric',
            'total' => 'required|numeric',
        ]);

            $data->user_id = $request->user_id;
            $data->tgl_sewa = $request->tgl_sewa;
            $data->tgl_selesai = $request->tgl_selesai;
            $data->jml_sewa = $request->jml_sewa;
            $data->mobil_id = $request->mobil_id;
            $data->total = $request->total;
            $data->save();

        return redirect()->route('sewa.index')->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sewa $sewa)
    {
        $data = Sewa::find($sewa);
        $data->delete();

        return redirect()->route('sewa.index')->with('success', 'Data berhasil dihapus!');
    }

    public function acc($id)
    {
        $data = Sewa::find($id);
        $data->acc = 1;
        $data->save();

        return redirect()->route('sewa.index')->with('success', 'Data berhasil diAcc!');
    }

    public function done($id)
    {
        $data = Sewa::find($id);
        $data->done = 1;
        $data->save();

        return redirect()->route('sewa.index')->with('success', 'Data berhasil diSelesaikan!');
    }

    public function pending()
    {
        $sewa = DB::table('sewa')->join('users', 'sewa.user_id', '=', 'users.id')
                                 ->where([
                                     ['acc', '=', '0'],
                                     ['done', '=', '0'],
                                 ])
                                 ->select('sewa.*', 'sewa.id as sewaId', 'users.name as userName')
                                 ->get();

        return view('admin.sewa.index', ['sewa' => $sewa]);
    }

    public function berjalan()
    {
        $sewa = DB::table('sewa')->join('users', 'sewa.user_id', '=', 'users.id')
                                 ->where([
                                     ['acc', '=', '1'],
                                     ['done', '=', '0'],
                                 ])
                                 ->select('sewa.*', 'sewa.id as sewaId', 'users.name as userName')
                                 ->get();

        return view('admin.sewa.index', ['sewa' => $sewa]);
    }

    public function selesai()
    {
        $sewa = DB::table('sewa')->join('users', 'sewa.user_id', '=', 'users.id')
                                 ->where([
                                     ['acc', '=', '1'],
                                     ['done', '=', '1'],
                                 ])
                                 ->select('sewa.*', 'sewa.id as sewaId', 'users.name as userName')
                                 ->get();

        return view('admin.sewa.index', ['sewa' => $sewa]);
    }
}
