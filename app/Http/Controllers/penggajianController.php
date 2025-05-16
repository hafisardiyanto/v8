<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class penggajianController extends Controller
{
    

{
    public function index()
    {
        $karyawans = Karyawan::all();
        return view('penggajian.index', compact('karyawans'));
    }

    public function hitungGaji(Request $request)
    {
        $karyawan = Karyawan::find($request->id);
        $gaji_bersih = $karyawan->gaji_pokok; // Contoh sederhana

        return view('penggajian.detail', compact('karyawan', 'gaji_bersih'));
    }
}
}

