    @include('parts.header')
    @include('parts.logo')
    @include('parts.nav')
    <section
        class="relative h-[300px] bg-cover bg-center flex flex-col justify-center items-center text-white">
        <div class="bg-[#0d6b61]/70 absolute inset-0"></div>
        <div class="relative z-10 text-center">
            <h1 class="text-4xl font-bold mb-3">Apply Online</h1>
            <p class="text-sm uppercase tracking-wide">
                <a href="#" class="hover:underline">Home</a> › Contact
            </p>
        </div>
    </section>

    <div class="container my-5">
        <form>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="dob" class="form-label">Name <span class="required-star">*</span></label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="dob" required>
                        <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="cnic" class="form-label">Father Name <span class="required-star">*</span></label>
                    <input type="text" class="form-control" id="" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="dob" class="form-label">Date Of Birth <span class="required-star">*</span></label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="dob" placeholder="mm/dd/yyyy" required>
                        <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="cnic" class="form-label">CNIC <span class="required-star">*</span></label>
                    <input type="text" class="form-control" id="cnic" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="cellNo" class="form-label">Cell No. <span class="required-star">*</span></label>
                    <input type="tel" class="form-control" id="cellNo" required>
                </div>
                <div class="col-md-6">
                    <label for="qualification" class="form-label">Academic Qualification <span class="required-star">*</span></label>
                    <select class="form-select" id="qualification" required>
                        <option selected disabled>--Select Here--</option>
                        <option value="matric">Matriculation</option>
                        <option value="inter">Intermediate</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="experience" class="form-label">Years Of Experience <span class="required-star">*</span></label>
                    <input type="number" class="form-control" id="experience" required>
                </div>
                <div class="col-md-6">
                    <label for="tradeCourse" class="form-label">Trade Course <span class="required-star">*</span></label>
                    <input type="text" class="form-control" id="tradeCourse" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="courseSession" class="form-label">Course Session <span class="required-star">*</span></label>
                    <input type="text" class="form-control" id="courseSession" required>
                </div>
                <div class="col-md-6">
                    <label for="courseDuration" class="form-label">Course Duration <span class="required-star">*</span></label>
                    <select class="form-select" id="courseDuration" required>
                        <option selected disabled>--Select Duration--</option>
                        <option value="3m">3 Months</option>
                        <option value="6m">6 Months</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="modeOfStudy" class="form-label">Mode Of Study <span class="required-star">*</span></label>
                    <select class="form-select" id="modeOfStudy" required>
                        <option selected disabled>--Select Study Mode--</option>
                        <option value="full">Full-Time</option>
                        <option value="part">Part-Time</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="address" class="form-label">Address <span class="required-star">*</span></label>
                    <input type="text" class="form-control" id="address" required>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-6">
                    <label for="city" class="form-label">City <span class="required-star">*</span></label>
                    <input type="text" class="form-control" id="city" required>
                </div>
                <div class="col-md-6">
                    <label for="nationality" class="form-label">Nationality <span class="required-star">*</span></label>
                    <input type="text" class="form-control" id="nationality" required>
                </div>
            </div>

            <button type="submit" class="btn text-white" style="background-color: #1a744e;">
                Submit
            </button>
        </form>
    </div>

    @include('parts.input_img')
    @include('parts.footer')

    