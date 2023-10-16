@extends('user.layouts.master')

@section('content')
<h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>
<div class="card">
    <div class="card-header">
        <div class="d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2">Data Surat Keterangan Usaha (SKU)</h5>
            <div class="dropdown">
                <a href="{{ url('/user/sku_form_add') }}" class="btn btn-sm btn-primary"><i class='bx bxs-plus-square'></i>Tambah</a>
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
                @foreach ($dataSuratKeteranganUsaha as $rowSuratKeteranganUsaha)
                    <tr>
                        <td><span class="fw-medium"></span></td>
                        <td><span class="fw-medium">{{ $rowSuratKeteranganUsaha->nik }}</span></td>
                        <td><span class="fw-medium">{{ $rowSuratKeteranganUsaha->nama }}</span></td>
                        <td><span class="fw-medium">{{ $rowSuratKeteranganUsaha->tempatLahir }} - {{ $rowSuratKeteranganUsaha->tanggalLahir }}</span></td>
                        <td><span class="fw-medium">{{ $rowSuratKeteranganUsaha->pekerjaan }}</span></td>
                        <td><span class="fw-medium">{{ $rowSuratKeteranganUsaha->status }}</span></td>
                        <td>
                            <a href="{{ url('/user/sku_data_detail/'.$rowSuratKeteranganUsaha->id) }}" class="btn btn-sm btn-secondary"><i class='bx bxs-plus-square'></i>Detail</a>
                            @if ($rowSuratKeteranganUsaha->status == "ditolak")
                            <a href="{{ url('/user/sku_form_edit/'.$rowSuratKeteranganUsaha->id) }}" class="btn btn-sm btn-secondary"><i class='bx bxs-plus-square'></i>Edit</a>
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
