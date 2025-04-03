@php
    $title = $resource->id ? __('Edit') . ' ' . __('Course') : __('Add') . ' ' . __('Course');
@endphp

@extends('dashboard.layouts.master')

@section('title')
    {{ $title }}
@endsection
@section('content')
    @component('dashboard.layouts.includes.card', ['title' => $title])
        @slot('content')
            <form class="form"
                action="{{ $resource->id ? route('admin.course.update', $resource->id) : route('admin.course.store') }}"
                method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">


                    <div class="col-6 pt-3" id="div-media">
                        @include('dashboard.course.div-media', ['resource' => $resource])
                    </div>

                    <div class="col-12 d-none">
                        <div class="form-group">
                            <label for="course">
                                {{ __('course') }}
                            </label>
                        </div>
                    </div>
                    {{-- clearfix --}}
                    <div class="clearfix"></div>
                    <div class="col-md-4 pt-2">
                        <div class="form-group">
                            <label for="name">
                                {{ __('age') }}
                            </label>
                            {!! Form::text("age", old("age", optional($resource)->age), [
                                'class' => 'form-control',
                            ])!!}
                        </div>
                    </div>
                    <div class="col-md-4 pt-2">
                        <div class="form-group">
                            <label for="name">
                                {{ __('course_duration') }}
                            </label>
                            {!! Form::text("course_duration", old("course_duration", optional($resource)->course_duration), [
                                'class' => 'form-control',
                            ])!!}
                        </div>
                    </div>
                    <div class="col-md-4 pt-2">
                        <div class="form-group">
                            <label for="name">
                                {{ __('group_size') }}
                            </label>
                            {!! Form::text("group_size", old("group_size", optional($resource)->group_size), [
                                'class' => 'form-control',
                            ])!!}
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
                    {{-- age and course_duration and group_size --}}
                    
                    @foreach (config('translatable.locales') as $key => $locale)
                        <div class="col-md-6 pt-2">
                            <div class="form-group">
                                <label for="name">
                                    {{ __('description' . ' ' . $locale) }}
                                </label>
                                {!! Form::textarea(
                                    "{$locale}[description]",
                                    old("{$locale}[description]", optional($resource->translate($locale))->description),
                                    [
                                        'class' => 'form-control tinymce_ar',
                                    ],
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
