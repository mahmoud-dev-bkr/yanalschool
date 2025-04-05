<style>
    /* Branches Section */
.branches-section {
    background-color: #fff; /* White background */
}

/* Title */
.branches-title {
    font-size: 3rem;
    font-weight: 600;
    color: #333;
    text-transform: capitalize;
}

/* Image */
.branches-image {
    width: 100%;
    height: auto;
    border-radius: 10px; /* Rounded corners */
    object-fit: cover;
}

/* Branches List */
.branches-list {
    max-width: 600px; /* Limit the width for better alignment */
}

/* Branch Item */
.branch-item {
    background-color: #f8f9fa; /* Light gray background */
    border-left: 8px solid #f28c38; /* Orange left border to match your theme */
    padding: 15px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.branch-item:hover {
    background-color: #e9ecef; /* Slightly darker on hover */
}

/* Branch Name */
.branch-name {
    font-size: 1.2rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 0.5rem;
}

/* Branch Location */
.branch-location {
    font-size: 0.9rem;
    color: #666;
    margin: 0;
}

.branch-location i {
    color: #f28c38; /* Orange icon to match your theme */
}

/* Contact Us Button */
.btn-contact-us {
    background-color: #155799; /* Blue background */
    color: white;
    border: none;
    border-radius: 25px; /* Rounded corners */
    padding: 10px 30px;
    font-size: 1.2rem;
    font-weight: 500;
    text-transform: capitalize;
    display: inline-flex;
    align-items: center;
    transition: background-color 0.3s ease;
}

.btn-contact-us:hover {
    background-color: #3a7bc8; /* Darker blue on hover */
}

.btn-contact-us i {
    font-size: 0.9rem;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .branches-title {
        font-size: 1.8rem;
    }

    .branch-name {
        font-size: 1.1rem;
    }

    .branch-location {
        font-size: 0.85rem;
    }

    .btn-contact-us {
        font-size: 0.9rem;
        padding: 8px 25px;
    }

    .branches-list {
        max-width: 100%; /* Full width on smaller screens */
    }
}

@media (max-width: 576px) {
    .branches-title {
        font-size: 1.5rem;
    }

    .btn-contact-us {
        font-size: 0.85rem;
        padding: 6px 20px;
    }
}
</style>


<!-- Branches Section -->
<section class="branches-section py-5 ">
    <div class="container">
        <h2 class="branches-title text-center mb-5">Our branches</h2>
        <div class="row align-items-center">
            <!-- Left Side: Image -->
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="{{ asset('assets/img/backgrounds/17.jpg') }}" alt="Person with Globe" class="branches-image img-fluid">
            </div>
            <!-- Right Side: Branches List -->
            <div class="col-md-6">
                <div class="branches-list">
                    <!-- Branch 1 -->
                    <div class="branch-item d-flex justify-content-between align-items-center mb-3 wow bounceInRight">
                        <div class="branch-info">
                            <h4 class="branch-name">Umm Al Fahm</h4>
                            <p class="branch-location"><i class="fas fa-map-marker-alt me-2"></i>Umm Al Fahm</p>
                        </div>
                    </div>
                    <!-- Branch 2 -->
                    <div class="branch-item d-flex justify-content-between align-items-center mb-3 wow bounceInRight">
                        <div class="branch-info">
                            <h4 class="branch-name">Who opened them?</h4>
                            <p class="branch-location"><i class="fas fa-map-marker-alt me-2"></i>Shafram</p>
                        </div>
                    </div>
                    <!-- Branch 3 -->
                    <div class="branch-item d-flex justify-content-between align-items-center mb-4 wow bounceInRight">
                        <div class="branch-info">
                            <h4 class="branch-name">Haifa</h4>
                            <p class="branch-location"><i class="fas fa-map-marker-alt me-2"></i>Tower of the Prophets</p>
                        </div>
                    </div>
                    <!-- Contact Us Button -->
                    <div class="text-center fw-bold">
                        <a href="{{ route('front.contact') }}" class="btn btn-contact-us">
                            <i class="fas fa-arrow-left me-2"></i> Contact us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>