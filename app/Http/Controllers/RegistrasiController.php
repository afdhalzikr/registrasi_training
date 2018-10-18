<?php

namespace App\Http\Controllers;
use App\Peserta;
use App\Kelas;
use App\Kursus;
use App\DetailTraining;
use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    public function create(Request $request){
        $peserta = new Peserta;
        $peserta->nama = $request->nama;
        $peserta->no_hp = $request->no_hp;
        $peserta->email = $request->email;
        $peserta->save();   

        $lastpeserta = Peserta::orderby('id','desc')->first();
        $detail =  new DetailTraining;
        $detail->peserta_id = $lastpeserta->id;
        $detail->kursus_id = $request->kursus;
        $detail->save();
        return redirect('/')->with(['success' => 'Berhasil Melakukan Pendaftaran']);
    }
}
