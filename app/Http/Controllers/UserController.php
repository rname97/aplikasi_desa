<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function getUser($id){
        $rowUser = User::find($id);
        $data = ['rowUser' => $rowUser];
        return view('user.profile', $data);
    }


    public function profileUpdate(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'nik_input' => 'required',
            'name_input' => 'required',
            'fotoUser_input.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tempatLahir_input' => 'required',
            'tanggalLahir_input' => 'required',
            'agama_input' => 'required',
            'noTelp_input' => 'required',
            'alamatKTP_input' => 'required',
            'alamatDomisili_input' => 'required',
       ]);
       
        $newName = '';
        if($request->hasFile('fotoUser_input')){
            $image= $request->file('fotoUser_input');
            $extension= $image->getClientOriginalExtension();
            $newName = time().'.'.$extension;
            $image->move('images/user/', $newName);
        }else{
            $newName = $request->fotoUser_inputcurrent;
        }

        if ($validator->fails()) {
            Session::flash('alert-class', 'alert-danger');
            Session::flash('message','Data Inputan Failed.');
            return redirect()->Back()->withInput()->withErrors($validator);
       }else{
            $dataSKUsaha                    = User::find($id);
            $dataSKUsaha->id                = $id;
            $dataSKUsaha->nik               = $request->nik_input;
            $dataSKUsaha->name              = $request->name_input;
            $dataSKUsaha->fotoUser          = $newName;
            $dataSKUsaha->tempatLahir       = $request->tempatLahir_input;
            $dataSKUsaha->tanggalLahir      = $request->tanggalLahir_input;
            $dataSKUsaha->agama             = $request->agama_input;
            $dataSKUsaha->noTelp            = $request->noTelp_input;
            $dataSKUsaha->alamatKTP         = $request->alamatKTP_input;
            $dataSKUsaha->alamatDomisili    = $request->alamatDomisili_input;
            
            $dataSKUsaha->update();
            Session::flash('alert-class', 'alert-success');
            Session::flash('message','Record inserted successfully.');
        }
        return redirect('/user/profile/'.$id);
    }


}
