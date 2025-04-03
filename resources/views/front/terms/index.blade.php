@extends('front.layouts.master')
@section('content')

    <br><br>
    <section class="section--services ">
        <div class="container pb-5">
            <p>
                {!!  getSettingValue('terms_of_use_' . app()->getLocale()) !!}
            </p>
        </div>

    </section>
    <br><br><br>
@endsection
