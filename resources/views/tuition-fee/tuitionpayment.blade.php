<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/css/style.css" />
		<title>Tuition Fee Payment</title>
		<style>
			.card-body {
				height: 418px;
				padding-left: 2rem;
				padding-right: 2rem;
			}

			.card-header .tabs-header {
				padding-left: 2rem;
				padding-right: 2rem;
			}
		</style>
	</head>

	<body class="container mt-3">
		<div class="d-flex justify-content-between align-items-center mb-5 pt-3">
			<img src="/assets/uph-logo.png" alt="logo" class="uphlogo" />
			<div class="d-flex align-items-center gap-3">
				<span class="logout-button d-flex align-items-center gap-2">
					<p class="m-0">dashboard</p>
				</span>
				<img src="/assets/bells.png" alt="notification icon" class="notification-icon" />
			</div>
		</div>

		<div class="rounded-3 card-main-bg p-5">
			<!-- steps -->
			<div class="d-flex mb-4 gap-2">
				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">01</p>
						<p class="step-subtitle w-25 m-0">Tuition Fee</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/tuition-circle-bold.png" alt="step" class="step-icon" />
						<hr class="tuition-solid-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">02</p>
						<p class="step-subtitle w-50 m-0">Re-registration Information</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/tuition-circle-normal.png" alt="step" class="step-icon" />
						<hr class="tuition-solid-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">03</p>
						<p class="step-subtitle w-25 m-0">Administration Document</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/tuition-circle-normal.png" alt="step" class="step-icon" />
						<hr class="tuition-solid-step" />
					</div>
				</div>
			</div>

			<!-- Tabs & Form -->
			<div class="card border-0 shadow-sm">
				<div class="card-header tabs-header">
					<ul class="nav nav-pills card-header-tabs" id="myTab" role="tablist">
						<!-- Tab 1 -->
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">
								<div class="d-flex">
									<img src="/assets/booked-icon.png" alt="icon1" class="tab-icon" />
									<span class="d-flex flex-column text-start">
										<p class="tabs-title text-capitalize m-0">Review & Application</p>
										<p class="tabs-subtitle m-0">review your application</p>
									</span>
								</div>
							</button>
						</li>
					</ul>
				</div>

				<div class="card-body">
					<!-- Form Start -->
					<form id="myForm" class="d-flex flex-column justify-content-between h-100">
						<div class="tab-content" id="myTabContent">
							<!-- Tab Content 1 -->
							<div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
								<div class="row address-container">
									<div class="col-md-5 address-column">
										<div class="col-md-12 mb-4">
											<label for="installmentTuition" class="form-label">Payment Type</label>
											<select id="installmentTuition" class="form-select">
												<option value="" selected hidden>Installment</option>
												<option value="1">Option 1</option>
												<option value="2">Option 2</option>
												<option value="Lainnya">Lainnya</option>
											</select>
										</div>

										<div class="d-flex justify-content-between">
											<h3 class="row-title">Review your Tuition Fee</h3>
											<p class="tuition-status">pending</p>
										</div>

										<hr class="full-width my-3" />

										<div class="d-flex justify-content-between text-capitalize mb-2">
											<p class="payment-title m-0">invoice no.</p>
											<p class="payment-subtitle m-0">#ORD2024092010474497</p>
										</div>

										<div class="d-flex justify-content-between text-capitalize mb-2">
											<p class="payment-title m-0">Date</p>
											<p class="payment-subtitle m-0">2024-09-20 | 10:47:45</p>
										</div>

										<div class="d-flex justify-content-between text-capitalize mb-2">
											<p class="payment-title m-0">Installment No.</p>
											<p class="payment-subtitle m-0">1</p>
										</div>

										<div class="d-flex justify-content-between text-capitalize mb-2">
											<p class="payment-title m-0">Payment Due Date</p>
											<p class="payment-subtitle m-0">2024-09-13</p>
										</div>
									</div>

									<!-- Application Card -->
									<div class="col-md-5 address-column">
										<div class="application-bg p-3">
											<h3 class="row-title">Tuition Fees</h3>

											<hr class="full-width my-3" />

											<div class="d-flex justify-content-between text-capitalize">
												<p class="payment-title m-0">Tuition Fee</p>
												<p class="payment-subtitle m-0">IDR 100.000</p>
											</div>

											<div class="d-flex justify-content-between text-capitalize my-2">
												<p class="payment-title m-0">Administration Fee</p>
												<p class="payment-subtitle m-0">IDR 20.000</p>
											</div>

											<div class="d-flex justify-content-between text-capitalize">
												<p class="payment-title m-0">Discount</p>
												<p class="payment-subtitle m-0">-</p>
											</div>

											<hr class="full-width my-3" />

											<div class="d-flex justify-content-between text-capitalize">
												<p class="text-capitalize payment-total-title m-0">Total Fee</p>
												<p class="text-capitalize payment-total-title m-0">IDR 120.000</p>
											</div>
										</div>
										<button type="button" class="btn btn-danger float-end rounded-0 danger-button mt-2 px-5" data-bs-toggle="modal" data-bs-target="#firstPaymentTuitionModal">Pay Now</button>
									</div>
								</div>
							</div>
						</div>

						<div class="d-flex justify-content-between align-content-center mb-4">
							<button type="button" class="btn btn-outline-danger float-end rounded-0 mt-5 px-5" onclick="window.location.href = '/dashboard/entryoption';">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" stroke="#FF5351" />
								</svg>
								Back
							</button>

							<button type="submit" class="btn btn-danger float-end rounded-0 danger-button mt-5 px-5">
								Proceed to Next Step
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" fill="#FFF" />
								</svg>
							</button>
						</div>

						<!-- Modal -->
						<div class="modal fade" id="firstPaymentTuitionModal" tabindex="-1" aria-labelledby="firstPaymentModal" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered modal-dialog-payment">
								<div class="modal-content border-0">
									<!-- Modal Body -->
									<div class="modal-body">
										<div>
											<span class="d-flex justify-content-between text-uppercase payment-title-up">
												<p>total</p>
												<p>PAY WITHIN <span>{countdown}</span></p>
											</span>
											<p class="review-modal-title">IDR 120.000</p>
											<span class="d-flex justify-content-between text-uppercase payment-title-down">
												<p class="review-modal-subtitle fst-italic">Order ID #9182739127391287</p>
												<p class="text-decoration-underline payment-details">details</p>
											</span>

											<hr class="solid-fullwidth" />
										</div>
										<!-- Payment Option Section -->
										<div class="mb-3">
											<p class="row-title">Payment Option</p>
										</div>

										<!-- Bank Options Section -->
										<div class="payment-background">
											<div class="d-flex flex-column gap-1 p-4">
												<!-- Payment Method -->
												<div class="col-md-12 mb-4">
													<label for="paymentMethodTuition" class="form-label">Payment Method</label>
													<select id="paymentMethodTuition" class="form-select">
														<option value="" selected>Credit Card</option>
														<option value="1">Option 1</option>
														<option value="2">Option 2</option>
														<option value="Lainnya">Lainnya</option>
													</select>
												</div>

												<!-- Installment Method -->
												<div class="col-md-12 mb-4">
													<label for="installmentMethodTuition" class="form-label">Installment</label>
													<select id="installmentMethodTuition" class="form-select">
														<option value="" selected>3 months installment</option>
														<option value="1">Option 1</option>
														<option value="2">Option 2</option>
														<option value="Lainnya">Lainnya</option>
													</select>
												</div>

												<!-- Bank -->
												<div class="col-md-12 mb-4">
													<label for="bankTuition" class="form-label">Bank</label>
													<select id="bankTuition" class="form-select">
														<option value="bca" selected>BCA</option>
														<option value="bca">Option 1</option>
														<option value="bca">Option 2</option>
														<option value="Lainnya">Lainnya</option>
													</select>
												</div>
											</div>
										</div>
									</div>

									<!-- Modal Footer -->
									<div class="modal-footer">
										<button type="button" class="btn btn-primary rounded-0 w-100 dashboard-button border-0 px-5" data-bs-target="#successModal" data-bs-toggle="modal" id="submitTuitionForm">Proceed to
											Payment</button>
									</div>
								</div>
							</div>
						</div>
					</form>

					<!-- Modal 2 For Success Payment -->
					<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered modal-dialog-verify p-4">
							<div class="modal-content">
								<!-- Modal Body -->
								<div class="modal-body text-center">
									<img src="/assets/check.png" alt="check icon" class="check-icon" />
									<p class="success-modal-title m2-3">Payment Success</p>
									<p class="review-modal-subtitle mb-3">Congratulation! You have finished the payment. Proceed to the next step to complete your application.</p>
									<button type="button" class="btn btn-danger rounded-0 w-100 dashboard-button border-0 px-5" data-bs-dismiss="modal">Next Step</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
		<script>
			document.getElementById("myForm").addEventListener("submit", function(event) {
				event.preventDefault();

				window.location.href = "/tuition-fee/re-registration";
			});
		</script>
	</body>

</html>
