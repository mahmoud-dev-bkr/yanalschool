@extends('dashboard.layouts.master')

@php
    $title = __('meal');
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
                   <a href="{{ route('admin.meal.create') }}"   class="btn btn-primary d-grid float-end mb-2 ">
                    <i class="  bx bx-plus"> {{ __('Add') . ' ' . __('meal') }}</i>

                </a>
               @endslot

               @slot('content')
                   @component('dashboard.layouts.includes.table')
                       @slot('headers')
                            <td>#</td>
                            <td>{{  __('Image') }}</td>     
                            <td>{{ __('Title') }}</td>
                            <td>{{  __('Description') }}</td>
                            <td>{{ __('category') }}</td>
                            <td>{{  __('status') }}</td>
                            <td>{{  __('price') }}</td>
                           <td>{{  __('Actions') }}</td>
                       @endslot

                       @slot('data')
                           @if (isset($data))
                               @foreach ($data as $item)
                                   <tr>
                                        <td>{{ $loop->iteration }}</td>
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
                                            {{ $item->category->title }}
                                        </td>
                                        <td>
                                            {{ $item->status == 1 ? __('active') : __('inactive') }}
                                        </td>
                                        <td>
                                            {{ $item->price }}
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.meal.edit',$item->id) }}"   class="btn  btn-primary btn-sm"><i class="bx bx-edit"></i></a>
                                            <a href="{{ route('admin.meal.delete',$item->id) }}" class="btn btn-danger sw-alert btn-sm"><i class="bx bx-trash"></i></a>
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

