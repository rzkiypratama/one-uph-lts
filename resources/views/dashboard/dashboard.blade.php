<!DOCTYPE html>
<html lang="en">

	<x-head title="Dashboard">
		<x-slot name="inlineCSS">
			<style>
				.vertical-dividers {
					border-left: 2px solid #333;
					height: 100%;
				}

				.e-code-input {
					width: 100%;
					letter-spacing: 0.2em;
				}

				.success-message {
					display: none;
					color: green;
					margin-top: 10px;
				}

				.error-message {
					display: none;
					color: red;
					margin-top: 10px;
				}

				.modal-body img {
					width: 100px;
					height: 100px;
				}

				.modal-body h5 {
					margin-top: 20px;
					font-size: 1.5rem;
					color: #333;
				}

				.proceed-btn {
					margin-top: 20px;
				}

				/* .modal-content {
								width: 80% !important;
						} */
			</style>
		</x-slot>
	</x-head>

	<body class="container mt-3">
		<div class="d-flex justify-content-between align-items-center mb-md-5 mb-3 pt-3">
			<img src="/assets/uph-logo.png" alt="logo" class="uphlogo" />
			<div class="d-flex align-items-center gap-3">
				<span class="logout-button d-flex align-items-center gap-2">
					<p class="d-md-block d-none m-0">dashboard</p>
					<img src="/assets/signout-icon.png" alt="signout icon" class="logout-icon d-block d-md-none" />
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
			<div class="d-flex justify-content-between align-items-center">
				<div class="w-100 pe-md-4">
					<!-- desktop layout -->
					<div class="d-none d-md-block">
						<img src="/assets/idcard.png" alt="badge-id" class="badge-icon" />
						<p class="text-capitalize dashboard-welcome m-0 pt-2">welcome</p>
						<h3 class="dashboard-username">Kevin Saputra Siahaan</h3>
						<span class="d-flex justify-content-between align-items-end">
							<p class="text-uppercase dashboard-id">ID #123456</p>
							<button type="button" class="btn btn-outline-primary dashboard-edit px-4">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
									<path
										d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325" />
								</svg>
								edit profile
							</button>
						</span>
						<hr class="full-width-hr-wrapper-form" />

						<div class="row mb-4 pt-2">
							<span class="col-md-4">
								<p class="text-capitalize dashboard-title m-0">study category</p>
								<p class="text-capitalize dashboard-subtitle m-0">Undergraduate (S1)</p>
							</span>

							<span class="col-md-4">
								<p class="text-capitalize dashboard-title m-0">program</p>
								<p class="text-capitalize dashboard-subtitle m-0">Architecture</p>
							</span>

							<span class="col-md-4">
								<p class="text-capitalize dashboard-title m-0">Entry Option</p>
								<p class="text-capitalize dashboard-subtitle m-0">Regular Application</p>
							</span>
						</div>

						<div class="row">
							<span class="col-md-4">
								<p class="text-capitalize dashboard-title m-0">Campus</p>
								<p class="text-capitalize dashboard-subtitle m-0">Lippo Village Campus</p>
							</span>

							<span class="col-md-4">
								<p class="text-capitalize dashboard-title m-0">Campus</p>
								<p class="text-capitalize dashboard-subtitle m-0">Lippo Village Campus</p>
							</span>

							<span class="col-md-4">
								<p class="text-capitalize dashboard-title m-0">Entry Type</p>
								<p class="text-capitalize dashboard-subtitle m-0">Direct Admission</p>
							</span>
						</div>
						<hr class="full-width-hr-wrapper-form" />

						<p class="text-capitalize dashboard-bottom-title m-0">application status</p>
						<div class="d-grid mt-2 gap-2">
							<p class="badge fw-medium m-0">Your current application status is <span class="fw-semibold">Registered</span></p>
							<p class="badge fw-medium m-0">Your next step is <span class="fw-semibold">Buy a Registration Form</span></p>
						</div>
					</div>

					<!-- mobile layout start -->
					<div class="mobile-dashboard rounded-4 d-md-none p-4">
						<img src="/assets/togas.png" alt="togas" class="togas-icon" />
						<p class="title-dashboard-mobile">Hello World!</p>
						<p class="subtitle-dashboard-mobile">This is your <strong>Student Online Application Account.</strong> You can submit a new application from here.</p>
						<button type="button" class="text-capitalize btn btn-danger w-100 dashboard-button mt-3 border-0" data-bs-toggle="modal" data-bs-target="#ecodeModal">buy new form</button>
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
										<div class="row mb-4 pt-2">
											<span class="col-md-4">
												<p class="text-capitalize dashboard-title m-0">study category</p>
												<p class="text-capitalize dashboard-subtitle m-0">Undergraduate (S1)</p>
											</span>

											<span class="col-md-4">
												<p class="text-capitalize dashboard-title m-0">program</p>
												<p class="text-capitalize dashboard-subtitle m-0">Architecture</p>
											</span>

											<span class="col-md-4">
												<p class="text-capitalize dashboard-title m-0">Entry Option</p>
												<p class="text-capitalize dashboard-subtitle m-0">Regular Application</p>
											</span>
										</div>

										<div class="row">
											<span class="col-md-4">
												<p class="text-capitalize dashboard-title m-0">Campus</p>
												<p class="text-capitalize dashboard-subtitle m-0">Lippo Village Campus</p>
											</span>

											<span class="col-md-4">
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
										<div class="d-grid mt-2 gap-2">
											<p class="badge fw-medium m-0">Your current application status is <span class="fw-semibold">Registered</span></p>
											<p class="badge fw-medium m-0">Your next step is <span class="fw-semibold">Buy a Registration Form</span></p>
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
							<img src="/assets/form-icons.png" alt="icon" class="icon-form" />
							<h3 class="title-card-dashboard" style="color: #112369 !important; font-weight: 300 !important">Buy a Registration Form</h3>
							<button type="button" class="text-capitalize btn btn-danger w-100 dashboard-button mt-3 border-0" data-bs-toggle="modal" data-bs-target="#ecodeModal">buy new form</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="ecodeModal" tabindex="-1" aria-labelledby="ecodeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body d-flex flex-column flex-md-row justify-content-between p-5">
						<!-- Left Side Content -->
						<div class="code-content pe-md-3 mb-3 text-center">
							<h5 class="review-modal-title">I have an E-code</h5>
							<p class="review-modal-subtitle m-0">Please enter your E-code</p>
							<input type="text" class="form-control e-code-input my-3 text-center" id="ecodeInput" placeholder="--- --- ---" maxlength="15" />
							<button type="button" id="submitEcodeBtn" class="btn btn-primary w-100 rounded-0 mt-3" disabled>Submit E-code</button>
							<p id="successMessage" class="success-message">E-code is valid! Proceeding...</p>
							<p id="errorMessage" class="error-message">Invalid E-code! Please try again.</p>
						</div>

						<!-- Vertical Divider -->
						<div class="col-md-1 vertical-divider">
							<hr class="vertical-hr" />
						</div>

						<!-- Right Side Content -->
						<div class="code-content ps-md-3 d-flex flex-column justify-content-between mb-3 text-center">
							<div>
								<h5 class="review-modal-title">I don’t have an E-code</h5>
								<p class="review-modal-subtitle m-0">Proceed with your admission process</p>
							</div>
							<a href="/dashboard/intakeyear">
								<button type="button" class="btn btn-primary w-100 rounded-0 float-end mt-3">Proceed without E-code</button>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal Confirmation after E-code -->
		<div class="modal fade" id="eCodeValidModal" tabindex="-1" aria-labelledby="eCodeValidModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body p-5 text-center">
						<img src="/assets/succes-admitted.png" alt="check-icon" class="mb-1" />
						<h5 class="success-modal-title mb-1">You have been Admitted!</h5>
						<p class="review-modal-subtitle mb-4">Congratulation! You have been automatically admitted. Proceed to payment to complete your application.</p>
						<button type="button" class="btn btn-danger danger-button rounded-0 border-0 px-5 py-2" onclick="window.location.href = '/dashboard/intakeyear'">Proceed to Payment</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal For Bank Options -->
		<div class="modal fade" id="firstPaymentModal" tabindex="-1" aria-labelledby="firstPaymentModal" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-payment">
				<div class="modal-content border-0">
					<!-- Modal Body -->
					<div class="modal-body">
						<div>
							<span class="d-flex justify-content-between text-uppercase payment-title-up">
								<p>total</p>
								<p>PAY WITHIN <span>{countdown}</span></p>
							</span>
							<p class="review-modal-title">IDR 420.000</p>
							<span class="d-flex justify-content-between text-uppercase payment-title-down">
								<p class="review-modal-subtitle fst-italic">Order ID #9182739127391287</p>
								<p class="text-decoration-underline payment-details">details</p>
							</span>

							<hr class="solid-fullwidth" />
						</div>
						<!-- Virtual Account Section -->
						<div class="mb-3">
							<p class="row-title">Virtual Account</p>
						</div>

						<!-- Bank Options Section -->
						<div class="payment-background">
							<div class="d-flex flex-column gap-1 p-4">
								<!-- Bank BCA -->
								<label class="bank-option d-flex justify-content-between align-items-center rounded-3 border p-3" for="bankBca">
									<span class="d-flex align-items-center gap-3">
										<img src="/assets/bca.png" alt="bca" class="payment-icon" />
										<p class="payment-banks">BCA</p>
									</span>
									<input type="radio" id="bankBca" name="bankOptions" class="" />
								</label>

								<!-- Bank Mandiri -->
								<label class="bank-option d-flex justify-content-between align-items-center rounded-3 border p-3" for="bankMandiri">
									<span class="d-flex align-items-center gap-3">
										<img src="/assets/bni.png" alt="bca" class="payment-icon" />
										<p class="payment-banks">Mandiri</p>
									</span>
									<input type="radio" id="bankMandiri" name="bankOptions" class="" />
								</label>

								<!-- Bank Permata -->
								<label class="bank-option d-flex justify-content-between align-items-center rounded-3 border p-3" for="bankPermata">
									<span class="d-flex align-items-center gap-3">
										<img src="/assets/permata.png" alt="bca" class="payment-icon" />
										<p class="payment-banks">Permata Bank</p>
									</span>
									<input type="radio" id="bankPermata" name="bankOptions" class="" />
								</label>

								<!-- Others Bank -->
								<label class="bank-option d-flex justify-content-between align-items-center rounded-3 border p-3" for="otherBanks">
									<span>
										<p class="payment-banks">Others Bank</p>
									</span>
									<input type="radio" id="otherBanks" name="bankOptions" class="" />
								</label>
							</div>
						</div>
					</div>

					<!-- Modal Footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger rounded-0 w-100 danger-button border-0 px-5" data-bs-target="#confirmationModal" data-bs-toggle="modal">Proceed to Payment</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal 2 Virtual Account Payment -->
		<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-verify">
				<div class="modal-content">
					<!-- Modal Body -->
					<div class="modal-body">
						<div>
							<span class="d-flex justify-content-between text-uppercase payment-title-up">
								<p>total</p>
								<p>PAY WITHIN <span>{countdown}</span></p>
							</span>
							<p class="review-modal-title">IDR 420.000</p>
							<span class="d-flex justify-content-between text-uppercase payment-title-down">
								<p class="review-modal-subtitle fst-italic">Order ID #9182739127391287</p>
								<p class="text-decoration-underline payment-details">details</p>
							</span>

							<hr class="solid-fullwidth" />
						</div>
						<!-- Virtual Account Section -->
						<div class="mb-3">
							<p class="row-title">Virtual Account</p>
						</div>

						<!-- Bank Options Section -->
						<div class="payment-background">
							<div class="d-flex flex-column gap-1 p-4">
								<div class="pe-3">
									<span class="d-flex justify-content-between align-items-center mb-3">
										<p class="row-title">Bank BCA</p>
										<img src="/assets/bca-icons.png" alt="bank icon" class="verify-icon" />
									</span>
									<p class="verify-subtitle">Complete payment from BCA to the virtual account number below</p>

									<p class="verify-title my-3">Virtual Account Number</p>
									<span class="d-flex justify-content-between align-items-center payment-subtitle">
										<p>8188 288 1816 8993</p>
										<p>Copy number</p>
									</span>

									<hr class="solid-fullwidth" />
									<button type="button" class="btn btn-primary rounded-0 payment-title mb-3 border-0 text-white">How to Pay</button>
								</div>
							</div>
						</div>
					</div>

					<!-- Modal Footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger rounded-0 w-100 danger-button border-0 px-5" data-bs-target="#successModal" data-bs-toggle="modal" id="submitFirstModal">Verify Payment</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal 3 For Success Payment -->
		<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-verify p-4">
				<div class="modal-content">
					<!-- Modal Body -->
					<div class="modal-body text-center">
						<img src="/assets/check.png" alt="check icon" class="check-icon" />
						<p class="success-modal-title m2-3">Payment Success</p>
						<p class="review-modal-subtitle mb-3">Congratulation! You have finished the payment. Proceed to the next step to complete your application.</p>
						<button type="button" id="nextStepPayment" class="btn btn-danger rounded-0 w-100 danger-button border-0 px-5" onclick="window.location.href='/dashboard/intakeyear'">Next Step</button>
					</div>
				</div>
			</div>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
		<script type="text/javascript" src="{{ asset('js/dashboard.js') }}"></script>
	</body>

</html>
