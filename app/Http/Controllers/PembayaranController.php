<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Siswa;
use App\Models\Pembayaran;
use App\Models\Spp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pembayaran::with('siswa','petugas','spp')->get();
        // dd($data);
        return view('pembayaran.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $siswa = Siswa::all();
        $petugas = User::all();
        $spp = Spp::all();
        return view('pembayaran.create',compact('siswa','petugas','spp'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'tgl_bayar' => 'required',
            'siswa_id' => 'required',
            'juml_bayar' => 'required',
            'spp_id' => 'required' 
        ]);
        // dd($validated);
        if (!$validated) {
            return redirect()->to(route('pembayaran.create'))->withErrors($validated);
        }elseif($validated){
            $petugas =  Auth::user()->id;
            // dd($petugas);
            // dd($request->tgl_bayar);
            Pembayaran::create([
                'tgl_bayar' => $request->tgl_bayar,
                'juml_bayar' => $request->juml_bayar,
                'petugas_id' => $petugas,
                'siswa_id' => $request->siswa_id,
                'spp_id' => $request->spp_id
            ]);
            return redirect()->to(route('pembayaran.index'))->with('success','berhasil menambahkan data pembayaran');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Pembayaran::with('petugas','siswa','spp')->get()->find($id);
        return view('pembayaran.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
