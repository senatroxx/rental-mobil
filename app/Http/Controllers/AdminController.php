<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mobil;
use App\JenisMobil;
use App\Sewa;
use DB;
use Auth;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('is_admin');
    }

    public function index()
    {
        $countUser = User::where('is_admin', '0')->count();
        $countMobil = Mobil::all()->count();
        $countSewa = Sewa::all()->count();
        $countPending = Sewa::where('acc', '0')->count();

        $latestUser = User::where('is_admin', '0')->orderBy('id', 'desc')->limit(5)->get();
        $latestSewa = DB::table('sewa')->join('users', 'sewa.user_id', '=', 'users.id')->limit(5)->get();

        return view('admin.dashboard', ['countUser' => $countUser, 'countMobil' => $countMobil, 'countSewa' => $countSewa, 'countPending' => $countPending, 'latestUser' => $latestUser, 'latestSewa' => $latestSewa]);
    }
}
