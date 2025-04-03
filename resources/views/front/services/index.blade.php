@extends('front.layouts.master')
@section('css')
<style>

</style>
@endsection
@section('content')
@include('front.includes.pageheader', ['metaBanner' => $metaBanner, 'title' => __('Our Services')])


<div class="container pb-5">
    <div class="row ">
        <div class="col-md-3 p-4">
            @foreach ($services as $item)
                <a href="{{ route('front.service') }}?service_id={{ $item->id }}">
                    <div class="item border desc-color {{ $service->id == $item->id ? 'bg-liner' : '' }} p-2 d-flex w3-round-large justify-content-between align-items-center mt-3">
                        <b class="fs-19 ">{{ $item->title }}</b>
                        @if ($service->id == $item->id)
                        <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="52" height="52" rx="8" fill="#F38630"/>
                            <g clip-path="url(#clip0_97_2163)">
                            <path d="M14.848 25.0573C14.598 25.3073 14.4576 25.6464 14.4576 26C14.4576 26.3535 14.598 26.6926 14.848 26.9426L22.3907 34.4853C22.5137 34.6126 22.6608 34.7142 22.8235 34.7841C22.9861 34.854 23.1611 34.8907 23.3381 34.8923C23.5152 34.8938 23.6907 34.8601 23.8546 34.793C24.0185 34.726 24.1673 34.627 24.2925 34.5018C24.4177 34.3766 24.5167 34.2277 24.5838 34.0639C24.6508 33.9 24.6845 33.7245 24.683 33.5474C24.6815 33.3704 24.6447 33.1954 24.5748 33.0327C24.5049 32.8701 24.4033 32.7229 24.276 32.5999L19.0093 27.3333L36.6667 27.3333C37.0203 27.3333 37.3594 27.1928 37.6095 26.9428C37.8595 26.6927 38 26.3536 38 25.9999C38 25.6463 37.8595 25.3072 37.6095 25.0571C37.3594 24.8071 37.0203 24.6666 36.6667 24.6666L19.0093 24.6666L24.276 19.3999C24.5189 19.1485 24.6533 18.8117 24.6502 18.4621C24.6472 18.1125 24.507 17.7781 24.2598 17.5309C24.0125 17.2836 23.6781 17.1434 23.3285 17.1404C22.9789 17.1373 22.6421 17.2717 22.3907 17.5146L14.848 25.0573Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_97_2163">
                            <rect width="32" height="32" fill="white" transform="translate(10 42) rotate(-90)"/>
                            </clipPath>
                            </defs>
                            </svg>

                        @else

                        <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="52" height="52" rx="8" fill="#FEF3EA"/>
                            <g clip-path="url(#clip0_97_2156)">
                            <path d="M14.848 25.0573C14.598 25.3073 14.4576 25.6464 14.4576 26C14.4576 26.3535 14.598 26.6926 14.848 26.9426L22.3907 34.4853C22.5137 34.6126 22.6608 34.7142 22.8235 34.7841C22.9861 34.854 23.1611 34.8907 23.3381 34.8923C23.5152 34.8938 23.6907 34.8601 23.8546 34.793C24.0185 34.726 24.1673 34.627 24.2925 34.5018C24.4177 34.3766 24.5167 34.2277 24.5838 34.0639C24.6508 33.9 24.6845 33.7245 24.683 33.5474C24.6815 33.3704 24.6447 33.1954 24.5748 33.0327C24.5049 32.8701 24.4033 32.7229 24.276 32.5999L19.0093 27.3333L36.6667 27.3333C37.0203 27.3333 37.3594 27.1928 37.6095 26.9428C37.8595 26.6927 38 26.3536 38 25.9999C38 25.6463 37.8595 25.3072 37.6095 25.0571C37.3594 24.8071 37.0203 24.6666 36.6667 24.6666L19.0093 24.6666L24.276 19.3999C24.5189 19.1485 24.6533 18.8117 24.6502 18.4621C24.6472 18.1125 24.507 17.7781 24.2598 17.5309C24.0125 17.2836 23.6781 17.1434 23.3285 17.1404C22.9789 17.1373 22.6421 17.2717 22.3907 17.5146L14.848 25.0573Z" fill="#F38630"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_97_2156">
                            <rect width="32" height="32" fill="white" transform="translate(10 42) rotate(-90)"/>
                            </clipPath>
                            </defs>
                            </svg>
                        @endif

                    </div>
                </a>
            @endforeach

            <div class="p-md-5 mt-5 w3-round-large bg-liner h-25 text-center" style="display: grid;place-content: center">
                <b class="text-white fs-33">{{__('Want help?') }}</b><br>
                <div class="d-flex align-items-center gap-3">
                    <svg width="50" height="50" viewBox="0 0 72 73" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect y="0.5" width="72" height="72" rx="36" fill="#F38630"/>
                        <path d="M25.24 34.08C28.12 39.74 32.76 44.36 38.42 47.26L42.82 42.86C43.36 42.32 44.16 42.14 44.86 42.38C47.1 43.12 49.52 43.52 52 43.52C53.1 43.52 54 44.42 54 45.52V52.5C54 53.6 53.1 54.5 52 54.5C33.22 54.5 18 39.28 18 20.5C18 19.4 18.9 18.5 20 18.5H27C28.1 18.5 29 19.4 29 20.5C29 23 29.4 25.4 30.14 27.64C30.36 28.34 30.2 29.12 29.64 29.68L25.24 34.08Z" fill="white"/>
                        </svg>

                    <div>
                        <p class="m-0 fs-19 w-400">{{__('Call Us Now') }}</p>

                        <a href="tel:{{ getSettingValue('phone') }}" class="text-white">
                            <b>({{ getSettingValue('phone') }})</b>
                        </a><br>

                        <a href="tel:{{ getSettingValue('whatsapp') }}" class="text-white">
                            <b>({{ getSettingValue('whatsapp') }})</b>
                        </a>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 p-4">
            <img loading="lazy"  class="w3-round-large" src="{{ asset($service->image) }}" alt="{{ $service->title }}" width="100%" style="height: {{ isMobile() ? 'auto' : '500px' }};" srcset="{{ asset($service->image) }}" >
            <div class="pt-3">
                <h4 class="fs-33 desc-color">
                    {{ $service->title }}
                </h4>
                <p class="fs-23 desc-color w-500">{{ $service->short_description }}</p>
                <div class="fs-23 desc-color w-500">{!! $service->description !!}</div>
            </div>
        </div>
    </div>
</div>
@endsection
