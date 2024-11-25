<!DOCTYPE html>
<html lang="en">

	<x-head title="Personal Information">
		<x-slot name="inlineCSS">
			<style>
				.card-container {
					overflow: scroll;
				}

				#additionalFields .dropdownList {
					display: none;
				}

				.phone-input-group select {
					max-width: 150px;
					border-radius: 0;
					margin-right: 5px;
				}


				@media (min-width: 768px) {
					.card-box {
						margin-right: -6rem;
						overflow-y: scroll;
						height: 435px;
						width: 681px;
					}

					.card-container {
						overflow: visible;
					}
				}
			</style>
		</x-slot>
	</x-head>

	<body class="container mt-3">
		<div class="d-flex justify-content-between align-items-center mb-md-5 px-3 pt-3">
			<img src="/assets/uph-logo.png" alt="logo" class="uphlogo" />
		</div>

		<div class="d-flex p-md-5 justify-content-md-center align-items-md-center homepage-container px-2 py-4">
			<!-- desktop view start -->
			<div class="card card-container d-md-block p-md-5 p-3">
				<div class="d-md-flex justify-content-between box-item">
					<div class="left-content form-information w-md-25">
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
										<input type="text" class="form-control" id="firstName" placeholder="First Name" />
										<p class="file-validation pt-1 opacity-5">First name consists of only one word without spaces</p>
									</div>
									<!-- Middle Name -->
									<div class="col-md-4 mb-3">
										<label for="middleName" class="form-label">Middle Name</label>
										<input type="text" class="form-control" id="middleName" placeholder="Middle Name" />
										<p class="file-validation pt-1 opacity-5">If you don't have a middle name, leave this field blank</p>
									</div>
									<!-- Last Name -->
									<div class="col-md-4 mb-3">
										<label for="lastName" class="form-label">Last Name</label>
										<input type="text" class="form-control" id="lastName" placeholder="Last Name" />
									</div>
								</div>
								<div class="row">
									<!-- Mobile Phone Number -->
									<div class="col-md-8 mb-3">
										<label for="mobilePhone" class="form-label">Mobile Phone Number</label>
										<div class="input-group phone-input-group">
											<!-- Select for country code -->
											<select class="form-select" id="countryCode">
												<option value="+62">+62 Indonesia</option>
												<option value="+1">+1</option>
												<option value="+44">+44</option>
												<option value="+91">+91</option>
												<!-- Add more country codes as needed -->
											</select>
											<!-- Input for whatsapp number -->
											<input type="tel" class="form-control" id="mobilePhone" placeholder="Phone Number" />
										</div>
									</div>


								</div>
								<div class="row">
									<!-- Guardian First Name -->
									<div class="col-md-6 mb-3">
										<label for="guardianName" class="form-label">Guardian First Name</label>
										<input type="text" class="form-control" id="guardianName" placeholder="First Name" />
									</div>

									<!-- Guardian Last Name -->
									<div class="col-md-6 mb-3">
										<label for="guardianName" class="form-label">Guardian Last Name</label>
										<input type="text" class="form-control" id="guardianName" placeholder="Last Name" />
									</div>
								</div>
								<div class="row">
									<!-- Guardian Mobile Phone Number -->
									<div class="col-md-8 mb-3">
										<label for="guardianPhone" class="form-label">Guardian Phone Number</label>
										<div class="input-group phone-input-group">
											<!-- Select for country code -->
											<select class="form-select" id="countryCode">
												<option value="+62">+62 Indonesia</option>
												<option value="+1">+1</option>
												<option value="+44">+44</option>
												<option value="+91">+91</option>
												<!-- Add more country codes as needed -->
											</select>
											<!-- Input for whatsapp number -->
											<input type="tel" class="form-control" id="guardianPhone" placeholder="Phone Number" />
										</div>
									</div>
								</div>
								<div class="row">
									<!-- Date of Birth -->
									<div class="col-md-4 mb-3">
										<label for="dob" class="form-label">Date of Birth</label>
										<input type="date" class="form-control" id="dob" />
									</div>
									<!-- School Name -->
									<div class="col-md-5 dropdown mb-3">
										<label for="selectHighSchool" class="form-label">Select High School</label>
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

									<!-- Grade -->
									<div class="col-md-3 mb-3">
										<label for="grade" class="form-label">Current Grade</label>
										<select id="grade" class="form-select">
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="Lainnya">Lainnya</option>
										</select>
									</div>
								</div>

								<div id="additionalFields" style="display: none;">
									<div class="row">
										<!-- hidden until user choose others -->
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
								<div class="row">
									<div class="col-md-4 mb-3">
										<label for="email" class="form-label">Email Address</label>
										<input type="email" class="form-control" id="email" placeholder="enter your Email Address" />
									</div>

									<div class="col-md-4">
										<label class="form-label">YPPH/Lippo Employee</label>
										<select id="employee" class="form-select">
											<option value="" selected disabled hidden class="select-placeholder">Select items</option>
											<option>Option 1</option>
											<option>Option 2</option>
										</select>
									</div>
								</div>


								<div class="d-flex justify-align-center gap-2 py-3">
									<input type="checkbox" name="agree" id="agree" onclick="toggleSubmitButton()" />
									<label for="agree" class="dashboard-title">I agree with <a href="#" data-bs-toggle="modal" data-bs-target="#privacyPolicyModal">terms and conditions</a></label>
								</div>
								<!-- Submit Button -->
								<div class="float-end my-2">
									<button type="button" id="reviewBtn" class="btn select-program-btn rounded-2 px-5" disabled data-bs-toggle="modal" data-bs-target="#reviewModal">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<span class="d-flex align-items-md-center btn-sign cursor-pointer gap-2" role="button">
					<div class="d-none d-md-flex gap-2" onclick="window.location.href = '/program'">
						<img src="/assets/left-arrow.png" alt="arrow-left" />
						<p class="back-button p-0">back to Admission Type</p>
					</div>

					<button type="button" class="d-md-none btn btn-back-responsive danger-button d-flex justify-content-center align-items-center mt-5 gap-2 px-5" onclick="window.location.href = '/program'"><img
							src="/assets/arrow-back-red.png"
							alt="arrow-left" />back to Admission Type</button>
				</span>
			</div>
			<!-- desktop view ends -->
		</div>

		<!-- Modal Terms & Conditions -->
		<div class="modal fade" id="privacyPolicyModal" tabindex="-1" aria-labelledby="privacyPolicyModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<!-- Modal Header -->
					<div class="modal-header">
						<h5 class="modal-title" id="privacyPolicyModalLabel">Kebijakan Privasi & Syarat Dan Ketentuan</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>

					<!-- Modal Body -->
					<div class="modal-body">
						<h6><strong>KEBIJAKAN PRIVASI</strong></h6>
						<p>
							Kebijakan privasi ini dibuat untuk menjelaskan data apa saja yang kami kumpulkan, bagaimana kami menggunakan data tersebut, dan kepada siapa saja data tersebut kami bagikan. Informasi yang anda
							berikan
							kepada Universitas Pelita Harapan akan kami gunakan untuk proses pendaftaran, evaluasi serta penerimaan aplikasi anda.
						</p>
						<p>Untuk keterangan lebih lanjut mengenai kebijakan privasi ini, anda dapat mengirimkan email ke bma@uph.edu</p>

						<h6 class="pt-3"><strong>Ruang Lingkup Kebijakan Privasi</strong></h6>
						<p>
							Kebijakan ini berlaku untuk informasi yang kami dapatkan melalui portal online admission yaitu one.uph.edu. Penggunaan dari portal tersebut diatur dalam syarat dan ketentuan yang merupakan satu
							bagian yang
							tidak dapat dipisahkan dari kebijakan privasi ini.
						</p>

						<h6 class="pt-3"><strong>Ruang Lingkup data</strong></h6>
						<p>
							Universitas Pelita Harapan mengumpulkan informasi, termasuk di dalamnya adalah data pribadi, mulai dari saat anda melakukan registrasi pada website online admission. Universitas Pelita Harapan
							juga
							mengumpulkan, menyimpan serta menggunakan berbagai macam informasi lainnya seperti IP address, operating system, unique ID of cookies, Unique ID dari perangkat komunikasi yang digunakan,
							browser, Internet
							Service Provider (ISP), dan lain sebagainya.
						</p>

						<h6 class="pt-3"><strong>Tujuan Penggunaan Data</strong></h6>
						<p>Universitas Pelita Harapan menggunakan semua informasi yang dikumpulkan untuk tujuan:</p>
						<ul>
							<li>Kelancaran proses pendaftaran online dimana di dalamnya terdapat beberapa proses seperti pendaftaran, evaluasi, penerimaan, serta pembayaran biaya form dan biaya studi.</li>
							<li>Berkomunikasi dengan anda melalui dan tidak terbatas pada email, SMS, dan telepon.</li>
							<li>Memperlancar proses enrollment yang wajib dilakukan sebelum calon mahasiswa dapat melakukan perkuliahan.</li>
						</ul>

						<h6 class="pt-3"><strong>SYARAT DAN KETENTUAN</strong></h6>

						<h6><strong>Pendahuluan</strong></h6>
						<p>
							Harap membaca dan memahami terlebih dahulu seluruh syarat dan ketentuan yang dijelaskan pada halaman ini sebelum menggunakan portal online admission dalam bentuk apapun, dimana di dalamnya
							termasuk seluruh
							konten dan halaman yang terdapat pada one.uph.edu. Syarat dan ketentuan ini merupakan kesepakatan antara anda dengan Universitas Pelita Harapan.
						</p>

						<h6 class="pt-3"><strong>Akun Pengguna dan Registrasi</strong></h6>
						<p>
							Untuk dapat menggunakan semua fitur yang ditawarkan dalam portal online admission maka anda harus melakukan pendaftaran terlebih dahulu dengan mengisi beberapa informasi pribadi seperti email
							dan nomor
							telepon genggam serta informasi penting lainnya.
						</p>

						<h6 class="pt-3"><strong>Program Studi</strong></h6>
						<p>Melalui portal online admission ini Universitas Pelita Harapan menawarkan berbagai macam program studi yang dapat anda pilih baik melalui jalur reguler maupun jalur beasiswa.</p>

						<h6 class="pt-3"><strong>Pembayaran</strong></h6>
						<p>
							Segala macam bentuk pembayaran baik itu pembayaran biaya form maupun pembayaran biaya studi wajib menggunakan metode yang sudah disediakan di dalam website online admission terkecuali apabila
							ada
							pemberitahuan tertulis dari Universitas Pelita Harapan.
						</p>

						<h6 class="pt-3"><strong>Refund</strong></h6>
						<p>
							Semua biaya yang telah dibayarkan melalui portal online admission tidak dapat dikembalikan dalam keadaan apapun kecuali terdapat pertimbangan khusus seperti yang diatur di dalam ketentuan
							mengenai biaya
							studi.
						</p>
					</div>

					<!-- Modal Footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		{{-- Modal Review Form --}}
		<div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModal" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content border-0">
					<!-- Modal Header -->
					<div class="modal-header">
						<h5 class="modal-title preview-modal-title" id="privacyPolicyModalLabel">Review Information</h5>
					</div>

					<div class="modal-body">
						<div>
							{{-- first row --}}
							<div class="row">
								<div class="col-md-4 mb-3">
									<p class="form-label-review">Full Name</p>
									<p class="form-control-review">John Doe</p>
								</div>
								<div class="col-md-4 mb-3">
									<p class="form-label-review">Email Address</p>
									<p class="form-control-review">john.doe@gmail.com</p>
								</div>
								<div class="col-md-4 mb-3">
									<p class="form-label-review">Campus Location</p>
									<p class="form-control-review">Lippo Village Campus</p>
								</div>
							</div>
							{{-- second row --}}
							<div class="row">
								<div class="col-md-4 mb-3">
									<p class="form-label-review">Mobile Phone Number</p>
									<p class="form-control-review">+123456789</p>
								</div>
								<div class="col-md-4 mb-3">
									<p class="form-label-review">School</p>
									<p class="form-control-review">New York School</p>
								</div>
								<div class="col-md-4 mb-3">
									<p class="form-label-review">College</p>
									<p class="form-control-review">NArts & Social Sciences</p>
								</div>
							</div>
							{{-- third row --}}
							<div class="row">
								<div class="col-md-4 mb-3">
									<p class="form-label-review">Guardian Name</p>
									<p class="form-control-review">Guardian Name</p>
								</div>
								<div class="col-md-4 mb-3">
									<p class="form-label-review">Current Grade</p>
									<p class="form-control-review">12</p>
								</div>
								<div class="col-md-4 mb-3">
									<p class="form-label-review">Faculty</p>
									<p class="form-control-review">Faculty</p>
								</div>
							</div>
							{{-- forth row --}}
							<div class="row">
								<div class="col-md-4 mb-3">
									<p class="form-label-review">Guardian Phone Number</p>
									<p class="form-control-review">Phone Number</p>
								</div>
								<div class="col-md-4 mb-3">
									<p class="form-label-review">Nationality</p>
									<p class="form-control-review">Indonesian</p>
								</div>
								<div class="col-md-4 mb-3">
									<p class="form-label-review">Program</p>
									<p class="form-control-review">Music</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 mb-3">
									<p class="form-label-review">Date of Birth</p>
									<p class="form-control-review">25 December 1995</p>
								</div>
								<div class="col-md-4 mb-3">
									<p class="form-label-review">Study Level</p>
									<p class="form-control-review">Undergraduate</p>
								</div>
							</div>
						</div>
					</div>

					<div class="modal-footer d-flex flex-column-reverse flex-md-row justify-content-between">
						<button type="button" class="btn back-button d-flex justify-content-center align-items-center gap-2" data-bs-dismiss="modal" aria-label="Close"><img
								src="/assets/arrow-back-red.png"
								alt="arrow-left" />Edit your Personal Data</button>

						<button type="button" id="submitBtn" class="btn select-program-btn rounded-2 px-5">Submit</button>
					</div>
				</div>
			</div>
		</div>

		{{-- <!-- Modal Email Verification Confirmation--> --}}
		<div class="modal fade" id="emailVerify" tabindex="-1" aria-labelledby="emailVerifyLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content text-center">
					<div class="modal-body modal-body-review">
						<img src="/assets/mail.png" class="img-fluid mb-3" alt="Success Image" />
						<!-- Replace with your image path -->
						<div>
							<p class="fs-4 review-modal-title">Confirm your Email</p>
							<p class="review-modal-subtitle d-flex flex-column align-items-center mb-3">Confirm your email address to complete</p>
						</div>

						<div class="mb-3">
							<p class="tabs-title mb-2">Hi, [First Name] [Middle Name] [Last Name]</p>
							<p class="review-modal-subtitle d-flex flex-column align-items-center mb-1">Please confirm your email address to activate your account</p>
							<p class="review-modal-subtitle"><strong>Open your email in </strong><span class="email-verify">[Email Address]</span></p>
						</div>

						<p class="register pb-3">Didn’t receive any Activation Email from us?</p>

						<div class="d-flex justify-content-center gap-3">
							<button type="button" class="btn btn-outline-danger rounded-0 w-35" data-bs-dismiss="modal">Back</button>
							<button type="button" class="btn btn-danger rounded-0 w-75">Resend Activation Email</button>
						</div>

					</div>
				</div>
			</div>
		</div>

		{{-- <!-- Modal Email Verification Failed --> --}}
		<div class="modal fade" id="emailVerifyFailed" tabindex="-1" aria-labelledby="emailVerifyLabelFailed" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content text-center">
					<div class="modal-body modal-body-review">
						<img src="/assets/verify-failed.png" class="img-fluid mb-3" alt="Success Image" />
						<!-- Replace with your image path -->
						<div>
							<p class="fs-4 review-modal-title mb-2">Verification Link Invalid</p>
							<p class="review-modal-subtitle d-flex flex-column align-items-center mb-4">Your verification link registration is invalid or already used</p>
						</div>

						<p class="register pb-3">Try to resend the link?</p>

						<div class="d-flex justify-content-between gap-3">
							<button type="button" class="btn btn-outline-danger rounded-0 w-35" data-bs-dismiss="modal">Back</button>
							<button type="button" class="btn btn-danger rounded-0 w-75">Resend Activation Email</button>
						</div>

					</div>
				</div>
			</div>
		</div>

		{{-- tambahkan script ini untuk menghapus backdrop modal --}}
		<script>
			document.addEventListener("hidden.bs.modal", function(event) {
				const backdrop = document.querySelector(".modal-backdrop");
				if (backdrop) {
					backdrop.remove(); // delete backdrop secara manual
				}
				document.body.classList.remove("modal-open");
			});
		</script>

		{{-- script untuk submit --}}
		<script>
			// Ambil elemen-elemen yang dibutuhkan
			const formDesktop = document.getElementById("personalInfoForm");
			const submitBtn = document.getElementById("submitBtn");
			const reviewBtn = document.getElementById("reviewBtn");

			// Fungsi untuk menangani submit form
			function handleFormSubmit(event) {
				event.preventDefault();

				// Ambil nilai dari password dan repeat password
				const password = formDesktop.querySelector("#password")?.value;
				const repeatPassword = formDesktop.querySelector("#repeatPassword")?.value;

				// Cek apakah password dan repeat password cocok
				if (password !== repeatPassword) {
					alert("Passwords do not match!");
					return;
				}

				// Collect form data
				const formData = {
					firstName: formDesktop.querySelector("#firstName")?.value,
					middleName: formDesktop.querySelector("#middleName")?.value,
					lastName: formDesktop.querySelector("#lastName")?.value,
					mobilePhone: formDesktop.querySelector("#mobilePhone")?.value,
					guardianName: formDesktop.querySelector("#guardianName")?.value,
					guardianPhone: formDesktop.querySelector("#guardianPhone")?.value,
					dob: formDesktop.querySelector("#dob")?.value,
					schoolName: formDesktop.querySelector("#schoolName")?.value,
					grade: formDesktop.querySelector("#grade")?.value,
					email: formDesktop.querySelector("#email")?.value,
					selectHighSchool: formDesktop.querySelector("#selectHighSchool")?.value,
					highSchoolType: formDesktop.querySelector("#highSchoolType")?.value,
					country: formDesktop.querySelector("#country")?.value,
					province: formDesktop.querySelector("#province")?.value,
					city: formDesktop.querySelector("#city")?.value,
				};

				console.log("Form submitted:", formData);

				// start contoh menampilkan modal email verification setelah submit
				// bisa disesuaikan dengan cara apa saja untuk menampilkan modal emailVerify setelah user submit review form
				if (reviewBtn) {
					reviewBtn.focus();
				}

				// Tutup modal review
				const reviewModalElement = document.getElementById("reviewModal");
				const reviewModal = bootstrap.Modal.getInstance(reviewModalElement);
				if (reviewModal) {
					reviewModal.hide();
				}

				// Tampilkan modal emailVerify
				const emailVerifyModal = new bootstrap.Modal(document.getElementById("emailVerify"));
				emailVerifyModal.show();
				// end contoh menampilkan modal email verification setelah submit
			}

			// Fungsi untuk menampilkan modal (Bootstrap)
			function showModal(event) {
				event.preventDefault();

				// Gunakan Bootstrap API untuk menampilkan modal
				const modalElement = new bootstrap.Modal(document.getElementById("reviewModal"));
				modalElement.show();
			}

			// event listener untuk tombol reviewBtn
			if (reviewBtn) {
				reviewBtn.addEventListener("click", showModal);
			}

			// event listener untuk tombol submitBtn di dalam modal
			if (submitBtn) {
				submitBtn.addEventListener("click", function(event) {
					event.preventDefault();

					// Validasi form dan submit
					if (formDesktop) {
						handleFormSubmit(event);
					}
				});
			}
		</script>

		{{-- script untuk checkbox dan hide/show school information untuk option Others --}}
		<script>
			document.addEventListener("DOMContentLoaded", function() {
				const selectHighSchool = document.getElementById("selectHighSchool");
				const additionalFields = document.getElementById("additionalFields");
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


			function toggleSubmitButton() {
				const agreeCheckbox = document.getElementById("agree");
				const submitButton = document.getElementById("reviewBtn");
				submitButton.disabled = !agreeCheckbox.checked;
			}
		</script>

		<script type="text/javascript" src="{{ asset('js/listsearch.js') }}"></script>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
		</script>
	</body>

</html>
