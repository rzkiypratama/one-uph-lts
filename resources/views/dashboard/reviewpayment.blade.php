<!DOCTYPE html>
<html lang="en">

	<x-head title="Review & Payment">
		<x-slot name="inlineCSS">
			<style>
				.card-body {
					height: 83vh;
					padding-left: 2rem;
					padding-right: 2rem;
				}

				.card-header .tabs-header {
					padding-left: 2rem;
					padding-right: 2rem;
				}

				.container {
					padding-left: 0px !important;
					padding-right: 0px !important;
				}

				#myTabs {
					display: flex;
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
			<!-- desktop steps -->
			<div class="d-none d-md-flex mb-4 gap-2">
				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">01</p>
						<p class="step-subtitle w-25 m-0">Intake Year</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-done.png" alt="step" class="step-icon" />
						<hr class="done-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">02</p>
						<p class="step-subtitle w-25 m-0">Personal Information</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-done.png" alt="step" class="step-icon" />
						<hr class="done-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">03</p>
						<p class="step-subtitle w-25 m-0">Education Information</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-done.png" alt="step" class="step-icon" />
						<hr class="done-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">04</p>
						<p class="step-subtitle w-25 m-0">Entry Option</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-done.png" alt="step" class="step-icon" />
						<hr class="dashed-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">05</p>
						<p class="step-subtitle w-25 m-0">Review & Payment</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-bold.png" alt="step" class="step-icon" />
						<hr class="solid-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">06</p>
						<p class="step-subtitle w-50 m-0">Required Documents</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-normal.png" alt="step" class="step-icon" />
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

					<span class="text-white" onclick="window.location.href = '/dashboard/entryoption'">
						<p class="mobile-title">Step 5 of 6</p>
						<p class="mobile-subtitle">Review & Application</p>
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
								<p class="file-validation pb-1">Please review your application data before is submitted</p>

								<div class="row address-container">
									<div class="col-md-5 address-column">
										<h3 class="row-title">Review your Application</h3>

										<hr class="full-width my-3" />

										<div class="d-flex justify-content-between text-capitalize mb-2">
											<p class="payment-title m-0">program</p>
											<p class="payment-subtitle m-0">Architecture</p>
										</div>

										<div class="d-flex justify-content-between text-capitalize mb-2">
											<p class="payment-title m-0">study level</p>
											<p class="payment-subtitle m-0">undergraduate (S1)</p>
										</div>

										<div class="d-flex justify-content-between text-capitalize mb-2">
											<p class="payment-title m-0">campus</p>
											<p class="payment-subtitle m-0">lippo village campus</p>
										</div>

										<div class="d-flex justify-content-between text-capitalize mb-2">
											<p class="payment-title m-0">intake year</p>
											<p class="payment-subtitle m-0">Odd Semester 2024/2025</p>
										</div>

										<div class="d-flex justify-content-between text-capitalize mb-2">
											<p class="payment-title m-0">Class Session</p>
											<p class="payment-subtitle m-0">Morning</p>
										</div>

										<div class="d-flex justify-content-between text-capitalize mb-2">
											<p class="payment-title m-0">Class Type</p>
											<p class="payment-subtitle m-0">Weekdays</p>
										</div>

										<div class="d-flex justify-content-between text-capitalize mb-2">
											<p class="payment-title m-0">Entry Type</p>
											<p class="payment-subtitle m-0">Direct Admission</p>
										</div>

										<div class="d-flex justify-content-between text-capitalize mb-2">
											<p class="payment-title m-0">Entry Option</p>
											<p class="payment-subtitle m-0">Regular</p>
										</div>

										{{-- please make a validation if code != input then hide this section --}}
										<div class="d-flex justify-content-between text-capitalize">
											<p class="payment-title m-0">E-Code</p>
											<p class="payment-subtitle m-0">758378399</p>
										</div>
									</div>

									<!-- Application Card -->
									<div class="col-md-5 address-column">
										<div class="application-bg p-3">
											<h3 class="row-title">Application Fees</h3>

											<hr class="full-width my-3" />

											<div class="d-flex justify-content-between text-capitalize">
												<p class="payment-title m-0">Application Form Fee</p>
												<p class="payment-subtitle m-0">IDR 400.000</p>
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
												<p class="text-capitalize payment-total-title m-0">IDR 420.000</p>
											</div>
										</div>
										<div class="d-flex align-items-center justify-content-end w-100 gap-2 pt-2">
											<label for="installmentTuition" class="form-label mb-0">Payment Method</label>
											<select id="installmentTuition" class="form-select w-50">
												<option value="" selected hidden>Select Method</option>
												<option value="installment">Credit Card</option>
												<option value="cash">Bank Transfer</option>
											</select>
										</div>

										<div class="d-flex align-items-center justify-content-end w-100 gap-2 pt-2">
											<label for="installmentTuition" class="form-label mb-0">Payment Type</label>
											<select id="installmentTuition" class="form-select w-50">
												<option value="" selected hidden>Select Method</option>
												<option value="installment">Installment</option>
												<option value="cash">Cash</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="d-flex justify-content-between align-content-center mb-4 gap-3">
							<button type="button" class="btn btn-outline-danger d-flex align-items-center float-end rounded-0 px-md-5 mt-2 px-4" onclick="window.location.href = '/dashboard/entryoption';">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" stroke="#FF5351" />
								</svg>
								Back
							</button>
							<!-- Submit Button Without E-code-->
							<button id="proceedToPaymentBtn" type="submit" class="btn btn-danger float-end rounded-0 px-md-5 danger-button mt-2" data-bs-toggle="modal" data-bs-target="#firstPaymentModal">
								Proceed to Payment
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" fill="#FFF" />
								</svg>
							</button>

							<!-- Submit button when user use e-code -->
							<!-- <button id="verifyApplicationBtn" type="submit" class="btn btn-danger align-items-center float-end rounded-0 px-md-5 danger-button mt-5" onclick="window.location.href='/dashboard/applicationstatus'">
																Verify Application<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
																		<path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" fill="#FFF" />
																</svg>
														</button> -->
						</div>
					</form>

					<!-- Modal -->
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
									<!-- Payment Option Section -->
									<div class="mb-3">
										<p class="row-title">Payment Option</p>
									</div>

									<!-- Bank Options Section -->
									<div class="payment-background">
										<div class="d-flex flex-column gap-1 p-4">
											<!-- Payment Method -->
											<div class="col-md-12 mb-4">
												<label for="paymentMethod" class="form-label">Payment Method</label>
												<select id="paymentMethod" class="form-select">
													<option value="bank-transfer" selected>Bank Transfer</option>
													<option value="credit-card">Credit Card</option>
													<option value="Lainnya">Lainnya</option>
												</select>
											</div>


											<!-- Installment Method -->
											<div id="ccMethod" class="col-md-12 mb-4">
												<label for="installmentMethod" class="form-label">Payment Type</label>
												<select id="installmentMethod" class="form-select">
													<option value="" selected>3 months installment</option>
													<option value="1">Option 1</option>
													<option value="2">Option 2</option>
													<option value="Lainnya">Lainnya</option>
												</select>
											</div>

											<!-- Bank -->
											{{-- <div class="col-md-12 mb-4">
												<label for="bankTuition" class="form-label">Bank</label>
												<select id="bankTuition" class="form-select">
													<option value="bca" selected>BCA</option>
													<option value="bca">Option 1</option>
													<option value="bca">Option 2</option>
													<option value="Lainnya">Lainnya</option>
												</select>
											</div> --}}
										</div>
									</div>
								</div>

								<!-- Modal Footer -->
								<div class="modal-footer">
									<button type="button" class="btn btn-primary rounded-0 w-100 dashboard-button border-0 px-5" data-bs-target="#confirmationModal" data-bs-toggle="modal" id="submitTuitionForm">Proceed to
										Payment</button>
								</div>
							</div>
						</div>
					</div>

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
									<button type="button" class="btn btn-primary rounded-0 w-100 dashboard-button border-0 px-5" data-bs-target="#successModal" data-bs-toggle="modal" id="submitFirstModal">Verify
										Payment</button>
								</div>
							</div>
						</div>
					</div>

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

					<!-- Modal -->
					{{-- <div class="modal fade" id="firstPaymentModal" tabindex="-1" aria-labelledby="firstPaymentModal" aria-hidden="true">
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
									<button type="button" class="btn btn-primary rounded-0 w-100 dashboard-button border-0 px-5" data-bs-target="#confirmationModal" data-bs-toggle="modal" id="submitFirstModal">
										Proceed to Payment
									</button>
								</div>
							</div>
						</div>
					</div> --}}

					<!-- Modal 2 -->
					{{-- <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
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
									<button type="button" class="btn btn-primary rounded-0 w-100 dashboard-button border-0 px-5" data-bs-target="#successModal" data-bs-toggle="modal" id="submitFirstModal">Verify
										Payment</button>
								</div>
							</div>
						</div>
					</div> --}}

					<!-- Modal 3 For Success Payment -->
					{{-- <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered modal-dialog-verify p-4">
							<div class="modal-content">
								<!-- Modal Body -->
								<div class="modal-body text-center">
									<img src="/assets/check.png" alt="check icon" class="check-icon" />
									<p class="success-modal-title m2-3">Payment Success</p>
									<p class="review-modal-subtitle mb-3">Congratulation! You have finished the payment. Proceed to the next step to complete your application.</p>
									<button type="button" id="nextStepPayment" class="btn btn-danger rounded-0 w-100 dashboard-button border-0 px-5">Next Step</button>
								</div>
							</div>
						</div>
					</div> --}}

				</div>
			</div>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
		<script>
			document.getElementById("myForm").addEventListener("submit", function(event) {
				event.preventDefault();
			});

			document.getElementById("nextStepPayment").addEventListener("click", function(event) {
				event.preventDefault();
				window.location.href = "/dashboard/required-document";
			});
		</script>

		<script>
			const paymentMethod = document.getElementById("paymentMethod");
			const paymentWithCC = document.getElementById("ccMethod");

			function hidePaymentCC() {
				if (paymentMethod.value === "credit-card") {
					paymentWithCC.style.display = "block";
				} else {
					paymentWithCC.style.display = "none";
				}
			}

			hidePaymentCC();

			paymentMethod.addEventListener("change", hidePaymentCC);
		</script>
		<!-- <script src="/js/reviewpayment.js"></script> -->
	</body>

</html>
