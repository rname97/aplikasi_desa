@extends('user.layouts.master')

@section('content')

<div class="container mt-5 mb-5 h-100">
    <!-- Basic Layout & Basic with Icons -->
    <!-- Basic Layout -->
    <form method="POST" action="{{ route('user.submitAddSKUsaha') }}">
        @csrf
        <div class="row h-100">
            <div class="col-sm-4">
                <div class="card shadow-lg bg-body rounded">
                    <div class="card-header py-4" style="background-color:#0c386e; color: #ffffff;">
                        <div class="mx-3">
                            <div class="float-end">
                                <i class="fa-solid fa-file-lines fa-2x"></i>
                            </div>
                            <div class="float-start">
                                <h4>Profil</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body py-4">
                        <div class="d-flex justify-content-center">
                            <div>
                                <img src="..." class="rounded mx-auto d-block" alt="...">
                            </div>
                            <br>

                            <div>
                                <h1>Test</h1>
                            </div>


                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                          </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-8">
                <div class="card shadow-lg bg-body rounded">
                    <div class="card-header py-4" style="background-color:#0c386e; color: #ffffff;">
                        <div class="mx-3">
                            <div class="float-end">
                                <i class="fa-solid fa-file-lines fa-3x"></i>
                            </div>
                            <div class="float-start">
                                <h5>DETAIL PENDAFTARAN SURAT KETERANGAN USAHA (SKU)</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="py-4 px-5">
                            <div class="px-3">
                                <div class="row mb-3 ">
                                    <label class="col-md-3 col-form-label" for="basic-default-name">Nik</label>
                                    <div class="col-md-9">
                                    <input type="text" name="nik_input" class="form-control" id="basic-default-name" placeholder="Input Nik" disabled value="123244" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3 col-form-label" for="basic-default-company">Nama</label>
                                    <div class="col-md-9">
                                    <input type="text" name="nama_input" class="form-control" id="basic-default-company" placeholder="Input Nama" disabled value="user" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3 col-form-label" for="basic-default-company">Tempat, Tanggal Lahir</label>
                                    <div class="col-md-5">
                                        <input type="text" name="tempatLahir_input" class="form-control" id="basic-default-company" placeholder="Input Tempat Lahir" disabled value="Semarang" />
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="tanggalLahir_input" class="form-control" id="basic-default-company" placeholder="Input Tanggal Lahir" disabled value="2003-01-01"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3 col-form-label" for="basic-default-company">Pekerjaan</label>
                                    <div class="col-md-9">
                                    <input type="text" name="pekerjaan_input" class="form-control" id="basic-default-company"  />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3 col-form-label" for="basic-default-company">Type Usaha</label>
                                    <div class="col-md-9">
                                    <input type="text" name="pekerjaan_input" class="form-control" id="basic-default-company" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3 col-form-label" for="basic-default-company">Mulai Usaha</label>
                                    <div class="col-md-9">
                                        <div class='input-group date' id='datetimepicker'>
                                            <input type='text' class="form-control" />
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3 col-form-label" for="basic-default-company">Foto Bukti Usaha</label>
                                    <div class="col-md-9">
                                        <input type="file" name="pekerjaan_input" class="form-control" id="basic-default-company"  />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <br>
                        <div class="px-5">
                            <div class="px-3">
                                <div class="row mb-3">
                                    <label class="col-md-3 col-form-label" for="basic-default-company">Status</label>
                                    <div class="col-md-9">
                                        <button class="btn btn-primary">Proses</button>
                                    </div>
                                </div>
                            </div>
                            <div class="px-3">
                                <div class="row mb-3">
                                    <label class="col-md-3 col-form-label" for="basic-default-company">Deskripsi</label>
                                    <div class="col-md-9">
                                        <span>Data Pendaftaran Surat Keterangan Usaha (SKU) Masih Di Proses</span>
                                    </div>
                                </div>
                            </div>
                            <div class="px-3">
                                <div class="row mb-3">
                                    <label class="col-md-3 col-form-label" for="basic-default-company">File Pdf</label>
                                    <div class="col-md-9">
                                        <textarea name="" id="" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="card-footer p-4">
                        <div class="float-start">
                            <button class="btn btn-secondary"><i class="fa-solid fa-left-long"></i> Back</button>
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
            console.log("Tess");
        });
    </script>
@endsection
