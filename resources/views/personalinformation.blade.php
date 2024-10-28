<!DOCTYPE html>
<html lang="en">

	<x-head title="Personal Information"
		<x-slot name="inlineCSS">
		<style>
			@media (min-width: 768px) {
				.card-box {
					margin-right: -6rem;
					overflow-y: scroll;
					height: 435px;
				}
			}
		</style>
		</x-slot>
		/>

		<body class="container mt-3">
			<div class="d-flex justify-content-between align-items-center mb-md-5 px-3 pt-3">
				<img src="/assets/uph-logo.png" alt="logo" class="uphlogo" />
			</div>

			<div class="d-flex p-md-5 justify-content-md-center align-items-md-center homepage-container px-2 py-4">
				<!-- desktop view start -->
				<div class="card card-container d-none d-md-block p-5">
					<div class="d-flex justify-content-between box-item">
						<div class="left-content form-information w-25">
							<p class="text-uppercase">step 7 of 8</p>
							<h3>Personal Information</h3>
							<p class="children">We would like to know you more!</p>
							<hr class="solid" />
						</div>

						<div class="card card-box w-md-75 border-0 p-2 shadow-sm">
							<div class="card-body">
								<form id="personalInfoForm">
									<div class="row">
										<!-- First Name -->
										<div class="col-md-4 mb-3">
											<label for="firstName" class="form-label">First Name</label>
											<input type="text" class="form-control" id="firstName" placeholder="First Name" required />
										</div>
										<!-- Middle Name -->
										<div class="col-md-4 mb-3">
											<label for="middleName" class="form-label">Middle Name</label>
											<input type="text" class="form-control" id="middleName" placeholder="Middle Name" />
										</div>
										<!-- Last Name -->
										<div class="col-md-4 mb-3">
											<label for="lastName" class="form-label">Last Name</label>
											<input type="text" class="form-control" id="lastName" placeholder="Last Name" />
										</div>
									</div>
									<div class="row">
										<!-- Mobile Phone Number -->
										<div class="col-md-4 mb-3">
											<label for="mobilePhone" class="form-label">Mobile Phone Number</label>
											<input type="text" class="form-control" id="mobilePhone" placeholder="Mobile Phone Number" />
										</div>
										<!-- Guardian Name -->
										<div class="col-md-4 mb-3">
											<label for="guardianName" class="form-label">Guardian Name</label>
											<input type="text" class="form-control" id="guardianName" placeholder="Guardian Name" />
										</div>
										<!-- Guardian Mobile Phone Number -->
										<div class="col-md-4 mb-3">
											<label for="guardianPhone" class="form-label">Guardian Mobile Phone Number</label>
											<input type="text" class="form-control" id="guardianPhone" placeholder="Guardian Mobile Phone" />
										</div>
									</div>
									<div class="row">
										<!-- Date of Birth -->
										<div class="col-md-4 mb-3">
											<label for="dob" class="form-label">Date of Birth</label>
											<input type="date" class="form-control" id="dob" />
										</div>
										<!-- School Name -->
										<div class="col-md-6 mb-3">
											<label for="selectHighSchool" class="form-label">Select High School</label>
											<select id="selectHighSchool" class="form-select">
												<option value="option 1">option 1</option>
												<option value="option 2">option 2</option>
												<option value="others">others</option>
											</select>
										</div>

										<!-- Grade -->
										<div class="col-md-2 mb-3">
											<label for="grade" class="form-label">Grade</label>
											<select id="grade" class="form-select">
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
												<option value="Lainnya">Lainnya</option>
											</select>
										</div>
									</div>

									<div id="additionalFields" style="display: none">
										<div class="row">
											<!-- hidden until user choose others -->
											<!-- School Name -->
											<div class="col-md-6 mb-3">
												<label for="schoolName" class="form-label">High School Name</label>
												<input type="text" class="form-control" id="schoolName" placeholder="School Name" />
											</div>
											<div class="col-md-3">
												<label for="highSchoolType" class="form-label">Select Highschool Type</label>
												<select id="highSchoolType" class="form-select">
													<option value="SMA">SMA</option>
													<option value="SMK">SMK</option>
												</select>
											</div>
											<div class="col-md-3">
												<label class="form-label">Country</label>
												<select id="country" class="form-select">
													<option value="" selected disabled hidden class="select-placeholder">Select country</option>
													<option>Option 1</option>
													<option>Option 2</option>
												</select>
											</div>
											<div class="col-md-3">
												<label class="form-label">Province</label>
												<select id="province" class="form-select">
													<option value="" selected disabled hidden class="select-placeholder">Select Province</option>
													<option>Option 1</option>
													<option>Option 2</option>
												</select>
											</div>
											<div class="col-md-3 mb-3">
												<label class="form-label">City</label>
												<select id="city" class="form-select">
													<option value="" selected disabled hidden class="select-placeholder">Select City</option>
													<option>Option 1</option>
													<option>Option 2</option>
												</select>
											</div>
											<!-- hidden until user choose others -->
										</div>
									</div>

									<div class="row">
										<!-- Email Address -->
										<div class="col-md-6 mb-3">
											<label for="email" class="form-label form-label-pwd">Email Address</label>
											<p class="form-input-subtitle">This email will be used for your username</p>
											<input type="email" class="form-control" id="email" placeholder="Email Address" />
										</div>
										<!-- Password -->
										<div class="col-md-3 mb-3">
											<label for="password" class="form-label form-label-pwd">Password</label>
											<p class="form-input-subtitle">minimum 8 characters</p>
											<input type="password" class="form-control" id="password" placeholder="Password" />
										</div>
										<!-- Repeat Password -->
										<div class="col-md-3 mb-3">
											<label for="repeatPassword" class="form-label form-label-pwd">Repeat Password</label>
											<p class="form-input-subtitle">minimum 8 characters</p>
											<input type="password" class="form-control" id="repeatPassword" placeholder="Repeat Password" />
										</div>
									</div>
									<!-- Submit Button -->
									<div class="float-end my-2">
										<button type="submit" class="btn select-program-btn rounded-2 px-5">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>

					<span class="d-flex align-items-md-center cursor-pointer gap-2 pt-4" role="button" onclick="window.location.href = '/programmajor'">
						<img src="/assets/left-arrow.png" alt="arrow-left" />
						<p class="back-button p-0">back to Admission Type</p>
					</span>
				</div>
				<!-- desktop view ends -->

				<!-- mobile view start -->
				<div class="d-flex flex-column d-md-none">
					<div class="upper-content d-flex align-items-center gap-3">
						<span class="float-end">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="bi bi-chevron-left" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
							</svg>
						</span>

						<span class="text-white" onclick="window.location.href = '/program'">
							<p class="mobile-title">Step 7 of 8</p>
							<p class="mobile-subtitle">Personal Information</p>
						</span>
					</div>

					<div class="card rounded-4 middle-content p-3">
						<div class="left-content">
							<h3>Personal Information</h3>
							<p class="children">We would like to know you more!</p>
							<hr class="solid" />
						</div>

						<div class="bagian-bawah d-flex flex-column justify-content-between h-100 overflow-scroll">
							<div class="card card-box border-0 shadow-sm">
								<div class="card-body w-auto">
									<form id="personalInfoFormMobile">
										<div class="row">
											<!-- First Name -->
											<div class="col-md-4 mb-3">
												<label for="firstNameMobile" class="form-label">First Name</label>
												<input type="text" class="form-control" id="firstNameMobile" placeholder="First Name" required />
											</div>
											<!-- Middle Name -->
											<div class="col-md-4 mb-3">
												<label for="middleNameMobile" class="form-label">Middle Name</label>
												<input type="text" class="form-control" id="middleNameMobile" placeholder="Middle Name" />
											</div>
											<!-- Last Name -->
											<div class="col-md-4 mb-3">
												<label for="lastNameMobile" class="form-label">Last Name</label>
												<input type="text" class="form-control" id="lastNameMobile" placeholder="Last Name" />
											</div>
										</div>
										<div class="row">
											<!-- Mobile Phone Number -->
											<div class="col-md-4 mb-3">
												<label for="mobilePhoneMobile" class="form-label">Mobile Phone Number</label>
												<input type="text" class="form-control" id="mobilePhoneMobile" placeholder="Mobile Phone Number" />
											</div>
											<!-- Guardian Name -->
											<div class="col-md-4 mb-3">
												<label for="guardianNameMobile" class="form-label">Guardian Name</label>
												<input type="text" class="form-control" id="guardianNameMobile" placeholder="Guardian Name" />
											</div>
											<!-- Guardian Mobile Phone Number -->
											<div class="col-md-4 mb-3">
												<label for="guardianPhoneMobile" class="form-label">Guardian Mobile Phone Number</label>
												<input type="text" class="form-control" id="guardianPhoneMobile" placeholder="Guardian Mobile Phone" />
											</div>
										</div>
										<div class="row">
											<!-- Date of Birth -->
											<div class="col-md-4 mb-3">
												<label for="dobMobile" class="form-label">Date of Birth</label>
												<input type="date" class="form-control" id="dobMobile" />
											</div>
											<!-- School Name -->
											<div class="col-md-6 mb-3">
												<label for="selectHighSchoolMobile" class="form-label">Select Highschool</label>
												<select id="selectHighSchoolMobile" class="form-select">
													<option value="option 1">option 1</option>
													<option value="option 2">option 2</option>
													<option value="others">others</option>
												</select>
											</div>
											<!-- Grade -->
											<div class="col-md-2 mb-3">
												<label for="gradeMobile" class="form-label">Grade</label>
												<select id="gradeMobile" class="form-select">
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
													<option value="Lainnya">Lainnya</option>
												</select>
											</div>
										</div>

										<div id="additionalFieldsMobile" style="display: none">
											<div class="row">
												<!-- hidden until user choose others -->
												<!-- School Name -->
												<div class="col-md-6 mb-3">
													<label for="schoolNameMobile" class="form-label">High School Name</label>
													<input type="text" class="form-control" id="schoolNameMobile" placeholder="School Name" />
												</div>
												<div class="col-md-3 mb-3">
													<label for="highSchoolTypeMobile" class="form-label">Select Highschool Type</label>
													<select id="highSchoolTypeMobile" class="form-select">
														<option value="SMA">SMA</option>
														<option value="SMK">SMK</option>
													</select>
												</div>
												<div class="col-md-3 mb-3">
													<label class="form-label">Country</label>
													<select id="countryMobile" class="form-select">
														<option value="" selected disabled hidden class="select-placeholder">Select country</option>
														<option>Option 1</option>
														<option>Option 2</option>
													</select>
												</div>
												<div class="col-md-3 mb-3">
													<label class="form-label">Province</label>
													<select id="provinceMobile" class="form-select">
														<option value="" selected disabled hidden class="select-placeholder">Select Province</option>
														<option>Option 1</option>
														<option>Option 2</option>
													</select>
												</div>
												<div class="col-md-3 mb-3">
													<label class="form-label">City</label>
													<select id="cityMobile" class="form-select">
														<option value="" selected disabled hidden class="select-placeholder">Select City</option>
														<option>Option 1</option>
														<option>Option 2</option>
													</select>
												</div>
												<!-- hidden until user choose others -->
											</div>
										</div>
										<div class="row">
											<!-- Email Address -->
											<div class="col-md-6 mb-3">
												<label for="email" class="form-label form-label-pwd">Email Address</label>
												<p class="form-input-subtitle">This email will be used for your username</p>
												<input type="email" class="form-control" id="emailMobile" placeholder="Email Address" />
											</div>
											<!-- Password -->
											<div class="col-md-3 mb-3">
												<label for="password" class="form-label form-label-pwd">Password</label>
												<p class="form-input-subtitle">minimum 8 characters</p>
												<input type="password" class="form-control" id="passwordMobile" placeholder="Password" />
											</div>
											<!-- Repeat Password -->
											<div class="col-md-3 mb-3">
												<label for="repeatPassword" class="form-label form-label-pwd">Repeat Password</label>
												<p class="form-input-subtitle">minimum 8 characters</p>
												<input type="password" class="form-control" id="repeatPasswordMobile" placeholder="Repeat Password" />
											</div>
										</div>
										<!-- Submit Button -->
										<div class="float-end submit-btn-div my-2">
											<button type="submit" class="btn select-program-btn rounded-2 px-5">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- mobile view ends -->
			</div>

			<script>
				const formDesktop = document.getElementById("personalInfoForm");
				const formMobile = document.getElementById("personalInfoFormMobile");

				// Fungsi untuk menangani submit form
				function handleFormSubmit(event) {
					event.preventDefault();

					// Ambil nilai dari password dan repeat password
					const password = this.querySelector("#password")?.value || this.querySelector("#passwordMobile")?.value;
					const repeatPassword = this.querySelector("#repeatPassword")?.value || this.querySelector("#repeatPasswordMobile")?.value;

					// Cek apakah password dan repeat password cocok
					if (password !== repeatPassword) {
						alert("Passwords do not match!");
						return;
					}

					// Collect form data
					const formData = {
						firstName: this.querySelector("#firstName")?.value || this.querySelector("#firstNameMobile")?.value,
						middleName: this.querySelector("#middleName")?.value || this.querySelector("#middleNameMobile")?.value,
						lastName: this.querySelector("#lastName")?.value || this.querySelector("#lastNameMobile")?.value,
						mobilePhone: this.querySelector("#mobilePhone")?.value || this.querySelector("#mobilePhoneMobile")?.value,
						guardianName: this.querySelector("#guardianName")?.value || this.querySelector("#guardianNameMobile")?.value,
						guardianPhone: this.querySelector("#guardianPhone")?.value || this.querySelector("#guardianPhoneMobile")?.value,
						dob: this.querySelector("#dob")?.value || this.querySelector("#dobMobile")?.value,
						schoolName: this.querySelector("#schoolName")?.value || this.querySelector("#schoolNameMobile")?.value,
						grade: this.querySelector("#grade")?.value || this.querySelector("#gradeMobile")?.value,
						email: this.querySelector("#email")?.value || this.querySelector("#emailMobile")?.value,
						selectHighSchool: this.querySelector("#selectHighSchool")?.value || this.querySelector("#selectHighSchoolMobile")?.value,
						highSchoolType: this.querySelector("#highSchoolType")?.value || this.querySelector("#highSchoolTypeMobile")?.value,
						country: this.querySelector("#country")?.value || this.querySelector("#countryMobile")?.value,
						province: this.querySelector("#province")?.value || this.querySelector("#provinceMobile")?.value,
						city: this.querySelector("#city")?.value || this.querySelector("#cityMobile")?.value,
						password: password,
					};

					// Store form data in localStorage
					localStorage.setItem("personalInfo", JSON.stringify(formData));

					console.log(formData);

					// Redirect to the /review page
					window.location.href = "/review";
				}

				// Tambahkan event listener untuk kedua form
				if (formDesktop) {
					formDesktop.addEventListener("submit", handleFormSubmit);
				}

				if (formMobile) {
					formMobile.addEventListener("submit", handleFormSubmit);
				}
			</script>

			<script>
				document.getElementById("selectHighSchool").addEventListener("change", function() {
					const additionalFields = document.getElementById("additionalFields");
					if (this.value === "others") {
						additionalFields.style.display = "block"; // Tampilkan row tambahan
					} else {
						additionalFields.style.display = "none"; // Sembunyikan row tambahan
					}
				});

				document.getElementById("selectHighSchoolMobile").addEventListener("change", function() {
					const additionalFields = document.getElementById("additionalFieldsMobile");
					if (this.value === "others") {
						additionalFields.style.display = "block"; // Tampilkan row tambahan
					} else {
						additionalFields.style.display = "none"; // Sembunyikan row tambahan
					}
				});
			</script>

			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
			</script>
		</body>

</html>
