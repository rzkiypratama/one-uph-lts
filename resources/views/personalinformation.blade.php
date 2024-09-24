<!DOCTYPE html>
<html lang="en">

<x-head title="Personal Information" />

<body class="container">
    <!-- header -->
    <img src="/assets/uph-logo.png" alt="logo" class="uphlogo pt-5 position-absolute">

    <div class="d-flex p-5 justify-content-center align-items-center min-vh-100 homepage-container">

        <div class="card card-container p-5">
            <div class="d-flex justify-content-between box-item">
                <div class="left-content form-information w-25">
                    <p class="text-uppercase">step 7 of 8</p>
                    <h3>Personal Information</h3>
                    <p class="children">We would like to know you more!</p>
                    <hr class="solid">
                </div>


                <div class="card card-box p-2 w-75 border-0 shadow-sm">
                    <div class="card-body">
                        <form id="personalInfoForm">
                            <div class="row">
                                <!-- First Name -->
                                <div class="col-md-4 mb-3">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="First Name"
                                        required>
                                </div>
                                <!-- Middle Name -->
                                <div class="col-md-4 mb-3">
                                    <label for="middleName" class="form-label">Middle Name</label>
                                    <input type="text" class="form-control" id="middleName" placeholder="Middle Name">
                                </div>
                                <!-- Last Name -->
                                <div class="col-md-4 mb-3">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="row">
                                <!-- Mobile Phone Number -->
                                <div class="col-md-4 mb-3">
                                    <label for="mobilePhone" class="form-label">Mobile Phone Number</label>
                                    <input type="text" class="form-control" id="mobilePhone"
                                        placeholder="Mobile Phone Number">
                                </div>
                                <!-- Guardian Name -->
                                <div class="col-md-4 mb-3">
                                    <label for="guardianName" class="form-label">Guardian Name</label>
                                    <input type="text" class="form-control" id="guardianName"
                                        placeholder="Guardian Name">
                                </div>
                                <!-- Guardian Mobile Phone Number -->
                                <div class="col-md-4 mb-3">
                                    <label for="guardianPhone" class="form-label">Guardian Mobile Phone Number</label>
                                    <input type="text" class="form-control" id="guardianPhone"
                                        placeholder="Guardian Mobile Phone">
                                </div>
                            </div>
                            <div class="row">
                                <!-- Date of Birth -->
                                <div class="col-md-4 mb-3">
                                    <label for="dob" class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control" id="dob">
                                </div>
                                <!-- School Name -->
                                <div class="col-md-6 mb-3">
                                    <label for="schoolName" class="form-label">School Name</label>
                                    <input type="text" class="form-control" id="schoolName" placeholder="School Name">
                                </div>
                                <!-- Grade -->
                                <div class="col-md-2 mb-3">
                                    <label for="grade" class="form-label">Grade</label>
                                    <select id="grade" class="form-select">
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Email Address -->
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label form-label-pwd">Email Address</label>
                                    <p class="form-input-subtitle">This email will be used for your username</p>
                                    <input type="email" class="form-control" id="email" placeholder="Email Address">
                                </div>
                                <!-- Password -->
                                <div class="col-md-3 mb-3">
                                    <label for="password" class="form-label form-label-pwd">Password</label>
                                    <p class="form-input-subtitle">minimum 8 characters</p>
                                    <input type="password" class="form-control" id="password" placeholder="Password">
                                </div>
                                <!-- Repeat Password -->
                                <div class="col-md-3 mb-3">
                                    <label for="repeatPassword" class="form-label form-label-pwd">Repeat
                                        Password</label>
                                    <p class="form-input-subtitle">minimum 8 characters</p>
                                    <input type="password" class="form-control" id="repeatPassword"
                                        placeholder="Repeat Password">
                                </div>
                            </div>
                            <!-- Submit Button -->
                            <div class="float-end my-2">
                                <button type="submit" class="btn select-program-btn rounded-2 px-5">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <span class="d-flex gap-2 align-items-md-center cursor-pointer pt-4" role="button" id="backToAdmission">
                <img src="/assets/left-arrow.png" alt="arrow-back">
                <p class="back-button p-0">back to Admission Type</p>
            </span>
        </div>

    </div>

    <script>
        document.getElementById('personalInfoForm').addEventListener('submit', function (event) {
            event.preventDefault();  // Prevent the default form submission behavior

            const password = document.getElementById('password').value;
            const repeatPassword = document.getElementById('repeatPassword').value;

            if (password !== repeatPassword) {
                alert('Passwords do not match!'); 
                return;
            }

            // Collect form data
            const formData = {
                firstName: document.getElementById('firstName').value,
                middleName: document.getElementById('middleName').value,
                lastName: document.getElementById('lastName').value,
                mobilePhone: document.getElementById('mobilePhone').value,
                guardianName: document.getElementById('guardianName').value,
                guardianPhone: document.getElementById('guardianPhone').value,
                dob: document.getElementById('dob').value,
                schoolName: document.getElementById('schoolName').value,
                grade: document.getElementById('grade').value,
                email: document.getElementById('email').value,
                password: document.getElementById('password').value,
            };

            // Store form data in localStorage
            localStorage.setItem('personalInfo', JSON.stringify(formData));

            // Redirect to the /review page
            window.location.href = '/review';
        });
    </script>

    <script>
        document.getElementById('backToAdmission').addEventListener('click', function (event) {
            event.preventDefault();
            window.location.href = '/program';
        })
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>