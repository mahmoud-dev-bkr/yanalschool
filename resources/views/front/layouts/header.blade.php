<style>
    /* Styling for the contact icons section */
.contact-icon {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 20px; /* Space between the items */
}

/* Icon wrapper styling */
.icon-wrapper {
    width: 30px;
    height: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Icon styling */
.icon-wrapper i {
    color: white; /* White icon color */
    font-size: 20px;
}

/* Text styling */
.contact-icon .text {
    display: flex;
    flex-direction: column;
    gap: 2px; /* Space between label and value */
}

.contact-icon .text b {
    font-size: 14px;
    color: #333; /* Darker color for the label */
}

.contact-icon .text span {
    font-size: 12px;
    color: #666; /* Lighter color for the value */
}

/* Remove the negative margin that was causing misalignment */
.contact-icon a {
    text-decoration: none;
    color: inherit;
}

/* Ensure responsiveness */
@media (max-width: 768px) {
    .contact-icon {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
    }
}

/* navbar */
/* Bottom Nav Section */
.bottom-nav {
    background-color: #fff; /* White background */
}

/* Navigation Links */
.nav-links {
    display: flex;
    gap: 20px; /* Space between links */
    position: relative;
}

.nav-links .nav-item {
    font-size: 1.5rem;
    color: #333; /* Black text */
    text-decoration: none;
    text-transform: capitalize;
    position: relative; /* For the underline pseudo-element */
    transition: color 0.3s ease;
}

.nav-links .nav-item:hover {
    color: #f28c38; /* Orange on hover */
}

.nav-links .nav-item.active {
    color: #f28c38; /* Orange for active link */
    font-weight: bold;
}

/* Default Underline (Transparent) */
.nav-links .nav-item::after {
    content: '';
    position: absolute;
    width: 100%; /* Always full width */
    height: 2px;
    background-color: transparent; /* Transparent by default */
    bottom: -2px; /* Position below the text */
    left: 0;
    transition: background-color 0.3s ease; /* Smooth transition for the color change */
}

/* Underline Color on Hover */
.nav-links .nav-item:hover::after {
    background-color: #f28c38; /* Orange underline on hover */
}

/* Active Link Underline */
.nav-links .nav-item.active::after {
    background-color: #155799; /* Blue underline for active link */
}

/* Social Icons */
.social-icons {
    display: flex;
    gap: 10px; /* Space between icons */
}

.social-icons .social-icon {
    text-decoration: none;
}

.social-icons .social-icon i {
    background-color: #155799; /* Blue background */
    color: white;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 0.9rem;
    transition: background-color 0.3s ease;
}

.social-icons .social-icon:hover i {
    background-color: #0d3c6e; /* Darker blue on hover */
}

/* Horizontal Line */
.bottom-nav hr {
    border-top: 1px solid #ddd; /* Light gray line */
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .bottom-nav .nav-links {
        gap: 15px;
    }

    .bottom-nav .nav-item {
        font-size: 0.9rem;
    }

    .social-icons .social-icon i {
        width: 25px;
        height: 25px;
        font-size: 0.8rem;
    }
}
</style>

<div class="pt-5">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white p-0 navbar-light sticky-top px-{{ isMobile() ? '3' : '4' }} justify-content-between">
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center pt-3">
            <div style="background-image: url({{ asset(getSettingValue('logo')) }});height:93px;width: 144px;background-position: center;background-repeat: no-repeat;background-size: contain">
            </div>
        </a>
        <div class="contact-icon m-auto d-flex justify-content-between align-items-center" style="width: 50%;">
            <!-- Phone -->
            <a href="tel:{{ getSettingValue('phone') }}" class="d-flex align-items-center gap-2">
                <div class="icon-wrapper">
                    <i class="fa fa-phone icon-color"></i>
                </div>
                <div class="text d-flex flex-column">
                    <span class="fw-bold  fs-5">{{ __('phone') }}</span>
                    <span class="fs-5">+2 342 5446 67</span>
                    <!-- <span>{{ getSettingValue('phone') }}</span> -->
                </div>
            </a>
            <!-- Hours of Operation -->
            <a href="#" class="d-flex align-items-center gap-2">
                <div class="icon-wrapper">
                    <i class="fa fa-clock icon-color"></i>
                </div>
                <div class="text d-flex flex-column">
                    <span class="fw-bold  fs-5">{{ __('Hours of Operation') }}</span>
                    <span class="fs-5">Sun - Fri 16:00 - 21:00</span>
                </div>
            </a>
            <!-- Main Address -->
            <a href="#" class="d-flex align-items-center gap-2 " >
                <div class="icon-wrapper">
                    <i class="fas fa-map-marker-alt icon-color"></i>
                </div>
                <div class="text d-flex flex-column">
                    <span class="fw-bold  fs-5">{{ __('main address') }}</span>
                    <span class="fs-5">Umm Al Fahm</span>
                </div>
            </a>
        </div>
    </nav>
    <hr>
    <div class="bottom-nav">
    <div class="container d-flex justify-content-between align-items-center py-3">
        <div class="nav-links">
            <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">
                {{ __('Home Page') }}
            </a>
            <a href="{{ route('front.about') }}" class="nav-item nav-link {{ request()->routeIs('front.about') ? 'active' : '' }}">
                {{ __('About') }}
            </a>
            <a href="{{ route('front.courses') }}" class="nav-item nav-link {{ request()->routeIs('front.courses') ? 'active' : '' }}">
                {{ __('Our Courses') }}
            </a>    
            <a href="{{ route('front.contact') }}" class="nav-item nav-link {{ request()->routeIs('front.contact') ? 'active' : '' }}">
                {{ __('Contact Us') }}
            </a>
        </div>
        <div class="social-icons">
            <a href="https://www.facebook.com/profile.php?id=100063773956960&ref=embed_page#" target="_blank" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
    <hr class="my-0">
</div>