@php
    $title = $resource->id ? __('Edit') . ' ' . __('product') : __('Add') . ' ' . __('product');
@endphp

@extends('dashboard.layouts.master')

@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.8/css/fileinput.css" media="all"
rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.8/css/fileinput-rtl.css" media="all"
rel="stylesheet" type="text/css" />
@endsection
@section('title')
    {{ $title }}
@endsection
@section('content')
    @component('dashboard.layouts.includes.card', ['title' => $title])
        @slot('content')
            <form class="form" action="{{ $resource->id ? route('admin.product.update', $resource->id) : route('admin.product.store') }}"
                method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-6  ">

                        {!! Form::label('image', __('image') , ['class' => 'form-label'] ) !!} <br>
                        <img class=" image-preview-image  " width="100%" height="200"   src="{{ asset($resource->image ?? 'assets/img/default.jpg' ) }}">
                        <br>
                        <label for="image"class="btn btn-primary text-white mt-2">
                            {{-- <i class="ti ti-cloud-upload fs-6 cursor-pointer"></i> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M13 19v-4h3l-4-5l-4 5h3v4z"/><path fill="currentColor" d="M7 19h2v-2H7c-1.654 0-3-1.346-3-3c0-1.404 1.199-2.756 2.673-3.015l.581-.102l.192-.558C8.149 8.274 9.895 7 12 7c2.757 0 5 2.243 5 5v1h1c1.103 0 2 .897 2 2s-.897 2-2 2h-3v2h3c2.206 0 4-1.794 4-4a4.01 4.01 0 0 0-3.056-3.888C18.507 7.67 15.56 5 12 5C9.244 5 6.85 6.611 5.757 9.15C3.609 9.792 2 11.82 2 14c0 2.757 2.243 5 5 5z"/></svg>
                        </label>

                        <input type="file"  onchange="changeImage(this, 'image')" id="image" class="d-none form-control mt-3" name="image" >
                    </div>

                    <div class="clearfix"></div>

                   <div class="col-md-4 pt-4">
                        {!! Form::label('category_id', __('categories') , ['class' => 'form-label'] ) !!} <br>
                        {!! Form::select('category_id', $categories, old('category_id',$resource->category_id), ['class' => 'form-control select-2 select2 p-2' ,'requried' , 'placeholder' => __('select') . ' ' . __('Category')]) !!}
                    </div>

                   <div class="col-md-4 pt-4">
                        {!! Form::label('size', __('size') , ['class' => 'form-label'] ) !!} <br>
                        {!! Form::text('size',  old('size',$resource->size), ['class' => 'form-control  p-2' ,'requried' , 'placeholder' => __('size')]) !!}
                    </div>
                   <div class="col-md-4 pt-4">
                        {!! Form::label('code', __('code') , ['class' => 'form-label'] ) !!} <br>
                        {!! Form::text('code',  old('code',$resource->code), ['class' => 'form-control  p-2' ,'requried' , 'placeholder' => __('code')]) !!}
                    </div>
                   <div class="col-md-4 pt-4">
                        {!! Form::label('weight', __('weight') , ['class' => 'form-label'] ) !!} <br>
                        {!! Form::text('weight',  old('weight',$resource->weight), ['class' => 'form-control  p-2' ,'requried' , 'placeholder' => __('weight')]) !!}
                    </div>
                   <div class="col-md-4 pt-4">
                        {!! Form::label('quantity', __('quantity') , ['class' => 'form-label'] ) !!} <br>
                        {!! Form::text('quantity',  old('quantity',$resource->quantity), ['class' => 'form-control  p-2' ,'requried' , 'placeholder' => __('quantity')]) !!}
                    </div>
                   <div class="col-md-4 pt-4">
                        {!! Form::label('box', __('box') , ['class' => 'form-label'] ) !!} <br>
                        {!! Form::text('box',  old('box',$resource->box), ['class' => 'form-control  p-2' ,'requried' , 'placeholder' => __('box')]) !!}
                    </div>


                </div>
                {{-- <hr>
                <div class="row pt-3" id="ImageGallery">
                    <br>
                    <div class="col-md-12 main-color">
                        <b>
                            {{ __('gallery') }}:
                        </b>
                    </div>
                    <div class="col-sm-12">

                        <div class="row ImageGallery">
                            @if (isset($resource) && $resource->images->isNotEmpty())
                                @foreach ($resource->images as $item)
                                    <div class="col-sm-3">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <a href="{{ route('admin.product.images.delete', ['id' => $resource->id, 'it' => $item->id]) }}" class="btn btn-danger sw-alert btn-sm"><i class="bx bx-trash"></i></a>
                                                <div class="preview_images prev_prod_imgs">
                                                    <a href="{{ asset($item->image ?? null) }}">
                                                        <img src="{{ asset($item->image ?? null) }}" class="img-thumbnail img_pro_dis">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-12">
                        <div class="form-group @error('images') invalid @enderror">
                            <div class="file-loading">
                                <input id="file-1" type="file" name="images[]" multiple class="filesUploads"
                                    data-show-upload="false" data-msg-placeholder="{{ __('drop_images') }}"
                                    data-browse-on-zone-click="true">
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="pt-4">
                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                </div>
            </form>
        @endslot
    @endcomponent
@endsection
@section('js')

<!-- File Input -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.8/js/fileinput.js" type="text/javascript">
</script>
<script>
    $(".filesUploads").fileinput({
        theme: 'fa',
        language: 'ar',
        uploadAsync: false,
        rtl: true,
        showUpload: false,
        dropZoneTitle: '{{ __('drop_images') }} <br/>',
        dropZoneClickTitle: '{{ __('or_click_to_select') }} <br/>',
        showRemove: true,
        showCancel: true,
        autoReplace: false,
        allowedFileExtensions: ['jpg', 'png', 'jpeg'],
        overwriteInitial: false,
        maxFileSize: 4000,
        maxFileCount: "@isset($data) {{ 10 - $data->images_count }}) @else 10 @endisset",
        msgFilesTooMany: '{{ __('num_selected_img') }} <b>({n})</b> {{ __('max_num') }} <b>{m}</b>!',
        msgPlaceholder: '{{ __('choose') }} {{ __('image') }}',
        slugCallback: function(filename) {
            return filename.replace('(', '_').replace(']', '_');
        },
        browseLabel: '{{ __('browse') }}',
        browseClass: 'btn btn-primary',
        removeLabel: '{{ __('delete') }}',
        minFileCount: 0,
        validateInitialCount: true,

    });

    $(".file").fileinput({
        theme: 'fa',
        language: 'ar',
        rtl: true,
        showUpload: false,
        fileActionSettings: {
            showUpload: false,
        },
        dropZoneTitle: '{{ __('drop_images') }} <br/>',
        dropZoneClickTitle: '{{ __('or_click_to_select') }} <br/>',
        showRemove: true,
        allowedFileExtensions: ['jpg', 'png', 'jpeg'],
        overwriteInitial: false,
        maxFileSize: 4000,
        maxFileCount: "@isset($data) {{ 10 - $data->images_count }}) @else 10 @endisset",
        msgFilesTooMany: '{{ __('num_selected_img') }} <b>({n})</b> {{ __('max_num') }} <b>{m}</b>!',
        msgPlaceholder: '{{ __('choose') }} {{ __('image') }}',
        slugCallback: function(filename) {
            return filename.replace('(', '_').replace(']', '_');
        },
        browseLabel: '{{ __('browse') }}',
        browseClass: 'btn blue',
        removeLabel: '{{ __('delete') }}',
    });
</script>
<!-- Meta & SM Desc Length -->
<script>
    $('.max_length').keyup(function() {
        var length = $(this).attr('maxlength') - $(this).val().length;
        $(this).parent().find('.remChars').text(length);
    });
</script>
@endsection
