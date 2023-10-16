@extends('admin.layouts.master')

@section('content')

    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Horizontal Layouts</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
    <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Basic Layout</h5>
                    <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{url('/submitEditKategori')}}/{{$rowKategori->id}}">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="kategoriName" class="form-control" id="basic-default-name" value="{{$rowKategori->kategoriName}}" placeholder="John Doe" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Deskripsi</label>
                            <div class="col-sm-10">
                                <input type="text" name="kategoriDeskripsi" class="form-control" id="basic-default-company" value="{{$rowKategori->kategoriDeskripsi}}" placeholder="ACME Inc." />
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
