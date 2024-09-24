const loginForm = document.getElementById('loginForm');
const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');

// Toggle password visibility
togglePassword.addEventListener('click', function () {
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    this.classList.toggle('bi-eye');
    this.classList.toggle('bi-eye-slash');
});

// Simple login validation
loginForm.addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent form from submitting

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // Hardcoded credentials
    const validUsername = 'admin@admin.com';
    const validPassword = 'admin';

    if (email === validUsername && password === validPassword) {
        alert('Login successful!');
        // You can redirect to another page here
        window.location.href = '/dashboard';
        localStorage.setItem('nationality', 'national');
    } else {
        alert('Invalid credentials, please try again.');
    }
});