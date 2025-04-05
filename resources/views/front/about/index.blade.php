@extends('front.layouts.master')
@section('css')

<style>
/* About Section */
.about-section {
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

/* Subtitle */
.about-subtitle {
    font-size: 2.5rem;
    font-weight: bold;
    color: #333;
}

/* Text */
.about-text {
    font-size: 1.2rem;
    color: #666;
    line-height: 1.4;
    margin-bottom: 1.5rem;
}

/* Button */
.btn-courses {
    background-color: #235280; /* Blue background */
    color: white;
    border: 2px solid #235280;
    border-radius: 10px; /* Rounded corners */
    padding: 10px 20px;
    font-size: 1.2rem;
    font-weight: 500;
    text-transform: capitalize;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.btn-courses:hover {
    background-color: white; /* White background on hover */
    color: #235280; /* Blue text on hover */
}

/* Image */
.about-image {
    width: 100%;
    height: auto;
    border-radius: 15px; /* Rounded corners */
    object-fit: cover;
}

/* Vision List */
.vision-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.vision-list li {
    position: relative;
    padding-left: 30px; /* Space for the custom bullet */
    font-size: 1.2rem;
    color: #666;
    line-height: 1.4;
    margin-bottom: 0.5rem;
}

.vision-list li::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 20px;
    height: 3px;
    background-color: #235280; /* Default blue for the first item */
}

.vision-list li:nth-child(2)::before {
    background-color: #f28c38; /* Orange for the second item */
}

.vision-list li:nth-child(3)::before {
    background-color: #235280; /* Blue for the third item */
}

/* Advantages Cards */
.advantage-card {
    background-color: #f8f9fa; /* Light gray background */
    border-radius: 15px; /* Rounded corners */
    padding: 20px;
    transition: box-shadow 0.3s ease;
}

.advantage-card:hover {
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1); /* Subtle shadow on hover */
}



/* Advantage Icon */
.advantage-icon {
    width: 60px; /* Adjust size to match the image */
    height: 60px;
    object-fit: contain; /* Ensure the image fits without distortion */
    margin-left: 1rem;
}

/* Advantage Title */
.advantage-title {
    font-size: 1.3rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 0.5rem;
}

/* Advantage Text */
.advantage-text {
    font-size: 1rem;
    color: #666;
    line-height: 1.4;
    margin: 0;
}

/* Contact Button */
.btn-contact {
    background-color: #235280; /* Blue background */
    color: white;
    border: 2px solid #235280;
    border-radius: 10px; /* Rounded corners */
    padding: 10px 20px;
    font-size: 1.2rem;
    font-weight: 500;
    text-transform: capitalize;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.btn-contact:hover {
    background-color: white; /* White background on hover */
    color: #235280; /* Blue text on hover */
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .about-title {
        font-size: 1.8rem;
    }

    .about-subtitle {
        font-size: 1.5rem;
    }

    .about-text {
        font-size: 0.9rem;
    }

    .btn-courses,
    .btn-contact {
        font-size: 0.9rem;
        padding: 8px 16px;
    }

    .about-title-wrapper {
        padding: 15px 0;
    }

    .vision-list li {
        font-size: 0.9rem;
        padding-left: 25px;
    }

    .vision-list li::before {
        width: 15px;
        height: 2px;
    }

    .advantage-title {
        font-size: 1.1rem;
    }

    .advantage-text {
        font-size: 0.9rem;
    }

    .advantage-icon {
        font-size: 1.5rem;
    }

    .advantage-card {
        padding: 15px;
    }
}

@media (max-width: 576px) {
    .about-title {
        font-size: 1.5rem;
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

<!-- About Section -->
<section class="about-section">
    <div class="about-title-wrapper text-center mb-5">
        <h2 class="title-section">{{ __('About the Yanel Institute') }}</h2>
    </div>
    <div class="container">
        <!-- Welcome Section -->
        <div class="row align-items-center mb-10">
            <!-- Left Side: Text and Button -->
            <div class="col-md-6 mb-4 mb-md-0">
                <h3 class="about-subtitle mb-3">{{ __('Welcome to the YANEL Institute') }}</h3>
                <p class="about-text">
                    {{ __('Morbi vel augue et metus pellentesque lacinia eu non odio. Sed id purus urna. Maecenas ultricies ligula a nisi dictum tristique. Suspendisse potenti. Curabitur egestas ultricies sem, eu vestibulum leo sagittis et') }}
                </p>
                <div class="text-center">
                    <a href="#" class="btn btn-courses">{{ __('To the list of courses') }}</a>
                </div>
            </div>
            <!-- Right Side: Image -->
            <div class="col-md-6">
                <img src="{{ asset('assets/img/backgrounds/28.jpg') }}" alt="YANEL Institute" class="about-image img-fluid">
            </div>
        </div>
        <!-- Vision Section -->
        <div class="row align-items-center mb-10">
            <!-- Left Side: Image -->
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="{{ asset('assets/img/backgrounds/29.jpg') }}" alt="Our Vision" class="about-image img-fluid">
            </div>
            <!-- Right Side: Text -->
            <div class="col-md-6">
                <h3 class="about-subtitle mb-3">{{ __('Our vision') }}</h3>
                <p class="about-text">
                    {{ __('Praesent rhoncus justo erat, sed sollicitudin arcu malesuada vel. Etiam scelerisque justo ut purus luctus ullamcorper. Vivamus vitae elit ligula. Fusce eu rutrum nisl') }}
                </p>
                <ul class="vision-list">
                    <li>{{ __('Etiam ante nisl, maximus vitae sem non, dignissim') }}</li>
                    <li>{{ __('Donec blandit, sapien eu porttitor blandit') }}</li>
                    <li>{{ __('Sed ut urna at massa viverra feugiat non') }}</li>
                </ul>
            </div>
        </div>
        <!-- Advantages Section -->
        <div class="row mb-10">
            <div class="col-md-6 mb-4">
                <h3 class="about-subtitle mb-3">{{ __('Advantages of the Institute') }}</h3>
                <p class="about-text">
                    {{ __('Praesent rhoncus justo erat, sed sollicitudin arcu malesuada vel. Etiam scelerisque justo ut purus luctus ullamcorper. Vivamus vitae elit ligula. Fusce eu rutrum nisl. Vestibulum ut sagittis neque') }}
                </p>
                <div class="text-center">
                <a href="#" class="btn btn-contact">{{ __('Contact us') }}</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <!-- Card 1: Awesome Teachers -->
                    <div class="col-md-6 mb-4">
                        <div class="advantage-card text-start p-3">
                        <img src="{{ asset('assets/img/backgrounds/22.png') }}" alt="Suitable for All Ages" class="benefit-image mb-3">
                            <h4 class="advantage-title">{{ __('Awesome Teachers') }}</h4>
                            <p class="advantage-text">{{ __('Vivamus intequis rudum, mauris quis cursus sodales les') }}</p>
                        </div>
                    </div>
                    <!-- Card 2: Global Certificate -->
                    <div class="col-md-6 mb-4">
                        <div class="advantage-card text-start p-3">
                        <img src="{{ asset('assets/img/backgrounds/16.png') }}" alt="Suitable for All Ages" class="benefit-image mb-3">
                            <h4 class="advantage-title">{{ __('Awesome Teachers') }}</h4>
                            <p class="advantage-text">{{ __('Vivamus intequis rudum, mauris quis cursus sodales les') }}</p>
                        </div>
                    </div>
                    <!-- Card 3: Student Support Service -->
                    <div class="col-md-6 mb-4">
                        <div class="advantage-card text-start p-3">
                        <img src="{{ asset('assets/img/backgrounds/23.png') }}" alt="Suitable for All Ages" class="benefit-image mb-3">
                            <h4 class="advantage-title">{{ __('Awesome Teachers') }}</h4>
                            <p class="advantage-text">{{ __('Vivamus intequis rudum, mauris quis cursus sodales les') }}</p>
                        </div>
                    </div>
                    <!-- Card 4: Best Program -->
                    <div class="col-md-6 mb-4">
                        <div class="advantage-card text-start p-3">
                        <img src="{{ asset('assets/img/backgrounds/14.png') }}" alt="Suitable for All Ages" class="benefit-image mb-3">
                            <h4 class="advantage-title">{{ __('Awesome Teachers') }}</h4>
                            <p class="advantage-text">{{ __('Vivamus intequis rudum, mauris quis cursus sodales les') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('js')

@endsection