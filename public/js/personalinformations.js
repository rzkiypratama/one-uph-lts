document.addEventListener('DOMContentLoaded', function () {
    const nationality = localStorage.getItem('nationality');
    const nationalForm = document.getElementById('national-form');
    const internationalForm = document.getElementById('international-form');

    if (nationality === 'national') {
        nationalForm.classList.add('show');
        internationalForm.classList.add('hidden');
    } else if (nationality === 'international') {
        internationalForm.classList.add('show');
        nationalForm.classList.add('hidden');
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const nationality = localStorage.getItem('nationality');
    const nationalAddress = document.getElementById('national-address');
    const internationalAddress = document.getElementById('international-address');

    if (nationality === 'national') {
        nationalAddress.classList.add('show');
        internationalAddress.classList.add('hidden');
    } else if (nationality === 'international') {
        internationalAddress.classList.add('show');
        nationalAddress.classList.add('hidden');
    }
});

const tabs = ['tab1-tab', 'tab2-tab', 'tab3-tab', 'tab4-tab']; // Daftar ID tabs
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
        // alert('Form submitted!');
        // Logika submit form
        window.location.href = '/dashboard/familybackground.html';
    }
});

// Initial button state
updateButtons();