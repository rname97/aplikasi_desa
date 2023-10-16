<?php

namespace App\Http\Controllers;

use App\Models\SPKK;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SPKKController extends Controller
{
    public function show(){
        $dataSPKK = SPKK::all();
        $data = ['dataSPKK' => $dataSPKK];
        return view('user.surat_pengantar_kk.surat_pengantar_kk_data', $data);
    }

    public function viewAddSPKK(){
        return view('user.surat_pengantar_kk.surat_pengantar_kk_add');
    }

    public function addSPKK(Request $request){
        $validator = Validator::make($request->all(), [
            'nik_input' => 'required',
            'nama_input' => 'required',
            'tempatLahir_input' => 'required',
            'tanggalLahir_input' => 'required',
            'pekerjaan_input' => 'required',
            'alamat_input' => 'required',
       ]);

       if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
       }else{
            $dataSPKK= new SPKK();
            $dataSPKK->nik        = $request->nik_input;
            $dataSPKK->nama      = $request->nama_input;
            $dataSPKK->tempatLahir     = $request->tempatLahir_input;
            $dataSPKK->tanggalLahir    = $request->tanggalLahir_input;
            $dataSPKK->pekerjaan   = $request->pekerjaan_input;
            $dataSPKK->alamat      = $request->alamat_input;
            $dataSPKK->status         = "proccess";
            $dataSPKK->user_id     = 1;
            $dataSPKK->admin_id     = 1;
            $dataSPKK->save();
            Session::flash('alert-class', 'alert-success');
            Session::flash('message','Record inserted successfully.');
         }
         return redirect('/user/sku_data');
    }


    public function viewEditSPKK($id){
        $rowSPKK= SPKK::find($id);
        $data = ['rowSPKK' => $rowSPKK];
        return view('user.surat_pengantar_kk.surat_pengantar_kk_edit', $data);
    }

    public function submitEditSPKK(Request $request, $id){
            $dataSPKK= SPKK::find($id);
            $dataSPKK->nik           = $request->nik_input;
            $dataSPKK->nama          = $request->nama_input;
            $dataSPKK->tempatLahir   = $request->tempatLahir_input;
            $dataSPKK->tanggalLahir  = $request->tanggalLahir_input;
            $dataSPKK->pekerjaan     = $request->pekerjaan_input;
            $dataSPKK->alamat        = $request->alamat_input;
            $dataSPKK->status        = "proccess";
            $dataSPKK->user_id       = 1;
            $dataSPKK->admin_id      = 1;
            $dataSPKK->update();
            Session::flash('alert-class', 'alert-success');
            Session::flash('message','Record inserted successfully.');
            return redirect('/user/sku_data');
        }



    public function viewDetailSPKK($id){
        $rowSPKK= SPKK::find($id);
        $data = ['rowSPKK' => $rowSPKK];
        return view('user.surat_pengantar_kk.surat_pengantar_kk_data_detail', $data);
    }
}
