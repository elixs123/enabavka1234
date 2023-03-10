@extends('layouts.app')

@section('head_title', $title = trans('codebook.title'))

@section('content')
    <!-- start: content header -->
    <div class="content-header row">
        <div class="content-header-left col-9 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">{{ trans('skeleton.dashboard') }}</a>
                            </li>
                            @if (is_null($type = request('type')))
                            <li class="breadcrumb-item active">{{ $title }}</li>
                                @else
                            <li class="breadcrumb-item">
                                <a href="{{ route('code-book.index') }}">{{ $title }}</a>
                            </li>
                            <li class="breadcrumb-item active">{{ trans('codebook.vars.types')[$type] }}</li>
                            @endif
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-header-right text-right col-3">
            <div class="form-group breadcrum-right">
                <div class="dropdown">
                    <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                    <div class="dropdown-menu dropdown-menu-right p-0">
                        @can('create-codebook')
                        <a class="dropdown-item" href="{{ route('code-book.create', ['type' => $type]) }}" data-toggle="modal" data-target="#form-modal1">{{ trans('codebook.actions.create') }}</a>
                        @endcan
                        <a class="dropdown-item" href="javascript:" data-toggle="collapse" data-target="#collapse-filters" aria-expanded="{{ ($filters = (request('filters', 0) == 1) ? true : false) ? 'true' : 'false' }}">{{ trans('skeleton.actions.filters') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: content header -->
    <!-- start: content body -->
    <div class="content-body">
        <div class="row">
            <div class="col-12">
                <!-- start: filters -->
                <div id="collapse-filters" class="filters collapse @if($filters){{ 'show' }}@endif">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{ trans('skeleton.actions.filters') }}</h4>
                            <a href="javascript:" class="pull-right" data-toggle="collapse" data-target="#collapse-filters" aria-expanded="{{ $filters ? 'true' : 'false' }}"><i class="feather icon-x"></i></a>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                {!! Form::open(['url' => request()->url(), 'method' => 'get', 'files' => false, 'autocomplete' => 'off', 'class' => 'validate filters-form']) !!}
                                <input type="hidden" name="filters" value="{{ request('filters', 1) }}">
                                <div class="row">
                                    <div class="col-12 col-sm-4 col-lg-6">
                                        {!! VuexyAdmin::text('keywords', request('keywords'), ['maxlength' => 100, 'placeholder' => 'Upi??ite naziv'], trans('skeleton.actions.search')) !!}
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-3">
                                        {!! VuexyAdmin::selectTwo('type', trans('codebook.vars.types'), request('type'), ['data-plugin-options' => '', 'id' => 'filters-type'], trans('codebook.data.type')) !!}
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-3">
                                        <div class="form-group">
                                            <button class="btn btn-info" type="submit"><i class="feather icon-search"></i> {{ trans('skeleton.actions.search') }}</button>
                                        </div>
                                    </div>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: filters -->
                <!-- start: items -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ is_null($type) ? $title : trans('codebook.vars.types')[$type] }} <span class="badge badge-primary" data-row-count>{{ $items->total() }}</span></h4>
                        <a data-action="expand" class="pull-right"><i class="feather icon-maximize"></i></a>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="table-responsive-lg">
                                <table class="table table-hover mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>{{ trans('codebook.data.name') }}</th>
                                            <th>{{ trans('codebook.data.code') }}</th>
                                            <th>{{ trans('codebook.data.type') }}</th>
                                            <th>{{ trans('codebook.data.background_color') }}</th>
                                            <th>{{ trans('codebook.data.color') }}</th>
                                            @can('edit-codebook')
                                            <th class="text-right">{{ trans('skeleton.data.actions') }}</th>
                                            @endcan
                                        </tr>
                                    </thead>
                                    <tbody data-ajax-form-body="code_books">
                                        @foreach($items as $id => $item)
                                        @include('code-book._row')
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="no-results @if($items->total() == 0){{ 'show' }}@endif" data-no-results>
                                <h5>{{ trans('skeleton.no_results') }}</h5>
                            </div>
                        </div>
                    </div>
                    @if($items->total())
                    <div class="card-footer">
                        {!! $items->appends(request()->query())->render() !!}
                    </div>
                    @endif
                </div>
                <!-- end: items -->
            </div>
        </div>
    </div>
    <!-- end: content body -->
@endsection
