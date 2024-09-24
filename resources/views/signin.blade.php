<!DOCTYPE html>
<html lang="en">

<x-head title="Sign In" />

<body class="container">
    <!-- header -->
    <img src="/assets/uph-logo.png" alt="logo" class="uphlogo pt-5 position-absolute">

    <div class="container d-flex justify-content-center align-items-center min-vh-100 homepage-container">

        <div class="d-flex flex-column align-items-center welcome-login">
            <img src="/assets/graduate.png" alt="graduate" class="graduate-logo">
            <h3 class="header-login d-grid col-sm text-center pt-3">Welcome to <span>ONE UPH</span></h3>
            <p class="fst-italic">ready to apply for your future in UPH?</p>
        </div>

        <div class="d-flex justify-content-center align-items-center min-vh-100">
            <div class="card p-4" style="width: 360px;">
                <div class="text-center d-flex justify-content-between">
                    <h3>Sign In</h3>
                    <img src="/assets/signin.png" alt="Sign In Image" class="img-fluid mb-3" style="max-width: 100px;">
                </div>

                <div class="full-width-hr-wrapper mb-3">
                    <hr class="full-width">
                </div>
                
                <!-- Email Address Input -->
                <form id="loginForm">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                    </div>
        
                    <!-- Password Input with Show/Hide Eye Icon -->
                    <div class="mb-3 position-relative">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                        <i class="bi bi-eye-slash eye-icon" id="togglePassword"></i>
                    </div>
        
                    <!-- Forgot Password Link -->
                    <div class="mb-3 text-end">
                        <a href="#" class="forgot-password fst-italic">Forgot Password?</a>
                    </div>
        
                    <!-- Sign In Button -->
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-signin">Sign In</button>
                    </div>
                    <p class="text-center register">Don’t have an account yet? <a href="/nationality.html" class="register-link">Register</a></p>
                </form>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <!-- Simple Login Logic -->
    <script type="text/javascript" src="{{asset('js/login.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
  </body>
</html>