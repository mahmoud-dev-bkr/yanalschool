@component('dashboard.layouts.includes.table')
@slot('headers')
     <td>#</td>
    <td>{{  __('Name') }}</td>
    <td>{{ __('number') }}</td>
    <td>{{  __('Actions') }}</td>
@endslot

@slot('data')
    @if (isset($data))
        @foreach ($data as $item)
            <tr>
                 <td>{{ $loop->iteration }}</td>
                 <td>
                     <img src="{{ asset($item->image) }}" class="border-8" width="50px" height="40px" alt="">
                     <b>{{$item->title}}</b>
                 </td>
                 <td>
                     {{$item->number}}
                 </td>

                 <td>
                     <a data-href="{{ route('admin.counter.edit',$item->id) }}"  data-container=".table-modal" class="btn btn-modal text-white btn-primary btn-sm"><i class="bx bx-edit"></i></a>
                     <a href="{{ route('admin.counter.delete',$item->id) }}" class="btn btn-danger sw-alert btn-sm"><i class="bx bx-trash"></i></a>
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
