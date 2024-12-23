<?php

namespace App\Http\Controllers;

use App\Models\Spp;
use Illuminate\Http\Request;

class SppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Spp::all();
        return view('Spp.index',compact('data'));
        // dd($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Spp.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'tahun' => 'required|integer|before:2045|after:2012',
            'nominal' => 'required|integer'
        ]);
        $cek = Spp::create($validated);
        // dd($cek);
        return redirect()->to(route('spp.index'))->with('success','berhasil memasukan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Spp::findOrFail($id);
        // dd($data);
        return view('Spp.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Spp::findOrFail($id);
        // dd($data);
        return view('Spp.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'tahun' => 'required|integer|before:2045|after:2012',
            'nominal' => 'required|integer'
        ]);
        $spp = Spp::findOrfail($id);
        $spp->update([
            'tahun' => $request->tahun,
            'nominal' => $request->nominal
        ]);
        return redirect()->to(route('spp.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $spp = Spp::findOrFail($id);
        $spp->delete();
        return redirect()->to(route('spp.index'));
    }
}
