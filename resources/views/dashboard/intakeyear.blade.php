<!DOCTYPE html>
<html lang="en">

	<x-head title="Intake Year">
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
								<div class="row w-50">
									<!-- Intake Year -->
									<div class="col-md-6 mb-3">
										<label for="intakeYear" class="form-label">Intake Year</label>
										<select id="intakeYear" class="form-select">
											<option value="2023">2023</option>
											<option value="2024">2024</option>
											<option value="2025">2025</option>
											<option value="Lainnya">Lainnya</option>
										</select>
									</div>
									<div class="col-md-6"></div>
									<!-- Campus Name -->
									<div class="col-md-6 mb-3">
										<label for="campus" class="form-label">Campus</label>
										<select id="campus" class="form-select">
											<option value="Lippo Village Campus">Lippo Village Campus</option>
											<option value="Surabaya Campus">Surabaya Campus</option>
											<option value="Medan Campus">Medan Campus</option>
											<option value="Lainnya">Lainnya</option>
										</select>
									</div>
									<!-- Category Study -->
									<div class="col-md-6 mb-3">
										<label for="studyCategory" class="form-label">Category of Study*</label>
										<select id="studyCategory" class="form-select">
											<option value="Undergraduate (S1)">Undergraduate (S1)</option>
											<option value="Graduate">Graduate (S2 & S3)</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<!-- Submit Button -->
						<div class="d-flex justify-content-between align-content-center mb-4">
							<button type="button" class="btn btn-outline-danger float-end rounded-0 mt-5 px-5" onclick="window.location.href = '/dashboard'">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" stroke="#FF5351" />
								</svg>
								Back
							</button>
							<!-- Submit Button -->
							<button type="submit" class="btn btn-danger float-end rounded-0 danger-button mt-5 px-5">
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
		<script type="text/javascript" src="{{ asset('js/intakeyear.js') }}"></script>
	</body>

</html>
