<style>
/* Language Section */
.language-section {
    background-color: #fff; /* White background */
}

/* Title */
.language-title {
    font-size: 5rem;
    font-weight: bold;
    color: #333;
    line-height: 1.2;
    margin-bottom: 1rem;
}

/* Subtitle */
.language-subtitle {
    text-align: center;
    font-size: 2rem;
    color: #666;
    font-weight: bold;
}

/* Flag Images Container */
.flag-images {
    display: flex;
    gap: 40px; /* Space between the two divs */
    align-items: center; /* Vertically center the divs */
}

/* Column for First and Second Images */
.flag-column {
    display: flex;
    flex-direction: column;
    gap: 30px; /* Space between the first and second images */
}

/* Single Flag Container (for the third image) */
.flag-single {
    display: flex;
    align-items: center; /* Center the third image vertically */
}

/* Flag Images */
.flag-img {
    border-radius: 50%; /* Circular shape */
    object-fit: cover; /* Ensure the image fits nicely in the circle */
    /* box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); Subtle shadow for depth */
}

/* Individual Flag Sizes */
.flag-uk {
    width: 250px; /* Larger size for the first image */
    height: 250px;
}

.flag-israel {
    width: 200px; /* Medium size for the second image */
    height: 200px;
}

.flag-germany {
    width: 150px; /* Smaller size for the third image */
    height: 150px;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .language-title {
        font-size: 1.8rem;
    }

    .language-subtitle {
        font-size: 0.9rem;
    }

    .flag-images {
        flex-direction: column; /* Stack the divs vertically on smaller screens */
        gap: 20px;
    }

    .flag-column {
        gap: 20px;
    }

    .flag-uk {
        width: 150px;
        height: 150px;
    }

    .flag-israel {
        width: 120px;
        height: 120px;
    }

    .flag-germany {
        width: 100px;
        height: 100px;
    }
}

@media (max-width: 576px) {
    .language-title {
        font-size: 1.5rem;
    }

    .flag-uk {
        width: 120px;
        height: 120px;
    }

    .flag-israel {
        width: 100px;
        height: 100px;
    }

    .flag-germany {
        width: 80px;
        height: 80px;
    }
}
</style>

<!-- Language Section -->
<section class="language-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Side: Text -->
            <div class="col-md-6 text-center text-md-start mb-4 mb-md-0">
                <h1 class="language-title">Yanel Institute - The Language Learning Center</h1>
                <p class="language-subtitle">Your place to learn a new language</p>
            </div>
            <!-- Right Side: Flags -->
            <div class="col-md-6 text-center">
                <div class="flag-images d-flex justify-content-center justify-content-md-end align-items-center gap-4 min-vh-80">
                    <!-- First Div: UK and Germany Flags in a Column -->
                    <div class="flag-column d-flex flex-column justify-content-between">
                        <img src="{{ asset($slider->image_1 ?? '') }}" alt="UK Flag" class="flag-img flag-uk">
                        <img src="{{ asset($slider->image_3 ?? '') }}" alt="Germany Flag" class="flag-img flag-germany align-self-end">
                    </div>
                    <!-- Second Div: Israel Flag Centered Vertically -->
                    <div class="flag-single d-flex align-items-center">
                        <img src="{{ asset($slider->image_2 ?? '') }}" alt="Israel Flag" class="flag-img flag-israel">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>