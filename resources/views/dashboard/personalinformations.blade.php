<!DOCTYPE html>
<html lang="en">

	<x-head title="Personal Informations">
		<x-slot name="inlineCSS">
			<style>
				.radio-btn-group label {
					cursor: pointer;
					padding: 10px 50px;
					border: 1px solid #ccc;
					border-radius: 5px;
					transition: background-color 0.3s;
					color: #cacaca;
					font-weight: 600;
					font-size: 12px;
				}

				.radio-btn-group input[type="radio"] {
					display: none;
					color: #cacaca;
				}

				.radio-btn-group input[type="radio"]:checked+label {
					background-color: #719dff;
					border-color: #719dff;
					color: white;
				}

				option.select-placeholder {
					color: #cacaca !important;
				}

				.phone-input-group {
					display: flex;
					align-items: center;
				}

				.phone-input-group select {
					max-width: 60px;
					border-radius: 0;
					margin-right: 5px;
				}

				.phone-input-group input {
					flex-grow: 1;
					border-left: none;
					border-radius: 0;
				}

				.phone-input-group .input-group-text {
					border-right: none;
				}

				.vertical-hr {
					border-left: 1px solid #ccc;
					height: 100%;
				}

				.address-container {
					display: flex;
					align-items: stretch;
					justify-content: space-between;
				}

				.address-card {
					border: 1px solid #ddd;
					padding: 20px;
					border-radius: 8px;
				}

				.vertical-divider {
					display: flex;
					align-items: center;
					justify-content: center;
					padding: 0 !important;
				}

				.hidden {
					display: none;
				}

				.show {
					display: block;
				}

				.card-body {
					height: 80vh;
					padding-left: 2rem;
					padding-right: 2rem;
				}

				.card-header .tabs-header {
					padding-left: 2rem;
					padding-right: 2rem;
				}

				.container {
					padding-left: 0px !important;
					padding-right: 0px !important;
				}

				#myTabs {
					display: flex;
				}

				@media (min-width: 768px) {
					.card-body {
						height: 418px;
						padding-left: 2rem;
						padding-right: 2rem;
					}

					.container {
						padding: auto;
					}
				}
			</style>
		</x-slot>
	</x-head>

	<body class="container mt-3">
		@include('components.notification')

		<div class="p-md-5 rounded-3 card-main-bg">
			<!-- desktop steps -->
			<div class="d-none d-md-flex mb-4 gap-2">
				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">01</p>
						<p class="step-subtitle w-25 m-0">Intake Year</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-done.png" alt="step" class="step-icon" />
						<hr class="dashed-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">02</p>
						<p class="step-subtitle w-25 m-0">Personal Information</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-bold.png" alt="step" class="step-icon" />
						<hr class="solid-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">03</p>
						<p class="step-subtitle w-25 m-0">Education Information</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-normal.png" alt="step" class="step-icon" />
						<hr class="solid-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">04</p>
						<p class="step-subtitle w-25 m-0">Entry Option</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-normal.png" alt="step" class="step-icon" />
						<hr class="solid-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">05</p>
						<p class="step-subtitle w-25 m-0">Review & Payment</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-normal.png" alt="step" class="step-icon" />
						<hr class="solid-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">06</p>
						<p class="step-subtitle w-50 m-0">Required Documents</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-normal.png" alt="step" class="step-icon" />
					</div>
				</div>
			</div>

			<!-- mobile steps -->
			<div class="d-md-none px-2 pt-3">
				<div class="upper-content d-flex align-items-center mb-3 gap-3">
					<span class="float-end">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="bi bi-chevron-left" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
						</svg>
					</span>

					<span class="text-white" onclick="window.location.href = '/dashboard/intakeyear'">
						<p class="mobile-title">Step 2 of 6</p>
						<p class="mobile-subtitle">Personal Information</p>
					</span>
				</div>
			</div>

			<!-- Tabs & Form -->
			<div class="card border-0 shadow-sm">
				<div class="card-header tabs-header">
					<ul class="nav nav-pills card-header-tabs" id="myTab" role="tablist">
						<!-- Tab 1 -->
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">
								<div class="d-flex">
									<img src="/assets/personalinformation.png" alt="icon1" class="tab-icon" />
									<span class="d-flex flex-column text-start">
										<p class="tabs-title text-capitalize m-0">Personal Background 01</p>
										<p class="tabs-subtitle m-0">your background information</p>
									</span>
								</div>
							</button>
						</li>
						<!-- Tab 2 -->
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">
								<div class="d-flex">
									<img src="/assets/personalinformation.png" alt="icon1" class="tab-icon" />
									<span class="d-flex flex-column text-start">
										<p class="tabs-title text-capitalize m-0">Personal Background 02</p>
										<p class="tabs-subtitle m-0">your background information</p>
									</span>
								</div>
							</button>
						</li>
						<!-- Tab 3 -->
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="false">
								<div class="d-flex">
									<img src="/assets/contact-icon.png" alt="icon1" class="tab-icon" />
									<span class="d-flex flex-column text-start">
										<p class="tabs-title text-capitalize m-0">Contact Information</p>
										<p class="tabs-subtitle m-0">your contact information</p>
									</span>
								</div>
							</button>
						</li>
						<!-- Tab 4 -->
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="tab4" aria-selected="true">
								<div class="d-flex">
									<img src="/assets/personalinformation.png" alt="icon1" class="tab-icon" />
									<span class="d-flex flex-column text-start">
										<p class="tabs-title text-capitalize m-0">Job Information</p>
										<p class="tabs-subtitle m-0">your work information</p>
									</span>
								</div>
							</button>
						</li>
					</ul>
				</div>

				<div class="card-body overflow-y-scroll">
					<!-- Form Start -->
					<form id="myForm" class="d-flex flex-column justify-content-between h-100">
						<div class="tab-content" id="myTabContent">
							<!-- Tab Content 1 -->
							<div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
								<div class="row">
									<!-- First Name -->
									<div class="col-md-4 mb-md-4">
										<label for="firstName" class="form-label">First Name</label>
										<input type="text" class="form-control" id="firstName" placeholder="First Name" required />
									</div>
									<!-- Middle Name -->
									<div class="col-md-4 mb-3">
										<label for="middleName" class="form-label">Middle Name</label>
										<input type="text" class="form-control" id="middleName" placeholder="Middle Name" />
									</div>
									<!-- Last Name -->
									<div class="col-md-4 mb-3">
										<label for="lastName" class="form-label">Last Name</label>
										<input type="text" class="form-control" id="lastName" placeholder="Last Name" />
									</div>
									<!-- Gender -->
									<div class="col-md-4 mb-md-4">
										<label class="form-label">Select Gender</label>
										<div class="radio-btn-group">
											<input type="radio" id="male" name="gender" value="Male" checked />
											<label for="male">Male</label>

											<input type="radio" id="female" name="gender" value="Female" />
											<label for="female">Female</label>
										</div>
									</div>
									<!-- Date of Birth -->
									<div class="col-md-4 mb-3">
										<label for="dob" class="form-label">Date of Birth</label>
										<input type="date" class="form-control" id="dob" />
									</div>
									<!-- School Name -->
									<div class="col-md-4 mb-3">
										<label for="schoolName" class="form-label">City of Birth</label>
										<input type="text" class="form-control" id="schoolName" placeholder="City of Birth" />
									</div>

									<!-- if user choose S2 show this field bellow -->
									<!-- Alumni Option -->
									<div class="col-md-4 mb-3">
										<label class="form-label">Are You an Alumni?</label>
										<div class="radio-btn-group">
											<input type="radio" id="alumni" name="alumniOption" value="Alumni" />
											<label for="alumni">Yes, I am</label>

											<input type="radio" id="notAlumni" name="alumniOption" value="notAlumni" checked />
											<label for="notAlumni">No, I'm Not</label>
										</div>
									</div>

									<!-- NIM -->
									<div class="col-md-4 mb-3" id="alumniNimField" style="display: none">
										<label for="nim" class="form-label">NIM</label>
										<input type="text" class="form-control" id="nim" />
									</div>
									<!-- Document -->
									<div class="col-md-4 mb-3" id="alumniDocField" style="display: none">
										<label for="alumniDocument" class="form-label">Alumni Document</label>
										<input type="file" class="form-control" placeholder="City of Birth" />
									</div>
								</div>
							</div>

							<!-- Tab Content 2 -->
							<div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
								<!-- form for international -->
								<div id="international-form" class="form-section hidden">
									<div class="row">
										<!-- Passport -->
										<div class="col-md-4 mb-3">
											<label for="citizenship" class="form-label">Citizenship</label>
											<select id="citizenship" class="form-select">
												<option value="" selected disabled hidden class="select-placeholder">What is your citizenship?</option>
												<option value="National">National</option>
												<option value="International">International</option>
											</select>
										</div>
										<!-- Passport Status -->
										<div class="col-md-4 mb-3">
											<label class="form-label">Do you have a Passport?</label>
											<div class="radio-btn-group">
												<input type="radio" id="yes" name="passportStatus" value="yes" checked />
												<label for="yes">Yes, I have</label>

												<input type="radio" id="no" name="passportStatus" value="no" />
												<label for="no">No, I don’t</label>
											</div>
										</div>
										<div class="row mt-4">
											<!-- Passport Number -->
											<div class="col-md-4 mb-3">
												<label for="passportNumber" class="form-label">Passport Number</label>
												<input type="text" class="form-control" id="passportNumber" placeholder="Enter your Passport Number" />
											</div>
											<!-- Passport Expiry Date -->
											<div class="col-md-4 mb-3">
												<label for="passportExpired" class="form-label">Passport Expiry Date</label>
												<input type="text" class="form-control" id="passportExpired" placeholder="When will your Passport expire?" />
											</div>
										</div>
										<div class="row">
											<!-- Marital Status -->
											<div class="col-md-4 mt-2">
												<label class="form-label">Marital Status</label>
												<select class="form-select">
													<option value="" selected disabled hidden class="select-placeholder">Choose your Marital Status</option>
													<option>Single</option>
													<option>Married</option>
												</select>
												<!-- <div class="radio-btn-group">
													<input type="radio" id="singleIntl" name="maritalStatusIntl" value="single" checked />
													<label for="singleIntl">Single</label>

													<input type="radio" id="marriedIntl" name="maritalStatusIntl" value="married" />
													<label for="marriedIntl">Married</label>
												</div> -->
											</div>
											<!-- Religion -->
											<div class="col-md-4 mt-2">
												<label for="religion" class="form-label">Religion</label>
												<select id="religion" class="form-select">
													<option value="" selected disabled hidden>What is your religion or faith?</option>
													<option value="religion1">religion1</option>
													<option value="religion2">religion2</option>
												</select>
											</div>
											<!-- School Name -->
											<div class="col-md-4 mt-2">
												<label for="churchName" class="form-label">Church Name</label>
												<input type="text" class="form-control" id="churchName" placeholder="Which church do you go to?" />
											</div>
										</div>
									</div>
								</div>

								<!-- form for national -->
								<div id="national-form" class="form-section">
									<div class="row">
										<!-- Citizenship -->
										<div class="col-md-4 mb-4">
											<label for="citizenship" class="form-label">Citizenship</label>
											<select id="citizenship" class="form-select">
												<option value="" selected disabled hidden class="select-placeholder">What is your citizenship?</option>
												<option value="national">National</option>
												<option value="international">International</option>
											</select>
										</div>
										<!-- NIK ID Number -->
										<div class="col-md-4 mb-4">
											<label for="nikNumber" class="form-label">NIK/ID Number</label>
											<input type="text" class="form-control" id="nikNumber" placeholder="Enter your NIK / ID Number" />
										</div>
									</div>
									<div class="row">
										<!-- Religion -->
										<div class="col-md-4 mb-4">
											<label for="religion" class="form-label">Religion</label>
											<select id="religion" class="form-select">
												<option value="" selected disabled hidden>What is your religion or faith?</option>
												<option value="religion1">religion1</option>
												<option value="religion2">religion2</option>
											</select>
										</div>
										<!-- Church Name -->
										<div class="col-md-4 mb-3">
											<label for="churchName" class="form-label">Church Name</label>
											<input type="text" class="form-control" id="churchName" placeholder="Which church do you go to?" />
										</div>
									</div>
									<div class="row">
										<!-- Marital Status -->
										<div class="col-md-4">
											<label class="form-label">Marital Status</label>
											<select class="form-select">
												<option value="" selected disabled hidden class="select-placeholder">Choose your Marital Status</option>
												<option>Single</option>
												<option>Married</option>
											</select>
											{{-- <div class="radio-btn-group">
												<input type="radio" id="single" name="maritalStatus" value="Single" checked />
												<label for="single">Single</label>

												<input type="radio" id="married" name="maritalStatus" value="Married" />
												<label for="married">Married</label>
											</div> --}}
										</div>
									</div>
								</div>
							</div>

							<!-- Tab Content 3 -->
							<div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
								<div>
									<div class="row mb-4">
										<div class="col-md-4">
											<label class="form-label">Phone Number</label>
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
												<input type="tel" class="form-control" id="whatsappNumber" placeholder="Enter whatsapp number" />
											</div>
										</div>
										<div class="col-md-4">
											<label class="form-label">whatsapp Number</label>
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
												<input type="tel" class="form-control" id="whatsappNumber" placeholder="Enter whatsapp number" />
											</div>
										</div>
										<div class="col-md-4">
											<label class="form-label">Home Phone Number</label>
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
												<input type="tel" class="form-control" id="homePhoneNumber" placeholder="Enter Home Phone number" />
											</div>
										</div>
									</div>

									<div class="row mt-4">
										<div class="col-md-4">
											<label for="contactRefer" class="form-label">I prefer to be contacted by:</label>
											<select id="contactRefer" class="form-select">
												<option value="option1">option1</option>
												<option value="option2">option2</option>
												<option value="option3">option3</option>
												<option value="Lainnya">Lainnya</option>
											</select>
										</div>
									</div>
								</div>
							</div>

							<!-- Tab Content 4 Only appear if user choose S2 -->
							<div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
								<div id="jobCardsContainer">
									<div class="job-card card mt-2 p-3">
										<div class="d-flex align-items-center absolute">
											<h5 class="job-title row-title mb-1">Job Information #1</h5>
										</div>
										<div class="row mb-4">
											{{-- first row --}}
											<div class="col-md-3 mb-md-3">
												<label for="companyName" class="form-label">Company Name</label>
												<input type="companyName" class="form-control" name="companyName[]" placeholder="Enter your company name" />
											</div>
											<div class="col-md-3">
												<label for="departmentDivision" class="form-label">Department Division</label>
												<input type="departmentDivision" class="form-control" name="departmentDivision[]" placeholder="Your Department or Division" />
											</div>
											<div class="col-md-3">
												<label for="position" class="form-label">Posiition</label>
												<input type="position" class="form-control" name="position[]" placeholder="Enter your Posiition" />
											</div>
											<div class="col-md-3 mb-md-3">
												<label for="occupation" class="form-label">Occupation</label>
												<select name="occupation[]" class="form-select">
													<option value="option1">option1</option>
													<option value="option2">option2</option>
													<option value="option3">option3</option>
													<option value="Lainnya">Lainnya</option>
												</select>
											</div>

											{{-- second row --}}
											<div class="col-md-3">
												<label class="form-label">Is this your current job?</label>
												<div class="radio-btn-group">
													<input type="radio" name="currentJobOption[0]" id="currentJob1" value="currentJob" checked />
													<label for="currentJob1">Yes</label>

													<input type="radio" name="currentJobOption[0]" id="notCurrentJob1" value="notcurrentJob" />
													<label for="notCurrentJob1">No</label>
												</div>
											</div>
											<div class="col-md-3">
												<label for="startWorking" class="form-label">Start Date</label>
												<input type="date" class="form-control" name="startWorking[]" placeholder="Start Working" />
											</div>
											<div class="col-md-3 mb-md-3">
												<label for="endWorking" class="form-label">End Date</label>
												<input type="date" class="form-control" name="endWorking[]" placeholder="End Working" />
											</div>
											<div class="col-md-3"></div>

											{{-- third row --}}
											<div class="col-md-3 mb-md-3">
												<label for="companyAddress" class="form-label">Company Address</label>
												<textarea class="form-control" name="companyAddress[]" rows="1"></textarea>
											</div>
											<div class="col-md-3">
												<label for="companyCountry" class="form-label">Country</label>
												<input type="text" class="form-select" id="companyCountry" onfocus="toggleDropdown('companyCountryDropdown')" oninput="filterOptions('companyCountry', 'companyCountryDropdown')"
													placeholder="Search or select..." />
												<div id="companyCountryDropdown" class="dropdown-content col-md-2">
													<div onclick="selectOption('Option 1', 'companyCountry')">Option 1</div>
													<div onclick="selectOption('Option 2', 'companyCountry')">Option 2</div>
													<div onclick="selectOption('Option 3', 'companyCountry')">Option 3</div>
													<div onclick="selectOption('Lainnya', 'companyCountry')">Lainnya</div>
												</div>
											</div>
											<div class="col-md-3">
												<label for="companyProvince" class="form-label">Province or State</label>
												<select name="companyProvince[]" class="form-select">
													<option value="" selected disabled hidden class="select-placeholder">Select Province</option>
													<option>Option 1</option>
													<option>Option 2</option>
												</select>
											</div>
											<div class="col-md-3">
												<label for="companyCity" class="form-label">City</label>
												<select name="companyCity[]" class="form-select">
													<option value="" selected disabled hidden class="select-placeholder">Select City</option>
													<option>Option 1</option>
													<option>Option 2</option>
												</select>
											</div>

											{{-- forth row --}}
											<div class="col-md-3">
												<label for="district" class="form-label">District</label>
												<input type="district" class="form-control" name="district[]" placeholder="District" />
											</div>
											<div class="col-md-3">
												<label for="village" class="form-label">Village</label>
												<input type="village" class="form-control" name="village[]" placeholder="Village" />
											</div>
											<div class="col-md-3">
												<label for="companyPostalCode" class="form-label">Postal Code</label>
												<input type="companyPostalCode" class="form-control" name="companyPostalCode[]" placeholder="Postal Code" />
											</div>
											<div class="col-md-1">
												<label for="rt" class="form-label">RT</label>
												<input type="rt" class="form-control" name="rt[]" placeholder="RT" />
											</div>
											<div class="col-md-1">
												<label for="rw" class="form-label">RW</label>
												<input type="rw" class="form-control" name="rw[]" placeholder="RW" />
											</div>

										</div>
									</div>
								</div>
								<div class="d-flex justify-content-center w-100 pt-2">
									<button type="button" id="addMoreJobBtn" class="btn btn-secondary add-more-btn">Add Job Information +</button>
								</div>
							</div>
						</div>
						<div class="d-flex justify-content-between align-content-center mb-4 gap-3">
							<button type="button" id="backButton" class="btn btn-outline-danger float-end rounded-0 px-md-5 mt-5 px-4">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" stroke="#FF5351" />
								</svg>
								Back
							</button>
							<!-- Submit Button -->
							<button type="submit" id="submitBtn" class="btn btn-danger float-end rounded-0 px-md-5 danger-button mt-5">
								Continue
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
		<script type="text/javascript" src="{{ asset('js/personalinformations.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/autocompleted.js') }}"></script>
		<script>
			// Mendapatkan elemen radio button dan elemen field alumni
			const alumniRadio = document.getElementById("alumni");
			const notAlumniRadio = document.getElementById("notAlumni");
			const alumniNimFields = document.getElementById("alumniNimField");
			const alumniDocFields = document.getElementById("alumniDocField");

			// Fungsi untuk mengatur visibilitas field alumni
			function toggleAlumniFields() {
				if (alumniRadio.checked) {
					alumniNimFields.style.display = "block";
					alumniDocFields.style.display = "block";
				} else {
					alumniNimFields.style.display = "none";
					alumniDocFields.style.display = "none";
				}
			}

			// Menjalankan fungsi saat halaman dimuat pertama kali
			toggleAlumniFields();

			// Menambahkan event listener pada radio button
			alumniRadio.addEventListener("change", toggleAlumniFields);
			notAlumniRadio.addEventListener("change", toggleAlumniFields);
		</script>
	</body>

</html>
