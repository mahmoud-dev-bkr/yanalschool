@extends('dashboard.layouts.master')

@php
    $title = __('Social Media');
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
                   <a data-href="{{ route('admin.social.create') }}"  data-container=".table-modal" class="btn btn-modal btn-primary d-grid float-end text-white mb-2 ">
                    <i class="  bx bx-plus"> {{ __('Add') }}</i>

                </a>
               @endslot

               @slot('content')
                   @component('dashboard.layouts.includes.table')
                       @slot('headers')
                            <td>#</td>
                           <td>{{ __('sort') }}</td>
                           <td>{{ __('icon') }}</td>
                           <td>{{ __('url') }}</td>
                           <td>{{ __('status') }}</td>
                           <td>{{  __('Actions') }}</td>
                       @endslot

                       @slot('data')
                           @if (isset($data))
                               @foreach ($data as $item)
                                   <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td class="w-25">
                                            <input type="number" onblur="makeSort(this , {{ $item->id }})" name="sort" value="{{ $item->sort }}" class="form-control">
                                        </td>
                                        <td>
                                            <img src="{{ asset($item->icon) }}" class="border-8" width="40px" height="40px" alt="">
                                        </td>
                                        <td>
                                            <a href="{{ $item->url }}" target="_blank" class="btn btn-success">
                                                <i class="bx bx-link"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="form-check form-switch d-flex m-1 justify-content-between text-center" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ __('change_status') }}" >
                                                <input class="form-check-input"   type="checkbox" role="switch" id="flexSwitchCheckChecked-{{ $item->id }}" onclick="changeStatus(this,{{ $item->id }})" {{ $item->status == 1 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="flexSwitchCheckChecked-{{ $item->id }}"></label>
                                            </a>
                                        </td>

                                        <td>
                                            <a data-href="{{ route('admin.social.edit',$item->id) }}"  data-container=".table-modal" class="btn btn-modal text-white btn-primary btn-sm"><i class="bx bx-edit"></i></a>
                                            <a href="{{ route('admin.social.delete',$item->id) }}" class="btn btn-danger sw-alert btn-sm"><i class="bx bx-trash"></i></a>
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
<script>
    function changeStatus(el , id){
        var status = 0 ;
        if(el.checked){
            status = 1 ;
        }
        $.ajax({
            url: "{{ route('admin.social.change-status') }}",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                id: id,
                status: status
            },
            success: function (results) {
               if (results.success) {
                    swal.fire("", results.message, "success");
               } else {
                    swal.fire("", results.message, "error");
               }
            },
            error: function (xhr) {
                var err = JSON.parse(xhr.responseText);
                swal.fire("", err.message, "error");
            }
        });
    }



</script>



<script>
    function makeSort(el,id)
    {
        var value = $(el).val();

        $.ajax({
            url: "{{ route('admin.social.makeSort') }}",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                id: id,
                sort: value
            },
            success: function (results) {
            if (results.success) {
                    swal.fire("", results.message, "success");
            } else {
                    swal.fire("", results.message, "error");
            }
        },
        });
    }
</script>
@endsection
