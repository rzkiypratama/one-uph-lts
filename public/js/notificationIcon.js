// Mengambil elemen
const notificationIcon = document.getElementById("notificationIcon");
const notificationCard = document.getElementById("notificationCard");

// Menambahkan event listener untuk icon notifikasi
notificationIcon.addEventListener("click", () => {
    // Toggle class 'visible' pada card
    notificationCard.classList.toggle("visible");
});

// Menutup card jika klik di luar icon atau card
document.addEventListener("click", function (event) {
    if (
        !notificationIcon.contains(event.target) &&
        !notificationCard.contains(event.target)
    ) {
        notificationCard.classList.remove("visible");
    }
});
