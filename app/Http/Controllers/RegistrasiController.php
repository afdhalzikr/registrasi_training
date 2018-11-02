<?php

namespace App\Http\Controllers;
use App\Peserta;
use App\Kelas;
use App\Trainer;
use App\Kursus;
use App\DetailTraining;
use App\DetailKursus;
use Illuminate\Http\Request;

class RegistrasiController extends Controller
{

    public function create(Request $request){
        if ($request->role == 1) {
            $peserta = new Peserta;
            $peserta->nama = $request->nama;
            $peserta->no_hp = $request->no_hp;
            $peserta->email = $request->email;
            $peserta->save();

            $lastpeserta = Peserta::orderby('id','desc')->first();
            $detail =  new DetailTraining;
            $detail->peserta_id = $lastpeserta->id;
            $detail->kursus_id = $request->kursus;
            $file = $request->file('kartu');
            $file_name = 'id_card'.$lastpeserta->id.'.'.$file->getClientOriginalExtension();
            $path = $file->storeAs('images/ID-Card/trainee', $file_name);

            $trainee = Peserta::find($lastpeserta->id);
            $trainee->kartu_pengenal = $file_name;
            $detail->save();
        }
        else{
            $volunteer = new Trainer;
            $volunteer->nama = $request->nama;
            $volunteer->no_hp = $request->no_hp;
            $volunteer->email = $request->email;
            $volunteer->save();

            $last_trainer = Trainer::orderby('id','desc')->first();
            $detail =  new DetailKursus;
            $detail->trainer_id = $last_trainer->id;
            $detail->kursus_id = $request->kursus;
            $detail->save();

            $vol = Trainer::find($last_trainer->id);
            $file = $request->file('kartu');
            $file_name = 'id_card-'.$last_trainer->id.'.'.$file->getClientOriginalExtension();
            $vol->kartu_pengenal = $file_name;
            $path = $file->storeAs('images/ID-Card/trainer', $file_name);
            $vol->save();
        }

        return redirect('/')->with(['success' => 'Berhasil Melakukan Pendaftaran']);
    }
}
