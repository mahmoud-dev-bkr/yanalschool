@extends('dashboard.layouts.master')

@php
    $title = __('Faqs');
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
                   <a data-href="{{ route('admin.faq.create') }}"   data-container=".table-modal" class="btn btn-modal btn-primary text-white d-grid float-end mb-2 ">
                    <i class="  bx bx-plus"> {{ __('Add') . ' ' . __('Faq') }}</i>

                </a>
               @endslot

               @slot('content')
                   @component('dashboard.layouts.includes.table')
                       @slot('headers')
                            <td>#</td>
                           <td>{{ __('Question') }}</td>
                           <td>{{ __('Answer') }}</td>
                           <td>{{  __('Actions') }}</td>
                       @endslot

                       @slot('data')
                           @if (isset($data))
                               @foreach ($data as $item)
                                   <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <b>{{ $item->question }}</b>
                                        </td>
                                        <td>
                                            {{ Str::limit($item->answer, 50) }}
                                        </td>
                                        <td>
                                            <a data-href="{{ route('admin.faq.edit',$item->id) }}" data-container=".table-modal"  class="btn btn-modal text-white btn-primary btn-sm"><i class="bx bx-edit"></i></a>
                                            <a href="{{ route('admin.faq.delete',$item->id) }}" class="btn btn-danger sw-alert btn-sm"><i class="bx bx-trash"></i></a>
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
<div class="modal fade table-modal" id="table-model" tabindex="-1" aria-labelledby="exampleModalLabel"
aria-hidden="true">
</div>
@endsection

