<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Welcome to Our Platform</title>
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('front/css/my-style.css') }}">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Icon Font Stylesheet -->


    <style>
        /* Inline styles for simplicity, consider using CSS classes for larger templates */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f1f1f1;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 200px;
        }

        .message {
            padding: 20px;
            background-color: #ffffff;
        }

        .message p {
            margin-bottom: 10px;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }
        .bg-main{
            background-color: #5D085E;
        }
    </style>
</head>

<body>
    <div class="container">



            <div class="message">
                <p style="margin: auto">
                    <img style="width: 100px;height: 100px;" src="{{ asset(getSettingValue('logo')) }}" alt="">
                </p>
                <p>Greetings from {{ getSettingValue('site_name_'.App::getLocale()) }}</p>
                <p>
                    this is new news in our platform, You can see it in our news section
                </p>
                <p>
                    <a href="{{ $mailData['url'] }} }}">
                        {{ $mailData['url'] }}
                    </a>
                </p>
                <p>Best regards,

                </p>
                <p>{{ getSettingValue('site_name_'.App::getLocale()) }} </p>
            </div>


    </div>


</body>

</html>
