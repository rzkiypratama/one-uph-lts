<!DOCTYPE html>
<html lang="en">

	<x-head title="Education Informations">
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
						<hr class="dashed-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">04</p>
						<p class="step-subtitle w-30 m-0">Education Information</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-bold.png" alt="step" class="step-icon" />
						<hr class="solid-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">05</p>
						<p class="step-subtitle w-30 m-0">Entry Option</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-normal.png" alt="step" class="step-icon" />
						<hr class="solid-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">06</p>
						<p class="step-subtitle w-30 m-0">Review & Payment</p>
					</div>
					<div class="d-flex align-items-center gap-2">
						<img src="/assets/circle-normal.png" alt="step" class="step-icon" />
						<hr class="solid-step" />
					</div>
				</div>

				<div>
					<div class="d-flex mb-3 gap-2">
						<p class="step-title m-0">07</p>
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

					<span class="text-white" onclick="window.location.href = '/dashboard/personalinformations'">
						<p class="mobile-title">Step 4 of 7</p>
						<p class="mobile-subtitle">Education Background</p>
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
									<img src="/assets/educational-icon.png" alt="icon1" class="tab-icon" />
									<span class="d-flex flex-column text-start">
										<p class="tabs-title text-capitalize m-0">Education Information</p>
										<p class="tabs-subtitle m-0">your education information</p>
									</span>
								</div>
							</button>
						</li>
						<!-- Tab 2 only show when user choose s2 -->
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="true">
								<div class="d-flex">
									<img src="/assets/educational-icon.png" alt="icon1" class="tab-icon" />
									<span class="d-flex flex-column text-start">
										<p class="tabs-title text-capitalize m-0">University Information</p>
										<p class="tabs-subtitle m-0">your education information</p>
									</span>
								</div>
							</button>
						</li>
					</ul>
				</div>

				<div class="card-body overflow-y-scroll">
					<!-- Form Start -->
					<form id="myForm" class="d-flex flex-column justify-content-between h-100">
						<div class="tab-content" id="myTabContent">
							<!-- Tab Content 1 -->
							<div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
								<p class="file-validation pb-1">Fill university information, <span class="file-validation-required">(*) Is Required Field</span></p>

								<div>
									<div class="row col-md-12 mb-4">
										<!-- School Name -->
										<div class="col-md-4 dropdown mb-3">
											<label for="selectHighSchool" class="form-label">High School</label>
											<input type="text" class="dropdownInput form-select" id="selectHighSchool" placeholder="Select your high school" autocomplete="off" readonly>
											<div class="dropdownList">
												<input type="text" class="searchInput" placeholder="Search here...">
												<ul>
													<li>Option 1</li>
													<li>Option 2</li>
													<li>Option 3</li>
													<li>Indonesia</li>
													<li>others</li>
												</ul>
											</div>
										</div>
										{{-- high school stream --}}
										<div class="col-md-4 mb-3">
											<label class="form-label">High School Stream</label>
											<select class="form-select">
												<option value="option1">Social</option>
												<option value="option2">Science</option>
												<option value="option3">Others</option>
											</select>
										</div>
										<!-- School City -->
										<div class="col-md-4 mb-md-3">
											<label for="schoolCity" class="form-label">City</label>
											<input type="text" class="form-control" id="schoolCity" placeholder="Where your school are located?" />
										</div>
									</div>

									<div class="row col-md-12">
										<div class="col-md-4 mb-3">
											<label for="graduationStatus" class="form-label">Graduation Status</label>
											<select id="graduationStatus" class="form-select">
												<option value="option1">option1</option>
												<option value="option2">option2</option>
												<option value="option3">option3</option>
												<option value="Lainnya">Lainnya</option>
											</select>
										</div>
										<!-- graduation year -->
										<div class="col-md-4 mb-3">
											<label for="guardianEmail" class="form-label">Graduation Year</label>
											<input type="text" class="form-control" id="graduationYear" placeholder="What is your graduation year?" />
										</div>
										<!-- Final Ceritificate -->
										<div class="col-md-4 mb-3">
											<label for="finalCertificate" class="form-label">Final Ceritificate</label>
											<input type="text" class="form-control" id="finalCertificate" placeholder="Your Final Certificate " />
										</div>
									</div>
								</div>

								<div id="other_school" class="mt-3" style="display: none;">
									<div class="row">
										<!-- hidden until user choose others -->
										<h3 class="row-title mb-3">Others High School</h3>

										<!-- School Name -->
										<div class="col-md-4 mb-3">
											<label for="schoolName" class="form-label">High School Name</label>
											<input type="text" class="form-control" id="schoolName" placeholder="School Name" />
										</div>
										<div class="col-md-4 mb-3">
											<label for="highSchoolType" class="form-label">Select Highschool Type</label>
											<select id="highSchoolType" class="form-select">
												<option value="SMA">SMA</option>
												<option value="SMK">SMK</option>
											</select>
										</div>
										<div class="col-md-4 dropdown mb-3">
											<label for="country" class="form-label">Country</label>
											<input type="text" class="dropdownInput form-select" id="country" placeholder="Select your country" autocomplete="off" readonly>
											<div class="dropdownList">
												<input type="text" class="searchInput" placeholder="Search here...">
												<ul>
													<li>Option 1</li>
													<li>Option 2</li>
													<li>Option 3</li>
													<li>Indonesia</li>
													<li>others</li>
												</ul>
											</div>
										</div>
										<div class="col-md-4 dropdown mb-3">
											<label for="province" class="form-label">Province</label>
											<input type="text" class="dropdownInput form-select" id="province" placeholder="Select your province" autocomplete="off" readonly>
											<div class="dropdownList">
												<input type="text" class="searchInput" placeholder="Search here...">
												<ul>
													<li>Option 1</li>
													<li>Option 2</li>
													<li>Option 3</li>
													<li>Indonesia</li>
													<li>others</li>
												</ul>
											</div>
										</div>
										<div class="col-md-4 dropdown mb-3">
											<label for="city" class="form-label">City</label>
											<input type="text" class="dropdownInput form-select" id="city" placeholder="Select your city" autocomplete="off" readonly>
											<div class="dropdownList">
												<input type="text" class="searchInput" placeholder="Search here...">
												<ul>
													<li>Option 1</li>
													<li>Option 2</li>
													<li>Option 3</li>
													<li>Indonesia</li>
													<li>others</li>
												</ul>
											</div>
										</div>
										<!-- hidden until user choose others -->
									</div>
								</div>

							</div>

							<!-- Tab Content 2 only show when user choose s2 -->
							<div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
								<p class="file-validation pb-1">Fill university information, <span class="file-validation-required">(*) Is Required Field</span></p>


								<div id="universityCardsContainer" class="form-section">
									{{-- auto generate card by script bellow --}}
								</div>
								<div class="d-flex justify-content-center w-100 pt-2">
									<button class="btn btn-secondary add-more-btn mt-3" id="addMoreUniversityBtn">Add More University <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
											fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
										</svg></button>
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
		</div>

		<script type="text/javascript" src="{{ asset('js/listsearch.js') }}"></script>
		<script>
			document.addEventListener("DOMContentLoaded", function() {
				const selectHighSchool = document.getElementById("selectHighSchool");
				const additionalFields = document.getElementById("other_school");
				const dropdownListItems = document.querySelectorAll(".dropdownList ul li");

				// Fungsi untuk mengatur visibilitas additionalFields
				function toggleShow() {

					if (selectHighSchool.value.toLowerCase() === "others") {
						additionalFields.style.display = "block";
					} else {
						additionalFields.style.display = "none";
					}
				}

				dropdownListItems.forEach(function(item) {
					item.addEventListener("click", function() {
						if (item.textContent.toLowerCase() === "others") {
							selectHighSchool.value = item.textContent;
						}
						toggleShow();
					});
				});

				toggleShow();
			});
		</script>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
		<script type="text/javascript" src="{{ asset('js/educationInformation.js') }}"></script>
		<script>
			let universityCardCount = 1; // Mulai dari 1 agar card pertama ditampilkan sebagai default

			// Tampilkan card pertama secara default
			addUniversityCard(universityCardCount);

			document.getElementById('addMoreUniversityBtn').addEventListener('click', function() {
				universityCardCount++; // Tambah counter card untuk ID unik
				addUniversityCard(universityCardCount);
			});

			function addUniversityCard(index) {
				const universityCardsContainer = document.getElementById('universityCardsContainer');

				// Membuat card baru dengan ID dinamis
				const universityCard = document.createElement('div');
				universityCard.className = 'university-card card mt-2 p-3';
				universityCard.id = `universityCard_${index}`; // Menambahkan ID unik untuk card

				universityCard.innerHTML = `
							<div class="d-flex align-items-center">
									<h5 class="university-title row-title mb-1">University #${index}</h5>
									${index > 1 ? `<button type="button" class="btn btn-danger btn-sm ms-auto" onclick="deleteUniversityCard(${index})">Remove</button>` : ""}
							</div>
							<div class="row mt-2">
								<div class="col-md-6">
											<label for="universityName_${index}" class="form-label">University</label>
											<input type="text" class="form-control" id="universityName_${index}" name="universityName[]" placeholder="Enter University Name" />
									</div>
									<div class="col-md-6">
											<label for="universityName_${index}" class="form-label">University Name</label>
											<input type="text" class="form-control" id="universityName_${index}" name="universityName[]" placeholder="Enter University Name" />
									</div>
									</div>
									<div class="row my-3">
										<div class="col-md-6">
												<label for="levelOfStudy_${index}" class="form-label">Level Of Study</label>
												<input type="text" class="form-control" id="levelOfStudy_${index}" name="levelOfStudy[]" placeholder="Enter Level of Study" />
										</div>
									<div class="col-md-6">
											<label for="studyProgram_${index}" class="form-label">Study Program</label>
											<input type="text" class="form-control" id="studyProgram_${index}" name="studyProgram[]" placeholder="Enter Study Program" />
									</div>
									</div>
									<div class="row">
										<div class="col-md-6">
												<label for="degreeTitle_${index}" class="form-label">Degree Title</label>
												<input type="text" class="form-control" id="degreeTitle_${index}" name="degreeTitle[]" placeholder="Enter Degree Title" />
										</div>
									<div class="col-md-6">
											<label for="cgpa_${index}" class="form-label">CGPA</label>
											<input type="text" class="form-control" id="cgpa_${index}" name="cgpa[]" placeholder="Enter CGPA" />
									</div>
									<div class="row mt-3">
										<div class="col-md-6">
												<label for="graduationDate_${index}" class="form-label">Graduation Date</label>
												<input type="date" class="form-control" id="graduationDate_${index}" name="graduationDate[]" placeholder="Enter Graduation Date" />
										</div>
										</div>
							</div>
					`;

				universityCardsContainer.appendChild(universityCard);
			}

			// Fungsi untuk menghapus card berdasarkan ID
			function deleteUniversityCard(index) {
				const universityCard = document.getElementById(`universityCard_${index}`);
				if (universityCard) {
					universityCard.remove();
				}
			}
		</script>

	</body>

</html>
