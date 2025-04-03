@extends('front.layouts.master')
@section('css')
@endsection
@section('content')
    @include('front.includes.pageheader', ['metaBanner' => $metaBanner, 'title' => __('Contact Us')])
    <section class="section--about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 pt-5" style="padding-top: 80px !important">
                    <div class="card text-center  position-relative border-0 w3-round-xlarge"
                        style="height: 100%;background: #FEF3EA">
                        <div class="card-body">
                            <p class="position-absolute top-0 start-50 translate-middle">
                                <svg width="104" height="104" viewBox="0 0 104 104" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="104" height="104" rx="52"
                                        fill="url(#paint0_linear_106_3484)" />
                                    <path
                                        d="M68 36H36C33.8 36 32.02 37.8 32.02 40L32 64C32 66.2 33.8 68 36 68H68C70.2 68 72 66.2 72 64V40C72 37.8 70.2 36 68 36ZM68 44L52 54L36 44V40L52 50L68 40V44Z"
                                        fill="white" />
                                    <defs>
                                        <linearGradient id="paint0_linear_106_3484" x1="62.6304" y1="109.619"
                                            x2="62.6304" y2="21.2727" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#006D83" />
                                            <stop offset="1" stop-color="#0C3668" stop-opacity="0.88" />
                                        </linearGradient>
                                    </defs>
                                </svg>


                            </p><br><br><br>
                            <b class="fs-28 desc-color ">{{ __('Email') }}</b>
                            <p class="fs-19 w-400 desc-color">{{ getSettingValue('email_1') }}</p><br>
                            <a href="mailto:{{ getSettingValue('email_1') }}" class="  w3-round-xlarge btn"
                                style="border: 1px solid #006D83">
                                <span class=" fs-16 w-400">{{ __('Send Email') }}</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 pt-5" style="padding-top: 80px !important">
                    <div class="card text-center  position-relative border-0 w3-round-xlarge"
                        style="height: 100%;background: #FEF3EA">
                        <div class="card-body">
                            <p class="position-absolute top-0 start-50 translate-middle">
                                <svg width="104" height="104" viewBox="0 0 104 104" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="104" height="104" rx="52"
                                        fill="url(#paint0_linear_106_3506)" />
                                    <path
                                        d="M63.3138 38.608C57.0658 32.462 46.9358 32.462 40.6878 38.608C39.2044 40.0573 38.0256 41.7885 37.2208 43.6999C36.416 45.6112 36.0015 47.6642 36.0015 49.738C36.0015 51.8119 36.416 53.8649 37.2208 55.7762C38.0256 57.6876 39.2044 59.4188 40.6878 60.868L51.9998 71.998L63.3138 60.868C64.7972 59.4188 65.976 57.6876 66.7808 55.7762C67.5856 53.8649 68.0001 51.8119 68.0001 49.738C68.0001 47.6642 67.5856 45.6112 66.7808 43.6999C65.976 41.7885 64.7972 40.0573 63.3138 38.608ZM51.9998 54.998C50.6638 54.998 49.4098 54.478 48.4638 53.534C47.5273 52.5955 47.0013 51.3239 47.0013 49.998C47.0013 48.6722 47.5273 47.4005 48.4638 46.462C49.4078 45.518 50.6638 44.998 51.9998 44.998C53.3358 44.998 54.5918 45.518 55.5358 46.462C56.4723 47.4005 56.9982 48.6722 56.9982 49.998C56.9982 51.3239 56.4723 52.5955 55.5358 53.534C54.5918 54.478 53.3358 54.998 51.9998 54.998Z"
                                        fill="white" />
                                    <defs>
                                        <linearGradient id="paint0_linear_106_3506" x1="62.6304" y1="109.619"
                                            x2="62.6304" y2="21.2727" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#006D83" />
                                            <stop offset="1" stop-color="#0C3668" stop-opacity="0.88" />
                                        </linearGradient>
                                    </defs>
                                </svg>


                            </p><br><br><br>
                            <b class="fs-28 desc-color ">{{ __('Location') }}</b>
                            <p class="fs-19 w-400 desc-color">{{ getSettingValue('address_' . app()->getLocale()) }}</p>
                            <a target="_blank" href="{{ getSettingValue('location_url') }}" class="  w3-round-xlarge btn"
                                style="border: 1px solid #006D83">
                                <span class=" fs-16 w-400">{{ __('Get Direction') }}</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 pt-5" style="padding-top: 80px !important">
                    <div class="card text-center  position-relative border-0 w3-round-xlarge"
                        style="height: 100%;background: #FEF3EA">
                        <div class="card-body">
                            <p class="position-absolute top-0 start-50 translate-middle">
                                <svg width="104" height="104" viewBox="0 0 104 104" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="104" height="104" rx="52"
                                        fill="url(#paint0_linear_106_3517)" />
                                    <path
                                        d="M43.9561 36C43.2259 35.9996 42.5041 36.1559 41.8395 36.4585C41.175 36.7611 40.5831 37.2029 40.1041 37.754C36.4661 41.4 35.3981 45.502 36.3061 49.628C37.1861 53.618 39.8621 57.414 43.2181 60.772C46.5781 64.13 50.3721 66.808 54.3581 67.69C58.4821 68.602 62.5881 67.544 66.2381 63.92C66.7912 63.4403 67.2348 62.8473 67.5389 62.1813C67.843 61.5152 68.0005 60.7916 68.0007 60.0595C68.0009 59.3273 67.8438 58.6036 67.54 57.9374C67.2363 57.2712 66.793 56.678 66.2401 56.198L63.8201 53.778C62.8113 52.7704 61.4438 52.2045 60.0181 52.2045C58.5923 52.2045 57.2248 52.7704 56.2161 53.778L54.9821 55.014C54.8324 55.1637 54.6547 55.2825 54.4591 55.3635C54.2635 55.4446 54.0538 55.4863 53.8421 55.4863C53.6303 55.4863 53.4207 55.4446 53.2251 55.3635C53.0295 55.2825 52.8518 55.1637 52.7021 55.014L48.9941 51.304C48.6922 51.0014 48.5226 50.5914 48.5226 50.164C48.5226 49.7366 48.6922 49.3266 48.9941 49.024L50.2301 47.784C51.2383 46.7752 51.8046 45.4073 51.8046 43.981C51.8046 42.5547 51.2383 41.1868 50.2301 40.178L47.8101 37.756C47.3301 37.2053 46.7379 36.7637 46.0732 36.4608C45.4084 36.158 44.6866 36.0008 43.9561 36Z"
                                        fill="white" />
                                    <defs>
                                        <linearGradient id="paint0_linear_106_3517" x1="62.6304" y1="109.619"
                                            x2="62.6304" y2="21.2727" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#006D83" />
                                            <stop offset="1" stop-color="#0C3668" stop-opacity="0.88" />
                                        </linearGradient>
                                    </defs>
                                </svg>



                            </p>
                            <br><br><br>
                            <b class="fs-28 desc-color ">{{ __('Contact Us') }}</b>
                            <p class="fs-19 m-0 w-400 desc-color">{{ getSettingValue('phone') }}</p>
                            <p class="fs-19  w-400 desc-color">
                                <a href="tel:{{ getSettingValue('whatsapp') }}"
                                    class="fs-19 w-400 desc-color">{{ getSettingValue('whatsapp') }}</a>
                            </p>
                            <a href="tel:{{ getSettingValue('phone') }}" class="  w3-round-xlarge btn"
                                style="border: 1px solid #006D83">
                                <span class="desc-color fs-16 w-400">{{ __('Contact Us') }}</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <br><br><br><br>

            <div class="row">
                <div class="col-md-12 m-auto">
                    <div class="card p-4 sec-border w3-round-xlarge   " style="border-color: #F38630">
                        <div class="d-flex justify-content-between align-items-center ">
                            <div class=" wow fadeInDown">
                                <span class="  desc-color fs-33">
                                    <svg width="8" height="48" viewBox="0 0 8 48" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="8" height="48" rx="4" fill="#F38630" />
                                    </svg>

                                    {{ __('Fill out the information and we will contact you as soon as possible') }}

                                </span>

                            </div>

                        </div>
                        <div class="card-body">
                            <div class="row g-3 pt-4">
                                <div class="col-md-12 col-lg-4">
                                    <label class="form-label fs-19 desc-color w-700"
                                        for="name">{{ __('Name') }}</label> <span class="text-danger">*</span>
                                    <div class="form-floating">
                                        <input type="text" class="form-control sec-border" id="name"
                                            placeholder="Ahmed Ramadan ...">
                                        <label class="text-muted" for="name">{{ __('Name') }}</label>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4">
                                    <label class="form-label fs-19 desc-color w-700"
                                        for="phone">{{ __('Phone') }}</label> <span class="text-danger">*</span>

                                    <div class="form-floating">
                                        <input type="text" class="form-control sec-border" id="phone"
                                            placeholder="رقم الهاتف">
                                        <label class="text-muted" for="phone">{{ __('Phone') }}</label>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4">
                                    <label class="form-label fs-19 desc-color w-700"
                                        for="name">{{ __('Email') }}</label> <span class="text-danger">*</span>

                                    <div class="form-floating">
                                        <input type="email" class="form-control sec-border" id="email"
                                            placeholder="ex@gmail.com">
                                        <label class="text-muted" for="email">{{ __('Email') }}</label>
                                    </div>
                                </div>

                                <div class="col-12 pt-4">
                                    <label class="form-label fs-19 desc-color w-700"
                                        for="message">{{ __('Message') }}</label>
                                    <div class="form-floating">
                                        <textarea class="form-control sec-border" placeholder="ادخل رسالتك" id="message" style="height: 100px"></textarea>
                                        <label class="text-muted" for="message">{{ __('Message') }}</label>
                                    </div>
                                </div>
                                <div class="col-12  text-center">
                                    <a class="btn custom--btn desc-color " type="button" onclick="sendMessage()">
                                        {{ __('Send Message') }}
                                        <svg class="svg2" width="24" height="18" viewBox="0 0 24 18"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.847901 8.05728C0.59794 8.30732 0.457519 8.6464 0.457519 8.99995C0.457519 9.3535 0.59794 9.69258 0.847901 9.94262L8.39057 17.4853C8.51356 17.6126 8.66069 17.7142 8.82336 17.7841C8.98603 17.854 9.16099 17.8907 9.33803 17.8923C9.51507 17.8938 9.69065 17.8601 9.85451 17.793C10.0184 17.726 10.1672 17.627 10.2924 17.5018C10.4176 17.3766 10.5166 17.2277 10.5837 17.0639C10.6507 16.9 10.6844 16.7245 10.6829 16.5474C10.6814 16.3704 10.6446 16.1954 10.5747 16.0327C10.5048 15.8701 10.4032 15.7229 10.2759 15.5999L5.00923 10.3333L22.6666 10.3333C23.0202 10.3333 23.3593 10.1928 23.6094 9.94276C23.8594 9.69271 23.9999 9.35357 23.9999 8.99995C23.9999 8.64633 23.8594 8.30719 23.6094 8.05714C23.3593 7.80709 23.0202 7.66662 22.6666 7.66662L5.00923 7.66662L10.2759 2.39995C10.5188 2.14848 10.6532 1.81168 10.6501 1.46208C10.6471 1.11249 10.5069 0.77807 10.2597 0.530859C10.0124 0.283649 9.67803 0.143423 9.32844 0.140384C8.97884 0.137346 8.64204 0.271738 8.39057 0.514616L0.847901 8.05728Z"
                                                fill="#F38630" />
                                        </svg>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>


    </section>
@endsection
@section('js')
    <script>
        var whatsapp_base_url = 'https://wa.me/{phone}/?text={text}';

        function validate(data) {
            var valid = true;
            Object.keys(data).forEach(key => {
                if (!data[key]) {
                    valid = false;
                }
            });
            return valid;
        }

        function sendMessage() {
            var text = '';

            var data = {
                name: $('#name').val(),
                email: $('#email').val(),
                phone: $('#phone').val(),
                message: $('#message').val(),
            };

            if (!validate(data)) {
                alert('Please fill all the fields');
                return false;
            }

            Object.keys(data).forEach(key => {
                text += key + ' :' + data[key] + " \n";

            });

            var link = whatsapp_base_url
                .replace('{phone}', "{{ getSettingValue('whatsapp') }}")
                .replace('{text}', encodeURIComponent(text));

            console.log(link + text)
            window.open(link, "_blank");
        }
    </script>
@endsection
