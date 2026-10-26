@extends('layouts.admin')

@section('title', 'Studio | Calendar')
@section('app-class', 'app-content-full-height')
@section('show_sidebar', true)

@section('page-css')
<link href="{{ asset('assets/admin/plugins/@fullcalendar/core/index.global.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<div id="content" class="app-content p-0">
    <div class="calendar">
        <div class="calendar-body">
            <div id="calendar"></div>
        </div>
        <div class="calendar-sidebar">
            <div class="desktop-sticky-top flex-fill">
                <div class="calendar-sidebar-title">Draggable Events:</div>
                <div class="fc-event-list" id="external-events">
                    <div class="fc-event-item"><div class="fc-event-link" data-color="#ff2d55"><i class="fa fa-circle fs-8px me-2 text-pink"></i> Meeting</div></div>
                    <div class="fc-event-item"><div class="fc-event-link" data-color="#ff3b30"><i class="fa fa-circle fs-8px me-2 text-danger"></i> Group Discussion</div></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-js')
<script src="{{ asset('assets/admin/plugins/moment/moment.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/@fullcalendar/core/index.global.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/demo/calendar.demo.js') }}"></script>
@endsection
