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
						<img src="/assets/circle-done.png" alt="step" class="step-icon" />
						<hr class="dashed-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">06</p>
						<p class="step-subtitle w-50 m-0">Required Documents</p>
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
						<p class="mobile-title">Step 6 of 6</p>
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
										<p class="tabs-title text-capitalize m-0">Required Documents</p>
										<p class="tabs-subtitle m-0">your entry information</p>
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

									<!-- Hand Drawings Input -->
									<div class="file-input-row">
										<label for="handDrawing" class="tabs-title docs-title">4 (Four) Hand Drawings</label>
										<div id="fileUploadContainer" class="file-input px-2">
											<span id="fileName" class="forgot-password">Upload File</span>
											<img id="fileIcon" src="/assets/file-icon.png" alt="file icon" class="file-icon" />
											<img id="trashIcon" src="/assets/trash-icon.png" alt="delete" class="trash-icon" />
										</div>
										<input type="file" name="handDrawing" id="handDrawing" style="display: none" />
										<span class="d-flex gap-2">
											<p id="handDrawingStatus" class="file-status">Uploaded</p>
											<p class="file-status-review">On Review</p>
										</span>
									</div>

									<!-- Arts & Crafts Input -->
									<div class="file-input-row">
										<label for="artsCrafts" class="tabs-title docs-title">Arts & Crafts Portfolio</label>
										<div id="artsCraftsContainer" class="file-input px-2">
											<span id="artsCraftsName">Upload File</span>
											<img id="artsCraftsIcon" src="/assets/file-icon.png" alt="file icon" class="file-icon" />
											<img id="artsCraftsTrash" src="/assets/trash-icon.png" alt="delete" class="trash-icon" />
										</div>
										<input type="file" name="artsCrafts" id="artsCrafts" style="display: none" />
										<span class="d-flex gap-2">
											<p id="artsCraftsStatus" class="file-status">Uploaded</p>
											<p class="file-status-review">On Review</p>
										</span>
									</div>
								</div>
							</div>
						</div>
						<div class="d-flex justify-content-between align-content-center mb-4 gap-3">
							<button type="button" class="btn btn-outline-danger d-flex align-items-center float-end rounded-0 px-md-5 mt-5" onclick="window.location.href = '/dashboard/reviewpayment'">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" stroke="#FF5351" />
								</svg>
								Back
							</button>
							<!-- Submit Button -->
							<button type="button" class="btn btn-danger float-end rounded-0 px-md-5 danger-button mt-5" data-bs-target="#requiredDocumentModal" data-bs-toggle="modal">
								Save & Continue
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

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
		<script>
			function handleFileUpload(inputId, fileNameId, containerId, trashIconId, statusId, fileIconId) {
				const inputFile = document.getElementById(inputId);
				const fileNameDisplay = document.getElementById(fileNameId);
				const trashIcon = document.getElementById(trashIconId);
				const fileIcon = document.getElementById(fileIconId);
				const fileInputContainer = document.getElementById(containerId);
				const statusDisplay = document.getElementById(statusId);

				fileInputContainer.addEventListener("click", function() {
					inputFile.click();
				});

				inputFile.addEventListener("change", function() {
					const file = this.files[0];
					if (file) {
						fileNameDisplay.textContent = file.name;
						trashIcon.style.display = "block";
						fileIcon.style.display = "none";
						statusDisplay.style.display = "block";
					}
				});

				trashIcon.addEventListener("click", function(event) {
					event.stopPropagation();
					inputFile.value = "";
					fileNameDisplay.textContent = "Upload File";
					trashIcon.style.display = "none";
					fileIcon.style.display = "block";
					statusDisplay.style.display = "none";
				});
			}

			handleFileUpload("handDrawing", "fileName", "fileUploadContainer", "trashIcon", "handDrawingStatus", "fileIcon");
			handleFileUpload("artsCrafts", "artsCraftsName", "artsCraftsContainer", "artsCraftsTrash", "artsCraftsStatus", "artsCraftsIcon");
		</script>
	</body>

</html>
