<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Materi;
use App\Models\User;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Jawaban;
use App\Models\Latihan;
use App\Models\JawabanLatihan;
use App\Models\SoalLatihan;
use App\Models\JawabanPengetahuan;
use Illuminate\Support\Facades\DB;
use Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use File;

class AppController extends Controller
{
    public function index()
    {
        return view('front.index',[
            'materis'=> Materi::orderBy('created_at','DESC')->where('status', 'publikasi')->get(),
            'user'=> User::where('id', Auth::user()->id)->first()
        ]);
    }

    public function lembarKerja($id)
    {
        $materi = Materi::find($id);
        $rata2 = null;

        $idPengetahuan = [];
        foreach($materi->pengetahuans as $data) {
            $idPengetahuan[] = $data->id;
        }

        $jawabanPengetahuan = JawabanPengetahuan::whereIn('pengetahuan_id', $idPengetahuan)->where('user_id', Auth::user()->id)->where('nilai', '!=', null)->get();
        $jawabanPengetahuanCount = null;
        if($jawabanPengetahuan->count() > 0) {
            $jawabanPengetahuanCount = $jawabanPengetahuan->count();
            $jawabanPengetahuan = $jawabanPengetahuan->sum('nilai');
            $rata2 = $jawabanPengetahuan * 0.3;
        } else {
            $jawabanPengetahuan = '-';
        }

        $latihan = Latihan::where('materi_id', $id)->first();
        $idSoalLatihan = [];

        $jawaban = 'disabled';

        if($latihan) {
            foreach($latihan->soalLatihans as $data) {
                $idSoalLatihan[] = $data->id;
            }

            $jawaban = Jawaban::where('materi_id', $id)->where('user_id', Auth::user()->id)->where('tgl_jawab_latihan', '!=', null)->first();
            if($jawaban) {
                $jawaban = 'disabled';
            } else {
                $jawaban = 'enabled';
            }

            if($latihan->status == 'draft') {
                $jawaban = 'disabled';
            }
        }


        $jawabanLatihan = JawabanLatihan::whereIn('soal_latihan_id', $idSoalLatihan)->where('user_id', Auth::user()->id)->where('nilai', '!=', null)->get();
        $jawabanLatihanCount = null;
        if($jawabanLatihan->count() > 0) {
            $jawabanLatihanCount = $jawabanLatihan->count();
            $jawabanLatihan = $jawabanLatihan->sum('nilai');
            $rata2 = $jawabanLatihan * 0.7;
        } else {
            $jawabanLatihan = '-';
        }

        if($jawabanPengetahuan != '-' && $jawabanLatihan != '-') {
            $rata2 = round(($jawabanPengetahuan * 0.3) + ($jawabanLatihan * 0.7) , 2);
        }

        return view('front.lembar_kerja',[
            'materi'=> $materi,
            'user'=> User::where('id', Auth::user()->id)->first(),
            'jawaban' => $jawaban,
            'jawabanPengetahuan' => $jawabanPengetahuan,
            'jawabanLatihan' => $jawabanLatihan,
            'rata2' => $rata2
        ]);
    }

    public function lembarKerjaPengetahuan($id)
    {
        $jawaban = Jawaban::where('materi_id', $id)->where('user_id', Auth::user()->id)->where('tgl_jawab_pengetahuan', '!=', null)->first();

        if($jawaban) {
            $jawaban = 'disabled';
        } else {
            $jawaban = 'enabled';
        }

        return view('front.lembar_kerja_pengetahuan',[
            'materi'=> Materi::where('id',$id)->first(),
            'jawaban' => $jawaban
        ]);
    }

    public function lembarKerjaLatihan($id)
    {
        $latihan = Latihan::find($id);

        return view('front.lembar_kerja_latihan',[
            'latihan_id'=>$id,
            'soals'=> SoalLatihan::where('latihan_id', $id)->get(),
            'user'=> User::where('id', Auth::user()->id)->first(),
            'materi_id' => $latihan->materi_id
        ]);
    }

    public function profile()
    {
        return view('front.profile');
    }

    public function profileUpdate(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        DB::beginTransaction();

        try {

            $user = User::find($id);

            $file = $request->file('gambar');
            $filefoto = time()."".$file->getClientOriginalName();
            $file_ext  = $file->getClientOriginalExtension();
            
            $local_gambar = "img/".$user->gambar;
            if(File::exists($local_gambar))
            {
                File::delete($local_gambar);
            }

            $tujuan_upload = 'img/';
            $file->move($tujuan_upload,$filefoto);
            $user->gambar = $filefoto;

            $user->save();

            DB::commit();
            return redirect()->back()->with('success','Gambar berhasil diganti');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error' , $e->getMessage());
        }

    }

    public function profilePassword(Request $request, $id)
    {
        $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        DB::beginTransaction();

        try {
            $user = User::find($id);
            $user->password = Hash::make($request->password);
            $user->save();
            DB::commit();
            return redirect()->back()->with('success','Ganti password berhasil');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error' , $e->getMessage());
        }
    }
    
    public function about()
    {
        return view('front.about', [
            'about' => About::find(1)
        ]);
    }
    
    public function report()
    {
        return view('front.report', [
            'materi' => Materi::all(),
            'jawabanPengetahuan' => JawabanPengetahuan::where('user_id', Auth::user()->id)->get(),
            'latihan' => Latihan::all(),
            'soalLatihan' => SoalLatihan::all(),
            'jawabanLatihan' => JawabanLatihan::where('user_id', Auth::user()->id)->get()
        ]);
    }
}