@extends('front.layouts.master')
@section('content')

    <br><br>
    <section class="section--services ">
        <div class="container pb-5">
            <p>
                {!!  getSettingValue('privacy_policy_' . app()->getLocale()) !!}
            </p>
        </div>

    </section>
    <br><br><br>
@endsection
