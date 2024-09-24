<!DOCTYPE html>
<html lang="en">

<x-head title="Review & Payment">
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
                    <hr class="done-step">
                </div>
            </div>

            <div>
                <div class="d-flex gap-2 mb-3">
                    <p class="m-0 step-title">05</p>
                    <p class="m-0 step-subtitle w-25">Entry Option</p>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <img src="/assets/circle-done.png" alt="step" class="step-icon">
                    <hr class="dashed-step">
                </div>
            </div>

            <div>
                <div class="d-flex gap-2 mb-3">
                    <p class="m-0 step-title">06</p>
                    <p class="m-0 step-subtitle w-50">Review & Payment</p>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <img src="/assets/circle-bold.png" alt="step" class="step-icon">
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
                                <img src="/assets/booked-icon.png" alt="icon1" class="tab-icon">
                                <span class="d-flex flex-column text-start">
                                    <p class="m-0 tabs-title text-capitalize">Review & Application</p>
                                    <p class="m-0 tabs-subtitle">review your application</p>
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
                        <!-- Tab Content 1 -->
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                            <div class="row address-container">
                                <div class="col-md-5 address-column">
                                    <h3 class="row-title">Review your Application</h3>

                                    <hr class="full-width my-3">

                                    <div class="d-flex justify-content-between text-capitalize mb-2">
                                        <p class="m-0 payment-title">program</p>
                                        <p class="m-0 payment-subtitle ">Architecture</p>
                                    </div>

                                    <div class="d-flex justify-content-between text-capitalize mb-2">
                                        <p class="m-0 payment-title">study level</p>
                                        <p class="m-0 payment-subtitle ">undergraduate (S1)</p>
                                    </div>

                                    <div class="d-flex justify-content-between text-capitalize mb-2">
                                        <p class="m-0 payment-title">campus</p>
                                        <p class="m-0 payment-subtitle ">lippo village campus</p>
                                    </div>

                                    <div class="d-flex justify-content-between text-capitalize mb-2">
                                        <p class="m-0 payment-title">intake year</p>
                                        <p class="m-0 payment-subtitle ">Odd Semester 2024/2025</p>
                                    </div>

                                    <div class="d-flex justify-content-between text-capitalize mb-2">
                                        <p class="m-0 payment-title">Class Session</p>
                                        <p class="m-0 payment-subtitle ">Morning</p>
                                    </div>

                                    <div class="d-flex justify-content-between text-capitalize mb-2">
                                        <p class="m-0 payment-title">Class Type</p>
                                        <p class="m-0 payment-subtitle ">Weekdays</p>
                                    </div>

                                    <div class="d-flex justify-content-between text-capitalize mb-2">
                                        <p class="m-0 payment-title">Entry Type</p>
                                        <p class="m-0 payment-subtitle ">Direct Admission</p>
                                    </div>

                                    <div class="d-flex justify-content-between text-capitalize mb-2">
                                        <p class="m-0 payment-title">Entry Option</p>
                                        <p class="m-0 payment-subtitle ">Regular</p>
                                    </div>
                                </div>

                                <!-- Application Card -->
                                <div class="col-md-5 address-column">
                                    <div class="p-3 application-bg">
                                        <h3 class="row-title">Application Fees</h3>

                                        <hr class="full-width my-3">

                                        <div class="d-flex justify-content-between text-capitalize">
                                            <p class="m-0 payment-title">Application Form Fee</p>
                                            <p class="m-0 payment-subtitle">IDR 400.000</p>
                                        </div>

                                        <div class="d-flex justify-content-between text-capitalize my-2">
                                            <p class="m-0 payment-title">Administration Fee</p>
                                            <p class="m-0 payment-subtitle">IDR 20.000</p>
                                        </div>

                                        <div class="d-flex justify-content-between text-capitalize">
                                            <p class="m-0 payment-title">Discount</p>
                                            <p class="m-0 payment-subtitle">-</p>
                                        </div>

                                        <hr class="full-width my-3">

                                        <div class="d-flex justify-content-between text-capitalize">
                                            <p class="m-0 text-capitalize payment-total-title">Total Fee</p>
                                            <p class="m-0 text-capitalize payment-total-title">IDR 420.000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-content-center mb-4">
                        <button type="button" class="btn btn-outline-danger mt-5 float-end rounded-0 px-5" onclick="window.location.href = '/dashboard/entryoption';"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chevron-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"
                                    stroke="#FF5351" />
                            </svg> Back</button>
                        <!-- Submit Button Without E-code-->
                        <button id="proceedToPaymentBtn" type="submit"
                            class="btn btn-danger mt-5 float-end rounded-0 px-5 danger-button"
                            data-bs-toggle="modal" data-bs-target="#firstPaymentModal">Proceed to
                            Payment <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"
                                    fill="#FFF" />
                            </svg></button>

                        <!-- Submit button when user use e-code -->
                        <button id="verifyApplicationBtn" type="submit"
                            class="btn btn-danger mt-5 float-end rounded-0 px-5 danger-button"
                            onclick="window.location.href='/dashboard/applicationstatus'">Verify
                            Application<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"
                                    fill="#FFF" />
                            </svg></button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="firstPaymentModal" tabindex="-1" aria-labelledby="firstPaymentModal"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-payment">
                            <div class="modal-content border-0">
                                <!-- Modal Body -->
                                <div class="modal-body">
                                    <div>
                                        <span class="d-flex justify-content-between text-uppercase payment-title-up">
                                            <p>total</p>
                                            <p>PAY WITHIN <span>{countdown}</span></p>
                                        </span>
                                        <p class="review-modal-title">IDR 420.000</p>
                                        <span class="d-flex justify-content-between text-uppercase payment-title-down">
                                            <p class="review-modal-subtitle fst-italic">Order ID #9182739127391287</p>
                                            <p class="text-decoration-underline payment-details">details</p>
                                        </span>

                                        <hr class="solid-fullwidth">
                                    </div>
                                    <!-- Virtual Account Section -->
                                    <div class="mb-3">
                                        <p class="row-title">Virtual Account</p>
                                    </div>

                                    <!-- Bank Options Section -->
                                    <div class="payment-background">
                                        <div class="d-flex flex-column gap-1 p-4">
                                            <!-- Bank BCA -->
                                            <label
                                                class="bank-option d-flex justify-content-between align-items-center border p-3 rounded-3"
                                                for="bankBca">
                                                <span class="d-flex align-items-center gap-3">
                                                    <img src="/assets/bca.png" alt="bca" class="payment-icon">
                                                    <p class="payment-banks">BCA</p>
                                                </span>
                                                <input type="radio" id="bankBca" name="bankOptions" class="">
                                            </label>

                                            <!-- Bank Mandiri -->
                                            <label
                                                class="bank-option d-flex justify-content-between align-items-center border p-3 rounded-3"
                                                for="bankMandiri">
                                                <span class="d-flex align-items-center gap-3">
                                                    <img src="/assets/bni.png" alt="bca" class="payment-icon">
                                                    <p class="payment-banks">Mandiri</p>
                                                </span>
                                                <input type="radio" id="bankMandiri" name="bankOptions" class="">
                                            </label>

                                            <!-- Bank Permata -->
                                            <label
                                                class="bank-option d-flex justify-content-between align-items-center border p-3 rounded-3"
                                                for="bankPermata">
                                                <span class="d-flex align-items-center gap-3">
                                                    <img src="/assets/permata.png" alt="bca" class="payment-icon">
                                                    <p class="payment-banks">Permata Bank</p>
                                                </span>
                                                <input type="radio" id="bankPermata" name="bankOptions" class="">
                                            </label>

                                            <!-- Others Bank -->
                                            <label
                                                class="bank-option d-flex justify-content-between align-items-center border p-3 rounded-3"
                                                for="otherBanks">
                                                <span>
                                                    <p class="payment-banks">Others Bank</p>
                                                </span>
                                                <input type="radio" id="otherBanks" name="bankOptions" class="">
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Footer -->
                                <div class="modal-footer">
                                    <button type="button"
                                        class="btn btn-primary px-5 rounded-0 w-100 border-0 dashboard-button"
                                        data-bs-target="#confirmationModal" data-bs-toggle="modal"
                                        id="submitFirstModal">Proceed to Payment</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal 2 -->
                    <div class="modal fade" id="confirmationModal" tabindex="-1"
                        aria-labelledby="confirmationModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-verify">
                            <div class="modal-content">
                                <!-- Modal Body -->
                                <div class="modal-body">
                                    <div>
                                        <span class="d-flex justify-content-between text-uppercase payment-title-up">
                                            <p>total</p>
                                            <p>PAY WITHIN <span>{countdown}</span></p>
                                        </span>
                                        <p class="review-modal-title">IDR 420.000</p>
                                        <span class="d-flex justify-content-between text-uppercase payment-title-down">
                                            <p class="review-modal-subtitle fst-italic">Order ID #9182739127391287</p>
                                            <p class="text-decoration-underline payment-details">details</p>
                                        </span>

                                        <hr class="solid-fullwidth">
                                    </div>
                                    <!-- Virtual Account Section -->
                                    <div class="mb-3">
                                        <p class="row-title">Virtual Account</p>
                                    </div>

                                    <!-- Bank Options Section -->
                                    <div class="payment-background">
                                        <div class="d-flex flex-column gap-1 p-4">
                                            <div class="pe-3">
                                                <span class="d-flex justify-content-between align-items-center mb-3">
                                                    <p class="row-title">Bank BCA</p>
                                                    <img src="/assets/bca-icons.png" alt="bank icon"
                                                        class="verify-icon">
                                                </span>
                                                <p class="verify-subtitle">Complete payment from BCA to the virtual
                                                    account number below</p>

                                                <p class="verify-title my-3">Virtual Account Number</p>
                                                <span
                                                    class="d-flex justify-content-between align-items-center payment-subtitle">
                                                    <p>8188 288 1816 8993</p>
                                                    <p>Copy number</p>
                                                </span>

                                                <hr class="solid-fullwidth">
                                                <button type="button"
                                                    class="btn btn-primary rounded-0 border-0 payment-title text-white mb-3">How
                                                    to Pay</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Footer -->
                                <div class="modal-footer">
                                    <button type="button"
                                        class="btn btn-primary px-5 rounded-0 w-100 border-0 dashboard-button"
                                        data-bs-target="#successModal" data-bs-toggle="modal"
                                        id="submitFirstModal">Verify Payment</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <!-- Modal 3 For Success Payment -->
                <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-verify p-4">
                        <div class="modal-content">
                            <!-- Modal Body -->
                            <div class="modal-body text-center">
                                <img src="/assets/check.png" alt="check icon" class="check-icon">
                                <p class="success-modal-title m2-3">Payment Success</p>
                                <p class="review-modal-subtitle mb-3">Congratulation! You have finished the payment.
                                    Proceed to the next step to complete your application.</p>
                                <button type="button" id="nextStepPayment"
                                    class="btn btn-danger px-5 rounded-0 w-100 border-0 dashboard-button">Next
                                    Step</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('myForm').addEventListener('submit', function (event) {
            event.preventDefault();
        });

        document.getElementById('nextStepPayment').addEventListener('click', function (event) {
            event.preventDefault();
            window.location.href = '/dashboard/applicationstatus';
        })
    </script>
    <script type="text/javascript" src="{{asset('js/reviewpayment.js') }}"></script>
</body>

</html>