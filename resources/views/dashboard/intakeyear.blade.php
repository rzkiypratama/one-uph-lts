<!DOCTYPE html>
<html lang="en">

	<x-head title="Intake Year">
		<x-slot name="inlineCSS">
			<style>
				.card-body {
					height: 83vh;
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
			<div class="d-md-flex d-none mb-4 gap-2">
				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">01</p>
						<p class="step-subtitle w-25 m-0">Intake Year</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-bold.png" alt="step" class="step-icon" />
						<hr class="solid-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">02</p>
						<p class="step-subtitle w-25 m-0">Personal Information</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-normal.png" alt="step" class="step-icon" />
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

					<span class="text-white" onclick="window.location.href = '/dashboard'">
						<p class="mobile-title">Step 1 of 6</p>
						<p class="mobile-subtitle">Intake Year</p>
					</span>
				</div>
			</div>

			<div class="card border-0 shadow-sm">
				<div class="card-header tabs-header">
					<ul class="nav nav-pills card-header-tabs" id="myTab" role="tablist">
						<!-- Tab 1 -->
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">
								<div class="d-flex">
									<img src="/assets/intakeyear.png" alt="icon1" class="tab-icon" />
									<span class="d-flex flex-column text-start">
										<p class="tabs-title text-capitalize m-0">Intake Year</p>
										<p class="tabs-subtitle m-0">intake year information</p>
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
								<p class="file-validation pb-1">Fill Intake Year Information, <span class="file-validation-required">(*) Is Required Field</span></p>
								<div class="row col-md-6">
									<!-- Intake Year -->
									<div class="col-md-6 mb-3">
										<label for="intakeYear" class="form-label">Intake Year</label>
										<input type="text" class="form-select" id="intakeYear" onfocus="toggleDropdown('intakeYearDropdown')" oninput="filterOptions('intakeYear', 'intakeYearDropdown')"
											placeholder="Select intake year" />
										<div id="intakeYearDropdown" class="dropdown-content col-md-2">
											<div onclick="selectOption('2023', 'intakeYear')">2023</div>
											<div onclick="selectOption('2024', 'intakeYear')">2024</div>
											<div onclick="selectOption('2025', 'intakeYear')">2025</div>
											<div onclick="selectOption('Lainnya', 'intakeYear')">Lainnya</div>
										</div>
									</div>
									<div class="col-md-6"></div>
									<!-- Campus Name -->
									<div class="col-md-6 mb-3">
										<label for="campusInput" class="form-label">Campus</label>
										<input type="text" class="form-select" id="campus" onfocus="toggleDropdown('campusDropdown')" oninput="filterOptions('campus', 'campusDropdown')"
											placeholder="Search or select..." />
										<div id="campusDropdown" class="dropdown-content">
											<div onclick="selectOption('Lippo Village Campus', 'campus')">Lippo Village Campus</div>
											<div onclick="selectOption('Surabaya Campus', 'campus')">Surabaya Campus</div>
											<div onclick="selectOption('Medan Campus', 'campus')">Medan Campus</div>
											<div onclick="selectOption('Lainnya', 'campus')">Lainnya</div>
										</div>
									</div>
									<!-- Category Study -->
									<div class="col-md-6 mb-3">
										<label for="studyCategory" class="form-label">Category of Study</label>
										<select id="studyCategory" class="form-select">
											<option value="Undergraduate (S1)">Undergraduate (S1)</option>
											<option value="Graduate">Graduate (S2 & S3)</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<!-- Submit Button -->
						<div class="d-md-flex justify-content-between align-content-center mb-4">
							<button type="button" class="btn btn-outline-danger float-end rounded-0 d-none d-md-block mt-5 px-5" onclick="window.location.href = '/dashboard'">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" stroke="#FF5351" />
								</svg>
								Back
							</button>
							<!-- Submit Button -->
							<button type="submit" class="btn btn-danger float-end rounded-0 danger-button mt-5 px-5">
								Save & Continue
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
		<script type="text/javascript" src="{{ asset('js/intakeyear.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/fieldwithsearch.js') }}"></script>
	</body>

</html>
