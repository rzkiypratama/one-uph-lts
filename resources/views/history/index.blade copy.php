<!DOCTYPE html>
<html lang="en">

	<x-head title="Your Status History" />

	<body class="container mt-3">
		@include('components.notification-dashboard')

		<div class="p-md-5 rounded-3 history-main-container bg-white p-3">
			<div class="d-flex justify-content-between">
				<div class="w-100">
					<!-- desktop layout -->
					<div>
						<div class="d-flex justify-content-between mb-4">
							<div>
								<h3 class="dashboard-history-title">Status History</h3>
								<p class="text-capitalize subtitle-dashboard-mobile m-0 pt-2">Showing all your application history</p>
							</div>

							<button type="button" class="text-capitalize btn btn-danger dashboard-button border-0" style="width: 200px; height: 44px;" data-bs-toggle="modal" data-bs-target="#changeMajor">change
								applicaition</button>

							{{-- <button type="button" class="text-capitalize btn btn-danger dashboard-button border-0" style="width: 200px; height: 44px;" data-bs-toggle="modal" data-bs-target="#ecodeModal">buy new
								form</button> --}}

						</div>

						<div class="row text-uppercase">
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
								<p class="dashboard-title m-0">status</p>
							</span>

							<span class="col-md-2">
								<p class="dashboard-title m-0">re-active</p>
							</span>

							<span class="col-md-2">
								<p class="dashboard-title m-0">note</p>
							</span>
						</div>

						<hr class="full-width-hr-wrapper-form d-none d-md-block" />

						<div class="history-container">
							<div class="row">
								<span class="col-md-2 mb-2">
									<a href="/details">
										<p class="text-capitalize dashboard-title m-0">#24411111113</p>
									</a>
								</span>

								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">music</p>
									<p class="text-capitalize dashboard-subtitle m-0">Level: Sarjana (S1)</p>
								</span>

								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">regular</p>
								</span>

								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">Committed</p>

								</span>

								<span class="col-md-2 mb-2">
									<div class="d-flex gap-2">
										<!-- change class to change dot color, re: dot-status-pending for pending status, dot-status-failed for discontinue status -->
										<div class="dot-status-commited mt-1"></div>
										<p class="text-capitalize dashboard-title m-0">active</p>
									</div>
									<button type="button" class="btn btn-link status-history-subtitle text-capitalize p-0" data-bs-target="#confirmReactive" data-bs-toggle="modal">Deactive Form</button>
								</span>

								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">Pending Other...</p>
								</span>

							</div>

							<hr class="full-width-hr-underline d-none d-md-block" />

							<div class="row">
								<span class="col-md-2 mb-2">
									<a href="/details">
										<p class="text-capitalize dashboard-title m-0">#24411111113</p>
									</a>
								</span>

								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">music</p>
									<p class="text-capitalize dashboard-subtitle m-0">Level: Sarjana (S1)</p>

								</span>

								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">regular</p>
								</span>

								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">Committed</p>

								</span>

								<span class="col-md-2 mb-2">
									<div class="d-flex gap-2">
										<!-- change class to change dot color, re: dot-status-pending for pending status, dot-status-failed for discontinue status -->
										<div class="dot-status-pending mt-1"></div>
										<p class="text-capitalize dashboard-title m-0">inactive</p>
									</div>
									<button type="button" class="btn btn-link status-history-subtitle text-capitalize p-0" data-bs-target="#userHasActiveForm" data-bs-toggle="modal">re-activate Form</button>
								</span>

								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">Pending Other...</p>
								</span>

							</div>

							<hr class="full-width-hr-underline d-none d-md-block" />

							<div class="row">
								<span class="col-md-2 mb-2">
									<a href="/details">
										<p class="text-capitalize dashboard-title m-0">#24411111113</p>
									</a>
								</span>

								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">music</p>
									<p class="text-capitalize dashboard-subtitle m-0">Level: Sarjana (S1)</p>

								</span>

								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">regular</p>
								</span>

								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">Committed</p>
								</span>

								<span class="col-md-2 mb-2">
									<div class="d-flex gap-2">
										<!-- change class to change dot color, re: dot-status-pending for pending status, dot-status-failed for discontinue status -->
										<div class="dot-status-failed mt-1"></div>
										<p class="text-capitalize dashboard-title m-0">discontinue</p>
									</div>
									<button type="button" class="btn btn-link status-history-subtitle text-capitalize p-0" disabled>re-active Form</button>
								</span>

								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">canceled by admin</p>
								</span>

							</div>

							<hr class="full-width-hr-underline d-none d-md-block" />

							<div class="row">
								<span class="col-md-2 mb-2">
									<a href="/details">
										<p class="text-capitalize dashboard-title m-0">#24411111113</p>
									</a>
								</span>

								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">music</p>
									<p class="text-capitalize dashboard-subtitle m-0">Level: Sarjana (S1)</p>
								</span>

								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">regular</p>
								</span>

								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">Committed</p>
								</span>

								<span class="col-md-2 mb-2">
									<div class="d-flex gap-2">
										<!-- change class to change dot color, re: dot-status-pending for pending status, dot-status-failed for discontinue status -->
										<div class="dot-status-commited mt-1"></div>
										<p class="text-capitalize dashboard-title m-0">active</p>
									</div>
									<button type="button" class="btn btn-link status-history-subtitle text-capitalize p-0" disabled>Deactive Form</button>
								</span>

								<span class="col-md-2 mb-2">
									<p class="text-capitalize dashboard-title m-0">Pending Other...</p>
								</span>

							</div>

							<hr class="full-width-hr-underline d-none d-md-block" />
						</div>

						<hr class="full-width-hr-wrapper-form d-none d-md-block" />

						<div class="d-flex justify-content-between">
							<button type="button" class="btn link back-review-btn" data-bs-dismiss="modal" onclick="window.location.href = '/tuition-fee'">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" stroke="#7AA3FF" />
								</svg>
								Back to Dashboard
							</button>

							<span class="d-flex align-items-center gap-2">
								<img src="/assets/caution.png" alt="caution icon" class="caution-icon">
								<p class="file-validation"><strong>Note: </strong>Please deactivate your active form before making Application changes</p>
							</span>
						</div>
					</div>
					<!-- desktop layout -->
				</div>
			</div>
		</div>

		{{-- change reactive status modal --}}
		<div>
			{{-- history modal confirmation --}}
			<div class="modal fade" id="confirmReactive" tabindex="-1" aria-labelledby="confirmReactive" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-dialog-verify p-4">
					<div class="modal-content">
						<!-- Modal Body -->
						<div class="modal-body text-center">
							<img src="/assets/isolation-mode.png" alt="check icon" class="check-icon" />
							<p class="success-modal-title my-3">Re-activate Application</p>
							<p class="review-modal-subtitle mb-3">with this you confirm Activation this application and hold the rest of applications</p>
						</div>
						<!-- Modal Footer -->
						<div class="modal-footer d-flex justify-content-between w-100">
							<button type="button" class="btn btn-outline-danger rounded-0 w-45" data-bs-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-danger rounded-0 w-45" data-bs-target="#confirmActivate" data-bs-toggle="modal">Confirm</button>
						</div>
					</div>
				</div>
			</div>

			{{-- history modal when user click confirm on reactive form --}}
			<div class="modal fade" id="confirmActivate" tabindex="-1" aria-labelledby="confirmActivate" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-dialog-verify p-4">
					<div class="modal-content">
						<!-- Modal Body -->
						<div class="modal-body text-center">
							<img src="/assets/request-mode.png" alt="check icon" class="check-icon" />
							<p class="success-modal-title my-3">Your Activation Request has been sent</p>
							<p class="review-modal-subtitle mb-3">You will be notified when your request has been approved</p>
						</div>
						<!-- Modal Footer -->
						<div class="modal-footer d-flex justify-content-between w-100">
							<button type="button" class="btn btn-danger rounded-0 w-100" data-bs-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>

			{{-- history modal when user has active form --}}
			<div class="modal fade" id="userHasActiveForm" tabindex="-1" aria-labelledby="userHasActiveForm" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-dialog-verify p-4">
					<div class="modal-content">
						<!-- Modal Body -->
						<div class="modal-body text-center">
							<img src="/assets/caution-mode.png" alt="check icon" class="check-icon" />
							<p class="success-modal-title my-3">You still have an Active Application Form</p>
							<p class="review-modal-subtitle mb-3">Please deactivate your current active form before you can reactivate other form.</p>
						</div>
						<!-- Modal Footer -->
						<div class="modal-footer d-flex justify-content-between w-100">
							<button type="button" class="btn btn-danger rounded-0 w-100" data-bs-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		{{-- change major modal --}}
		<div>
			{{-- modal 1 --}}
			<div class="modal fade" id="changeMajor" tabindex="-1" aria-labelledby="changeMajor" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-sm">
					<div class="modal-content p-1">
						{{-- <!-- Modal Body --> --}}
						<div class="modal-body">
							<div class="d-flex flex-column justify-content-center align-content-center align-items-center text-center">
								<p class="review-modal-title testing m-0">Application Change</p>
								<p class="review-modal-subtitle m-0 py-3">
									Fill this form to make changes to your application form
								</p>
							</div>
							<div>
								<label for="purpose" class="form-label">Intake Year</label>
								<select class="form-select mb-3">
									<option value="" selected disabled>Select Intake Year</option>
									<option value="option2">option2</option>
									<option value="option3">option3</option>
									<option value="Lainnya">Lainnya</option>
								</select>

								<label for="purpose" class="form-label">Level of Study</label>
								<select class="form-select mb-3">
									<option value="" selected disabled>Select Level Of Study</option>
									<option value="option2">option2</option>
									<option value="option3">option3</option>
									<option value="Lainnya">Lainnya</option>
								</select>

								<label for="purpose" class="form-label">Cluster</label>
								<select class="form-select mb-3">
									<option value="" selected disabled>Select Cluster</option>
									<option value="option2">option2</option>
									<option value="option3">option3</option>
									<option value="Lainnya">Lainnya</option>
								</select>

								<label for="purpose" class="form-label">Faculty</label>
								<select class="form-select mb-3">
									<option value="" selected disabled>Select Faculty</option>
									<option value="option2">option2</option>
									<option value="option3">option3</option>
									<option value="Lainnya">Lainnya</option>
								</select>

								<label for="purpose" class="form-label">Program</label>
								<select class="form-select mb-3">
									<option value="" selected disabled>Select Program</option>
									<option value="option2">option2</option>
									<option value="option3">option3</option>
									<option value="Lainnya">Lainnya</option>
								</select>


							</div>
						</div>

						<!-- Modal Footer -->
						<div class="modal-footer">
							<span class="d-flex justify-content-between w-100 text-center">
								<button type="button" class="btn btn-danger rounded-0 w-100" data-bs-toggle="modal" data-bs-target="#confirmation">Submit Change</button>
							</span>
						</div>
					</div>
				</div>
			</div>

			<!-- Modal 2 -->
			<div class="modal fade" id="confirmation" tabindex="-1" aria-labelledby="confirmation" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content p-3">
						<!-- Modal Body -->
						<div class="modal-body">
							<div class="d-flex flex-column justify-content-center align-content-center align-items-center text-center">
								<img src="/assets/admission-icon.png" alt="admission icon" class="admisison-icon mb-3" />
								<p class="review-modal-title testing m-0">Application Change Confirmation</p>
								<p class="review-modal-subtitle m-0 py-3">
									By changing your application, your current active application will be automatically put on hold and you will be directed to repurchase a new application form. Your tuition payment will be
									transferred and
									allocated to your new application form.
								</p>
							</div>
							<hr class="solid-modal" />
							<div class="row p-3">
								<span class="col-md-6 payment-title"> Intake Year </span>
								<span class="col-md-6 payment-subtitle pb-1"> 2025/2026 </span>

								<span class="col-md-6 payment-title"> Level of Study </span>
								<span class="col-md-6 payment-subtitle pb-1"> Sarjana (S1) </span>

								<span class="col-md-6 payment-title"> Cluster </span>
								<span class="col-md-6 payment-subtitle pb-1"> Business & Technology </span>

								<span class="col-md-6 payment-title"> Cluster </span>
								<span class="col-md-6 payment-subtitle pb-1"> Economics & Business </span>

								<span class="col-md-6 payment-title"> Program </span>
								<span class="col-md-6 payment-subtitle"> Accounting </span>
							</div>
						</div>

						<!-- Modal Footer -->
						<div class="modal-footer">
							<p class="review-modal-subtitle w-100 font-weight-bold m-0 pb-3 pt-2 text-center">Do you want to proceed with this change?</p>
							<span class="d-flex justify-content-between w-100 text-center">
								<button type="button" class="btn btn-outline-danger rounded-0 w-45" data-bs-dismiss="modal">No</button>
								<button type="button" class="btn btn-danger rounded-0 w-45" data-bs-toggle="modal" data-bs-target="#successChangeModal">Yes!</button>
							</span>
						</div>
					</div>
				</div>
			</div>

			<!-- Modal 3 For Success Change Application -->
			<div class="modal fade" id="successChangeModal" tabindex="-1" aria-labelledby="successChangeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-dialog-verify p-4">
					<div class="modal-content p-2">
						<!-- Modal Body -->
						<div class="modal-body text-center">
							<img src="/assets/check.png" alt="check icon" class="check-icon" />
							<p class="success-modal-title py-3">Change Request Success</p>
							<p class="review-modal-subtitle mb-3">Your current application has been put on hold. Proceed to the next step to complete your new application.</p>
							<button type="button" id="nextStepPayment" class="btn btn-danger rounded-0 w-100 danger-button border-0 px-5" data-bs-toggle="modal" data-bs-target="#ecodeModal">Proceed to Next
								Step</button>
						</div>
					</div>
				</div>
			</div>

			<!-- Modal 4 E-code option -->
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
							<button type="button" class="btn btn-danger rounded-0 w-100 danger-button border-0 px-5" data-bs-target="#successModal" data-bs-toggle="modal" id="submitFirstModal">Verify
								Payment</button>
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
		</div>

		<!-- this script refer to e-code testing only -->
		<script type="text/javascript" src="{{ asset('js/dashboard.js') }}"></script>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	</body>

</html>
