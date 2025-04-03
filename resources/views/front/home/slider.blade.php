<div class="mt-md-5 container" style="">
    <div class="slider">
        <div class="row">
            <div class="col-6">
                <h1 class="title-slider">
                    {{ $slider->title }}
                </h1>
                <div class="desc-slider">
                    {!! $slider->description !!}
                </div>
            </div>
            <div class="col-6">
                <div class="img-sliders">
                    <div class="image-1">
                        <img src="{{ asset($slider->image_1) }}" alt="">
                    </div>
                    {{-- <div class="image-2">
                        <img src="{{ asset($slider->image_2) }}" alt="">
                    </div>
                    <div class="image-3">
                        <img src="{{ asset($slider->image_3) }}" alt="">
                    </div> --}}
                </div>
                {{ __('description_title_lang') }}
            </div>
        
        </div>

    </div>
</div>
