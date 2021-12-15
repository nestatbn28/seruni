<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function indexadmin()
    {
        $pesan=Pesan::all();
        return view('home',compact(['pesan']));
    }

    public function indexuser()
    {
        $pesan=Pesan::where('status','Diterima');
        return view('user.home',compact(['pesan']));
    }

    public function store(Request $request)
    {
        Pesan::create([
            'pesan'=>$request->pesan,
            'status'=>' ',
        ]);
        return redirect('/user/pesan');
    }

    public function tolak($id)
    {
        $pesan=Pesan::find($id);
        $pesan->status='Ditolak';
        $pesan->save();
        return redirect()->intended('home');
    }
    public function terima($id)
    {
        $pesan=Pesan::find($id);
        $pesan->status='Diterima';
        $pesan->save();
        return redirect()->intended('home');
    }
}
