@extends('admin.master')
@section('title', 'Dashboard')
@section('styles')
@endsection
@section('content')
@can('Read Dashboard')
<div class="content-wrapper" style="min-height: 410px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ trans('Dashboard') }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <h2>{{ trans('Under Construction') }}</h2>
        </div>
    </div>
</div>
@endcan
@endsection
@section('scripts')
@endsection
