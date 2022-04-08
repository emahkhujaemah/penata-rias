<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $this->middleware('auth');

        return view('lokasi.index', [
            'lokasis' => Lokasi::all(),
        ]);
    }

    public function lokasi()
    {
        return view('pengunjung.lokasi', [
            'lokasis' => Lokasi::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lokasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $validatedData = $request->validate([
            'lokasi' => 'required',
            'keterangan' => 'required',
        ]);
        
        Lokasi::create($validatedData);

        return redirect('lokasi')->with('success', 'Lokasi telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lokasi  $lokasi
     * @return \Illuminate\Http\Response
     */
    public function show(Lokasi $lokasi)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lokasi  $lokasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Lokasi $lokasi)
    {
        return view('lokasi.edit', [
            'lokasi' => $lokasi,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lokasi  $lokasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'lokasi' => 'required',
            'keterangan' => 'required',
        ]);
        
        $lokasi = Lokasi::find($id)
            ->update($validatedData);

        return redirect('lokasi')->with('success', 'Lokasi telah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lokasi  $lokasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($lokasi_id)
    {
        $lokasi = Lokasi::where('id',$lokasi_id)->first();
        $lokasi->delete();     

        return redirect('lokasi')->with('success', 'Portofolio telah dihapus');
    }
}
