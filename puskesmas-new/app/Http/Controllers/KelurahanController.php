<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelurahan;

class KelurahanController extends Controller
{
    public function index(){
        $kelurahans = Kelurahan::all();
        return view('admin.kelurahan.index', compact('kelurahans'));
    }
}
