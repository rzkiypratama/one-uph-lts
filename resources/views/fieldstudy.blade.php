<!DOCTYPE html>
<html lang="en">

<x-head title="Field Study" />

<body class="container">
    <!-- header -->
    <img src="/assets/uph-logo.png" alt="logo" class="uphlogo pt-5 position-absolute">

    <div class="d-flex p-5 justify-content-center align-items-center min-vh-100 homepage-container">

        <div class="card card-container p-5">
            <div class="d-flex justify-content-between box-item">
                <div class="d-flex flex-column">
                    <div class="left-content">
                        <p class="text-uppercase">step 4 of 8</p>
                        <h3>In which College do you intend to study?</h3>
                        <p class="children">Choose a College Cluster</p>
                        <hr class="solid">
                    </div>

                    <div class="divider-items"></div>

                    <span class="d-flex gap-2 align-items-md-center cursor-pointer" role="button" id="backToCampus">
                        <img src="/assets/left-arrow.png" alt="arrow-back">
                        <p class="back-button">back to Campus Selection</p>
                    </span>
                </div>

            
                <div class="campus-grid card-box">
                    <a href="/programmajor">
                        <div class="card-nationality border-0 col" style="background-image: url('/assets/businesstech.jpeg'); height: 198px; width: 272px;">
                            <!-- Gradient Overlay -->
                            <div class="gradient-overlay" style="background-image: linear-gradient(60deg, #1C75BC, #1C75BC55);" \>
                            </div>
                
                            <!-- Title -->
                            <div class="title-container">
                                <img src="/assets/bistech-icon.png" alt="icon" class="icon" />
                                <h3 class="title" style="color: #fff !important;">Business & Technology</h3>
                            </div>
                        </div>
                    </a>

                    <a href="/programmajor">
                        <div class="card-nationality border-0 col" style="background-image: url('/assets/nurse.png'); height: 198px; width: 272px;">
                            <!-- Gradient Overlay -->
                            <div class="gradient-overlay" style="background-image: linear-gradient(60deg, #FFC841, #FFC84155);" \>
                            </div>
                
                            <!-- Title -->
                            <div class="title-container">
                                <img src="/assets/education-icon.png" alt="icon" class="icon" />
                                <h3 class="title" style="color: #fff !important;">Nursing & Education</h3>
                            </div>
                        </div>
                    </a>

                    <a href="/programmajor">
                        <div class="card-nationality border-0 col" style="background-image: url('/assets/healthscience.png'); height: 198px; width: 272px;">
                            <!-- Gradient Overlay -->
                            <div class="gradient-overlay" style="background-image: linear-gradient(60deg, #00A79D, #00A79D55);" \>
                            </div>
                
                            <!-- Title -->
                            <div class="title-container">
                                <img src="/assets/health-icons.png" alt="icon" class="icon" />
                                <h3 class="title" style="color: #fff !important;">Health Sciences</h3>
                            </div>
                        </div>
                    </a>

                    <a href="/programmajor">
                        <div class="card-nationality border-0 col" style="background-image: url('/assets/art.png'); height: 198px; width: 272px;">
                            <!-- Gradient Overlay -->
                            <div class="gradient-overlay" style="background-image: linear-gradient(60deg, #D7182C, #D7182C55);" \>
                            </div>
                
                            <!-- Title -->
                            <div class="title-container">
                                <img src="/assets/art-icon.png" alt="icon" class="icon" />
                                <h3 class="title" style="color: #fff !important;">Arts & Social Sciences</h3>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.getElementById('backToCampus').addEventListener('click', function (event) {
            event.preventDefault();
            window.location.href = '/campus';
        })
    </script>
</body>

</html>