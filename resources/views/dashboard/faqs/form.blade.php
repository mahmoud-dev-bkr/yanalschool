@php
    $title = $resource->id ? __('Edit') . ' ' . __('Faq') : __('Add') . ' ' . __('Faq');
@endphp


<div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content ">
        <div class="modal-header">
            <h5 class="modal-title">
                {{ $title }}
            </h5>
            <button type="button" class="btn-close {{ isRtl() ? 'ms-1' : '' }}" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="form"
                action="{{ $resource->id ? route('admin.faq.update', $resource->id) : route('admin.faq.store') }}"
                method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">





                    @foreach (config('translatable.locales') as $key => $locale)
                        <div class="col-md-6 pt-2">
                            <div class="form-group">
                                <label for="name">
                                    {{ __('Question' . ' ' . $locale) }}
                                </label>
                                {!! Form::text(
                                    "{$locale}[question]",
                                    old("{$locale}[question]", optional($resource->translate($locale))->question),
                                    [
                                        'class' => 'form-control',
                                    ],
                                ) !!}
                            </div>
                        </div>
                    @endforeach
                    @foreach (config('translatable.locales') as $key => $locale)
                        <div class="col-md-6 pt-2">
                            <div class="form-group">
                                <label for="name">
                                    {{ __('Answer' . ' ' . $locale) }}
                                </label>
                                {!! Form::textarea(
                                    "{$locale}[answer]",
                                    old("{$locale}[answer]", optional($resource->translate($locale))->answer),
                                    [
                                        'class' => 'form-control',
                                    ],
                                ) !!}
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="pt-4">
                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                </div>

        </form>

    </div>

</div>
</div>
