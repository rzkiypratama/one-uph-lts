<!DOCTYPE html>
<html lang="en">

	<x-head title="Re Registration">
		<x-slot name="inlineCSS">
			<style>
				.card-body {
					height: auto;
					padding-left: 2rem;
					padding-right: 2rem;
					/* box-shadow: none !; */
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

				.container {
					padding-left: 0px !important;
					padding-right: 0px !important;
				}

				@media (min-width: 768px) {
					.card-body {
						height: 418px;
						padding-left: 2rem;
						padding-right: 2rem;
						overflow: scroll
					}

					.container {
						padding: auto;
					}
				}
			</style>
		</x-slot>
	</x-head>

	<body class="container mt-3">
		@include('components.notification-dashboard')

		<div class="p-md-5 rounded-3 card-main-bg">
			<!-- desktop steps -->
			<div class="d-md-flex d-none mb-4 gap-2">
				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">01</p>
						<p class="step-subtitle w-30 m-0">Intake Year</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-done.png" alt="step" class="step-icon" />
						<hr class="done-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">02</p>
						<p class="step-subtitle w-30 m-0">Personal Information</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-done.png" alt="step" class="step-icon" />
						<hr class="dashed-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">03</p>
						<p class="step-subtitle w-30 m-0">Family Background</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-bold.png" alt="step" class="step-icon" />
						<hr class="solid-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">04</p>
						<p class="step-subtitle w-30 m-0">Education Information</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-normal.png" alt="step" class="step-icon" />
						<hr class="solid-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">05</p>
						<p class="step-subtitle w-30 m-0">Entry Option</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-normal.png" alt="step" class="step-icon" />
						<hr class="solid-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">06</p>
						<p class="step-subtitle w-30 m-0">Review & Payment</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-normal.png" alt="step" class="step-icon" />
						<hr class="solid-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">07</p>
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

					<span class="text-white" onclick="window.location.href = '/tuition-fee/tuitionpayment'">
						<p class="mobile-title">Step 3 of 7</p>
						<p class="mobile-subtitle">Family Background</p>
					</span>
				</div>
			</div>

			<!-- Tabs & Form -->
			<div class="card border-0 shadow-sm">
				<div class="card-header tabs-header">
					<ul class="nav nav-pills card-header-tabs" id="myTab" role="tablist">
						<!-- Tab 1 -->
						<li class="nav-item active" role="presentation">
							<button class="nav-link" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">
								<div class="d-flex">
									<img src="/assets/parent-icon.png" alt="icon1" class="tab-icon" />
									<span class="d-flex flex-column text-start">
										<p class="tabs-title text-capitalize m-0">Parents Information</p>
										<p class="tabs-subtitle m-0">your parent information</p>
									</span>
								</div>
							</button>
						</li>
						<!-- Tab 2 -->
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">
								<div class="d-flex">
									<img src="/assets/parent-icon.png" alt="icon1" class="tab-icon" />
									<span class="d-flex flex-column text-start">
										<p class="tabs-title text-capitalize m-0">Guardian Information</p>
										<p class="tabs-subtitle m-0">your guardian information</p>
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
								<p class="file-validation pb-1">Fill parents information, <span class="file-validation-required">(*) Is Required Field</span></p>

								<div class="row address-container">
									<!-- Mother Information -->
									<div class="col-md-6 address-column">
										<h3 class="row-title">Mother Information</h3>
										<div class="row mb-3">
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
												<div class="col-md-6 mb-3">
													<label class="form-label">Status</label>
													<div class="radio-btn-group d-flex gap-1">
														<input type="radio" id="aliveMother" name="motherStatus" value="alive" checked />
														<label for="aliveMother">Alive</label>

														<input type="radio" id="deceasedMother" name="motherStatus" value="deceased" />
														<label for="deceasedMother">Deceased</label>
													</div>
												</div>
											</div>

											<div id="deceasedInputHide">
												<div class="row">
													<div class="col-md-6 mb-3">
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
													<div class="col-md-6 mb-3">
														<label for="parentEmail" class="form-label">Email Address</label>
														<input type="email" class="form-control" id="parentEmail" placeholder="Enter your email address" />
													</div>
													{{-- <div class="col-md-4 mb-3">
														<label class="form-label">Religion</label>
														<select class="form-select">
															<option value="Option 1">Option 1</option>
															<option value="Option 2">Option 2</option>
														</select>
													</div>
													<div class="col-md-4">
														<label class="form-label">Occupation</label>
														<input type="email" class="form-control" placeholder="Enter your Occupation" />
													</div>
													<div class="col-md-4 mb-3">
														<label class="form-label">Last Education</label>
														<select class="form-select">
															<option value="Option 1">Option 1</option>
															<option value="Option 2">Option 2</option>
														</select>
													</div>
													<div class="mb-3">
														<label for="" class="form-label">Home Address</label>
														<input type="text" class="form-control" id="" placeholder="Enter address" />
														<div class="row my-4">
															<div class="col-md-4 dropdown mb-3">
																<label for="" class="form-label">Country</label>
																<input type="text" class="dropdownInput form-select" id="" placeholder="Select your country" autocomplete="off" readonly>
																<div class="dropdownList">
																	<input type="text" class="searchInput" placeholder="Search here...">
																	<ul>
																		<li>Option 1</li>
																		<li>Option 2</li>
																		<li>Option 3</li>
																		<li>Indonesia</li>
																		<li>others</li>
																	</ul>
																</div>
															</div>
															<div class="col-md-4 dropdown">
																<label for="" class="form-label">Province or State</label>
																<input type="text" class="dropdownInput form-select" id="" placeholder="Select province or state" autocomplete="off" readonly>
																<div class="dropdownList">
																	<input type="text" class="searchInput" placeholder="Search here...">
																	<ul>
																		<li>Option 1</li>
																		<li>Option 2</li>
																		<li>Option 3</li>
																		<li>others</li>
																	</ul>
																</div>
															</div>
															<div class="col-md-4 dropdown">
																<label for="" class="form-label">City</label>
																<input type="text" class="dropdownInput form-select" id="" placeholder="Select your city" autocomplete="off" readonly>
																<div class="dropdownList">
																	<input type="text" class="searchInput" placeholder="Search here...">
																	<ul>
																		<li>Option 1</li>
																		<li>Option 2</li>
																		<li>Option 3</li>
																		<li>others</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-3">
																<label for="" class="form-label">Distric</label>
																<input type="text" class="form-control" id="" placeholder="Enter Disctric" />
															</div>
															<div class="col-md-2">
																<label for="" class="form-label">Village</label>
																<input type="text" class="form-control" id="" placeholder="Enter Village" />
															</div>
															<div class="col-md-2">
																<label for="" class="form-label">RT</label>
																<input type="text" class="form-control" id="" placeholder="Enter RT" />
															</div>
															<div class="col-md-2">
																<label for="" class="form-label">RW</label>
																<input type="text" class="form-control" id="" placeholder="Enter RW" />
															</div>
															<div class="col-md-3">
																<label for="" class="form-label">Postal Code</label>
																<input type="text" class="form-control" id="" placeholder="Enter Postal Code" />
															</div>
														</div>
													</div> --}}
												</div>
											</div>
										</div>
									</div>

									<!-- Father Information -->
									<div class="col-md-6 address-column">
										<h3 class="row-title">Father Information</h3>
										<div class="row mb-3">
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
											<div class="col-md-6 mb-3">
												<label class="form-label">Status</label>
												<div class="radio-btn-group d-flex gap-1">
													<input type="radio" id="aliveFather" name="fatherStatus" value="alive" checked />
													<label for="aliveFather">Alive</label>

													<input type="radio" id="deceasedFather" name="fatherStatus" value="deceased" />
													<label for="deceasedFather">Deceased</label>
												</div>
											</div>
										</div>
										<div id="deceasedFatherInputHide">
											<div class="row">
												<div class="col-md-6 mb-3">
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
														<input type="tel" class="form-control col-md-3" id="fatherMobileNumber" placeholder="Phone Number" />
													</div>
												</div>
												<div class="col-md-6">
													<label for="parentEmail" class="form-label">Email Address</label>
													<input type="email" class="form-control" id="parentEmail" placeholder="Enter your email address" />
												</div>
												{{-- <div class="col-md-4 mb-3">
													<label class="form-label">Religion</label>
													<select class="form-select">
														<option value="Option 1">Option 1</option>
														<option value="Option 2">Option 2</option>
													</select>
												</div>
												<div class="col-md-4">
													<label class="form-label">Occupation</label>
													<input type="email" class="form-control" placeholder="Enter your Occupation" />
												</div>
												<div class="col-md-4 mb-3">
													<label class="form-label">Last Education</label>
													<select class="form-select">
														<option value="Option 1">Option 1</option>
														<option value="Option 2">Option 2</option>
													</select>
												</div> --}}
												{{-- <div class="mb-3">
													<label for="" class="form-label">Home Address</label>
													<input type="text" class="form-control" id="" placeholder="Enter address" />
													<div class="row my-4">
														<div class="col-md-4 dropdown mb-3">
															<label for="" class="form-label">Country</label>
															<input type="text" class="dropdownInput form-select" id="" placeholder="Select your country" autocomplete="off" readonly>
															<div class="dropdownList">
																<input type="text" class="searchInput" placeholder="Search here...">
																<ul>
																	<li>Option 1</li>
																	<li>Option 2</li>
																	<li>Option 3</li>
																	<li>Indonesia</li>
																	<li>others</li>
																</ul>
															</div>
														</div>
														<div class="col-md-4 dropdown">
															<label for="" class="form-label">Province or State</label>
															<input type="text" class="dropdownInput form-select" id="" placeholder="Select province or state" autocomplete="off" readonly>
															<div class="dropdownList">
																<input type="text" class="searchInput" placeholder="Search here...">
																<ul>
																	<li>Option 1</li>
																	<li>Option 2</li>
																	<li>Option 3</li>
																	<li>others</li>
																</ul>
															</div>
														</div>
														<div class="col-md-4 dropdown">
															<label for="" class="form-label">City</label>
															<input type="text" class="dropdownInput form-select" id="" placeholder="Select your city" autocomplete="off" readonly>
															<div class="dropdownList">
																<input type="text" class="searchInput" placeholder="Search here...">
																<ul>
																	<li>Option 1</li>
																	<li>Option 2</li>
																	<li>Option 3</li>
																	<li>others</li>
																</ul>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-3">
															<label for="" class="form-label">Distric</label>
															<input type="text" class="form-control" id="" placeholder="Enter Disctric" />
														</div>
														<div class="col-md-2">
															<label for="" class="form-label">Village</label>
															<input type="text" class="form-control" id="" placeholder="Enter Village" />
														</div>
														<div class="col-md-2">
															<label for="" class="form-label">RT</label>
															<input type="text" class="form-control" id="" placeholder="Enter RT" />
														</div>
														<div class="col-md-2">
															<label for="" class="form-label">RW</label>
															<input type="text" class="form-control" id="" placeholder="Enter RW" />
														</div>
														<div class="col-md-3">
															<label for="" class="form-label">Postal Code</label>
															<input type="text" class="form-control" id="" placeholder="Enter Postal Code" />
														</div>
													</div>
												</div> --}}
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Tab Content 2 -->
							<div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
								<div class="row mb-md-4">
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

									<div class="col-md-3 mb-3">
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
									<div class="col-md-3 mb-3">
										<label for="parentEmail" class="form-label">Email Address</label>
										<input type="email" class="form-control" id="parentEmail" placeholder="Enter your email address" />
									</div>
									<div class="col-md-2 mb-3">
										<label class="form-label">Religion</label>
										<select class="form-select">
											<option value="Option 1">Option 1</option>
											<option value="Option 2">Option 2</option>
										</select>
									</div>
									<div class="col-md-2">
										<label class="form-label">Occupation</label>
										<input type="email" class="form-control" placeholder="Enter your Occupation" />
									</div>
									<div class="col-md-2 mb-3">
										<label class="form-label">Last Education</label>
										<select class="form-select">
											<option value="Option 1">Option 1</option>
											<option value="Option 2">Option 2</option>
										</select>
									</div>
									<div class="mb-3">
										<div class="row">
											<div class="col-md-6 mb-3">
												<label for="" class="form-label">Home Address</label>
												<textarea class="form-control" id="" rows="1"></textarea>
											</div>
											<div class="col-md-2">
												<label for="" class="form-label">Province or State</label>
												<input type="text" class="form-control" id="" placeholder="Enter Province or State" />
											</div>
											<div class="col-md-2">
												<label for="" class="form-label">City</label>
												<input type="text" class="form-control" id="" placeholder="Enter City" />
											</div>
											<div class="col-md-2">
												<label for="" class="form-label">Distric</label>
												<input type="text" class="form-control" id="" placeholder="Enter Disctric" />
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<label for="" class="form-label">Village</label>
												<input type="text" class="form-control" id="" placeholder="Enter Village" />
											</div>
											<div class="col-md-1">
												<label for="" class="form-label">RT</label>
												<input type="text" class="form-control" id="" placeholder="Enter RT" />
											</div>
											<div class="col-md-1">
												<label for="" class="form-label">RW</label>
												<input type="text" class="form-control" id="" placeholder="Enter RW" />
											</div>
											<div class="col-md-2">
												<label for="" class="form-label">Postal Code</label>
												<input type="text" class="form-control" id="" placeholder="Enter Postal Code" />
											</div>
										</div>


									</div>
								</div>

							</div>
						</div>
						<div class="d-flex justify-content-between align-content-center mb-4 gap-3">
							<button type="button" id="backButton" class="btn btn-outline-danger float-end rounded-0 px-md-5">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" stroke="#FF5351" />
								</svg>
								Back
							</button>
							<!-- Submit Button -->
							<button type="submit" id="submitBtn" class="btn btn-danger float-end rounded-0 danger-button px-5">
								save & continue
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" fill="#FFF" />
								</svg>
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<script>
			const motherStatusAlive = document.getElementById("aliveMother");
			const fatherStatusAlive = document.getElementById("aliveFather");
			const deceasedMotherFields = document.getElementById("deceasedInputHide");
			const deceasedFatherFields = document.getElementById("deceasedFatherInputHide");

			const tab3 = document.getElementById("tab2-tab");
			// const tab3Content = document.getElementById("tab3");

			// Fungsi untuk menyembunyikan/memperlihatkan field berdasarkan status orang tua
			function toggleParentFields() {
				// Cek status mother dan father
				const isMotherAlive = motherStatusAlive.checked;
				const isFatherAlive = fatherStatusAlive.checked;

				// Toggle fields phone dan email berdasarkan status
				deceasedMotherFields.style.display = isMotherAlive ? "block" : "none";
				deceasedFatherFields.style.display = isFatherAlive ? "block" : "none";

				// Sembunyikan tab 3 jika keduanya "alive"
				const hideTab3 = isMotherAlive && isFatherAlive;
				tab3.style.display = hideTab3 ? "none" : "block";
				// tab3Content.style.display = hideTab3 ? "none" : "block";
			}

			// Event listener untuk perubahan status mother
			motherStatusAlive.addEventListener("change", toggleParentFields);
			document.getElementById("deceasedMother").addEventListener("change", toggleParentFields);

			// Event listener untuk perubahan status father
			fatherStatusAlive.addEventListener("change", toggleParentFields);
			document.getElementById("deceasedFather").addEventListener("change", toggleParentFields);

			// Inisialisasi pertama kali
			toggleParentFields();
		</script>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
		<script type="text/javascript" src="{{ asset('js/familybackground.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/listsearch.js') }}"></script>

	</body>

</html>
