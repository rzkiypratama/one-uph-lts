<!DOCTYPE html>
<html lang="en">

	<x-head title="Education Informations">
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
						<hr class="done-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">02</p>
						<p class="step-subtitle w-25 m-0">Personal Information</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-done.png" alt="step" class="step-icon" />
						<hr class="dashed-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">03</p>
						<p class="step-subtitle w-25 m-0">Education Information</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-bold.png" alt="step" class="step-icon" />
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

					<span class="text-white" onclick="window.location.href = '/dashboard/personalinformations'">
						<p class="mobile-title">Step 3 of 6</p>
						<p class="mobile-subtitle">Education Background</p>
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
									<img src="/assets/educational-icon.png" alt="icon1" class="tab-icon" />
									<span class="d-flex flex-column text-start">
										<p class="tabs-title text-capitalize m-0">Education Information</p>
										<p class="tabs-subtitle m-0">your education information</p>
									</span>
								</div>
							</button>
						</li>
						<!-- Tab 2 only show when user choose s2 -->
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="true">
								<div class="d-flex">
									<img src="/assets/educational-icon.png" alt="icon1" class="tab-icon" />
									<span class="d-flex flex-column text-start">
										<p class="tabs-title text-capitalize m-0">University Information</p>
										<p class="tabs-subtitle m-0">your education information</p>
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
								<p class="file-validation pb-1">Fill university information, <span class="file-validation-required">(*) Is Required Field</span></p>

								<div>
									<div class="row col-md-12 mb-4">
										<!-- School Name -->
										<div class="col-md-4 mb-3">
											<label for="schoolName" class="form-label">Highschool</label>
											<input type="text" class="form-control" id="schoolName" placeholder="Your high school name" required />
										</div>
										<!-- School City -->
										<div class="col-md-4 mb-md-3">
											<label for="schoolCity" class="form-label">City</label>
											<input type="text" class="form-control" id="schoolCity" placeholder="Where your school are located?" />
										</div>
									</div>

									<div class="row col-md-12">
										<div class="col-md-4 mb-3">
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
											<input type="text" class="form-control" id="graduationYear" placeholder="What is your graduation year?" />
										</div>
										<!-- Final Ceritificate -->
										<div class="col-md-4 mb-3">
											<label for="finalCertificate" class="form-label">Final Ceritificate</label>
											<input type="text" class="form-control" id="finalCertificate" placeholder="Your Final Certificate " />
										</div>
									</div>
								</div>
							</div>

							<!-- Tab Content 2 only show when user choose s2 -->
							<div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
								<p class="file-validation pb-1">Fill university information, <span class="file-validation-required">(*) Is Required Field</span></p>

								<div id="universityInformation" class="form-section">
									<div class="address-container d-flex gap-3">
										<!-- Main University -->
										<div class="col-md-6 address-column">
											<p class="row-title">Main University</p>
											<div class="row my-4">
												<div class="col-md-6">
													<label for="universityName" class="form-label">Univeristy Name</label>
													<input type="text" class="form-control" id="universityName" placeholder="Enter Univeristy Name" />
												</div>
												<div class="col-md-6">
													<label class="form-label">Level Of Study</label>
													<input type="text" class="form-control" placeholder="Enter Level of Study" />
												</div>
											</div>
											<div class="row my-4">
												<div class="col-md-6">
													<label class="form-label">Study Program</label>
													<input type="text" class="form-control" placeholder="Enter Study Program" />
												</div>
												<div class="col-md-6">
													<label class="form-label">Degree Title</label>
													<input type="text" class="form-control" placeholder="Enter Degree Title" />
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<label class="form-label">CGPA</label>
													<input type="text" class="form-control" placeholder="Enter CGPA" />
												</div>
												<div class="col-md-6">
													<label class="form-label">Graduation Date</label>
													<input type="text" class="form-control" placeholder="Enter Postal Code" />
												</div>
											</div>
										</div>

										<!-- Additional Univeristy -->
										<div class="col-md-6 address-column">
											<p class="row-title">Additional University</p>
											<div class="row my-4">
												<div class="col-md-6">
													<label for="universityName" class="form-label">Univeristy Name</label>
													<input type="text" class="form-control" id="universityName" placeholder="Enter Univeristy Name" />
												</div>
												<div class="col-md-6">
													<label class="form-label">Level Of Study</label>
													<input type="text" class="form-control" placeholder="Enter Level of Study" />
												</div>
											</div>
											<div class="row my-4">
												<div class="col-md-6">
													<label class="form-label">Study Program</label>
													<input type="text" class="form-control" placeholder="Enter Study Program" />
												</div>
												<div class="col-md-6">
													<label class="form-label">Degree Title</label>
													<input type="text" class="form-control" placeholder="Enter Degree Title" />
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<label class="form-label">CGPA</label>
													<input type="text" class="form-control" placeholder="Enter CGPA" />
												</div>
												<div class="col-md-6">
													<label class="form-label">Graduation Date</label>
													<input type="text" class="form-control" placeholder="Enter Postal Code" />
												</div>
											</div>
										</div>
									</div>
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
		<script type="text/javascript" src="{{ asset('js/educationInformation.js') }}"></script>

	</body>

</html>
