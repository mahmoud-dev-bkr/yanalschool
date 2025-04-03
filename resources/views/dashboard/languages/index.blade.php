@extends('dashboard.layouts.master')

@php
    $title = __trans('languages');
@endphp

@section('title')
    {{ $title }}
@endsection

@section('content')

    @include('dashboard.layouts.includes.breadcrumb', ['title' => $title])

    <div class="row pt-4">
        <div class="col-md-12">
            @component('dashboard.layouts.includes.card')
                @slot('tool')
                    <a data-href="{{ route('admin.language.create') }}" data-container=".table-modal"
                        class="btn btn-modal text-white btn-primary float-end mb-2"> <i class="ti ti-plus"></i>
                        {{ __('Add') . ' ' . __('language') }}</a>
                @endslot

                @slot('content')
                    @component('dashboard.layouts.includes.table')
                        @slot('headers')
                            <td>#</td>
                            <td>{{  __('Name') }}</td>
                            <td>{{ __('key') }}</td>

                            <td>{{  __('Actions') }}</td>
                        @endslot

                        @slot('data')
                            @if (count($data) > 0)
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name ?? '' }}</td>
                                        <td>{{ $item->locale ?? '' }}</td>

                                        <td>
                                            <a data-href="{{ route('admin.language.edit', $item->id) }}" data-container=".table-modal"
                                                class="btn text-white btn-modal btn-primary btn-sm"><i class="bx bx-pencil"></i></a>
                                            <a href="{{ route('admin.language.delete', $item->id) }}"
                                                class="btn text-white btn-danger sw-alert btn-sm"><i class="bx bx-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="7">
                                        @include('dashboard.layouts.includes.alert')
                                    </td>
                                </tr>
                            @endif
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
        </div>
    </div>

    <div class="modal fade table-modal" id="table-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
    </div>
@endsection


