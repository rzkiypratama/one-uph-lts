<!DOCTYPE html>
<html lang="en">

<x-head title="Application Status" />

<body class="container mt-3">
    <div class="d-flex justify-content-between align-items-center pt-3 mb-5">
        <img src="/assets/uph-logo.png" alt="logo" class="uphlogo">
        <div class="d-flex gap-3 align-items-center">
            <span class="logout-button d-flex align-items-center gap-2">
                <p class="m-0">logout</p>
                <img src="/assets/signout-icon.png" alt="signout icon" class="logout-icon">
            </span>
            <img src="/assets/bells.png" alt="notification icon" class="notification-icon">
        </div>
    </div>

    <div class="p-5 rounded-3 bg-white dashboard-container">
        <div class="d-flex justify-content-between">
            <div class="w-100 pe-4">
                <img src="/assets/idcard.png" alt="badge-id" class="badge-icon">
                <p class="text-capitalize m-0 dashboard-welcome pt-2">welcome</p>
                <h3 class="dashboard-username">Kevin Saputra Siahaan</h3>
                <span class="d-flex justify-content-between align-items-center">
                    <p class="text-uppercase dashboard-id">ID #123456</p>
                    <button type="button" class="btn btn-outline-primary px-4 dashboard-edit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                      </svg> edit profile</button>
                </span>

                <hr class="full-width-hr-wrapper-form"/>

                <div class="row mb-4 pt-2">
                    <!-- <span class="col-md-4">
                        <p class="m-0 text-capitalize dashboard-title">study category</p>
                        <p class="m-0 text-capitalize dashboard-subtitle">Undergraduate (S1)</p>
                    </span> -->

                    <span class="col-md-4">
                        <p class="m-0 text-capitalize dashboard-title">program</p>
                        <p class="m-0 text-capitalize dashboard-subtitle">Architecture</p>
                    </span>

                    <span class="col-md-8">
                        <p class="m-0 text-capitalize dashboard-title">Entry Option</p>
                        <p class="m-0 text-capitalize dashboard-subtitle">Regular Application</p>
                    </span>
                </div>

                <div class="row">
                    <!-- <span class="col-md-4">
                        <p class="m-0 text-capitalize dashboard-title">Campus</p>
                        <p class="m-0 text-capitalize dashboard-subtitle">Lippo Village Campus</p>
                    </span>
     -->
                    <span class="col-md-4">
                        <p class="m-0 text-capitalize dashboard-title">Campus</p>
                        <p class="m-0 text-capitalize dashboard-subtitle">Lippo Village Campus</p>
                    </span>
    
                    <span class="col-md-8">
                        <p class="m-0 text-capitalize dashboard-title">Entry Type</p>
                        <p class="m-0 text-capitalize dashboard-subtitle">Direct Admission</p>
                    </span>
                </div>

                <hr class="full-width-hr-wrapper-form"/>

                <p class="text-capitalize m-0 dashboard-bottom-title mb-3">application status</p>

                <div class="card p-3 shadow-sm border-0 rounded-3 bg-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="m-0 row-title">Architecture</p>
                        <p class="admitted-btn">admitted</p>
                    </div>

                    <div class="d-flex justify-content-between fst-italic">
                        <p class="m-0 tabs-subtitle">Undergraduate (S1)</p>
                        <!-- <p class="m-0 tabs-subtitle">Student Admited, Please Pay Tuition Fee</p> -->
                    </div>

                    <div>
                        <p class="m-0 tabs-subtitle">Form #9812739817283</p>
                    </div>
                </div>
            </div>
    
            <div class="dashboard-box">
                    <div class="card-dashboard border-0" style="background-image: url('/assets/student.jpeg'); height: 461px; width: 272px;">
                        <!-- Gradient Overlay -->
                        <div class="gradient-overlay" style="background-image: linear-gradient(to top, #BCD1FF, #f1f1f122);" \>
                        </div>
            
                        <!-- Title -->
                        <div class="title-container w-100">
                            <img src="/assets/toga copy.png" alt="icon" class="icon-form" />
                            <h3 class="title-card-dashboard" style="color: #112369 !important; font-weight: 300 !important;">Complete Tuition Fee Payment</h3>
                            <button type="button" class="text-capitalize btn btn-danger w-100 border-0 dashboard-button">Pay Tuition Fee</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>