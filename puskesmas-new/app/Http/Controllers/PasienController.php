<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    public function index(){
        $pasiens = Pasien::all();
        return view('admin.pasien.index', compact('pasiens'));
    }
}
