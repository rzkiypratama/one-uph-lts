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
        window.location.href = "/dashboard/personalinformations";
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
        window.location.href = "/dashboard/entryoption";
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

// university add card function
const addMoreUniversityBtn = document.getElementById("addMoreUniversityBtn");
const universityCardsContainer = document.getElementById(
    "universityCardsContainer"
);

addMoreUniversityBtn.addEventListener("click", () => {
    // Hitung jumlah card saat ini
    const currentUniversityCount = universityCardsContainer.querySelectorAll(
        ".university-card"
    ).length;

    // Clone card pertama
    const newUniversityCard = universityCardsContainer
        .querySelector(".university-card")
        .cloneNode(true);

    // Update judul menjadi University #n
    const universityTitle = newUniversityCard.querySelector(
        ".university-title"
    );
    universityTitle.textContent = `University #${currentUniversityCount + 1}`;

    // Update ID dan nama elemen yang perlu unik
    const uniqueIdSuffix = `_${currentUniversityCount + 1}`;
    newUniversityCard.querySelectorAll("input, select").forEach((input) => {
        if (input.id) input.id += uniqueIdSuffix;
        if (input.name) input.name += uniqueIdSuffix;
    });

    // Kosongkan nilai input pada card baru
    newUniversityCard.querySelectorAll("input").forEach((input) => {
        input.value = "";
    });

    // Tambahkan tombol "Remove" hanya jika card bukan yang pertama
    if (currentUniversityCount > 0) {
        const deleteBtn = document.createElement("button");
        deleteBtn.textContent = "Remove";
        deleteBtn.classList.add("btn", "btn-danger", "mt-2");
        deleteBtn.addEventListener("click", () => {
            newUniversityCard.remove();
            updateUniversityTitles();
        });
        newUniversityCard.appendChild(deleteBtn);
    }

    // Tambahkan card baru ke dalam container
    universityCardsContainer.appendChild(newUniversityCard);
});

// Fungsi untuk memperbarui judul card
function updateUniversityTitles() {
    const universityCards = universityCardsContainer.querySelectorAll(
        ".university-card"
    );
    universityCards.forEach((card, index) => {
        const universityTitle = card.querySelector(".university-title");
        universityTitle.textContent = `University #${index + 1}`;
    });
}
