@extends('user.layouts.master')
@section('content')
<div class="container mt-5 mb-5 h-100 content">
    <div class="card shadow-lg bg-body rounded  h-100">
        <div class="card-header py-4" style=" background-color:#0c386e; color: #ffffff;">
            <div class="mx-3">
                <div class="float-start">
                    <h5>SURAT KETERANGAN USAHA (SKU)</h5>
                    <p>Data Surat Keteranga usaha</p>
                </div>
                <div class="float-end">
                    <a href="{{ url('/user/sku_form_add') }}" class="btn btn-success btn-sm"><i class="fa-solid fa-plus"></i> Request Surat</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="container table-responsive py-3">
                <table id="table" class="table table-striped table-bordered table-hover tbl-container bdr" style="width:100%" >
                    <thead style="">
                        <tr>
                            <th><span style="font-size: smaller;">#</span></th>
                            <th><span style="font-size: smaller;">Pekerjaan</span></th>
                            <th><span style="font-size: smaller;">Type Usaha</span></th>
                            <th><span style="font-size: smaller;">Lokasi Usaha</span></th>
                            <th><span style="font-size: smaller;">Mulai Usaha</span></th>
                            <th><span style="font-size: smaller;">Status</span></th>
                            <th><span style="font-size: smaller;">Action</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1;?>
                        @if ($dataSuratKeteranganUsaha != null)
                            @foreach ($dataSuratKeteranganUsaha as $rowSuratKeteranganUsaha)
                                <tr>
                                    <td><span style="font-size: smaller;">{{ $no++ }}</span></td>
                                    <td><span style="font-size: smaller;">{{ $rowSuratKeteranganUsaha->pekerjaan }}</span></td>
                                    <td><span style="font-size: smaller;">{{ $rowSuratKeteranganUsaha->typeUsaha }}</span></td>
                                    <td><span style="font-size: smaller;">{{ $rowSuratKeteranganUsaha->lokasiUsaha }}</span></td>
                                    <td><span style="font-size: smaller;">{{ $rowSuratKeteranganUsaha->mulaiUsaha }}</span></td>
                                    @foreach ($dataStatus as $rowStatus)
                                        @if ($rowStatus->id ==  $rowSuratKeteranganUsaha->status_id && $rowStatus->id == 1)
                                            <td><button type="button" class="btn btn-primary btn-sm py-0" disabled>prossess</button></td>
                                        @elseif ($rowStatus->id ==  $rowSuratKeteranganUsaha->status_id && $rowStatus->id == 2)
                                            <td><button type="button" class="btn btn-success btn-sm py-0" disabled>diterima</button></td>
                                        @elseif ($rowStatus->id ==  $rowSuratKeteranganUsaha->status_id && $rowStatus->id == 3)
                                            <td><button type="button" class="btn btn-danger btn-sm py-0" disabled>ditolak</button></td>
                                        @endif
                                    @endforeach
                                    <td>
                                        <a href="{{ url('/user/sku_data_detail/'.$rowSuratKeteranganUsaha->id) }}" class="btn btn-sm btn-primary"><i class="fa-solid fa-eye"></i></a>
                                        @if ($rowSuratKeteranganUsaha->status_id == 3)
                                            <a href="{{ url('/user/sku_form_edit/'.$rowSuratKeteranganUsaha->id) }}" class="btn btn-sm btn-warning"><i class="fa-solid fa-pencil"></i></a>
                                        @endif


                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer p-4">
            <div class="float-start">
                <a href="{{ url('/') }}" class="btn btn-secondary btn-sm"><i class="fa-solid fa-left-long"></i> Back</a>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->
@endsection

@section('contentx')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
        $('.dataTables_filter').addClass('float-end');
        $('.dataTables_paginate').addClass('float-end');
    });
</script>
@endsection
