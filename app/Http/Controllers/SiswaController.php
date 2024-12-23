<?php

namespace App\Http\Controllers;

use App\Models\Spp;
use App\Models\Kelas;
use App\Models\Pembayaran;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Siswa::all();   
        $test = Siswa::with('kelas')->get();
        // dd($test);
        return view('siswa.index',compact('data','test'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('siswa.create',compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'nisn' => 'required|integer',
            'nis' => 'required|integer',
            'nama' => 'required|string',
            'no_telp' => 'required|numeric',
            'alamat' => 'required|string',
            'kelas_id' => 'required|integer'
        ]);
        if(!$validated){
            return redirect()->to(route('siswa.create'))->withErrors($validated);
        }
        Siswa::create($validated);
        return redirect()->to(route('siswa.index'))->with('success','berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $data = Siswa::findOrFail($id);
        $data = Siswa::with('kelas')->get()->find($id);
        $sppall = Spp::all();
        
        $spp = [];

        foreach($sppall as $sppa){
            $dibayar = Pembayaran::where('siswa_id',$id)->where('spp_id',$sppa->id)->exists();            
            $spp[] = [
                'nominal' => $sppa->nominal,
                'tahun' => $sppa->tahun,
                'status' => $dibayar ? 'dibayar' : 'belumbayar'
            ];
        }
        
        // dd($spp);
                 
        return view('siswa.show',compact('data','spp'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kelas = Kelas::all();
        $data = Siswa::findOrFail($id);
        return view('siswa.edit',compact('data','kelas'));
        // return redirect()->to(route('siswa.edit',compact('data')));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Siswa::findOrFail($id);
        $validated = $request->validate([
            'nisn' => 'required|integer',
            'nis' => 'required|integer',
            'nama' => 'required|string',
            'no_telp' => 'required|numeric',
            'alamat' => 'required|string',
            'kelas_id' => 'required|integer'
        ]);
        if(!$validated){
            return redirect()->to(route('siswa.update'))->withErrors($validated);
        }
        $data->update($validated);
        return redirect()->to(route('siswa.index'))->with('success','berhasil merubah data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Siswa::findOrfail($id);
        $data->delete();
        return redirect()->to(route('siswa.index'))->with('success','berhasil menghapus data');
    }
}
