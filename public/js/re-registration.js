$(document).ready(function () {
    const nationality = localStorage.getItem("nationality");

    // Untuk form nasional dan internasional
    if (nationality === "national") {
        $("#national-form").addClass("show").removeClass("hidden");
        $("#international-form").addClass("hidden").removeClass("show");
    } else if (nationality === "international") {
        $("#international-form").addClass("show").removeClass("hidden");
        $("#national-form").addClass("hidden").removeClass("show");
    }

    // Untuk address nasional dan internasional
    if (nationality === "national") {
        $("#national-address").addClass("show").removeClass("hidden");
        $("#international-address").addClass("hidden").removeClass("show");
    } else if (nationality === "international") {
        $("#international-address").addClass("show").removeClass("hidden");
        $("#national-address").addClass("hidden").removeClass("show");
    }

    const tabs = ["#tab1-tab", "#tab2-tab", "#tab3-tab"];
    let currentTabIndex = 0;

    const $backButton = $("#backButton");
    const $nextButton = $(".danger-button");

    // Fungsi untuk mengupdate tombol Next dan Back
    function updateButtons() {
        // Jika di tab pertama, tombol Back membawa ke halaman sebelumnya
        $backButton.text(currentTabIndex === 0 ? "Back" : "Previous");

        // Jika di tab terakhir, tombol Next menjadi Submit
        $nextButton.text(
            currentTabIndex === tabs.length - 1
                ? "Save Data & Continue"
                : "Continue"
        );
    }

    // Event listener untuk tombol Back
    $backButton.click(function () {
        if (currentTabIndex > 0) {
            currentTabIndex--;
            const previousTab = new bootstrap.Tab($(tabs[currentTabIndex])[0]);
            previousTab.show();
            updateButtons();
        } else {
            window.location.href = "/tuition-fee/tuitionpayment.html";
        }
    });

    // Event listener untuk tombol Next (Continue/Submit)
    $("#myForm").submit(function (event) {
        event.preventDefault();

        if (currentTabIndex < tabs.length - 1) {
            currentTabIndex++;
            const nextTab = new bootstrap.Tab($(tabs[currentTabIndex])[0]);
            nextTab.show();
            updateButtons();
        } else {
            alert("Form submitted!");
            window.location.href = "/tuition-fee/administration-documents.html";
        }
    });

    // Event listener untuk tab klik langsung
    tabs.forEach(function (tabId, index) {
        $(tabId).click(function () {
            currentTabIndex = index;
            updateButtons();
        });
    });

    // Initial button state
    updateButtons();
});
