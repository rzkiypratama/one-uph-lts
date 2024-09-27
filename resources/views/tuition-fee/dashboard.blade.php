<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/css/style.css" />
		<title>Application Status</title>
	</head>

	<body class="container mt-3">
		<div class="d-flex justify-content-between align-items-center mb-5 pt-3">
			<img src="/assets/uph-logo.png" alt="logo" class="uphlogo" />
			<div class="d-flex align-items-center gap-3">
				<span class="logout-button d-flex align-items-center gap-2">
					<p class="m-0">logout</p>
					<img src="/assets/signout-icon.png" alt="signout icon" class="logout-icon" />
				</span>
				<img src="/assets/bells.png" alt="notification icon" class="notification-icon" />
			</div>
		</div>

		<div class="rounded-3 dashboard-container bg-white p-5">
			<div class="d-flex justify-content-between">
				<div class="w-100 pe-4">
					<img src="/assets/idcard.png" alt="badge-id" class="badge-icon" />
					<p class="text-capitalize dashboard-welcome m-0 pt-2">welcome</p>
					<h3 class="dashboard-username">Kevin Saputra Siahaan</h3>
					<span class="d-flex justify-content-between align-items-center">
						<p class="text-uppercase dashboard-id">ID #123456</p>
					</span>

					<hr class="full-width-hr-wrapper-form" />

					<div class="row mb-4 pt-2">
						<span class="col-md-4">
							<p class="text-capitalize dashboard-title m-0">program</p>
							<p class="text-capitalize dashboard-subtitle m-0">Architecture</p>
						</span>

						<span class="col-md-8">
							<p class="text-capitalize dashboard-title m-0">Entry Option</p>
							<p class="text-capitalize dashboard-subtitle m-0">Regular Application</p>
						</span>
					</div>

					<div class="row">
						<span class="col-md-4">
							<p class="text-capitalize dashboard-title m-0">Campus</p>
							<p class="text-capitalize dashboard-subtitle m-0">Lippo Village Campus</p>
						</span>

						<span class="col-md-8">
							<p class="text-capitalize dashboard-title m-0">Entry Type</p>
							<p class="text-capitalize dashboard-subtitle m-0">Direct Admission</p>
						</span>
					</div>

					<hr class="full-width-hr-wrapper-form" />

					<p class="text-capitalize dashboard-bottom-title m-0 mb-3">application status</p>

					<div class="card rounded-3 border-0 bg-white p-3 shadow-sm">
						<div class="d-flex justify-content-between align-items-center">
							<p class="row-title m-0">Architecture</p>
							<p class="onreview-btn">on review</p>
						</div>

						<div class="d-flex justify-content-between fst-italic">
							<p class="tabs-subtitle m-0">Undergraduate (S1)</p>
						</div>

						<div class="d-flex gap-4">
							<p class="tabs-subtitle m-0">Form #9812739817283</p>
						</div>
					</div>
				</div>

				<div class="dashboard-box">
					<div class="card-dashboard border-0" style="background-image: url('/assets/student.jpeg'); height: 461px; width: 272px">
						<!-- Gradient Overlay -->
						<div class="gradient-overlay" style="background-image: linear-gradient(to top, #bcd1ff, #f1f1f122)" \></div>

						<!-- Title -->
						<div class="title-container w-100">
							<img src="/assets/toga copy.png" alt="icon" class="icon-form" />
							<h3 class="title-card-dashboard" style="color: #112369 !important; font-weight: 300 !important">Complete Tuition Fee Payment</h3>
							<button type="button" class="text-capitalize btn btn-danger w-100 dashboard-button mt-4 border-0" onclick="window.location.href = '/tuition-fee/tuitionpayment'">Upload Documents</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	</body>

</html>
