<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\SPKTP;
use App\Models\Status;
use App\Models\SPKTPFailed;
use App\Models\SPKTPSuccess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SPKTPController extends Controller
{
    public function show(){
        $rowAuthUser = Auth::user();
        $rowUser = User::find($rowAuthUser->id);
        $dataSPKTP = SPKTP::where('user_id', $rowAuthUser->id)->get();
        $dataStatus  = Status::all();
        $data        = ['dataSuratPengantarKTP' => $dataSPKTP, 'dataStatus' => $dataStatus, 'rowUser' => $rowUser];
        // dd($data);
        return view('user.surat_pengantar_ktp.surat_pengantar_ktp_data', $data);
    }


    public function viewAddSPKTP(){
        $rowAuthUser = Auth::user();
        $rowUser = User::find($rowAuthUser->id);
        $data = ['rowUser' => $rowUser];
        return view('user.surat_pengantar_ktp.surat_pengantar_ktp_add', $data);
    }

    public function addSPKTP(Request $request){
        $validator = Validator::make($request->all(), [
            'noKartuKeluarga_input' => 'required',
            'fotoKartuKeluarga_input.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'user_id_input' => 'required',
       ]);

       $filename = '';

        if($request->hasFile('fotoKartuKeluarga_input')){
            $image= $request->file('fotoKartuKeluarga_input');
            $extension= $image->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $image->move('images/spktp/', $filename);
        }

       if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
       }else{
            $dataSPKTP= new SPKTP();
            $dataSPKTP->noKartuKeluarga    = $request->noKartuKeluarga_input;
            $dataSPKTP->fotoKartuKeluarga     = $filename;
            $dataSPKTP->user_id       = $request->user_id_input;
            $dataSPKTP->admin_id      = "1";
            $dataSPKTP->status_id     = "1";
            $dataSPKTP->save();
            Session::flash('alert-class', 'alert-success');
            Session::flash('message','Record inserted successfully.');
         }
         return redirect('/user/spktp_data');
    }


    public function viewEditSPKTP($id){
        $idUser = 1;
        $rowUser = User::find($idUser);
        $rowSPKTP= SPKTP::find($id);
        $data = ['rowSPKTP' => $rowSPKTP, 'rowUser' => $rowUser];
        return view('user.surat_pengantar_ktp.surat_pengantar_ktp_edit', $data);
    }


    public function submitEditSPKTP(Request $request, $id){

        $validator = Validator::make($request->all(), [
            'noKartuKeluarga_input' => 'required',
            'user_id_input' => 'required',
       ]);

        $newName = '';
        if($request->hasFile('fotoKartuKeluarga_input')){
            $image= $request->file('fotoKartuKeluarga_input');
            $extension= $image->getClientOriginalExtension();
            $newName = time().'.'.$extension;
            $image->move('images/spktp/', $newName);
        }else{
            $newName = $request->fotoKartuKeluarga_inputCurent;
        }

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
       }else{
            $dataSPKTP= SPKTP::find($id);
            $dataSPKTP->noKartuKeluarga    = $request->noKartuKeluarga_input;
            $dataSPKTP->fotoKartuKeluarga     = $newName;
            $dataSPKTP->user_id       = $request->user_id_input;
            $dataSPKTP->admin_id      = "1";
            $dataSPKTP->status_id     = "1";

            $dataSPKTP->update();
            Session::flash('alert-class', 'alert-success');
            Session::flash('message','Record inserted successfully.');
       }
        return redirect('/user/spktp_data');
    }



    public function viewDetailSPKTP($id){
        $rowAuthUser    = Auth::user();
        $rowUser        = User::find($rowAuthUser->id);
        $rowSPKTP       = SPKTP::find($id);
        $rowSPKTPProses = null;
        if($rowSPKTP->status_id == 2){
            $rowSPKTPProses = SPKTPSuccess::where('spktp_id', $rowSPKTP->id)->first();
        }else if($rowSPKTP->status_id == 3){
            $rowSPKTPProses = SPKTPFailed::where('spktp_id', $rowSPKTP->id)->first();
        }
        $dataStatus     = Status::all();
        $data           = ['rowUser' => $rowUser, 'rowSPKTP' => $rowSPKTP, 'rowSPKTPProses'=>$rowSPKTPProses, 'dataStatus' => $dataStatus, ];
        // dd($data);
        return view('user.surat_pengantar_ktp.surat_pengantar_ktp_data_detail', $data);
    }
}
