@extends('dashboard.layouts.master')

@php
    $title = __('offer');
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
                   <a href="{{ route('admin.offer.create') }}"   class="btn btn-primary d-grid float-end mb-2 ">
                    <i class="  bx bx-plus"> {{ __('Add') . ' ' . __('offer') }}</i>

                </a>
               @endslot

               @slot('content')
                   @component('dashboard.layouts.includes.table')
                       @slot('headers')
                            <td>#</td>
                            <td>{{  __('Background') }}</td>     
                            <td>{{  __('Image') }}</td>     
                            <td>{{ __('Title') }}</td>
                            <td>{{  __('Description') }}</td>
                            <td>{{  __('Discount Title') }}</td>
                           <td>{{  __('Actions') }}</td>
                       @endslot

                       @slot('data')
                           @if (isset($data))
                               @foreach ($data as $item)
                                   <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td style="background-color: {{ $item->background_color }}"></td>
                                        <td>
                                            <img src="{{ asset($item->image) }}" class="border-8" alt="" srcset="" width="50px" height="40px">
                                        </td>
                                        
                                        <td>
                                            <b>{{ $item->title }}</b>
                                        </td>
                                        
                                        <td>
                                            {!! $item->description !!}
                                        </td>
                                        <td>
                                            {!! $item->discount_title !!}
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.offer.edit',$item->id) }}"   class="btn  btn-primary btn-sm"><i class="bx bx-edit"></i></a>
                                            <a href="{{ route('admin.offer.delete',$item->id) }}" class="btn btn-danger sw-alert btn-sm"><i class="bx bx-trash"></i></a>
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


</div>
@endsection

