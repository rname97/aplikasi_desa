@extends('user.layouts.master')
@section('content')
<div class="container mt-5 mb-5 h-100">
    <div class="card shadow-lg bg-body rounded">
        <div class="card-header py-4" style=" background-color:#0c386e; color: #ffffff;">
            <div class="mx-3">
                <div class="float-start">
                    <h5>SURAT KETERANGAN USAHA (SKU)</h5>
                    <p>Data Surat Keteranga usaha</p>
                </div>
                <div class="float-end">
                    <a href="{{ url('/user/sku_form_add') }}" class="btn btn-success"><i class="fa-solid fa-plus"></i> Request Surat</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="container table-responsive py-3">
                <table id="table" class="table table-striped table-bordered table-hover tbl-container bdr" style="width:100%" >
                    <thead style="">
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span style="font-size: smaller;">Tiger Nixon</span></td>
                            <td><span style="font-size: smaller;">System Architect</span></td>
                            <td><span style="font-size: smaller;">Edinburgh</span></td>
                            <td><span style="font-size: smaller;">61</span></td>
                            <td><span style="font-size: smaller;">2011-04-25</span></td>
                            <td>
                                <a href="" class="btn btn-sm btn-warning"><i class="fa-solid fa-pencil"></i></a>
                                <a href="" class="btn btn-sm btn-primary"><i class="fa-solid fa-eye"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><span style="font-size: smaller;">Garrett Winters</span></td>
                            <td><span style="font-size: smaller;">Accountant</span></td>
                            <td><span style="font-size: smaller;">Tokyo</span></td>
                            <td><span style="font-size: smaller;">63</span></td>
                            <td><span style="font-size: smaller;">2011-07-25</span></td>
                            <td>
                                <a href="" class="btn btn-sm btn-warning"><i class="fa-solid fa-pencil"></i></a>
                                <a href="" class="btn btn-sm btn-primary"><i class="fa-solid fa-eye"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><span style="font-size: smaller;">Ashton Cox</span></td>
                            <td><span style="font-size: smaller;">Junior Technical Author</span></td>
                            <td><span style="font-size: smaller;">San Francisco</span></td>
                            <td><span style="font-size: smaller;">66</span></td>
                            <td><span style="font-size: smaller;">2009-01-12</span></td>
                            <td>
                                <a href="" class="btn btn-sm btn-warning"><i class="fa-solid fa-pencil"></i></a>
                                <a href="" class="btn btn-sm btn-primary"><i class="fa-solid fa-eye"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><span style="font-size: smaller;">Cedric Kelly</span></td>
                            <td><span style="font-size: smaller;">Senior Javascript Developer</span></td>
                            <td><span style="font-size: smaller;">Edinburgh</span></td>
                            <td><span style="font-size: smaller;">22</span></td>
                            <td><span style="font-size: smaller;">2012-03-29</span></td>
                            <td>
                                <a href="" class="btn btn-sm btn-warning"><i class="fa-solid fa-pencil"></i></a>
                                <a href="" class="btn btn-sm btn-primary"><i class="fa-solid fa-eye"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer p-4">
            <div class="float-start">
                <button class="btn btn-secondary"><i class="fa-solid fa-left-long"></i> Back</button>
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
