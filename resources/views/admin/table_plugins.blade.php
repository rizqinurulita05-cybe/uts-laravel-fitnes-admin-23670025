@extends('layouts.admin')

@section('title', 'Studio | Table Plugins')
@section('show_sidebar', true)

@section('page-css')
<link href="{{ asset('assets/admin/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/admin/plugins/bootstrap-table/dist/bootstrap-table.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<div id="content" class="app-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <h1 class="page-header">Table Plugins <small>advanced data tables...</small></h1>
                <hr class="mb-4">
                <div class="card">
                    <div class="card-body">
                        <table class="table text-nowrap w-100">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>$320,800</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-js')
<script src="{{ asset('assets/admin/plugins/datatables.net/js/dataTables.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/bootstrap-table/dist/bootstrap-table.min.js') }}"></script>
@endsection
