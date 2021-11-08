{{-- @include('dashboard.header')
<div style="height: 1200px"></div>
<p>success</p>

@include('dashboard.footer') --}}

@extends('dashboard.layout')
@section('content')

<div class="wrapper">
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container" >
                @include('dashboard.layouts.statics')
            </div>
        </div>
    </div>
</div>
@endsection