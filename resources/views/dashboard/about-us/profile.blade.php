@php
    $title = __('settings');
@endphp

@extends('dashboard.layouts.master')

@section('title')
    {{ $title }}
@endsection
@section('content')
    @component('dashboard.layouts.includes.card', ['title' => $title])
    @slot('tool')
    <a data-href="{{ route('admin.info.create') }}"  data-container=".table-modal" class="btn btn-modal btn-primary d-grid float-end text-white mb-2 ">
     <i class="  bx bx-plus"> {{ __('Add') }}</i>

 </a>
@endslot
        @slot('content')
            <div class="row">
                <div class="col-md-12 p-2 border">
                    @component('dashboard.layouts.includes.table')
                       @slot('headers')
                            <td>#</td>
                           <td>{{  __('Name') }}</td>
                           <td>{{  __('Actions') }}</td>
                       @endslot

                       @slot('data')
                           @if (isset($data))
                               @foreach ($data as $item)
                                   <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ asset($item->image) }}" class="border-8" width="30" height="30" alt="">
                                            <b>{{$item->title}}</b>

                                        </td>

                                        <td>
                                            <a data-href="{{ route('admin.info.edit',$item->id) }}"  data-container=".table-modal" class="btn btn-modal text-white btn-primary btn-sm"><i class="bx bx-edit"></i></a>
                                            <a href="{{ route('admin.info.delete',$item->id) }}" class="btn btn-danger sw-alert btn-sm"><i class="bx bx-trash"></i></a>
                                        </td>
                                   </tr>
                               @endforeach
                           @else
                               <tr>
                                   <td colspan="4">
                                       <div class="text-center alert alert-warring">
                                           {{ __('No Data Found') }}
                                       </div>
                                   </td>
                               </tr>
                           @endif
                       @endslot
                   @endcomponent
                </div>
            </div>

            <form action="{{ route('admin.setting.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4 pt-3">
                        <div class="form-group">
                            <label for="profile_image_logo">{{ __('profile_image_logo') }}</label> (<small
                                class="text-danger">{{ __('best_size') }} : w:105 * h:60</small>)
                            <div style="width: 100%;border: 1px dashed #ccc; padding: 10px">
                                <img class=" image-preview-profile_image_logo" width="100%" height="200"
                                    src="{{ asset(optional($settings->where('key', 'profile_image_logo')->first())->value ?? 'assets/img/default.jpg') }}">
                            </div>
                            <br>
                            <label for="profile_image_logo"class="btn btn-primary text-white mt-2">
                                <i class="bx bx-cloud-upload fs-6 cursor-pointer"></i>
                            </label>

                            <input type="file" onchange="changeImage(this, 'profile_image_logo')" id="profile_image_logo"
                                class="d-none form-control mt-3" name="profile_image_logo">


                        </div>

                    </div>
                    <div class="row">

                        @foreach (config('translatable.locales') as $key => $locale)
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        {{ __('description_' . $locale) }}
                                    </label>
                                    {!! Form::textarea(
                                        'description_profile_' . $locale,
                                        old("description_profile_{$locale}", optional($settings->where('key', 'description_profile_' . $locale)->first())->value),
                                        ['class' => 'form-control tinymce'],
                                    )!!}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>



                <div class="modal-footer pt-5 text-center">
                    <button type="submit" class="btn w3-block btn-primary">{{ __('Save') }}</button>
                </div>
            </form>



            <div class="modal fade table-modal" id="table-model" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
</div>
        @endslot
    @endcomponent
@endsection
