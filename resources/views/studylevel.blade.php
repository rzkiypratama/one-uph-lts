<!DOCTYPE html>
<html lang="en">

<x-head title="Study Level" />

<body class="container">
    <!-- header -->
    <img src="/assets/uph-logo.png" alt="logo" class="uphlogo pt-5 position-absolute">

    <div class="d-flex p-5 justify-content-center align-items-center min-vh-100 homepage-container">

        <div class="card card-container p-5">
            <div class="d-flex justify-content-between box-item">
                <div class="d-flex flex-column justify-content-between">
                    <div class="left-content">
                        <p class="text-uppercase">step 2 of 8</p>
                        <h3>Which study level are you interested in?</h3>
                        <p class="children">Choose your study level</p>
                        <hr class="solid">
                    </div>

                    <div class="divider-items"></div>

                    <span class="d-flex gap-2 align-items-md-center cursor-pointer" role="button" id="backToNationality">
                        <img src="/assets/left-arrow.png" alt="arrow-back">
                        <p class="back-button">back to Student Nationality</p>
                    </span>
                </div>

            
                <div class="d-flex flex-column gap-3 card-box">
                    <a href="/campus">
                        <div class="card-nationality border-0" style="background-image: url('/assets/studylevel1.png'); height: 133px; width: 558px;">
                            <!-- Gradient Overlay -->
                            <div class="gradient-overlay" style="background-image: linear-gradient(to top, #BCD1FF, #f1f1f122);" \>
                            </div>
                
                            <!-- Title -->
                            <div class="title-container w-100">
                                <!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
                                <h3 class="title w-100" style="color: #333333;">Undergraduate (S1)</h3>
                            </div>
                        </div>
                    </a>

                    <a href="/campus">
                        <div class="card-nationality border-0" style="background-image: url('/assets/studylevel2.png'); height: 133px; width: 558px;">
                            <!-- Gradient Overlay -->
                            <div class="gradient-overlay" style="background-image: linear-gradient(to top, #BCD1FF, #f1f1f122);" \>
                            </div>
                
                            <!-- Title -->
                            <div class="title-container">
                                <!-- <img src="icon-url.png" alt="icon" class="icon" /> -->
                                <h3 class="title w-100" style="color: #333333;">Graduate (S2 & S3)</h3>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.getElementById('backToNationality').addEventListener('click', function (event) {
            event.preventDefault();
            window.location.href = '/nationality';
        })
    </script>
</body>

</html>