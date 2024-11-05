<!DOCTYPE html>
<html lang="en">

	<x-head title="Nationality" />

	<body class="container mt-3">
		<div class="d-flex justify-content-between align-items-center mb-md-5 px-3 pt-3">
			<img src="/assets/uph-logo.png" alt="logo" class="uphlogo" />
		</div>

		<div class="d-flex p-md-5 justify-content-md-center align-items-md-center homepage-container px-2 py-4">
			<!-- desktop view start -->
			<div class="card card-container d-flex justify-content-between p-md-5 p-3">
				<div class="d-md-flex justify-content-between box-item">
					<div class="left-content">
						<p class="text-uppercase">step 1 of 8</p>
						<h3>Are you Indonesian or International Student?</h3>
						<p class="children">Choose your nationality</p>
						<hr class="solid" />
					</div>

					<div class="d-flex flex-column flex-md-row card-box gap-3">
						<a href="/studylevel" class="nationality" data-nationality="National">
							<div class="card-nationality fade-in-right border-0" style="background-image: url('/assets/student.jpeg');">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(to top, #bcd1ff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon"/> -->
									<h3 class="title" style="color: #333333">I’m an Indonesian Student</h3>
								</div>
							</div>
						</a>

						<a href="/international" class="nationality" data-nationality="International">
							<div class="card-nationality fade-in-right border-0" style="background-image: url('/assets/international-student.png');">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(to top, #bcd1ff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon"/> -->
									<h3 class="title" style="color: #333333">I’m an International Student</h3>
								</div>
							</div>
						</a>
					</div>
				</div>

				<span id="backToSignIn" class="d-flex align-items-md-center btn-sign cursor-pointer gap-2" role="button">
					<div class="d-none d-md-block">
						<img src="/assets/left-arrow.png" alt="arrow-left" />
						<p class="back-button p-0">back to Sign In</p>
					</div>

					<button type="button" class="d-md-none btn btn-back-responsive danger-button d-flex justify-content-center align-items-center mt-5 gap-2 px-5"><img src="/assets/arrow-back-red.png"
							alt="arrow-left" />back to Sign In</button>
				</span>
			</div>
			<!-- desktop view ends -->
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
		</script>
		<script>
			document.querySelectorAll(".nationality").forEach(function(element) {
				element.addEventListener("click", function(event) {
					// Ambil nilai nationality dari data attribute
					const nationality = event.currentTarget.getAttribute("data-nationality");

					// Simpan nationality ke localStorage
					localStorage.setItem("nationality", nationality);
				});
			});

			document.getElementById("backToSignIn").addEventListener("click", function(event) {
				event.preventDefault();
				window.location.href = "/";
			});
		</script>
	</body>

</html>
