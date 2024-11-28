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

					.modal-body-checkbox {
						height: 200px !important;
						overflow-y: scroll;
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
						<hr class="done-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">03</p>
						<p class="step-subtitle w-30 m-0">Family Background</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-done.png" alt="step" class="step-icon" />
						<hr class="done-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">04</p>
						<p class="step-subtitle w-30 m-0">Education Information</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-done.png" alt="step" class="step-icon" />
						<hr class="dashed-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">05</p>
						<p class="step-subtitle w-30 m-0">Entry Option</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-bold.png" alt="step" class="step-icon" />
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

					<span class="text-white" onclick="window.location.href = '/dashboard/educationbackground.html'">
						<p class="mobile-title">Step 5 of 7</p>
						<p class="mobile-subtitle">Entry Option</p>
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
									<img src="/assets/entry-icon.png" alt="icon1" class="tab-icon" />
									<span class="d-flex flex-column text-start">
										<p class="tabs-title text-capitalize m-0">Entry Option</p>
										<p class="tabs-subtitle m-0">your entry information</p>
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
								<p class="file-validation pb-1">Fill study program information, <span class="file-validation-required">(*) Is Required Field</span></p>

								<div>
									<div class="row col-md-12 mb-md-4">
										<!-- College -->
										<div class="col-md-4 mb-md-0 mb-3">
											<label for="collegeType" class="form-label">College</label>
											<select id="collegeType" class="form-select">
												<option value="option1">option1</option>
												<option value="option2">option2</option>
												<option value="option3">option3</option>
												<option value="Lainnya">Lainnya</option>
											</select>
										</div>
										<div class="col-md-4 mb-md-0 mb-3">
											<label for="facultyType" class="form-label">Faculty</label>
											<select id="facultyType" class="form-select">
												<option value="option1">option1</option>
												<option value="option2">option2</option>
												<option value="option3">option3</option>
												<option value="Lainnya">Lainnya</option>
											</select>
										</div>
										<div class="col-md-4 mb-md-0 mb-3">
											<label for="programType" class="form-label">Program</label>
											<select id="programType" class="form-select">
												<option value="option1">option1</option>
												<option value="option2">option2</option>
												<option value="option3">option3</option>
												<option value="Lainnya">Lainnya</option>
											</select>
										</div>
									</div>

									<div class="row col-md-12">
										<!-- class session -->
										<div class="col-md-4 mb-md-0 mb-3">
											<label for="classSession" class="form-label">Class Session</label>
											<select id="classSession" class="form-select">
												<option value="option1">option1</option>
												<option value="option2">option2</option>
												<option value="option3">option3</option>
												<option value="Lainnya">Lainnya</option>
											</select>
										</div>
										<!-- class type -->
										<div class="col-md-4 mb-md-0 mb-3">
											<label for="classType" class="form-label">Class Type</label>
											<select id="classType" class="form-select">
												<option value="option1">option1</option>
												<option value="option2">option2</option>
												<option value="option3">option3</option>
												<option value="Lainnya">Lainnya</option>
											</select>
										</div>
										<!-- Entry Type -->
										<div class="col-md-4 mb-md-0 mb-3">
											<label for="entryType" class="form-label">Entry Type</label>
											<select id="entryType" class="form-select">
												<option value="option1">option1</option>
												<option value="option2">option2</option>
												<option value="option3">option3</option>
												<option value="Lainnya">Lainnya</option>
											</select>
										</div>

										<div class="col-md-4 mt-4">
											<label for="englishTest" class="form-label">English Proficency Test</label>
											<select class="form-select">
												<option value="" selected disabled>Which Proficiency Test do you have?</option>
												<option value="option2">option1</option>
												<option value="option3">option2</option>
												<option value="Lainnya">Lainnya</option>
											</select>
										</div>

										<div class="col-md-4 mt-4">
											<label class="form-label">Entry Option</label>
											<div class="radio-btn-group d-flex justify-content-between gap-1">
												<input type="radio" id="regular" name="entryOptions" value="regular" checked />
												<label for="regular">Regular</label>

												<input type="radio" id="schoolarshipRadio" name="entryOptions" value="schoolarship" />
												<label for="schoolarshipRadio">Schoolarship</label>
											</div>
										</div>

										<!-- Schoolarship Input -->
										<div class="col-md-4 mt-4" id="schoolarshipInput" style="display: none">
											<label for="schoolarshipType" class="form-label">Schoolarship Type</label>
											<select id="schoolarshipType" class="form-select">
												<option value="" selected disabled>Choose your schoolarship</option>
												<option value="option1">option1</option>
												<option value="option2">option2</option>
												<option value="Lainnya">Lainnya</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="d-flex justify-content-between align-content-center mb-4 gap-3">
							<button type="button" class="btn btn-outline-danger d-flex align-items-center float-end rounded-0 px-md-5 mt-5 px-4" onclick="window.location.href='/dashboard/educationbackground'">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" stroke="#FF5351" />
								</svg>
								Back
							</button>
							<!-- Submit Button -->
							<button type="button" class="btn btn-danger float-end rounded-0 px-md-5 danger-button mt-5" data-bs-toggle="modal" data-bs-target="#admissionModal">
								save & continue
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" fill="#FFF" />
								</svg>
							</button>
						</div>

						<!-- Modal -->
						<div class="modal fade" id="admissionModal" tabindex="-1" aria-labelledby="admissionModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg modal-dialog-centered">
								<div class="modal-content">
									<!-- Custom close button (top left) -->
									<img src="/assets/close.webp" class="custom-close" data-bs-dismiss="modal" aria-label="Close" />

									<!-- Modal Header -->
									<div class="modal-header d-flex">
										<img src="/assets/uph-logo.png" style="width: 148px" alt="Logo" class="img-fluid" />
										<div>
											<h3 class="modal-entry-title">Admission Statement</h3>
											<p class="float-end review-modal-subtitle m-0">Academic Year 2004/2005</p>
										</div>
									</div>

									<!-- Modal Body -->
									<div class="modal-body modal-body-checkbox overflow-x-scroll">
										<p class="first-modal-p">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
											laboris nisi ut
											aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
											in culpa
											qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
											veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
											Excepteur
											sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</p>
									</div>

									<!-- Modal Footer -->
									<div class="modal-footer">
										<div class="d-flex flex-column align-items-center w-100 gap-3 text-center">
											<div><input type="checkbox" id="agreeCheckbox" /> <label for="agreeCheckbox" class="tabs-subtitle">I agree with this admission statement</label></div>
											<button type="button" class="btn btn-primary rounded-0 px-5" data-bs-target="#confirmationModal" data-bs-toggle="modal" id="submitFirstModal" disabled>Submit</button>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Modal 2 -->
						<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
									<!-- Modal Body -->
									<div class="modal-body">
										<div class="d-flex flex-column justify-content-center align-content-center align-items-center text-center">
											<img src="/assets/admission-icon.png" alt="admission icon" class="admisison-icon mb-3" />
											<p class="review-modal-title testing m-0">Admission Statement Confirmation</p>
											<p class="review-modal-subtitle m-0">
												I hereby declare that I have read and understood the Admission Statement, UPH Application, and admission requirements in their entirety. I fully agree to comply with and adhere to every
												rule
												applicable at UPH. I am willing to accept the sanctions imposed in case of any violation.
											</p>
										</div>
										<hr class="solid-modal" />
										<div class="row px-3">
											<span class="col-md-6 payment-title"> Name </span>
											<span class="col-md-6 payment-subtitle"> Kevin Saputra Siahaan </span>

											<span class="col-md-6 payment-title"> NIK/ID Number </span>
											<span class="col-md-6 payment-subtitle"> 3656565656565 </span>

											<span class="col-md-6 payment-title"> Parents Name </span>
											<span class="col-md-6 payment-subtitle"> Bagus Siahaan & Irene Siahaan </span>
										</div>
									</div>

									<!-- Modal Footer -->
									<div class="modal-footer d-flex justify-content-between w-100">
										<button type="button" class="btn btn-outline-danger rounded-0 w-25 mx-4" data-bs-dismiss="modal">No</button>
										<button type="button" class="btn btn-danger rounded-0 w-25 mx-4" id="submitBtn">Yes!</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
		<script type="text/javascript" src="{{ asset('js/entryoption.js') }}"></script>
	</body>

</html>
