<!DOCTYPE html>
<html lang="en">

	<x-head title="Personal Information" />

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
										<input id="firstName" type="text" class="form-control" placeholder="First Name" required />
									</div>
									<!-- Middle Name -->
									<div class="col-md-4 mb-3">
										<label for="middleName" class="form-label">Middle Name</label>
										<input id="middleName" type="text" class="form-control" placeholder="Middle Name" />
									</div>
									<!-- Last Name -->
									<div class="col-md-4 mb-3">
										<label for="lastName" class="form-label">Last Name</label>
										<input id="lastName" type="text" class="form-control" placeholder="Last Name" />
									</div>
								</div>
								<div class="row">
									<!-- Mobile Phone Number -->
									<div class="col-md-4 mb-3">
										<label for="mobilePhone" class="form-label">Mobile Phone Number</label>
										<input id="mobilePhone" type="text" class="form-control" placeholder="Mobile Phone Number" />
									</div>
									<!-- Guardian Name -->
									<div class="col-md-4 mb-3">
										<label for="guardianName" class="form-label">Guardian Name</label>
										<input id="guardianName" type="text" class="form-control" placeholder="Guardian Name" />
									</div>
									<!-- Guardian Mobile Phone Number -->
									<div class="col-md-4 mb-3">
										<label for="guardianPhone" class="form-label">Guardian Mobile Phone Number</label>
										<input id="guardianPhone" type="text" class="form-control" placeholder="Guardian Mobile Phone" />
									</div>
								</div>
								<div class="row">
									<!-- Date of Birth -->
									<div class="col-md-4 mb-3">
										<label for="dob" class="form-label">Date of Birth</label>
										<input id="dob" type="date" class="form-control" />
									</div>
									<!-- School Name -->
									<div class="col-md-6 mb-3">
										<label for="schoolName" class="form-label">School Name</label>
										<input id="schoolName" type="text" class="form-control" placeholder="School Name" />
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
								<div class="row">
									<!-- Email Address -->
									<div class="col-md-6 mb-3">
										<label for="email" class="form-label form-label-pwd">Email Address</label>
										<p class="form-input-subtitle">This email will be used for your username</p>
										<input id="email" type="email" class="form-control" placeholder="Email Address" />
									</div>
									<!-- Password -->
									<div class="col-md-3 mb-3">
										<label for="password" class="form-label form-label-pwd">Password</label>
										<p class="form-input-subtitle">minimum 8 characters</p>
										<input id="password" type="password" class="form-control" placeholder="Password" />
									</div>
									<!-- Repeat Password -->
									<div class="col-md-3 mb-3">
										<label for="repeatPassword" class="form-label form-label-pwd">Repeat Password</label>
										<p class="form-input-subtitle">minimum 8 characters</p>
										<input id="repeatPassword" type="password" class="form-control" placeholder="Repeat Password" />
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
											<input id="firstNameMobile" type="text" class="form-control" placeholder="First Name" required />
										</div>
										<!-- Middle Name -->
										<div class="col-md-4 mb-3">
											<label for="middleNameMobile" class="form-label">Middle Name</label>
											<input id="middleNameMobile" type="text" class="form-control" placeholder="Middle Name" />
										</div>
										<!-- Last Name -->
										<div class="col-md-4 mb-3">
											<label for="lastNameMobile" class="form-label">Last Name</label>
											<input id="lastNameMobile" type="text" class="form-control" placeholder="Last Name" />
										</div>
									</div>
									<div class="row">
										<!-- Mobile Phone Number -->
										<div class="col-md-4 mb-3">
											<label for="mobilePhoneMobile" class="form-label">Mobile Phone Number</label>
											<input id="mobilePhoneMobile" type="text" class="form-control" placeholder="Mobile Phone Number" />
										</div>
										<!-- Guardian Name -->
										<div class="col-md-4 mb-3">
											<label for="guardianNameMobile" class="form-label">Guardian Name</label>
											<input id="guardianNameMobile" type="text" class="form-control" placeholder="Guardian Name" />
										</div>
										<!-- Guardian Mobile Phone Number -->
										<div class="col-md-4 mb-3">
											<label for="guardianPhoneMobile" class="form-label">Guardian Mobile Phone Number</label>
											<input id="guardianPhoneMobile" type="text" class="form-control" placeholder="Guardian Mobile Phone" />
										</div>
									</div>
									<div class="row">
										<!-- Date of Birth -->
										<div class="col-md-4 mb-3">
											<label for="dobMobile" class="form-label">Date of Birth</label>
											<input id="dobMobile" type="date" class="form-control" />
										</div>
										<!-- School Name -->
										<div class="col-md-6 mb-3">
											<label for="schoolNameMobile" class="form-label">School Name</label>
											<input id="schoolNameMobile" type="text" class="form-control" placeholder="School Name" />
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
									<div class="row">
										<!-- Email Address -->
										<div class="col-md-6 mb-3">
											<label for="email" class="form-label form-label-pwd">Email Address</label>
											<p class="form-input-subtitle">This email will be used for your username</p>
											<input id="emailMobile" type="email" class="form-control" placeholder="Email Address" />
										</div>
										<!-- Password -->
										<div class="col-md-3 mb-3">
											<label for="password" class="form-label form-label-pwd">Password</label>
											<p class="form-input-subtitle">minimum 8 characters</p>
											<input id="passwordMobile" type="password" class="form-control" placeholder="Password" />
										</div>
										<!-- Repeat Password -->
										<div class="col-md-3 mb-3">
											<label for="repeatPassword" class="form-label form-label-pwd">Repeat Password</label>
											<p class="form-input-subtitle">minimum 8 characters</p>
											<input id="repeatPasswordMobile" type="password" class="form-control" placeholder="Repeat Password" />
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

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
		</script>
	</body>

</html>
