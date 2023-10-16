<?php

namespace App\Http\Controllers;

use App\Models\SPKTP;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SPKTPController extends Controller
{
    public function show(){
        $dataSPKTP = SPKTP::all();
        $data = ['dataSPKTP' => $dataSPKTP];
        return view('user.surat_pengantar_ktp.surat_pengantar_ktp_data', $data);
    }

    public function viewAddSPKTP(){
        return view('user.surat_pengantar_ktp.surat_pengantar_ktp_add');
    }

    public function addSPKTP(Request $request){
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
            $dataSPKTP= new SPKTP();
            $dataSPKTP->nik        = $request->nik_input;
            $dataSPKTP->nama      = $request->nama_input;
            $dataSPKTP->tempatLahir     = $request->tempatLahir_input;
            $dataSPKTP->tanggalLahir    = $request->tanggalLahir_input;
            $dataSPKTP->pekerjaan   = $request->pekerjaan_input;
            $dataSPKTP->alamat      = $request->alamat_input;
            $dataSPKTP->status         = "proccess";
            $dataSPKTP->user_id     = 1;
            $dataSPKTP->admin_id     = 1;
            $dataSPKTP->save();
            Session::flash('alert-class', 'alert-success');
            Session::flash('message','Record inserted successfully.');
         }
         return redirect('/user/sku_data');
    }


    public function viewEditSPKTP($id){
        $rowSPKTP= SPKTP::find($id);
        $data = ['rowSPKTP' => $rowSPKTP];
        return view('user.surat_pengantar_ktp.surat_pengantar_ktp_edit', $data);
    }

    public function submitEditSPKTP(Request $request, $id){
            $dataSPKTP= SPKTP::find($id);
            $dataSPKTP->nik           = $request->nik_input;
            $dataSPKTP->nama          = $request->nama_input;
            $dataSPKTP->tempatLahir   = $request->tempatLahir_input;
            $dataSPKTP->tanggalLahir  = $request->tanggalLahir_input;
            $dataSPKTP->pekerjaan     = $request->pekerjaan_input;
            $dataSPKTP->alamat        = $request->alamat_input;
            $dataSPKTP->status        = "proccess";
            $dataSPKTP->user_id       = 1;
            $dataSPKTP->admin_id      = 1;
            $dataSPKTP->update();
            Session::flash('alert-class', 'alert-success');
            Session::flash('message','Record inserted successfully.');
            return redirect('/user/sku_data');
        }



    public function viewDetailSPKTP($id){
        $rowSPKTP= SPKTP::find($id);
        $data = ['rowSPKTP' => $rowSPKTP];
        return view('user.surat_pengantar_ktp.surat_pengantar_ktp_data_detail', $data);
    }
}
