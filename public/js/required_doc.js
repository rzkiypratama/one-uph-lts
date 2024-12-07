const tabs = Array.from(document.querySelectorAll("#myTab button"))
    .filter((tab) => !tab.hidden && tab.offsetParent !== null) // Memfilter tab yang terlihat
    .map((tab) => tab.id); // Ambil id dari setiap tab yang terlihat

let currentTabIndex = 0;

const backButton = document.getElementById("backButton");
const nextButton = document.querySelector(".danger-button");

// Fungsi untuk mengupdate tombol Next dan Back
function updateButtons() {
    if (currentTabIndex === 0) {
        backButton.innerText = "Back";
    } else {
        backButton.innerText = "Back";
    }

    if (currentTabIndex === tabs.length - 1) {
        nextButton.innerText = "Save & Continue";
        nextButton.setAttribute("data-bs-target", "#requiredDocumentModal");
        nextButton.setAttribute("data-bs-toggle", "modal");
    } else {
        nextButton.innerText = "Continue";
        nextButton.removeAttribute("data-bs-target");
        nextButton.removeAttribute("data-bs-toggle");
    }
}

// Fungsi mockup untuk mensimulasikan pengiriman data ke backend
async function mockSubmitTabData(tabIndex) {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            console.log(`Mock submit data for tab ${tabIndex}:`);
            const formData = new FormData(document.getElementById("myForm")); // Ambil data form
            for (const [key, value] of formData.entries()) {
                console.log(`${key}:`, value);
            }
            resolve(); // Simulasikan bahwa pengiriman berhasil
        }, 1000); // Simulasikan delay 1 detik
    });
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
        window.location.href = "/dashboard/familybackground";
    }
});

// Event listener untuk tombol Next/Continue
nextButton.addEventListener("click", async function (event) {
    event.preventDefault(); // Mencegah refresh halaman
    if (currentTabIndex < tabs.length - 1) {
        try {
            await mockSubmitTabData(currentTabIndex); // Simulasikan pengiriman data tab saat ini
            currentTabIndex++; // Pindah ke tab berikutnya jika berhasil
            const nextTab = new bootstrap.Tab(
                document.getElementById(tabs[currentTabIndex])
            );
            nextTab.show();
            updateButtons();
        } catch (error) {
            console.error("Failed to proceed to the next tab:", error);
        }
    } else {
        // Pada tab terakhir, modal muncul
        console.log("All tabs completed. Ready for final submission.");
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
