<div class="container pt-5">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white p-0 navbar-light sticky-top px-{{ isMobile() ? '3' : '4' }} justify-content-between "
        style="">
        {{-- <div class="d-flex gap-2 justify-content-between align-items-center"> --}}
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center pt-3">
            <div
                style="background-image: url({{ asset(getSettingValue('logo')) }});height:93px;width: 144px;background-position: center;background-repeat: no-repeat;background-size: contain">
            </div>

        </a>
        <div class="contact-icon m-auto d-flex justify-content-between" style="width: 50%;">
            <a href="tel:{{ getSettingValue('phone') }}" class="d-flex align-items-center d-flex flex-column ">
                <div class="icon d-flex gap-2" style="    margin-left: -44px;">
                    <i class="fa fa-phone icon-color d-flex align-items-center"></i>
                    <b>
                        {{ __('phone') }}
                    </b>
                    
                </div>
                
                <div class="text  d-flex flex-column">
                    <span >{{ getSettingValue('phone') }}</span>
                </div>
            </a>
            <a href="tel:{{ getSettingValue('phone') }}" class="d-flex align-items-center d-flex flex-column ">
                <div class="icon d-flex gap-2" style="    margin-left: -44px;">
                    <i class="fa fa-clock icon-color d-flex align-items-center"></i>
                    <b>
                        {{ __('phone') }}
                    </b>
                    
                </div>
                
                <div class="text  d-flex flex-column">
                    <span >{{ getSettingValue('phone') }}</span>
                </div>
            </a>
            <a href="tel:{{ getSettingValue('phone') }}" class="d-flex align-items-center d-flex flex-column ">
                <div class="icon d-flex gap-2" style="    margin-left: -44px;">
                    <i class="fas fa-map-marker-alt icon-color d-flex align-items-center"></i>
                    <b>
                        {{ __('phone') }}
                    </b>
                    
                </div>
                
                <div class="text  d-flex flex-column">
                    <span >{{ getSettingValue('phone') }}</span>
                </div>
            </a>
        </div>


    </nav>
    <hr>
    <div class="bottom-nav">
        <div class="nav-links">

            <a href="{{ url('/') }}" class="nav-item nav-link active">
                <i class="fa fa-home"></i>
                {{ __('Home') }}
            </a>
            <a href="{{ route('front.about') }}" class="nav-item nav-link">
                <i class="fa fa-user"></i>
                {{ __('About') }}
            </a>
            {{-- course --}}
            <a href="{{ route('front.courses') }}" class="nav-item nav-link">
                <i class="fa fa-graduation-cap"></i>
                {{ __('Courses') }}
            </a>    
            <a href="{{ route('front.contact') }}" class="nav-item nav-link">
                <i class="fa fa-address-book"></i>
                {{ __('Contact') }}
            </a>
        </div>
        <div class="social-icons">
            <i class="fab fa-facebook-f contact-icon"></i>
            <i class="fab fa-linkedin-in contact-icon"></i>
            <i class="fab fa-instagram contact-icon"></i>
        </div>
    </div>
    <!-- Navbar End -->
</div>
