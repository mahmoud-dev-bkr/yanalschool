@php
    $title = $resource->id ? __('Edit') . ' ' . __('Slider') : __('Add') . ' ' . __('Slider');
@endphp

@extends('dashboard.layouts.master')

@section('title')
    {{ $title }}
@endsection

@section('content')
    @component('dashboard.layouts.includes.card', ['title' => $title])
        @slot('content')
            <form class="form"
                action="{{ $resource->id ? route('admin.slider.update', $resource->id) : route('admin.slider.store') }}"
                method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-6 pt-3" id="logo-images">
                        @include('dashboard.sliders.div-media', ['resource' => $resource])
                    </div>
                    <div class="clearfix"></div>

                    @foreach (config('translatable.locales') as $key => $locale)
                        <div class="col-md-6 pt-2">
                            <div class="form-group">
                                <label for="name">
                                    {{ __('Title' . ' ' . $locale) }}
                                </label>
                                {!! Form::text("{$locale}[title]", old("{$locale}[title]", optional($resource->translate($locale))->title), [
                                    'class' => 'form-control',
                                    'id' => 'title',
                                ]) !!}
                            </div>
                        </div>
                    @endforeach



                </div>
                <div class="row">
                    @foreach (config('translatable.locales') as $key => $locale)
                        <div class="col-md-6 pt-2">
                            <div class="form-group">
                                <label for="name">
                                    {{ __('Description' . ' ' . $locale) }}
                                </label>
                                {!! Form::textarea(
                                    "{$locale}[description]",
                                    old("{$locale}[description]", optional($resource->translate($locale))->description),
                                    ['class' => 'form-control tinymce', 'id' => 'description'],
                                ) !!}
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="pt-4">
                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                </div>
            </form>
        @endslot
    @endcomponent
@endsection

@section('js')
    <script>
        
    </script>
@endsection
