<?php

namespace App\Http\Controllers\Admin;

use App\Models\SPM;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SPMAdminController extends Controller
{
    public function show(){
        $dataUser   = User::all();
        $dataSPM    = SPM::all();
        $data       = ['dataSuratPengaduanMasyarakat' => $dataSPM, 'dataUser' => $dataUser];
        return view('admin.surat_pengaduan_masyarakat.surat_pengaduan_masyarakat_data', $data);
    }

    public function viewProcessSPM($idSPM, $idUser){
        $rowSPM     = SPM::find($idSPM);
        $rowUser    = User::find($idUser);
        $data       = ['rowSPM' => $rowSPM, 'rowUser' => $rowUser];
        return view('admin.surat_pengaduan_masyarakat.surat_pengaduan_masyarakat_process', $data);
    }

    public function processSPM(Request $request){

        $validator = Validator::make($request->all(), [
                'spmID_input'       => 'required',
                'status_input'      => 'required',
                'statusDesk_input'  => 'required',
        ]);

       if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
       }else{
            $rowSPM             = SPM::find($request->spmID_input);
            $rowSPM->status     = $request->status_input;
            $rowSPM->statusDesk = $request->statusDesk_input;
            $rowSPM->update();
            Session::flash('alert-class', 'alert-success');
            Session::flash('message','Record inserted successfully.');
         }
         return redirect('/admin/spm_data');

    }


    public function deleteSPM($id){

        $SPM = SPM::find($id);
        $SPM->delete();
        return redirect('/admin/spm_data');
    }
}
