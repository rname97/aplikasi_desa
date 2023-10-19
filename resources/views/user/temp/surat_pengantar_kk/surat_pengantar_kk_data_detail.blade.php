    @extends('user.layouts.master')

    @section('content')
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

    <div class="row">

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Data Surat Keterangan KK</h5>
                </div>
                <hr>
            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-sm-2">
                        <span class="text-heading fw-medium text-truncate">Nik</span>
                    </div>

                    <div class="col-sm-4">
                        <span class="text-heading fw-medium text-truncate"> : {{$rowSKUsaha->nik}}</span>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-sm-2">
                        <span class="text-heading fw-medium text-truncate">Nama</span>
                    </div>

                    <div class="col-sm-4">
                        <span class="text-heading fw-medium text-truncate"> : {{$rowSKUsaha->nama}}</span>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-sm-2">
                        <span class="text-heading fw-medium text-truncate">Tempat Tanggal Lahir</span>
                    </div>

                    <div class="col-sm-4">
                        <span class="text-heading fw-medium text-truncate"> : {{$rowSKUsaha->tempatLahir}} - {{$rowSKUsaha->tanggalLahir}}</span>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-sm-2">
                        <span class="text-heading fw-medium text-truncate">Pekerjaan</span>
                    </div>

                    <div class="col-sm-4">
                        <span class="text-heading fw-medium text-truncate"> : {{$rowSKUsaha->pekerjaan}}</span>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-sm-2">
                        <span class="text-heading fw-medium text-truncate">Alamat</span>
                    </div>

                    <div class="col-sm-4">
                        <span class="text-heading fw-medium text-truncate"> : {{$rowSKUsaha->alamat}}</span>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-sm-2">
                        <span class="text-heading fw-medium text-truncate">Status</span>
                    </div>

                    <div class="col-sm-4">
                        <span class="text-heading fw-medium text-truncate"> : {{$rowSKUsaha->status}}</span>
                    </div>
                </div>


            </div>

            <div class="card-header">
                <hr>
                <button class="btn btn-secondary">Back</button>

                @if ($rowSKUsaha->status == "proccess")
                    <button class="btn btn-danger" id="btnSKUFailed">Batalkan</button>
                    <button class="btn btn-success" id="btnSKUSuccess">Terima</button>
                @endif

            </div>
        </div>
        <br>

        <div style="display: none" id="formSKUSuccess">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Form Terima</h5>
                </div>
                <hr>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.submitProccessSKUsahaSuccess') }}">
                        @csrf
                        <input type="text" name="sku_id" class="form-control" value="{{$rowSKUsaha->id}}"/>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">File SKU</label>
                            <div class="col-sm-10">
                                <input type="file" name="bookImageCover" class="form-control" id="basic-default-company"/>
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


        <div id="formSKUFailed">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Form Gagal</h5>
                </div>
                 <hr>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.submitProccessSKUsahaFailed') }}">
                        @csrf
                        <input type="text" name="sku_id" class="form-control" value="{{$rowSKUsaha->id}}"/>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">keterangan</label>
                            <div class="col-sm-10">
                                <textarea name="skuDesk"  class="form-control" id="" cols="30" rows="10"></textarea>
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





