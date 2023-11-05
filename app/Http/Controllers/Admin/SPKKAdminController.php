<?php

namespace App\Http\Controllers\Admin;

use App\Models\SPKK;
use App\Models\User;
use App\Models\Status;
use App\Models\SPKKFailed;
use App\Models\SPKKSuccess;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SPKKAdminController extends Controller
{
    public function show(){
        $dataUser = User::all();
        $dataStatus = Status::all();
        $dataSPKK = SPKK::all();
        $data = ['dataSuratPengantarKK' => $dataSPKK, 'dataUser' => $dataUser, 'dataStatus' => $dataStatus];
        return view('admin.surat_pengantar_kk.surat_pengantar_kk_data', $data);
    }

    public function viewProcessSPKK($idSPKK, $idUser){
        $rowSPKK = SPKK::find($idSPKK);
        $rowUser = User::find($idUser);
        $data = ['rowSPKK' => $rowSPKK, 'rowUser' => $rowUser];
        return view('admin.surat_pengantar_kk.surat_pengantar_kk_process', $data);
    }

    public function processSPKKSuccess(Request $request){
        $validator = Validator::make($request->all(), [
                'spkk_id_input' => 'required',
                'spkkStatus_input' => 'required',
                'spkkFile_input.*' => 'required|mimes:pdf|max:2048',
        ]);

        $filename = '';
        if($request->hasFile('spkkFile_input')){
            $image= $request->file('spkkFile_input');
            $extension= $image->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $image->move('spkkFileSuccess/', $filename);
        }

       if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
       }else{

            $rowSPKKFind = SPKKSuccess::where('spkk_id', $request->spkk_id_input)->first();
            if($rowSPKKFind != null){
                $rowSPKKFind->spkkFile    = $filename;
                $rowSPKKFind->update();
            }else{
                $dataSPKKSuccess                 = new SPKKSuccess();
                $dataSPKKSuccess->spkk_id     = $request->spkk_id_input;
                $dataSPKKSuccess->spkkFile    = $filename;
                $dataSPKKSuccess->save();
            }

            $rowSPKK             = SPKK::find($request->spkk_id_input);
            $rowSPKK->status_id  = $request->spkkStatus_input;
            $rowSPKK->update();

            Session::flash('alert-class', 'alert-success');
            Session::flash('message','Record inserted successfully.');
         }
         return redirect('/admin/spkk_data');

    }

    public function processSPKKFailed(Request $request){
        $validator = Validator::make($request->all(), [
                'spkk_id_input' => 'required',
                'spkkStatus_input' => 'required',
                'spkkDeskFailed_input' => 'required',
        ]);

       if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
       }else{
            $rowSPKKFind = SPKKFailed::where('spkk_id', $request->spkk_id_input)->first();
            if($rowSPKKFind != null){
                $rowSPKKFind->spkkDeskFailed = $request->spkkDeskFailed_input;
                $rowSPKKFind->update();
            }else{
                $dataSPKKFailed = new SPKKFailed();
                $dataSPKKFailed->spkk_id        = $request->spkk_id_input;
                $dataSPKKFailed->spkkDeskFailed      = $request->spkkDeskFailed_input;
                $dataSPKKFailed->save();
            }

            $rowSPKK = SPKK::find($request->spkk_id_input);
            $rowSPKK->status_id  = $request->spkkStatus_input;
            $rowSPKK->update();

            Session::flash('alert-class', 'alert-success');
            Session::flash('message','Record inserted successfully.');
         }
         return redirect('/admin/spkk_data');
    }


    public function deleteSPKK($id){
        $rowSPKKFindFailed = SPKKFailed::where('spkk_id', $id)->first();
        if(null != $rowSPKKFindFailed){
            $rowSPKKFindFailed->delete();
        }
        $rowSPKKFindSuccess = SPKKSuccess::where('spkk_id', $id)->first();
        if(null != $rowSPKKFindSuccess){
            $rowSPKKFindSuccess->delete();
        }


        $SPKK = SPKK::find($id);
        $SPKK->delete();
        return redirect('/admin/spkk_data');
    }
}
