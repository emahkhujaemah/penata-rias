<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use App\Models\User;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('portofolio.index', [
            'portofolios' => Portofolio::all(),
            // 'profile' => User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portofolio.create', [
            'profiles' => User::all(),
        ]);
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
            'user_id' => 'required',
            'pengalaman' => 'required',
            'kemampuan' => 'required',
            'aktivitas_sekarang' => 'required',
            'gambar_utama' => 'image|file|max:1024',
            // 'gambar1' => 'image|file|max:1024',
            // 'gambar2' => 'image|file|max:1024',
            // 'gambar3' => 'image|file|max:1024',
        ]);

        if($request->file('gambar_utama')){
            $validatedData['gambar_utama'] = $request->file('gambar_utama')->store('gambar_utama');
        }
        
        Portofolio::create($validatedData);

        return redirect('portofolio')->with('success', 'Profil telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portofolio $portofolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portofolio $portofolio)
    {
        return view('portofolio.create');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portofolio $portofolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portofolio $portofolio)
    {
        //
    }
}
