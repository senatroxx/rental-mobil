<?php

namespace App\Http\Controllers;

use App\Mobil;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getHarga()
    {
        $id = $_GET['id'];
        $data = Mobil::find($id);
        
        $harga = $data->biaya;
        return response()->json(array('harga' => $harga), 200);
    }
}
