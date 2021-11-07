@extends('dashboard.layout')
@section('content')

<div class="wrapper">
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">@lang('dashboard.sliders')</h4>
                        <ol class="breadcrumb">
                            <li><a href="">@lang('dashboard.sliders')</a></li>
                            <li class="active">@lang('dashboard.viewAll')</li>
                        </ol>
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-body">
                        {{-- @include('dashboard.layouts.messages') --}}
                        <div class="table-responsive">
                            <table class="table table-striped" id="custom_tbl_dt">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th style="text-align:center;">@lang('dashboard.image')</th>
                                    <th style="text-align:center;">@lang('dashboard.visibility')</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($sliders) > 0)
                                    @foreach($sliders as $key => $slider)
                                        <tr class="gradeX {{ $slider['id'] }}">
                                            <td style="text-align:center;">{{ $key + 1 }}</td>
                                            <td style="text-align:center;">
                                                <img src="{{ $slider['image'] }}" alt="{{ $slider['image'] }}" width="150">
                                            </td>
                                            <td style="text-align:center;">
                                                @if ($slider['display'] == 1)
                                                <input class="off" data-id="{{ $slider['id'] }}" type="checkbox" checked data-plugin="switchery" data-color="#81c868"/>
                                                @else
                                                <input class="on" data-id="{{ $slider['id'] }}" type="checkbox" data-plugin="switchery" data-color="#81c868"/>
                                                @endif
                                            </td>
                                            <td class="actions">
                                                <a data-id="{{ $slider['id'] }}" class="deletemsg" id="deleteParent"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4" style="text-align: center!important;">@lang('dashboard.noElements')</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<form method="POST" class="deleteForm">
    @csrf
    @method('DELETE')
</form>

@endsection