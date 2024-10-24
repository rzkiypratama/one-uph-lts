<!DOCTYPE html>
<html lang="en">

	<x-head title="Review Your Form" />

	<body class="container mt-3">
		<div class="d-flex justify-content-between align-items-center mb-md-5 px-3 pt-3">
			<img src="/assets/uph-logo.png" alt="logo" class="uphlogo" />
		</div>

		<!-- please create hidden input here to store value from card selection -->

		<div class="d-flex p-md-5 justify-content-md-center align-items-md-center homepage-container px-2 py-4">
			<!-- desktop view start -->
			<div class="card card-container d-none d-md-block p-5">
				<div class="d-flex justify-content-between box-item">
					<div class="left-content form-information w-50 d-flex flex-column justify-content-between">
						<div>
							<p class="text-uppercase">step 8 of 8</p>
							<h3>Review</h3>
							<p class="children w-75">Please check your inputted data</p>
							<hr class="solid" />
						</div>
					</div>

					<div class="card-box-review w-75">
						<hr class="solid-review" />
						<div class="card-body">
							<div class="row">
								<!-- Full Name dan Intended Study Program -->
								<div class="col-md-6 mb-3">
									<p class="form-label-review">Full Name</p>
									<p class="form-control-review">John Doe</p>
								</div>
								<div class="col-md-6 mb-3">
									<p class="form-label-review">Intended Study Program</p>
									<p class="form-control-review">Architecture</p>
								</div>
							</div>
							<div class="row">
								<!-- Mobile Phone Number dan Campus Location -->
								<div class="col-md-6 mb-3">
									<p class="form-label-review">Mobile Phone Number</p>
									<p class="form-control-review">+123456789</p>
								</div>
								<div class="col-md-6 mb-3">
									<p class="form-label-review">Campus Location</p>
									<p class="form-control-review">New York Campus</p>
								</div>
							</div>
							<div class="row">
								<!-- Email Address dan Admission Type -->
								<div class="col-md-6 mb-3">
									<p class="form-label-review">Email Address</p>
									<p class="form-control-review">johndoe@example.com</p>
								</div>
								<div class="col-md-6 mb-3">
									<p class="form-label-review">Admission Type</p>
									<p class="form-control-review">Regular Admission</p>
								</div>
							</div>
							<div class="row">
								<!-- School Name -->
								<div class="col-md-12 mb-3">
									<p class="form-label-review">School Name</p>
									<p class="form-control-review">ABC High School</p>
								</div>
							</div>
							<div class="row">
								<!-- Grade -->
								<div class="col-md-12 mb-3">
									<p class="form-label-review">Grade</p>
									<p class="form-control-review">Grade 12</p>
								</div>
							</div>

							<hr class="solid-review" />
							<!-- Tombol Verify -->
						</div>
						<div class="float-end">
							<button type="button" class="btn select-program-btn rounded-0 px-5" data-bs-toggle="modal" data-bs-target="#successModal">
								Verify
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" fill="#FFF" />
								</svg>
							</button>
						</div>
						<div>
							<button type="button" class="btn link back-review-btn" data-bs-dismiss="modal" onclick="window.location.href = '/personalinformation'">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" stroke="#7AA3FF" />
								</svg>
								Edit your Personal Data
							</button>
						</div>
					</div>
				</div>
			</div>
			<!-- desktop view ends -->

			<!-- mobile view start -->
			<div class="d-flex flex-column d-md-none">
				<div class="upper-content d-flex align-items-center gap-3">
					<span class="float-end">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="bi bi-chevron-left" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
						</svg>
					</span>

					<span class="text-white" onclick="window.location.href = '/personalinformation'">
						<p class="mobile-title">Step 8 of 8</p>
						<p class="mobile-subtitle">Review</p>
					</span>
				</div>

				<div class="card rounded-4 middle-content w-auto p-3">
					<div class="left-content">
						<h3>Review</h3>
						<p class="children w-75">Please check your inputted data</p>
						<hr class="solid" />
					</div>

					<div class="bagian-bawah d-flex flex-column justify-content-between h-100 overflow-scroll">
						<div class="card-box-review w-auto">
							<div class="card-body p-0">
								<div class="row">
									<!-- Full Name dan Intended Study Program -->
									<div class="col-md-6 mb-3">
										<p class="form-label-review">Full Name</p>
										<p class="form-control-review">John Doe</p>
									</div>
									<div class="col-md-6 mb-3">
										<p class="form-label-review">Intended Study Program</p>
										<p class="form-control-review">Architecture</p>
									</div>
								</div>
								<div class="row">
									<!-- Mobile Phone Number dan Campus Location -->
									<div class="col-md-6 mb-3">
										<p class="form-label-review">Mobile Phone Number</p>
										<p class="form-control-review">+123456789</p>
									</div>
									<div class="col-md-6 mb-3">
										<p class="form-label-review">Campus Location</p>
										<p class="form-control-review">New York Campus</p>
									</div>
								</div>
								<div class="row">
									<!-- Email Address dan Admission Type -->
									<div class="col-md-6 mb-3">
										<p class="form-label-review">Email Address</p>
										<p class="form-control-review">johndoe@example.com</p>
									</div>
									<div class="col-md-6 mb-3">
										<p class="form-label-review">Admission Type</p>
										<p class="form-control-review">Regular Admission</p>
									</div>
								</div>
								<div class="row">
									<!-- School Name -->
									<div class="col-md-12 mb-3">
										<p class="form-label-review">School Name</p>
										<p class="form-control-review">ABC High School</p>
									</div>
								</div>
								<div class="row">
									<!-- Grade -->
									<div class="col-md-12 mb-3">
										<p class="form-label-review">Grade</p>
										<p class="form-control-review">Grade 12</p>
									</div>
								</div>

								<hr class="solid" />
								<!-- Tombol Verify -->
							</div>
						</div>
						<div class="w-100">
							<button type="button" class="btn select-program-btn rounded-0 w-100 px-5" data-bs-toggle="modal" data-bs-target="#successModal">
								Verify
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" fill="#FFF" />
								</svg>
							</button>
						</div>
					</div>
				</div>
			</div>
			<!-- mobile view ends -->
		</div>
		<!-- Modal -->
		<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content text-center">
					<div class="modal-body modal-body-review">
						<img src="/assets/success.png" class="img-fluid mb-3" alt="Success Image" />
						<!-- Replace with your image path -->
						<p class="fs-4 review-modal-title mb-2">Registration Success</p>
						<p class="review-modal-subtitle d-flex flex-column align-items-center mb-4">Your account has been created. <span>Please continue to fill Application Form.</span></p>
						<a href="/signin">
							<button type="button" class="btn btn-primary w-50 rounded-0">Sign In</button>
						</a>
					</div>
				</div>
			</div>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
		</script>
	</body>

</html>
