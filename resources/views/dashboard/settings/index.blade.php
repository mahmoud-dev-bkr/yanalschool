@php
    $title = __('settings');
@endphp

@extends('dashboard.layouts.master')

@section('title')
    {{ $title }}
@endsection
@section('content')
    @component('dashboard.layouts.includes.card', ['title' => $title])
        @slot('content')
            <form action="{{ route('admin.setting.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-3 pt-3">
                        <ul class="nav nav-pills flex-column align-items-start w3-ul border" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="main-info-tab" data-bs-toggle="tab" data-bs-target="#main-info"
                                    type="button" role="tab" aria-controls="main-info"
                                    aria-selected="true">
                                    <i class="bx bx-info-circle"></i> {{ __('Main Info') }} </button>
                            </li>

                            {{--  <li class="nav-item" role="presentation">
                                <button class="nav-link" id="vision-tab" data-bs-toggle="tab" data-bs-target="#vision" type="button"
                                    role="tab" aria-controls="vision" aria-selected="false">
                                    <i class="bx bx-images"></i>{{ __('Subscribe') }}</button>
                            </li>  --}}
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="logo-images-tab" data-bs-toggle="tab" data-bs-target="#logo-images" type="button"
                                    role="tab" aria-controls="logo-images" aria-selected="false">
                                    <i class="bx bx-images"></i>{{ __('Images') }}</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
                                    role="tab" aria-controls="contact" aria-selected="false">
                                    <i class="bx bx-mail-send"></i>{{ __('Contact Us') }}</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="visison_message-tab" data-bs-toggle="tab" data-bs-target="#visison_message" type="button"
                                    role="tab" aria-controls="visison_message" aria-selected="false">
                                    <i class="bx bx-message-rounded-check"></i>{{ __('Vision & Message') }}</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="another_location-tab" data-bs-toggle="tab" data-bs-target="#another_location" type="button"
                                    role="tab" aria-controls="another_location" aria-selected="false">
                                    <i class="bx bx-map"></i>{{ __('Another Locations') }}</button>
                            </li>

                        </ul>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content border" id="myTabContent">
                            {{-- main info site  --}}
                            <div class="tab-pane fade show active" id="main-info" role="tabpanel" aria-labelledby="main-info-tab">
                                <div class="row">
                                    @foreach (config('translatable.locales') as $key => $locale)
                                        <div class="col-md-6 pt-3">
                                            <div class="form-group">
                                                <label for="name">
                                                    {{ __('site_name_' . $locale) }}
                                                </label>
                                                {!! Form::text(
                                                    'site_name_' . $locale,
                                                    old("site_name_{$locale}", optional($settings->where('key', 'site_name_' . $locale)->first())->value),
                                                    ['class' => 'form-control'],
                                                ) !!}
                                            </div>
                                        </div>
                                    @endforeach
                                    @foreach (config('translatable.locales') as $key => $locale)
                                        <div class="col-md-6 pt-3">
                                            <div class="form-group">
                                                <label for="name">
                                                    {{ __('address_' . $locale) }}
                                                </label>
                                                {!! Form::text(
                                                    'address_' . $locale,
                                                    old("address_{$locale}", optional($settings->where('key', 'address_' . $locale)->first())->value),
                                                    ['class' => 'form-control'],
                                                ) !!}
                                            </div>
                                        </div>
                                    @endforeach
                                    @foreach (config('translatable.locales') as $key => $locale)
                                        <div class="col-md-6 pt-3">
                                            <div class="form-group">
                                                <label for="name">
                                                    {{ __('short_description_' . $locale) }}
                                                </label>
                                                {!! Form::textarea(
                                                    'short_description_' . $locale,
                                                    old(
                                                        "short_description_{$locale}",
                                                        optional($settings->where('key', 'short_description_' . $locale)->first())->value,
                                                    ),
                                                    ['class' => 'form-control '],
                                                ) !!}
                                            </div>
                                        </div>
                                    @endforeach

                                    @foreach (config('translatable.locales') as $key => $locale)
                                        <div class="col-md-12 pt-3">
                                            <div class="form-group">
                                                <label for="name">
                                                    {{ __('description_' . $locale) }}
                                                </label>
                                                {!! Form::textarea(
                                                    'description_' . $locale,
                                                    old("description_{$locale}", optional($settings->where('key', 'description_' . $locale)->first())->value),
                                                    ['class' => 'form-control tinymce'],
                                                ) !!}
                                            </div>
                                        </div>
                                    @endforeach
                                    @foreach (config('translatable.locales') as $key => $locale)
                                        <div class="col-md-12 pt-3">
                                            <div class="form-group">
                                                <label for="name">
                                                    {{ __('work_time_' . $locale) }}
                                                </label>
                                                {!! Form::textarea(
                                                    'work_time_' . $locale,
                                                    old("work_time_{$locale}", optional($settings->where('key', 'work_time_' . $locale)->first())->value),
                                                    ['class' => 'form-control tinymce'],
                                                ) !!}
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="col-md-12 pt-3">
                                        <div class="form-group">
                                            <label for="name">
                                                {{ __('Location Url') }}
                                            </label>
                                            {!! Form::url(
                                                'location_url',
                                                old("location_url", optional($settings->where('key', 'location_url')->first())->value),
                                                ['class' => 'form-control '],
                                            ) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-12 pt-3">
                                        <div class="form-group">
                                            <label for="name">
                                                {{ __('Location Ifram') }}
                                            </label>
                                            {!! Form::textarea(
                                                'location_ifram',
                                                old("location_ifram", optional($settings->where('key', 'location_ifram')->first())->value),
                                                ['class' => 'form-control '],
                                            ) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-12 pt-3">
                                        <div class="form-group">
                                            <label for="name">
                                                {{ __('Google Analytics') }}
                                            </label>
                                            {!! Form::textarea(
                                                'google_analytics',
                                                old("google_analytics", optional($settings->where('key', 'google_analytics')->first())->value),
                                                ['class' => 'form-control '],
                                            ) !!}
                                        </div>
                                    </div>

                                </div>
                            </div>

                            {{-- logo images --}}
                            <div class="tab-pane fade  " id="logo-images" role="tabpanel" aria-labelledby="logo-images-tab">
                                <div class="row">



                                    <div class="col-md-4 pt-3">
                                        <div class="form-group">
                                            <label for="logo">{{ __('logo') }}</label> (<small class="text-danger">{{ __('best_size') }} : w:105 * h:60</small>)
                                            <div style="width: 100%;border: 1px dashed #ccc; padding: 10px">
                                                <img class=" image-preview-logo" width="100%"
                                                    src="{{ asset(optional($settings->where('key', 'logo')->first())->value ?? 'assets/img/default.jpg') }}">
                                            </div>
                                            <br>
                                            <label for="logo"class="btn btn-primary text-white mt-2">
                                                <i class="bx bx-cloud-upload fs-6 cursor-pointer"></i>
                                            </label>

                                            <input type="file" onchange="changeImage(this, 'logo')" id="logo"
                                                class="d-none form-control mt-3" name="logo">


                                        </div>

                                    </div>
                                    <div class="col-md-4 pt-3">
                                        <div class="form-group">
                                            <label for="logo_white">{{ __('logo_white') }}</label> (<small class="text-danger">{{ __('best_size') }} : w:225 * h:92</small>)
                                            <div style="width: 100%;border: 1px dashed #ccc; padding: 10px">
                                                <img class=" image-preview-logo_white" width="100%"
                                                    src="{{ asset(optional($settings->where('key', 'logo_white')->first())->value ?? 'assets/img/default.jpg') }}">
                                            </div>
                                            <br>
                                            <label for="logo_white"class="btn btn-primary text-white mt-2">
                                                <i class="bx bx-cloud-upload fs-6 cursor-pointer"></i>
                                            </label>

                                            <input type="file" onchange="changeImage(this, 'logo_white')" id="logo_white"
                                                class="d-none form-control mt-3" name="logo_white">
                                        </div>

                                    </div>
                                    <div class="col-md-4 pt-3">
                                        <div class="form-group">
                                            <label for="fav_icon">{{ __('fav_icon') }}</label> (<small class="text-danger">{{ __('best_size') }} : w:40 * h:40</small>)
                                            <div style="width: 100%;border: 1px dashed #ccc; padding: 10px">
                                                <img class=" image-preview-favicon" width="100%"
                                                    src="{{ asset(optional($settings->where('key', 'favicon')->first())->value ?? 'assets/img/default.jpg') }}">
                                            </div>
                                            <br>
                                            <label for="favicon"class="btn btn-primary text-white mt-2">
                                                <i class="bx bx-cloud-upload fs-6 cursor-pointer"></i>
                                            </label>

                                            <input type="file" onchange="changeImage(this, 'favicon')" id="favicon"
                                                class="d-none form-control mt-3" name="favicon">
                                        </div>

                                    </div>

                                    <div class="col-md-4 pt-3">
                                        <div class="form-group">
                                            <label for="value_image">{{ __('Our Value Image') }}</label> (<small class="text-danger">{{ __('best_size') }} : w:56 * h:56</small>)
                                            <div style="width: 100%;border: 1px dashed #ccc; padding: 10px">
                                                <img class="bg-dark image-preview-value_image" width="100%"
                                                    src="{{ asset(optional($settings->where('key', 'value_image')->first())->value ?? 'assets/img/default.jpg') }}">
                                            </div>
                                            <br>
                                            <label for="value_image"class="btn btn-primary text-white mt-2">
                                                <i class="bx bx-cloud-upload fs-6 cursor-pointer"></i>
                                            </label>

                                            <input type="file" onchange="changeImage(this, 'value_image')" id="value_image"
                                                class="d-none form-control mt-3" name="value_image">
                                        </div>

                                    </div>
                                    <div class="col-md-4 pt-3">
                                        <div class="form-group">
                                            <label for="goals_image">{{ __('Our Goals Image') }}</label> (<small class="text-danger">{{ __('best_size') }} : w:56 * h:56</small>)
                                            <div style="width: 100%;border: 1px dashed #ccc; padding: 10px">
                                                <img class="bg-dark image-preview-goals_image" width="100%"
                                                    src="{{ asset(optional($settings->where('key', 'goals_image')->first())->value ?? 'assets/img/default.jpg') }}">
                                            </div>
                                            <br>
                                            <label for="goals_image"class="btn btn-primary text-white mt-2">
                                                <i class="bx bx-cloud-upload fs-6 cursor-pointer"></i>
                                            </label>

                                            <input type="file" onchange="changeImage(this, 'goals_image')" id="goals_image"
                                                class="d-none form-control mt-3" name="goals_image">
                                        </div>

                                    </div>
                                    <div class="col-md-4 pt-3">
                                        <div class="form-group">
                                            <label for="message_image">{{ __('Our Message Image') }}</label> (<small class="text-danger">{{ __('best_size') }} : w:56 * h:56</small>)
                                            <div style="width: 100%;border: 1px dashed #ccc; padding: 10px">
                                                <img class="bg-dark image-preview-message_image" width="100%"
                                                    src="{{ asset(optional($settings->where('key', 'message_image')->first())->value ?? 'assets/img/default.jpg') }}">
                                            </div>
                                            <br>
                                            <label for="message_image"class="btn btn-primary text-white mt-2">
                                                <i class="bx bx-cloud-upload fs-6 cursor-pointer"></i>
                                            </label>

                                            <input type="file" onchange="changeImage(this, 'message_image')" id="message_image"
                                                class="d-none form-control mt-3" name="message_image">
                                        </div>

                                    </div>

                                    <div class="col-md-4 pt-3">
                                        <div class="form-group">
                                            <label for="bg_footer">{{ __('bg_footer') }}</label>
                                            <div style="width: 100%;border: 1px dashed #ccc; padding: 10px">
                                                <img class=" image-preview-bg_footer" width="100%"
                                                    src="{{ asset(optional($settings->where('key', 'bg_footer')->first())->value ?? 'assets/img/default.jpg') }}">
                                            </div>
                                            <br>
                                            <label for="bg_footer"class="btn btn-primary text-white mt-2">
                                                <i class="bx bx-cloud-upload fs-6 cursor-pointer"></i>
                                            </label>

                                            <input type="file" onchange="changeImage(this, 'bg_footer')" id="bg_footer"
                                                class="d-none form-control mt-3" name="bg_footer">
                                        </div>

                                    </div>



                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="row">


                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            <label for="contact_image">{{ __('contant_image') }}</label> (<small class="text-danger">{{ __('best_size') }} : w:650 * h:600</small>)
                                            <div style="width: 100%;border: 1px dashed #ccc; padding: 10px">
                                                <img class=" image-preview-contact_image" width="100%"
                                                    src="{{ asset(optional($settings->where('key', 'contact_image')->first())->value ?? 'assets/img/default.jpg') }}">
                                            </div>
                                            <br>
                                            <label for="contact_image"class="btn btn-primary text-white mt-2">
                                                <i class="bx bx-cloud-upload fs-6 cursor-pointer"></i>
                                            </label>

                                            <input type="file" onchange="changeImage(this, 'contact_image')" id="contact_image"
                                                class="d-none form-control mt-3" name="contact_image">
                                        </div>

                                    </div>
                                    <div class="clearfix"></div>
                                    @foreach (config('translatable.locales') as $key => $locale)
                                        <div class="col-md-6 pt-3">
                                            <div class="form-group">
                                                <label for="name">
                                                    {{ __('contact_title_' . $locale) }}
                                                </label>
                                                {!! Form::text(
                                                    'contact_title_' . $locale,
                                                    old("contact_title_{$locale}", optional($settings->where('key', 'contact_title_' . $locale)->first())->value),
                                                    ['class' => 'form-control'],
                                                ) !!}
                                            </div>
                                        </div>
                                    @endforeach
                                    @foreach (config('translatable.locales') as $key => $locale)
                                        <div class="col-md-6 pt-3">
                                            <div class="form-group">
                                                <label for="name">
                                                    {{ __('contact_description_' . $locale) }}
                                                </label>
                                                {!! Form::textarea(
                                                    'contact_description_' . $locale,
                                                    old("contact_description_{$locale}", optional($settings->where('key', 'contact_description_' . $locale)->first())->value),
                                                    ['class' => 'form-control'],
                                                ) !!}
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('phone', __('phone'), ['class' => 'form-label']) !!}
                                            {!! Form::number('phone', old('phone', optional($settings->where('key', 'phone')->first())->value), [
                                                'class' => 'form-control',
                                                'setp' => 'any',
                                            ]) !!}
                                        </div>

                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('whatsapp', __('whatsapp'), ['class' => 'form-label']) !!} <small
                                                class="badge bg-warning">({{ __('enter_country_code') }})</small>
                                            {!! Form::number('whatsapp', old('whatsapp', optional($settings->where('key', 'whatsapp')->first())->value), [
                                                'class' => 'form-control',
                                                'setp' => 'any',
                                            ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('email_1', __('email') . ' 1', ['class' => 'form-label']) !!}
                                            {!! Form::email('email_1', old('email_1', optional($settings->where('key', 'email_1')->first())->value), [
                                                'class' => 'form-control',
                                            ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('email_2', __('email') . ' 2', ['class' => 'form-label']) !!}
                                            {!! Form::email('email_2', old('email_2', optional($settings->where('key', 'email_2')->first())->value), [
                                                'class' => 'form-control',
                                            ]) !!}
                                        </div>
                                    </div>
                                    {{--  <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('facebook_link', __('facebook_link'), ['class' => 'form-label']) !!}
                                            {!! Form::url(
                                                'facebook_link',
                                                old('facebook_link', optional($settings->where('key', 'facebook_link')->first())->value),
                                                ['class' => 'form-control'],
                                            ) !!}
                                        </div>
                                    </div>

                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('youtube_link', __('youtube_link'), ['class' => 'form-label']) !!}
                                            {!! Form::url(
                                                'youtube_link',
                                                old('youtube_link', optional($settings->where('key', 'youtube_link')->first())->value),
                                                ['class' => 'form-control'],
                                            ) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('twitter', __('twitter'), ['class' => 'form-label']) !!}
                                            {!! Form::url('twitter', old('twitter', optional($settings->where('key', 'twitter')->first())->value), [
                                                'class' => 'form-control',
                                            ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('instagram', __('instagram'), ['class' => 'form-label']) !!}
                                            {!! Form::url('instagram', old('instagram', optional($settings->where('key', 'instagram')->first())->value), [
                                                'class' => 'form-control',
                                            ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('snapchat', __('snapchat'), ['class' => 'form-label']) !!}
                                            {!! Form::url('snapchat', old('snapchat', optional($settings->where('key', 'snapchat')->first())->value), [
                                                'class' => 'form-control',
                                            ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('telegram', __('telegram'), ['class' => 'form-label']) !!}
                                            {!! Form::url('telegram', old('telegram', optional($settings->where('key', 'telegram')->first())->value), [
                                                'class' => 'form-control',
                                            ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('linkedin', __('linkedin'), ['class' => 'form-label']) !!}
                                            {!! Form::url('linkedin', old('linkedin', optional($settings->where('key', 'linkedin')->first())->value), [
                                                'class' => 'form-control',
                                            ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('tiktok', __('tiktok'), ['class' => 'form-label']) !!}
                                            {!! Form::url('tiktok', old('tiktok', optional($settings->where('key', 'tiktok')->first())->value), [
                                                'class' => 'form-control',
                                            ]) !!}
                                        </div>
                                    </div>  --}}
                                </div>
                            </div>
                            {{--  <div class="tab-pane fade" id="vision" role="tabpanel" aria-labelledby="vision-tab">




                                        @foreach (config('translatable.locales') as $key => $locale)
                                            <div class="col-md-12 pt-3">
                                                <div class="form-group">
                                                    <label for="name">
                                                        {{ __('title_' . $locale) }}
                                                    </label>
                                                    {!! Form::text(
                                                        'subscribe_title_' . $locale,
                                                        old("subscribe_title_{$locale}", optional($settings->where('key', 'subscribe_title_' . $locale)->first())->value),
                                                        ['class' => 'form-control '],
                                                    ) !!}
                                                </div>
                                            </div>
                                        @endforeach
                                        @foreach (config('translatable.locales') as $key => $locale)
                                            <div class="col-md-12 pt-3">
                                                <div class="form-group">
                                                    <label for="name">
                                                        {{ __('description_' . $locale) }}
                                                    </label>
                                                    {!! Form::textarea(
                                                        'subscribe_description_' . $locale,
                                                        old("subscribe_description_{$locale}", optional($settings->where('key', 'subscribe_description_' . $locale)->first())->value),
                                                        ['class' => 'form-control '],
                                                    ) !!}
                                                </div>
                                            </div>
                                        @endforeach


                            </div>  --}}
                            <div class="tab-pane fade show " id="visison_message" role="tabpanel" aria-labelledby="visison_message-tab">
                                <div class="row">


                                    @foreach (config('translatable.locales') as $key => $locale)
                                        <div class="col-md-6 pt-3">
                                            <div class="form-group">
                                                <label for="name">
                                                    {{ __('Our Goal' ) .' ' . $locale}}
                                                </label>
                                                {!! Form::textarea(
                                                    'our_goal_' . $locale,
                                                    old(
                                                        "our_goal_{$locale}",
                                                        optional($settings->where('key', 'our_goal_' . $locale)->first())->value,
                                                    ),
                                                    ['class' => 'form-control tinymce'],
                                                ) !!}
                                            </div>
                                        </div>
                                    @endforeach
                                    @foreach (config('translatable.locales') as $key => $locale)
                                        <div class="col-md-6 pt-3">
                                            <div class="form-group">
                                                <label for="name">
                                                    {{ __('Our Value' ) .' ' . $locale}}
                                                </label>
                                                {!! Form::textarea(
                                                    'our_value_' . $locale,
                                                    old(
                                                        "our_value_{$locale}",
                                                        optional($settings->where('key', 'our_value_' . $locale)->first())->value,
                                                    ),
                                                    ['class' => 'form-control tinymce'],
                                                ) !!}
                                            </div>
                                        </div>
                                    @endforeach
                                    @foreach (config('translatable.locales') as $key => $locale)
                                        <div class="col-md-6 pt-3">
                                            <div class="form-group">
                                                <label for="name">
                                                    {{ __('Message' ) .' ' . $locale}}
                                                </label>
                                                {!! Form::textarea(
                                                    'message_' . $locale,
                                                    old(
                                                        "message_{$locale}",
                                                        optional($settings->where('key', 'message_' . $locale)->first())->value,
                                                    ),
                                                    ['class' => 'form-control tinymce'],
                                                ) !!}
                                            </div>
                                        </div>
                                    @endforeach




                                </div>
                            </div>
                            <div class="tab-pane fade show " id="another_location" role="tabpanel" aria-labelledby="another_location-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">
                                                {{ __('Another Location Phone') }}
                                            </label>
                                            {!! Form::text(
                                                'another_location_phone',
                                                old("another_location_phone", optional($settings->where('key', 'another_location_phone')->first())->value),
                                                ['class' => 'form-control '],
                                            ) !!}
                                        </div>
                                    </div>

                                    @foreach (config('translatable.locales') as $key => $locale)
                                        <div class="col-md-6 pt-3">
                                            <div class="form-group">
                                                <label for="name">
                                                    {{ __('Location' ) .' ' . $locale}}
                                                </label>
                                                {!! Form::text(
                                                    'another_location_' . $locale,
                                                    old(
                                                        "another_location_{$locale}",
                                                        optional($settings->where('key', 'another_location_' . $locale)->first())->value,
                                                    ),
                                                    ['class' => 'form-control '],
                                                ) !!}
                                            </div>
                                        </div>
                                    @endforeach





                                </div>
                            </div>

                        </div>
                    </div>
                </div>



                <div class="modal-footer pt-5 text-center">
                    <button type="submit" class="btn w3-block btn-primary">{{ __('Save') }}</button>
                </div>
            </form>
        @endslot
    @endcomponent
@endsection
