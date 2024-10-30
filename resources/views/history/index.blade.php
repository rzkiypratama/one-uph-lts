<!DOCTYPE html>
<html lang="en">

	<x-head title="Your Status History" />

	<body class="container mt-3">
		@include('components.notification-dashboard')

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
						<div class="mb-4">
							<h3 class="dashboard-history-title">Status History</h3>
							<p class="text-capitalize subtitle-dashboard-mobile m-0 pt-2">Showing all your application history</p>
						</div>

						<div class="d-flex text-uppercase gap-4">
							<span class="col-md-2">
								<p class="dashboard-title m-0">form id</p>
							</span>

							<span class="col-md-2">
								<p class="dashboard-title m-0">program major</p>
							</span>

							<span class="col-md-2">
								<p class="dashboard-title m-0">entry option</p>
							</span>

							<span class="col-md-2">
								<p class="dashboard-title m-0">form status</p>
							</span>

							<span class="col-md-2">
								<p class="dashboard-title m-0">note</p>
							</span>
						</div>

						<hr class="full-width-hr-wrapper-form d-none d-md-block" />

						<div class="d-none d-md-block history-container">
							<div class="d-flex gap-4">
								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">#24411111113</p>
								</span>

								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">music</p>
									<p class="text-capitalize dashboard-subtitle m-0">Level: Sarjana (S1)</p>
								</span>

								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">regular</p>
								</span>

								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">Committed (Active)</p>
									<!-- change class to change dot color, re: dot-status-pending for pending status, dot-status-failed for discontinue status -->
									<div class="dot-status-commited mt-1"></div>
								</span>

								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">commited</p>
								</span>
							</div>

							<hr class="full-width-hr-underline d-none d-md-block" />

							<div class="d-flex gap-4">
								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">#24411111113</p>
								</span>

								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">music</p>
									<p class="text-capitalize dashboard-subtitle m-0">Level: Sarjana (S1)</p>
								</span>

								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">regular</p>
								</span>

								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">Committed (Active)</p>
									<div class="dot-status-commited mt-1"></div>
								</span>

								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">commited</p>
								</span>
							</div>

							<hr class="full-width-hr-underline d-none d-md-block" />

							<div class="d-flex mb-4 gap-4">
								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">#24411111113</p>
								</span>

								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">music</p>
									<p class="text-capitalize dashboard-subtitle m-0">Level: Sarjana (S1)</p>
								</span>

								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">regular</p>
								</span>

								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">pending</p>
									<div class="dot-status-pending mt-1"></div>
								</span>

								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">On Review</p>
								</span>
							</div>

							<hr class="full-width-hr-underline d-none d-md-block" />

							<div class="d-flex gap-4">
								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">#24411111113</p>
								</span>

								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">music</p>
									<p class="text-capitalize dashboard-subtitle m-0">Level: Sarjana (S1)</p>
								</span>

								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">regular</p>
								</span>

								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">discontinue</p>
									<div class="dot-status-failed mt-1"></div>
								</span>

								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">discontinue</p>
								</span>
							</div>

							<hr class="full-width-hr-underline d-none d-md-block" />
						</div>

						<hr class="full-width-hr-wrapper-form d-none d-md-block" />

						<div>
							<button type="button" class="btn link back-review-btn" data-bs-dismiss="modal" onclick="window.location.href = '/tuition-fee'">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" stroke="#7AA3FF" />
								</svg>
								Back to Dashboard
							</button>
						</div>
					</div>
					<!-- desktop layout -->

					<!-- mobile layout start -->
					<div class="mobile-dashboard rounded-4 d-md-none p-4">
						<img src="/assets/togas.png" alt="togas" class="togas-icon" />
						<p class="title-dashboard-mobile">Buy a Registration From</p>
						<p class="subtitle-dashboard-mobile">This is your <strong>Student Online Application Account.</strong> You can submit a new application from here.</p>
						<button type="button" class="text-capitalize btn btn-danger w-100 dashboard-button mt-3 border-0" onclick="window.location.href = '/tuition-fee/tuitionpayment'">Pay Tuition Fee</button>
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
											<div class="row">
												<span class="col-md-4 mb-2">
													<p class="text-capitalize dashboard-title m-0">study category</p>
													<p class="text-capitalize dashboard-subtitle m-0">Undergraduate (S1)</p>
												</span>

												<span class="col-md-4 mb-2">
													<p class="text-capitalize dashboard-title m-0">program</p>
													<p class="text-capitalize dashboard-subtitle m-0">Architecture</p>
												</span>

												<span class="col-md-4 mb-2">
													<p class="text-capitalize dashboard-title m-0">Faculty</p>
													<p class="text-capitalize dashboard-subtitle m-0">Faculty of Design</p>
												</span>

												<span class="col-md-4 mb-2">
													<p class="text-capitalize dashboard-title m-0">Campus</p>
													<p class="text-capitalize dashboard-subtitle m-0">Lippo Village Campus</p>
												</span>

												<span class="col-md-4 mb-2">
													<p class="text-capitalize dashboard-title m-0">Entry Option</p>
													<p class="text-capitalize dashboard-subtitle m-0">Regular Application</p>
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
				</div>
				<div class="dashboard-box d-none d-md-block">
					<div class="card-dashboard border-0" style="background-image: url('/assets/history.webp'); height: 461px; width: 272px">
						<!-- Gradient Overlay -->
						<div class="gradient-overlay" style="background-image: linear-gradient(to top, #bcd1ff, #f1f1f190)" \></div>

						<!-- Title -->
						<div class="title-container w-100">
							<h3 class="title-card-dashboard mb-2" style="color: #112369 !important; font-weight: 400 !important">Application Change</h3>
							<p class="subtitle-dashboard-mobile mb-3">Fill this form to make changes to your application form</p>

							<div>
								<label for="purpose" class="form-label">Purpose</label>
								<select class="form-select mb-2">
									<option value="option1">option1</option>
									<option value="option2">option2</option>
									<option value="option3">option3</option>
									<option value="Lainnya">Lainnya</option>
								</select>

								<label for="purpose" class="form-label">Intake Year</label>
								<select class="form-select mb-2">
									<option value="option1">option1</option>
									<option value="option2">option2</option>
									<option value="option3">option3</option>
									<option value="Lainnya">Lainnya</option>
								</select>

								<label for="purpose" class="form-label">Level of Study</label>
								<select class="form-select">
									<option value="option1">option1</option>
									<option value="option2">option2</option>
									<option value="option3">option3</option>
									<option value="Lainnya">Lainnya</option>
								</select>
							</div>
							<button type="button" class="text-capitalize btn btn-danger w-100 dashboard-button mt-4 border-0" data-bs-toggle="modal" data-bs-target="#confirmation">Submit Change</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal 1 -->
		<div class="modal fade" id="confirmation" tabindex="-1" aria-labelledby="confirmation" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<!-- Modal Body -->
					<div class="modal-body">
						<div class="d-flex flex-column justify-content-center align-content-center align-items-center text-center">
							<img src="/assets/admission-icon.png" alt="admission icon" class="admisison-icon mb-3" />
							<p class="review-modal-title testing m-0">Application Change Confirmation</p>
							<p class="review-modal-subtitle m-0">
								By changing your application, your current active application will be automatically put on hold and you will be directed to repurchase a new application form. Your tuition payment will be
								transferred and
								allocated to your new application form.
							</p>
						</div>
						<hr class="solid-modal" />
						<div class="row px-3">
							<span class="col-md-6 payment-title"> Purpose </span>
							<span class="col-md-6 payment-subtitle"> Change Major </span>

							<span class="col-md-6 payment-title"> Intake Year </span>
							<span class="col-md-6 payment-subtitle"> Different Intake Year </span>

							<span class="col-md-6 payment-title"> Level of Study </span>
							<span class="col-md-6 payment-subtitle"> Different Level of Study </span>
						</div>
					</div>

					<!-- Modal Footer -->
					<div class="modal-footer">
						<p class="review-modal-subtitle w-100 m-0 pb-2 text-center">Do you want to proceed with this change?</p>
						<span class="d-flex justify-content-between w-100 text-center">
							<button type="button" class="btn btn-outline-danger rounded-0 w-45" data-bs-dismiss="modal">No</button>
							<button type="button" class="btn btn-danger rounded-0 w-45" data-bs-toggle="modal" data-bs-target="#successChangeModal">Yes!</button>
						</span>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal 2 For Success Change Application -->
		<div class="modal fade" id="successChangeModal" tabindex="-1" aria-labelledby="successChangeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-verify p-4">
				<div class="modal-content">
					<!-- Modal Body -->
					<div class="modal-body text-center">
						<img src="/assets/check.png" alt="check icon" class="check-icon" />
						<p class="success-modal-title m2-3">Change Request Success</p>
						<p class="review-modal-subtitle mb-3">Your current application has been put on hold. Proceed to the next step to complete your new application.</p>
						<button type="button" id="nextStepPayment" class="btn btn-danger rounded-0 w-100 danger-button border-0 px-5" data-bs-toggle="modal" data-bs-target="#ecodeModal">Proceed to Next
							Step</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal 3 E-code option -->
		<div class="modal fade" id="ecodeModal" tabindex="-1" aria-labelledby="ecodeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body d-flex flex-column flex-md-row justify-content-between p-5">
						<!-- Left Side Content -->
						<div class="code-content pe-md-3 mb-3 text-center">
							<h5 class="review-modal-title">I have an E-code</h5>
							<p class="review-modal-subtitle m-0">Please enter your E-code</p>
							<input type="text" class="form-control e-code-input my-3 text-center" id="ecodeInput" placeholder="--- --- ---" maxlength="15" />
							<!-- add this to use static script e-code => id="submitEcodeBtn" disabled  -->
							<button type="button" id="submitEcodeBtn" class="btn btn-primary w-100 rounded-0 mt-3">Submit E-code</button>
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
						<button type="button" class="btn btn-danger danger-button rounded-0 border-0 px-5 py-2" data-bs-toggle="modal" data-bs-target="#firstPaymentModal">Proceed to Payment</button>
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

		<!-- Modal Virtual Account Payment -->
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

		<!-- Modal For Success Payment -->
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

		<!-- this script refer to e-code testing only -->
		<script type="text/javascript" src="{{ asset('js/dashboard.js') }}"></script>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	</body>

</html>
