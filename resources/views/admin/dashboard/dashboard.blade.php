@extends('admin.layouts.master')

@section('content')


<div id="project" class="row" >
    <div class="col-sm-12">


        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-4 g-3">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-info">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title m-0 me-2 text-white">Data Pengajuan Surat</h5>
                        </div>

                    </div>

                    <div class="card-body">
                        <p class="mt-3"><span class="fw-medium">List Daftar Menu Surat</span></p>
                        <div class="row g-3">
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center shadow-sm p-3 mb-5 bg-body rounded">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-info rounded shadow">
                                            <i class="mdi mdi-trending-up mdi-24px"></i>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <div class="small mb-1">Surat Keterangan Usaha</div>
                                        <a href="{{ url('/admin/sku_data') }}" class="btn btn-primary btn-sm py-1">Detail</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center shadow-sm p-3 mb-5 bg-body rounded">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-info rounded shadow">
                                            <i class="mdi mdi-account-outline mdi-24px"></i>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <div class="small mb-1">Surat Pengajuan KTP</div>
                                        <a href="{{ url('/admin/spktp_data') }}" class="btn btn-primary btn-sm py-1">Detail</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center shadow-sm p-3 mb-5 bg-body rounded">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-info rounded shadow">
                                            <i class="mdi mdi-cellphone-link mdi-24px"></i>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <div class="small mb-1">Surat Pengajuan KK</div>
                                        <a href="{{ url('/admin/spkk_data') }}" class="btn btn-primary btn-sm py-1">Detail</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center shadow-sm p-3 mb-5 bg-body rounded">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-info rounded shadow">
                                            <i class="mdi mdi-currency-usd mdi-24px"></i>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <div class="small mb-1">Pelayanan Masyarakat</div>
                                        <a href="{{ url('/admin/spm_data') }}" class="btn btn-primary btn-sm py-1">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Transactions -->

            <!-- Total Earnings -->
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between bg-info">
                        <h6 class="card-title m-0 me-2 text-white">Surat Keterangan Usaha</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-2 mt-md-2 mb-md-2">
                            <div class="d-flex align-items-center">
                                <h2 class="mb-0">100</h2>
                                <span class=" ms-2 fw-medium">
                                    <small>Total Surat</small>
                                </span>
                            </div>
                        </div>
                        <ul class="p-0 m-0">
                            <li class="d-flex mb-1 pb-md-2">
                                <div class="avatar flex-shrink-0 me-2">
                                    <i class="mdi mdi-cellphone-link mdi-24px"></i>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small>Surat Diproses</small>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">40</h6>
                                        <div class="progress bg-label-info" style="height: 4px">
                                            <div
                                                class="progress-bar bg-info"
                                                style="width: 75%"
                                                role="progressbar"
                                                aria-valuenow="75"
                                                aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-1 pb-md-2">
                                <div class="avatar flex-shrink-0 me-2">
                                    <i class="mdi mdi-cellphone-link mdi-24px"></i>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small>Surat Diterima</small>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">30</h6>
                                        <div class="progress bg-label-info" style="height: 4px">
                                            <div
                                                class="progress-bar bg-success"
                                                style="width: 75%"
                                                role="progressbar"
                                                aria-valuenow="75"
                                                aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-1 pb-md-2">
                                <div class="avatar flex-shrink-0 me-2">
                                    <i class="mdi mdi-cellphone-link mdi-24px"></i>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small>Surat Ditolak</small>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">10</h6>
                                        <div class="progress bg-label-info" style="height: 4px">
                                            <div
                                                class="progress-bar bg-danger"
                                                style="width: 75%"
                                                role="progressbar"
                                                aria-valuenow="75"
                                                aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Total Earnings -->
           <!-- Total Earnings -->
           <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between bg-info">
                    <h6 class="card-title m-0 me-2 text-white">Surat Pengajuan KTP</h6>
                </div>
                <div class="card-body">
                    <div class="mb-2 mt-md-2 mb-md-2">
                        <div class="d-flex align-items-center">
                            <h2 class="mb-0">100</h2>
                            <span class=" ms-2 fw-medium">
                                <small>Total Surat</small>
                            </span>
                        </div>
                    </div>
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-1 pb-md-2">
                            <div class="avatar flex-shrink-0 me-2">
                                <i class="mdi mdi-cellphone-link mdi-24px"></i>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small>Surat Diproses</small>
                                </div>
                                <div>
                                    <h6 class="mb-1">40</h6>
                                    <div class="progress bg-label-info" style="height: 4px">
                                        <div
                                            class="progress-bar bg-info"
                                            style="width: 75%"
                                            role="progressbar"
                                            aria-valuenow="75"
                                            aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-1 pb-md-2">
                            <div class="avatar flex-shrink-0 me-2">
                                <i class="mdi mdi-cellphone-link mdi-24px"></i>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small>Surat Diterima</small>
                                </div>
                                <div>
                                    <h6 class="mb-1">30</h6>
                                    <div class="progress bg-label-info" style="height: 4px">
                                        <div
                                            class="progress-bar bg-success"
                                            style="width: 75%"
                                            role="progressbar"
                                            aria-valuenow="75"
                                            aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-1 pb-md-2">
                            <div class="avatar flex-shrink-0 me-2">
                                <i class="mdi mdi-cellphone-link mdi-24px"></i>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small>Surat Ditolak</small>
                                </div>
                                <div>
                                    <h6 class="mb-1">10</h6>
                                    <div class="progress bg-label-info" style="height: 4px">
                                        <div
                                            class="progress-bar bg-danger"
                                            style="width: 75%"
                                            role="progressbar"
                                            aria-valuenow="75"
                                            aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Total Earnings -->
            <!-- Total Earnings -->
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between bg-info">
                        <h6 class="card-title m-0 me-2 text-white">Surat Pengajuan KK</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-2 mt-md-2 mb-md-2">
                            <div class="d-flex align-items-center">
                                <h2 class="mb-0">100</h2>
                                <span class=" ms-2 fw-medium">
                                    <small>Total Surat</small>
                                </span>
                            </div>
                        </div>
                        <ul class="p-0 m-0">
                            <li class="d-flex mb-1 pb-md-2">
                                <div class="avatar flex-shrink-0 me-2">
                                    <i class="mdi mdi-cellphone-link mdi-24px"></i>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small>Surat Diproses</small>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">40</h6>
                                        <div class="progress bg-label-info" style="height: 4px">
                                            <div
                                                class="progress-bar bg-info"
                                                style="width: 75%"
                                                role="progressbar"
                                                aria-valuenow="75"
                                                aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-1 pb-md-2">
                                <div class="avatar flex-shrink-0 me-2">
                                    <i class="mdi mdi-cellphone-link mdi-24px"></i>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small>Surat Diterima</small>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">30</h6>
                                        <div class="progress bg-label-info" style="height: 4px">
                                            <div
                                                class="progress-bar bg-success"
                                                style="width: 75%"
                                                role="progressbar"
                                                aria-valuenow="75"
                                                aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-1 pb-md-2">
                                <div class="avatar flex-shrink-0 me-2">
                                    <i class="mdi mdi-cellphone-link mdi-24px"></i>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small>Surat Ditolak</small>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">10</h6>
                                        <div class="progress bg-label-info" style="height: 4px">
                                            <div
                                                class="progress-bar bg-danger"
                                                style="width: 75%"
                                                role="progressbar"
                                                aria-valuenow="75"
                                                aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Total Earnings -->
           <!-- Total Earnings -->
           <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between bg-info">
                    <h6 class="card-title m-0 me-2 text-white">Pelayanan Masyarakat</h6>
                </div>
                <div class="card-body">
                    <div class="mb-2 mt-md-2 mb-md-2">
                        <div class="d-flex align-items-center">
                            <h2 class="mb-0">100</h2>
                            <span class=" ms-2 fw-medium">
                                <small>Total Surat</small>
                            </span>
                        </div>
                    </div>
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-1 pb-md-2">
                            <div class="avatar flex-shrink-0 me-2">
                                <i class="mdi mdi-cellphone-link mdi-24px"></i>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small>Surat Diproses</small>
                                </div>
                                <div>
                                    <h6 class="mb-1">40</h6>
                                    <div class="progress bg-label-info" style="height: 4px">
                                        <div
                                            class="progress-bar bg-info"
                                            style="width: 75%"
                                            role="progressbar"
                                            aria-valuenow="75"
                                            aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-1 pb-md-2">
                            <div class="avatar flex-shrink-0 me-2">
                                <i class="mdi mdi-cellphone-link mdi-24px"></i>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small>Surat Diterima</small>
                                </div>
                                <div>
                                    <h6 class="mb-1">30</h6>
                                    <div class="progress bg-label-info" style="height: 4px">
                                        <div
                                            class="progress-bar bg-success"
                                            style="width: 75%"
                                            role="progressbar"
                                            aria-valuenow="75"
                                            aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-1 pb-md-2">
                            <div class="avatar flex-shrink-0 me-2">
                                <i class="mdi mdi-cellphone-link mdi-24px"></i>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small>Surat Ditolak</small>
                                </div>
                                <div>
                                    <h6 class="mb-1">10</h6>
                                    <div class="progress bg-label-info" style="height: 4px">
                                        <div
                                            class="progress-bar bg-danger"
                                            style="width: 75%"
                                            role="progressbar"
                                            aria-valuenow="75"
                                            aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Total Earnings -->

        </div>
    </div>
</div>

@endsection
