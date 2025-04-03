@php
    $title = $resource->id ? __('Edit') : __('Add');
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
        <form class="form" action="{{ $resource->id ? route('admin.team.update', $resource->id) : route('admin.team.store') }}"
            method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">


                @foreach (config('translatable.locales') as $key => $locale)
                    <div class="col-md-6 pt-2">
                        <div class="form-group">
                            <label for="name">
                                {{ __('Title'.' '.$locale) }}
                            </label>
                            {!! Form::text("{$locale}[title]", old("{$locale}[title]", optional($resource->translate($locale))->title), ['class' => 'form-control']) !!}
                        </div>
                    </div>
                @endforeach
                @foreach (config('translatable.locales') as $key => $locale)
                    <div class="col-md-6 pt-2">
                        <div class="form-group">
                            <label for="name">
                                {{ __('Job'. ' '.$locale) }}
                            </label>
                            {!! Form::text("{$locale}[job]", old("{$locale}[job]", optional($resource->translate($locale))->job), ['class' => 'form-control']) !!}
                        </div>
                    </div>
                @endforeach
                @foreach (config('translatable.locales') as $key => $locale)
                    <div class="col-md-6 pt-2">
                        <div class="form-group">
                            <label for="name">
                                {{ __('Degree'. ' '.$locale) }}
                            </label>
                            {!! Form::text("{$locale}[degree]", old("{$locale}[degree]", optional($resource->translate($locale))->degree), ['class' => 'form-control']) !!}
                        </div>
                    </div>
                @endforeach



            </div>
            <div class="pt-4">
                <button type="submit" class="btn w3-block btn-primary">{{ __('Save') }}</button>
            </div>
        </form>

    </div>

</div>
</div>
