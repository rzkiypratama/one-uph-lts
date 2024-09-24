document.addEventListener('DOMContentLoaded', function () {
    const aliveRadio = document.getElementById('aliveMother');
    const deceasedRadio = document.getElementById('deceasedMother');
    const deceasedInput = document.getElementById('deceasedInputHide');

    // Function to toggle visibility based on status
    function togglePhoneNumberVisibility() {
        if (deceasedRadio.checked) {
            deceasedInput.classList.add('hidden');
        } else {
            deceasedInput.classList.remove('hidden');
        }
    }

    // Event listeners for radio buttons
    aliveRadio.addEventListener('change', togglePhoneNumberVisibility);
    deceasedRadio.addEventListener('change', togglePhoneNumberVisibility);

    // Initialize the visibility based on the default selection
    togglePhoneNumberVisibility();
});

document.addEventListener('DOMContentLoaded', function () {
    const aliveFatherRadio = document.getElementById('aliveFather');
    const deceasedFatherRadio = document.getElementById('deceasedFather');
    const deceasedFatherInput = document.getElementById('deceasedFatherInputHide');

    // Function to toggle visibility based on status
    function togglePhoneNumberVisibility() {
        if (deceasedFatherRadio.checked) {
            deceasedFatherInput.classList.add('hidden');
        } else {
            deceasedFatherInput.classList.remove('hidden');
        }
    }

    // Event listeners for radio buttons
    aliveFatherRadio.addEventListener('change', togglePhoneNumberVisibility);
    deceasedFatherRadio.addEventListener('change', togglePhoneNumberVisibility);

    // Initialize the visibility based on the default selection
    togglePhoneNumberVisibility();
});

const tabs = ['tab1-tab', 'tab2-tab']; // Daftar ID tabs
let currentTabIndex = 0;

const backButton = document.getElementById('backButton');
const nextButton = document.querySelector('.danger-button');

// Event listener untuk tombol Back
backButton.addEventListener('click', function () {
    if (currentTabIndex > 0) {
        currentTabIndex--;
        const previousTab = new bootstrap.Tab(document.getElementById(tabs[currentTabIndex]));
        previousTab.show();
        updateButtons();
    } else {
        // Jika di tab pertama, kembali ke halaman sebelumnya
        window.location.href = '/dashboard/intakeyear.html';
    }
});

// Event listener untuk tombol Next (Continue/Submit)
document.getElementById('myForm').addEventListener('submit', function (event) {
    event.preventDefault();

    if (currentTabIndex < tabs.length - 1) {
        currentTabIndex++;
        const nextTab = new bootstrap.Tab(document.getElementById(tabs[currentTabIndex]));
        nextTab.show();
        updateButtons();
    } else {
        // jika perlu alert bisa digunakan
        alert('Form submitted!');
        // Logika submit form
        window.location.href = '/dashboard/educationbackground.html';
    }
});

// Initial button state
updateButtons();