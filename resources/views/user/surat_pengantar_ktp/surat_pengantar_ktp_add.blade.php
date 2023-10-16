@extends('user.layouts.master')

@section('content')

    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Horizontal Layouts</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Pendaftaran Surat Pengantar KTP</h5>
            {{-- <small class="text-muted float-end">Default label</small> --}}
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('user.submitAddSPKTP') }}">
                @csrf
              <div class="row mb-3">

                <label class="col-sm-2 col-form-label" for="basic-default-name">Nik</label>
                <div class="col-sm-10">
                  <input type="text" name="nik_input" class="form-control" id="basic-default-name" placeholder="Input Nik" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Nama</label>
                <div class="col-sm-10">
                  <input type="text" name="nama_input" class="form-control" id="basic-default-company" placeholder="Input Nama" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Tempat Lahir</label>
                <div class="col-sm-10">
                  <input type="text" name="tempatLahir_input" class="form-control" id="basic-default-company" placeholder="Input Tempat Lahir" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Tanggal Lahir</label>
                <div class="col-sm-10">
                  <input type="text" name="tanggalLahir_input" class="form-control" id="basic-default-company" placeholder="Input Tanggal Lahir" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Pekerjaan</label>
                <div class="col-sm-10">
                  <input type="text" name="pekerjaan_input" class="form-control" id="basic-default-company" placeholder="Input Pekerjaan" />
                </div>
              </div>


              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">alamat</label>
                <div class="col-sm-10">
                    <textarea name="alamat_input" id="" class="form-control" cols="30" rows="10" placeholder="Input Alamat"></textarea>
                </div>
              </div>


              <div class="row justify-content-end">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Basic with Icons -->

    </div>

  <!-- / Content -->

@endsection
