<?php

namespace App\Http\Controllers;

use App\Sewa;
use App\Mobil;
use App\User;
use Auth;
use DB;
use Illuminate\Http\Request;

class UserSewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sewa = DB::table('sewa')->join('users', 'sewa.user_id', '=', 'users.id')
                                 ->where('sewa.user_id', Auth::user()->id)
                                 ->select('sewa.*', 'sewa.id as sewaId', 'users.name as userName')
                                 ->orderBy('sewa.id', 'desc')
                                 ->get();

        return view('booking.index', ['sewa' => $sewa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mobil = Mobil::all();

        return view('booking.create', ['mobil' => $mobil]);
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
            'tgl_sewa' => 'required',
            'tgl_selesai' => 'required',
            'jml_sewa' => 'required|numeric',
            'mobil_id' => 'required|numeric',
            'total' => 'required|numeric',
        ]);

        Sewa::create([
            'user_id' => Auth::user()->id,
            'tgl_sewa' => $request->tgl_sewa,
            'tgl_selesai' => $request->tgl_selesai,
            'jml_sewa' => $request->jml_sewa,
            'mobil_id' => $request->mobil_id,
            'total' => $request->total,
        ]);

        return redirect()->route('booking.index')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function show(Sewa $sewa, $id)
    {
        $user = User::all();
        $mobil = Mobil::all();
        $sewa = Sewa::find($id);

        return view('booking.show', ['user' => $user, 'mobil' => $mobil, 'sewa' => $sewa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function edit(Sewa $sewa,$id)
    {
        $user = User::all();
        $mobil = Mobil::all();
        $sewa = Sewa::find($id);

        return view('booking.edit', ['user' => $user, 'mobil' => $mobil, 'sewa' => $sewa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sewa $sewa, $id)
    {
        $data = Sewa::find($id);

        $this->validate($request, [
            'tgl_sewa' => 'required',
            'tgl_selesai' => 'required',
            'jml_sewa' => 'required|numeric',
            'mobil_id' => 'required|numeric',
            'total' => 'required|numeric',
        ]);

            $data->tgl_sewa = $request->tgl_sewa;
            $data->tgl_selesai = $request->tgl_selesai;
            $data->jml_sewa = $request->jml_sewa;
            $data->mobil_id = $request->mobil_id;
            $data->total = $request->total;
            $data->save();

        return redirect()->route('booking.index')->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sewa $sewa, $id)
    {
        $data = Sewa::find($id);
        $data->delete();

        return redirect()->route('booking.index')->with('success', 'Data berhasil dihapus!');
    }

    public function pending()
    {
        $sewa = DB::table('sewa')->join('users', 'sewa.user_id', '=', 'users.id')
                                 ->where([
                                     ['users.id', '=', Auth::user()->id],
                                     ['acc', '=', '0'],
                                     ['done', '=', '0'],
                                 ])
                                 ->select('sewa.*', 'sewa.id as sewaId', 'users.name as userName')
                                 ->get();

        return view('booking.index', ['sewa' => $sewa]);
    }

    public function berjalan()
    {
        $sewa = DB::table('sewa')->join('users', 'sewa.user_id', '=', 'users.id')
                                 ->where([
                                     ['users.id', '=', Auth::user()->id],
                                     ['acc', '=', '1'],
                                     ['done', '=', '0'],
                                 ])
                                 ->select('sewa.*', 'sewa.id as sewaId', 'users.name as userName')
                                 ->get();

        return view('booking.index', ['sewa' => $sewa]);
    }

    public function selesai()
    {
        $sewa = DB::table('sewa')->join('users', 'sewa.user_id', '=', 'users.id')
                                 ->where([
                                     ['users.id', '=', Auth::user()->id],
                                     ['acc', '=', '1'],
                                     ['done', '=', '1'],
                                 ])
                                 ->select('sewa.*', 'sewa.id as sewaId', 'users.name as userName')
                                 ->get();

        return view('booking.index', ['sewa' => $sewa]);
    }
}
