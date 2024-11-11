<!DOCTYPE html>
<html lang="en">

	<x-head title="Sign In" />

	<body class="container">
		<!-- header -->
		<img src="/assets/uph-logo.png" alt="logo" class="uphlogo position-absolute d-none d-md-block pt-5" />

		<div class="d-flex flex-column flex-md-row p-md-5 justify-content-around justify-content-md-center align-items-center min-vh-100 homepage-container container">
			<div class="d-md-none">
				<img src="/assets/uph-logo.png" alt="logo" class="uphlogo-mobile" />
			</div>

			<div class="d-flex flex-column align-items-center welcome-login">
				<img src="/assets/graduate.png" alt="graduate" class="graduate-logo d-none d-md-block" />
				<h3 class="header-login d-grid col-sm pt-3 text-center">Welcome to <span>ONE UPH</span></h3>
				<p class="fst-italic">ready to apply for your future in UPH?</p>
			</div>

			<div class="d-flex justify-content-center align-items-center">
				<div class="card p-4" style="width: 360px;">
					<div class="d-flex justify-content-between align-content-center">
						<p class="login-card-title">Forgot Password</p>
						<img src="/assets/signin.png" alt="Sign In Image" class="img-fluid mb-3" style="max-width: 100px" />
					</div>

					<div class="full-width-hr-wrapper mb-3">
						<hr class="full-width" />
					</div>

					<!-- Email Address Input -->
					<form id="loginForm">
						<div class="d-flex flex-column jus justify-content-between" style=" height: 260px">

							<div class="d-flex flex-column mb-3 gap-3">
								<p class="login-card-subtitle">Submit your email to reset password</p>
								<span>
									<label for="email" class="form-label">Email Address</label>
									<input type="email" class="form-control" id="email" placeholder="Enter your email" required />
								</span>
							</div>

							<!-- Sign In Button -->
							<div class="d-grid mb-3">
								<button type="submit" class="btn btn-signin" data-bs-toggle="modal" data-bs-target="#forgotPassword">Send Reset Password</button>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>

		{{-- forgot password success modal --}}
		<div class="modal fade" id="forgotPassword" tabindex="-1" aria-labelledby="forgotPasswordLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content text-center">
					<div class="modal-body modal-body-review">
						<img src="/assets/mail.png" class="img-fluid mb-3" alt="Success Image" />
						<!-- Replace with your image path -->
						<div>
							<p class="fs-4 review-modal-title">Check your Email</p>
							<p class="review-modal-subtitle d-flex flex-column align-items-center mb-3">Check your email to reset your password</p>
						</div>

						<div class="mb-3">
							<p class="review-modal-subtitle"><strong>Open your email in </strong><span class="email-verify">[Email Address]</span></p>
						</div>

						<p class="register pb-3">Didn’t receive any Password Reset Email from us?</p>

						<div class="d-flex justify-content-center gap-3">
							<button type="button" class="btn btn-outline-danger rounded-0 w-35" data-bs-dismiss="modal">Back</button>
							<button type="button" class="btn btn-danger rounded-0 w-75">Resend Activation Email</button>
						</div>

					</div>
				</div>
			</div>
		</div>

		{{-- forgot password failed modal --}}
		<div class="modal fade" id="forgotPasswordFailed" tabindex="-1" aria-labelledby="forgotPasswordFailedLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content text-center">
					<div class="modal-body modal-body-review">
						<img src="/assets/verify-failed.png" class="img-fluid mb-3" alt="Success Image" />
						<!-- Replace with your image path -->
						<div class="mb-5">
							<p class="fs-4 review-modal-title">Email Address Invalid</p>
							<p class="review-modal-subtitle d-flex flex-column align-items-center">We can’t find any account with the email address</p>
						</div>

						<div class="d-flex justify-content-center gap-3">
							<button type="button" class="btn btn-danger rounded-0 w-75">Try another Email Address</button>
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- Button Contact Us -->
		<button id="contactUsBtn" class="btn btn-primary d-flex align-items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
				class="bi bi-chat-dots-fill"
				viewBox="0 0 16 16">
				<path
					d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
			</svg> Contact Us</button>

		<!-- Contact Us Card -->
		<div id="contactUsCard" class="card fade-in-bottom shadow-lg">
			<div class="card-header contact-us-btn d-flex justify-content-between align-items-center">
				<h5 class="mb-0">Contact Us</h5>
				<button type="button" class="btn-close" aria-label="Close" onclick="toggleContactUsCard()"></button>
			</div>
			<div class="card-body">
				<form>
					<div class="mb-3">
						<label for="subject" class="form-label">Subject</label>
						<input type="text" class="form-control" id="subject" placeholder="Enter subject" />
					</div>
					<div class="mb-3">
						<label for="email" class="form-label">Email</label>
						<input type="email" class="form-control" id="email" placeholder="Enter your email" />
					</div>
					<div class="mb-3">
						<label for="name" class="form-label">Your Name</label>
						<input type="text" class="form-control" id="name" placeholder="Enter your name" />
					</div>
					<button type="submit" class="btn btn-primary w-100 mt-3">Submit</button>
				</form>
			</div>
		</div>

		<script>
			// Fungsi untuk toggle tampilan card
			function toggleContactUsCard() {
				const contactUsCard = document.getElementById("contactUsCard");
				contactUsCard.style.display = contactUsCard.style.display === "none" ? "block" : "none";
			}

			// Event listener untuk membuka card saat button Contact Us diklik
			document.getElementById("contactUsBtn").addEventListener("click", toggleContactUsCard);
		</script>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
		</script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
		</script>
		<!-- Simple Login Logic -->
		<script type="text/javascript" src="{{ asset('js/login.js') }}"></script>
		<!-- Include Bootstrap Icons for eye and eye-slash -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
	</body>

</html>
