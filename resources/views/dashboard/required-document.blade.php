<!DOCTYPE html>
<html lang="en">

	<x-head title="Family Background">
		<x-slot name="inlineCSS">
			<style>
				.modal-body {
					max-height: 350px;
					overflow-y: auto;
				}

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
			<div class="d-md-flex d-none mb-4 gap-2">
				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">01</p>
						<p class="step-subtitle w-30 m-0">Intake Year</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-done.png" alt="step" class="step-icon" />
						<hr class="done-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">02</p>
						<p class="step-subtitle w-30 m-0">Personal Information</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-done.png" alt="step" class="step-icon" />
						<hr class="done-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">03</p>
						<p class="step-subtitle w-30 m-0">Family Background</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-done.png" alt="step" class="step-icon" />
						<hr class="done-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">04</p>
						<p class="step-subtitle w-30 m-0">Education Information</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-done.png" alt="step" class="step-icon" />
						<hr class="done-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">05</p>
						<p class="step-subtitle w-30 m-0">Entry Option</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-done.png" alt="step" class="step-icon" />
						<hr class="done-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">06</p>
						<p class="step-subtitle w-30 m-0">Review & Payment</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-done.png" alt="step" class="step-icon" />
						<hr class="dashed-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2 align-items-start">
						<p class="step-title m-0">07</p>
						<span class="d-flex gap-3 align-items-end">
							<p class="step-subtitle w-50 m-0">Required Documents</p>
							<img src="/assets/caution-icon.png" alt="caution-icon" style="height: 16.75px; width: 18.73px; ">
						</span>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-bold.png" alt="step" class="step-icon" />
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

					<span class="text-white" onclick="window.location.href = '/dashboard/intakeyear'">
						<p class="mobile-title">Step 7 of 7</p>
						<p class="mobile-subtitle">Required Documents</p>
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
									<img src="/assets/entry-icon.png" alt="icon1" class="tab-icon" />
									<span class="d-flex flex-column text-start">
										<p class="tabs-title text-capitalize m-0">General Documents</p>
										<p class="tabs-subtitle m-0">general required documents</p>
									</span>
								</div>
							</button>
						</li>
						<!-- Tab 2 -->
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="true">
								<div class="d-flex">
									<img src="/assets/entry-icon.png" alt="icon1" class="tab-icon" />
									<span class="d-flex flex-column text-start">
										<p class="tabs-title text-capitalize m-0">Program Documents</p>
										<p class="tabs-subtitle m-0">program required documents</p>
									</span>
								</div>
							</button>
						</li>
						<!-- Tab 3 -->
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="true">
								<div class="d-flex">
									<img src="/assets/entry-icon.png" alt="icon1" class="tab-icon" />
									<span class="d-flex flex-column text-start">
										<p class="tabs-title text-capitalize m-0">Scholarship Documents</p>
										<p class="tabs-subtitle m-0">program required documents</p>
									</span>
								</div>
							</button>
						</li>
						<!-- Tab 4 -->
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="tab4" aria-selected="true">
								<div class="d-flex">
									<img src="/assets/entry-icon.png" alt="icon1" class="tab-icon" />
									<span class="d-flex flex-column text-start">
										<p class="tabs-title text-capitalize m-0">Student Group Documents</p>
										<p class="tabs-subtitle m-0">program required documents</p>
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
								<div>
									<p class="file-validation mb-3 pt-1">
										Upload your document, Allowed file type : <span class="file-validation-file">jpg,jpeg,png</span> and max file size is 10MB, <span class="file-validation-required">(*) Is Required
											Field</span>
									</p>

									<div class="file-input-row">
										<label for="familyGeneralDoc" class="tabs-title docs-title">Document:</label>
										<input type="file" class="custom-file-input" id="familyGeneralDoc">
										{{-- when document is valid --}}
										{{-- <span class="doc-is-valid">
											<p><i class="fa-solid fa-check" style="color: #ffffff; padding-right: 5px;"></i> Document is Valid</p>
										</span> --}}
										{{-- when document is not valid --}}
										{{-- <span class="doc-is-not-valid">
											<p><i class="fa-solid fa-x fa-lg" style="color: #ffffff; padding-right: 5px;"></i> Document is not Valid</p>
										</span> --}}
										<span class="d-flex gap-2">
											<p id="familyGeneralDocStatus" class="file-status">Preview</p>
											{{-- beri status sesuai kondisi file --}}
											{{-- <p class="file-status-valid">Validated</p> --}}
											{{-- <p class="file-status-invalid">Invalid</p> --}}
											{{-- <p class="file-status-review">On Review</p> --}}
											{{-- <p class="reference-doc">reference documents</p> --}}
										</span>
										{{-- jika status file validation muncul, hide input & span diatas, show span dibawah  --}}
										{{-- <span class="d-flex align-items-center gap-2">
											<img src="/assets/caution.png" alt="caution icon" class="caution-icon">
											<p class="file-validation">note: your image is blur. please retake the image.</p>
										</span> --}}
									</div>

									<div class="file-input-row">
										<label for="nisnNumber" class="tabs-title docs-title">Document: </label>
										<input type="file" class="custom-file-input" id="nisnNumber">
										{{-- when document is valid --}}
										{{-- <span class="doc-is-valid">
											<p><i class="fa-solid fa-check" style="color: #ffffff; padding-right: 5px;"></i> Document is Valid</p>
										</span> --}}
										{{-- when document is not valid --}}
										{{-- <span class="doc-is-not-valid">
											<p><i class="fa-solid fa-x fa-lg" style="color: #ffffff; padding-right: 5px;"></i> Document is not Valid</p>
										</span> --}}
										<span class="d-flex gap-2">
											<p id="nisnNumberStatus" class="file-status">Preview</p>
											{{-- beri status sesuai kondisi file --}}
											{{-- <p class="file-status-valid">Validated</p> --}}
											<p class="file-status-invalid">Invalid</p>
											<p class="file-status-review">On Review</p>
											<p class="reference-doc">reference documents</p>
										</span>
										{{-- jika status file validation muncul, hide input & span diatas, show span dibawah  --}}
										{{-- <span class="d-flex align-items-center gap-2">
											<img src="/assets/caution.png" alt="caution icon" class="caution-icon">
											<p class="file-validation">note: your image is blur. please retake the image.</p>
										</span> --}}
									</div>

									<div class="file-input-row">
										<label for="recordSemesterFirst" class="tabs-title docs-title">Document: </label>
										<input type="file" class="custom-file-input" id="recordSemesterFirst">
										{{-- when document is valid --}}
										{{-- <span class="doc-is-valid">
											<p><i class="fa-solid fa-check" style="color: #ffffff; padding-right: 5px;"></i> Document is Valid</p>
										</span> --}}
										{{-- when document is not valid --}}
										{{-- <span class="doc-is-not-valid">
											<p><i class="fa-solid fa-x fa-lg" style="color: #ffffff; padding-right: 5px;"></i> Document is not Valid</p>
										</span> --}}
										<span class="d-flex gap-2">
											<p id="recordSemesterFirstStatus" class="file-status">Preview</p>
											{{-- beri status sesuai kondisi file --}}
											{{-- <p class="file-status-valid">Validated</p> --}}
											{{-- <p class="file-status-invalid">Invalid</p> --}}
											{{-- <p class="file-status-review">On Review</p> --}}
											{{-- <p class="reference-doc">reference documents</p> --}}
										</span>
										{{-- jika status file validation muncul, hide input & span diatas, show span dibawah  --}}
										{{-- <span class="d-flex align-items-center gap-2">
											<img src="/assets/caution.png" alt="caution icon" class="caution-icon">
											<p class="file-validation">note: your image is blur. please retake the image.</p>
										</span> --}}
									</div>

									<div class="file-input-row">
										<label for="recordSemesterSecond" class="tabs-title docs-title">Document: </label>
										<input type="file" class="custom-file-input">
										{{-- when document is valid --}}
										{{-- <span class="doc-is-valid">
											<p><i class="fa-solid fa-check" style="color: #ffffff; padding-right: 5px;"></i> Document is Valid</p>
										</span> --}}
										{{-- when document is not valid --}}
										{{-- <span class="doc-is-not-valid">
											<p><i class="fa-solid fa-x fa-lg" style="color: #ffffff; padding-right: 5px;"></i> Document is not Valid</p>
										</span> --}}
										<span class="d-flex gap-2">
											<p id="recordSemesterSecondStatus" class="file-status">Preview</p>
											{{-- beri status sesuai kondisi file --}}
											{{-- <p class="file-status-valid">Validated</p> --}}
											{{-- <p class="file-status-invalid">Invalid</p> --}}
											{{-- <p class="file-status-review">On Review</p> --}}
											{{-- <p class="reference-doc">reference documents</p> --}}
										</span>
										{{-- jika status file validation muncul, hide input & span diatas, show span dibawah  --}}
										{{-- <span class="d-flex align-items-center gap-2">
											<img src="/assets/caution.png" alt="caution icon" class="caution-icon">
											<p class="file-validation">note: your image is blur. please retake the image.</p>
										</span> --}}
									</div>

									<div class="file-input-row">
										<label for="recordSemesterThird" class="tabs-title docs-title">Document: </label>
										<input type="file" class="custom-file-input">
										{{-- when document is valid --}}
										{{-- <span class="doc-is-valid">
											<p><i class="fa-solid fa-check" style="color: #ffffff; padding-right: 5px;"></i> Document is Valid</p>
										</span> --}}
										{{-- when document is not valid --}}
										{{-- <span class="doc-is-not-valid">
											<p><i class="fa-solid fa-x fa-lg" style="color: #ffffff; padding-right: 5px;"></i> Document is not Valid</p>
										</span> --}}
										<span class="d-flex gap-2">
											<p id="recordSemesterThirdStatus" class="file-status">Preview</p>
											{{-- beri status sesuai kondisi file --}}
											{{-- <p class="file-status-valid">Validated</p> --}}
											{{-- <p class="file-status-invalid">Invalid</p> --}}
											{{-- <p id="recordSemesterThirdStatus" class="file-status-review">On Review</p> --}}
										</span>
										{{-- jika status file validation muncul, hide input & span diatas, show span dibawah  --}}
										{{-- <span class="d-flex align-items-center gap-2">
											<img src="/assets/caution.png" alt="caution icon" class="caution-icon">
											<p class="file-validation">note: your image is blur. please retake the image.</p>
										</span> --}}
									</div>

									<div class="file-input-row">
										<label for="recordSemesterForth" class="tabs-title docs-title">Document: </label>
										<input type="file" class="custom-file-input">
										{{-- when document is valid --}}
										{{-- <span class="doc-is-valid">
											<p><i class="fa-solid fa-check" style="color: #ffffff; padding-right: 5px;"></i> Document is Valid</p>
										</span> --}}
										{{-- when document is not valid --}}
										{{-- <span class="doc-is-not-valid">
											<p><i class="fa-solid fa-x fa-lg" style="color: #ffffff; padding-right: 5px;"></i> Document is not Valid</p>
										</span> --}}

										<span class="d-flex gap-2">
											<p id="recordSemesterForthStatus" class="file-status">Preview</p>
											{{-- beri status sesuai kondisi file --}}
											{{-- <p class="file-status-valid">Validated</p> --}}
											{{-- <p class="file-status-invalid">Invalid</p> --}}
											{{-- <p class="file-status-review">On Review</p> --}}
											{{-- <p class="reference-doc">reference documents</p> --}}
										</span>
										{{-- jika status file validation muncul, hide input & span diatas, show span dibawah  --}}
										{{-- <span class="d-flex align-items-center gap-2">
											<img src="/assets/caution.png" alt="caution icon" class="caution-icon">
											<p class="file-validation">note: your image is blur. please retake the image.</p>
										</span> --}}
									</div>
								</div>
							</div>

							<!-- Tab Content 2 -->
							<div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
								<div>
									<p class="file-validation mb-3 pt-1">
										Upload your document, Allowed file type : <span class="file-validation-file">jpg,jpeg,png</span> and max file size is 10MB, <span class="file-validation-required">(*) Is Required
											Field</span>
									</p>

									<div class="file-input-row">
										<label for="statementLetter" class="tabs-title docs-title">Document: </label>
										<input type="file" class="custom-file-input">
										{{-- when document is valid --}}
										{{-- <span class="doc-is-valid">
											<p><i class="fa-solid fa-check" style="color: #ffffff; padding-right: 5px;"></i> Document is Valid</p>
										</span> --}}
										{{-- when document is not valid --}}
										{{-- <span class="doc-is-not-valid">
											<p><i class="fa-solid fa-x fa-lg" style="color: #ffffff; padding-right: 5px;"></i> Document is not Valid</p>
										</span> --}}

										<span class="d-flex gap-2">
											<p id="statementLetterStatus" class="file-status">Preview</p>
											{{-- beri status sesuai kondisi file --}}
											{{-- <p class="file-status-valid">Validated</p> --}}
											{{-- <p class="file-status-invalid">Invalid</p> --}}
											{{-- <p class="file-status-review">On Review</p> --}}
											{{-- <p class="reference-doc">reference documents</p> --}}
										</span>
										{{-- jika status file validation muncul, hide input & span diatas, show span dibawah  --}}
										{{-- <span class="d-flex align-items-center gap-2">
											<img src="/assets/caution.png" alt="caution icon" class="caution-icon">
											<p class="file-validation">note: your image is blur. please retake the image.</p>
										</span> --}}
									</div>

									<div class="file-input-row">
										<label for="handDrawing" class="tabs-title docs-title">Document: </label>
										<input type="file" class="custom-file-input">
										{{-- when document is valid --}}
										{{-- <span class="doc-is-valid">
											<p><i class="fa-solid fa-check" style="color: #ffffff; padding-right: 5px;"></i> Document is Valid</p>
										</span> --}}
										{{-- when document is not valid --}}
										{{-- <span class="doc-is-not-valid">
											<p><i class="fa-solid fa-x fa-lg" style="color: #ffffff; padding-right: 5px;"></i> Document is not Valid</p>
										</span> --}}

										<span class="d-flex gap-2">
											<p id="handDrawingStatus" class="file-status">Preview</p>
											{{-- beri status sesuai kondisi file --}}
											{{-- <p class="file-status-valid">Validated</p> --}}
											{{-- <p class="file-status-invalid">Invalid</p> --}}
											{{-- <p class="file-status-review">On Review</p> --}}
											{{-- <p class="reference-doc">reference documents</p> --}}
										</span>
										{{-- jika status file validation muncul, hide input & span diatas, show span dibawah  --}}
										{{-- <span class="d-flex align-items-center gap-2">
											<img src="/assets/caution.png" alt="caution icon" class="caution-icon">
											<p class="file-validation">note: your image is blur. please retake the image.</p>
										</span> --}}
									</div>

									<div class="file-input-row">
										<label for="essayForm" class="tabs-title docs-title">Document: </label>
										<input type="file" class="custom-file-input">
										{{-- when document is valid --}}
										{{-- <span class="doc-is-valid">
											<p><i class="fa-solid fa-check" style="color: #ffffff; padding-right: 5px;"></i> Document is Valid</p>
										</span> --}}
										{{-- when document is not valid --}}
										{{-- <span class="doc-is-not-valid">
											<p><i class="fa-solid fa-x fa-lg" style="color: #ffffff; padding-right: 5px;"></i> Document is not Valid</p>
										</span> --}}

										<span class="d-flex gap-2">
											<p id="essayFormStatus" class="file-status">Preview</p>
											{{-- beri status sesuai kondisi file --}}
											{{-- <p class="file-status-valid">Validated</p> --}}
											{{-- <p class="file-status-invalid">Invalid</p> --}}
											{{-- <p class="file-status-review">On Review</p> --}}
											{{-- <p class="reference-doc">reference documents</p> --}}
										</span>
										{{-- jika status file validation muncul, hide input & span diatas, show span dibawah  --}}
										{{-- <span class="d-flex align-items-center gap-2">
											<img src="/assets/caution.png" alt="caution icon" class="caution-icon">
											<p class="file-validation">note: your image is blur. please retake the image.</p>
										</span> --}}
									</div>

									<div class="file-input-row">
										<label for="signedLetter" class="tabs-title docs-title">Document: </label>
										<input type="file" class="custom-file-input">
										{{-- when document is valid --}}
										{{-- <span class="doc-is-valid">
											<p><i class="fa-solid fa-check" style="color: #ffffff; padding-right: 5px;"></i> Document is Valid</p>
										</span> --}}
										{{-- when document is not valid --}}
										{{-- <span class="doc-is-not-valid">
											<p><i class="fa-solid fa-x fa-lg" style="color: #ffffff; padding-right: 5px;"></i> Document is not Valid</p>
										</span> --}}

										<span class="d-flex gap-2">
											<p id="signedLetterStatus" class="file-status">Preview</p>
											{{-- beri status sesuai kondisi file --}}
											{{-- <p class="file-status-valid">Validated</p> --}}
											{{-- <p class="file-status-invalid">Invalid</p> --}}
											{{-- <p class="file-status-review">On Review</p> --}}
											{{-- <p class="reference-doc">reference documents</p> --}}
										</span>
										{{-- jika status file validation muncul, hide input & span diatas, show span dibawah  --}}
										{{-- <span class="d-flex align-items-center gap-2">
											<img src="/assets/caution.png" alt="caution icon" class="caution-icon">
											<p class="file-validation">note: your image is blur. please retake the image.</p>
										</span> --}}
									</div>

									<div class="file-input-row">
										<label for="blindTest" class="tabs-title docs-title">Document: </label>
										<input type="file" class="custom-file-input">
										{{-- when document is valid --}}
										{{-- <span class="doc-is-valid">
											<p><i class="fa-solid fa-check" style="color: #ffffff; padding-right: 5px;"></i> Document is Valid</p>
										</span> --}}
										{{-- when document is not valid --}}
										{{-- <span class="doc-is-not-valid">
											<p><i class="fa-solid fa-x fa-lg" style="color: #ffffff; padding-right: 5px;"></i> Document is not Valid</p>
										</span> --}}

										<span class="d-flex gap-2">
											<p id="blindTestStatus" class="file-status">Preview</p>
											{{-- beri status sesuai kondisi file --}}
											{{-- <p class="file-status-valid">Validated</p> --}}
											{{-- <p class="file-status-invalid">Invalid</p> --}}
											{{-- <p class="file-status-review">On Review</p> --}}
											{{-- <p class="reference-doc">reference documents</p> --}}
										</span>
										{{-- jika status file validation muncul, hide input & span diatas, show span dibawah  --}}
										{{-- <span class="d-flex align-items-center gap-2">
											<img src="/assets/caution.png" alt="caution icon" class="caution-icon">
											<p class="file-validation">note: your image is blur. please retake the image.</p>
										</span> --}}
									</div>

									<div class="file-input-row">
										<label for="artsCrafts" class="tabs-title docs-title">Document: </label>
										<input type="file" class="custom-file-input">
										{{-- when document is valid --}}
										{{-- <span class="doc-is-valid">
											<p><i class="fa-solid fa-check" style="color: #ffffff; padding-right: 5px;"></i> Document is Valid</p>
										</span> --}}
										{{-- when document is not valid --}}
										{{-- <span class="doc-is-not-valid">
											<p><i class="fa-solid fa-x fa-lg" style="color: #ffffff; padding-right: 5px;"></i> Document is not Valid</p>
										</span> --}}

										<span class="d-flex gap-2">
											<p id="artsCraftsStatus" class="file-status">Preview</p>
											{{-- beri status sesuai kondisi file --}}
											{{-- <p class="file-status-valid">Validated</p> --}}
											{{-- <p class="file-status-invalid">Invalid</p> --}}
											{{-- <p class="file-status-review">On Review</p> --}}
											{{-- <p class="reference-doc">reference documents</p> --}}
										</span>
										{{-- jika status file validation muncul, hide input & span diatas, show span dibawah  --}}
										{{-- <span class="d-flex align-items-center gap-2">
											<img src="/assets/caution.png" alt="caution icon" class="caution-icon">
											<p class="file-validation">note: your image is blur. please retake the image.</p>
										</span> --}}
									</div>
								</div>
							</div>

							<!-- Tab Content 3 -->
							<div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
								<div>
									<p class="file-validation mb-3 pt-1">
										Upload your document, Allowed file type : <span class="file-validation-file">jpg,jpeg,png</span> and max file size is 10MB, <span class="file-validation-required">(*) Is Required
											Field</span>
									</p>

									<div class="file-input-row">
										<label for="statementLetter" class="tabs-title docs-title">Document: </label>
										<input type="file" class="custom-file-input">
										{{-- when document is valid --}}
										{{-- <span class="doc-is-valid">
											<p><i class="fa-solid fa-check" style="color: #ffffff; padding-right: 5px;"></i> Document is Valid</p>
										</span> --}}
										{{-- when document is not valid --}}
										{{-- <span class="doc-is-not-valid">
											<p><i class="fa-solid fa-x fa-lg" style="color: #ffffff; padding-right: 5px;"></i> Document is not Valid</p>
										</span> --}}

										<span class="d-flex gap-2">
											<p id="statementLetterStatus" class="file-status">Preview</p>
											{{-- beri status sesuai kondisi file --}}
											{{-- <p class="file-status-valid">Validated</p> --}}
											{{-- <p class="file-status-invalid">Invalid</p> --}}
											{{-- <p class="file-status-review">On Review</p> --}}
											{{-- <p class="reference-doc">reference documents</p> --}}
										</span>
										{{-- jika status file validation muncul, hide input & span diatas, show span dibawah  --}}
										{{-- <span class="d-flex align-items-center gap-2">
											<img src="/assets/caution.png" alt="caution icon" class="caution-icon">
											<p class="file-validation">note: your image is blur. please retake the image.</p>
										</span> --}}
									</div>

									<div class="file-input-row">
										<label for="handDrawing" class="tabs-title docs-title">Document: </label>
										<input type="file" class="custom-file-input">
										{{-- when document is valid --}}
										{{-- <span class="doc-is-valid">
											<p><i class="fa-solid fa-check" style="color: #ffffff; padding-right: 5px;"></i> Document is Valid</p>
										</span> --}}
										{{-- when document is not valid --}}
										{{-- <span class="doc-is-not-valid">
											<p><i class="fa-solid fa-x fa-lg" style="color: #ffffff; padding-right: 5px;"></i> Document is not Valid</p>
										</span> --}}

										<span class="d-flex gap-2">
											<p id="handDrawingStatus" class="file-status">Preview</p>
											{{-- beri status sesuai kondisi file --}}
											{{-- <p class="file-status-valid">Validated</p> --}}
											{{-- <p class="file-status-invalid">Invalid</p> --}}
											{{-- <p class="file-status-review">On Review</p> --}}
											{{-- <p class="reference-doc">reference documents</p> --}}
										</span>
										{{-- jika status file validation muncul, hide input & span diatas, show span dibawah  --}}
										{{-- <span class="d-flex align-items-center gap-2">
											<img src="/assets/caution.png" alt="caution icon" class="caution-icon">
											<p class="file-validation">note: your image is blur. please retake the image.</p>
										</span> --}}
									</div>

									<div class="file-input-row">
										<label for="essayForm" class="tabs-title docs-title">Document: </label>
										<input type="file" class="custom-file-input">
										{{-- when document is valid --}}
										{{-- <span class="doc-is-valid">
											<p><i class="fa-solid fa-check" style="color: #ffffff; padding-right: 5px;"></i> Document is Valid</p>
										</span> --}}
										{{-- when document is not valid --}}
										{{-- <span class="doc-is-not-valid">
											<p><i class="fa-solid fa-x fa-lg" style="color: #ffffff; padding-right: 5px;"></i> Document is not Valid</p>
										</span> --}}

										<span class="d-flex gap-2">
											<p id="essayFormStatus" class="file-status">Preview</p>
											{{-- beri status sesuai kondisi file --}}
											{{-- <p class="file-status-valid">Validated</p> --}}
											{{-- <p class="file-status-invalid">Invalid</p> --}}
											{{-- <p class="file-status-review">On Review</p> --}}
											{{-- <p class="reference-doc">reference documents</p> --}}
										</span>
										{{-- jika status file validation muncul, hide input & span diatas, show span dibawah  --}}
										{{-- <span class="d-flex align-items-center gap-2">
											<img src="/assets/caution.png" alt="caution icon" class="caution-icon">
											<p class="file-validation">note: your image is blur. please retake the image.</p>
										</span> --}}
									</div>

									<div class="file-input-row">
										<label for="signedLetter" class="tabs-title docs-title">Document: </label>
										<input type="file" class="custom-file-input">
										{{-- when document is valid --}}
										{{-- <span class="doc-is-valid">
											<p><i class="fa-solid fa-check" style="color: #ffffff; padding-right: 5px;"></i> Document is Valid</p>
										</span> --}}
										{{-- when document is not valid --}}
										{{-- <span class="doc-is-not-valid">
											<p><i class="fa-solid fa-x fa-lg" style="color: #ffffff; padding-right: 5px;"></i> Document is not Valid</p>
										</span> --}}

										<span class="d-flex gap-2">
											<p id="signedLetterStatus" class="file-status">Preview</p>
											{{-- beri status sesuai kondisi file --}}
											{{-- <p class="file-status-valid">Validated</p> --}}
											{{-- <p class="file-status-invalid">Invalid</p> --}}
											{{-- <p class="file-status-review">On Review</p> --}}
											{{-- <p class="reference-doc">reference documents</p> --}}
										</span>
										{{-- jika status file validation muncul, hide input & span diatas, show span dibawah  --}}
										{{-- <span class="d-flex align-items-center gap-2">
											<img src="/assets/caution.png" alt="caution icon" class="caution-icon">
											<p class="file-validation">note: your image is blur. please retake the image.</p>
										</span> --}}
									</div>

									<div class="file-input-row">
										<label for="blindTest" class="tabs-title docs-title">Document: </label>
										<input type="file" class="custom-file-input">
										{{-- when document is valid --}}
										{{-- <span class="doc-is-valid">
											<p><i class="fa-solid fa-check" style="color: #ffffff; padding-right: 5px;"></i> Document is Valid</p>
										</span> --}}
										{{-- when document is not valid --}}
										{{-- <span class="doc-is-not-valid">
											<p><i class="fa-solid fa-x fa-lg" style="color: #ffffff; padding-right: 5px;"></i> Document is not Valid</p>
										</span> --}}

										<span class="d-flex gap-2">
											<p id="blindTestStatus" class="file-status">Preview</p>
											{{-- beri status sesuai kondisi file --}}
											{{-- <p class="file-status-valid">Validated</p> --}}
											{{-- <p class="file-status-invalid">Invalid</p> --}}
											{{-- <p class="file-status-review">On Review</p> --}}
											{{-- <p class="reference-doc">reference documents</p> --}}
										</span>
										{{-- jika status file validation muncul, hide input & span diatas, show span dibawah  --}}
										{{-- <span class="d-flex align-items-center gap-2">
											<img src="/assets/caution.png" alt="caution icon" class="caution-icon">
											<p class="file-validation">note: your image is blur. please retake the image.</p>
										</span> --}}
									</div>

									<div class="file-input-row">
										<label for="artsCrafts" class="tabs-title docs-title">Document: </label>
										<input type="file" class="custom-file-input">
										{{-- when document is valid --}}
										{{-- <span class="doc-is-valid">
											<p><i class="fa-solid fa-check" style="color: #ffffff; padding-right: 5px;"></i> Document is Valid</p>
										</span> --}}
										{{-- when document is not valid --}}
										{{-- <span class="doc-is-not-valid">
											<p><i class="fa-solid fa-x fa-lg" style="color: #ffffff; padding-right: 5px;"></i> Document is not Valid</p>
										</span> --}}

										<span class="d-flex gap-2">
											<p id="artsCraftsStatus" class="file-status">Preview</p>
											{{-- beri status sesuai kondisi file --}}
											{{-- <p class="file-status-valid">Validated</p> --}}
											{{-- <p class="file-status-invalid">Invalid</p> --}}
											{{-- <p class="file-status-review">On Review</p> --}}
											{{-- <p class="reference-doc">reference documents</p> --}}
										</span>
										{{-- jika status file validation muncul, hide input & span diatas, show span dibawah  --}}
										{{-- <span class="d-flex align-items-center gap-2">
											<img src="/assets/caution.png" alt="caution icon" class="caution-icon">
											<p class="file-validation">note: your image is blur. please retake the image.</p>
										</span> --}}
									</div>
								</div>
							</div>

							<!-- Tab Content 4 -->
							<div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
								<div>
									<p class="file-validation mb-3 pt-1">
										Upload your document, Allowed file type : <span class="file-validation-file">jpg,jpeg,png</span> and max file size is 10MB, <span class="file-validation-required">(*) Is Required
											Field</span>
									</p>

									<div class="file-input-row">
										<label for="statementLetter" class="tabs-title docs-title">Document: </label>
										<input type="file" class="custom-file-input">
										{{-- when document is valid --}}
										{{-- <span class="doc-is-valid">
											<p><i class="fa-solid fa-check" style="color: #ffffff; padding-right: 5px;"></i> Document is Valid</p>
										</span> --}}
										{{-- when document is not valid --}}
										{{-- <span class="doc-is-not-valid">
											<p><i class="fa-solid fa-x fa-lg" style="color: #ffffff; padding-right: 5px;"></i> Document is not Valid</p>
										</span> --}}

										<span class="d-flex gap-2">
											<p id="statementLetterStatus" class="file-status">Preview</p>
											{{-- beri status sesuai kondisi file --}}
											{{-- <p class="file-status-valid">Validated</p> --}}
											{{-- <p class="file-status-invalid">Invalid</p> --}}
											{{-- <p class="file-status-review">On Review</p> --}}
											{{-- <p class="reference-doc">reference documents</p> --}}
										</span>
										{{-- jika status file validation muncul, hide input & span diatas, show span dibawah  --}}
										{{-- <span class="d-flex align-items-center gap-2">
											<img src="/assets/caution.png" alt="caution icon" class="caution-icon">
											<p class="file-validation">note: your image is blur. please retake the image.</p>
										</span> --}}
									</div>

									<div class="file-input-row">
										<label for="handDrawing" class="tabs-title docs-title">Document: </label>
										<input type="file" class="custom-file-input">
										{{-- when document is valid --}}
										{{-- <span class="doc-is-valid">
											<p><i class="fa-solid fa-check" style="color: #ffffff; padding-right: 5px;"></i> Document is Valid</p>
										</span> --}}
										{{-- when document is not valid --}}
										{{-- <span class="doc-is-not-valid">
											<p><i class="fa-solid fa-x fa-lg" style="color: #ffffff; padding-right: 5px;"></i> Document is not Valid</p>
										</span> --}}

										<span class="d-flex gap-2">
											<p id="handDrawingStatus" class="file-status">Preview</p>
											{{-- beri status sesuai kondisi file --}}
											{{-- <p class="file-status-valid">Validated</p> --}}
											{{-- <p class="file-status-invalid">Invalid</p> --}}
											{{-- <p class="file-status-review">On Review</p> --}}
											{{-- <p class="reference-doc">reference documents</p> --}}
										</span>
										{{-- jika status file validation muncul, hide input & span diatas, show span dibawah  --}}
										{{-- <span class="d-flex align-items-center gap-2">
											<img src="/assets/caution.png" alt="caution icon" class="caution-icon">
											<p class="file-validation">note: your image is blur. please retake the image.</p>
										</span> --}}
									</div>

									<div class="file-input-row">
										<label for="essayForm" class="tabs-title docs-title">Document: </label>
										<input type="file" class="custom-file-input">
										{{-- when document is valid --}}
										{{-- <span class="doc-is-valid">
											<p><i class="fa-solid fa-check" style="color: #ffffff; padding-right: 5px;"></i> Document is Valid</p>
										</span> --}}
										{{-- when document is not valid --}}
										{{-- <span class="doc-is-not-valid">
											<p><i class="fa-solid fa-x fa-lg" style="color: #ffffff; padding-right: 5px;"></i> Document is not Valid</p>
										</span> --}}

										<span class="d-flex gap-2">
											<p id="essayFormStatus" class="file-status">Preview</p>
											{{-- beri status sesuai kondisi file --}}
											{{-- <p class="file-status-valid">Validated</p> --}}
											{{-- <p class="file-status-invalid">Invalid</p> --}}
											{{-- <p class="file-status-review">On Review</p> --}}
											{{-- <p class="reference-doc">reference documents</p> --}}
										</span>
										{{-- jika status file validation muncul, hide input & span diatas, show span dibawah  --}}
										{{-- <span class="d-flex align-items-center gap-2">
											<img src="/assets/caution.png" alt="caution icon" class="caution-icon">
											<p class="file-validation">note: your image is blur. please retake the image.</p>
										</span> --}}
									</div>

									<div class="file-input-row">
										<label for="signedLetter" class="tabs-title docs-title">Document: </label>
										<input type="file" class="custom-file-input">
										{{-- when document is valid --}}
										{{-- <span class="doc-is-valid">
											<p><i class="fa-solid fa-check" style="color: #ffffff; padding-right: 5px;"></i> Document is Valid</p>
										</span> --}}
										{{-- when document is not valid --}}
										{{-- <span class="doc-is-not-valid">
											<p><i class="fa-solid fa-x fa-lg" style="color: #ffffff; padding-right: 5px;"></i> Document is not Valid</p>
										</span> --}}

										<span class="d-flex gap-2">
											<p id="signedLetterStatus" class="file-status">Preview</p>
											{{-- beri status sesuai kondisi file --}}
											{{-- <p class="file-status-valid">Validated</p> --}}
											{{-- <p class="file-status-invalid">Invalid</p> --}}
											{{-- <p class="file-status-review">On Review</p> --}}
											{{-- <p class="reference-doc">reference documents</p> --}}
										</span>
										{{-- jika status file validation muncul, hide input & span diatas, show span dibawah  --}}
										{{-- <span class="d-flex align-items-center gap-2">
											<img src="/assets/caution.png" alt="caution icon" class="caution-icon">
											<p class="file-validation">note: your image is blur. please retake the image.</p>
										</span> --}}
									</div>

									<div class="file-input-row">
										<label for="blindTest" class="tabs-title docs-title">Document: </label>
										<input type="file" class="custom-file-input">
										{{-- when document is valid --}}
										{{-- <span class="doc-is-valid">
											<p><i class="fa-solid fa-check" style="color: #ffffff; padding-right: 5px;"></i> Document is Valid</p>
										</span> --}}
										{{-- when document is not valid --}}
										{{-- <span class="doc-is-not-valid">
											<p><i class="fa-solid fa-x fa-lg" style="color: #ffffff; padding-right: 5px;"></i> Document is not Valid</p>
										</span> --}}

										<span class="d-flex gap-2">
											<p id="blindTestStatus" class="file-status">Preview</p>
											{{-- beri status sesuai kondisi file --}}
											{{-- <p class="file-status-valid">Validated</p> --}}
											{{-- <p class="file-status-invalid">Invalid</p> --}}
											{{-- <p class="file-status-review">On Review</p> --}}
											{{-- <p class="reference-doc">reference documents</p> --}}
										</span>
										{{-- jika status file validation muncul, hide input & span diatas, show span dibawah  --}}
										{{-- <span class="d-flex align-items-center gap-2">
											<img src="/assets/caution.png" alt="caution icon" class="caution-icon">
											<p class="file-validation">note: your image is blur. please retake the image.</p>
										</span> --}}
									</div>

									<div class="file-input-row">
										<label for="artsCrafts" class="tabs-title docs-title">Document: </label>
										<input type="file" class="custom-file-input">
										{{-- when document is valid --}}
										{{-- <span class="doc-is-valid">
											<p><i class="fa-solid fa-check" style="color: #ffffff; padding-right: 5px;"></i> Document is Valid</p>
										</span> --}}
										{{-- when document is not valid --}}
										{{-- <span class="doc-is-not-valid">
											<p><i class="fa-solid fa-x fa-lg" style="color: #ffffff; padding-right: 5px;"></i> Document is not Valid</p>
										</span> --}}

										<span class="d-flex gap-2">
											<p id="artsCraftsStatus" class="file-status">Preview</p>
											{{-- beri status sesuai kondisi file --}}
											{{-- <p class="file-status-valid">Validated</p> --}}
											{{-- <p class="file-status-invalid">Invalid</p> --}}
											{{-- <p class="file-status-review">On Review</p> --}}
											{{-- <p class="reference-doc">reference documents</p> --}}
										</span>
										{{-- jika status file validation muncul, hide input & span diatas, show span dibawah  --}}
										{{-- <span class="d-flex align-items-center gap-2">
											<img src="/assets/caution.png" alt="caution icon" class="caution-icon">
											<p class="file-validation">note: your image is blur. please retake the image.</p>
										</span> --}}
									</div>
								</div>
							</div>
						</div>
						<div class="d-flex justify-content-between align-content-center mb-4 gap-3">
							<button type="button" id="backButton" class="btn btn-outline-danger rounded-0 px-md-5 float-end mt-5 px-4">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" stroke="#FF5351" />
								</svg>
								Back
							</button>
							<!-- Submit Button -->
							<button type="submit" id="submitBtn" class="btn btn-danger rounded-0 px-md-5 danger-button float-end mt-5">
								Continue
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" fill="#FFF" />
								</svg>
							</button>
						</div>
					</form>
				</div>
			</div>

			<div class="modal fade" id="requiredDocumentModal" tabindex="-1" aria-labelledby="requiredDocument" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-body p-5 text-center">
							<img src="/assets/succes-admitted.png" alt="check-icon" class="mb-1" />
							<h5 class="success-modal-title mb-1">You have completed application!</h5>
							<p class="review-modal-subtitle mb-4">Congratulation! You have completed your application. Please wait while your documents are being reviewed.</p>
							<button type="button" class="btn btn-danger danger-button rounded-0 border-0 px-5 py-2" onclick="window.location.href = '/tuition-fee'">Proceed to Dashboard</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="{{ asset('js/required_doc.js') }}"></script>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
		<script>
			function handleFileUpload(inputId, statusId) {
				const inputFile = document.getElementById(inputId);
				const statusDisplay = document.getElementById(statusId);

				// Sembunyikan status di awal
				statusDisplay.style.display = "none";

				// Event listener untuk file input
				inputFile.addEventListener("change", function() {
					if (this.files.length > 0) {
						const file = this.files[0];

						// Buat URL sementara untuk file yang diunggah
						const fileURL = URL.createObjectURL(file);

						// Tampilkan status "Preview" sebagai tautan
						statusDisplay.style.display = "block";
						statusDisplay.innerHTML = `<a href="${fileURL}" target="_blank" class="file-link">Preview</a>`;
					} else {
						// Sembunyikan status jika tidak ada file yang dipilih
						statusDisplay.style.display = "none";
					}
				});
			}


			// Panggil fungsi untuk setiap elemen input file
			handleFileUpload("familyGeneralDoc", "familyGeneralDocStatus");
			handleFileUpload("nisnNumber", "nisnNumberStatus");
			handleFileUpload("recordSemesterFirst", "recordSemesterFirstStatus");
			handleFileUpload("recordSemesterSecond", "recordSemesterSecondStatus");
			handleFileUpload("recordSemesterThird", "recordSemesterThirdStatus");
			handleFileUpload("recordSemesterForth", "recordSemesterForthStatus");
		</script>
	</body>

</html>
