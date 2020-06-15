<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mobil;
use App\JenisMobil;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $countUser = User::where('is_admin', 0)->count();
        $countMobil = Mobil::all()->count();

        $mobil = DB::table('mobil')->join('jenis_mobil', 'mobil.jenis_id', '=', 'jenis_mobil.id')
                                   ->select('mobil.*', 'mobil.nama as namaMobil', 'jenis_mobil.*')
                                   ->get();

        return view('home', ['countUser' => $countUser, 'countMobil' => $countMobil, 'mobil' => $mobil]);
    }
}
