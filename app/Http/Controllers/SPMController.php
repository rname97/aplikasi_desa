<?php

namespace App\Http\Controllers;

use App\Models\SPM;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SPMController extends Controller
{
    public function show(){
        $rowAuthUser    = Auth::user();
        $rowUser        = User::find($rowAuthUser->id);
        $dataSPM        = SPM::where('user', $rowAuthUser->id)->get();
        $data           = ['dataSuratPengaduanMasyarakat' => $dataSPM, 'rowUser' => $rowUser];
        return view('user.surat_pengaduan_masyarakat.surat_pengaduan_masyarakat_data', $data);
    }

    public function viewAddSPM(){
        $rowAuthUser    = Auth::user();
        $rowUser        = User::find($rowAuthUser->id);
        $data           = ['rowUser' => $rowUser];
        return view('user.surat_pengaduan_masyarakat.surat_pengaduan_masyarakat_add', $data);
    }

    public function addSPM(Request $request){
        $validator = Validator::make($request->all(), [
            'keteranganSPM_input'   => 'required',
            'fotoBuktiSPM_input.*'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'user_input'            => 'required',
        ]);

        $filename = '';
        if($request->hasFile('fotoBuktiSPM_input')){
            $image      = $request->file('fotoBuktiSPM_input');
            $extension  = $image->getClientOriginalExtension();
            $filename   = time().'.'.$extension;
            $image->move('images/spm/', $filename);
        }

        if ($validator->fails()) {
                return redirect()->Back()->withInput()->withErrors($validator);
        }else{
            $dataSPM= new SPM();
            $dataSPM->keteranganSPM = $request->keteranganSPM_input;
            $dataSPM->fotoBuktiSPM  = $filename;
            $dataSPM->user          = $request->user_input;
            $dataSPM->statusDesk    = "Data Masih Di Process";
            $dataSPM->admin_id      = "1";
            $dataSPM->status        = "1";
            dd($dataSPM);
            $dataSPM->save();
            Session::flash('alert-class', 'alert-success');
            Session::flash('message','Record inserted successfully.');
        }
        return redirect('/user/spm_data');
    }

    public function viewDetailSPM($id){
        $rowAuthUser    = Auth::user();
        $rowUser        = User::find($rowAuthUser->id);
        $rowSPM         = SPM::find($id);
        $data           = ['rowUser' => $rowUser, 'rowSPM' => $rowSPM];
        return view('user.surat_pengaduan_masyarakat.surat_pengaduan_masyarakat_data_detail', $data);
    }
}
