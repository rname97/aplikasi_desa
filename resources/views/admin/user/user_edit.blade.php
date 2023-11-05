@extends('admin.layouts.master')

@section('content')

<h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Horizontal Layouts</h4>
<!-- Basic Layout & Basic with Icons -->
<div class="row d-flex justify-content-center">
    <!-- Basic Layout -->

    <div class="col-sm-9">
        <form method="POST" action="{{ url('/admin/submitEditUser') }}/{{ $rowUser->id }}" enctype="multipart/form-data">
            @csrf
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between bg-primary">
                    <h5 class="mb-0 text-white">Edit Data User</h5>
                    <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Nik</label>
                        <div class="col-sm-10">
                            <input type="text" name="nik_input" class="form-control" id="basic-default-name" value="{{$rowUser->nik}}" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name_input" class="form-control" id="basic-default-name" value="{{$rowUser->name}}"  />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-company">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" name="tempatLahir_input" class="form-control" id="basic-default-company" value="{{$rowUser->tempatLahir}}"  />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-company">Tgl Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" name="tanggalLahir_input" class="form-control" id="basic-default-company" value="{{$rowUser->tanggalLahir}}"  />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-company">Agama</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" name="agama_input">
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Khonghucu">Khonghucu</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-company">No Telp</label>
                        <div class="col-sm-10">
                            <input type="text" name="noTelp_input" class="form-control" id="basic-default-company" value="{{$rowUser->noTelp}}"  />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-company">Alamat KTP</label>
                        <div class="col-sm-10">
                            <input type="text" name="alamatKTP_input" class="form-control" id="basic-default-company" value="{{$rowUser->alamatKTP}}"  />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-company">Alamat Domisili</label>
                        <div class="col-sm-10">
                            <input type="text" name="alamatDomisili_input" class="form-control" id="basic-default-company" value="{{$rowUser->alamatDomisili}}"  />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2 col-form-label" for="basic-default-company">Foto Profile</label>
                        <div class="col-md-10">
                            <input type="file" name="fotoProfile_input" class="form-control" id="basic-default-company"  value=""/>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Current Image</label>
                        <div class="col-sm-10">
                            @if ($rowUser->fotoUser != '')
                                <input type="hidden" name="fotoProfile_inputCurent" class="form-control" id="basic-default-name" value="{{ $rowUser->fotoUser }}">
                                <img src="{{url('images/user/'.$rowUser->fotoUser)}}" alt="" width="100" height="100">
                            @else
                                <img src="{{URL::asset('images/user/image_empty.jpg')}}" alt="" width="100" height="100">
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="float-start">
                        <a href="{{ url('/admin/user_data') }}" class="btn btn-secondary btn-sm"><i class="fa-solid fa-left-long"></i> Back</a>
                    </div>
                    <div class="float-end">
                        <button type="reset" class="btn btn-danger btn-sm"><i class="fa-solid fa-rotate-right"></i> Reset</button>
                        <button class="btn btn-primary btn-sm"><i class="fa-solid fa-paper-plane"></i> Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Basic with Icons -->
</div>
<!-- / Content -->
@endsection
