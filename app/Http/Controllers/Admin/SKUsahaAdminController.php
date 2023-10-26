<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\SKUsaha;
use Illuminate\Http\Request;
use App\Models\SKUsahaFailed;
use App\Models\SKUsahaSuccess;
use App\Http\Controllers\Controller;
use App\Models\Status;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SKUsahaAdminController extends Controller
{
    //
    public function show(){
        $dataUser = User::all();
        $dataStatus = Status::all();
        $dataSKUsaha = SKUsaha::all();
        $data = ['dataSuratKeteranganUsaha' => $dataSKUsaha, 'dataUser' => $dataUser, 'dataStatus' => $dataStatus];
        return view('admin.surat_keterangan_usaha.surat_keterangan_usaha_data', $data);
    }

    public function viewProcessSKUsaha($idSkUsaha, $idUser){
        $rowSKUsaha = SKUsaha::find($idSkUsaha);
        $rowUser = User::find($idUser);
        $data = ['rowSKUsaha' => $rowSKUsaha, 'rowUser' => $rowUser];
        return view('admin.surat_keterangan_usaha.surat_keterangan_usaha_process', $data);
    }

    public function proccessSKUsahaSuccess(Request $request){
        $validator = Validator::make($request->all(), [
                'skUsaha_id_input' => 'required',
                'skUsahaStatus_input' => 'required',
                'skUsahaFile_input.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $filename = '';
        if($request->hasFile('skUsahaFile_input')){
            $image= $request->file('skUsahaFile_input');
            $extension= $image->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $image->move('skuFileSuccess/', $filename);
        }

       if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
       }else{

            $rowSKUsahaFind = SKUsahaSuccess::where('skUsaha_id', $request->skUsaha_id_input)->first();
            if($rowSKUsahaFind != null){
                $rowSKUsahaFind->skUsahaFile    = $filename;
                $rowSKUsahaFind->update();
            }else{
                $dataSKUsahaSuccess                 = new SKUsahaSuccess();
                $dataSKUsahaSuccess->skUsaha_id     = $request->skUsaha_id_input;
                $dataSKUsahaSuccess->skUsahaFile    = $filename;
                $dataSKUsahaSuccess->save();
            }

            $rowSKUsaha             = SKUsaha::find($request->skUsaha_id_input);
            $rowSKUsaha->status_id  = $request->skUsahaStatus_input;
            $rowSKUsaha->update();

            Session::flash('alert-class', 'alert-success');
            Session::flash('message','Record inserted successfully.');
         }
         return redirect('/admin/sku_data');

    }

    public function processSKUsahaFailed(Request $request){
        $validator = Validator::make($request->all(), [
                'skUsaha_id_input' => 'required',
                'skUsahaStatus_input' => 'required',
                'skUsahaDeskFailed_input' => 'required',
        ]);

       if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
       }else{
            $rowSKUsahaFind = SKUsahaFailed::where('skUsaha_id', $request->skUsaha_id_input)->first();
            if($rowSKUsahaFind != null){
                $rowSKUsahaFind->skUsahaDeskFailed = $request->skUsahaDeskFailed_input;
                $rowSKUsahaFind->update();
            }else{
                $dataSKUsahaFailed = new SKUsahaFailed();
                $dataSKUsahaFailed->skUsaha_id        = $request->skUsaha_id_input;
                $dataSKUsahaFailed->skUsahaDeskFailed      = $request->skUsahaDeskFailed_input;
                $dataSKUsahaFailed->save();
            }

            $rowSKUsaha = SKUsaha::find($request->skUsaha_id_input);
            $rowSKUsaha->status_id  = $request->skUsahaStatus_input;
            $rowSKUsaha->update();

            Session::flash('alert-class', 'alert-success');
            Session::flash('message','Record inserted successfully.');
         }
         return redirect('/admin/sku_data');
    }


    public function deleteSKUsaha($id){
        $skUsaha = SKUsaha::find($id);
        $skUsaha->delete();
        return redirect('/admin/sku_data');
    }


}
