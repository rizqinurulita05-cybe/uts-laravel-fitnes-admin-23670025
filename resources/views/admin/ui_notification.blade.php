@extends('layouts.admin')

@section('title', 'Studio | Modal & Notifications')
@section('show_sidebar', true)

@section('content')
<div id="content" class="app-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <h1 class="page-header">Modal & Notification <small>dialog components...</small></h1>
                <hr>
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalXl">Extra Large Modal</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalXl">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Extra Large Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Modal body content goes here...</p>
            </div>
        </div>
    </div>
</div>
@endsection
