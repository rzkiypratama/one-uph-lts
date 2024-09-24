<!DOCTYPE html>
<html lang="en">

<x-head title="Homepage" />

<body class="container">
  <!-- header -->
  <img src="/assets/uph-logo.png" alt="logo" class="uphlogo pt-5 position-absolute">

  <div class="container d-flex p-5 justify-content-center align-items-center min-vh-100 homepage-container">

    <div class="d-flex flex-column align-items-center welcome-login">
      <img src="/assets/graduate.png" alt="graduate" class="graduate-logo">
      <h3 class="header-login d-grid col-sm text-center pt-3">Welcome to <span>ONE UPH</span></h3>
      <p class="fst-italic">ready to apply for your future in UPH?</p>
    </div>

    <div class="d-flex flex-column gap-3">

      <div class="card p-1 shadow-sm card-login" onclick="window.location.href = '/signin'">
        <div class="card-body">
          <h5 class="card-title">Sign In</h5>
          <p class="card-text fst-italic text-muted">if you already have an account</p>
          <a> <img src="/assets/signin.png" alt="signin" class="float-end pt-4 icon-login"> </a>
        </div>
      </div>

      <div class="card p-1 shadow-sm card-login" onclick="window.location.href = '/nationality'">
        <div class="card-body">
          <h5 class="card-title">Register</h5>
          <p class="card-text fst-italic text-muted">to start your application</p>
          <a> <img src="/assets/idcard.png" alt="signin" class="float-end pt-4 icon-login"> </a>
        </div>
      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>