@php
    $title = $resource->id ? __('Edit') . ' ' . __('meal') : __('Add') . ' ' . __('meal');
@endphp

@extends('dashboard.layouts.master')

@section('title')
    {{ $title }}
@endsection
@section('content')
    @component('dashboard.layouts.includes.card', ['title' => $title])
        @slot('content')
            <form class="form"
                action="{{ $resource->id ? route('admin.meal.update', $resource->id) : route('admin.meal.store') }}"
                method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">


                    <div class="col-12 pt-3" id="div-media">
                        @include('dashboard.category.div-media', ['resource' => $resource])
                    </div>

                    <div class="col-12 pt-3 ">
                        <div class="form-group">
                            <label for="category">
                                {{ __('category') }}
                            </label>
                            <select name="category_id" id="category" class="form-control">
                                <option value="">
                                    {{ __('select category') }}
                                </option>
                                @foreach ($categories as $get)
                                    <option value="{{ $get->id }}" {{ $resource->category_id == $get->id ? 'selected' : '' }}>
                                        {{ $get->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    @foreach (config('translatable.locales') as $key => $locale)
                        <div class="col-md-6 pt-2">
                            <div class="form-group">
                                <label for="name">
                                    {{ __('title' . ' ' . $locale) }}
                                </label>
                                {!! Form::text("{$locale}[title]", old("{$locale}[title]", optional($resource->translate($locale))->title), [
                                    'class' => 'form-control',
                                ]) !!}
                            </div>
                        </div>
                    @endforeach
                    <div class="col-6">
                        <div class="form-group">
                            <label for="status">
                                {{ __('status') }}
                            </label>
                            <select name="status" id="status" class="form-control">
                                <option value="1" {{ $resource->status == 1 ? 'selected' : '' }}>
                                    {{ __('active') }}
                                </option>
                                <option value="0" {{ $resource->status == 0 ? 'selected' : '' }}>
                                    {{ __('not active') }}
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="price">
                                {{ __('price') }}
                            </label>
                            {!! Form::text('price', old('price', $resource->price), ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    @foreach (config('translatable.locales') as $key => $locale)
                        <div class="col-md-6 pt-2">
                            <div class="form-group">
                                <label for="name">
                                    {{ __('description' . ' ' . $locale) }}
                                </label>
                                {!! Form::textarea("{$locale}[description]", old("{$locale}[description]", optional($resource->translate($locale))->description), [
                                    'class' => 'form-control tinymce',
                                ]) !!}
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
        $('#type').on('change', function() {
            if ($(this).val() == 'image') {
                $('#div-image').removeClass('d-none');
                $('#div-video').addClass('d-none');
            } else if ($(this).val() == 'video') {
                $('#div-video').removeClass('d-none');
                $('#div-image').addClass('d-none');
            }
        });
    </script>
@endsection
