@extends('front.layouts.master')
@section('css')

<style>
/* About Section */
.about-section {
    width: 80%;
    margin: 0 auto;
    background-color: #fff; /* Default white background for the section */
}

/* Title Wrapper */
.about-title-wrapper {
    background-color: #f5f7fa; /* Light blue-gray background for the title only */
    padding: 80px 0; /* Add padding to give the background some space around the title */
}

/* Title */
.about-title {
    font-size: 2.5rem;
    font-weight: bold;
    color: #333;
    text-transform: capitalize;
    margin: 0; /* Remove default margin to control spacing via the wrapper */
}

.mb-10 {
    margin-bottom: 100px;
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

    .about-title {
        font-size: 1.8rem;
    }

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
    .about-title {
        font-size: 1.5rem;
    }

    .language-card-title {
        font-size: 1.2rem;
    }

    .language-flag {
        height: 100px;
    }

    .about-subtitle {
        font-size: 1.3rem;
    }

    .about-text {
        font-size: 0.85rem;
    }

    .btn-courses,
    .btn-contact {
        font-size: 0.85rem;
        padding: 6px 12px;
    }

    .about-title-wrapper {
        padding: 10px 0;
    }

    .vision-list li {
        font-size: 0.85rem;
        padding-left: 20px;
    }

    .vision-list li::before {
        width: 12px;
        height: 2px;
    }

    .advantage-title {
        font-size: 1rem;
    }

    .advantage-text {
        font-size: 0.85rem;
    }

    .advantage-icon {
        font-size: 1.3rem;
    }

    .advantage-card {
        padding: 10px;
    }
}
</style>

@endsection
@section('content')

<!-- Courses Section -->
<div class="about-title-wrapper text-center mb-5">
    <h2 class="title-section">{{ __('Our courses') }}</h2>
</div>
<section class="about-section">
    <div class="container">
        <!-- Language Cards Section -->
        <div class="row">
            <!-- Card 1: Hebrew -->
            <div class="col-md-4 mb-4">
                <div class="language-card">
                    <a href="#"><img src="{{ asset('assets/img/backgrounds/27.png') }}" alt="Hebrew Flag" class="language-flag"> </a>
                    <div class="language-card-body p-4">
                        <h3 class="language-card-title">Hebrew</h3>
                        <p class="language-card-text">
                            {{ Str::limit('Improve your Hebrew language skills, no matter what your motivation to learn. With us you can choose a guided learning path based on your skill level or a path', 150, '...') }}
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
                        {{ Str::limit("Lorem Ipsum Dolor Sit Emmett, Konsektorer Edificing Alit Goler Montferrer Sobert Lorem Shabetz Yehol, Lachnotz Be'arir Gek Litz, Mosen Manot. To be honest with you, ", 150, "...") }}
                        </p>
                        <a href="#" class="language-card-link">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <!-- Card 3: Russian -->
            <div class="col-md-4 mb-4">
                <div class="language-card">
                <a href="#"> <img src="{{ asset('assets/img/backgrounds/31.png') }}" alt="Russian Flag" class="language-flag">  </a>
                <div class="language-card-body p-4">
                        <h3 class="language-card-title">German</h3>
                        <p class="language-card-text">
                        {{ Str::limit("Since the 1980s, the Russian language has become an integral part of everyday life without us even noticing it. More and more Russian-speaking shops and businesses are opening.", 150, "...") }}
                        </p>
                        <a href="#" class="language-card-link">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <!-- Card 3: Russian -->
            <div class="col-md-4 mb-4">
                <div class="language-card">
                <a href="#"> <img src="{{ asset('assets/img/backgrounds/35.png') }}" alt="Russian Flag" class="language-flag">  </a>
                <div class="language-card-body p-4">
                        <h3 class="language-card-title">turkish</h3>
                        <p class="language-card-text">
                        {{ Str::limit("Since the 1980s, the Russian language has become an integral part of everyday life without us even noticing it. More and more Russian-speaking shops and businesses are opening.", 150, "...") }}
                        </p>
                        <a href="#" class="language-card-link">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <!-- Card 3: Russian -->
            <div class="col-md-4 mb-4">
                <div class="language-card">
                <a href="#"> <img src="{{ asset('assets/img/backgrounds/32.png') }}" alt="Russian Flag" class="language-flag">  </a>
                <div class="language-card-body p-4">
                        <h3 class="language-card-title">French</h3>
                        <p class="language-card-text">
                        {{ Str::limit("Since the 1980s, the Russian language has become an integral part of everyday life without us even noticing it. More and more Russian-speaking shops and businesses are opening.", 150, "...") }}
                        </p>
                        <a href="#" class="language-card-link">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <!-- Card 3: Russian -->
            <div class="col-md-4 mb-4">
                <div class="language-card">
                <a href="#"> <img src="{{ asset('assets/img/backgrounds/33.png') }}" alt="Russian Flag" class="language-flag">  </a>
                <div class="language-card-body p-4">
                        <h3 class="language-card-title">Italian</h3>
                        <p class="language-card-text">
                        {{ Str::limit("Since the 1980s, the Russian language has become an integral part of everyday life without us even noticing it. More and more Russian-speaking shops and businesses are opening.", 150, "...") }}
                        </p>
                        <a href="#" class="language-card-link">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <!-- Card 3: Russian -->
            <div class="col-md-4 mb-4">
                <div class="language-card">
                <a href="#"> <img src="{{ asset('assets/img/backgrounds/36.png') }}" alt="Russian Flag" class="language-flag">  </a>
                <div class="language-card-body p-4">
                        <h3 class="language-card-title">Korean</h3>
                        <p class="language-card-text">
                        {{ Str::limit("Since the 1980s, the Russian language has become an integral part of everyday life without us even noticing it. More and more Russian-speaking shops and businesses are opening.", 150, "...") }}
                        </p>
                        <a href="#" class="language-card-link">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <!-- Card 3: Russian -->
            <div class="col-md-4 mb-4">
                <div class="language-card">
                <a href="#"> <img src="{{ asset('assets/img/backgrounds/37.png') }}" alt="Russian Flag" class="language-flag">  </a>
                <div class="language-card-body p-4">
                        <h3 class="language-card-title">Japanese</h3>
                        <p class="language-card-text">
                        {{ Str::limit("Since the 1980s, the Russian language has become an integral part of everyday life without us even noticing it. More and more Russian-speaking shops and businesses are opening.", 150, "...") }}
                        </p>
                        <a href="#" class="language-card-link">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <!-- Card 3: Russian -->
            <div class="col-md-4 mb-4">
                <div class="language-card">
                <a href="#"> <img src="{{ asset('assets/img/backgrounds/30.png') }}" alt="Russian Flag" class="language-flag">  </a>
                <div class="language-card-body p-4">
                        <h3 class="language-card-title">Spanish</h3>
                        <p class="language-card-text">
                        {{ Str::limit("Since the 1980s, the Russian language has become an integral part of everyday life without us even noticing it. More and more Russian-speaking shops and businesses are opening.", 150, "...") }}
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
                        {{ Str::limit("Since the 1980s, the Russian language has become an integral part of everyday life without us even noticing it. More and more Russian-speaking shops and businesses are opening.", 150, "...") }}
                        </p>
                        <a href="#" class="language-card-link">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</section>

@endsection

@section('js')

@endsection