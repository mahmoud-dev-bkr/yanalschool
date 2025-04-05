<style>
/* Contact Section */
.contact-section {
    background-color: #fff; /* Light blue-gray background to match the image */
}

.about-title-wrapper {
    background-color: #f5f7fa; /* Light blue-gray background for the title only */
    padding: 500px 0; /* Add padding to give the background some space around the title */
}

/* Title */
.about-title {
    font-size: 2.5rem;
    font-weight: bold;
    color: #333;
    text-transform: capitalize;
    margin: 0; /* Remove default margin to control spacing via the wrapper */
}

/* Title */
.contact-title {
    font-size: 3.3rem;
    font-weight: 900;
    color: #333;
    text-transform: capitalize;
}

/* Subtitle */
.contact-subtitle {
    font-size: 2rem;
    font-weight: 700;
    color: #333;
}

/* Contact Details Container */
.contact-details {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between; /* Spread items evenly across the container */
}

/* Contact Item */
.contact-item {
    max-width: 250px; /* Reduced width to prevent items from stretching too wide */
    display: flex;
    align-items: center; /* Vertically center the image and text */
}

/* Contact Icon Column */
.contact-icon-col {
    flex: 0 0 auto; /* Prevent the image column from growing */
}

/* Contact Image */
.contact-image {
    width: 40px; /* Adjust size to match the image */
    height: 40px;
    object-fit: contain; /* Ensure the image fits without distortion */
}

/* Contact Text Column */
.contact-text-col {
    flex: 1; /* Allow the text column to take up remaining space */
}

/* Contact Label */
.contact-label {
    font-size: 1.3rem;
    color: #666;
    font-weight: 600;
    text-transform: capitalize;
    margin-bottom: 0.2rem; /* Reduced margin for tighter spacing */
}

/* Contact Value */
.contact-value {
    font-size: 1.1rem;
    color: #333;
    margin: 0;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .contact-title {
        font-size: 1.8rem;
    }

    .contact-subtitle {
        font-size: 1.3rem;
    }

    .contact-details {
        flex-direction: column;
        align-items: center;
        gap: 20px; /* Reintroduce gap for vertical stacking on smaller screens */
    }

    .contact-item {
        max-width: 100%;
    }

    .contact-image {
        width: 30px;
        height: 30px;
    }

    .contact-label,
    .contact-value {
        font-size: 0.85rem;
    }
}

@media (max-width: 576px) {
    .contact-title {
        font-size: 1.5rem;
    }

    .contact-subtitle {
        font-size: 1.2rem;
    }

    .contact-image {
        width: 25px;
        height: 25px;
    }
}
</style>

<!-- Contact Section -->
<section class="contact-section py-5">
    <div class="container">
        <div class="about-title-wrapper text-center mb-5">
            <h2 class="about-title">{{ __('Contact us') }}</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-10">
                <h3 class="contact-subtitle text-center mb-4">{{ __('Contact details') }}</h3>
                <div class="contact-details d-flex flex-wrap">
                    <!-- Phone -->
                    <div class="contact-item d-flex align-items-center">
                        <div class="contact-icon-col me-3">
                            <img src="{{ asset('assets/img/backgrounds/13.png') }}" alt="Phone" class="contact-image">
                        </div>
                        <div class="contact-text-col">
                            <p class="contact-label mb-1">{{ __('phone') }}</p>
                            <p class="contact-value mb-0">{{ __('050-9660113') }}</p>
                        </div>
                    </div>
                    <!-- Hours of Operation -->
                    <div class="contact-item d-flex align-items-center">
                        <div class="contact-icon-col me-3">
                            <img src="{{ asset('assets/img/backgrounds/15.png') }}" alt="Hours of Operation" class="contact-image">
                        </div>
                        <div class="contact-text-col">
                            <p class="contact-label mb-1">{{ __('hours of operation') }}</p>
                            <p class="contact-value mb-0">{{ __('Sun - Fri between 4:00 PM - 9:00 PM') }}</p>
                        </div>
                    </div>
                    <!-- Address -->
                    <div class="contact-item d-flex align-items-center">
                        <div class="contact-icon-col me-3">
                            <img src="{{ asset('assets/img/backgrounds/21.png') }}" alt="Address" class="contact-image">
                        </div>
                        <div class="contact-text-col">
                            <p class="contact-label mb-1">{{ __('address') }}</p>
                            <p class="contact-value mb-0">{{ __('Franklin St, Greenpoint Ave') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>