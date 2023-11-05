<?php

namespace App\Http\Controllers;

use App\Models\SPKK;
use App\Models\User;
use App\Models\Status;
use App\Models\SPKKFailed;
use App\Models\SPKKSuccess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SPKKController extends Controller
{
    public function show(){
        $rowAuthUser = Auth::user();
        $rowUser = User::find($rowAuthUser->id);
        $dataSPKK = SPKK::where('user_id', $rowAuthUser->id)->get();
        $dataStatus  = Status::all();
        $data        = ['dataSuratPengantarKK' => $dataSPKK, 'dataStatus' => $dataStatus, 'rowUser' => $rowUser];
        // dd($data);
        return view('user.surat_pengantar_kk.surat_pengantar_kk_data', $data);
    }


    public function viewAddSPKK(){
        $rowAuthUser = Auth::user();
        $rowUser = User::find($rowAuthUser->id);
        if($rowUser->nik == null || $rowUser->nik == ""){
            Session::flash('alert-class', 'alert-danger');
            Session::flash('message','Silahkan Lengkapi Data Anda.');
            return redirect('/user/spkk_data');
        }

        $data = ['rowUser' => $rowUser];
        return view('user.surat_pengantar_kk.surat_pengantar_kk_add', $data);
    }

    public function addSPKK(Request $request){
        $validator = Validator::make($request->all(), [
            'noKartuKeluarga_input' => 'required',
            'user_id_input' => 'required',
       ]);

       if ($validator->fails()) {
            Session::flash('alert-class', 'alert-danger');
            Session::flash('message','Data Inputan Failed.');
            return redirect()->Back()->withInput()->withErrors($validator);
       }else{
            $dataSPKK= new SPKK();
            $dataSPKK->noKartuKeluarga    = $request->noKartuKeluarga_input;
            $dataSPKK->user_id       = $request->user_id_input;
            $dataSPKK->admin_id      = "1";
            $dataSPKK->status_id     = "1";
            $dataSPKK->save();
            Session::flash('alert-class', 'alert-success');
            Session::flash('message','Record inserted successfully.');
         }
         return redirect('/user/spkk_data');
    }


    public function viewEditSPKK($id){
        $idUser = 1;
        $rowUser = User::find($idUser);
        $rowSPKK= SPKK::find($id);
        $data = ['rowSPKK' => $rowSPKK, 'rowUser' => $rowUser];
        return view('user.surat_pengantar_kk.surat_pengantar_kk_edit', $data);
    }


    public function submitEditSPKK(Request $request, $id){

        $validator = Validator::make($request->all(), [
            'noKartuKeluarga_input' => 'required',
            'user_id_input' => 'required',
       ]);

        $newName = '';
        if($request->hasFile('fotoKartuKeluarga_input')){
            $image= $request->file('fotoKartuKeluarga_input');
            $extension= $image->getClientOriginalExtension();
            $newName = time().'.'.$extension;
            $image->move('images/spkk/', $newName);
        }else{
            $newName = $request->fotoKartuKeluarga_inputCurent;
        }

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
       }else{
            $dataSPKK= SPKK::find($id);
            $dataSPKK->noKartuKeluarga    = $request->noKartuKeluarga_input;
            // $dataSPKK->fotoKartuKeluarga     = $newName;
            $dataSPKK->user_id       = $request->user_id_input;
            $dataSPKK->admin_id      = "1";
            $dataSPKK->status_id     = "1";

            $dataSPKK->update();
            Session::flash('alert-class', 'alert-success');
            Session::flash('message','Record inserted successfully.');
       }
        return redirect('/user/spkk_data');
    }



    public function viewDetailSPKK($id){
        $rowAuthUser    = Auth::user();
        $rowUser        = User::find($rowAuthUser->id);
        $rowSPKK       = SPKK::find($id);
        $rowSPKKProses = null;
        if($rowSPKK->status_id == 2){
            $rowSPKKProses = SPKKSuccess::where('SPKK_id', $rowSPKK->id)->first();
        }else if($rowSPKK->status_id == 3){
            $rowSPKKProses = SPKKFailed::where('SPKK_id', $rowSPKK->id)->first();
        }
        $dataStatus     = Status::all();
        $data           = ['rowUser' => $rowUser, 'rowSPKK' => $rowSPKK, 'rowSPKKProses'=>$rowSPKKProses, 'dataStatus' => $dataStatus, ];
        // dd($data);
        return view('user.surat_pengantar_kk.surat_pengantar_kk_data_detail', $data);
    }
}
