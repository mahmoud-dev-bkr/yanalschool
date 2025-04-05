<style>
    /* Footer Section */
.footer-section {
    background-color: #f5f8fa; /* Light background */
    color: #333;
}

/* Footer Title */
.footer-title {
    font-size: 1.4rem;
    font-weight: bold;
    margin-bottom: 1.5rem;
    text-transform: lowercase;
}

/* Navigation Links */
.footer-link {
    color: #666;
    text-decoration: none;
    font-size: 1.2rem;
    display: block;
    margin-bottom: 0.5rem;
}

.footer-link:hover {
    color: #f28c38; /* Orange hover effect */
}

/* Contact Details (Reusing styles from the navbar) */
.contact-details .icon-wrapper {
    width: 30px;
    height: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.contact-details .icon-wrapper i {
    color: white;
    font-size: 16px;
}

.contact-details .text {
    display: flex;
    flex-direction: column;
    gap: 2px;
}

.contact-details .text b {
    font-size: 14px;
    color: #333;
}

.contact-details .text span {
    font-size: 12px;
    color: #666;
}

.contact-details a {
    text-decoration: none;
    color: inherit;
}

/* Follow Us Section */
.follow-us {
    position: relative;
    background-image: url('{{ asset(getSettingValue('logo')) }}'); /* Set logo as background */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    padding: 20px;
    border-radius: 10px;
    min-height: 100px; /* Ensure the div has enough height to show the background */
}

/* Gradient Overlay */
.follow-us::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(255, 255, 255, 0.9)); /* Dark at top, white at bottom */
    border-radius: 10px;
}

/* Content inside Follow Us */
.follow-us-content {
    position: relative; /* Ensure content is above the overlay */
    z-index: 1;
}

/* Logo Image */
.footer-logo {
    max-width: 60px; /* Adjust size as needed */
    height: auto;
}

/* Follow Button */
.btn-follow {
    background-color: white;
    color: black;
    border: none;
    border-radius: 10px;
    padding: 4px 20px;
    font-size: 0.9rem;
    text-transform: capitalize;
}

.btn-follow:hover {
    background-color: #3a7bc8;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .follow-us {
        min-height: 100px;
    }

    .footer-logo {
        max-width: 50px;
    }

    .btn-follow {
        padding: 6px 15px;
        font-size: 0.85rem;
    }
}

/* Footer Bottom */
.copyright-text {
    font-size: 0.9rem;
    color: #666;
}

/* Social Icons */
.social-icons {
    display: flex;
    
}

.social-icons .social-icon {
    color: #4a90e2;
    font-size: 1.2rem;
    margin-left: 5px;
    text-decoration: none;
}

.social-icons .social-icon:hover {
    color: #3a7bc8;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .footer-title {
        font-size: 1.1rem;
    }

    .footer-link {
        font-size: 0.85rem;
    }

    .footer-logo {
        max-width: 100px;
    }

    .social-icons .social-icon {
        margin-left: 10px;
    }
}
</style>

<!-- Footer Section -->
<footer class="footer-section py-5">
    <div class="container">
        <div class="row">
            <!-- Navigation Menu -->
            <div class="col-md-4 mb-4 mb-md-0">
                <h5 class="footer-title">navigation menu</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/') }}" class="footer-link">{{ __('home page') }}</a></li>
                    <li><a href="{{ route('front.about') }}" class="footer-link">{{ __('about') }}</a></li>
                    <li><a href="{{ route('front.courses') }}" class="footer-link">{{ __('Our courses') }}</a></li>
                    <li><a href="{{ route('front.contact') }}" class="footer-link">{{ __('Contact us') }}</a></li>
                </ul>
            </div>
            <!-- Contact Details -->
            <div class="col-md-4 mb-4 mb-md-0">
                <h5 class="footer-title">Contact details</h5>
                <div class="contact-details">
                    <!-- Phone -->
                    <a href="tel:{{ getSettingValue('phone') }}" class="d-flex align-items-center gap-2 mb-3">
                        <div class="icon-wrapper">
                            <i class="fa fa-phone icon-color"></i>
                        </div>
                        <div class="text d-flex flex-column">
                        <span class="fw-bold  fs-5">{{ __('phone') }}</span>
                        <span class="fs-6">+2 342 5446 67</span>
                            <!-- <span>{{ getSettingValue('phone') }}</span> -->
                        </div>
                    </a>
                    <!-- Hours of Operation -->
                    <a href="#" class="d-flex align-items-center gap-2 mb-3">
                        <div class="icon-wrapper">
                            <i class="fa fa-clock icon-color"></i>
                        </div>
                        <div class="text d-flex flex-column ">
                            <span class="fw-bold  fs-5">{{ __('Hours of Operation') }}</span>
                            <span class="fs-6">Mon - Fri 8 AM - 5 PM</span>
                        </div>
                    </a>
                    <!-- Address -->
                    <a href="#" class="d-flex align-items-center gap-2">
                        <div class="icon-wrapper">
                            <i class="fas fa-map-marker-alt icon-color"></i>
                        </div>
                        <div class="text d-flex flex-column">
                        <span class="fw-bold fs-5">{{ __('address') }}</span>
                        <span class="fs-6">Franklin St, Greenpoint Ave</span>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Follow Us -->
            <div class="col-md-3 text-center text-md-end">
                <div class="follow-us">
                    <div class="follow-us-content d-flex align-items-center justify-content-start justify-start-md-end">
                        <img src="{{ asset(getSettingValue('logo')) }}" alt="Logo" class="footer-logo me-3 bg-white p-2">
                        <a href="https://www.facebook.com/profile.php?id=100063773956960&ref=embed_page#" target="_blank" class="btn btn-follow"><i class="fab fa-facebook-f me-2"></i>Follow Page</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom -->
        <hr class="my-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <p class="copyright-text mb-0">© Copyright 2020 Shelly All rights reserved</p>
            </div>
            <div class="col-md-6 text-md-end">
                <div class="social-icons d-flex justify-content-end">
                    <a href="https://www.facebook.com/profile.php?id=100063773956960&ref=embed_page#" target="_blank" class="social-icon"><i class="fab fa-facebook-f me-2" style="background-color: #155799; color: white; width: 30px; height: 30px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center;"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-linkedin-in" style="background-color: #155799; color: white; width: 30px; height: 30px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center;"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram" style="background-color: #155799; color: white; width: 30px; height: 30px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center;"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>