@extends('front.layouts.master')
@section('css')

<style>
/* Courses Section */
.courses-section {
    background-color: #fff; /* White background */
}

/* Course Flag */
.course-flag {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

/* Course Title */
.course-title {
    font-size: 6rem;
    font-weight: 900;
    color: #333;
    text-transform: capitalize;
    margin-bottom: 50px;
}

/* Course Text */
.course-text {
    font-size: 1rem;
    color: #666;
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

/* Course Subtitle */
.course-subtitle {
    font-size: 1.5rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 1rem;
}

/* Course List */
.course-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.course-list li {
    position: relative;
    padding-left: 30px; /* Space for the custom bullet */
    font-size: 1rem;
    color: #666;
    line-height: 1.6;
    margin-bottom: 0.5rem;
}

.course-list li::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 20px;
    height: 3px;
    background-color: #f28c38; /* Orange bullet */
}

/* Course Details Box */
.course-details-box {
    background-color: white; /* Light gray background */
    border: 2px solid #f28c38; /* Orange border */
    border-radius: 15px; /* Rounded corners */
    padding: 20px;
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
}

/* Course Detail Item */
.course-detail-item {
    font-size: 1rem;
    color: #333;
    margin-bottom: 0.5rem;
}

.course-detail-item strong {
    color: #333;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .course-title {
        font-size: 2rem;
    }

    .course-subtitle {
        font-size: 1.3rem;
    }

    .course-text {
        font-size: 0.9rem;
    }

    .course-list li {
        font-size: 0.9rem;
        padding-left: 25px;
    }

    .course-list li::before {
        width: 15px;
        height: 2px;
    }

    .course-detail-item {
        font-size: 0.9rem;
    }

    .course-flag {
        width: 50px;
        height: 35px;
    }
}

@media (max-width: 576px) {
    .course-title {
        font-size: 1.5rem;
    }

    .course-subtitle {
        font-size: 1.2rem;
    }

    .course-text {
        font-size: 0.85rem;
    }

    .course-list li {
        font-size: 0.85rem;
        padding-left: 20px;
    }

    .course-list li::before {
        width: 12px;
        height: 2px;
    }

    .course-detail-item {
        font-size: 0.85rem;
    }

    .course-flag {
        width: 40px;
        height: 25px;
    }
}

</style>

@endsection
@section('content')

<!-- Courses Section -->
<section class="courses-section py-5">
    <div class="container">
        <div class="row">
            <!-- Left Side: Flag and Text -->
            <div class="col-md-8">
                <div class="col-4 d-flex align-items-center mb-3">
                    <img src="{{ asset('assets/img/backgrounds/26.png') }}" alt="UK Flag" class="course-flag me-3">
                </div>
                <p class="course-text">
                    {{ __('Lorem ipsum Dolor Sit Emmet, Konsekterer Edifiscing Elit Goler Montferrer Sobert Lorem Shabetz Yehot, Lachnotz Berarir Gek Liz, Mosen Manot. To be honest, you are the one who is married to me. Colors Monfred Addendum Silkoff, exciting and moving, Amakhilikol Tsuflat for the Ivan If pharmacy, in Rometz, as a press release. Klaci Konsekterer Edifiscing Alit. Seth Almanocor misni non prophesed. Des iacollis volupta diam. Vestibulum et dolor, crass agate lactus val aggo and vestibulum solis tidum in Alik. Corus Condimentum in Lycra, Nunsty Clover in Recana Stum, Lafrikach Tzatrir Larti. Golar Montferrer Sobert Lorem that the dough will be run, to be crushed in the arre Gek Liz, and that the bagat their hearts will be solved. Bright and shrill shall be with flexible elements. Do you pray and take care of us, and you will understand the name – to your Morgan Borak? To tag isbes. Quasi in Mr. Modoff. Oedipus Blastic blasted clear, in Neft Neft Lampson Balerk – and Anaf for Promi Bluff Kintz, a gun for the Reach. Lat Tsashakhmi Tsash Balya, Mainusto Tsmelh to Biko Nanbi, Tsmuku in Lokaria Shitsma Boruk.') }}
                </p>
                <h3 class="course-subtitle mt-4">{{ __('So what do you learn in the course?') }}</h3>
                <ul class="course-list">
                    <li>{{ __('the alphabet') }}</li>
                    <li>{{ __('Score') }}</li>
                    <li>{{ __('Numbers') }}</li>
                    <li>{{ __('sentence assembly') }}</li>
                    <li>{{ __('Syntax rules') }}</li>
                    <li>{{ __('Understanding idioms and idioms') }}</li>
                </ul>
            </div>
            <!-- Right Side: Course Details -->
            <div class="col-md-4">
                <h2 class="course-title animate__animated  animate__backInRight">{{ __('English') }}</h2>
                <div class="course-details-box p-4">
                    <div class="row">
                        <div class="col-6">
                            <p class="course-detail-item"><strong>{{ __('Sunday, Wednesday, Friday') }}</strong></p>
                            <p class="course-detail-item"><strong>{{ __('ages') }}</strong></p>
                            <p class="course-detail-item"><strong>{{ __('group size') }}</strong></p>
                            <p class="course-detail-item"><strong>{{ __('course duration') }}</strong></p>
                        </div>
                        <div class="col-6 text-end">
                            <p class="course-detail-item"><strong>{{ __('15:00-17:00') }}</strong></p>
                            <p class="course-detail-item"><strong>{{ __('9-14 years') }}</strong></p>
                            <p class="course-detail-item"><strong>{{ __('20-30 kids') }}</strong></p>
                            <p class="course-detail-item"><strong>{{ __('25 hours') }}</strong></p>
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