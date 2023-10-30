@extends('admin.layouts.master')

@section('content')
<h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>
<div class="card">
    <div class="card-header bg-primary">
        <div class="d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2 text-white">Data Surat Pengantar KK</h5>
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
                        <th>NO Kartu Keluarga</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0" >
                    <?php $no=1;?>
                    @foreach ($dataSuratPengantarKK as $rowSuratPengantarKK)
                        <tr>
                            <td><span class="fw-medium">{{ $no++ }}</span></td>
                            @foreach ($dataUser as $rowUser)
                                @if ($rowUser->id == $rowSuratPengantarKK->user_id)
                                    <td><span class="fw-medium">{{ $rowUser->nik }}</span></td>
                                    <td><span class="fw-medium">{{ $rowUser->name }}</span></td>
                                @endif
                            @endforeach
                            <td><span class="fw-medium">{{ $rowSuratPengantarKK->noKartuKeluarga }}</span></td>
                            @foreach ($dataStatus as $rowStatus)
                                @if ($rowStatus->id ==  $rowSuratPengantarKK->status_id)
                                    <td><span class="fw-medium">{{ $rowStatus->status }}</span></td>
                                @endif
                            @endforeach
                            <td>
                                <a href="{{ url('/admin/spkk_form_process/'.$rowSuratPengantarKK->id.'/'.$rowSuratPengantarKK->user_id) }}" class="btn btn-sm btn-info"><i class='bx bxs-plus-square'></i>Process</a>
                                <a href="{{ url('/admin/deleteSPKK/'.$rowSuratPengantarKK->id) }}" class="btn btn-sm btn-danger"><i class='bx bxs-plus-square'></i>delete</a>
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

