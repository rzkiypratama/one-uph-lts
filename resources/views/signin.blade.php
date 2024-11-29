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
				<div class="card p-4" style="width: 360px">
					<div class="d-flex justify-content-between text-center">
						<p class="login-card-title">Sign In</p>
						<img src="/assets/signin.png" alt="Sign In Image" class="img-fluid mb-3" style="max-width: 100px" />
					</div>

					<div class="full-width-hr-wrapper mb-3">
						<hr class="full-width" />
					</div>

					<!-- Email Address Input -->
					<form id="loginForm">
						<div style="height: 280px">
							<div class="mb-3">
								<label for="email" class="form-label">Email Address</label>
								<input type="email" class="form-control" id="email" placeholder="Enter your email" required />
							</div>

							<!-- Password Input with Show/Hide Eye Icon -->
							<div class="position-relative mb-3">
								<label for="password" class="form-label">Password</label>
								<input type="password" class="form-control" id="password" placeholder="Enter your password" required />
								<i class="bi bi-eye-slash eye-icon" id="togglePassword"></i>
							</div>

							<!-- Forgot Password Link -->
							<div class="mb-3 text-end">
								<a href="/forgot-password" class="forgot-password fst-italic">Forgot Password?</a>
							</div>

							<!-- Sign In Button -->
							<div class="d-grid mb-3">
								<button type="submit" class="btn btn-signin">Sign In</button>
							</div>
							<p class="register text-center">Don’t have an account yet? <a href="/nationality" class="register-link">Register</a></p>
						</div>
					</form>
				</div>
			</div>
		</div>

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
