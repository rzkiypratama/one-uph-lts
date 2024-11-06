<!DOCTYPE html>
<html lang="en">

	<x-head title="Review" />

	<body class="container mt-3">
		<div class="d-flex justify-content-between align-items-center mb-md-5 px-3 pt-3">
			<img src="/assets/uph-logo.png" alt="logo" class="uphlogo" />
		</div>

		<div class="d-flex p-md-5 justify-content-md-center align-items-md-center homepage-container px-2 py-4">
			<!-- desktop view start -->
			<div class="card card-container card card-container d-flex justify-content-between p-md-5 p-3">
				<div class="d-md-flex justify-content-between box-item">
					<div class="d-flex flex-column justify-content-between">
						<div class="left-content">
							<p class="text-uppercase">step 3 of 9</p>
							<h3>Which study level are you interested in?</h3>
							<p class="children">Choose your study level</p>
							<hr class="solid" />
						</div>

						<div class="divider-items"></div>
					</div>

					<div class="d-flex flex-column card-box fade-in-right gap-3">
						<a href="/campus">
							<div class="card-studylevel border-0"
								style="background-image: url('/assets/studylevel1.png'); background-position: top">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(to top, #bcd1ff, #f1f1f122)" \>
								</div>

								<!-- Title -->
								<div class="title-container w-100">
									<!-- <img src="icon-url.png" alt="icon" class="icon"/> -->
									<h3 class="title w-100" style="color: #333333">Undergraduate (S1)</h3>
								</div>
							</div>
						</a>

						<a href="/campus">
							<div class="card-studylevel border-0"
								style="background-image: url('/assets/studylevel2.png'); background-position: top">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(to top, #bcd1ff, #f1f1f122)" \>
								</div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon"/> -->
									<h3 class="title w-100" style="color: #333333">Graduate (S2 & S3)</h3>
								</div>
							</div>
						</a>
					</div>
				</div>

				<span id="backToNationality" class="d-flex align-items-md-center cursor-pointer gap-2" role="button">
					<div class="d-none d-md-flex gap-2" onclick="window.location.href = '/international'">
						<img src="/assets/left-arrow.png" alt="arrow-left" />
						<p class="back-button">back to BIPA Selection</p>
					</div>

					<button type="button" class="d-md-none btn btn-back-responsive danger-button d-flex justify-content-center align-items-center mt-5 gap-2 px-5"
						onclick="window.location.href = '/international'"><img src="/assets/arrow-back-red.png"
							alt="arrow-left" class="arrow-left" />BIPA Selection</button>
				</span>
			</div>
			<!-- desktop view ends -->

		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
			crossorigin="anonymous"></script>
	</body>

</html>
