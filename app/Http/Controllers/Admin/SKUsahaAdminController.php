<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\SKUsaha;
use Illuminate\Http\Request;
use App\Models\SKUsahaFailed;
use App\Models\SKUsahaSuccess;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SKUsahaAdminController extends Controller
{
    //
    public function show(){
        $dataSKUsaha = SKUsaha::all();
        $data = ['dataSuratKeteranganUsaha' => $dataSKUsaha];

        // echo json_encode($data);
        return view('admin.surat_keterangan_usaha.surat_keterangan_usaha_data', $data);
    }

    public function viewProcessSKUsaha($idSkUsaha, $idUser){


        $rowSKUsaha = SKUsaha::find($idSkUsaha);
        $rowUser = User::find($idUser);
        $data = ['rowSKUsaha' => $rowSKUsaha, 'rowUser' => $rowUser];
        return view('admin.surat_keterangan_usaha.surat_keterangan_usaha_process', $data);
    }

    public function processSKUsahaSuccess(Request $request){
        $validator = Validator::make($request->all(), [
                'sku_id' => 'required',
                'skuFile.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $filename = '';

        if($request->hasFile('skuFile')){
            $image= $request->file('skuFile');
            $extension= $image->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $image->move('skuFileSuccess/', $filename);
        }

       if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
       }else{
            $dataSKUsahaSuccess= new SKUsahaSuccess();
            $dataSKUsahaSuccess->sku_id        = $request->sku_id;
            $dataSKUsahaSuccess->skuFile      = $request->skuFile;

            $dataSKUsahaSuccess->save();
            Session::flash('alert-class', 'alert-success');
            Session::flash('message','Record inserted successfully.');
         }
         return redirect('/admin/sku_data');

    }

    public function processSKUsahaFailed(Request $request){
        $validator = Validator::make($request->all(), [
                'sku_id' => 'required',
                'skuDesk' => 'required',
        ]);

       if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
       }else{
            $dataSKUsahaFailed = new SKUsahaFailed();
            $dataSKUsahaFailed->sku_id        = $request->sku_id;
            $dataSKUsahaFailed->skuDesk      = $request->skuDesk;
            $dataSKUsahaFailed->save();

            $rowSKUsaha = SKUsaha::find($request->sku_id);
            $rowSKUsaha->status  = "ditolak";
            $rowSKUsaha->update();



            Session::flash('alert-class', 'alert-success');
            Session::flash('message','Record inserted successfully.');
         }
         return redirect('/admin/sku_data');

    }


}
