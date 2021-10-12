<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

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
    public function update(Request $request, Profile $profile)
    {
        //
    }
}