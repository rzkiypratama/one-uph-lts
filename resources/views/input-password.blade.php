<!DOCTYPE html>
<html lang="en">

	<x-head title="Set your password">
		<x-slot name="inlineCSS">
			<style>
				@media (min-width: 768px) {
					.card-box {
						margin-right: -6rem;
						overflow-y: scroll;
						height: 435px;
						width: 681px;
					}
				}
			</style>
		</x-slot>
	</x-head>

	<body class="container mt-3">
		<div class="d-flex justify-content-between align-items-center mb-md-5 px-3 pt-3">
			<img src="/assets/uph-logo.png" alt="logo" class="uphlogo" />
		</div>

		<div class="d-md-flex p-md-5 justify-content-md-center align-items-md-center homepage-container px-2 py-4">
			<!-- desktop view start -->
			<div class="card card-container d-none d-md-block p-5">
				<div class="d-flex justify-content-between box-item">
					<div class="left-content form-information w-25">
						<h3>Your Password</h3>
						<p class="children">Set up your password</p>
						<hr class="solid" />
					</div>

					<div class="card card-box w-md-75 border-0 p-2 shadow-sm">
						<div class="card-body">
							<form id="passwordSetup">
								<div>
									<div class="row">
										<!-- Password -->
										<div class="col-md-6 mb-3">
											<label for="password" class="form-label form-label-pwd">Password</label>
											<p class="form-input-subtitle">minimum 8 characters</p>
											<input type="password" class="form-control" id="password" placeholder="Password" />
										</div>
									</div>
									<div class="row">
										<!-- Repeat Password -->
										<div class="col-md-6 mb-3">
											<label for="repeatPassword" class="form-label form-label-pwd">Repeat Password</label>
											<p class="form-input-subtitle">minimum 8 characters</p>
											<input type="password" class="form-control" id="repeatPassword" placeholder="Repeat Password" />
										</div>
									</div>
								</div>

								<!-- Submit Button -->
								<div class="align-self-end mt-4">
									<button type="submit" id="submitBtn" class="btn select-program-btn rounded-2 px-5">Submit Password</button>
								</div>
							</form>
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

					<span class="text-white">
						<p class="mobile-subtitle">Password Setup</p>
					</span>
				</div>

				<div class="card rounded-4 middle-content mt-4 p-3">
					<div class="left-content">
						<h3>Password Setup</h3>
						<p class="children">Set up your password</p>
						<hr class="solid" />
					</div>

					<div class="bagian-bawah d-flex flex-column justify-content-between h-100 overflow-scroll">
						<div class="card card-box border-0 shadow-sm">
							<div class="card-body w-auto">
								<form id="passwordSetupMobile">
									<div class="row">
										<!-- Password -->
										<div class="col-md-6 mb-3">
											<label for="password" class="form-label form-label-pwd">Password</label>
											<p class="form-input-subtitle">minimum 8 characters</p>
											<input type="passwordMobile" class="form-control" id="passwordMobile" placeholder="Password" />
										</div>
									</div>
									<div class="row">
										<!-- Repeat Password -->
										<div class="col-md-6 mb-3">
											<label for="repeatPasswordMobile" class="form-label form-label-pwd">Repeat Password</label>
											<p class="form-input-subtitle">minimum 8 characters</p>
											<input type="password" class="form-control" id="repeatPasswordMobile" placeholder="Repeat Password" />
										</div>
									</div>
									<!-- Submit Button -->
									<div class="float-end submit-btn-div my-2">
										<button type="submit" class="btn select-program-btn rounded-2 px-5">Submit</button>
									</div>
								</form>
							</div>
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

		<script>
			const formDesktop = document.getElementById("passwordSetup");
			const formMobile = document.getElementById("passwordSetupMobile");

			// Fungsi untuk menangani submit form
			function handleFormSubmit(event) {
				event.preventDefault();

				// Ambil nilai dari password dan repeat password
				const password = this.querySelector("#password")?.value || this.querySelector("#passwordMobile")?.value;
				const repeatPassword = this.querySelector("#repeatPassword")?.value || this.querySelector("#repeatPasswordMobile")?.value;

				// Cek apakah password dan repeat password cocok
				if (password !== repeatPassword) {
					alert("Passwords do not match!");
					return;
				}

				// Collect form data
				const formData = {
					password: password,
				};

				// Store form data in localStorage
				localStorage.setItem("personalInfo", JSON.stringify(formData));

				console.log(formData);

				// Redirect to the /review page
				window.location.href = "/review";
			}

			// Tambahkan event listener untuk kedua form
			if (formDesktop) {
				formDesktop.addEventListener("submit", handleFormSubmit);
			}

			if (formMobile) {
				formMobile.addEventListener("submit", handleFormSubmit);
			}
		</script>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
		</script>
	</body>

</html>
