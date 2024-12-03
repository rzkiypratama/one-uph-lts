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

// Dapatkan semua tab yang ada
const tabs = Array.from(document.querySelectorAll("#myTab button"));
let currentTabIndex = 0;

// Ambil elemen tombol Back dan Next
const backButton = document.getElementById("backButton");
const nextButton = document.querySelector(".danger-button");

// Fungsi untuk mendapatkan tab yang terlihat
function getVisibleTabs() {
    return tabs
        .filter((tab) => !tab.hidden && tab.offsetParent !== null) // Filter hanya tab terlihat
        .map((tab) => tab.id);
}

// Fungsi untuk mengupdate tombol Back dan Next
function updateButtons() {
    const visibleTabs = getVisibleTabs();

    // Update tombol Back
    backButton.innerText = currentTabIndex === 0 ? "Back" : "Previous";

    // Update tombol Next
    nextButton.innerText =
        currentTabIndex === visibleTabs.length - 1
            ? "Save Data & Continue"
            : "Continue";
}

// Event listener untuk tombol Back
backButton.addEventListener("click", function () {
    const visibleTabs = getVisibleTabs();

    if (currentTabIndex > 0) {
        currentTabIndex--; // Pindah ke tab sebelumnya
        const previousTab = new bootstrap.Tab(
            document.getElementById(visibleTabs[currentTabIndex])
        );
        previousTab.show();
        updateButtons();
    } else {
        // Redirect jika di tab pertama
        window.location.href = "/tuition-fee/tuitionpayment";
    }
});

// Event listener untuk tombol Next
nextButton.addEventListener("click", function (event) {
    event.preventDefault(); // Cegah aksi default tombol jika tombol berada di form
    const visibleTabs = getVisibleTabs();

    if (currentTabIndex < visibleTabs.length - 1) {
        currentTabIndex++; // Pindah ke tab berikutnya
        const nextTab = new bootstrap.Tab(
            document.getElementById(visibleTabs[currentTabIndex])
        );
        nextTab.show();
        updateButtons();
    } else {
        // Submit form jika di tab terakhir
        document.getElementById("myForm").submit();
        window.location.href = "/tuition-fee/administration-documents";
    }
});

// Event listener untuk klik langsung pada tab
tabs.forEach((tab, index) => {
    tab.addEventListener("click", function () {
        const visibleTabs = getVisibleTabs();
        const visibleIndex = visibleTabs.indexOf(tab.id);

        if (visibleIndex !== -1) {
            currentTabIndex = visibleIndex; // Update indeks tab saat ini
            updateButtons();
        }
    });
});

// Perubahan visibilitas tab
function handleTabVisibilityChange() {
    const visibleTabs = getVisibleTabs();

    // Pastikan currentTabIndex tetap valid
    if (currentTabIndex >= visibleTabs.length) {
        currentTabIndex = visibleTabs.length - 1;
    }

    updateButtons();
}

// Observer untuk perubahan visibilitas tab
const observer = new MutationObserver(handleTabVisibilityChange);
tabs.forEach((tab) => {
    observer.observe(tab, {
        attributes: true,
        attributeFilter: ["style", "class"],
    });
});

// Inisialisasi awal
updateButtons();
