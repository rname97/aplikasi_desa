<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\SKUsaha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;


class SKUsahaController extends Controller
{
    public function show(){

        $dataSKUsaha = SKUsaha::all();

        $data = ['dataSuratKeteranganUsaha' => $dataSKUsaha];
        return view('user.surat_keterangan_usaha.surat_keterangan_usaha_data', $data);
    }


    public function viewAddSKUsaha(){
        $id = 1;
        $rowUser = User::find($id);
        $data = ['rowUser' => $rowUser];
        return view('user.surat_keterangan_usaha.surat_keterangan_usaha_add', $data);
    }

    public function addSKUsaha(Request $request){
        $validator = Validator::make($request->all(), [
            'pekerjaan_input' => 'required',
            'typeUsaha_input' => 'required',
            'lokasiUsaha_input' => 'required',
            'mulaiUsaha_input' => 'required',
            'fotoUsaha_input.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'user_id_input' => 'required',
       ]);

       $filename = '';

        if($request->hasFile('fotoUsaha_input')){
            $image= $request->file('fotoUsaha_input');
            $extension= $image->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $image->move('images/skusaha/', $filename);
        }

       if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
       }else{
            $dataSKUsaha= new SKUsaha();
            $dataSKUsaha->pekerjaan     = $request->pekerjaan_input;
            $dataSKUsaha->typeUsaha     = $request->typeUsaha_input;
            $dataSKUsaha->lokasiUsaha   = $request->lokasiUsaha_input;
            $dataSKUsaha->mulaiUsaha    = $request->mulaiUsaha_input;
            $dataSKUsaha->fotoUsaha     = $filename;
            $dataSKUsaha->user_id       = $request->user_id_input;
            $dataSKUsaha->admin_id      = "1";
            $dataSKUsaha->status_id     = "1";

            $dataSKUsaha->save();
            Session::flash('alert-class', 'alert-success');
            Session::flash('message','Record inserted successfully.');
         }
         return redirect('/user/sku_data');
    }


    public function viewEditSKUsaha($id){
        $idUser = 1;
        $rowUser = User::find($idUser);
        $rowSKUsaha= SKUsaha::find($id);
        $data = ['rowSKUsaha' => $rowSKUsaha, 'rowUser' => $rowUser];
        return view('user.surat_keterangan_usaha.surat_keterangan_usaha_edit', $data);
    }


    public function submitEditSKUsaha(Request $request, $id){

        $validator = Validator::make($request->all(), [
            'pekerjaan_input' => 'required',
            'typeUsaha_input' => 'required',
            'lokasiUsaha_input' => 'required',
            'mulaiUsaha_input' => 'required',
            'user_id_input' => 'required',
       ]);

        $newName = '';
        if($request->hasFile('fotoUsaha_input')){
            $image= $request->file('fotoUsaha_input');
            $extension= $image->getClientOriginalExtension();
            $newName = time().'.'.$extension;
            $image->move('images/skusaha/', $newName);
        }else{
            $newName = $request->fotoUsaha_inputCurent;
        }

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
       }else{
            $dataSKUsaha= SKUsaha::find($id);
            $dataSKUsaha->pekerjaan     = $request->pekerjaan_input;
            $dataSKUsaha->typeUsaha     = $request->typeUsaha_input;
            $dataSKUsaha->lokasiUsaha   = $request->lokasiUsaha_input;
            $dataSKUsaha->mulaiUsaha    = $request->mulaiUsaha_input;
            $dataSKUsaha->fotoUsaha     = $newName;
            $dataSKUsaha->user_id       = $request->user_id_input;
            $dataSKUsaha->admin_id      = "1";
            $dataSKUsaha->status_id     = "1";

            $dataSKUsaha->update();
            Session::flash('alert-class', 'alert-success');
            Session::flash('message','Record inserted successfully.');
       }
        return redirect('/user/sku_data');
    }



    public function viewDetailSKUsaha($id){
        $rowSKUsaha= SKUsaha::find($id);
        $data = ['rowSKUsaha' => $rowSKUsaha];
        return view('user.surat_keterangan_usaha.surat_keterangan_usaha_data_detail', $data);
    }
}
