@extends('admin.layouts.master')

@section('content')

<h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Horizontal Layouts</h4>
<!-- Basic Layout & Basic with Icons -->
<div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
        <form method="POST" action="{{ url('/admin/submitEditUser') }}/{{ $rowUser->id }}" enctype="multipart/form-data">
            @csrf
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between bg-primary">
                    <h5 class="mb-0 text-white">Edit Data User</h5>
                    <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">KTP STATUS</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Existing</option>
                                <option value="1">No Existing</option>
                              </select>
                        </div>
                    </div>
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
                        <label class="col-sm-2 col-form-label" for="basic-default-company">tempatLahir</label>
                        <div class="col-sm-10">
                            <input type="text" name="tempatLahir_input" class="form-control" id="basic-default-company" value="{{$rowUser->tempatLahir}}"  />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-company">tanggalLahir</label>
                        <div class="col-sm-10">
                            <input type="text" name="tanggalLahir_input" class="form-control" id="basic-default-company" value="{{$rowUser->tanggalLahir}}"  />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-company">alamatKTP</label>
                        <div class="col-sm-10">
                            <input type="text" name="alamatKTP_input" class="form-control" id="basic-default-company" value="{{$rowUser->alamatKTP}}"  />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-company">alamatDomisili</label>
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
                    <div class="row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-secondary">Back</button>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Basic with Icons -->
</div>
<!-- / Content -->
@endsection
