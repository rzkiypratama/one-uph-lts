<!DOCTYPE html>
<html lang="en">

	<x-head title="Nationality" />

	<body class="container mt-3">
		<div class="d-flex justify-content-between align-items-center mb-md-5 px-3 pt-3">
			<img src="/assets/uph-logo.png" alt="logo" class="uphlogo" />
		</div>

		<div class="d-flex p-md-5 justify-content-md-center align-items-md-center homepage-container px-2 py-4">
			<!-- desktop view start -->
			<div class="card card-container d-none d-md-block p-5">
				<div class="d-flex justify-content-between box-item">
					<div class="left-content">
						<p class="text-uppercase">step 1 of 8</p>
						<h3>Are you Indonesian or International Student?</h3>
						<p class="children">Choose your nationality</p>
						<hr class="solid" />
					</div>

					<div class="d-flex card-box gap-3">
						<a href="/studylevel" class="nationality" data-nationality="National">
							<div class="card-nationality fade-in-right border-0" style="background-image: url('/assets/student.jpeg'); height: 402px; width: 272px">
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
							<div class="card-nationality fade-in-right border-0" style="background-image: url('/assets/international-student.png'); height: 402px; width: 272px">
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
					<img src="/assets/left-arrow.png" alt="arrow-left" />
					<p class="back-button p-0">back to Sign In</p>
				</span>
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

					<span class="text-white" onclick="window.location.href = '/'">
						<p class="mobile-title">Step 1 of 8</p>
						<p class="mobile-subtitle">Nationality</p>
					</span>
				</div>

				<div class="card rounded-4 middle-content p-3">
					<div class="left-content">
						<h3>Are you Indonesian or International Student?</h3>
						<p class="children">Choose your nationality</p>
						<hr class="solid" />
					</div>

					<div class="bagian-bawah d-flex flex-column justify-content-between h-100">
						<div class="d-flex flex-column card-box gap-3">
							<a href="/studylevel" class="nationality" data-nationality="National">
								<div class="card-nationality fade-in-right border-0" style="background-image: url('/assets/student.jpeg'); height: 180px; width: auto; background-position: top">
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
								<div class="card-nationality fade-in-right border-0" style="background-image: url('/assets/international-student.png'); height: 180px; width: auto; background-position: top">
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
				</div>
			</div>
			<!-- mobile view ends -->
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
