@extends('dashboard.layouts.master')

@php
    $title = __('Projects');
@endphp

@section('title')
    {{ $title }}
@endsection


@section('content')

    @include('dashboard.layouts.includes.breadcrumb' , ['title' => $title])

    <div class="row pt-2">
        <div class="col-md-12">
           @component('dashboard.layouts.includes.card' )
               @slot('tool')
                   <a data-href="{{ route('admin.project.create') }}" data-container=".table-modal"   class="btn btn-primary btn-modal text-white d-grid float-end mb-2 ">
                    <i class="  bx bx-plus"> {{ __('Add') . ' ' . __('Project') }}</i>

                </a>
               @endslot

               @slot('content')
                   @component('dashboard.layouts.includes.table')
                       @slot('headers')
                            <td>#</td>
                           <td>{{ __('Image') }}</td>
                           <td>{{  __('Actions') }}</td>
                       @endslot

                       @slot('data')
                           @if (isset($data))
                               @foreach ($data as $item)
                                   <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ asset($item->image) }}" class="border-8" width="40px" height="40px" alt="">
                                        </td>



                                        <td>
                                            <a data-href="{{ route('admin.project.edit',$item->id) }}" data-container=".table-modal" class="btn btn-modal text-white btn-primary btn-sm"><i class="bx bx-edit"></i></a>
                                            <a href="{{ route('admin.project.delete',$item->id) }}" class="btn  btn-danger sw-alert btn-sm"><i class="bx bx-trash"></i></a>
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

