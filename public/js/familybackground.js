document.addEventListener("DOMContentLoaded", function () {
    const aliveRadio = document.getElementById("aliveMother");
    const deceasedRadio = document.getElementById("deceasedMother");
    const deceasedInput = document.getElementById("deceasedInputHide");

    // Function to toggle visibility based on status
    function togglePhoneNumberVisibility() {
        if (deceasedRadio.checked) {
            deceasedInput.classList.add("hidden");
        } else {
            deceasedInput.classList.remove("hidden");
        }
    }

    // Event listeners for radio buttons
    aliveRadio.addEventListener("change", togglePhoneNumberVisibility);
    deceasedRadio.addEventListener("change", togglePhoneNumberVisibility);

    // Initialize the visibility based on the default selection
    togglePhoneNumberVisibility();
});

document.addEventListener("DOMContentLoaded", function () {
    const aliveFatherRadio = document.getElementById("aliveFather");
    const deceasedFatherRadio = document.getElementById("deceasedFather");
    const deceasedFatherInput = document.getElementById(
        "deceasedFatherInputHide"
    );

    // Function to toggle visibility based on status
    function togglePhoneNumberVisibility() {
        if (deceasedFatherRadio.checked) {
            deceasedFatherInput.classList.add("hidden");
        } else {
            deceasedFatherInput.classList.remove("hidden");
        }
    }

    // Event listeners for radio buttons
    aliveFatherRadio.addEventListener("change", togglePhoneNumberVisibility);
    deceasedFatherRadio.addEventListener("change", togglePhoneNumberVisibility);

    // Initialize the visibility based on the default selection
    togglePhoneNumberVisibility();
});

const tabs = Array.from(document.querySelectorAll("#myTab button"))
    .filter((tab) => !tab.hidden && tab.offsetParent !== null) // Memfilter tab yang terlihat
    .map((tab) => tab.id); // Ambil id dari setiap tab yang terlihat

let currentTabIndex = 0;

const backButton = document.getElementById("backButton");
const nextButton = document.querySelector(".danger-button");

// Fungsi untuk mengupdate tombol Next dan Back
function updateButtons() {
    // Jika di tab pertama, tombol Back membawa ke halaman sebelumnya
    if (currentTabIndex === 0) {
        backButton.innerText = "Back";
    } else {
        backButton.innerText = "Back";
    }

    // Jika di tab terakhir, tombol Next menjadi Submit
    if (currentTabIndex === tabs.length - 1) {
        nextButton.innerText = "Save & Continue";
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
        window.location.href = "/dashboard/intakeyear";
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
