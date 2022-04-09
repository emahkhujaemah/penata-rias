<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    public function home()
    {
        return view('pengunjung.home', [
            'profiles' => User::all(),
        ]);
    }

    public function index()
    {
        $this->middleware('auth');

        return view('profile.index', [
            'profile' => User::all(),
        ]);
    }

    public function artist()
    {
        return view('pengunjung.artist', [
            'profiles' => User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.create',[
            'portofolio' => Portofolio::all()
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
        // dd($request);
        // return $request;
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:5|max:255',
            'nama_pemilik' => 'required|max:100',
            'alamat' => 'required',
            'whatsapp' => 'required',
            'sosial_media' => 'required',
            'profil_bio' => 'required',
            'tempat_kerja' => 'required',
            'status' => 'required',
            'foto_profil' => 'image|file|max:1024',
        ]);

        if($request->file('foto_profil')){
            $validatedData['foto_profil'] = $request->file('foto_profil')->store('foto_profil');
        }

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('profile')->with('success', 'Portofolio telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $profile)
    {
        return view('profile.edit', [
            'profile' => $profile,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:5|max:255',
            'nama_pemilik' => 'required|max:100',
            'alamat' => 'required',
            'whatsapp' => 'required',
            'sosial_media' => 'required',
            'profil_bio' => 'required',
            'tempat_kerja' => 'required',
            'status' => 'required',
            'foto_profil' => 'image|file|max:1024',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        if($request->file('foto_profil')){
            if ($request->oldImage) {
                storage::delete($request->oldImage);
            }
            $validatedData['foto_profil'] = $request->file('foto_profil')->store('foto_profil');
        }

        $profile = User::find($id)
            ->update($validatedData);

        return redirect('profile')->with('success', 'Profil has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($profile_id)
    {

        $profile = User::where('id',$profile_id)->first();
        $profile->delete();     

        if ($profile->foto_profil) {
            storage::delete($profile->foto_profil);
        }

        return redirect('profile')->with('success', 'Profile user has been deleted');
    }
}
