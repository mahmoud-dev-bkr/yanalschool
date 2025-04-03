@extends('front.layouts.master')
@section('css')
    <style>
        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 9999;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.9);
            /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        @-webkit-keyframes zoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        .team-item {
            border-radius: 8px;
            background: rgba(217, 217, 217, 0.30);
            /* Main-shadow */
            box-shadow: 0px 10px 8px 0px rgba(0, 0, 0, 0.08);
            padding: 10px;
        }


    </style>
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header p-0 " style="background-image: url({{ asset($metaBanner->image) }}); " data-wow-delay="0.1s">
        <div class="meta--banner ">
            <p class="fs-33 text-white">{{__('Projects Images') }}</p>
            <br>
            {{--  <nav aria-label="breadcrumb">  --}}
                <ol class="list-inline d-flex p-0">
                  <li class="sec-color"><a href="#">{{ __('Home Page') }}</a></li>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M10.828 12L15.778 16.95L14.364 18.364L8 12L14.364 5.63601L15.778 7.05001L10.828 12Z" fill="white"/>
                  </svg>
                  <li class="active" aria-current="page">{{ __('Projects Images') }}</li>
                </ol>
              {{--  </nav>  --}}
        </div>
    </div>
    <!-- Page Header End -->


    <section class="section--about ">
        <div class="container mb-5 py-5">
            @include('front.home.projects', ['projects' => $projects])



             <div class="pt-5 text-center justify-content-center">
                 {{ $projects->appends(request()->query())->render() }}
             </div>
            </div>
    </section>
    @include('front.home.qr')


@endsection
@section('js')

<script>
    // Get the modal

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    {{--  var img = document.getElementById("myImg");  --}}
    var modalImg = document.getElementById("img01");
    var modal = document.getElementById("view--image");
    function showImage(img){
      modal.style.display = "block";
      modalImg.src = img;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
    </script>
@endsection
