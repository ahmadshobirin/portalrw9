<?php

/*
 * Created on Mon Aug 14 2017
 *
 * Copyright (c) 2017 Ahmad Shobirin
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Image;

class UserController extends Controller
{

    public function config()
    {
        return view('users.pengaturan');
    }

    public function akun()
    {
        return view('users.ubah-akun');
    }

    public function updateakun(Request $request)
    {
        $this->validate($request,[
            'name' => 'min:3|max:20',
            'bio'  => 'min:5|max:25',
        ]);

        $updateAkun = User::find(auth()->user()->id);
        $nama = $request->nama == null ? $updateAkun->name : $request->nama;

        $updateAkun->name = $nama;
        $updateAkun->bio = $request->bio;

        if($request->hasFile('images'))
        {  
            //hapusfile
            $oldImages = $updateAkun->images;
            if(!empty($oldImages)) { @unlink('images/users/'.$oldImages); }

            //updateprofilimage
            $file = $request->file('images');
            $filename = time().'-'.$file->getClientOriginalname();
            $location = public_path('images/users/'.$filename);
            Image::make($file)->resize(84,84)->save($location);
            
            $updateAkun->images = $filename;
        }
        // dd($updateAkun);
        $updateAkun->save();
        return redirect('pengaturan');  
        
    }

    public function password()
    {
        return view('users.ubah-pass');
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
