<?php

namespace App\Http\Controllers;

use App\Models\soal;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Soal.index')->with([
            'soal' => Soal::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('soal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama_mk' => 'required',
            'dosen' => 'required',
            'jumlah_soal' => 'required',
            'keterangan' => 'required',
        ]);

        $soal = new Soal;
        $soal->nama_mk = $request->nama_mk;
        $soal->dosen = $request->dosen;
        $soal->jumlah_soal = $request->jumlah_soal;
        $soal->keterangan = $request->keterangan;
        $soal->save();

        return to_route('Soal.index')->with('Success', 'Data Dosen Berhasil Di Tambahkan!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('soal.edit')->with([
            'soal' => Soal::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nama_mk' => 'required',
            'dosen' => 'required',
            'jumlah_soal' => 'required',
            'keterangan' => 'required',
        ]);

        $soal = Soal::find($id);
        $soal->nama_mk = $request->nama_mk;
        $soal->dosen = $request->dosen;
        $soal->jumlah_soal = $request->jumlah_soal;
        $soal->keterangan = $request->keterangan;
        $soal->save();

        return to_route('Soal.index')->with('Success', 'Data Dosen Berhasil Di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $soal = Soal::find($id);
        $soal->delete();

        return back()->with('Success', 'Data Dosen Berhasil Di Hapus!');
    }
}
