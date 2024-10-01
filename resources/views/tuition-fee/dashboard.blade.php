<!DOCTYPE html>
<html lang="en">

	<x-head title="Tuition Fee" />

	<body class="container mt-3">
		<div class="d-flex justify-content-between align-items-center mb-5 pt-3">
			<img src="/assets/uph-logo.png" alt="logo" class="uphlogo" />
			<div class="d-flex align-items-center gap-3">
				<span class="logout-button d-flex align-items-center gap-2">
					<p class="d-md-block d-none m-0 m-0">logout</p>
					<img src="/assets/signout-icon.png" alt="signout icon" class="logout-icon" />
				</span>
				<img src="/assets/bells.png" alt="notification icon" class="notification-icon" />
			</div>
		</div>

		<!-- mobile layout -->
		<div class="d-md-none d-block mb-3 px-2">
			<p class="text-capitalize dashboard-welcome m-0">welcome</p>
			<h3 class="dashboard-username">Kevin Saputra Siahaan</h3>
			<span class="d-flex justify-content-between align-items-center">
				<p class="text-uppercase dashboard-id">ID #123456</p>
				<button type="button" class="btn btn-outline-primary dashboard-edit">edit profile</button>
			</span>
		</div>
		<!-- mobile layout -->

		<div class="p-md-5 rounded-3 dashboard-container bg-white p-3">
			<div class="d-flex justify-content-between">
				<div class="w-100 pe-md-4">
					<!-- desktop layout -->
					<div class="d-none d-md-block">
						<img src="/assets/idcard.png" alt="badge-id" class="badge-icon" />
						<p class="text-capitalize dashboard-welcome m-0 pt-2">welcome</p>
						<h3 class="dashboard-username">Kevin Saputra Siahaan</h3>
						<span class="d-flex justify-content-between align-items-center">
							<p class="text-uppercase dashboard-id">ID #123456</p>
						</span>
					</div>

					<hr class="full-width-hr-wrapper-form d-none d-md-block" />

					<div class="d-none d-md-block">
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
					</div>

					<hr class="full-width-hr-wrapper-form d-none d-md-block" />

					<p class="text-capitalize dashboard-bottom-title d-none d-md-block m-0 mb-3">application status</p>

					<div class="card rounded-3 d-none d-md-block border-0 bg-white p-3 shadow-sm">
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
					<!-- desktop layout -->

					<!-- mobile layout start -->
					<div class="mobile-dashboard rounded-4 d-md-none p-4">
						<img src="/assets/togas.png" alt="togas" class="togas-icon" />
						<p class="title-dashboard-mobile">Hello World!</p>
						<p class="subtitle-dashboard-mobile">This is your <strong>Student Online Application Account.</strong> You can submit a new application from here.</p>
						<button type="button" class="text-capitalize btn btn-danger w-100 dashboard-button mt-3 border-0" onclick="window.location.href = '/tuition-fee/tuitionpayment'">Upload Documents</button>
					</div>

					<hr class="full-width-hr-wrapper-form d-md-none" />

					<!-- mobile collapse start -->
					<div class="d-md-none">
						<div class="accordion" id="accordionExample">
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Student Informations</button>
								</h2>
								<div id="collapseOne" class="accordion-collapse show collapse" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<div class="row pt-2">
											<span class="col-md-4 mb-2">
												<p class="text-capitalize dashboard-title m-0">program</p>
												<p class="text-capitalize dashboard-subtitle m-0">Architecture</p>
											</span>

											<span class="col-md-4 mb-2">
												<p class="text-capitalize dashboard-title m-0">Entry Option</p>
												<p class="text-capitalize dashboard-subtitle m-0">Regular Application</p>
											</span>
										</div>

										<div class="row">
											<span class="col-md-4 mb-2">
												<p class="text-capitalize dashboard-title m-0">Campus</p>
												<p class="text-capitalize dashboard-subtitle m-0">Lippo Village Campus</p>
											</span>

											<span class="col-md-4">
												<p class="text-capitalize dashboard-title m-0">Entry Type</p>
												<p class="text-capitalize dashboard-subtitle m-0">Direct Admission</p>
											</span>
										</div>
									</div>
								</div>
							</div>
							<hr class="full-width-hr-wrapper-form d-md-none" />

							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Application
										Status</button>
								</h2>
								<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
									<div class="accordion-body px-0 pb-2">
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
								</div>
							</div>
						</div>
					</div>
					<!-- mobile collapse ends -->

					<!-- mobile layout ends -->
				</div>

				<div class="dashboard-box d-none d-md-block">
					<div class="card-dashboard border-0" style="background-image: url('/assets/student.jpeg'); height: 461px; width: 272px">
						<!-- Gradient Overlay -->
						<div class="gradient-overlay" style="background-image: linear-gradient(to top, #bcd1ff, #f1f1f122)" \></div>

						<!-- Title -->
						<div class="title-container w-100">
							<img src="/assets/toga copy.png" alt="icon" class="icon-form" />
							<h3 class="title-card-dashboard" style="color: #112369 !important; font-weight: 300 !important">Complete Tuition Fee Payment</h3>
							<button type="button" class="text-capitalize btn btn-danger w-100 dashboard-button mt-4 border-0" onclick="window.location.href = '/tuition-fee/tuitionpayment'">Upload
								Documents</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	</body>

</html>
