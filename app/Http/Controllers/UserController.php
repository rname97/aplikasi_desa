<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function getUser($id){
        $rowUser = User::find($id);
        $data = ['rowUser' => $rowUser];
        return view('user.profile', $data);
    }


    public function profileUpdate(Request $request, $id){
        $newName = '';
        if($request->hasFile('fotoUser_input')){
            $image= $request->file('fotoUser_input');
            $extension= $image->getClientOriginalExtension();
            $newName = time().'.'.$extension;
            $image->move('images/user/', $newName);
        }else{
            $newName = $request->fotoUser_input;
        }



        $dataSKUsaha= User::find($id);

        if($request->ktpStatus_input == "existing"){

            $dataSKUsaha->id                = $id;
            $dataSKUsaha->nik               = $request->nik_input;
            $dataSKUsaha->name              = $request->name_input;
            $dataSKUsaha->ktpStatus         = $request->ktpStatus_input;
            $dataSKUsaha->fotoUser          = $newName;
            $dataSKUsaha->tempatLahir       = $request->tempatLahir_input;
            $dataSKUsaha->tanggalLahir      = $request->tanggalLahir_input;
            $dataSKUsaha->alamatKTP         = $request->alamatKTP_input;
            $dataSKUsaha->alamatDomisili    = $request->alamatDomisili_input;
        }else if($request->ktpStatus_input == "noexisting"){

            $dataSKUsaha->id                = $id;
            $dataSKUsaha->name              = $request->name_input;
            $dataSKUsaha->ktpStatus         = $request->ktpStatus_input;
            $dataSKUsaha->fotoUser          = $newName;
            $dataSKUsaha->tempatLahir       = $request->tempatLahir_input;
            $dataSKUsaha->tanggalLahir      = $request->tanggalLahir_input;
            $dataSKUsaha->alamatKTP         = $request->alamatKTP_input;
            $dataSKUsaha->alamatDomisili    = $request->alamatDomisili_input;
        }

        // dd($dataSKUsaha);
        // die();

        $dataSKUsaha->update();
        Session::flash('alert-class', 'alert-success');
        Session::flash('message','Record inserted successfully.');
        return redirect('/user/profile/'.$id);
    }


}
