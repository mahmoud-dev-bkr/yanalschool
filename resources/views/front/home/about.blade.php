<style>
    /* Benefits Section */
.benefits-section {
    background-color: #fff; /* White background */
}

/* Title */
.benefits-title {
    font-size: 4rem;
    font-weight: bold;
    color: #333;
}

/* Benefit Card */
.benefit-card {
    background-color: white; /* White background */
    border-radius: 15px; /* Rounded corners */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    transition: box-shadow 0.3s ease;
}

.benefit-card:hover {
    box-shadow: 0 20px 30px rgba(0, 0, 0, 0.15); /* Deeper shadow on hover */
}

/* Benefit Image */
.benefit-image {
    width: 60px; /* Adjust size to match the image */
    height: 60px;
    object-fit: contain; /* Ensure the image fits without distortion */
}

/* Benefit Text */
.benefit-text {
    color: #2B2B2B;
    font-size: 25px;
    font-weight: 800;
    margin: 0;
    text-transform: capitalize;
    min-height: 80px;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .benefits-title {
        font-size: 1.8rem;
    }

    .benefit-card {
        padding: 3rem;
    }

    .benefit-image {
        width: 50px;
        height: 50px;
    }

    .benefit-text {
        font-size: 0.9rem;
    }
}

@media (max-width: 576px) {
    .benefits-title {
        font-size: 1.5rem;
    }

    .benefit-card {
        padding: 2rem;
    }

    .benefit-image {
        width: 40px;
        height: 40px;
    }
}
</style>

<!-- Benefits Section -->
<section class="benefits-section py-5">
    <div class="container">
        <h2 class="benefits-title text-center mb-5">{{ __('Learn a language at the Yanel Institute') }}</h2>
        <div class="row">
            <!-- Card 1: Professional Teachers -->
            <div class="col-md-3 mb-4">
                <div class="benefit-card text-center p-4">
                    <img src="{{ asset('assets/img/backgrounds/22.png') }}" alt="Professional Teachers" class="benefit-image mb-3">
                    <p class="benefit-text">Professional teachers with experience</p>
                </div>
            </div>
            <!-- Card 2: Language Studies on Zoom -->
            <div class="col-md-3 mb-4">
                <div class="benefit-card text-center p-4">
                    <img src="{{ asset('assets/img/backgrounds/16.png') }}" alt="Language Studies on Zoom" class="benefit-image mb-3">
                    <p class="benefit-text">Language studies on Zoom</p>
                </div>
            </div>
            <!-- Card 3: Huge Variety of Languages -->
            <div class="col-md-3 mb-4">
                <div class="benefit-card text-center p-4">
                    <img src="{{ asset('assets/img/backgrounds/14.png') }}" alt="Huge Variety of Languages" class="benefit-image mb-3">
                    <p class="benefit-text">A huge variety of languages</p>
                </div>
            </div>
            <!-- Card 4: Suitable for All Ages -->
            <div class="col-md-3 mb-4">
                <div class="benefit-card text-center p-4">
                    <img src="{{ asset('assets/img/backgrounds/23.png') }}" alt="Suitable for All Ages" class="benefit-image mb-3">
                    <p class="benefit-text">Suitable for all ages</p>
                </div>
            </div>
        </div>
    </div>
</section>