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

document.addEventListener("DOMContentLoaded", function () {
    // Ambil nationality dari localStorage, jika tidak ada set default 'national'
    let nationality = localStorage.getItem("nationality") || "national";

    // Menampilkan atau menyembunyikan address berdasarkan nationality
    const nationalAddress = document.getElementById("national-address");
    const internationalAddress = document.getElementById(
        "international-address"
    );

    if (nationality === "national") {
        nationalAddress.classList.add("show");
        internationalAddress.classList.add("hidden");
    } else if (nationality === "international") {
        internationalAddress.classList.add("show");
        nationalAddress.classList.add("hidden");
    }
});

// Ambil elemen tab yang terlihat di dalam #myTab
const tabs = Array.from(document.querySelectorAll("#myTab button"));
let currentTabIndex = 0;

const backButton = document.getElementById("backButton");
const nextButton = document.querySelector(".danger-button");

// Fungsi untuk mendapatkan daftar tab yang terlihat
function getVisibleTabs() {
    return tabs
        .filter((tab) => !tab.hidden && tab.offsetParent !== null) // Filter tab terlihat
        .map((tab) => tab.id);
}

// Fungsi untuk mengupdate tombol Next dan Back
function updateButtons() {
    const visibleTabs = getVisibleTabs();

    // Jika di tab pertama, tombol Back membawa ke halaman sebelumnya
    if (currentTabIndex === 0) {
        backButton.innerText = "Back";
    } else {
        backButton.innerText = "Back";
    }

    // Jika di tab terakhir, tombol Next menjadi Submit
    if (currentTabIndex === visibleTabs.length - 1) {
        nextButton.innerText = "Save Data & Continue";
    } else {
        nextButton.innerText = "Continue";
    }
}

// Event listener untuk tombol Back
backButton.addEventListener("click", function () {
    const visibleTabs = getVisibleTabs();

    if (currentTabIndex > 0) {
        currentTabIndex--;
        const previousTab = new bootstrap.Tab(
            document.getElementById(visibleTabs[currentTabIndex])
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

    const visibleTabs = getVisibleTabs();

    if (currentTabIndex < visibleTabs.length - 1) {
        currentTabIndex++;
        const nextTab = new bootstrap.Tab(
            document.getElementById(visibleTabs[currentTabIndex])
        );
        nextTab.show();
        updateButtons();
    } else {
        // Arahkan ke halaman selanjutnya setelah form disubmit
        window.location.href = "/tuition-fee/administration-documents";
    }
});

// Event listener untuk klik tab secara langsung
tabs.forEach((tab, index) => {
    tab.addEventListener("click", function () {
        const visibleTabs = getVisibleTabs();
        const visibleIndex = visibleTabs.indexOf(tab.id);

        if (visibleIndex !== -1) {
            currentTabIndex = visibleIndex;
            updateButtons();
        }
    });
});

// Event listener untuk tombol A dan B
document.getElementById("buttonA").addEventListener("click", function () {
    // Sembunyikan tab tertentu
    document.getElementById("tabToHide").hidden = true;
    currentTabIndex = Math.min(currentTabIndex, getVisibleTabs().length - 1); // Pastikan index tidak di luar batas
    updateButtons();
});

document.getElementById("buttonB").addEventListener("click", function () {
    // Tampilkan tab tertentu
    document.getElementById("tabToHide").hidden = false;
    updateButtons();
});

// Initial button state
updateButtons();
