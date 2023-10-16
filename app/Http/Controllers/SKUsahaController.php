<?php

namespace App\Http\Controllers;

use App\Models\SKUsaha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SKUsahaController extends Controller
{
    public function show(){
        $dataSKUsaha = SKUsaha::all();
        // if(Auth::user()){
        //     $user_id = Auth::user()->user_id;
        //     $user = User::find($user_id);
        //     $usergroup = Usergroups::find($user->benutzergruppe);

        //     if($usergroup->slug === 'admin'){
        //         return $next($request);
        //     }
        // }
        $data = ['dataSuratKeteranganUsaha' => $dataSKUsaha];
        return view('user.surat_keterangan_usaha.surat_keterangan_usaha_data', $data);
    }

    public function viewAddSKUsaha(){
        return view('user.surat_keterangan_usaha.surat_keterangan_usaha_add');
    }

    public function addSKUsaha(Request $request){
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
            $dataSKUsaha= new SKUsaha();
            $dataSKUsaha->nik        = $request->nik_input;
            $dataSKUsaha->nama      = $request->nama_input;
            $dataSKUsaha->tempatLahir     = $request->tempatLahir_input;
            $dataSKUsaha->tanggalLahir    = $request->tanggalLahir_input;
            $dataSKUsaha->pekerjaan   = $request->pekerjaan_input;
            $dataSKUsaha->alamat      = $request->alamat_input;
            $dataSKUsaha->status         = "proccess";
            $dataSKUsaha->user_id     = 1;
            $dataSKUsaha->admin_id     = 1;
            $dataSKUsaha->save();
            Session::flash('alert-class', 'alert-success');
            Session::flash('message','Record inserted successfully.');
         }
         return redirect('/user/sku_data');
    }


    public function viewEditSKUsaha($id){
        $rowSKUsaha= SKUsaha::find($id);
        $data = ['rowSKUsaha' => $rowSKUsaha];
        return view('user.surat_keterangan_usaha.surat_keterangan_usaha_edit', $data);
    }

    public function submitEditSKUsaha(Request $request, $id){
            $dataSKUsaha= SKUsaha::find($id);
            $dataSKUsaha->nik           = $request->nik_input;
            $dataSKUsaha->nama          = $request->nama_input;
            $dataSKUsaha->tempatLahir   = $request->tempatLahir_input;
            $dataSKUsaha->tanggalLahir  = $request->tanggalLahir_input;
            $dataSKUsaha->pekerjaan     = $request->pekerjaan_input;
            $dataSKUsaha->alamat        = $request->alamat_input;
            $dataSKUsaha->status        = "proccess";
            $dataSKUsaha->user_id       = 1;
            $dataSKUsaha->admin_id      = 1;
            $dataSKUsaha->update();
            Session::flash('alert-class', 'alert-success');
            Session::flash('message','Record inserted successfully.');
            return redirect('/user/sku_data');
        }



    public function viewDetailSKUsaha($id){
        $rowSKUsaha= SKUsaha::find($id);
        $data = ['rowSKUsaha' => $rowSKUsaha];
        return view('user.surat_keterangan_usaha.surat_keterangan_usaha_data_detail', $data);
    }
}
