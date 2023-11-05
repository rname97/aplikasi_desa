@extends('user.layouts.master')

@section('content')

<div class="container mt-5 mb-5 h-100 content" >
    <!-- Basic Layout & Basic with Icons -->
    <!-- Basic Layout -->
    <form method="POST" action="{{ route('user.submitAddSPM') }}" enctype="multipart/form-data">
        @csrf
        <div class="row h-100 d-flex justify-content-center">
            <div class="col-sm-8">
        <div class="card shadow-lg bg-body rounded">
            <div class="card-header py-4" style="background-color:#0c386e; color: #ffffff;">
                <div class="mx-3">
                    <div class="float-end">
                        <i class="fa-solid fa-file-lines fa-3x"></i>
                    </div>
                    <div class="float-start">
                        <h5>TAMBAH SURAT PENGADUAN MASYARAKAT</h5>
                    </div>
                </div>
            </div>
            <div class="card-body py-4 px-5">
                <div class="px-3">
                    <div class="row mb-3 ">
                        <label class="col-md-3 col-form-label text-nowrap" for="basic-default-name">User</label>
                        <div class="col-md-9">
                            <select class="form-select" aria-label="Default select example" id="userSelect">
                                <option value="1">User</option>
                                <option value="2">Anonymous</option>
                              </select>
                        </div>
                    </div>


                    <input type="hidden" class="form-control" id="user_temp" name="user_input" value="{{$rowUser->id}}">
                    <input type="hidden" class="form-control" id="user_input" name="user_input" value="{{$rowUser->id}}">
                    <div id="userForm">

                        <input type="hidden" class="form-control" name="" value="{{$rowUser->id}}">
                        <div class="row mb-3 ">
                            <label class="col-md-3 col-form-label text-nowrap" for="basic-default-name">Nik</label>
                            <div class="col-md-9">
                            <input type="text" name="" class="form-control" id="basic-default-name" disabled value="{{$rowUser->nik}}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label" for="basic-default-company">Nama</label>
                            <div class="col-md-9">
                            <input type="text" name="" class="form-control" id="basic-default-company" disabled value="{{$rowUser->name}}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label" for="basic-default-company">Tempat, Tanggal Lahir</label>
                            <div class="col-md-4">
                                <input type="text" name="" class="form-control" id="basic-default-company" disabled value="{{$rowUser->tempatLahir}} " />
                            </div>
                            <div class="col-md-5">
                                <input type="text" name="" class="form-control" id="basic-default-company" disabled value="{{$rowUser->tanggalLahir}}"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label" for="basic-default-company">Agama</label>
                            <div class="col-md-9">
                            <input type="text" name="" class="form-control" id="basic-default-company" disabled value="{{$rowUser->agama}}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label" for="basic-default-company">No Telp</label>
                            <div class="col-md-9">
                            <input type="text" name="" class="form-control" id="basic-default-company" disabled value="{{$rowUser->noTelp}}" />
                            </div>
                        </div>
                        <div class="collapse" id="collapseExample">
                            <div class="row mb-3">
                                <label class="col-md-3 col-form-label" for="basic-default-company">alamat KTP</label>
                                <div class="col-md-9">
                                    <textarea name="" id="" class="form-control" disabled >{{$rowUser->alamatKTP}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 col-form-label" for="basic-default-company">alamat Domisili</label>
                                <div class="col-md-9">
                                    <textarea name="" id="" class="form-control" disabled >{{$rowUser->alamatDomisili}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <p>
                                <a class="" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Show Data
                                </a>
                            </p>
                        </div>
                    </div>


                    <hr>

                    <div class="row mb-3">
                        <label class="col-md-3 col-form-label" for="basic-default-company">Keterangan SPM</label>
                        <div class="col-md-9">
                        <textarea name="keteranganSPM_input" class="form-control" id="" ></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3 col-form-label" for="basic-default-company">Foto Bukti SPM</label>
                        <div class="col-md-9">
                            <input type="file" name="fotoBuktiSPM_input" class="form-control" id="basic-default-company"  required/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer p-4">
                <div class="float-start">
                    <a href="{{ url('/user/spm_data') }}" class="btn btn-secondary btn-sm"><i class="fa-solid fa-left-long"></i> Back</a>
                </div>
                <div class="float-end">
                    <button type="reset" class="btn btn-danger btn-sm"><i class="fa-solid fa-rotate-right"></i> Reset</button>
                    <button class="btn btn-primary btn-sm"><i class="fa-solid fa-paper-plane"></i> Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
    </form>
    <!-- Basic with Icons -->
</div>
  <!-- / Content -->
@endsection

@section('contentx')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#userSelect").on('change', function(){
                var z =   $(this).val();
                if(z == 2){
                    $("#userForm").css("display", "none");
                    $("#user_input").val("anonnymous");
                    // $("#userAnonForm").css("display", "block");

                }else if(z == 1){
                    $("#userForm").css("display", "block");
                    var userx = $("#user_temp").val();
                    $("#user_input").val(userx);
                }
            })
            // var conceptName = $('#aioConceptName').find(":selected").val();

        });
    </script>
@endsection
