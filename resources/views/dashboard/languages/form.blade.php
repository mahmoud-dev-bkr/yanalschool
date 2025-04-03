@php
    $title = $resource->id ?  __('Edit') .' ' . __('language')   : __('Add') .' ' . __('language');
@endphp

<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title">
          {{ $title }}
        </h5>
        <button type="button" class="btn-close {{ isRtl() ? 'ms-1' : '' }}" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form class="form" action="{{ $resource->id?route('admin.language.update',$resource->id):route('admin.language.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="row">
                        <div class="col-md-12 pt-2">
                            <div class="form-group">
                                <label for="name">
                                    {{  __('Name') }}
                                </label>
                                {!! Form::text("name", old("name", optional($resource)->name), ['class' => 'form-control']) !!}
                            </div>
                        </div>



                    <div class="col-md-12 pt-2">
                        <div class="form-group">
                            <label for="key">
                                {{ __('key') }}
                            </label>
                            {!! Form::text("locale", old("locale", optional($resource)->locale), ['class' => 'form-control']) !!}
                        </div>
                    </div>



                </div>
            </div>
            <div class="pt-4">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
            </div>
        </form>

      </div>

    </div>
  </div>
