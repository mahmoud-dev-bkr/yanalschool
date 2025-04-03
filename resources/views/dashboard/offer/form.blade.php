@php
    $title = $resource->id ? __('Edit') . ' ' . __('offer') : __('Add') . ' ' . __('offer');
@endphp

@extends('dashboard.layouts.master')

@section('title')
    {{ $title }}
@endsection
@section('content')
    @component('dashboard.layouts.includes.card', ['title' => $title])
        @slot('content')
            <form class="form"
                action="{{ $resource->id ? route('admin.offer.update', $resource->id) : route('admin.offer.store') }}"
                method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">


                    <div class="col-12 pt-3" id="div-media">
                        @include('dashboard.category.div-media', ['resource' => $resource])
                    </div>
                    <div class="col-6 pt-3">
                        <div class="form-group">
                            <label for="type">
                                {{ __('type') }}
                            </label>
                            <select name="type" id="type_id" class="form-control">
                                <option value="">
                                    {{ __('select type') }}
                                </option>
                                <option value="category" {{ $resource->category_id != null ? 'selected' : '' }}>
                                    {{ __('category') }}
                                </option>
                                <option value="meals" {{ $resource->meals_id != null ? 'selected' : '' }}>
                                    {{ __('meals') }}
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6 pt-3">
                        <div class="form-group">
                            <label for="type">
                                {{ __('background color') }}
                            </label><br>
                            <input type="color" name="background_color" width="100%" value="{{ $resource->background_color }}"  >
                        </div>
                    </div>
                    <div class="col-12 pt-3 {{ $resource->meals_id  != null  ? 'd-none' : '' }} {{ $resource->category_id  == null && $resource->meals_id  == null ? 'd-none' : '' }}" id="div-category">
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
                    <div class="col-12 pt-3 {{ $resource->category_id  != null ? 'd-none' : '' }} {{ $resource->category_id  == null && $resource->meals_id  == null ? 'd-none' : '' }}"id="div-meals">
                        <div class="form-group">
                            <label for="meals">
                                {{ __('meals') }}
                            </label>
                            <select name="meals_id" id="meals" class="form-control">
                                <option value="">
                                    {{ __('select meals') }}
                                </option>
                                @foreach ($meals as $get)
                                    <option value="{{ $get->id }}" {{ $resource->meals_id == $get->id ? 'selected' : '' }}>
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
                    @foreach (config('translatable.locales') as $key => $locale)
                        <div class="col-md-6 pt-2">
                            <div class="form-group">
                                <label for="name">
                                    {{ __('discount title' . ' ' . $locale) }}
                                </label>
                                {!! Form::textarea("{$locale}[discount_title]", old("{$locale}[discount_title]", optional($resource->translate($locale))->discount_title), [
                                    'class' => 'form-control tinymce',
                                ]) !!}
                            </div>
                        </div>
                    @endforeach
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
        
        $('#type_id').on('change', function() {
            if ($(this).val() == 'category') {
                $('#div-category').removeClass('d-none');
                $('#div-meals').addClass('d-none');
            } else if ($(this).val() == 'meals') {
                $('#div-meals').removeClass('d-none');
                $('#div-category').addClass('d-none');
            }
        });

    </script>
@endsection
