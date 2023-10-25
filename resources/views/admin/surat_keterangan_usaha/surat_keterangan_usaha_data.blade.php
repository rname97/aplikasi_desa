@extends('admin.layouts.master')

@section('content')
<h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>
<div class="card">
    <div class="card-header bg-primary">
        <div class="d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2 text-white">Data Surat Keterangan Usaha</h5>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive text-nowrap">
            <table class="table" id="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nik</th>
                        <th>Nama</th>
                        <th>pekerjaan</th>
                        <th>type Usaha</th>
                        <th>lokasi Usaha</th>
                        <th>mulai Usaha</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0" >
                    <?php $no=1;?>
                    @foreach ($dataSuratKeteranganUsaha as $rowSuratKeteranganUsaha)
                        <tr>
                            <td><span class="fw-medium">{{ $no++ }}</span></td>
                            @foreach ($dataUser as $rowUser)
                                @if ($rowUser->id == $rowSuratKeteranganUsaha->user_id)
                                    <td><span class="fw-medium">{{ $rowUser->nik }}</span></td>
                                    <td><span class="fw-medium">{{ $rowUser->name }}</span></td>
                                @endif
                            @endforeach
                            <td><span class="fw-medium">{{ $rowSuratKeteranganUsaha->pekerjaan }}</span></td>
                            <td><span class="fw-medium">{{ $rowSuratKeteranganUsaha->typeUsaha }}</span></td>
                            <td><span class="fw-medium">{{ $rowSuratKeteranganUsaha->lokasiUsaha }}</span></td>
                            <td><span class="fw-medium">{{ $rowSuratKeteranganUsaha->mulaiUsaha }}</span></td>
                            <td>
                                <a href="{{ url('/admin/sku_form_process/'.$rowSuratKeteranganUsaha->id.'/'.$rowSuratKeteranganUsaha->user_id) }}" class="btn btn-sm btn-primary"><i class='bx bxs-plus-square'></i>Process</a>
                                <a href="{{ url('/admin/deleteSKUsaha/'.$rowSuratKeteranganUsaha->id) }}" class="btn btn-sm btn-danger"><i class='bx bxs-plus-square'></i>delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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

