@extends('admin.layouts.master')

@section('content')
<h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

<div class="row">
    <div class="col-sm-3">
        <div class="card ">
            <div class="card-header bg-primary">
                <div class="d-flex align-items-center justify-content-between">
                    <h5 class="card-title text-white">User Request</h5>
                </div>
            </div>
            <div class="card-body px-5">
                <div class="user-avatar-section">
                    <div class="d-flex align-items-center flex-column">
                        @if ($rowUser->fotoUser != '')
                            <input type="hidden" name="fotoProfile_inputCurent" class="form-control" id="basic-default-name" value="{{ $rowUser->fotoUser }}">
                            <img src="{{url('images/user/'.$rowUser->fotoUser)}}" alt="" width="150" height="150" class="img-fluid rounded mb-2 mt-2">
                        @else
                            <img src="{{URL::asset('images/user/image_empty.jpg')}}" alt="" width="150" height="150" class="img-fluid rounded mb-3 mt-4">
                        @endif
                    </div>
                </div>
                <hr>
                <div class="info-container  text-center">
                    <div class="">
                        <span>{{$rowUser->nik}}</span>
                    </div>
                    <br>
                    <div class="">
                        <h4>{{$rowUser->name}}</h4>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
    <div class="col-sm-8">
        <div class="card">
            <div class="card-header bg-primary">
                <div class="d-flex align-items-center justify-content-between">
                    <h5 class="card-title text-white">Data Surat Keterangan Usaha (SKU)</h5>
                </div>
            </div>
            <div class="card-body px-5 py-4">
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <label class="col-form-label" for="basic-default-name">Nik</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="text"  class="form-control"  id="" value="{{$rowUser->nik}}" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <label class="col-form-label" for="basic-default-name">Nama</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="text"  class="form-control"  id="" value="{{$rowUser->name}}" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <label class="col-form-label" for="basic-default-name">Email</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="text"  class="form-control"  id="" value="{{$rowUser->email}}" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <label class="col-form-label" for="basic-default-name">Tanggal Tanggal Lahir</label>
                    </div>
                    <div class="col-sm-4">
                        <input type="text"  class="form-control"  id="" value="{{$rowUser->tempatLahir}}" disabled>
                    </div>
                    <div class="col-sm-5">
                        <input type="text"  class="form-control"  id="" value="{{$rowUser->tanggalLahir}}" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <label class="col-form-label" for="basic-default-name">Alamat KTP</label>
                    </div>
                    <div class="col-sm-9">
                        <textarea name="" class="form-control" id="" disabled >{{$rowUser->alamatKTP}}</textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <label class="col-form-label" for="basic-default-name">Alamat Domisili</label>
                    </div>
                    <div class="col-sm-9">
                        <textarea name="" class="form-control" id="" disabled >{{$rowUser->alamatDomisili}}</textarea>
                    </div>
                </div>
                <hr class="border">
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <label class="col-form-label" for="basic-default-name">Status</label>
                    </div>
                    <div class="col-sm-9">
                        @if ($rowSKUsaha->status_id == "1")
                            <input type="text"  class="form-control"  id="" value="Prossess" disabled>
                        @elseif ($rowSKUsaha->status_id == "2")
                            <input type="text"  class="form-control"  id="" value="diterima" disabled>
                        @elseif($rowSKUsaha->status_id == "3")
                            <input type="text"  class="form-control"  id="" value="ditolak" disabled>
                        @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <label class="col-form-label" for="basic-default-name">Pekerjaan</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="text"  class="form-control"  id="" value="{{$rowSKUsaha->pekerjaan}}" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <label class="col-form-label" for="basic-default-name">Type Usaha</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="text"  class="form-control"  id="" value="{{$rowSKUsaha->typeUsaha}}" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <label class="col-form-label" for="basic-default-name">Mulai Usaha</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="text"  class="form-control"  id="" value="{{$rowSKUsaha->mulaiUsaha}}" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label" for="basic-default-name">Foto Usaha</label>
                    <div class="col-sm-8">
                        @if ($rowSKUsaha->fotoUsaha != '')
                            <input type="hidden" name="fotoUsaha_inputCurent" class="form-control" id="basic-default-name" value="{{ $rowSKUsaha->fotoUsaha }}">
                            <img src="{{url('images/skusaha/'.$rowSKUsaha->fotoUsaha)}}" alt="" width="120" height="120">
                        @else
                            <img src="{{URL::asset('images/user/image_empty.jpg')}}" alt="" width="100" height="100">
                        @endif
                    </div>
                </div>
            </div>
            <div class="card-footer">
                    <div class="float-start">
                        <a href="{{ url('/admin/sku_data') }}" class="btn btn-secondary btn-sm"><i class="fa-solid fa-left-long"></i> Back</a>
                    </div>
                    <div class="float-end">
                        @if ($rowSKUsaha->status_id == "1")
                            <button class="btn btn-danger btn-sm" id="btnSKUFailed">Batalkan</button>
                            <button class="btn btn-success btn-sm" id="btnSKUSuccess">Terima</button>
                        @endif
                    </div>
            </div>
        </div>
        <br>
        <div id="formSKUSuccess" style="display: none">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between bg-success">
                    <h5 class="mb-0 text-white">Form Terima</h5>
                </div>
                <div class="card-body px-5 py-4">
                    <form method="POST" action="{{ route('admin.submitProcessSKUsahaSuccess') }}" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="skUsaha_id_input" class="form-control" value="{{$rowSKUsaha->id}}"/>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-company">Status</label>
                            <div class="col-sm-9">
                                <input type="text" name="skUsahaStatus_input" class="form-control"  value="2">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-company">File SKU</label>
                            <div class="col-sm-9">
                                <input type="file" name="skUsahaFile_input" class="form-control"/>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary btn-sm">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="formSKUFailed" style="display: none">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between bg-danger">
                    <h5 class="mb-0 text-white">Form Gagal</h5>
                </div>
                <div class="card-body px-5 py-4">
                    <form method="POST" action="{{ route('admin.submitProcessSKUsahaFailed') }}">
                        @csrf
                        <input type="hidden" name="skUsaha_id_input" class="form-control" value="{{$rowSKUsaha->id}}"/>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-company">Status</label>
                            <div class="col-sm-9">
                                <input type="text" name="skUsahaStatus_input" class="form-control"  value="3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-company">Keterangan</label>
                            <div class="col-sm-9">
                                <textarea name="skUsahaDeskFailed_input" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary btn-sm">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- / Content -->
<script>
$(document).ready(function(){

    $("#btnSKUSuccess").on("click", function(){
        $("#formSKUFailed").hide();
        $("#formSKUSuccess").toggle();
        // $("#id").css("display", "block");
    });
    $("#btnSKUFailed").on("click", function(){
        $("#formSKUSuccess").hide();
        $("#formSKUFailed").toggle();
    });

});
</script>

@endsection





