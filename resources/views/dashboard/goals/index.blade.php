@extends('dashboard.layouts.master')

@php
    $title = __('Work Steps');
@endphp

@section('title')
    {{ $title }}
@endsection


@section('content')

    @include('dashboard.layouts.includes.breadcrumb' , ['title' => $title])

    <div class="row pt-2">
        <div class="col-md-12">
           @component('dashboard.layouts.includes.card', ['action' => true, 'title' => __('Work Steps Details'), 'id' => 'goals'])


               @slot('content')
               <form action="{{ route('admin.setting.update') }}" method="post" enctype="multipart/form-data">
                @csrf
               <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="goals_logo">{{ __('Goals Logo') }}</label> (<small class="text-danger">{{ __('best_size') }} : w:270 * h:181</small>)
                        <div style="width: 100%;border: 1px dashed #ccc; padding: 10px">
                            <img class=" image-preview-goals_logo" width="100%"
                                src="{{ asset(getSettingValue('goals_logo')) }}">
                        </div>
                        <br>
                        <label for="goals_logo"class="btn btn-primary text-white mt-2">
                            <i class="bx bx-cloud-upload fs-6 cursor-pointer"></i>
                        </label>

                        <input type="file" onchange="changeImage(this, 'goals_logo')" id="goals_logo"
                            class="d-none form-control mt-3" name="goals_logo">


                    </div>
                </div>
                <div class="clearfix"></div>
                @foreach (config('translatable.locales') as $key => $locale)
                <div class="col-md-6 pt-3">
                    <div class="form-group">
                        <label for="name">
                            {{ __('Goals Title'. ' ' . $locale) }}
                        </label>
                        {!! Form::text(
                            'goals_title_' . $locale,
                            old("goals_title_{$locale}", getSettingValue('goals_title_' . $locale)),
                            ['class' => 'form-control'],
                        ) !!}
                    </div>
                </div>
            @endforeach
                @foreach (config('translatable.locales') as $key => $locale)
                <div class="col-md-6 pt-3">
                    <div class="form-group">
                        <label for="name">
                            {{ __('Goals Description'. ' ' . $locale) }}
                        </label>
                        {!! Form::text(
                            'goals_desc_' . $locale,
                            old("goals_desc_{$locale}", getSettingValue('goals_desc_' . $locale)),
                            ['class' => 'form-control'],
                        ) !!}
                    </div>
                </div>
            @endforeach
               </div>
               <div>
                   <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
               </div>
               </form>
               @endslot
           @endcomponent
        </div>
    </div>
    <div class="row pt-2">
        <div class="col-md-12">
           @component('dashboard.layouts.includes.card' )
               @slot('tool')
                   <a data-href="{{ route('admin.feature.create') }}"  data-container=".table-modal" class="btn btn-modal btn-primary d-grid float-end text-white mb-2 ">
                    <i class="  bx bx-plus"> {{ __('Add') }}</i>

                </a>
               @endslot

               @slot('content')
                   @component('dashboard.layouts.includes.table')
                       @slot('headers')
                            <td>#</td>
                           <td>{{  __('Name') }}</td>
                           <td>{{  __('Description') }}</td>
                           <td>{{  __('Actions') }}</td>
                       @endslot

                       @slot('data')
                           @if (isset($data))
                               @foreach ($data as $item)
                                   <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ asset($item->image) }}" class="border-8 bg-dark p-2" width="40px" height="40px" alt="">
                                            <b>{{ $item->title }}</b>
                                        </td>
                                        <td>
                                            {{ Str::limit($item->description, 90) }}
                                        </td>

                                        <td>
                                            <a data-href="{{ route('admin.feature.edit',$item->id) }}"  data-container=".table-modal" class="btn btn-modal text-white btn-primary btn-sm"><i class="bx bx-edit"></i></a>
                                            <a href="{{ route('admin.feature.delete',$item->id) }}" class="btn btn-danger sw-alert btn-sm"><i class="bx bx-trash"></i></a>
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
               @endslot
           @endcomponent
        </div>
    </div>
    <div class="modal fade table-modal" id="table-model" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
</div>
@endsection
@section('js')

@endsection
