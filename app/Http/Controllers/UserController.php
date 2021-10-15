<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\User;
use App\Models\Profile;
use App\Exports\UserExport;


use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('data_pengguna.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data_pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:64'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'role' => ['required', 'string'],
            'umur' => ['required'],
            'jenis_kelamin' => ['required', 'string'],
            'tempat_lahir' => ['required', 'string'],
            'tgl_lahir' => ['required'],
            'alamat' => ['required', 'string'],
            'bio' => ['required', 'string'],
            'no_telp' => ['required'],
        ]);

        $users = User::create([
            'name' => $request['name'],
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => \Illuminate\Support\Facades\Hash::make($request['password']),
            'role' => $request['role'],
        ]);

        $path = 'img/img_storage/profile/';
        $gambar = $request['profile_foto'];
        $new_gambar = time() . ' - ' . $gambar->getClientOriginalName();
        $gambar->move($path, $new_gambar);

        Profile::create([
            'umur' => $request['umur'],
            'jenis_kelamin' => $request['jenis_kelamin'],
            'tempat_lahir' => $request['tempat_lahir'],
            'tgl_lahir' => $request['tgl_lahir'],
            'alamat' => $request['alamat'],
            'bio' => $request['bio'],
            'no_telp' => $request['no_telp'],
            'profile_foto' => $new_gambar,
            'user_id' => $users->id,
        ]);
        Alert::success('Berhasil', 'Menambahkan Akun Pengguna Apps');
        return redirect('user/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('data_pengguna.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('data_pengguna.edit', compact('user'));
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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:64'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'role' => ['required', 'string'],
            'umur' => ['required'],
            'jenis_kelamin' => ['required', 'string'],
            'tempat_lahir' => ['required', 'string'],
            'tgl_lahir' => ['required'],
            'alamat' => ['required', 'string'],
            'bio' => ['required', 'string'],
            'no_telp' => ['required'],
        ]);

        $profile = Profile::find($id);

        $users = [
            'name' => $request['name'],
            'username' => $request['username'],
            'email' => $request['email'],
            'role' => $request['role'],
        ];

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
        User::whereId($id)->update($users);
        Alert::success('Berhasil', 'Mengubah Akun Pengguna Apps');
        return redirect('user/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        Alert::success('Berhasil', 'Mengubah Data Pengguna');

        return redirect('/data-pengguna');
    }

    public function pdf()
    {
        $user = User::all();
        $pdf = PDF::loadview('data_pengguna.pdf', compact('user'));
        return $pdf->stream('data_pengguna.pdf');
    }

    public function print()
    {
        $user = User::all();
        return view('data_pengguna.print', compact('user'));
    }

    public function pdf_detail($id)
    {
        $user = User::find($id);
        $pdf = PDF::loadview('data_pengguna.pdf_detail', compact('user'));
        return $pdf->stream('data_pengguna_detail.pdf');
    }

    public function print_detail($id)
    {
        $user = User::find($id);
        return view('data_pengguna.print_detail', compact('user'));
    }

    public function excel()
    {
        return \Maatwebsite\Excel\Facades\Excel::download(new UserExport, 'user.xlsx');
    }

    // public function cari(Request $request)
    // {
    //     // menangkap data pencarian
    //     $cari = $request->cari;

    //     // mengambil data dari table pegawai sesuai pencarian data
    //     $user = User::where('name', 'role', $cari)->get();

    //     // ddd($user);
    //     // mengirim data pegawai ke view index
    //     return view('data_pengguna.index', compact('user'));
    // }
}