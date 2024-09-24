<!DOCTYPE html>
<html lang="en">

<x-head title="Nationality" />

<body class="container">
    <!-- header -->
    <img src="/assets/uph-logo.png" alt="logo" class="uphlogo pt-5 position-absolute">

    <div class="d-flex p-5 justify-content-center align-items-center min-vh-100 homepage-container">

        <div class="card card-container p-5">
            <div class="d-flex justify-content-between box-item">
                <div class="left-content">
                    <p class="text-uppercase">step 1 of 8</p>
                    <h3>Are you Indonesian or International Student?</h3>
                    <p class="children">Choose your nationality</p>
                    <hr class="solid">
                </div>

                <div class="d-flex gap-3 card-box">
                    <a href="/studylevel" class="nationality" data-nationality="National">
                        <div class="card-nationality border-0 fade-in-right"
                            style="background-image: url('/assets/student.jpeg'); height: 402px; width: 272px;">
                            <!-- Gradient Overlay -->
                            <div class="gradient-overlay"
                                style="background-image: linear-gradient(to top, #BCD1FF, #f1f1f122);" \>
                            </div>

                            <!-- Title -->
                            <div class="title-container">
                                <h3 class="title" style="color: #333333;">I’m an Indonesian Student</h3>
                            </div>
                        </div>
                    </a>

                    <a href="/international" class="nationality" data-nationality="International">
                        <div class="card-nationality border-0 fade-in-right"
                            style="background-image: url('/assets/international-student.png'); height: 402px; width: 272px;">
                            <!-- Gradient Overlay -->
                            <div class="gradient-overlay"
                                style="background-image: linear-gradient(to top, #BCD1FF, #f1f1f122);" \>
                            </div>

                            <!-- Title -->
                            <div class="title-container">
                                <h3 class="title" style="color: #333333;">I’m an International Student</h3>
                            </div>
                        </div>
                    </a>

                </div>
            </div>

            <span class="d-flex gap-2 align-items-md-center cursor-pointer btn-sign" role="button" id="backToSignIn">
                <img src="/assets/left-arrow.png" alt="arrow-back">
                <p class="back-button p-0">back to Sign In</p>
            </span>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        document.querySelectorAll('.nationality').forEach(function (element) {
            element.addEventListener('click', function (event) {
                // Ambil nilai nationality dari data attribute
                const nationality = event.currentTarget.getAttribute('data-nationality');

                // Simpan nationality ke localStorage
                localStorage.setItem('nationality', nationality);
            });
        });

        document.getElementById('backToSignIn').addEventListener('click', function (event) {
            event.preventDefault();
            window.location.href = '/';
        })
    </script>
</body>

</html>