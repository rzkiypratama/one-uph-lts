<!DOCTYPE html>
<html lang="en">

<x-head title="Education Informations">
    <x-slot name="inlineCSS">
    <style>
        .card-body {
            height: 418px;
            padding-left: 2rem;
            padding-right: 2rem;
        }

        .card-header .tabs-header {
            padding-left: 2rem;
            padding-right: 2rem;
        }
    </style>
    </x-slot>
</x-head>

<body class="container mt-3">
    <div class="d-flex justify-content-between align-items-center pt-3 mb-5">
        <img src="/assets/uph-logo.png" alt="logo" class="uphlogo">
        <div class="d-flex gap-3 align-items-center">
            <span class="logout-button d-flex align-items-center gap-2">
                <p class="m-0">dashboard</p>
                <!-- <img src="/assets/signout-icon.png" alt="signout icon" class="logout-icon"> -->
            </span>
            <img src="/assets/bells.png" alt="notification icon" class="notification-icon">
        </div>
    </div>

    <div class="p-5 rounded-3 card-main-bg">
        <!-- steps -->
        <div class="d-flex gap-2 mb-4">
            <div>
                <div class="d-flex gap-2 mb-3">
                    <p class="m-0 step-title">01</p>
                    <p class="m-0 step-subtitle w-25">Education Background</p>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <img src="/assets/circle-done.png" alt="step" class="step-icon">
                    <hr class="done-step">
                </div>
            </div>

            <div>
                <div class="d-flex gap-2 mb-3">
                    <p class="m-0 step-title">02</p>
                    <p class="m-0 step-subtitle w-25">Personal Information</p>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <img src="/assets/circle-done.png" alt="step" class="step-icon">
                    <hr class="done-step">
                </div>
            </div>

            <div>
                <div class="d-flex gap-2 mb-3">
                    <p class="m-0 step-title">03</p>
                    <p class="m-0 step-subtitle w-25">Family Background</p>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <img src="/assets/circle-done.png" alt="step" class="step-icon">
                    <hr class="done-step">
                </div>
            </div>

            <div>
                <div class="d-flex gap-2 mb-3">
                    <p class="m-0 step-title">04</p>
                    <p class="m-0 step-subtitle w-25">Education Information</p>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <img src="/assets/circle-bold.png" alt="step" class="step-icon">
                    <hr class="dashed-step">
                </div>
            </div>

            <div>
                <div class="d-flex gap-2 mb-3">
                    <p class="m-0 step-title">05</p>
                    <p class="m-0 step-subtitle w-25">Entry Option</p>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <img src="/assets/circle-normal.png" alt="step" class="step-icon">
                    <hr class="solid-step">
                </div>
            </div>

            <div>
                <div class="d-flex gap-2 mb-3">
                    <p class="m-0 step-title">06</p>
                    <p class="m-0 step-subtitle w-50">Review & Payment</p>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <img src="/assets/circle-normal.png" alt="step" class="step-icon">
                    <!-- <hr class="solid-step"> -->
                </div>
            </div>

        </div>

        <!-- Tabs & Form -->
        <div class="card border-0 shadow-sm">
            <div class="card-header tabs-header">
                <ul class="nav nav-pills card-header-tabs" id="myTab" role="tablist">
                    <!-- Tab 1 -->
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1"
                            type="button" role="tab" aria-controls="tab1" aria-selected="true">
                            <div class="d-flex">
                                <img src="/assets/educational-icon.png" alt="icon1" class="tab-icon">
                                <span class="d-flex flex-column text-start">
                                    <p class="m-0 tabs-title text-capitalize">Education Information</p>
                                    <p class="m-0 tabs-subtitle">your education information</p>
                                </span>
                            </div>
                        </button>
                    </li>
                </ul>
            </div>

            <div class="card-body">
                <!-- Form Start -->
                <form id="myForm" class="d-flex flex-column justify-content-between h-100">
                    <div class="tab-content" id="myTabContent">
                        <!-- Tab Content 2 -->
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                            <div class="row">
                                <div class="row col-md-12 mb-4">
                                    <!-- School Name -->
                                    <div class="col-md-4 mb-3">
                                        <label for="schoolName" class="form-label">Highschool</label>
                                        <input type="text" class="form-control" id="schoolName" placeholder="Your high school name"
                                            required>
                                    </div>
                                    <!-- School City -->
                                    <div class="col-md-4 mb-3">
                                        <label for="schoolCity" class="form-label">City</label>
                                        <input type="text" class="form-control" id="schoolCity"
                                            placeholder="Where your school are located?">
                                    </div>
                                </div>

                                <div class="row col-md-12">
                                    <div class="col-md-4">
                                        <label for="graduationStatus" class="form-label">Graduation Status</label>
                                        <select id="graduationStatus" class="form-select">
                                            <option value="option1">option1</option>
                                            <option value="option2">option2</option>
                                            <option value="option3">option3</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                    <!-- graduation year -->
                                    <div class="col-md-4 mb-3">
                                        <label for="guardianEmail" class="form-label">Graduation Year</label>
                                        <input type="text" class="form-control" id="graduationYear"
                                            placeholder="What is your graduation year?">
                                    </div>
                                    <!-- Final Ceritificate -->
                                    <div class="col-md-4 mb-3">
                                        <label for="finalCertificate" class="form-label">Final Ceritificate</label>
                                        <input type="text" class="form-control" id="finalCertificate"
                                            placeholder="Your Final Certificate ">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-content-center mb-4">
                        <button type="button" class="btn btn-outline-danger mt-5 float-end rounded-0 px-5" onclick="window.location.href = '/dashboard/familybackground.html'"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chevron-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"
                                    stroke="#FF5351" />
                            </svg> Back</button>
                        <!-- Submit Button -->
                        <button type="submit"
                            class="btn btn-danger mt-5 float-end rounded-0 px-5 danger-button">Save
                            Data & Continue <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"
                                    fill="#FFF" />
                            </svg></button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
       document.getElementById('myForm').addEventListener('submit', function (event) {
        event.preventDefault();

        // Redirect to the next page
        window.location.href = '/dashboard/entryoption';
        });
    </script>
</body>

</html>