<?php

namespace App\Http\Controllers;

use App\Models\Spp;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        // dd(Auth::user());        
        $siswa = Siswa::all()->count();
        $kelas = Kelas::all()->count();
        $pembayaran = Pembayaran::all()->count();
        $spp = Spp::all()->count();
        return view('Dashboard.admin',compact('siswa','kelas','pembayaran','spp'));
        // if(Auth::user()->role == 'admin'){
        // } elseif(Auth::user()->role == 'petugas'){
        //     echo 'adnda adalah petiias';
        // };
    }
}
