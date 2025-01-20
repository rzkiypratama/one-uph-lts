<!DOCTYPE html>
<html lang="en">

	<x-head title="Campus">
		<x-slot name="inlineCSS">
			<style>
				.card-container {
					overflow: scroll;
				}

				@media (min-width: 768px) {
					.card-container {
						overflow: visible;
					}
				}
			</style>
		</x-slot>
	</x-head>

	<body class="container mt-3">
		<div class="d-flex justify-content-between align-items-center mb-md-5 px-3 pt-3">
			<img src="/assets/uph-logo.png" alt="logo" class="uphlogo" />
		</div>

		<div class="d-flex p-md-5 justify-content-md-center align-items-md-center homepage-container px-2 py-4">
			<!-- desktop view start -->
			<div class="card card-container d-flex justify-content-between p-md-5 p-3">
				<div class="d-md-flex justify-content-between box-item">
					<div class="d-flex flex-column justify-content-between">
						<div class="left-content">
							<p class="text-uppercase">step 3 of 8</p>
							<h3>On which campus do you intend to study?</h3>
							<p class="children">Choose a campus</p>
							<hr class="solid" />
						</div>
					</div>

					<div class="campus-grid card-box fade-in-right">
						<a data-bs-toggle="modal" data-bs-target="#intakeYearOption">
							<div class="card-campus col border-0" style="background-image: url('/assets/lippocampus.jpeg');">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #bcd1ff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon"/> -->
									<h3 class="title" style="color: #333333">Lippo Village Campus</h3>
								</div>
							</div>
						</a>

						<a data-bs-toggle="modal" data-bs-target="#intakeYearOption">
							<div class="card-campus col border-0" style="background-image: url('/assets/surabayacampus.jpeg');">
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
							<div class="card-campus col border-0" style="background-image: url('/assets/medancampus.jpeg');">
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
							<div class="card-campus col border-0" style="background-image: url('/assets/medancampus.jpeg');">
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
							<div class="card-campus col border-0" style="background-image: url('/assets/lippocampus.jpeg');">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #bcd1ff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon"/> -->
									<h3 class="title" style="color: #333333">Plaza Semanggi EEC Campus</h3>
								</div>
							</div>
						</a>

						<a href="/fieldstudy">
							<div class="card-campus col border-0" style="background-image: url('/assets/lippocampus.jpeg');">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #bcd1ff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon"/> -->
									<h3 class="title" style="color: #333333">Plaza Semanggi EEC Campus</h3>
								</div>
							</div>
						</a>

						<a href="/fieldstudy">
							<div class="card-campus col border-0" style="background-image: url('/assets/lippocampus.jpeg');">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #bcd1ff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon"/> -->
									<h3 class="title" style="color: #333333">Plaza Semanggi EEC Campus</h3>
								</div>
							</div>
						</a>

						<a href="/fieldstudy">
							<div class="card-campus col border-0" style="background-image: url('/assets/lippocampus.jpeg');">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #bcd1ff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon"/> -->
									<h3 class="title" style="color: #333333">Plaza Semanggi EEC Campus</h3>
								</div>
							</div>
						</a>

						<a href="/fieldstudy">
							<div class="card-campus col border-0" style="background-image: url('/assets/lippocampus.jpeg');">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #bcd1ff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon"/> -->
									<h3 class="title" style="color: #333333">Plaza Semanggi EEC Campus</h3>
								</div>
							</div>
						</a>

						<a href="/fieldstudy">
							<div class="card-campus col border-0" style="background-image: url('/assets/lippocampus.jpeg');">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #bcd1ff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon"/> -->
									<h3 class="title" style="color: #333333">Plaza Semanggi EEC Campus</h3>
								</div>
							</div>
						</a>

						<a href="/fieldstudy">
							<div class="card-campus col border-0" style="background-image: url('/assets/lippocampus.jpeg');">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #bcd1ff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon"/> -->
									<h3 class="title" style="color: #333333">Plaza Semanggi EEC Campus</h3>
								</div>
							</div>
						</a>

						<a href="/fieldstudy">
							<div class="card-campus col border-0" style="background-image: url('/assets/lippocampus.jpeg');">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #bcd1ff, #f1f1f122)" \></div>

								<!-- Title -->
								<div class="title-container">
									<!-- <img src="icon-url.png" alt="icon" class="icon"/> -->
									<h3 class="title" style="color: #333333">Plaza Semanggi EEC Campus</h3>
								</div>
							</div>
						</a>

						<a href="/fieldstudy">
							<div class="card-campus col border-0" style="background-image: url('/assets/lippocampus.jpeg');">
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

				<span id="backToNationality" class="d-flex align-items-md-center btn-sign cursor-pointer gap-2" role="button">
					<div class="d-none d-md-flex gap-2" onclick="window.location.href = '/studylevel'">
						<img src="/assets/left-arrow.png" alt="arrow-left" />
						<p class="back-button p-0">back to Study Level</p>
					</div>

					<button type="button" class="d-md-none btn btn-back-responsive danger-button d-flex justify-content-center align-items-center mt-5 gap-2 px-5"
						onclick="window.location.href = '/studylevel'"><img
							src="/assets/arrow-back-red.png"
							alt="arrow-left" class="arrow-left" />back to Study Level</button>
				</span>
			</div>
			<!-- desktop view ends -->

			{{-- modal intake year start --}}
			<div class="modal fade" id="intakeYearOption" tabindex="-1" aria-labelledby="intakeYearOptionLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content text-center">
						<div class="modal-body modal-body-review-intakeyear">
							<img src="/assets/dates.png" class="img-fluid mb-3" alt="Success Image" />
							<!-- Replace with your image path -->
							<div>
								<p class="fs-4 review-modal-title">Select Intake Year</p>
								<p class="review-modal-subtitle d-flex flex-column align-items-center intake-year pt-2">Which Intake Year would you like to enroll?</p>
							</div>

							<div class="intake-year-option">
								<select class="form-select">
									<option value="Option 1">Option 1</option>
									<option value="Option 2">Option 2</option>
								</select>
							</div>

							<div class="d-flex justify-content-center intake-year-button mt-2 gap-3">
								<button type="button" class="btn btn-danger rounded-0 w-75">Continue</button>
							</div>

						</div>
					</div>
				</div>
			</div>
			{{-- modal intake year end --}}
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
		</script>
	</body>

</html>
