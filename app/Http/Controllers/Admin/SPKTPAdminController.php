<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\SPKTP;
use App\Models\Status;
use App\Models\SPKTPSuccess;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SPKTPFailed;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SPKTPAdminController extends Controller
{
    public function show(){
        $dataUser   = User::all();
        $dataStatus = Status::all();
        $dataSPKTP  = SPKTP::all();
        $data = ['dataSuratPengantarKTP' => $dataSPKTP, 'dataUser' => $dataUser, 'dataStatus' => $dataStatus];
        return view('admin.surat_pengantar_ktp.surat_pengantar_ktp_data', $data);
    }

    public function viewProcessSPKTP($idSPKTP, $idUser){
        $rowSPKTP   = SPKTP::find($idSPKTP);
        $rowUser    = User::find($idUser);
        $data       = ['rowSPKTP' => $rowSPKTP, 'rowUser' => $rowUser];
        return view('admin.surat_pengantar_ktp.surat_pengantar_ktp_process', $data);
    }

    public function processSPKTPSuccess(Request $request){
        $validator = Validator::make($request->all(), [
                'spktp_id_input'    => 'required',
                'spktpStatus_input' => 'required',
                'spktpFile_input.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $filename = '';
        if($request->hasFile('spktpFile_input')){
            $image      = $request->file('spktpFile_input');
            $extension  = $image->getClientOriginalExtension();
            $filename   = time().'.'.$extension;
            $image->move('spktpFileSuccess/', $filename);
        }

       if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
       }else{

            $rowSPKTPFind = SPKTPSuccess::where('spktp_id', $request->spktp_id_input)->first();
            if($rowSPKTPFind != null){
                $rowSPKTPFind->spktpFile        = $filename;
                $rowSPKTPFind->update();
            }else{
                $dataSPKTPSuccess               = new SPKTPSuccess();
                $dataSPKTPSuccess->spktp_id     = $request->spktp_id_input;
                $dataSPKTPSuccess->spktpFile    = $filename;
                $dataSPKTPSuccess->save();
            }

            $rowSPKTP             = SPKTP::find($request->spktp_id_input);
            $rowSPKTP->status_id  = $request->spktpStatus_input;
            $rowSPKTP->update();

            Session::flash('alert-class', 'alert-success');
            Session::flash('message','Record inserted successfully.');
         }
         return redirect('/admin/spktp_data');

    }

    public function processSPKTPFailed(Request $request){
        $validator = Validator::make($request->all(), [
                'spktp_id_input'        => 'required',
                'spktpStatus_input'     => 'required',
                'spktpDeskFailed_input' => 'required',
        ]);

       if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
       }else{
            $rowSPKTPFind = SPKTPFailed::where('spktp_id', $request->spktp_id_input)->first();
            if($rowSPKTPFind != null){
                $rowSPKTPFind->spktpDeskFailed = $request->spktpDeskFailed_input;
                $rowSPKTPFind->update();
            }else{
                $dataSPKTPFailed = new SPKTPFailed();
                $dataSPKTPFailed->spktp_id          = $request->spktp_id_input;
                $dataSPKTPFailed->spktpDeskFailed   = $request->spktpDeskFailed_input;
                $dataSPKTPFailed->save();
            }

            $rowSPKTP = SPKTP::find($request->spktp_id_input);
            $rowSPKTP->status_id  = $request->spktpStatus_input;
            $rowSPKTP->update();
            Session::flash('alert-class', 'alert-success');
            Session::flash('message','Record inserted successfully.');
         }
         return redirect('/admin/spktp_data');
    }


    public function deleteSPKTP($id){
        $rowSPKTPFindFailed = SPKTPFailed::where('spktp_id', $id)->first();
        if(null != $rowSPKTPFindFailed){
            $rowSPKTPFindFailed->delete();
        }
        $rowSPKTPindSuccess = SPKTPSuccess::where('spktp_id', $id)->first();
        if(null != $rowSPKTPindSuccess){
            $rowSPKTPindSuccess->delete();
        }

        $SPKTP = SPKTP::find($id);
        $SPKTP->delete();
        return redirect('/admin/spktp_data');
    }
}
