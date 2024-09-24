<!DOCTYPE html>
<html lang="en">

<x-head title="Entry Options">
    <x-slot name="inlineCSS">
    <style>
        .modal-body {
            max-height: 350px;
            overflow-y: auto;
        }

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
                    <p class="m-0 step-subtitle w-25">Intake Year</p>
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
                    <img src="/assets/circle-done.png" alt="step" class="step-icon">
                    <hr class="dashed-step">
                </div>
            </div>

            <div>
                <div class="d-flex gap-2 mb-3">
                    <p class="m-0 step-title">05</p>
                    <p class="m-0 step-subtitle w-25">Entry Option</p>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <img src="/assets/circle-bold.png" alt="step" class="step-icon">
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
                                <img src="/assets/entry-icon.png" alt="icon1" class="tab-icon">
                                <span class="d-flex flex-column text-start">
                                    <p class="m-0 tabs-title text-capitalize">Entry Option</p>
                                    <p class="m-0 tabs-subtitle">your entry information</p>
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
                                    <!-- Entry Type -->
                                    <div class="col-md-4">
                                        <label for="entryType" class="form-label">Entry Type</label>
                                        <select id="entryType" class="form-select">
                                            <option value="option1">option1</option>
                                            <option value="option2">option2</option>
                                            <option value="option3">option3</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                    <!-- College -->
                                    <div class="col-md-4">
                                        <label for="collegeType" class="form-label">College</label>
                                        <select id="collegeType" class="form-select">
                                            <option value="option1">option1</option>
                                            <option value="option2">option2</option>
                                            <option value="option3">option3</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="facultyType" class="form-label">Faculty</label>
                                        <select id="facultyType" class="form-select">
                                            <option value="option1">option1</option>
                                            <option value="option2">option2</option>
                                            <option value="option3">option3</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row col-md-12">
                                    <div class="col-md-4">
                                        <label for="programType" class="form-label">Program</label>
                                        <select id="programType" class="form-select">
                                            <option value="option1">option1</option>
                                            <option value="option2">option2</option>
                                            <option value="option3">option3</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                    <!-- class session -->
                                    <div class="col-md-4">
                                        <label for="classSession" class="form-label">Class Session</label>
                                        <select id="classSession" class="form-select">
                                            <option value="option1">option1</option>
                                            <option value="option2">option2</option>
                                            <option value="option3">option3</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                    <!-- class type -->
                                    <div class="col-md-4">
                                        <label for="classType" class="form-label">Class Type</label>
                                        <select id="classType" class="form-select">
                                            <option value="option1">option1</option>
                                            <option value="option2">option2</option>
                                            <option value="option3">option3</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <label class="form-label">Entry Option</label>
                                        <div class="radio-btn-group d-flex gap-1">
                                            <input type="radio" id="regular" name="entryOptions" value="regular"
                                                checked>
                                            <label for="regular">Regular</label>

                                            <input type="radio" id="schoolarshipRadio" name="entryOptions"
                                                value="schoolarship">
                                            <label for="schoolarshipRadio">Schoolarship</label>
                                        </div>
                                    </div>

                                    <!-- Schoolarship Input -->
                                    <div class="col-md-4 mt-4" id="schoolarshipInput" style="display: none;">
                                        <label for="schoolarshipType" class="form-label">Schoolarship Type</label>
                                        <select id="schoolarshipType" class="form-select">
                                            <option value="option1">option1</option>
                                            <option value="option2">option2</option>
                                            <option value="option3">option3</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-content-center mb-4">
                        <button type="button" class="btn btn-outline-danger mt-5 float-end rounded-0 px-5" onclick="window.location.href = '/dashboard/educationbackground'"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chevron-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"
                                    stroke="#FF5351" />
                            </svg> Back</button>
                        <!-- Submit Button -->
                        <button type="button"
                            class="btn btn-danger mt-5 float-end rounded-0 px-5 danger-button"
                            data-bs-toggle="modal" data-bs-target="#admissionModal">Save
                            Data & Continue <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"
                                    fill="#FFF" />
                            </svg></button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="admissionModal" tabindex="-1" aria-labelledby="admissionModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">

                                <!-- Custom close button (top left) -->
                                <img src="/assets/close.webp" class="custom-close" data-bs-dismiss="modal"
                                    aria-label="Close"></img>

                                <!-- Modal Header -->
                                <div class="modal-header d-flex">
                                    <img src="/assets/uph-logo.png" style="width: 148px;" alt="Logo" class="img-fluid">
                                    <div>
                                        <h3 class="modal-entry-title">Admission Statement</h3>
                                        <p class="m-0 float-end review-modal-subtitle">Academic Year 2004/2005</p>
                                    </div>
                                </div>

                                <!-- Modal Body -->
                                <div class="modal-body">
                                    <p class="first-modal-p">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                                        incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi ut aliquip ex
                                        ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                        esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt
                                        mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco
                                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                        reprehenderit in voluptate velit
                                        esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                        non proident, sunt in culpa
                                        qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </div>

                                <!-- Modal Footer -->
                                <div class="modal-footer">
                                    <div class="d-flex flex-column text-center align-items-center gap-3 w-100">
                                        <div>
                                            <input type="checkbox" id="agreeCheckbox"> <label for="agreeCheckbox"
                                                class="tabs-subtitle">I agree with this admission
                                                statement</label>
                                        </div>
                                        <button type="button" class="btn btn-primary px-5 rounded-0"
                                            data-bs-target="#confirmationModal" data-bs-toggle="modal"
                                            id="submitFirstModal" disabled>Submit</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Modal 2 -->
                    <div class="modal fade" id="confirmationModal" tabindex="-1"
                        aria-labelledby="confirmationModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <!-- Modal Body -->
                                <div class="modal-body">
                                    <div
                                        class="text-center d-flex flex-column justify-content-center align-content-center align-items-center">
                                        <img src="/assets/admission-icon.png" alt="admission icon"
                                            class="admisison-icon mb-3">
                                        <p class="m-0 review-modal-title testing">Admission Statement Confirmation</p>
                                        <p class="m-0 review-modal-subtitle">I hereby declare that I have read and
                                            understood the Admission Statement, UPH
                                            Application, and admission requirements in their entirety. I fully agree to
                                            comply with and adhere to every rule applicable at UPH. I am willing to
                                            accept
                                            the sanctions imposed in case of any violation.</p>
                                    </div>
                                    <hr class="solid-modal">
                                    <div class="row px-3">
                                        <span class="col-md-6 payment-title">
                                            Name
                                        </span>
                                        <span class="col-md-6 payment-subtitle">
                                            Kevin Saputra Siahaan
                                        </span>

                                        <span class="col-md-6 payment-title">
                                            NIK/ID Number
                                        </span>
                                        <span class="col-md-6 payment-subtitle">
                                            3656565656565
                                        </span>

                                        <span class="col-md-6 payment-title">
                                            Parents Name
                                        </span>
                                        <span class="col-md-6 payment-subtitle">
                                            Bagus Siahaan & Irene Siahaan
                                        </span>
                                    </div>
                                </div>

                                <!-- Modal Footer -->
                                <div class="modal-footer d-flex justify-content-between w-100">
                                    <button type="button" class="btn btn-outline-danger rounded-0 mx-4 w-25"
                                        data-bs-dismiss="modal">No</button>
                                    <button type="button" class="btn btn-danger rounded-0 mx-4 w-25"
                                        id="submitBtn">Yes!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="{{asset('js/entryoption.js') }}"></script>
</body>

</html>