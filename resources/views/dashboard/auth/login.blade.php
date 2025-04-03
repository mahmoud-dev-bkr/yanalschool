@extends('dashboard.layouts.master')

@section('title')
    {{ __('Login') }}
@endsection

@section('css')
@endsection

@section('content-login')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row justify-content-center w-100 pt-5">
            <div class="col-md-8 col-lg-6 col-xxl-3">
                <div class="card mb-0">
                    <div class="card-body">
                        <a href="{{ route('admin.home') }}" class="text-nowrap logo-img text-center d-block py-3 w-100">
                            <img src="{{ asset(getSettingValue('logo')?? '') }}" width="140px" alt="">
                        </a>
                        {{-- <p class="text-center"></p> --}}
                        <form action="{{ route('admin.login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">{{ __('Email') }}</label>
                                <input type="email" autocomplete="new-mail" placeholder="ex@gmail.com" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputPassword1" class="form-label">{{ __('Password') }}</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"  name="password" placeholder="********" id="exampleInputPassword1" autocomplete="new-password">
                            </div>
                            {{-- <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="form-check">
                                    <input class="form-check-input primary" name="remember" type="checkbox" value=""
                                        id="flexCheckChecked" >
                                    <label class="form-check-label text-dark" for="flexCheckChecked">
                                        {{ __('admin.remember_password') }}
                                    </label>
                                </div>
                                <a class="text-primary fw-bold" href="./index.html">Forgot Password ?</a>
                            </div> --}}
                            <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">{{ __('Login') }}</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
