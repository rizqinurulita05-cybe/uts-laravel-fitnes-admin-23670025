@extends('layouts.admin')

@section('title', 'Studio | Form Elements')
@section('show_sidebar', true)

@section('content')
<div id="content" class="app-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <h1 class="page-header">Form Elements <small>controls and inputs...</small></h1>
                <hr class="mb-4">
                <div class="card">
                    <div class="card-body pb-2">
                        <form>
                            <div class="form-group mb-3">
                                <label class="form-label">Text input</label>
                                <input type="email" class="form-control" placeholder="name@example.com">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Select dropdown</label>
                                <select class="form-select">
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-outline-theme">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
