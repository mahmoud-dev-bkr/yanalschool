<div class="container-fluid page-header p-0 " style="background-image: url({{ asset($metaBanner->image) }}); " data-wow-delay="0.1s">
    <div class="meta--banner text-center ">
        <span class=" sec-border text-white fs-33">
            <svg width="8" height="48" viewBox="0 0 8 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="8" height="48" rx="4" fill="#F38630"/>
                </svg>

            {{$title}}

        </span>

    </div>
</div>

<div class="container pt-4 pb-5">
    <ol class="list-inline d-flex p-0">
        <li class="sec-color"><a href="{{ route('front.home') }}"><b>{{ __('Home Page') }}</b></a></li>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M10.828 12L15.778 16.95L14.364 18.364L8 12L14.364 5.63601L15.778 7.05001L10.828 12Z" fill="#0D376B"/>
          </svg>
        <li class="active desc-color fs-16 w-500" aria-current="page">
            <b>
            {{ $title }}
        </b>
    </li>
      </ol>
</div>
