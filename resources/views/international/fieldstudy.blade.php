<!DOCTYPE html>
<html lang="en">

	<x-head title="Field Study" />

	<body class="container mt-3">
		<div class="d-flex justify-content-between align-items-center mb-md-5 px-3 pt-3">
			<img src="/assets/uph-logo.png" alt="logo" class="uphlogo" />
		</div>

		<div class="d-flex p-md-5 justify-content-md-center align-items-md-center homepage-container px-2 py-4">
			<!-- desktop view start -->
			<div class="card card-container d-flex justify-content-between p-md-5 p-3">
				<div class="d-md-flex justify-content-between box-item">
					<div class="d-flex flex-column">
						<div class="left-content">
							<p class="text-uppercase">step 4 of 8</p>
							<h3>In which College do you intend to study?</h3>
							<p class="children">Choose a College Cluster</p>
							<hr class="solid" />
						</div>
					</div>

					<div class="campus-grid card-box fade-in-right">
						<a href="/programmajor">
							<div class="card-fieldstudy col border-0" style="background-image: url('/assets/businesstech.jpeg'); ">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #1c75bc, #1c75bc55)" \></div>

								<!-- Title -->
								<div class="title-container">
									<img src="/assets/bistech-icon.png" alt="icon" class="icon" />
									<h3 class="title" style="color: #fff !important">Business & Technology</h3>
								</div>
							</div>
						</a>

						<a href="/programmajor">
							<div class="card-fieldstudy col border-0" style="background-image: url('/assets/nurse.png'); ">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #ffc841, #ffc84155)" \></div>

								<!-- Title -->
								<div class="title-container">
									<img src="/assets/education-icon.png" alt="icon" class="icon" />
									<h3 class="title" style="color: #fff !important">Nursing & Education</h3>
								</div>
							</div>
						</a>

						<a href="/programmajor">
							<div class="card-fieldstudy col border-0" style="background-image: url('/assets/healthscience.png'); ">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #00a79d, #00a79d55)" \></div>

								<!-- Title -->
								<div class="title-container">
									<img src="/assets/health-icons.png" alt="icon" class="icon" />
									<h3 class="title" style="color: #fff !important">Health Sciences</h3>
								</div>
							</div>
						</a>

						<a href="/programmajor">
							<div class="card-fieldstudy col border-0" style="background-image: url('/assets/art.png'); ">
								<!-- Gradient Overlay -->
								<div class="gradient-overlay" style="background-image: linear-gradient(60deg, #d7182c, #d7182c55)" \></div>

								<!-- Title -->
								<div class="title-container">
									<img src="/assets/art-icon.png" alt="icon" class="icon" />
									<h3 class="title" style="color: #fff !important">Arts & Social Sciences</h3>
								</div>
							</div>
						</a>
					</div>
				</div>

				<span class="d-flex align-items-md-center btn-sign cursor-pointer gap-2" role="button">
					<div class="d-none d-md-flex gap-2" onclick="window.location.href = '/campus'">
						<img src="/assets/left-arrow.png" alt="arrow-left" />
						<p class="back-button p-0">back to Campus</p>
					</div>

					<button type="button" class="d-md-none btn btn-back-responsive danger-button d-flex justify-content-center align-items-center mt-5 gap-2 px-5" onclick="window.location.href = '/campus'"><img
							src="/assets/arrow-back-red.png"
							alt="arrow-left" class="arrow-left" />back to Campus</button>
				</span>
			</div>
			<!-- desktop view ends -->
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
		</script>
	</body>

</html>
