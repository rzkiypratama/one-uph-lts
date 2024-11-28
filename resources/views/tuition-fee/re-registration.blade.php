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
			<div class="d-none d-md-flex mb-4 gap-2">
				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">01</p>
						<p class="step-subtitle w-25 m-0">Tuition Fee</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/tuition-circle-done.png" alt="step" class="step-icon" />
						<hr class="tuition-dashed-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">02</p>
						<p class="step-subtitle w-50 m-0">Re-registration Information</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/tuition-circle-bold.png" alt="step" class="step-icon" />
						<hr class="tuition-solid-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">03</p>
						<p class="step-subtitle w-25 m-0">Administration Document</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/tuition-circle-normal.png" alt="step" class="step-icon" />
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
						<p class="mobile-title">Step 2 of 3</p>
						<p class="mobile-subtitle">Re-registration</p>
					</span>
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
										<p class="tabs-title text-capitalize m-0">Address Information</p>
										<p class="tabs-subtitle m-0">your address information</p>
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
								<p class="file-validation pb-1">Fill address information, <span class="file-validation-required">(*) Is Required Field</span></p>

								<!-- international role -->
								<div id="international-address" class="form-section hidden">
									<div class="address-container">
										<!-- Overseas Address Column -->
										<div class="row col-md-6 address-column">
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
													<label for="" class="form-label">City</label>
													<input type="text" class="form-control" placeholder="Enter City" />
												</div>
												<div class="col-md-6">
													<label for="postalCode" class="form-label">Postal Code</label>
													<input type="text" class="form-control" id="postalCode" placeholder="Enter Postal Code" />
												</div>
											</div>
										</div>

										<!-- Vertical Divider -->
										<!-- <div class="col-md-1 vertical-divider">
																						<hr class="vertical-hr" />
																				</div> -->

										<!-- Indonesian Address Column -->
										<div class="row col-md-6 address-column">
											<div class="mb-3">
												<label class="form-label">Indonesian Address</label>
												<input type="text" class="form-control" placeholder="Enter Indonesian address" />
												<div class="row my-4">
													<div class="col-md-6">
														<label for="stateProvinsi" class="form-label">Province or State</label>
														<input type="text" class="form-control" placeholder="Enter Province or State" />
													</div>
													<div class="col-md-6">
														<label for="city" class="form-label">City</label>
														<input type="text" class="form-control" placeholder="Enter City" />
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<label for="kodePos" class="form-label">Postal Code</label>
														<input type="text" class="form-control" placeholder="Enter Postal Code" />
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- national role -->
								<div id="national-address" class="form-section">
									<div class="row address-container">
										<!-- Indonesian Address Column -->

										<div class="col-md-6 address-column">
											<h3 class="row-title pb-3">Home Address</h3>
											<div class="d-flex align-items-center mb-0 gap-2 opacity-0">
												<label for="" class="form-label mb-0">Just divider</label>
											</div>
											<div class="mb-3">
												<label for="indonesianAddress" class="form-label">Home Address</label>
												<input type="text" class="form-control" id="indonesianAddress" placeholder="Enter Indonesian address" />
												<div class="row my-4">
													<div class="col-md-4 dropdown mb-3">
														<label for="stateCountry" class="form-label">Country</label>
														<input type="text" class="dropdownInput form-select" id="stateCountry" placeholder="Select your country" autocomplete="off" readonly>
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
														<label for="stateProvinsi" class="form-label">Province or State</label>
														<input type="text" class="dropdownInput form-select" id="stateProvinsi" placeholder="Select province or state" autocomplete="off" readonly>
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
														<label for="city" class="form-label">City</label>
														<input type="text" class="dropdownInput form-select" id="city" placeholder="Select your city" autocomplete="off" readonly>
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
														<label for="district" class="form-label">Distric</label>
														<input type="text" class="form-control" id="district" placeholder="Enter Disctric" />
													</div>
													<div class="col-md-2">
														<label for="village" class="form-label">Village</label>
														<input type="text" class="form-control" id="village" placeholder="Enter Village" />
													</div>
													<div class="col-md-2">
														<label for="RT" class="form-label">RT</label>
														<input type="text" class="form-control" id="RT" placeholder="RT" />
													</div>
													<div class="col-md-2">
														<label for="RW" class="form-label">RW</label>
														<input type="text" class="form-control" id="RW" placeholder="RW" />
													</div>
													<div class="col-md-3">
														<label for="kodePos" class="form-label">Postal Code</label>
														<input type="text" class="form-control" id="kodePos" placeholder="Enter Postal Code" />
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-6 address-column">
											<h3 class="row-title pb-3">Correspondence Address</h3>

											<div class="d-flex align-items-center gap-2">
												<input type="checkbox" name="correspondence" id="checkboxId">
												<label for="" class="form-label mb-0">Is it the same as your home address?</label>
											</div>
											<div class="mb-3" id="correspondenceAddressContainer">
												<label for="correspondenceIndonesianAddress" class="form-label">Correspondence Address</label>
												<input type="text" class="form-control" id="correspondenceIndonesianAddress" placeholder="Enter Indonesian address" />
												<div class="row my-4">
													<div class="col-md-4 dropdown mb-3">
														<label for="cocorrespondenceStateCountryuntry" class="form-label">Country</label>
														<input type="text" class="dropdownInput form-select" id="correspondenceStateCountry" placeholder="Select your country" autocomplete="off" readonly>
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
														<label for="correspondenceStateProvinsi" class="form-label">Province or State</label>
														<input type="text" class="dropdownInput form-select" id="correspondenceStateProvinsi" placeholder="Select province or state" autocomplete="off" readonly>
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
														<label for="correspondenceKota" class="form-label">City</label>
														<input type="text" class="dropdownInput form-select" id="correspondenceKota" placeholder="Select your city" autocomplete="off" readonly>
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
														<label for="correspondenceDistrict" class="form-label">Distric</label>
														<input type="text" class="form-control" id="correspondenceDistrict" placeholder="Enter Disctric" />
													</div>
													<div class="col-md-2">
														<label for="correspondenceVillage" class="form-label">Village</label>
														<input type="text" class="form-control" id="correspondenceVillage" placeholder="Enter Village" />
													</div>
													<div class="col-md-2">
														<label for="correspondenceRT" class="form-label">RT</label>
														<input type="text" class="form-control" id="correspondenceRT" placeholder="Enter RT" />
													</div>
													<div class="col-md-2">
														<label for="correspondenceRW" class="form-label">RW</label>
														<input type="text" class="form-control" id="correspondenceRW" placeholder="Enter RW" />
													</div>
													<div class="col-md-3">
														<label for="correspondenceKodePos" class="form-label">Postal Code</label>
														<input type="text" class="form-control" id="correspondenceKodePos" placeholder="Enter Postal Code" />
													</div>
												</div>
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
			document.addEventListener("DOMContentLoaded", () => {
				const checkbox = document.querySelector("#checkboxId");
				const correspondenceAddressContainer = document.querySelector("#correspondenceAddressContainer");

				const homeAddressFields = {
					address: document.querySelector("#indonesianAddress"),
					country: document.querySelector("#stateCountry"),
					province: document.querySelector("#stateProvinsi"),
					city: document.querySelector("#city"),
					district: document.querySelector("#district"),
					village: document.querySelector("#village"),
					rt: document.querySelector("#RT"),
					rw: document.querySelector("#RW"),
					postalCode: document.querySelector("#kodePos")
				};

				const correspondenceAddressFields = {
					address: document.querySelector("#correspondenceIndonesianAddress"),
					country: document.querySelector("#correspondenceStateCountry"),
					province: document.querySelector("#correspondenceStateProvinsi"),
					city: document.querySelector("#correspondenceKota"),
					district: document.querySelector("#correspondenceDistrict"),
					village: document.querySelector("#correspondenceVillage"),
					rt: document.querySelector("#correspondenceRT"),
					rw: document.querySelector("#correspondenceRW"),
					postalCode: document.querySelector("#correspondenceKodePos")
				};

				checkbox.addEventListener("change", () => {
					if (checkbox.checked) {
						for (const field in homeAddressFields) {
							correspondenceAddressFields[field].value = homeAddressFields[field].value;
						}

						correspondenceAddressContainer.classList.add("opacity-0", "pointer-events-none");

					} else {
						for (const field in correspondenceAddressFields) {
							correspondenceAddressFields[field].value = "";
						}
						// Tampilkan kembali field correspondence
						correspondenceAddressContainer.classList.remove("opacity-0", "pointer-events-none");
					}
				});
			});
		</script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
		<script type="text/javascript" src="{{ asset('js/re-registration.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/listsearch.js') }}"></script>

	</body>

</html>
