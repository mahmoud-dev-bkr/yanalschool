<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--  <title>{{ getSettingValue('site_name_'.app()->getLocale()) . ' | ' . $title }}</title>  --}}
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! stripslashes(JsonLd::generate()) !!}
        <meta name="author" content="Ahmed Ramadan">


     <!-- Favicon -->
     <link href="{{ asset(getSettingValue('favicon')) }}" rel="icon">

     <!-- Google Web Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet">

     <!-- Icon Font Stylesheet -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
            :root {
    --primary:#27AAE1;
    --secondary: #FF69B4;
    --light: #ffe2e259;
    --dark: #15233C;
}
    </style>
     @include('front.layouts.css')

     {!! getSettingValue('google_analytics') !!}
</head>
<body class="{{ isRtl()?'rtl' :'ltr' }}">


    @include('front.layouts.header')
    @yield('content')
    @include('front.layouts.footer')

    <!-- Back to Top -->
    {{--  <a href="#" class="btn btn-lg bg-main text-white btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>  --}}

    @include('front.layouts.script')
    @include('vendor.sweetalert.alert')
</body>
</html>
