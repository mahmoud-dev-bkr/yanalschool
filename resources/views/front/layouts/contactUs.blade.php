<style>
    /* Join Us Section */
.join-us-section {
    background-color: #f5f8fa; /* Light background for the section */
}

/* Form Container */
.join-us-form {
    background: linear-gradient(135deg, #91BEEA 0%, #135570 100%);
    border-radius: 20px; /* Rounded corners */
    position: relative;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    max-width: 950px; /* Limit the width of the form */
}

/* Background Circle Pattern */
.join-us-form::before {
    content: '';
    position: absolute;
    top: -50px;
    left: -50px;
    width: 150px;
    height: 150px;
    background: rgba(255, 255, 255, 0.1); /* Semi-transparent white circle */
    border-radius: 50%;
}

.join-us-form::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 80px;
    height: 80px;
    background: rgba(255, 255, 255, 0.2); /* Smaller semi-transparent circle */
    border-radius: 50%;
}

/* Title and Subtitle */
.join-us-title {
    font-size: 2rem;
    font-weight: bold;
    color: white;
    margin-bottom: 10px;
}

.join-us-subtitle {
    font-size: 1rem;
    color: rgba(255, 255, 255, 0.8); /* Slightly transparent white */
}

/* Form Inputs */
.join-us-form .form-control,
.join-us-form .form-select {
    border-radius: 10px;
    border: none;
    padding: 10px 15px;
    font-size: 0.9rem;
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.join-us-form .form-control::placeholder {
    color: #aaa;
}

/* Send Button */
.btn-send {
    background-color: #fff;
    color: #4a90e2; /* Match the blue theme */
    border: none;
    border-radius: 10px;
    padding: 10px 30px;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.btn-send:hover {
    background-color: #f0f0f0;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .join-us-title {
        font-size: 1.5rem;
    }

    .join-us-subtitle {
        font-size: 0.9rem;
    }

    .join-us-form {
        padding: 2rem;
    }
}
</style>
<!-- Join Us Section -->
<section class="join-us-section py-5">
    <div class="container ">
        <div class="join-us-form mx-auto p-4 p-md-5">
            <div class="row align-items-center">
                <!-- Left Side: Text -->
                <div class="col-md-6 text-center text-md-start mb-4 mb-md-0">
                    <h2 class="join-us-title">Join us today</h2>
                    <p class="join-us-subtitle">Come learn the language you've always wanted at the highest level</p>
                </div>
                <!-- Right Side: Form -->
                <div class="col-md-6">
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control fs-6" placeholder="name:">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control fs-6" placeholder="Email:">
                            </div>
                        </div>
                        <div class="mb-3">
                            <select class="form-select fs-6">
                                <option selected disabled>Where do you like to study?</option>
                                <option value="1">Shafram</option>
                                <option value="2">Umm Al Fahm</option>
                                <option value="3">Haifa</option>
                                <option value="3">Zoom</option>
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-send fs-5">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>