<!DOCTYPE html>
<html lang="en">

	<x-head title="Tuition Payments">
		<x-slot name="inlineCSS">
			<style>
				.card-body {
					height: 84vh;
					/* padding-left: 2rem;
					padding-right: 2rem; */
				}

				.card-header .tabs-header {
					padding-left: 2rem;
					padding-right: 2rem;
				}

				.container {
					padding-left: 0px !important;
					padding-right: 0px !important;
				}

				.hidden {
					display: none;
				}

				@media (min-width: 768px) {
					.card-body {
						height: 418px;
						padding-left: 2rem;
						padding-right: 2rem;
					}

					.container {
						padding: auto;
					}
				}
			</style>
		</x-slot>
	</x-head>

	<body class="container mt-3">
		@include('components.notification')

		<div class="p-md-5 rounded-3 card-main-bg">
			<!-- steps -->
			<div class="d-none d-md-flex mb-4 gap-2">
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

			<!-- mobile steps -->
			<div class="d-md-none px-2 pt-3">
				<div class="upper-content d-flex align-items-center mb-3 gap-3">
					<span class="float-end">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="bi bi-chevron-left" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
						</svg>
					</span>

					<span class="text-white" onclick="window.location.href = '/tuition-fee'">
						<p class="mobile-title">Step 1 of 3</p>
						<p class="mobile-subtitle">Review Tuition Payment</p>
					</span>
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
									<div class="d-md-flex justify-content-between align-items-center address-column mb-3">
										<div class="d-flex align-items-center mb-md-4 mb-2">
											<label for="installmentTuition" class="form-label col-md-4 mb-0">Payment Type</label>
											<select id="installmentTuition" class="form-select w-50 col-md-8">
												<option value="" selected hidden>Select Method</option>
												<option value="installment">Installment</option>
												<option value="cash">Cash</option>
											</select>
											<button type="button" id="changePaymentMethod" class="btn select-program-btn rounded-0 ms-3 px-4">Change</button>
										</div>

										<p class="tabs-subtitle">* Please complete your full Payment before you can proceed</p>
									</div>

									<div class="installment-container installment-wrapper hidden" id="installment-method">
										<div class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center gap-5">
												<span class="col-md-6">
													<p class="verify-title">Installment No: 1</p>
													<p class="tuition-subtitle">Payment Due: 2024-09-13</p>
												</span>
												<span class="col-md-6">
													<p class="verify-title">#ORD2024092010474497</p>
													<p class="tuition-subtitle">2024-09-20 | 10:47:45</p>
												</span>
											</div>

											<div class="d-flex align-items-center gap-5">
												<p class="payment-title">IDR 291.000.000</p>
												<span class="d-flex align-items-center gap-3">
													<p class="file-status-paid">Unpaid</p>
													<button type="button" class="btn select-program-btn rounded-0 px-4 opacity-0" disabled>Pay Now</button>
												</span>
											</div>
										</div>

										<hr class="hr-solid" />

										<div class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center gap-5">
												<span class="col-md-6">
													<p class="verify-title">Installment No: 2</p>
													<p class="tuition-subtitle">Payment Due: 2024-09-13</p>
												</span>
												<span class="col-md-6">
													<p class="verify-title">#ORD2024092010474497</p>
													<p class="tuition-subtitle">2024-09-20 | 10:47:45</p>
												</span>
											</div>

											<div class="d-flex align-items-center gap-5">
												<p class="payment-title">IDR 291.000.000</p>
												<span class="d-flex align-items-center gap-3">
													<p class="file-status-unpaid">paid</p>
													<button type="button" class="btn select-program-btn rounded-0 px-4" data-bs-toggle="modal" data-bs-target="#firstPaymentTuitionModal">Pay Now</button>
												</span>
											</div>
										</div>
									</div>

									<div class="installment-container installment-wrapper hidden" id="cash-method">
										<div class="d-flex align-items-center justify-content-between d-none d-md-block">
											<div class="d-flex align-items-center gap-5">
												<span class="col-md-6">
													<p class="verify-title">Cash No: 1</p>
													<p class="tuition-subtitle">Payment Due: 2024-09-13</p>
												</span>
												<span class="col-md-6">
													<p class="verify-title">#ORD2024092010474497</p>
													<p class="tuition-subtitle">2024-09-20 | 10:47:45</p>
												</span>
											</div>

											<div class="d-flex align-items-center gap-5">
												<p class="payment-title">IDR 291.000.000</p>
												<span class="d-flex align-items-center gap-3">
													<p class="file-status-paid">paid</p>
													<button type="button" class="btn select-program-btn rounded-0 px-4 opacity-0" disabled>Pay Now</button>
												</span>
											</div>
										</div>

										<div class="d-md-none">
											<div class="d-flex align-items-center justify-content-between mb-3 gap-5">
												<span class="col-md-6">
													<p class="verify-title">Cash No: 100</p>
													<p class="tuition-subtitle">Payment Due: 2024-09-13</p>
												</span>
												<span class="col-md-6">
													<p class="verify-title">#ORD2024092010474497</p>
													<p class="tuition-subtitle">2024-09-20 | 10:47:45</p>
												</span>
											</div>

											<div class="d-flex align-items-center justify-content-between mb-1 flex-row-reverse gap-5">
												<p class="payment-title">IDR 291.000.000</p>

												<span class="d-flex align-items-center gap-3">
													<p class="file-status-paid">paid</p>
													<button type="button" class="btn select-program-btn rounded-0 d-none d-md-block px-4 opacity-0" disabled>Pay Now</button>
												</span>
											</div>

											<!-- button pay mobile -->
											<span class="d-flex align-items-center float-end d-md-none mt-2 gap-3">
												<button type="button" class="btn select-program-btn rounded-0 opacity-1 px-4">Pay Now</button>
											</span>
										</div>

										<!-- <hr class="hr-solid" /> -->
									</div>

									<p class="payment-title text-uppercase grand-total mt-4 hidden text-end" id="grandTotal">Grand Total: <span class="row-title">IDR 291.000.000</span></p>
								</div>
							</div>
						</div>

						<div class="d-flex justify-content-between align-content-center mb-4 gap-3">
							<button type="button" class="btn btn-outline-danger d-flex align-items-center float-end rounded-0 mt-5 px-5" onclick="window.location.href = '/tuition-fee';">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" stroke="#FF5351" />
								</svg>
								Back
							</button>

							<button type="submit" class="btn btn-danger float-end rounded-0 px-md-5 danger-button mt-5">
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
														<option value="bank-transfer" selected>Bank Transfer</option>
														<option value="credit-card">Credit Card</option>
														<option value="Lainnya">Lainnya</option>
													</select>
												</div>


												<!-- Installment Method -->
												<div id="ccMethod" class="col-md-12 mb-4">
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
		<script type="text/javascript" src="{{ asset('js/tuitionPayment.js') }}"></script>
		<script>
			document.getElementById("myForm").addEventListener("submit", function(event) {
				event.preventDefault();

				window.location.href = "/tuition-fee/re-registration";
			});
		</script>
		<script>
			const paymentMethod = document.getElementById("paymentMethodTuition");
			const paymentWithCC = document.getElementById("ccMethod");

			function hidePaymentCC() {
				if (paymentMethod.value === "credit-card") {
					paymentWithCC.style.display = "block";
				} else {
					paymentWithCC.style.display = "none";
				}
			}

			hidePaymentCC();

			paymentMethod.addEventListener("change", hidePaymentCC)
		</script>
	</body>

</html>
