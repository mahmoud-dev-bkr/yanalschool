<style>
    

/* Languages Section */
.languages-section {
    background-color: #fff; /* White background */
}

/* Title */
.languages-title {
    font-size: 4rem;
    font-weight: bold;
    color: #333;
}

/* Text */
.languages-text {
    font-size: 1.3rem;
    color: #666;
    line-height: 1.2;
    max-width: 900px; /* Limit the width for better readability */
    margin: 0 auto; /* Center the paragraph */
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .languages-title {
        font-size: 1.8rem;
    }

    .languages-text {
        font-size: 0.9rem;
    }
}

@media (max-width: 576px) {
    .languages-title {
        font-size: 1.5rem;
    }

    .languages-text {
        font-size: 0.85rem;
    }
}


/* Language Cards Section */
.language-cards-section {
    background-color: #fff; /* White background */
}

/* Language Card */
.language-card {
    background-color: #fff;
    border-radius: 15px; /* Rounded corners */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    overflow: hidden; /* Ensure the flag image respects the border-radius */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    min-height: 400px;
}

.language-card:hover {
    /* transform: translateY(-5px); */
    box-shadow: 0 20px 30px rgba(0, 0, 0, 0.15); /* Deeper shadow on hover */
}

/* Flag Image */
.language-flag {
    width: 100%;
    height: 250px; /* Fixed height for the flag */
    object-fit: cover; /* Ensure the image fits nicely */
}

/* Card Body */
.language-card-body {
    padding: 1.5rem;
}

/* Card Title */
.language-card-title {
    font-size: 2.5rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 1rem;
}

/* Card Text */
.language-card-text {
    font-size: 1.2rem;
    color: #666;
    line-height: 1.3;
    margin-bottom: 1rem;
}

/* Card Link */
.language-card-link {
    font-size: 1.2rem;
    color: #333;
    text-decoration: none;
    text-transform: uppercase;
    font-weight: bold;
}

.language-card-link:hover {
    color: #333; /* Orange on hover to match your theme */
}

.language-card-link i {
    font-size: 0.8rem;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .language-card-title {
        font-size: 1.3rem;
    }

    .language-card-text {
        font-size: 0.85rem;
    }

    .language-card-link {
        font-size: 0.85rem;
    }

    .language-flag {
        height: 120px;
    }
}

@media (max-width: 576px) {
    .language-card-title {
        font-size: 1.2rem;
    }

    .language-flag {
        height: 100px;
    }
}



/* All Languages Button Container */
.all-languages-button {
    background-color: #fff; /* White background */
}

/* All Languages Button */
.btn-all-languages {
    background-color: #155799; /* Blue background */
    color: white;
    border: none;
    border-radius: 25px; /* Rounded corners */
    padding: 10px 30px;
    font-size: 1.5rem;
    font-weight: 500;
    text-transform: lowercase;
    display: inline-flex;
    align-items: center;
    transition: background-color 0.3s ease;
}

.btn-all-languages:hover {
    background-color: #3a7bc8; /* Darker blue on hover */
    color: white;
}

.btn-all-languages i {
    font-size: 0.9rem;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .btn-all-languages {
        font-size: 0.9rem;
        padding: 8px 25px;
    }
}

@media (max-width: 576px) {
    .btn-all-languages {
        font-size: 0.85rem;
        padding: 6px 20px;
    }
}

</style>
<!-- Languages Section -->
<section class="languages-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="languages-title mb-4">The languages we teach</h2>
                <p class="languages-text">
                Are you planning a flight abroad and want to learn the language to get around better? Does your new job require knowledge of a particular language? Interested in expanding your horizons and learning a new language? The Yanel Institute offers you a huge selection of language courses at a variety of levels to perfectly suit you.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Language Cards Section -->
<section class="language-cards-section py-5">
    <div class="container">
        <div class="row">
            <!-- Card 1: Hebrew -->
            <div class="col-md-4 mb-4">
                <div class="language-card">
                    <a href="#"><img src="{{ asset('assets/img/backgrounds/27.png') }}" alt="Hebrew Flag" class="language-flag"> </a>
                    <div class="language-card-body p-4">
                        <h3 class="language-card-title">Hebrew</h3>
                        <p class="language-card-text">
                        Improve your Hebrew language skills, no matter what your motivation to learn. With us you can choose a guided learning path based on your skill level or a path
                        </p>
                        <a href="#" class="language-card-link">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <!-- Card 2: English -->
            <div class="col-md-4 mb-4">
                <div class="language-card">
                    <a href="#"> <img src="{{ asset('assets/img/backgrounds/26.png') }}" alt="English Flag" class="language-flag">  </a>
                    <div class="language-card-body p-4">
                        <h3 class="language-card-title">English</h3>
                        <p class="language-card-text">
                        Lorem Ipsum Dolor Sit Emmett, Konsektorer Edificing Alit Goler Montferrer Sobert Lorem Shabetz Yehol, Lachnotz Be'arir Gek Litz, Mosen Manot. To be honest with you,
                        </p>
                        <a href="#" class="language-card-link">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <!-- Card 3: Russian -->
            <div class="col-md-4 mb-4">
                <div class="language-card">
                <a href="#"> <img src="{{ asset('assets/img/backgrounds/25.png') }}" alt="Russian Flag" class="language-flag">  </a>
                <div class="language-card-body p-4">
                        <h3 class="language-card-title">Russian</h3>
                        <p class="language-card-text">
                        Since the 1980s, the Russian language has become an integral part of everyday life without us even noticing it. More and more Russian-speaking shops and businesses are opening.
                        </p>
                        <a href="#" class="language-card-link">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- All Languages Button -->
        <div class="all-languages-button text-center py-4">
            <a href="#" class="btn btn-all-languages">
                <i class="fas fa-arrow-left me-2"></i> for all languages
            </a>
        </div>
    </div>
</section>