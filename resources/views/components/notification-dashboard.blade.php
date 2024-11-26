		<div class="d-flex justify-content-between align-items-center mb-md-5 mb-3 pt-3">
		<div class="d-flex gap-3">
		<img src="/assets/uph-logo.png" alt="logo" class="uphlogo" />
		<span class="logout-button d-flex align-items-center gap-2">
		<p class="d-md-block d-none m-0" onclick="window.location.href = '/tuition-fee'">dashboard</p>
		</span>
		</div>
		<div class="d-flex align-items-center gap-3">

		<span class="logout-button d-flex align-items-center gap-2">
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
		<path
		d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
		</svg>
		<p class="d-md-block d-none m-0">my profile</p>
		</span>

		<span class="language-button">
		<p>ID</p>
		<span>|</span>
		<p class="active">EN</p>
		</span>

		<img src="/assets/signout-icon.png" alt="logout icon" class="logout-icon" onclick="window.location.href='/'" />

		<!-- Notification Card -->
		<div class="notification-card" id="notificationCard">
		<p>New Message: Welcome to the system!</p>
		<p>Reminder: Complete your profile.</p>
		<p>Reminder: Complete your profile.</p>
		<p>Reminder: Complete your profile.</p>
		<p>New Update Available</p>
		<p>New Update Available</p>
		<p>New Update Available</p>
		<p>New Update Available</p>
		<p>New Update Available</p>
		</div>
		</div>
		</div>

		<script type="text/javascript" src="{{ asset('js/notificationIcon.js') }}"></script>
