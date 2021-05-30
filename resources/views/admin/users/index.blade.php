@extends('admin.master')
@section('title', trans('Users'))
@section('content')
<div class="content-wrapper" style="min-height: 410px;">
    <div class="content-header">
        @include('admin.components.message')
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ trans('Users') }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        @include('admin.users._create')
        @include('admin.users._edit')
        @include('admin.users._table')
    </div>
</div>
@endsection
@section('scripts')
@include('admin.users._js')
@endsection

