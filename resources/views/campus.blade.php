<!DOCTYPE html>
<html lang="en">

	<x-head title="Campus" />

	<body class="container">
		<!-- header -->
		<img src="/assets/uph-logo.png" alt="logo" class="uphlogo position-absolute d-none d-md-block pt-5" />

		<div class="d-flex p-md-5 justify-content-md-center align-items-md-center vh-100 homepage-container px-2 py-4">
			<!-- desktop view start -->
			<div class="card card-container d-none d-md-block p-5">
				<div class="d-flex justify-content-between box-item">
					<div class="d-flex flex-column justify-content-between">
						<div class="left-content">
							<p class="text-uppercase">step 3 of 8</p>
							<h3>On which campus do you intend to study?</h3>
							<p class="children">Choose a campus</p>
							<hr class="solid" />
						</div>

						<div class="divider-items"></div>

						<span id="backToNationality" class="d-flex align-items-md-center cursor-pointer gap-2" role="button">
							<img src="/assets/left-arrow.png" alt="arrow-left" />
							<p class="back-button">back to Program Selection</p>
						</span>
					</div>

					<div class="campus-grid card-box">
						<a href="/fieldstudy">
							<div class="card-nationality col border-0" style="background-image: url('/assets/lippocampus.jpeg'); height: 128px; width: 272px">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #bcd1ff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon"/> -->
									<h3 class="title" style="color: #333333">Lippo Village Campus</h3>
								</div>
							</div>
						</a>

						<a href="/fieldstudy">
							<div class="card-nationality col border-0" style="background-image: url('/assets/surabayacampus.jpeg'); height: 128px; width: 272px">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #bcd1ff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon"/> -->
									<h3 class="title" style="color: #333333">Surabaya Campus</h3>
								</div>
							</div>
						</a>

						<a href="/fieldstudy">
							<div class="card-nationality col border-0" style="background-image: url('/assets/medancampus.jpeg'); height: 128px; width: 272px">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #bcd1ff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon"/> -->
									<h3 class="title" style="color: #333333">Medan Campus</h3>
								</div>
							</div>
						</a>

						<a href="/fieldstudy">
							<div class="card-nationality col border-0" style="background-image: url('/assets/medancampus.jpeg'); height: 128px; width: 272px">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #bcd1ff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon"/> -->
									<h3 class="title" style="color: #333333">Plaza Semanggi Campus</h3>
								</div>
							</div>
						</a>

						<a href="/fieldstudy">
							<div class="card-nationality col border-0" style="background-image: url('/assets/lippocampus.jpeg'); height: 128px; width: 272px">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #bcd1ff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon"/> -->
									<h3 class="title" style="color: #333333">Plaza Semanggi EEC Campus</h3>
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

					<span class="text-white" onclick="window.location.href = '/studylevel'">
						<p class="mobile-title">Step 3 of 8</p>
						<p class="mobile-subtitle">Campus</p>
					</span>
				</div>

				<div class="card rounded-4 middle-content p-3">
					<div class="left-content">
						<h3>On which campus do you intend to study?</h3>
						<p class="children">Choose a campus</p>
						<hr class="solid" />
					</div>

					<div class="bagian-bawah d-flex flex-column justify-content-between h-100 overflow-y-scroll">
						<div class="campus-grid card-box">
							<a href="/fieldstudy">
								<div class="card-nationality col border-0" style="background-image: url('/assets/lippocampus.jpeg'); height: 100px; width: auto">
									<!-- Gradient Overlay -->
									<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #bcd1ff, #f1f1f122)" \></div>

									<!-- Title -->
									<div class="title-container">
										<!-- <img src="icon-url.png" alt="icon" class="icon"/> -->
										<h3 class="title" style="color: #333333">Lippo Village Campus</h3>
									</div>
								</div>
							</a>

							<a href="/fieldstudy">
								<div class="card-nationality col border-0" style="background-image: url('/assets/surabayacampus.jpeg'); height: 100px; width: auto">
									<!-- Gradient Overlay -->
									<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #bcd1ff, #f1f1f122)" \></div>

									<!-- Title -->
									<div class="title-container">
										<!-- <img src="icon-url.png" alt="icon" class="icon"/> -->
										<h3 class="title" style="color: #333333">Surabaya Campus</h3>
									</div>
								</div>
							</a>

							<a href="/fieldstudy">
								<div class="card-nationality col border-0" style="background-image: url('/assets/medancampus.jpeg'); height: 100px; width: auto">
									<!-- Gradient Overlay -->
									<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #bcd1ff, #f1f1f122)" \></div>

									<!-- Title -->
									<div class="title-container">
										<!-- <img src="icon-url.png" alt="icon" class="icon"/> -->
										<h3 class="title" style="color: #333333">Medan Campus</h3>
									</div>
								</div>
							</a>

							<a href="/fieldstudy">
								<div class="card-nationality col border-0" style="background-image: url('/assets/medancampus.jpeg'); height: 100px; width: auto">
									<!-- Gradient Overlay -->
									<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #bcd1ff, #f1f1f122)" \></div>

									<!-- Title -->
									<div class="title-container">
										<!-- <img src="icon-url.png" alt="icon" class="icon"/> -->
										<h3 class="title" style="color: #333333">Plaza Semanggi Campus</h3>
									</div>
								</div>
							</a>

							<a href="/fieldstudy">
								<div class="card-nationality col border-0" style="background-image: url('/assets/lippocampus.jpeg'); height: 100px; width: auto">
									<!-- Gradient Overlay -->
									<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #bcd1ff, #f1f1f122)" \></div>

									<!-- Title -->
									<div class="title-container">
										<!-- <img src="icon-url.png" alt="icon" class="icon"/> -->
										<h3 class="title" style="color: #333333">Plaza Semanggi EEC Campus</h3>
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
				window.location.href = "/studylevel";
			});
		</script>
	</body>

</html>
