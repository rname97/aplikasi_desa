@extends('user.layouts.master')
@section('content')
<div class="container mt-5 mb-5 h-100 content">
    <div class="card shadow-lg bg-body rounded  h-100">
        <div class="card-header py-4" style=" background-color:#0c386e; color: #ffffff;">
            <div class="mx-3">
                <div class="float-start">
                    <h5>SURAT PENGADUAN MASYARAKAT</h5>
                    <p>Data Surat Pengaduan Masyarakat</p>
                </div>
                <div class="float-end">
                    <a href="{{ url('/user/spm_form_add') }}" class="btn btn-success btn-sm"><i class="fa-solid fa-plus"></i> Request Surat</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="container table-responsive py-3">
                <table id="table" class="table table-striped table-bordered table-hover tbl-container bdr" style="width:100%" >
                    <thead style="">
                        <tr>
                            <th><span style="font-size: smaller;">#</span></th>
                            <th><span style="font-size: smaller;">Nama</span></th>
                            <th><span style="font-size: smaller;">Status</span></th>
                            <th><span style="font-size: smaller;">Action</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1;?>
                        @if ($dataSuratPengaduanMasyarakat != null)
                            @foreach ($dataSuratPengaduanMasyarakat as $rowSuratPengaduanMasyarakat)
                                @if ($rowSuratPengaduanMasyarakat->user == $rowUser->id)
                                <tr>
                                    <td><span style="font-size: smaller;">{{ $no++ }}</span></td>
                                    <td><span style="font-size: smaller;">{{ $rowUser->name }}</span></td>

                                        @if (1 ==  $rowSuratPengaduanMasyarakat->status)
                                            <td><button type="button" class="btn btn-primary btn-sm py-0" disabled>prossess</button></td>
                                        @elseif (2 ==  $rowSuratPengaduanMasyarakat->status)
                                            <td><button type="button" class="btn btn-success btn-sm py-0" disabled>diterima</button></td>
                                        @elseif (3 ==  $rowSuratPengaduanMasyarakat->status)
                                            <td><button type="button" class="btn btn-danger btn-sm py-0" disabled>ditolak</button></td>
                                        @endif

                                    <td>
                                        <a href="{{ url('/user/spm_data_detail/'.$rowSuratPengaduanMasyarakat->id) }}" class="btn btn-sm btn-primary"><i class="fa-solid fa-eye"></i></a>
                                        @if ($rowSuratPengaduanMasyarakat->status_id == 3)
                                            <a href="{{ url('/user/spktp_form_edit/'.$rowSuratPengaduanMasyarakat->id) }}" class="btn btn-sm btn-warning"><i class="fa-solid fa-pencil"></i></a>
                                        @endif
                                    </td>
                                </tr>
                                @endif

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
