document.addEventListener("DOMContentLoaded", function () {
    // Ambil nationality dari localStorage, jika tidak ada set default 'national'
    let nationality = localStorage.getItem("nationality") || "national";

    // Jika belum ada di localStorage, set default nationality sebagai 'national'
    if (!localStorage.getItem("nationality")) {
        localStorage.setItem("nationality", "national");
    }

    // Menampilkan atau menyembunyikan form berdasarkan nationality
    const nationalForm = document.getElementById("national-form");
    const internationalForm = document.getElementById("international-form");

    if (nationality === "national") {
        nationalForm.classList.add("show");
        internationalForm.classList.add("hidden");
    } else if (nationality === "international") {
        internationalForm.classList.add("show");
        nationalForm.classList.add("hidden");
    }
});

const tabs = ["tab1-tab", "tab2-tab", "tab3-tab"];
let currentTabIndex = 0;

const backButton = document.getElementById("backButton");
const nextButton = document.querySelector(".danger-button");

// Fungsi untuk mengupdate tombol Next dan Back
function updateButtons() {
    // Jika di tab pertama, tombol Back membawa ke halaman sebelumnya
    if (currentTabIndex === 0) {
        backButton.innerText = "Back";
    } else {
        backButton.innerText = "Previous";
    }

    // Jika di tab terakhir, tombol Next menjadi Submit
    if (currentTabIndex === tabs.length - 1) {
        nextButton.innerText = "Save Data & Continue";
    } else {
        nextButton.innerText = "Continue";
    }
}

// Event listener untuk tombol Back
backButton.addEventListener("click", function () {
    if (currentTabIndex > 0) {
        currentTabIndex--;
        const previousTab = new bootstrap.Tab(
            document.getElementById(tabs[currentTabIndex])
        );
        previousTab.show();
        updateButtons();
    } else {
        window.location.href = "/tuition-fee/tuitionpayment";
    }
});

// Event listener untuk tombol Next (Continue/Submit)
document.getElementById("myForm").addEventListener("submit", function (event) {
    event.preventDefault();

    if (currentTabIndex < tabs.length - 1) {
        currentTabIndex++;
        const nextTab = new bootstrap.Tab(
            document.getElementById(tabs[currentTabIndex])
        );
        nextTab.show();
        updateButtons();
    } else {
        alert("Form submitted!");
        window.location.href = "/tuition-fee/administration-documents";
    }
});

// Event listener untuk tab klik langsung
tabs.forEach((tabId, index) => {
    document.getElementById(tabId).addEventListener("click", function () {
        currentTabIndex = index;
        updateButtons();
    });
});

// Initial button state
updateButtons();
