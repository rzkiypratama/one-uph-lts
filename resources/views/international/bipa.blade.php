<!DOCTYPE html>
<html lang="en">

	<x-head title="BIPA" />

	<body class="container">
		<!-- header -->
		<img src="/assets/uph-logo.png" alt="logo" class="uphlogo position-absolute d-none d-md-block pt-5" />

		<div class="d-flex p-md-5 justify-content-md-center align-items-md-center vh-100 homepage-container px-2 py-4">
			<!-- desktop view start -->
			<div class="card card-container d-none d-md-block p-5">
				<div class="d-flex justify-content-between box-item">
					<div class="d-flex flex-column justify-content-between">
						<div class="left-content">
							<p class="text-uppercase">step 2 of 9</p>
							<h3>Do You Have BIPA?</h3>
							<p class="children">BIPA (Bahasa Indonesia untuk Penutur Asing)</p>
							<p class="children">Do you have a certificate in the Indonesian language?</p>
							<hr class="solid" />
						</div>

						<div class="divider-item"></div>

						<span class="d-flex align-items-md-center cursor-pointer gap-2" role="button" id="backToNationality">
							<img src="/assets/left-arrow.png" alt="arrow-left" />
							<p class="back-button">back to Student Nationality</p>
						</span>
					</div>

					<div class="d-flex flex-column card-box gap-3">
						<a href="/international/studylevel">
							<div class="card-nationality border-0" style="background-image: url('/assets/studylevel1.png'); height: 133px; width: 558px; background-position: top">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(to top, #bcd1ff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container w-100">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #333333">Yes, I Have</h3>
								</div>
							</div>
						</a>

						<a href="/international/studylevel">
							<div class="card-nationality border-0" style="background-image: url('/assets/studylevel2.png'); height: 133px; width: 558px; background-position: top">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(to top, #bcd1ff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #333333">No, I Don't</h3>
								</div>
							</div>
						</a>
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

					<span class="text-white" onclick="window.location.href = '/nationality'">
						<p class="mobile-title">Step 2 of 9</p>
						<p class="mobile-subtitle">BIPA</p>
					</span>
				</div>

				<div class="card rounded-4 middle-content p-3">
					<div class="left-content">
						<h3>Do You Have BIPA?</h3>
						<p class="children">BIPA (Bahasa Indonesia untuk Penutur Asing)</p>
						<p class="children">Do you have a certificate in the Indonesian language?</p>
						<hr class="solid" />
					</div>

					<div class="bagian-bawah d-flex flex-column justify-content-between h-100">
						<div class="d-flex flex-column card-box gap-3">
							<a href="/international/campus">
								<div class="card-nationality border-0" style="background-image: url('/assets/studylevel1.png'); height: 180px; width: auto; background-position: top">
									<!-- Gradient Overlay -->
									<div class="gradient-overlay" style="background-image: linear-gradient(to top, #bcd1ff, #f1f1f122)" \></div>

									<!-- Title -->
									<div class="title-container w-100">
										<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
										<h3 class="title w-100" style="color: #333333">Yes, I Have</h3>
									</div>
								</div>
							</a>

							<a href="/international/studylevel">
								<div class="card-nationality border-0" style="background-image: url('/assets/studylevel2.png'); height: 180px; width: auto; background-position: top">
									<!-- Gradient Overlay -->
									<div class="gradient-overlay" style="background-image: linear-gradient(to top, #bcd1ff, #f1f1f122)" \></div>

									<!-- Title -->
									<div class="title-container">
										<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
										<h3 class="title w-100" style="color: #333333">No, I Don't</h3>
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
			document.getElementById("backToNationality").addEventListener("click", function(event) {
				event.preventDefault();
				window.location.href = "/nationality";
			});
		</script>
	</body>

</html>
