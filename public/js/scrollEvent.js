const programGrid = document.getElementById("programGrid");
const scrollDownButton = document.getElementById("scrollDownButton");

// Variabel untuk melacak posisi scroll
let scrollStep = 0;

// Fungsi untuk memperbarui scrollStep berdasarkan posisi scroll saat ini
function updateScrollStep() {
    const cardHeight = programGrid.firstElementChild.offsetHeight + 16; // Tinggi card + gap
    const containerHeight = programGrid.offsetHeight;

    // Hitung langkah berdasarkan posisi scroll saat ini
    scrollStep = Math.floor(programGrid.scrollTop / containerHeight);
}

// Event listener untuk mendeteksi scroll manual menggunakan trackpad atau mouse wheel
programGrid.addEventListener("scroll", () => {
    updateScrollStep(); // Sinkronkan scrollStep dengan posisi scroll manual
});

// Event listener untuk tombol Scroll Down
scrollDownButton.addEventListener("click", () => {
    const cardHeight = programGrid.firstElementChild.offsetHeight + 16; // Tinggi card + gap
    const visibleItems = 9; // Jumlah item yang terlihat
    const totalItems = programGrid.children.length; // Total item dalam grid
    const containerHeight = programGrid.offsetHeight;

    // Hitung total langkah scroll
    const maxSteps = Math.ceil(totalItems / visibleItems);

    // Naikkan langkah scroll
    scrollStep = Math.min(scrollStep + 1, maxSteps);

    // Scroll ke posisi yang diinginkan
    const scrollPosition = Math.min(
        scrollStep * containerHeight,
        cardHeight * totalItems - containerHeight
    );
    programGrid.scrollTo({
        top: scrollPosition,
        behavior: "smooth",
    });
});
