<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css" />
    <title>Re-registration Information</title>
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

      .hidden {
        display: none;
      }

      .show {
        display: block;
      }
    </style>
  </head>

  <body class="container mt-3">
    <div class="d-flex justify-content-between align-items-center pt-3 mb-5">
      <img src="/assets/uph-logo.png" alt="logo" class="uphlogo" />
      <div class="d-flex gap-3 align-items-center">
        <span class="logout-button d-flex align-items-center gap-2">
          <p class="m-0">dashboard</p>
          <!-- <img src="/assets/signout-icon.png" alt="signout icon" class="logout-icon"> -->
        </span>
        <img src="/assets/bells.png" alt="notification icon" class="notification-icon" />
      </div>
    </div>

    <div class="p-5 rounded-3 card-main-bg">
      <!-- steps -->
      <div class="d-flex gap-2 mb-4">
        <div>
          <div class="d-flex gap-2 mb-3">
            <p class="m-0 step-title">01</p>
            <p class="m-0 step-subtitle w-25">Tuition Fee</p>
          </div>
          <div class="d-flex align-items-center gap-2">
            <img src="/assets/tuition-circle-done.png" alt="step" class="step-icon" />
            <hr class="tuition-dashed-step" />
          </div>
        </div>

        <div>
          <div class="d-flex gap-2 mb-3">
            <p class="m-0 step-title">02</p>
            <p class="m-0 step-subtitle w-50">Re-registration Information</p>
          </div>
          <div class="d-flex align-items-center gap-2">
            <img src="/assets/tuition-circle-bold.png" alt="step" class="step-icon" />
            <hr class="tuition-solid-step" />
          </div>
        </div>

        <div>
          <div class="d-flex gap-2 mb-3">
            <p class="m-0 step-title">03</p>
            <p class="m-0 step-subtitle w-25">Administration Document</p>
          </div>
          <div class="d-flex align-items-center gap-2">
            <img src="/assets/tuition-circle-normal.png" alt="step" class="step-icon" />
          </div>
        </div>
      </div>

      <!-- Tabs & Form -->
      <div class="card border-0 shadow-sm">
        <div class="card-header tabs-header">
          <ul class="nav nav-pills card-header-tabs" id="myTab" role="tablist">
            <!-- Tab 1 -->
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="false">
                <div class="d-flex">
                  <img src="/assets/address-icon.png" alt="icon1" class="tab-icon" />
                  <span class="d-flex flex-column text-start">
                    <p class="m-0 tabs-title text-capitalize">Address Information</p>
                    <p class="m-0 tabs-subtitle">your address information</p>
                  </span>
                </div>
              </button>
            </li>
            <!-- Tab 2 -->
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="true">
                <div class="d-flex">
                  <img src="/assets/parent-icon.png" alt="icon1" class="tab-icon" />
                  <span class="d-flex flex-column text-start">
                    <p class="m-0 tabs-title text-capitalize">Parents Information</p>
                    <p class="m-0 tabs-subtitle">your parent information</p>
                  </span>
                </div>
              </button>
            </li>
            <!-- Tab 3 -->
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="false">
                <div class="d-flex">
                  <img src="/assets/parent-icon.png" alt="icon1" class="tab-icon" />
                  <span class="d-flex flex-column text-start">
                    <p class="m-0 tabs-title text-capitalize">Guardian Information</p>
                    <p class="m-0 tabs-subtitle">your guardian information</p>
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
                <!-- international role -->
                <div id="international-address" class="form-section hidden">
                  <div class="address-container">
                    <!-- Overseas Address Column -->
                    <div class="col-md-5 address-column">
                      <div class="mb-3">
                        <label for="overseasAddress" class="form-label">Overseas Address</label>
                        <input type="text" class="form-control" id="overseasAddress" placeholder="Enter overseas address" />
                      </div>
                      <div class="row my-4">
                        <div class="col-md-6">
                          <label for="country" class="form-label">Country</label>
                          <input type="text" class="form-control" id="country" placeholder="Enter Country" />
                        </div>
                        <div class="col-md-6">
                          <label for="provinceState" class="form-label">Province or State</label>
                          <input type="text" class="form-control" id="provinceState" placeholder="Enter Province or State" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <label for="city" class="form-label">City</label>
                          <input type="text" class="form-control" id="city" placeholder="Enter City" />
                        </div>
                        <div class="col-md-6">
                          <label for="postalCode" class="form-label">Postal Code</label>
                          <input type="text" class="form-control" id="postalCode" placeholder="Enter Postal Code" />
                        </div>
                      </div>
                    </div>

                    <!-- Vertical Divider -->
                    <div class="col-md-1 vertical-divider">
                      <hr class="vertical-hr" />
                    </div>

                    <!-- Indonesian Address Column -->
                    <div class="col-md-5 address-column">
                      <div class="mb-3">
                        <label for="indonesianAddress" class="form-label">Indonesian Address</label>
                        <input type="text" class="form-control" id="indonesianAddress" placeholder="Enter Indonesian address" />
                        <div class="row my-4">
                          <div class="col-md-6">
                            <label for="stateProvinsi" class="form-label">Province or State</label>
                            <input type="text" class="form-control" id="stateProvinsi" placeholder="Enter Province or State" />
                          </div>
                          <div class="col-md-6">
                            <label for="kota" class="form-label">City</label>
                            <input type="text" class="form-control" id="kota" placeholder="Enter City" />
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <label for="kodePos" class="form-label">Postal Code</label>
                            <input type="text" class="form-control" id="kodePos" placeholder="Enter Postal Code" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- national role -->
                <div id="national-address" class="form-section hidden">
                  <div class="row address-container">
                    <!-- Indonesian Address Column -->
                    <div class="col-md-6 address-column">
                      <div class="mb-3">
                        <label for="indonesianAddress" class="form-label">Home Address</label>
                        <input type="text" class="form-control" id="indonesianAddress" placeholder="Enter Indonesian address" />
                        <div class="row my-4">
                          <div class="col-md-6">
                            <label for="stateProvinsi" class="form-label">Province or State</label>
                            <input type="text" class="form-control" id="stateProvinsi" placeholder="Enter Province or State" />
                          </div>
                          <div class="col-md-6">
                            <label for="kota" class="form-label">City</label>
                            <input type="text" class="form-control" id="kota" placeholder="Enter City" />
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <label for="kodePos" class="form-label">Postal Code</label>
                            <input type="text" class="form-control" id="kodePos" placeholder="Enter Postal Code" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Tab Content 2 -->
              <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                <div class="row address-container">
                  <!-- Mother Information -->
                  <div class="col-md-6 address-column">
                    <h3 class="row-title">Mother Information</h3>
                    <div class="row mb-4">
                      <div class="col-md-6">
                        <label for="motherFirstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="motherFirstName" placeholder="Your Mother’s first name?" />
                      </div>
                      <div class="col-md-6">
                        <label for="motherLastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="motherLastName" placeholder="Your Mother’s last name?" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="row">
                        <div class="col-md-12 mb-4">
                          <label class="form-label">Status</label>
                          <div class="radio-btn-group d-flex gap-1">
                            <input type="radio" id="aliveMother" name="motherStatus" value="alive" checked />
                            <label for="aliveMother">Alive</label>

                            <input type="radio" id="deceasedMother" name="motherStatus" value="deceased" />
                            <label for="deceasedMother">Deceased</label>
                          </div>
                        </div>
                      </div>

                      <div class="row" id="deceasedInputHide">
                        <div class="col-md-6">
                          <label class="form-label">Mobile Phone Number</label>
                          <div class="input-group phone-input-group">
                            <!-- Select for country code -->
                            <select class="form-select" id="countryCode">
                              <option value="+62">+62</option>
                              <option value="+1">+1</option>
                              <option value="+44">+44</option>
                              <option value="+91">+91</option>
                              <!-- Add more country codes as needed -->
                            </select>
                            <!-- Input for whatsapp number -->
                            <input type="tel" class="form-control" id="motherMobileNumber" placeholder="Phone Number" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label for="parentEmail" class="form-label">Email Address</label>
                          <input type="email" class="form-control" id="parentEmail" placeholder="Enter your email address" />
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Father Information -->
                  <div class="col-md-6 address-column">
                    <h3 class="row-title">Father Information</h3>
                    <div class="row mb-4">
                      <div class="col-md-6">
                        <label for="fatherFirstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="fatherFirstName" placeholder="Your Father’s first name?" />
                      </div>
                      <div class="col-md-6">
                        <label for="fatherLastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="fatherLastName" placeholder="Your Father’s last name?" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 mb-4">
                        <label class="form-label">Status</label>
                        <div class="radio-btn-group d-flex gap-1">
                          <input type="radio" id="aliveFather" name="fatherStatus" value="alive" checked />
                          <label for="aliveFather">Alive</label>

                          <input type="radio" id="deceasedFather" name="fatherStatus" value="deceased" />
                          <label for="deceasedFather">Deceased</label>
                        </div>
                      </div>
                    </div>
                    <div class="row" id="deceasedFatherInputHide">
                      <div class="col-md-6">
                        <label class="form-label">Mobile Phone Number</label>
                        <div class="input-group phone-input-group">
                          <!-- Select for country code -->
                          <select class="form-select" id="countryCode">
                            <option value="+62">+62</option>
                            <option value="+1">+1</option>
                            <option value="+44">+44</option>
                            <option value="+91">+91</option>
                            <!-- Add more country codes as needed -->
                          </select>
                          <!-- Input for whatsapp number -->
                          <input type="tel" class="form-control" id="fatherMobileNumber" placeholder="Phone Number" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="parentEmail" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="parentEmail" placeholder="Enter your email address" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Tab Content 3 -->
              <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                <div class="row">
                  <div class="row mb-4">
                    <!-- First Name -->
                    <div class="col-md-4 mb-3">
                      <label for="familyFirstName" class="form-label">First Name</label>
                      <input type="text" class="form-control" id="famiyFirstName" placeholder="First Name" />
                    </div>
                    <!-- Middle Name -->
                    <div class="col-md-4 mb-3">
                      <label for="middleName" class="form-label">Middle Name</label>
                      <input type="text" class="form-control" id="middleName" placeholder="Middle Name" />
                    </div>
                    <!-- Family Relationship-->
                    <div class="col-md-4 mb-3">
                      <label for="familyRelationship" class="form-label">Family Relationship</label>
                      <input type="text" class="form-control" id="familyRelationship" placeholder="Family Relationship" />
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <label for="guardianReligion" class="form-label">Religion</label>
                      <select id="guardianReligion" class="form-select">
                        <option value="option1">option1</option>
                        <option value="option2">option2</option>
                        <option value="option3">option3</option>
                        <option value="Lainnya">Lainnya</option>
                      </select>
                    </div>
                    <!-- email address -->
                    <div class="col-md-4 mb-3">
                      <label for="guardianEmail" class="form-label">Email Address</label>
                      <input type="text" class="form-control" id="guardianEmail" placeholder="Your Guardian email address" />
                    </div>
                    <div class="col-md-4">
                      <label class="form-label">Mobile Phone Number</label>
                      <div class="input-group phone-input-group">
                        <!-- Select for country code -->
                        <select class="form-select" id="countryCode">
                          <option value="+62">+62</option>
                          <option value="+1">+1</option>
                          <option value="+44">+44</option>
                          <option value="+91">+91</option>
                          <!-- Add more country codes as needed -->
                        </select>
                        <!-- Input for homePhone number -->
                        <input type="tel" class="form-control" id="guardianPhoneNumber" placeholder="Your Guardian phone number" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-between align-content-center mb-4">
              <button type="button" id="backButton" class="btn btn-outline-danger mt-5 float-end rounded-0 px-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" stroke="#FF5351" />
                </svg>
                Back
              </button>
              <!-- Submit Button -->
              <button type="submit" id="submitBtn" class="btn btn-danger mt-5 float-end rounded-0 px-5 danger-button">
                Save Data & Continue
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" fill="#FFF" />
                </svg>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/re-registration.js"></script>
  </body>
</html>
