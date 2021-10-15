<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = profile::where('user_id', \Illuminate\Support\Facades\Auth::user()->id)->first();
        return view('profile.index', compact('profile'));
    }

    public function show()
    {
        $profile = profile::where('user_id', \Illuminate\Support\Facades\Auth::user()->id)->first();
        return view('profile.show', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_kelamin' => ['required', 'string'],
            'tempat_lahir' => ['required', 'string'],
            'tgl_lahir' => ['required'],
            'alamat' => ['required', 'string'],
            'bio' => ['required', 'string'],
            'no_telp' => ['required'],
        ]);

        $profile = Profile::find($id);

        if ($request->has('profile_foto')) {
            $path = 'img/img_storage/profile/';
            \Illuminate\Support\Facades\File::delete($path . $profile->profile_foto);
            $gambar = $request['profile_foto'];
            $new_gambar = time() . ' - ' . $gambar->getClientOriginalName();
            $gambar->move($path, $new_gambar);


            $profile_data = [
                'umur' => $request['umur'],
                'jenis_kelamin' => $request['jenis_kelamin'],
                'tempat_lahir' => $request['tempat_lahir'],
                'tgl_lahir' => $request['tgl_lahir'],
                'alamat' => $request['alamat'],
                'bio' => $request['bio'],
                'no_telp' => $request['no_telp'],
                'profile_foto' => $new_gambar,
            ];
        } else {
            $profile_data = [
                'umur' => $request['umur'],
                'jenis_kelamin' => $request['jenis_kelamin'],
                'tempat_lahir' => $request['tempat_lahir'],
                'tgl_lahir' => $request['tgl_lahir'],
                'alamat' => $request['alamat'],
                'bio' => $request['bio'],
                'no_telp' => $request['no_telp']
            ];
        }

        Profile::whereId($id)->update($profile_data);
        Alert::success('Berhasil', 'Mengubah Profile');
        return redirect('profile/');
    }
}