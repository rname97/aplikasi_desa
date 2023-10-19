@extends('user.layouts.master')

@section('content')
<h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>
<div class="card">
    <div class="card-header">
        <div class="d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2">Data Surat Pengantar KTP</h5>
            <div class="dropdown">
                <a href="{{ url('/user/SPKTP_form_add') }}" class="btn btn-sm btn-primary"><i class='bx bxs-plus-square'></i>Tambah</a>
            </div>
        </div>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>nik</th>
                    <th>nama</th>
                    <th>tempat tanggal Lahir</th>
                    <th>pekerjaan</th>
                    <th>status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($dataSPKTP as $rowSPKTP)
                    <tr>
                        <td><span class="fw-medium"></span></td>
                        <td><span class="fw-medium">{{ $rowSPKTP->nik }}</span></td>
                        <td><span class="fw-medium">{{ $rowSPKTP->nama }}</span></td>
                        <td><span class="fw-medium">{{ $rowSPKTP->tempatLahir }} - {{ $rowSPKTP->tanggalLahir }}</span></td>
                        <td><span class="fw-medium">{{ $rowSPKTP->pekerjaan }}</span></td>
                        <td><span class="fw-medium">{{ $rowSPKTP->status }}</span></td>
                        <td>
                            <a href="{{ url('/user/SPKTP_data_detail/'.$rowSPKTP->id) }}" class="btn btn-sm btn-secondary"><i class='bx bxs-plus-square'></i>Detail</a>
                            @if ($rowSPKTP->status == "ditolak")
                            <a href="{{ url('/user/SPKTP_form_edit/'.$rowSPKTP->id) }}" class="btn btn-sm btn-secondary"><i class='bx bxs-plus-square'></i>Edit</a>
                            @endif

                            {{-- <a href="{{ url('/deleteBooks/'.$rowSuratKeteranganUsaha->id) }}" class="btn btn-sm btn-danger"><i class='bx bxs-plus-square'></i>delete</a> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- / Content -->

@endsection
