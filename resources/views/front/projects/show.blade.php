@extends('front.layouts.master')
@section('css')
    <style>
        .image {
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 400px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
    </style>
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="bg-white p-5">
        <div class="container-fluid  p-0 "
            style="height: 300px;background-position: center;background-repeat: no-repeat;background-size: cover;  border-radius: 30px;background-image: url({{ asset($metaBanner->image) }}); "
            data-wow-delay="0.1s">
            <div class="meta--banner">
                <div class="container text-center py-5">
                    <h1 class="animated slideInDown mb-4 text-center text-white">
                        {{ isRtl() ? $metaBanner->title : $metaBanner->title_en }}</h1>
                    <p class="text-white"> {{ isRtl() ? $metaBanner->description : $metaBanner->description_en }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


     <section class="container pt-5 mb-5 py-5">
        <div class="row">
            <div class="col-6">
                <div class="image" style="background-image: url({{ asset($project->image) }})"></div>
            </div>

            <div class="col-md-6">
                <h3>
                    <b>{{ $project->title }}</b>
                </h3>
                <div class="desc pt-4">
                    {{ $project->short_description }}
                </div>
                <div class="desc pt-1">
                    {!! $project->description !!}
                </div>
            </div>

        </div>
     </section>
@endsection
