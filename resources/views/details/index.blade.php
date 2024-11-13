<!DOCTYPE html>
<html lang="en">

	<x-head title="Intake Year">
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
			<div class="d-none d-md-block">
				<div class="d-flex justify-content-between mb-1">
					<div>
						<h3 class="dashboard-history-title">Status History</h3>
						<p class="text-capitalize subtitle-dashboard-mobile m-0 pt-2">Showing all your application history</p>
					</div>

					<div>
						<p class="login-card-title">Music</p>
						<p class="details-title">Sarjana S1</p>
						<p class="tax-title">Form No. #24411111113</p>
					</div>

				</div>

				<div class="card border-0 shadow-sm">
					<div class="card-header tabs-header">
						<ul class="nav nav-pills card-header-tabs" id="myTab" role="tablist">

							<li class="nav-item" role="presentation">
								<button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">
									<div class="d-flex align-items-center gap-2">
										<img src="/assets/intakeyear.png" alt="icon1" class="details-tab-icon" />
										<p class="details-tab-title text-capitalize m-0">Intake Year</p>
									</div>
								</button>
							</li>

							<li class="nav-item" role="presentation">
								<button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="true">
									<div class="d-flex align-items-center gap-2">
										<img src="/assets/personalinformation.png" alt="icon1" class="details-tab-icon" />
										<p class="details-tab-title text-capitalize m-0">Personal Info</p>
									</div>
								</button>
							</li>

							<li class="nav-item" role="presentation">
								<button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="true">
									<div class="d-flex align-items-center gap-2">
										<img src="/assets/educational-icon.png" alt="icon1" class="details-tab-icon" />
										<p class="details-tab-title text-capitalize m-0">Education Info</p>
									</div>
								</button>
							</li>

							<li class="nav-item" role="presentation">
								<button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="tab4" aria-selected="true">
									<div class="d-flex align-items-center gap-2">
										<img src="/assets/entry-icon.png" alt="icon1" class="details-tab-icon" />
										<p class="details-tab-title text-capitalize m-0">Entry Option</p>
									</div>
								</button>
							</li>

							<li class="nav-item" role="presentation">
								<button class="nav-link" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab5" type="button" role="tab" aria-controls="tab5" aria-selected="true">
									<div class="d-flex align-items-center gap-2">
										<img src="/assets/parent-icon.png" alt="icon1" class="details-tab-icon" />
										<p class="details-tab-title text-capitalize m-0">Re-registration Info</p>
									</div>
								</button>
							</li>

							<li class="nav-item" role="presentation">
								<button class="nav-link" id="tab6-tab" data-bs-toggle="tab" data-bs-target="#tab6" type="button" role="tab" aria-controls="tab6" aria-selected="true">
									<div class="d-flex align-items-center gap-2">
										<img src="/assets/doc-icon.png" alt="icon1" class="details-tab-icon" />
										<p class="details-tab-title text-capitalize m-0">Documents</p>
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
									<div class="row col-md-4">

										<p class="tabs-title">Intake Year</p>
										<div class="my-2">
											<hr class="full-width-detail" />
										</div>
										<div class="col-md-6 mb-2">
											<p for="intakeYear" class="detail-title">Intake Year</p>
										</div>
										<div class="col-md-6">
											<p class="detail-subtitle">register</p>
										</div>

										<div class="col-md-6 mb-2">
											<p for="campus" class="detail-title">Campus</p>
										</div>
										<div class="col-md-6 mb-2">
											<p class="detail-subtitle">Lippo Village Campus</p>
										</div>

										<div class="col-md-6 mb-2">
											<p for="campus" class="detail-title">Category of Study</p>
										</div>
										<div class="col-md-6 mb-2">
											<p class="detail-subtitle">Undergraduate (S1)</p>
										</div>

									</div>

								</div>

								<div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
									<div class="d-flex justify-content-between">
										<div class="row col-md-4">

											<p class="tabs-title">Personal Background 1</p>
											<div class="my-2">
												<hr class="full-width-detail" />
											</div>
											<div class="col-md-6 mb-2">
												<p for="intakeYear" class="detail-title">First Name</p>
											</div>
											<div class="col-md-6">
												<p class="detail-subtitle">Fist Name</p>
											</div>

											<div class="col-md-6 mb-2">
												<p for="campus" class="detail-title">Middle Name</p>
											</div>
											<div class="col-md-6 mb-2">
												<p class="detail-subtitle">Middle Name</p>
											</div>

											<div class="col-md-6 mb-2">
												<p for="campus" class="detail-title">Last Name</p>
											</div>
											<div class="col-md-6 mb-2">
												<p class="detail-subtitle">Last Name</p>
											</div>

											<div class="col-md-6 mb-2">
												<p for="campus" class="detail-title">Date of Birth</p>
											</div>
											<div class="col-md-6 mb-2">
												<p class="detail-subtitle">Date of Birth</p>
											</div>

											<div class="col-md-6 mb-2">
												<p for="campus" class="detail-title">City of Birth</p>
											</div>
											<div class="col-md-6 mb-2">
												<p class="detail-subtitle">City of Birth</p>
											</div>

											<div class="col-md-6 mb-2">
												<p for="campus" class="detail-title">Gender</p>
											</div>
											<div class="col-md-6 mb-2">
												<p class="detail-subtitle">Gender</p>
											</div>

										</div>
										<div class="row col-md-4">

											<p class="tabs-title">Personal Background 2</p>
											<div class="my-2">
												<hr class="full-width-detail" />
											</div>
											<div class="col-md-6 mb-2">
												<p for="intakeYear" class="detail-title">Citizenship</p>
											</div>
											<div class="col-md-6">
												<p class="detail-subtitle">Citizenship</p>
											</div>

											<div class="col-md-6 mb-2">
												<p for="campus" class="detail-title">NIK/ID Number</p>
											</div>
											<div class="col-md-6 mb-2">
												<p class="detail-subtitle">NIK/ID Number</p>
											</div>

											<div class="col-md-6 mb-2">
												<p for="campus" class="detail-title">Religion</p>
											</div>
											<div class="col-md-6 mb-2">
												<p class="detail-subtitle">Religion</p>
											</div>

											<div class="col-md-6 mb-2">
												<p for="campus" class="detail-title">Church Name</p>
											</div>
											<div class="col-md-6 mb-2">
												<p class="detail-subtitle">Church Name</p>
											</div>

											<div class="col-md-6 mb-2">
												<p for="campus" class="detail-title">Marital Status</p>
											</div>
											<div class="col-md-6 mb-2">
												<p class="detail-subtitle">Marital Status</p>
											</div>

											<div class="col-md-6 mb-2">
												<p for="campus" class="detail-title">YPPH Employee?</p>
											</div>
											<div class="col-md-6 mb-2">
												<p class="detail-subtitle">YPPH Employee?</p>
											</div>

										</div>

										<div class="row col-md-4">

											<p class="tabs-title">Contact Information </p>
											<div class="my-2">
												<hr class="full-width-detail" />
											</div>
											<div class="col-md-6 mb-2">
												<p for="intakeYear" class="detail-title">Mobile Phone Number</p>
											</div>
											<div class="col-md-6">
												<p class="detail-subtitle">+62 Indonesia </p>
												<p class="detail-subtitle">081117393734 </p>
											</div>

											<div class="col-md-6 mb-2">
												<p for="campus" class="detail-title">WhatsApp Number</p>
											</div>
											<div class="col-md-6 mb-2">
												<p class="detail-subtitle">+62 Indonesia </p>
												<p class="detail-subtitle">081117393734 </p>
											</div>

											<div class="col-md-6 mb-2">
												<p for="campus" class="detail-title">Home Phone Number</p>
											</div>
											<div class="col-md-6 mb-2">
												<p class="detail-subtitle">+62 Indonesia </p>
												<p class="detail-subtitle">081117393734 </p>
											</div>

											<div class="col-md-6 mb-2">
												<p for="campus" class="detail-title">Email Address</p>
											</div>
											<div class="col-md-6 mb-2">
												<p class="detail-subtitle">Email Address</p>
											</div>

											<div class="col-md-6 mb-2">
												<p for="campus" class="detail-title">Contact Preferrence</p>
											</div>
											<div class="col-md-6 mb-2">
												<p class="detail-subtitle">Contact Preferrence</p>
											</div>

										</div>

									</div>


								</div>

								<div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
									<div class="row col-md-4">

										<p class="tabs-title">Education Information</p>
										<div class="my-2">
											<hr class="full-width-detail" />
										</div>
										<div class="col-md-6 mb-2">
											<p for="intakeYear" class="detail-title">High School</p>
										</div>
										<div class="col-md-6">
											<p class="detail-subtitle">High School</p>
										</div>

										<div class="col-md-6 mb-2">
											<p for="campus" class="detail-title">City</p>
										</div>
										<div class="col-md-6 mb-2">
											<p class="detail-subtitle">City</p>
										</div>

										<div class="col-md-6 mb-2">
											<p for="campus" class="detail-title">Graduation Status</p>
										</div>
										<div class="col-md-6 mb-2">
											<p class="detail-subtitle">Graduation Status</p>
										</div>

										<div class="col-md-6 mb-2">
											<p for="campus" class="detail-title">Graduation Year</p>
										</div>
										<div class="col-md-6 mb-2">
											<p class="detail-subtitle">Graduation Year</p>
										</div>

										<div class="col-md-6 mb-2">
											<p for="campus" class="detail-title">Final Certificate</p>
										</div>
										<div class="col-md-6 mb-2">
											<p class="detail-subtitle">Final Certificate</p>
										</div>

									</div>

								</div>

								<div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
									<div class="row col-md-4">

										<p class="tabs-title">Entry Option</p>
										<div class="my-2">
											<hr class="full-width-detail" />
										</div>
										<div class="col-md-6 mb-2">
											<p for="intakeYear" class="detail-title">Entry Type</p>
										</div>
										<div class="col-md-6">
											<p class="detail-subtitle">Entry Type</p>
										</div>

										<div class="col-md-6 mb-2">
											<p for="campus" class="detail-title">College</p>
										</div>
										<div class="col-md-6 mb-2">
											<p class="detail-subtitle">College</p>
										</div>

										<div class="col-md-6 mb-2">
											<p for="campus" class="detail-title">Faculty</p>
										</div>
										<div class="col-md-6 mb-2">
											<p class="detail-subtitle">Faculty</p>
										</div>

										<div class="col-md-6 mb-2">
											<p for="campus" class="detail-title">Program</p>
										</div>
										<div class="col-md-6 mb-2">
											<p class="detail-subtitle">Program</p>
										</div>

										<div class="col-md-6 mb-2">
											<p for="campus" class="detail-title">Class Session</p>
										</div>
										<div class="col-md-6 mb-2">
											<p class="detail-subtitle">Class Session</p>
										</div>

										<div class="col-md-6 mb-2">
											<p for="campus" class="detail-title">Class Type</p>
										</div>
										<div class="col-md-6 mb-2">
											<p class="detail-subtitle">Class Type</p>
										</div>

										<div class="col-md-6 mb-2">
											<p for="campus" class="detail-title">Entry Option</p>
										</div>
										<div class="col-md-6 mb-2">
											<p class="detail-subtitle">Entry Option</p>
										</div>

										<div class="col-md-6 mb-2">
											<p for="campus" class="detail-title">Scholarship Type</p>
										</div>
										<div class="col-md-6 mb-2">
											<p class="detail-subtitle">Scholarship Type</p>
										</div>

									</div>

								</div>

								<div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
									<div class="row">
										<div class="col-md-4">

											<p class="tabs-title">Address Information</p>
											<div class="my-2">
												<hr class="full-width-detail" />
											</div>
											<p class="tabs-title mb-2">Home Address</p>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="intakeYear" class="detail-title">Home Address</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Jl. Kesana Kemari Mencari Alamat No. 122</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">Province or State</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Province or State</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">City</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">City</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">District</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">District</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">Village</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Village</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">RT</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">RT</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">RW</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">RW</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">Postal Code</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Postal Code</p>
												</div>
											</div>

										</div>

										<div class="col-md-4">

											<p class="tabs-title">Parents Information</p>
											<div class="my-2">
												<hr class="full-width-detail" />
											</div>
											<p class="tabs-title mb-2">Mother Information</p>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="intakeYear" class="detail-title">First Name</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Mom</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="intakeYear" class="detail-title">Last Name</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Mom</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="intakeYear" class="detail-title">Status</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Status</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="intakeYear" class="detail-title">Mobile Phone Number</p>
												</div>
												<div class="col-md-6">
													<p class="detail-subtitle">+62 Indonesia </p>
													<p class="detail-subtitle">081117393734 </p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="intakeYear" class="detail-title">Email Address</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Email Address</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="intakeYear" class="detail-title">Religion</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Religion</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="intakeYear" class="detail-title">Occupation</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Occupation</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="intakeYear" class="detail-title">Last Education</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Last Education</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="intakeYear" class="detail-title">Home Address</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Jl. Kesana Kemari Mencari Alamat No. 122</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">Province or State</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Province or State</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">City</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">City</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">District</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">District</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">Village</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Village</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">RT</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">RT</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">RW</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">RW</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">Postal Code</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Postal Code</p>
												</div>
											</div>

										</div>

										<div class="col-md-4">

											<p class="tabs-title">Guardian Information</p>
											<div class="my-2">
												<hr class="full-width-detail" />
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="intakeYear" class="detail-title">First Name</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">First Name</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="intakeYear" class="detail-title">Last Name</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Last Name</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="intakeYear" class="detail-title">Family Relationship</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Family Relationship</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="intakeYear" class="detail-title">Mobile Phone Number</p>
												</div>
												<div class="col-md-6">
													<p class="detail-subtitle">+62 Indonesia </p>
													<p class="detail-subtitle">081117393734 </p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="intakeYear" class="detail-title">Email Address</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Email Address</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="intakeYear" class="detail-title">Religion</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Religion</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="intakeYear" class="detail-title">Occupation</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Occupation</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="intakeYear" class="detail-title">Last Education</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Last Education</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="intakeYear" class="detail-title">Home Address</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Jl. Kesana Kemari Mencari Alamat No. 122</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">Province or State</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Province or State</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">City</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">City</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">District</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">District</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">Village</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Village</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">RT</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">RT</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">RW</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">RW</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">Postal Code</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Postal Code</p>
												</div>
											</div>

										</div>

										<div class="col-md-4 mt-3">

											<p class="tabs-title">Correspondence Address Information</p>
											<div class="my-2">
												<hr class="full-width-detail" />
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="intakeYear" class="detail-title">Home Address</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Jl. Kesana Kemari Mencari Alamat No. 122</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">Province or State</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Province or State</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">City</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">City</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">District</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">District</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">Village</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Village</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">RT</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">RT</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">RW</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">RW</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">Postal Code</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Postal Code</p>
												</div>
											</div>

										</div>

										<div class="col-md-4 mt-3">

											<p class="tabs-title">Parents Information</p>
											<div class="my-2">
												<hr class="full-width-detail" />
											</div>
											<p class="tabs-title mb-2">Father Information</p>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="intakeYear" class="detail-title">First Name</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Dad</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="intakeYear" class="detail-title">Last Name</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Dad</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="intakeYear" class="detail-title">Status</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Status</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="intakeYear" class="detail-title">Mobile Phone Number</p>
												</div>
												<div class="col-md-6">
													<p class="detail-subtitle">+62 Indonesia </p>
													<p class="detail-subtitle">081117393734 </p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="intakeYear" class="detail-title">Email Address</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Email Address</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="intakeYear" class="detail-title">Religion</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Religion</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="intakeYear" class="detail-title">Occupation</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Occupation</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="intakeYear" class="detail-title">Last Education</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Last Education</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="intakeYear" class="detail-title">Home Address</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Jl. Kesana Kemari Mencari Alamat No. 122</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">Province or State</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Province or State</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">City</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">City</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">District</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">District</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">Village</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Village</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">RT</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">RT</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">RW</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">RW</p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-2">
													<p for="campus" class="detail-title">Postal Code</p>
												</div>
												<div class="col-md-6 mb-2">
													<p class="detail-subtitle">Postal Code</p>
												</div>
											</div>

										</div>

									</div>


								</div>

								<div class="tab-pane fade" id="tab6" role="tabpanel" aria-labelledby="tab6-tab">
									<div class="row col-md-12 mb-5">

										<p class="tabs-title">Re-Registration Documents</p>
										<div class="my-2">
											<hr class="full-width-detail" />
										</div>
										<div>
											<p class="file-validation mb-3 pt-1">
												Upload your document, Allowed file type : <span class="file-validation-file">jpg,jpeg,png</span> and max file size is 10MB, <span class="file-validation-required">(*) Is Required
													Field</span>
											</p>

											<div class="file-input-row">
												<label for="formTataTertib" class="tabs-title docs-title">Form Tata Tertib</label>
												<div class="file-input px-2">
													<span class="forgot-password">Upload File</span>
													<img src="/assets/trash-icon.png" alt="delete" />
												</div>
												<span class="d-flex gap-2">
													<p class="file-status-details">Uploaded</p>
													<p class="file-status-valid">Validated</p>
												</span>
											</div>

											<div class="file-input-row">
												<label class="tabs-title docs-title">Scan Akte Kelahiran Berwarna</label>
												<div class="file-input px-2">
													<span class="forgot-password">Upload File</span>
													<img src="/assets/trash-icon.png" alt="delete" />
												</div>
												<span class="d-flex gap-2">
													<p class="file-status-details">Uploaded</p>
													{{-- <p class="file-status-review">On Review</p> --}}
													<p class="file-status-valid">Validated</p>
												</span>
											</div>

											<div class="file-input-row">
												<label for="ijazah" class="tabs-title docs-title">Scan Ijazah SMA/ Penyetaraan Ijazah/ Scan Ijazah Diploma/Ijazah Paket C(Bewarna)</label>
												<div id="ijazahContainer" class="file-input px-2">
													<span id="ijazahName" class="forgot-password">Upload File</span>
													<img id="ijazahTrash" src="/assets/trash-icon.png" alt="delete" />
												</div>
												<span class="d-flex gap-2">
													<p class="file-status-details">Uploaded</p>
													{{-- <p class="file-status-review">On Review</p> --}}
													<p class="file-status-valid">Validated</p>
												</span>
											</div>

											<div class="file-input-row">
												<label for="ktp" class="tabs-title docs-title">Scan KTP Bewarna</label>
												<div id="ktpContainer" class="file-input px-2">
													<span id="ktpName" class="forgot-password">Upload File</span>
													<img src="/assets/trash-icon.png" alt="delete" class="delete" />
												</div>
												<p class="file-status-details">Uploaded</p>
												<span class="d-flex gap-2">
													<p class="file-status-valid">Validated</p>
												</span>

												{{-- <span class="d-flex align-items-center gap-2">
													<img src="/assets/caution.png" alt="caution icon" class="caution-icon">
													<p class="file-validation">note: your image is blur. please retake the image.</p>
												</span> --}}
											</div>

											<div class="file-input-row">
												<label class="tabs-title docs-title">Photograph (blue background)</label>
												<div class="file-input px-2">
													<span class="forgot-password">Upload File</span>
													<img src="/assets/trash-icon.png" alt="delete" />
												</div>
												<span class="d-flex gap-2">
													<p class="file-status-details">Uploaded</p>
													<p class="file-status-review">On Review</p>
												</span>
											</div>

											<p class="file-validation">
												* required documents that need to be reviewed.
											</p>
										</div>

									</div>

									<div class="row col-md-12 mb-5">

										<p class="tabs-title">Re-Registration Documents</p>
										<div class="my-2">
											<hr class="full-width-detail" />
										</div>
										<div>
											<p class="file-validation mb-3 pt-1">
												Upload your document, Allowed file type : <span class="file-validation-file">jpg,jpeg,png</span> and max file size is 10MB, <span class="file-validation-required">(*) Is Required
													Field</span>
											</p>

											<div class="file-input-row">
												<label for="formTataTertib" class="tabs-title docs-title">Copy of Family Registration Card (KK) *</label>
												<div class="file-input px-2">
													<span class="forgot-password">Upload File</span>
													<img src="/assets/trash-icon.png" alt="delete" />
												</div>
												<span class="d-flex gap-2">
													<p class="file-status-details">Uploaded</p>
													<p class="file-status-valid">Validated</p>
												</span>
											</div>

											<div class="file-input-row">
												<label class="tabs-title docs-title">A document showing your NISN Number *</label>
												<div class="file-input px-2">
													<span class="forgot-password">Upload File</span>
													<img src="/assets/trash-icon.png" alt="delete" />
												</div>
												<span class="d-flex gap-2">
													<p class="file-status-details">Uploaded</p>
													{{-- <p class="file-status-review">On Review</p> --}}
													<p class="file-status-valid">Validated</p>
												</span>
											</div>

											<div class="file-input-row">
												<label for="ijazah" class="tabs-title docs-title">Senior Academic Record Grade 10 Semester 1</label>
												<div id="ijazahContainer" class="file-input px-2">
													<span id="ijazahName" class="forgot-password">Upload File</span>
													<img id="ijazahTrash" src="/assets/trash-icon.png" alt="delete" />
												</div>
												<span class="d-flex gap-2">
													<p class="file-status-details">Uploaded</p>
													{{-- <p class="file-status-review">On Review</p> --}}
													<p class="file-status-valid">Validated</p>
												</span>
											</div>

											<div class="file-input-row">
												<label for="ktp" class="tabs-title docs-title">Senior Academic Record Grade 10 Semester 2</label>
												<div id="ktpContainer" class="file-input px-2">
													<span id="ktpName" class="forgot-password">Upload File</span>
													<img src="/assets/trash-icon.png" alt="delete" class="delete" />
												</div>
												<p class="file-status-details">Uploaded</p>
												<span class="d-flex gap-2">
													<p class="file-status-valid">Validated</p>
												</span>

												{{-- <span class="d-flex align-items-center gap-2">
													<img src="/assets/caution.png" alt="caution icon" class="caution-icon">
													<p class="file-validation">note: your image is blur. please retake the image.</p>
												</span> --}}
											</div>

											<div class="file-input-row">
												<label class="tabs-title docs-title">Senior Academic Record Grade 11 Semester 1</label>
												<div class="file-input px-2">
													<span class="forgot-password">Upload File</span>
													<img src="/assets/trash-icon.png" alt="delete" />
												</div>
												<span class="d-flex gap-2">
													<p class="file-status-details">Uploaded</p>
													<p class="file-status-review">On Review</p>
												</span>
											</div>

											<div class="file-input-row">
												<label class="tabs-title docs-title">Senior Academic Record Grade 11 Semester 2</label>
												<div class="file-input px-2">
													<span class="forgot-password">Upload File</span>
													<img src="/assets/trash-icon.png" alt="delete" />
												</div>
												<span class="d-flex gap-2">
													<p class="file-status-details">Uploaded</p>
													<p class="file-status-review">On Review</p>
												</span>
											</div>

											<p class="file-validation">
												* required documents that need to be reviewed.
											</p>
										</div>

									</div>

									<div class="row col-md-12 mb-5">

										<p class="tabs-title">Re-Registration Documents</p>
										<div class="my-2">
											<hr class="full-width-detail" />
										</div>
										<div>
											<p class="file-validation mb-3 pt-1">
												Upload your document, Allowed file type : <span class="file-validation-file">jpg,jpeg,png</span> and max file size is 10MB, <span class="file-validation-required">(*) Is Required
													Field</span>
											</p>

											<div class="file-input-row">
												<label for="formTataTertib" class="tabs-title docs-title">Statement Letter for Student with Special Needs (if needed)</label>
												<div class="file-input px-2">
													<span class="forgot-password">Upload File</span>
													<img src="/assets/trash-icon.png" alt="delete" />
												</div>
												<span class="d-flex gap-2">
													<p class="file-status-details">Uploaded</p>
													<p class="file-status-valid">Validated</p>
												</span>
											</div>

											<div class="file-input-row">
												<label class="tabs-title docs-title">4 (Four) Hand Drawings *</label>
												<div class="file-input px-2">
													<span class="forgot-password">Upload File</span>
													<img src="/assets/trash-icon.png" alt="delete" />
												</div>
												<span class="d-flex gap-2">
													<p class="file-status-details">Uploaded</p>
													{{-- <p class="file-status-review">On Review</p> --}}
													<p class="file-status-valid">Validated</p>
												</span>
											</div>

											<div class="file-input-row">
												<label for="ijazah" class="tabs-title docs-title">One Page Essay refer to School of Design Application Form</label>
												<div id="ijazahContainer" class="file-input px-2">
													<span id="ijazahName" class="forgot-password">Upload File</span>
													<img id="ijazahTrash" src="/assets/trash-icon.png" alt="delete" />
												</div>
												<span class="d-flex gap-2">
													<p class="file-status-details">Uploaded</p>
													{{-- <p class="file-status-review">On Review</p> --}}
													<p class="file-status-valid">Validated</p>
												</span>
											</div>

											<div class="file-input-row">
												<label for="ktp" class="tabs-title docs-title">Statement letter signed by applicants and parent, refer to SOD Applications Form </label>
												<div id="ktpContainer" class="file-input px-2">
													<span id="ktpName" class="forgot-password">Upload File</span>
													<img src="/assets/trash-icon.png" alt="delete" class="delete" />
												</div>
												<p class="file-status-details">Uploaded</p>
												<span class="d-flex gap-2">
													<p class="file-status-valid">Validated</p>
												</span>

												{{-- <span class="d-flex align-items-center gap-2">
													<img src="/assets/caution.png" alt="caution icon" class="caution-icon">
													<p class="file-validation">note: your image is blur. please retake the image.</p>
												</span> --}}
											</div>

											<div class="file-input-row">
												<label class="tabs-title docs-title">Color Blindness Test Certificate by Ophthalmologist or Oculist*</label>
												<div class="file-input px-2">
													<span class="forgot-password">Upload File</span>
													<img src="/assets/trash-icon.png" alt="delete" />
												</div>
												<span class="d-flex gap-2">
													<p class="file-status-details">Uploaded</p>
													<p class="file-status-review">On Review</p>
												</span>
											</div>

											<div class="file-input-row">
												<label class="tabs-title docs-title">Arts & Crafts Portofolio</label>
												<div class="file-input px-2">
													<span class="forgot-password">Upload File</span>
													<img src="/assets/trash-icon.png" alt="delete" />
												</div>
												<span class="d-flex gap-2">
													<p class="file-status-details">Uploaded</p>
													<p class="file-status-review">On Review</p>
												</span>
											</div>

											<p class="file-validation">
												* required documents that need to be reviewed.
											</p>
										</div>

									</div>

								</div>
							</div>


						</form>
					</div>
				</div>
			</div>
			<span class="d-flex align-items-md-center mt-4 cursor-pointer gap-2" role="button">
				<div class="d-none d-md-flex align-items-center justify-content-center gap-2" onclick="window.location.href = '/dashboard'">
					<img src="/assets/left-arrow.png" alt="arrow-left" class="arrow-left" />
					<p class="back-button p-0">back to dashboard</p>
				</div>

				<button type="button" class="d-md-none btn btn-back-responsive danger-button d-flex justify-content-center align-items-center mt-5 gap-2 px-5" onclick="window.location.href = '/'"><img
						src="/assets/arrow-back-red.png"
						alt="arrow-left"
						class="arrow-left" />back to Dashboard</button>
			</span>

			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	</body>

</html>
