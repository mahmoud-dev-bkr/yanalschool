@extends('front.layouts.master')
@section('css')

@section('content')
   @include('front.includes.pageheader', ['metaBanner' => $metaBanner, 'title' => __('Blogs')])

    <section class="section--services pt-4 pb-5" style="">
        <div class="container pb-5">

            <div class="row ">

                @foreach ($blogs as $item)
                <div class="col-md-6 col-lg-4 pt-4">
                    <div class="card border-0">
                        <div class="card-img">
                            <img loading="lazy"  src="{{ $item->image }}" class="w-100" style="border-radius: 16px 16px 0px 0px;" alt="{{ $item->title }}">
                        </div>
                        <div class="card-body p-0 pt-3">
                            <div class="d-flex align-items-baseline gap-3">
                                <div class="date text-center text-white p-2 pe-4 ps-4 w3-round-large" style="background: linear-gradient(0deg, #0d376b 50%, #f38630 50%);">
                                    <b class="  fs-16 ">{{ $item->created_at->format('d') }}</b><br>
                                    <b class=" " >{{ $item->created_at->isoFormat('MMM') }}</b>
                                </div>
                                <div>
                                    <h5 class="fs-23 desc-color">
                                        {{ $item->title }}
                                    </h5>
                                    <p class="desc-color fs-16">
                                        {{ $item->short_description }}
                                    </p>

                                    <div class="text-center">
                                        <a href="{{ route('front.blog.show', $item->id) }}" class="btn  custom--btn" style="color: #0D376B">
                                            {{ __('Read More') }}
                                            <svg class="svg2" width="24" height="18" viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.847901 8.05728C0.59794 8.30732 0.457519 8.6464 0.457519 8.99995C0.457519 9.3535 0.59794 9.69258 0.847901 9.94262L8.39057 17.4853C8.51356 17.6126 8.66069 17.7142 8.82336 17.7841C8.98603 17.854 9.16099 17.8907 9.33803 17.8923C9.51507 17.8938 9.69065 17.8601 9.85451 17.793C10.0184 17.726 10.1672 17.627 10.2924 17.5018C10.4176 17.3766 10.5166 17.2277 10.5837 17.0639C10.6507 16.9 10.6844 16.7245 10.6829 16.5474C10.6814 16.3704 10.6446 16.1954 10.5747 16.0327C10.5048 15.8701 10.4032 15.7229 10.2759 15.5999L5.00923 10.3333L22.6666 10.3333C23.0202 10.3333 23.3593 10.1928 23.6094 9.94276C23.8594 9.69271 23.9999 9.35357 23.9999 8.99995C23.9999 8.64633 23.8594 8.30719 23.6094 8.05714C23.3593 7.80709 23.0202 7.66662 22.6666 7.66662L5.00923 7.66662L10.2759 2.39995C10.5188 2.14848 10.6532 1.81168 10.6501 1.46208C10.6471 1.11249 10.5069 0.77807 10.2597 0.530859C10.0124 0.283649 9.67803 0.143423 9.32844 0.140384C8.97884 0.137346 8.64204 0.271738 8.39057 0.514616L0.847901 8.05728Z" fill="#F38630"/>
                                                </svg>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach

            </div>
            <br>
            <div>
                {{ $blogs->links() }}
            </div>
            <br><br>
        </div>
    </section>


    <br><br><br>
@endsection
