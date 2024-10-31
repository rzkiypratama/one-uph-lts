document.addEventListener("DOMContentLoaded", function () {
    const nationality = localStorage.getItem("nationality");
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
    const nationality = localStorage.getItem("nationality");
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
        window.location.href = "/dashboard/educationbackground";
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

const addMoreJobBtn = document.getElementById("addMoreJobBtn");
const jobCardsContainer = document.getElementById("jobCardsContainer");

addMoreJobBtn.addEventListener("click", () => {
    // Hitung jumlah card saat ini
    const currentJobCount = jobCardsContainer.querySelectorAll(".job-card")
        .length;

    // Clone card pertama
    const newJobCard = jobCardsContainer
        .querySelector(".job-card")
        .cloneNode(true);

    // Update judul menjadi Job #n
    const jobTitle = newJobCard.querySelector(".job-title");
    jobTitle.textContent = `Job Information #${currentJobCount + 1}`;

    // Update name dan id untuk setiap radio button agar unik
    const radioYes = newJobCard.querySelector(
        'input[type="radio"][value="currentJob"]'
    );
    const radioNo = newJobCard.querySelector(
        'input[type="radio"][value="notcurrentJob"]'
    );

    // Update nama dan id radio button
    radioYes.name = `currentJobOption[${currentJobCount}]`;
    radioYes.id = `currentJob${currentJobCount + 1}`;
    radioNo.name = `currentJobOption[${currentJobCount}]`;
    radioNo.id = `notCurrentJob${currentJobCount + 1}`;

    // Update label `for` atribut
    newJobCard
        .querySelector('label[for="currentJob1"]')
        .setAttribute("for", `currentJob${currentJobCount + 1}`);
    newJobCard
        .querySelector('label[for="notCurrentJob1"]')
        .setAttribute("for", `notCurrentJob${currentJobCount + 1}`);

    // Update ID dropdown dan input country agar unik
    const countryInput = newJobCard.querySelector("#companyCountry");
    const countryDropdown = newJobCard.querySelector("#companyCountryDropdown");
    const uniqueIdSuffix = `_${currentJobCount + 1}`; // ID suffix based on card count

    // Update IDs
    countryInput.id = `companyCountry${uniqueIdSuffix}`;
    countryInput.setAttribute(
        "onfocus",
        `toggleDropdown('companyCountryDropdown${uniqueIdSuffix}')`
    );
    countryInput.setAttribute(
        "oninput",
        `filterOptions('companyCountry${uniqueIdSuffix}', 'companyCountryDropdown${uniqueIdSuffix}')`
    );

    countryDropdown.id = `companyCountryDropdown${uniqueIdSuffix}`;

    // Tambahkan tombol "Delete" hanya jika card bukan yang pertama
    if (currentJobCount > 0) {
        const deleteBtn = document.createElement("button");
        deleteBtn.textContent = "Remove";
        deleteBtn.classList.add("btn", "btn-danger", "mt-2", "mb-3");
        deleteBtn.addEventListener("click", () => {
            newJobCard.remove();
            updateJobTitles();
        });
        newJobCard.appendChild(deleteBtn);
    }

    // Kosongkan nilai input pada card baru
    newJobCard.querySelectorAll("input, select").forEach((input) => {
        if (input.type === "radio") {
            input.checked = false;
        } else {
            input.value = "";
        }
    });

    // Tambahkan card baru ke dalam container
    jobCardsContainer.appendChild(newJobCard);
});

// Fungsi untuk memperbarui judul card
function updateJobTitles() {
    const jobCards = jobCardsContainer.querySelectorAll(".job-card");
    jobCards.forEach((card, index) => {
        const jobTitle = card.querySelector(".job-title");
        jobTitle.textContent = `Job Information #${index + 1}`;
    });
}
