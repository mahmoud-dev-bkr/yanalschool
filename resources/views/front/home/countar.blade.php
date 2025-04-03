<div class="container">
    <div class="row wow fadeInUp" data-wow-duration="2s">
        @foreach ($countars as $item)
            <div class="col-md-6 col-lg-4 pt-2 text-center  m-auto  " style="display: grid;place-content: center">
                <div class="item d-flex  gap-3 pe-3">
                    <img loading="lazy" src="{{ asset($item->image) }}" alt="" height="88" width="88">
                    <div class="text-{{ isRtl()?'end':'start' }} text-white">
                        <b class="fs-28 ">{{ $item->number }}</b><br>
                    <p class="fs-18">{{ $item->title }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
