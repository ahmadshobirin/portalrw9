<?php

/*
 * Created on Mon Aug 14 2017
 *
 * Copyright (c) 2017 Ahmad Shobirin
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function password()
    {
        return view('admin.ubah-pass');
    }

    public function updatePassword(Request $request)
    {
        $this->validate($request,[
            'pass_lama' => 'required',
            'pass_baru' => 'required|min:6',
            'konfirmasi_pass' => 'required|min:6|same:pass_baru',
        ]);

        $user = User::find(auth()->user()->id);
        $cekPassword = Hash::check($request->pass_lama,$user->password); //cekpasswordlama

        if(!$cekPassword)
        {
            $message = "Password lama tidak sama";
            return redirect()->back()->with('message',$message);
        }

        $user->update(['password' => bcrypt($request->pass_baru)]);
        $message= "Berhasil Mengubah Password";
        return redirect('/home')->with('message',$message);
    }
}
