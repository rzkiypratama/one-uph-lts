<!DOCTYPE html>
<html lang="en">

	<x-head title="Program" />

	<body class="container mt-3">
		<div class="d-flex justify-content-between align-items-center mb-md-5 px-3 pt-3">
			<img src="/assets/uph-logo.png" alt="logo" class="uphlogo" />
		</div>

		<div class="d-flex p-md-5 justify-content-md-center align-items-md-center homepage-container px-2 py-4">
			<!-- desktop view start -->
			<div class="card card-container d-flex justify-content-between p-md-5 p-3">
				<div class="d-md-flex justify-content-between box-item">
					<div class="left-content mb-md-0 mb-3">
						<p class="text-uppercase">step 7 of 9</p>
						<h3>In which specific Program do you intend to apply?</h3>
						<p class="children">Choose a program</p>
						<hr class="solid" />
						<span class="d-flex flex-column gap-2">
							<p class="badge">Arts & Social Sciences</p>
							<p class="badge">Design</p>
						</span>
					</div>

					<div>
						<div>
							<p class="search-title p-2">search program:</p>
							<div class="search-box">
								<input type="text" class="search-input" placeholder="Search..">

								<button class="search-button">
									<img src="/assets/search-icon.png" alt="search icon">
								</button>
							</div>
						</div>

						<div class="program-grid card-box fade-in-right" id="programGrid">

							<div class="card-program border-0" style="background-image: url('/assets/design-img.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Graphic Design</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/productdesign.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Product Design</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/digitalart.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Digital Arts</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/interiordesign-img.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Interior Design</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/movie.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Film</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/Architectures.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Architecture</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/design-img.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Graphic Design</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/productdesign.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Product Design</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/digitalart.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Digital Arts</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/interiordesign-img.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Interior Design</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/movie.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Film</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/Architectures.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Architecture</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/movie.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Film</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/Architectures.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Architecture</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/design-img.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Graphic Design</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/productdesign.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Product Design</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/digitalart.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Digital Arts</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/interiordesign-img.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Interior Design</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/movie.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Film</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/Architectures.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Architecture</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/movie.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Film</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/Architectures.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Architecture</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/design-img.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Graphic Design</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/productdesign.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Product Design</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/digitalart.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Digital Arts</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/interiordesign-img.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Interior Design</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/movie.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Film</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/Architectures.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Architecture</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/movie.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Film</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/Architectures.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Architecture</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/design-img.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Graphic Design</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/productdesign.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Product Design</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/digitalart.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Digital Arts</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/interiordesign-img.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Interior Design</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/movie.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Film</h3>
								</div>
							</div>

							<div class="card-program border-0" style="background-image: url('/assets/Architectures.png');" data-bs-toggle="modal" data-bs-target="#modal">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(5deg, #407bff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
									<h3 class="title w-100" style="color: #fff !important">Architecture</h3>
								</div>
							</div>


						</div>

						<div class="scroll-event">
							<button id="scrollDownButton" class="w-100"><i class="fa-solid fa-chevron-down" style="color: #7AA3FF;"></i></button>
						</div>
					</div>
				</div>

				<span class="d-flex align-items-md-center cursor-pointer gap-2" role="button">
					<div class="d-none d-md-flex gap-2" onclick="window.location.href = '/programmajor'">
						<img src="/assets/left-arrow.png" alt="arrow-left" />
						<p class="back-button p-0">back to Faculty Selection</p>
					</div>

					<button type="button" class="d-md-none btn btn-back-responsive danger-button d-flex justify-content-center align-items-center mt-5 gap-2 px-5"
						onclick="window.location.href = '/programmajor'"><img src="/assets/arrow-back-red.png"
							alt="arrow-left" class="arrow-left" />back to Faculty</button>
				</span>
			</div>
			<!-- desktop view ends -->
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
											<div class="gradient-overlay" style="background-image: linear-gradient(30deg, #407bff, #f1f1f122)" \></div>
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
		<script type="text/javascript" src="{{ asset('js/scrollEvent.js') }}"></script>
		<script>
			const myModal = document.getElementById("myModal");
			const myInput = document.getElementById("myInput");

			myModal.addEventListener("shown.bs.modal", () => {
				myInput.focus();
			});
		</script>
	</body>

</html>
