@extends('dashboard.layouts.master')

@php
    $title = __('Translations');
@endphp

@section('title')
    {{ $title }}
@endsection
@section('css')
    <style>
        ul.pagination {
            justify-content: center;
        }
    </style>
@endsection

@section('content')

    @include('dashboard.layouts.includes.breadcrumb', ['title' => $title])

    <div class="row pt-4">
        <div class="col-md-12">
            @component('dashboard.layouts.includes.card')
                @slot('tool')
                    <div class="card">
                       <div class="card-body">
                        <form action="{{ route('admin.translation.index') }}" method="get" class="row">
                            <div class="col-md-10">
                                <input class="form-control p-3" name="search" value="{{ request()->get('search') ?? '' }} " type="text" id="search-input" placeholder="Search by key">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary p-3">{{ __('Search') }}</button>
                            </div>
                        </form>
                       </div>
                    </div>
                @endslot

                @slot('content')
                    <form action="{{ route('admin.translation.saveTranslations') }}" method="post">
                        @csrf
                        @component('dashboard.layouts.includes.table')
                            @slot('headers')
                                <td>#</td>
                                <td>{{ __trans('key') }}</td>
                                @foreach ($langs as $item)
                                <td>{{ __trans('trans_' . $item->locale) }}</td>
                                @endforeach
                                <td>{{ __trans('Actions') }}</td>
                                @endslot

                                @slot('data')
                                @if (count($data) > 0)
                                @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->key }}</td>
                                            @foreach ($langs as $lang)
                                                <td>
                                                    <input type="text" name="{{ $item->id }}[{{ $lang->locale }}][value]"
                                                        class="form-control"
                                                        value="{{ optional($item->translate($lang->locale))->value ?? $item->key }}">
                                                </td>
                                            @endforeach
                                            <td>
                                                <a href="{{ route('admin.translation.delete', $item->id) }}" class="btn btn-danger sw-alert">
                                                    <i class="bx bx-trash"></i>
                                                </a>
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
                        <div class="pt-3 text-center">
                            {{ $data->appends(request()->query())->render() }}
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-primary">{{ __trans('save') }}</button>
                        </div>
                    </form>
                @endslot
            @endcomponent


        </div>
    </div>


@endsection
