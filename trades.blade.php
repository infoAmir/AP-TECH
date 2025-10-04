@include('parts.header')
@include('parts.logo')
@include('parts.nav')

<section
    class="relative h-[300px] bg-cover bg-center flex flex-col justify-center items-center text-white">
    <div class="bg-[#0d6b61]/70 absolute inset-0"></div>
    <div class="relative z-10 text-center">
        <h1 class="text-4xl font-bold mb-3">Trades</h1>
        <p class="text-sm uppercase tracking-wide">
            <a href="#" class="hover:underline">Home</a> › Trades
        </p>
    </div>
</section>





<style>
    /* Custom styling for the green course count badge to match the image */
    .course-count {
        background-color: #38a169;
        /* A shade of green similar to the image */
        color: white;
        padding: 2px 10px;
        font-size: 0.75rem;
        border-radius: 50rem;
        /* Pill shape */
        display: inline-block;
        margin-top: 8px;
    }

    /* Styling to ensure all card images have the same height and cover the area */
    .card-img-top {
        height: 150px;
        /* Set a fixed height for the image area */
        object-fit: cover;
        /* Ensures the image covers the area without distortion */
    }

    /* Center the card content */
    .card-body {
        text-align: center;
    }
</style>
</head>

<body>

    <div class="container my-5">
        <div class="row g-4">
            <div style=" transition: transform 500ms ease-in-out, box-shadow 1000ms ease-in-out;
        cursor: pointer;" class="col-6 col-md-3 hover:scale-105 transition-transform-duration-2000">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="https://ptec.com.pk/images/trades/accounts-and-finance.JPG" class="card-img-top" alt="Accounts and Finance">
                    <div class="card-body d-flex flex-column justify-content-between align-items-center">
                        <h5 class="card-title fs-6 fw-normal mb-1">Accounts and Finance</h5>
                        <span class="course-count">35 courses</span>
                    </div>
                </div>
            </div>

            <div style=" transition: transform 500ms ease-in-out, box-shadow 1000ms ease-in-out;
        cursor: pointer;" class="col-6 col-md-3 hover:scale-105 transition-transform-duration-2000">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="https://ptec.com.pk/images/trades/banking.png" class="card-img-top" alt="Banking">
                    <div class="card-body d-flex flex-column justify-content-between align-items-center">
                        <h5 class="card-title fs-6 fw-normal mb-1">Banking</h5>
                        <span class="course-count">14 courses</span>
                    </div>
                </div>
            </div>

            <div style=" transition: transform 500ms ease-in-out, box-shadow 1000ms ease-in-out;
        cursor: pointer;" class="col-6 col-md-3 hover:scale-105 transition-transform-duration-2000">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="https://ptec.com.pk/images/trades/clinical-medical.jpg" class="card-img-top" alt="Clinical Medical">
                    <div class="card-body d-flex flex-column justify-content-between align-items-center">
                        <h5 class="card-title fs-6 fw-normal mb-1">Clinical Medical</h5>
                        <span class="course-count">27 courses</span>
                    </div>
                </div>
            </div>

            <div style=" transition: transform 500ms ease-in-out, box-shadow 1000ms ease-in-out;
        cursor: pointer;" class="col-6 col-md-3 hover:scale-105 transition-transform-duration-2000">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="https://ptec.com.pk/images/trades/conservation-enviornment.JPG" class="card-img-top" alt="Conservation Environment">
                    <div class="card-body d-flex flex-column justify-content-between align-items-center">
                        <h5 class="card-title fs-6 fw-normal mb-1">Conservation Environment</h5>
                        <span class="course-count">14 courses</span>
                    </div>
                </div>
            </div>

            <div style=" transition: transform 500ms ease-in-out, box-shadow 1000ms ease-in-out;
        cursor: pointer;" class="col-6 col-md-3 hover:scale-105 transition-transform-duration-2000">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="https://ptec.com.pk/images/trades/construction.JPG" class="card-img-top" alt="Construction">
                    <div class="card-body d-flex flex-column justify-content-between align-items-center">
                        <h5 class="card-title fs-6 fw-normal mb-1">Construction</h5>
                        <span class="course-count">21 courses</span>
                    </div>
                </div>
            </div>

            <div style=" transition: transform 500ms ease-in-out, box-shadow 1000ms ease-in-out;
        cursor: pointer;" class="col-6 col-md-3  hover:scale-105 transition-transform-duration-2000">
                <div class="card h-100 border-0 shadow-sm ">
                    <img src="https://ptec.com.pk/images/trades/education-diploma.JPG" class="card-img-top" alt="Education Diploma">
                    <div class="card-body d-flex flex-column justify-content-between align-items-center">
                        <h5 class="card-title fs-6 fw-normal mb-1">Education Diploma</h5>
                        <span class="course-count">13 courses</span>
                    </div>
                </div>
            </div>

            <div style="transition: transform 500ms ease-in-out, box-shadow 1000ms ease-in-out;
        cursor: pointer;" class="col-6 col-md-3 hover:scale-105 transition-transform-duration-2000">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="https://ptec.com.pk/images/trades/engineering.jpg" class="card-img-top" alt="Technical & Engineering">
                    <div class="card-body d-flex flex-column justify-content-between align-items-center">
                        <h5 class="card-title fs-6 fw-normal mb-1">Technical & Engineering</h5>
                        <span class="course-count">36 courses</span>
                    </div>
                </div>
            </div>

            <div style=" transition: transform 500ms ease-in-out, box-shadow 1000ms ease-in-out;
        cursor: pointer;" class="col-6 col-md-3 hover:scale-105 transition-transform-duration-2000">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="https://ptec.com.pk/images/trades/executive-courses.JPG" class="card-img-top" alt="Executive Courses">
                    <div class="card-body d-flex flex-column justify-content-between align-items-center">
                        <h5 class="card-title fs-6 fw-normal mb-1">Executive Courses</h5>
                        <span class="course-count">11 courses</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

@include('parts.input_img')
@include('parts.footer')