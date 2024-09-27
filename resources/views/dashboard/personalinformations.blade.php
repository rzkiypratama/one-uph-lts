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
					color: #CACACA;
					font-weight: 600;
					font-size: 12px;
				}

				.radio-btn-group input[type="radio"] {
					display: none;
					color: #CACACA;
				}

				.radio-btn-group input[type="radio"]:checked+label {
					background-color: #719DFF;
					border-color: #719DFF;
					color: white;
				}

				option.select-placeholder {
					color: #CACACA !important;
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
		<div class="d-flex justify-content-between align-items-center mb-5 pt-3">
			<img src="/assets/uph-logo.png" alt="logo" class="uphlogo" />
			<div class="d-flex align-items-center gap-3">
				<span class="logout-button d-flex align-items-center gap-2">
					<p class="m-0">dashboard</p>
					<!-- <img src="/assets/signout-icon.png" alt="signout icon" class="logout-icon"> -->
				</span>
				<img src="/assets/bells.png" alt="notification icon" class="notification-icon" />
			</div>
		</div>

		<div class="rounded-3 card-main-bg p-5">
			<!-- steps -->
			<div class="d-flex mb-4 gap-2">
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
					</ul>
				</div>

				<div class="card-body">
					<!-- Form Start -->
					<form id="myForm" class="d-flex flex-column justify-content-between h-100">
						<div class="tab-content" id="myTabContent">
							<!-- Tab Content 1 -->
							<div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
								<div class="row">
									<div class="row">
										<!-- First Name -->
										<div class="col-md-4 mb-3">
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
									</div>
									<div class="row mb-3 mt-4">
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
									</div>
									<!-- Gender -->
									<div class="col-md-12">
										<label class="form-label">Select Gender</label>
										<div class="radio-btn-group">
											<input type="radio" id="male" name="gender" value="Male" checked />
											<label for="male">Male</label>

											<input type="radio" id="female" name="gender" value="Female" />
											<label for="female">Female</label>
										</div>
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
												<div class="radio-btn-group">
													<input type="radio" id="singleIntl" name="maritalStatusIntl" value="single" checked />
													<label for="singleIntl">Single</label>

													<input type="radio" id="marriedIntl" name="maritalStatusIntl" value="married" />
													<label for="married">Married</label>
												</div>
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
								<div id="national-form" class="form-section hidden">
									<div class="row">
										<!-- Citizenship -->
										<div class="col-md-4 mb-5">
											<label for="citizenship" class="form-label">Citizenship</label>
											<select id="citizenship" class="form-select">
												<option value="" selected disabled hidden class="select-placeholder">What is your citizenship?</option>
												<option value="National">National</option>
												<option value="International">International</option>
											</select>
										</div>
										<!-- NIK ID Number -->
										<div class="col-md-4 mb-5">
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
											<div class="radio-btn-group">
												<input type="radio" id="single" name="maritalStatus" value="Single" checked />
												<label for="single">Single</label>

												<input type="radio" id="married" name="maritalStatus" value="Married" />
												<label for="married">Married</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Tab Content 3 -->
							<div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
								<div class="row mb-3">
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
											<label for="email" class="form-label">Email Address</label>
											<input type="email" class="form-control" id="email" placeholder="Enter your email address" />
										</div>
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
						</div>
						<div class="d-flex justify-content-between align-content-center mb-4">
							<button type="button" id="backButton" class="btn btn-outline-danger float-end rounded-0 mt-5 px-5">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" stroke="#FF5351" />
								</svg>
								Back
							</button>
							<!-- Submit Button -->
							<button type="submit" id="submitBtn" class="btn btn-danger float-end rounded-0 danger-button mt-5 px-5">
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
		<script src="/js/personalinformations.js"></script>
	</body>

</html>
