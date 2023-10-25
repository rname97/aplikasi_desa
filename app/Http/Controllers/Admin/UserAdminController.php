<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserAdminController extends Controller
{
    public function show(){
        $dataUser = User::all();
        $data = ['dataUser' => $dataUser];
        return view('admin.user.user_data', $data);
    }

    public function viewEditUser($id){
        $rowUser = User::find($id);
        $data = ['rowUser' => $rowUser];
        return view('admin.user.user_edit', $data);
    }


    public function updateUser(Request $request, $id){
        $newName = '';
        if($request->hasFile('fotoUser_input')){
            $image= $request->file('fotoUser_input');
            $extension= $image->getClientOriginalExtension();
            $newName = time().'.'.$extension;
            $image->move('images/user/', $newName);
        }else{
            $newName = $request->fotoUser_input;
        }

        $dataUser= User::find($id);
        if($request->ktpStatus_input == "existing"){
            $dataUser->id                = $id;
            $dataUser->nik               = $request->nik_input;
            $dataUser->name              = $request->name_input;
            $dataUser->ktpStatus         = $request->ktpStatus_input;
            $dataUser->fotoUser          = $newName;
            $dataUser->tempatLahir       = $request->tempatLahir_input;
            $dataUser->tanggalLahir      = $request->tanggalLahir_input;
            $dataUser->alamatKTP         = $request->alamatKTP_input;
            $dataUser->alamatDomisili    = $request->alamatDomisili_input;
        }else if($request->ktpStatus_input == "noexisting"){
            $dataUser->id                = $id;
            $dataUser->name              = $request->name_input;
            $dataUser->ktpStatus         = $request->ktpStatus_input;
            $dataUser->fotoUser          = $newName;
            $dataUser->tempatLahir       = $request->tempatLahir_input;
            $dataUser->tanggalLahir      = $request->tanggalLahir_input;
            $dataUser->alamatKTP         = $request->alamatKTP_input;
            $dataUser->alamatDomisili    = $request->alamatDomisili_input;
        }

        $dataUser->update();
        Session::flash('alert-class', 'alert-success');
        Session::flash('message','Record inserted successfully.');
        return redirect('/user/profile/'.$id);
    }

    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/admin/user_data');
    }
}
