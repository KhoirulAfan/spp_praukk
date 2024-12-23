<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = User::where('role','petugas')->get();
        $data = User::all();
        return view('petugas.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'username' => 'required|string',
            'password' => 'required',
            'role' => 'required'
        ]);
        if(!$validated){
            return redirect()->to(route('petugas.create'))->withErrors($validated);
        }
        User::create($request->all());
        return redirect()->to(route('petugas.index'))->with('success','berhasil menambahkan data petugas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = User::findOrFail($id);
        return view('petugas.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = User::findOrFail($id);
        return view('petugas.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'username' => 'required|string',
            'password' => 'required',
            'role' => 'required'
        ]);
        if(!$validated){
            return redirect()->to(route('petugas.create'))->withErrors($validated);
        }
        $petugas = User::findOrfail($id);
        $petugas->update($request->all());
        return redirect()->to(route('petugas.index'))->with('success','berhasil mengubah data petugas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hapus = User::findorfail($id)->delete();
        if(!$hapus){
            return redirect()->to(route('petugas.index'))->with('success','gagal menghapus data');
        }
        return redirect()->to(route('petugas.index'))->with('success','berhasil menghapus data');
    }
}
