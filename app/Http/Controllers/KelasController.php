<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KelasController extends Controller
{
    public function index(){
        // if(Auth::user()->role == 'admin'){
        // } elseif(Auth::user()->role == 'petugas'){
        //     echo 'adnda adalah petiias';
        // };
        $data = Kelas::all();   
        // dd($data);         
        return view('kelas.index',compact('data'));
    }
    public function show($kelas){
        $data = Kelas::findOrFail($kelas);
        return view('kelas.show',compact('data'));
    }
    public function create(){
        return view('kelas.create');
    }
    public function store(Request $request){
        // dd($request);
        $request->validate([
            'nama_kelas' => 'required|string',
            'kompetensi_keahlian' => 'required|string'
        ]);
        Kelas::create([
            'nama_kelas' => $request->nama_kelas,
            'kompetensi_keahlian' => $request->kompetensi_keahlian
        ]);
        return redirect()->to(route('kelas.index'))->with('success','Berhasil Memasukkan Data');
        // dd($cek);
    }
    public function edit($id){
        $data = Kelas::findOrFail($id);
        // dd($data);
        return view('kelas.edit',compact('data'));
    }
    public function update(Request $request , $id){
        $request->validate([
            'nama_kelas' => 'required|string',
            'kompetensi_keahlian' => 'required|string'
        ]);      
        $kelas = Kelas::findOrFail($id);
        $kelas->update([
            'nama_kelas' => $request->nama_kelas,
            'kompetensi_keahlian' => $request->kompetensi_keahlian
        ]);
        return redirect()->to(route('kelas.index'))->with('success','Berhasil mengubah Data');
    }
    public function destroy($id){
        $kelas = Kelas::findOrfail($id);
        // dd($kelas);
        $kelas->delete();
        return redirect()->to(route('kelas.index'))->with('success', 'Berhasil Menghapus');
    }
}
