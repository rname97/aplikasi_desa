@extends('user.layouts.master')

@section('content')

<div class="container mt-5 mb-5 h-100">
    <!-- Basic Layout & Basic with Icons -->
    <!-- Basic Layout -->

    <form method="POST" action="{{ url('/user/profileUpdate') }}/{{ $rowUser->id }}" enctype="multipart/form-data">
        @csrf
        <div class="row h-100">
            <div class="col-sm-3">
                <div class="card shadow-lg bg-body rounded">
                    <div class="card-header py-4" style="background-color:#0c386e; color: #ffffff;">
                        <div class="mx-3">
                            <div class="float-start">
                                <h5>Profil User</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body py-4">
                        <div class="d-flex justify-content-center">
                            <div class="text-center">
                                @if ($rowUser->fotoUser == null)
                                    <img style="height: 150px;width: 150px;" class="rounded" src="{{URL::asset('images/user/image_empty.jpg')}}">
                                @else
                                    <img style="height: 150px;width: 150px;" class="rounded" src="{{URL::asset('images/user/'.$rowUser->fotoUser)}}">
                                @endif
                                <br>
                                <br>
                                <div>
                                    <h4>{{ $rowUser->name }}</h4>
                                    <h6>{{ $rowUser->email }}</h6>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="card shadow-lg bg-body rounded">
                    <div class="card-header py-4" style="background-color:#0c386e; color: #ffffff;">
                        <div class="mx-3">
                            <div class="float-start">
                                <h5>Detail User</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div id="displayDataUser">
                            <div class="py-4 px-5">
                                <div class="px-3">
                                    <div class="row mb-3 ">
                                        <label class="col-md-3 col-form-label" for="basic-default-name">Nik</label>
                                        <div class="col-md-9">
                                        <input type="text" name="" class="form-control" id="basic-default-name" disabled value="{{ $rowUser->nik }}" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3 col-form-label" for="basic-default-company">Nama</label>
                                        <div class="col-md-9">
                                        <input type="text" name="" class="form-control" id="basic-default-company" disabled value="{{ $rowUser->name }}" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3 col-form-label" for="basic-default-company">Email</label>
                                        <div class="col-md-9">
                                        <input type="text" name="" class="form-control" id="basic-default-company" disabled value="{{ $rowUser->email }}" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3 col-form-label" for="basic-default-company">Tempat Lahir</label>
                                        <div class="col-md-9">
                                        <input type="text" name="" class="form-control" id="basic-default-company" disabled value="{{ $rowUser->tempatLahir }}" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3 col-form-label" for="basic-default-company">Tanggal Lahir</label>
                                        <div class="col-md-9">
                                        <input type="text" name="" class="form-control" id="basic-default-company" disabled value="{{ $rowUser->tanggalLahir }}" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3 col-form-label" for="basic-default-company">Agama</label>
                                        <div class="col-md-9">
                                        <input type="text" name="" class="form-control" id="basic-default-company" disabled value="{{ $rowUser->agama }}" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3 col-form-label" for="basic-default-company">No Telp</label>
                                        <div class="col-md-9">
                                        <input type="text" name="" class="form-control" id="basic-default-company" disabled value="{{ $rowUser->noTelp }}" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3 col-form-label" for="basic-default-company">Alamat KTP</label>
                                        <div class="col-md-9">
                                            <textarea name="" class="form-control" id="" disabled>{{ $rowUser->alamatKTP }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3 col-form-label" for="basic-default-company">Alamat Domilisil</label>
                                        <div class="col-md-9">
                                            <textarea name="" class="form-control" id="" disabled>{{ $rowUser->alamatDomisili }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="formKTP" style="display:none">
                            <div class="py-4 px-5">
                                <div class="px-3">
                                    <div class="row mb-3 " id="nik_input_ktp">
                                        <label class="col-md-3 col-form-label" for="basic-default-name">Nik</label>
                                        <div class="col-md-9">
                                        <input type="text" name="nik_input" class="form-control" id="basic-default-name" value="{{ $rowUser->nik }}" required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3 col-form-label" for="basic-default-company">Nama</label>
                                        <div class="col-md-9">
                                        <input type="text" name="name_input" class="form-control" id="basic-default-company" value="{{ $rowUser->name }}" required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3 col-form-label" for="basic-default-company">Tempat Lahir</label>
                                        <div class="col-md-9">
                                        <input type="text" name="tempatLahir_input" class="form-control" id="basic-default-company" value="{{ $rowUser->tempatLahir }}" required/>
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-3">
                                        <label class="col-md-3 col-form-label" for="basic-default-company">Tanggal Lahir</label>
                                        <div class="col-md-9">
                                        <input type="text" name="tanggalLahir_input" class="form-control" id="basic-default-company" value="{{ $rowUser->tanggalLahir }}" required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3 col-form-label" for="basic-default-company">Agama</label>
                                        <div class="col-md-9">
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
                                        <label class="col-md-3 col-form-label" for="basic-default-company">No Telp</label>
                                        <div class="col-md-9">
                                        <input type="text" name="noTelp_input" class="form-control" id="basic-default-company" value="{{ $rowUser->noTelp }}" required/>
                                        </div>
                                    </div>

                                    
                                    <div class="row mb-3">
                                        <label class="col-md-3 col-form-label" for="basic-default-company">Alamat KTP</label>
                                        <div class="col-md-9">
                                            <textarea name="alamatKTP_input" class="form-control" id="" required>{{ $rowUser->alamatKTP }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3 col-form-label" for="basic-default-company">Alamat Domilisil</label>
                                        <div class="col-md-9">
                                            <textarea name="alamatDomisili_input" class="form-control" id="" required>{{ $rowUser->alamatDomisili }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3 ">
                                        <label class="col-md-3 col-form-label" for="basic-default-name">Foto Profile</label>
                                        <div class="col-md-9">
                                            
                                        @if ($rowUser->fotoUser != "" || $rowUser->fotoUser != null)
                                        <input type="hidden" name="fotoUser_inputcurrent" class="form-control" id="basic-default-name" value="{{ $rowUser->fotoUser }}"/>
                                            <input type="file" name="fotoUser_input" class="form-control" id="basic-default-name" value=""/>
                                        @else
                                            <input type="file" name="fotoUser_input" class="form-control" id="basic-default-name" value="" required/>
                                        @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer p-4">
                        <div id="footer-display">
                            <div class="float-start">
                                <button class="btn btn-secondary btn-sm"><i class="fa-solid fa-left-long"></i> Back</button>
                            </div>
                            <div class="float-end">
                                <button class="btn btn-primary btn-sm" type="button" id="btn-edit"><i class="fa-solid fa-paper-plane"></i> Edit</button>
                            </div>
                        </div>
                        <div id="footer-form-display" style="display: none">
                            <div class="float-start">
                                <button class="btn btn-secondary btn-sm"><i class="fa-solid fa-left-long"></i> Back</button>
                            </div>
                            <div class="float-end">
                                <button class="btn btn-danger btn-sm" type="button"><i class="fa-solid fa-rotate-right"></i> Reset</button>
                                <button class="btn btn-primary btn-sm" type="submit" id="btn-update"><i class="fa-solid fa-paper-plane"></i> Update</button>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
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

            $("#btn-edit").on("click", function(){
                $("#footer-display").css("display", "none");
                $("#displayDataUser").css("display", "none");
                // $("#ktpButtonExistingXNoExisting").css("display", "block");
                $("#footer-form-display").css("display", "block");
                $('#formKTP').css("display","block");
            })


            // $("#ktpExisting").on("click", function(){
            //     $("#nik_input_ktp").css("display","");
            //     $("#ktpStatus_input").val("existing");
            //     

            // });

            // $("#ktpNoExisting").on("click", function(){
            //     $("#nik_input_ktp").css("display","none");
            //     $("#ktpStatus_input").val("noexisting");
            //     $('#formKTP').css("display","block");

            // });

        });
    </script>
@endsection
