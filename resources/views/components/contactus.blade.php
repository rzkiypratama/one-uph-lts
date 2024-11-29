		<!-- Button Contact Us -->
		<button id="contactUsBtn" class="btn btn-primary d-flex align-items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
		class="bi bi-chat-dots-fill"
		viewBox="0 0 16 16">
		<path
		d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
		</svg> Contact Us</button>
		<!-- Contact Us Card -->
		<div id="contactUsCard" class="card fade-in-bottom shadow-lg">
		<div class="card-header contact-us-btn d-flex justify-content-between align-items-center">
		<h5 class="mb-0">Contact Us</h5>
		<button type="button" class="btn-close" aria-label="Close" onclick="toggleContactUsCard()"></button>
		</div>
		<div class="card-body">
		<form>
		<div class="mb-3">
		<label for="subject" class="form-label">Subject</label>
		<input type="text" class="form-control" id="subject" placeholder="Enter subject" />
		</div>
		<div class="mb-3">
		<label for="email" class="form-label">Email</label>
		<input type="email" class="form-control" id="email" placeholder="Enter your email" />
		</div>
		<div class="mb-3">
		<label for="name" class="form-label">Your Name</label>
		<input type="text" class="form-control" id="name" placeholder="Enter your name" />
		</div>
		<button type="submit" class="btn btn-primary w-100 mt-3">Submit</button>
		</form>
		</div>
		</div>

		<script>
			// Fungsi untuk toggle tampilan card
			function toggleContactUsCard() {
				const contactUsCard = document.getElementById("contactUsCard");
				contactUsCard.style.display = contactUsCard.style.display === "none" ? "block" : "none";
			}

			// Event listener untuk membuka card saat button Contact Us diklik
			document.getElementById("contactUsBtn").addEventListener("click", toggleContactUsCard);
		</script>
