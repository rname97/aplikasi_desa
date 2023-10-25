@extends('user.layouts.master')

@section('content')

<div class="container mt-5 mb-5 h-100 content" >
    <!-- Basic Layout & Basic with Icons -->
    <!-- Basic Layout -->
    <form method="POST" action="{{ route('user.submitAddSKUsaha') }}">
        @csrf
        <div class="card shadow-lg bg-body rounded">
            <div class="card-header py-4" style="background-color:#0c386e; color: #ffffff;">
                <div class="mx-3">
                    <div class="float-end">
                        <i class="fa-solid fa-file-lines fa-3x"></i>
                    </div>
                    <div class="float-start">
                        <h5>TAMBAH PENDAFTARAN SURAT KETERANGAN USAHA (SKU)</h5>
                    </div>
                </div>
            </div>
            <div class="card-body py-4 px-5">
                <div class="px-3">
                    <div class="row mb-3 ">
                        <label class="col-md-2 col-form-label" for="basic-default-name">Nik</label>
                        <div class="col-md-10">
                        <input type="text" name="nik_input" class="form-control" id="basic-default-name" placeholder="Input Nik" disabled value="123244" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2 col-form-label" for="basic-default-company">Nama</label>
                        <div class="col-md-10">
                        <input type="text" name="nama_input" class="form-control" id="basic-default-company" placeholder="Input Nama" disabled value="user" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2 col-form-label" for="basic-default-company">Tempat, Tanggal Lahir</label>
                        <div class="col-md-5">
                            <input type="text" name="tempatLahir_input" class="form-control" id="basic-default-company" placeholder="Input Tempat Lahir" disabled value="Semarang" />
                        </div>
                        <div class="col-md-5">
                            <input type="text" name="tanggalLahir_input" class="form-control" id="basic-default-company" placeholder="Input Tanggal Lahir" disabled value="2003-01-01"/>
                        </div>
                    </div>
                    <div class="collapse" id="collapseExample">
                        <div class="row mb-3">
                            <label class="col-md-2 col-form-label" for="basic-default-company">alamat KTP</label>
                            <div class="col-md-10">
                                <textarea name="alamat_input" id="" class="form-control" placeholder="Input Alamat" disabled >Desa Rejo</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-2 col-form-label" for="basic-default-company">alamat Domisili</label>
                            <div class="col-md-10">
                                <textarea name="alamat_input" id="" class="form-control"  placeholder="Input Alamat" disabled >Desa Rejo</textarea>
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
                    <hr>
                    <div class="row mb-3">
                        <label class="col-md-2 col-form-label" for="basic-default-company">Pekerjaan</label>
                        <div class="col-md-10">
                        <input type="text" name="pekerjaan_input" class="form-control" id="basic-default-company"  />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2 col-form-label" for="basic-default-company">Type Usaha</label>
                        <div class="col-md-10">
                        <input type="text" name="pekerjaan_input" class="form-control" id="basic-default-company" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2 col-form-label" for="basic-default-company">Mulai Usaha</label>
                        <div class="col-md-10">
                            <div class='input-group date' id='datetimepicker'>
                                <input type='text' class="form-control" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2 col-form-label" for="basic-default-company">Foto Bukti Usaha</label>
                        <div class="col-md-10">
                            <input type="file" name="pekerjaan_input" class="form-control" id="basic-default-company"  />
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer p-4">
                <div class="float-start">
                    <button class="btn btn-secondary"><i class="fa-solid fa-left-long"></i> Back</button>
                </div>
                <div class="float-end">
                    <button class="btn btn-danger"><i class="fa-solid fa-rotate-right"></i> Reset</button>
                    <button class="btn btn-primary"><i class="fa-solid fa-paper-plane"></i> Submit</button>
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
            console.log("Tess");
        });
    </script>
@endsection
