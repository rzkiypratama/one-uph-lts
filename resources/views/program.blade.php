<!DOCTYPE html>
<html lang="en">

	<x-head title="Program" />

	<body class="container">
		<!-- header -->
		<img src="/assets/uph-logo.png" alt="logo" class="uphlogo position-absolute d-none d-md-block pt-5" />

		<div class="d-flex p-md-5 justify-content-md-center align-items-md-center vh-100 homepage-container px-2 py-4">
			<!-- desktop view start -->
			<div class="card card-container d-none d-md-block p-5">
				<div class="d-flex justify-content-between box-item">
					<div class="left-content">
						<p class="text-uppercase">step 6 of 8</p>
						<h3>In which specific Program do you intend to apply?</h3>
						<p class="children">Choose a program</p>
						<hr class="solid" />
						<span class="d-flex flex-column gap-2">
							<p class="badge">Arts & Social Sciences</p>
							<p class="badge">Design</p>
						</span>
					</div>

					<div class="campus-grid card-box">
						<div class="card-nationality border-0" style="background-image: url('/assets/design.jpeg'); height: 128px; width: 298px" data-bs-toggle="modal" data-bs-target="#modal">
							<!-- Gradient Overlay -->
							<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #bcd1ff, #f1f1f122)" \></div>

							<!-- Title -->
							<div class="title-container">
								<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
								<h3 class="title w-100" style="color: #333333">Graphic Design</h3>
							</div>
						</div>

						<div class="card-nationality border-0" style="background-image: url('/assets/productdesign.png'); height: 128px; width: 298px" data-bs-toggle="modal" data-bs-target="#modal">
							<!-- Gradient Overlay -->
							<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #bcd1ff, #f1f1f122)" \></div>

							<!-- Title -->
							<div class="title-container">
								<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
								<h3 class="title w-100" style="color: #333333">Product Design</h3>
							</div>
						</div>

						<div class="card-nationality border-0" style="background-image: url('/assets/digitalart.jpeg'); height: 128px; width: 298px" data-bs-toggle="modal" data-bs-target="#modal">
							<!-- Gradient Overlay -->
							<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #bcd1ff, #f1f1f122)" \></div>

							<!-- Title -->
							<div class="title-container">
								<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
								<h3 class="title w-100" style="color: #333333">Digital Arts</h3>
							</div>
						</div>

						<div class="card-nationality border-0" style="background-image: url('/assets/interiordesign.jpeg'); height: 128px; width: 298px" data-bs-toggle="modal" data-bs-target="#modal">
							<!-- Gradient Overlay -->
							<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #bcd1ff, #f1f1f122)" \></div>

							<!-- Title -->
							<div class="title-container">
								<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
								<h3 class="title w-100" style="color: #333333">Interior Design</h3>
							</div>
						</div>

						<div class="card-nationality border-0" style="background-image: url('/assets/movie.png'); height: 128px; width: 298px" data-bs-toggle="modal" data-bs-target="#modal">
							<!-- Gradient Overlay -->
							<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #bcd1ff, #f1f1f122)" \></div>

							<!-- Title -->
							<div class="title-container">
								<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
								<h3 class="title w-100" style="color: #333333">Film</h3>
							</div>
						</div>

						<div class="card-nationality border-0" style="background-image: url('/assets/arcitecture.png'); height: 128px; width: 298px" data-bs-toggle="modal" data-bs-target="#modal">
							<!-- Gradient Overlay -->
							<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #bcd1ff, #f1f1f122)" \></div>

							<!-- Title -->
							<div class="title-container">
								<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
								<h3 class="title w-100" style="color: #333333">Architecture</h3>
							</div>
						</div>
					</div>
				</div>

				<span class="d-flex align-items-md-center btn-sign cursor-pointer gap-2" role="button" id="backToNationality" onclick="window.location.href = '/programmajor'">
					<img src="/assets/left-arrow.png" alt="arrow-left" />
					<p class="back-button p-0">back to Faculty Selection</p>
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

					<span class="text-white" onclick="window.location.href = '/programmajor'">
						<p class="mobile-title">Step 6 of 8</p>
						<p class="mobile-subtitle">Program</p>
					</span>
				</div>

				<div class="card rounded-4 middle-content p-3">
					<div class="left-content">
						<h3>In which specific Program do you intend to apply?</h3>
						<p class="children">Choose a program</p>
						<p class="badge">Arts & Social Sciences</p>
						<p class="badge">Design</p>
						<hr class="solid" />
					</div>

					<div class="bagian-bawah d-flex flex-column justify-content-between h-100 overflow-scroll">
						<div class="campus-grid card-box">
							<div class="card-nationality border-0" style="background-image: url('/assets/design.jpeg'); height: 80px; width: auto" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #bcd1ff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #333333">Graphic Design</h3>
								</div>
							</div>

							<div class="card-nationality border-0" style="background-image: url('/assets/productdesign.png'); height: 80px; width: auto" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #bcd1ff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #333333">Product Design</h3>
								</div>
							</div>

							<div class="card-nationality border-0" style="background-image: url('/assets/digitalart.jpeg'); height: 80px; width: auto" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #bcd1ff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #333333">Digital Arts</h3>
								</div>
							</div>

							<div class="card-nationality border-0" style="background-image: url('/assets/interiordesign.jpeg'); height: 80px; width: auto" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #bcd1ff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #333333">Interior Design</h3>
								</div>
							</div>

							<div class="card-nationality border-0" style="background-image: url('/assets/movie.png'); height: 80px; width: auto" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #bcd1ff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #333333">Film</h3>
								</div>
							</div>

							<div class="card-nationality border-0" style="background-image: url('/assets/arcitecture.png'); height: 80px; width: auto" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #bcd1ff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #333333">Architecture</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- mobile view ends -->
		</div>

		<!-- MODAL -->
		<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true" data-bs-backdrop="static">
			<div class="modal-dialog modal-dialog-centered modal-xl">
				<div class="modal-content">
					<!-- Custom close button (top left) -->
					<img src="/assets/close.webp" class="custom-close" data-bs-dismiss="modal" aria-label="Close" />
					<div class="modal-body" style="height: max-content">
						<div>
							<div class="w-100">
								<div class="d-flex flex-column flex-md-row gap-4">
									<div>
										<div class="card-programmodal border-0" data-bs-toggle="modal" data-bs-target="#modal">
											<!-- Gradient Overlay -->
											<div class="gradient-overlay" style="background-image: linear-gradient(30deg, #bcd1ff, #f1f1f122)" \></div>
										</div>
									</div>

									<div class="kanan w-md-75">
										<!-- header -->
										<span class="d-flex justify-content-between align-items-center mb-3 pt-2">
											<h3 class="program-title m-0">Architecture</h3>
											<p class="badge m-0">Design</p>
										</span>
										<!-- description -->
										<p class="program-description">
											UPH Architecture program provides students with the fundamental artistic, scientific and humanistic disciplines for building design. Our curriculum is designed to provide a comprehensive
											education
											and pre-professional competence that enables entry-level employment in architecture and design fields while preparing undergraduates for further studies.
										</p>
										<hr class="solid-modal" />

										<div class="row program-content-row">
											<span class="col-6">
												<p class="program-subtitle">regular degree</p>
												<p class="sub-program-top">Sarjana Arsitektur (S. Ars.)</p>
											</span>
											<span class="col-6">
												<p class="program-subtitle">study duration</p>
												<p class="sub-program-top">4 years</p>
											</span>
											<span class="col-12 w-75 mt-4">
												<p class="program-subtitle">career opportunities</p>
												<ul class="sub-program">
													<li>Architecture Consultant</li>
													<li>Architectural Technologist</li>
													<li>Urban Planner</li>
													<li>Spatial Designer</li>
													<li>Construction Manager</li>
												</ul>
											</span>
										</div>
										<hr class="solid-modal" />

										<div class="kanan d-flex justify-content-between">
											<button type="button" class="btn link back-program-btn d-none d-md-block" data-bs-dismiss="modal">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
													<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" stroke="#FF5351" />
												</svg>
												back
											</button>
											<button type="button" class="btn select-program-btn rounded-0 d-none d-md-block px-5 text-white">
												<a href="/personalinformation" class="a-program">select this program
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
														<path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" stroke="#FFF" />
													</svg></a>
											</button>
											<button type="button" class="btn select-program-btn rounded-0 w-100 d-md-none px-5 text-white">
												<a href="/personalinformation" class="a-program">select this program
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
														<path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" stroke="#FFF" />
													</svg></a>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
		</script>
		<script>
			const myModal = document.getElementById("myModal");
			const myInput = document.getElementById("myInput");

			myModal.addEventListener("shown.bs.modal", () => {
				myInput.focus();
			});
		</script>
	</body>

</html>
