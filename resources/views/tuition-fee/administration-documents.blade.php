<!DOCTYPE html>
<html lang="en">

	<x-head title="Administration Documents">
		<x-slot name="inlineCSS">
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

				.hidden {
					display: none;
				}

				.show {
					display: block;
				}
			</style>
		</x-slot>
	</x-head>

	<body class="container mt-3">
		<div class="d-flex justify-content-between align-items-center mb-5 pt-3">
			<img src="/assets/uph-logo.png" alt="logo" class="uphlogo" />
			<div class="d-flex align-items-center gap-3">
				<span class="logout-button d-flex align-items-center gap-2">
					<p class="m-0">dashboard</p>
					<!-- <img src="/assets/signout-icon.png" alt="signout icon" class="logout-icon"> -->
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
						<img src="/assets/tuition-circle-done.png" alt="step" class="step-icon" />
						<hr class="tuition-done-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">02</p>
						<p class="step-subtitle w-50 m-0">Re-registration Information</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/tuition-circle-done.png" alt="step" class="step-icon" />
						<hr class="tuition-dashed-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">03</p>
						<p class="step-subtitle w-25 m-0">Administration Document</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/tuition-circle-bold.png" alt="step" class="step-icon" />
					</div>
				</div>
			</div>

			<!-- Tabs & Form -->
			<div class="card border-0 shadow-sm">
				<div class="card-header tabs-header">
					<ul class="nav nav-pills card-header-tabs" id="myTab" role="tablist">
						<!-- Tab 1 -->
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="false">
								<div class="d-flex">
									<img src="/assets/doc-icon.png" alt="icon1" class="tab-icon" />
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
									<img src="/assets/doc-icon.png" alt="icon1" class="tab-icon" />
									<span class="d-flex flex-column text-start">
										<p class="tabs-title text-capitalize m-0">Program Documents</p>
										<p class="tabs-subtitle m-0">program required documents</p>
									</span>
								</div>
							</button>
						</li>
						<!-- Tab 3 -->
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="false">
								<div class="d-flex">
									<img src="/assets/doc-icon.png" alt="icon1" class="tab-icon" />
									<span class="d-flex flex-column text-start">
										<p class="tabs-title text-capitalize m-0">Registration Documents</p>
										<p class="tabs-subtitle m-0">registration required documents</p>
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
									<p class="form-input-subtitle mb-3">pdf, jpg, png, jpeg with maximum size 10MB</p>

									<div class="file-input-row">
										<label for="familyGeneralDoc" class="tabs-title w-50">Copy of Family Registration Card (KK) *</label>
										<div id="fileUploadContainerGeneralDoc" class="file-input px-2">
											<span id="fileNameGeneralDoc" class="forgot-password">Upload File</span>
											<img id="fileIconGeneralDoc" src="/assets/file-icon.png" alt="file icon" class="file-icon" />
											<img id="trashIconGeneralDoc" src="/assets/trash-icon.png" alt="delete" class="trash-icon" />
										</div>
										<input type="file" name="familyGeneralDoc" id="familyGeneralDoc" style="display: none" />
										<p id="familyGeneralDocStatus" class="file-status">Uploaded</p>
										<p id="familyGeneralDocStatusReview" class="file-status-valid">Validated</p>
									</div>

									<div class="file-input-row">
										<label for="nisnNumber" class="tabs-title w-50">A document showing your NISN Number *</label>
										<div id="nisnNumberContainer" class="file-input px-2">
											<span id="nisnNumberName">Upload File</span>
											<img id="nisnNumberIcon" src="/assets/file-icon.png" alt="file icon" class="file-icon" />
											<img id="nisnNumberTrash" src="/assets/trash-icon.png" alt="delete" class="trash-icon" />
										</div>
										<input type="file" name="nisnNumber" id="nisnNumber" style="display: none" />
										<p id="nisnNumberStatus" class="file-status">Uploaded</p>
										<p id="nisnNumberStatusReview" class="file-status-review">On Review</p>
									</div>

									<div class="file-input-row">
										<label for="recordSemesterFirst" class="tabs-title w-50">Senior Academic Record Grade 10 Semester 1</label>
										<div id="recordSemesterFirstContainer" class="file-input px-2">
											<span id="recordSemesterFirstName">Upload File</span>
											<img id="recordSemesterFirstIcon" src="/assets/file-icon.png" alt="file icon" class="file-icon" />
											<img id="recordSemesterFirstTrash" src="/assets/trash-icon.png" alt="delete" class="trash-icon" />
										</div>
										<input type="file" name="recordSemesterFirst" id="recordSemesterFirst" style="display: none" />
										<p id="recordSemesterFirstStatus" class="file-status">Uploaded</p>
										<p class="file-status-review">On Review</p>
									</div>

									<div class="file-input-row">
										<label for="recordSemesterSecond" class="tabs-title w-50">Senior Academic Record Grade 10 Semester 2</label>
										<div id="recordSemesterSecondContainer" class="file-input px-2">
											<span id="recordSemesterSecondName">Upload File</span>
											<img id="recordSemesterSecondIcon" src="/assets/file-icon.png" alt="file icon" class="file-icon" />
											<img id="recordSemesterSecondTrash" src="/assets/trash-icon.png" alt="delete" class="trash-icon" />
										</div>
										<input type="file" name="recordSemesterSecond" id="recordSemesterSecond" style="display: none" />
										<p id="recordSemesterSecondStatus" class="file-status">Uploaded</p>
										<p class="file-status-review">On Review</p>
									</div>

									<div class="file-input-row">
										<label for="recordSemesterThird" class="tabs-title w-50">Senior Academic Record Grade 11 Semester 1</label>
										<div id="recordSemesterThirdContainer" class="file-input px-2">
											<span id="recordSemesterThirdName">Upload File</span>
											<img id="recordSemesterThirdIcon" src="/assets/file-icon.png" alt="file icon" class="file-icon" />
											<img id="recordSemesterThirdTrash" src="/assets/trash-icon.png" alt="delete" class="trash-icon" />
										</div>
										<input type="file" name="recordSemesterThird" id="recordSemesterThird" style="display: none" />
										<p id="recordSemesterThirdStatus" class="file-status">Uploaded</p>
										<p class="file-status-review">On Review</p>
									</div>

									<div class="file-input-row">
										<label for="recordSemesterForth" class="tabs-title w-50">Senior Academic Record Grade 11 Semester 2</label>
										<div id="recordSemesterForthContainer" class="file-input px-2">
											<span id="recordSemesterForthName">Upload File</span>
											<img id="recordSemesterForthIcon" src="/assets/file-icon.png" alt="file icon" class="file-icon" />
											<img id="recordSemesterForthTrash" src="/assets/trash-icon.png" alt="delete" class="trash-icon" />
										</div>
										<input type="file" name="recordSemesterForth" id="recordSemesterForth" style="display: none" />
										<p id="recordSemesterForthStatus" class="file-status">Uploaded</p>
										<p class="file-status-invalid">Invalid</p>
									</div>
								</div>
							</div>

							<!-- Tab Content 2 -->
							<div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
								<div>
									<p class="form-input-subtitle mb-3">pdf, jpg, png, jpeg with maximum size 10MB</p>

									<div class="file-input-row">
										<label for="statementLetter" class="tabs-title w-50">Statement Letter for Student with Special Needs (if needed)</label>
										<div id="statementLetterContainer" class="file-input px-2">
											<span id="statementLetterName" class="forgot-password">Upload File</span>
											<img id="statementLetterIcon" src="/assets/file-icon.png" alt="file icon" class="file-icon" />
											<img id="statementLetterTrash" src="/assets/trash-icon.png" alt="delete" class="trash-icon" />
										</div>
										<input type="file" name="statementLetter" id="statementLetter" style="display: none" />
										<p id="statementLetterStatus" class="file-status">Uploaded</p>
										<p class="file-status-review">On Review</p>
									</div>

									<div class="file-input-row">
										<label for="handDrawing" class="tabs-title w-50">4 (Four) Hand Drawings</label>
										<div id="fileUploadContainer" class="file-input px-2">
											<span id="fileName" class="forgot-password">Upload File</span>
											<img id="fileIcon" src="/assets/file-icon.png" alt="file icon" class="file-icon" />
											<img id="trashIcon" src="/assets/trash-icon.png" alt="delete" class="trash-icon" />
										</div>
										<input type="file" name="handDrawing" id="handDrawing" style="display: none" />
										<p id="handDrawingStatus" class="file-status">Uploaded</p>
										<p class="file-status-review">On Review</p>
									</div>

									<div class="file-input-row">
										<label for="essayForm" class="tabs-title w-50">One Page Essay refer to School of Design Application Form</label>
										<div id="essayFormContainer" class="file-input px-2">
											<span id="essayFormName" class="forgot-password">Upload File</span>
											<img id="essayFormIcon" src="/assets/file-icon.png" alt="file icon" class="file-icon" />
											<img id="essayFormTrash" src="/assets/trash-icon.png" alt="delete" class="trash-icon" />
										</div>
										<input type="file" name="essayForm" id="essayForm" style="display: none" />
										<p id="essayFormStatus" class="file-status">Uploaded</p>
										<p class="file-status-review">On Review</p>
									</div>

									<div class="file-input-row">
										<label for="signedLetter" class="tabs-title w-50">Statement letter signed by applicants and parent, refer to SOD Applications Form</label>
										<div id="signedLetterContainer" class="file-input px-2">
											<span id="signedLetterName" class="forgot-password">Upload File</span>
											<img id="signedLetterIcon" src="/assets/file-icon.png" alt="file icon" class="file-icon" />
											<img id="signedLetterTrash" src="/assets/trash-icon.png" alt="delete" class="trash-icon" />
										</div>
										<input type="file" name="signedLetter" id="signedLetter" style="display: none" />
										<p id="signedLetterStatus" class="file-status">Uploaded</p>
										<p class="file-status-review">On Review</p>
									</div>

									<div class="file-input-row">
										<label for="blindTest" class="tabs-title w-50">Color Blindness Test Certificate by Ophthalmologist or Oculist</label>
										<div id="blindTestContainer" class="file-input px-2">
											<span id="blindTestName" class="forgot-password">Upload File</span>
											<img id="blindTestIcon" src="/assets/file-icon.png" alt="file icon" class="file-icon" />
											<img id="blindTestTrash" src="/assets/trash-icon.png" alt="delete" class="trash-icon" />
										</div>
										<input type="file" name="blindTest" id="blindTest" style="display: none" />
										<p id="blindTestStatus" class="file-status">Uploaded</p>
										<p class="file-status-review">On Review</p>
									</div>

									<div class="file-input-row">
										<label for="artsCrafts" class="tabs-title w-50">Arts & Crafts Portfolio</label>
										<div id="artsCraftsContainer" class="file-input px-2">
											<span id="artsCraftsName">Upload File</span>
											<img id="artsCraftsIcon" src="/assets/file-icon.png" alt="file icon" class="file-icon" />
											<img id="artsCraftsTrash" src="/assets/trash-icon.png" alt="delete" class="trash-icon" />
										</div>
										<input type="file" name="artsCrafts" id="artsCrafts" style="display: none" />
										<p id="artsCraftsStatus" class="file-status">Uploaded</p>
										<p class="file-status-review">On Review</p>
									</div>
								</div>
							</div>

							<!-- Tab Content 3 -->
							<div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
								<div>
									<p class="form-input-subtitle mb-3">pdf, jpg, png, jpeg with maximum size 10MB</p>

									<div class="file-input-row">
										<label for="formTataTertib" class="tabs-title w-50">Form Tata Tertib</label>
										<div id="formTataTertibContainer" class="file-input px-2">
											<span id="formTataTertibName" class="forgot-password">Upload File</span>
											<img id="formTataTertibIcon" src="/assets/file-icon.png" alt="file icon" class="file-icon" />
											<img id="formTataTertibTrash" src="/assets/trash-icon.png" alt="delete" class="trash-icon" />
										</div>
										<input type="file" name="formTataTertib" id="formTataTertib" style="display: none" />
										<p id="formTataTertibStatus" class="file-status">Uploaded</p>
										<p class="file-status-review">On Review</p>
									</div>

									<div class="file-input-row">
										<label for="akteKelahiran" class="tabs-title w-50">Scan Akte Kelahiran Berwarna</label>
										<div id="akteKelahiranContainer" class="file-input px-2">
											<span id="akteKelahiranName" class="forgot-password">Upload File</span>
											<img id="akteKelahiranIcon" src="/assets/file-icon.png" alt="file icon" class="file-icon" />
											<img id="akteKelahiranTrash" src="/assets/trash-icon.png" alt="delete" class="trash-icon" />
										</div>
										<input type="file" name="akteKelahiran" id="akteKelahiran" style="display: none" />
										<p id="akteKelahiranStatus" class="file-status">Uploaded</p>
										<p class="file-status-review">On Review</p>
									</div>

									<div class="file-input-row">
										<label for="ijazah" class="tabs-title w-50">Scan Ijazah SMA/ Penyetaraan Ijazah/ Scan Ijazah Diploma/Ijazah Paket C(Bewarna)</label>
										<div id="ijazahContainer" class="file-input px-2">
											<span id="ijazahName" class="forgot-password">Upload File</span>
											<img id="ijazahIcon" src="/assets/file-icon.png" alt="file icon" class="file-icon" />
											<img id="ijazahTrash" src="/assets/trash-icon.png" alt="delete" class="trash-icon" />
										</div>
										<input type="file" name="ijazah" id="ijazah" style="display: none" />
										<p id="ijazahStatus" class="file-status">Uploaded</p>
										<p class="file-status-review">On Review</p>
									</div>

									<div class="file-input-row">
										<label for="ktp" class="tabs-title w-50">Scan KTP Bewarna</label>
										<div id="ktpContainer" class="file-input px-2">
											<span id="ktpName" class="forgot-password">Upload File</span>
											<img id="ktpIcon" src="/assets/file-icon.png" alt="file icon" class="file-icon" />
											<img id="ktpTrash" src="/assets/trash-icon.png" alt="delete" class="trash-icon" />
										</div>
										<input type="file" name="ktp" id="ktp" style="display: none" />
										<p id="ktpStatus" class="file-status">Uploaded</p>
										<p class="file-status-review">On Review</p>
									</div>

									<div class="file-input-row">
										<label for="photograph" class="tabs-title w-50">Photograph (blue background)</label>
										<div id="photographContainer" class="file-input px-2">
											<span id="photographName" class="forgot-password">Upload File</span>
											<img id="photographIcon" src="/assets/file-icon.png" alt="file icon" class="file-icon" />
											<img id="photographTrash" src="/assets/trash-icon.png" alt="delete" class="trash-icon" />
										</div>
										<input type="file" name="photograph" id="photograph" style="display: none" />
										<p id="photographStatus" class="file-status">Uploaded</p>
										<p class="file-status-review">On Review</p>
									</div>
								</div>
							</div>
						</div>
						<div class="d-flex justify-content-between align-content-center mb-4">
							<button type="button" id="backButton" class="btn btn-outline-danger float-end rounded-0 mt-5 px-5">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" stroke="#FF5351" />
								</svg>
								Back
							</button>
							<!-- Submit Button -->
							<button type="submit" id="submitBtn" class="btn btn-danger float-end rounded-0 danger-button mt-5 px-5">
								Save Data & Continue
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" fill="#FFF" />
								</svg>
							</button>
						</div>
					</form>
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

			handleFileUpload("familyGeneralDoc", "fileNameGeneralDoc", "fileUploadContainerGeneralDoc", "trashIconGeneralDoc", "familyGeneralDocStatus", "fileIconGeneralDoc");
			handleFileUpload("nisnNumber", "nisnNumberName", "nisnNumberContainer", "nisnNumberTrash", "nisnNumberStatus", "nisnNumberIcon");
			handleFileUpload("recordSemesterFirst", "recordSemesterFirstName", "recordSemesterFirstContainer", "recordSemesterFirstTrash", "recordSemesterFirstStatus", "recordSemesterFirstIcon");
			handleFileUpload("recordSemesterSecond", "recordSemesterSecondName", "recordSemesterSecondContainer", "recordSemesterSecondTrash", "recordSemesterSecondStatus", "recordSemesterSecondIcon");
			handleFileUpload("recordSemesterThird", "recordSemesterThirdName", "recordSemesterThirdContainer", "recordSemesterThirdTrash", "recordSemesterThirdStatus", "recordSemesterThirdIcon");
			handleFileUpload("recordSemesterForth", "recordSemesterForthName", "recordSemesterForthContainer", "recordSemesterForthTrash", "recordSemesterForthStatus", "recordSemesterForthIcon");
			handleFileUpload("handDrawing", "fileName", "fileUploadContainer", "trashIcon", "handDrawingStatus", "fileIcon");
			handleFileUpload("artsCrafts", "artsCraftsName", "artsCraftsContainer", "artsCraftsTrash", "artsCraftsStatus", "artsCraftsIcon");
			handleFileUpload("statementLetter", "statementLetterName", "statementLetterContainer", "statementLetterTrash", "statementLetterStatus", "statementLetterIcon");
			handleFileUpload("essayForm", "essayFormName", "essayFormContainer", "essayFormTrash", "essayFormStatus", "essayFormIcon");
			handleFileUpload("signedLetter", "signedLetterName", "signedLetterContainer", "signedLetterTrash", "signedLetterStatus", "signedLetterIcon");
			handleFileUpload("blindTest", "blindTestName", "blindTestContainer", "blindTestTrash", "blindTestStatus", "blindTestIcon");
			handleFileUpload("formTataTertib", "formTataTertibName", "formTataTertibContainer", "formTataTertibTrash", "formTataTertibStatus", "formTataTertibIcon");
			handleFileUpload("akteKelahiran", "akteKelahiranName", "akteKelahiranContainer", "akteKelahiranTrash", "akteKelahiranStatus", "akteKelahiranIcon");
			handleFileUpload("ijazah", "ijazahName", "ijazahContainer", "ijazahTrash", "ijazahStatus", "ijazahIcon");
			handleFileUpload("ktp", "ktpName", "ktpContainer", "ktpTrash", "ktpStatus", "ktpIcon");
			handleFileUpload("photograph", "photographName", "photographContainer", "photographTrash", "photographStatus", "photographIcon");
		</script>

		<script>
			const tabs = ["tab1-tab", "tab2-tab", "tab3-tab"];
			let currentTabIndex = 0;

			const backButton = document.getElementById("backButton");
			const nextButton = document.querySelector(".danger-button");

			// Fungsi untuk mengupdate tombol Next dan Back
			function updateButtons() {
				// Jika di tab pertama, tombol Back membawa ke halaman sebelumnya
				if (currentTabIndex === 0) {
					backButton.innerText = "Back";
				} else {
					backButton.innerText = "Previous";
				}

				// Jika di tab terakhir, tombol Next menjadi Submit
				if (currentTabIndex === tabs.length - 1) {
					nextButton.innerText = "Save Data & Continue";
				} else {
					nextButton.innerText = "Continue";
				}
			}

			// Event listener untuk tombol Back
			backButton.addEventListener("click", function() {
				if (currentTabIndex > 0) {
					currentTabIndex--;
					const previousTab = new bootstrap.Tab(document.getElementById(tabs[currentTabIndex]));
					previousTab.show();
					updateButtons();
				} else {
					window.location.href = "/tuition-fee/re-registration";
				}
			});

			// Event listener untuk tombol Next (Continue/Submit)
			document.getElementById("myForm").addEventListener("submit", function(event) {
				event.preventDefault();

				if (currentTabIndex < tabs.length - 1) {
					currentTabIndex++;
					const nextTab = new bootstrap.Tab(document.getElementById(tabs[currentTabIndex]));
					nextTab.show();
					updateButtons();
				} else {
					alert("Form submitted!");
					window.location.href = "/dashboard/applicationstatus";
				}
			});

			// Event listener untuk tab klik langsung
			tabs.forEach((tabId, index) => {
				document.getElementById(tabId).addEventListener("click", function() {
					currentTabIndex = index;
					updateButtons();
				});
			});

			// Initial button state
			updateButtons();
		</script>
	</body>

</html>
