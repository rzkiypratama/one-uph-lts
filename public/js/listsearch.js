document.addEventListener("DOMContentLoaded", function () {
    // Fungsi untuk menghandle klik pada input untuk membuka dropdown
    document.querySelectorAll(".dropdownInput").forEach((input) => {
        input.addEventListener("click", function () {
            const dropdownList = this.nextElementSibling;
            dropdownList.style.display =
                dropdownList.style.display === "none" ||
                !dropdownList.style.display
                    ? "block"
                    : "none";
        });
    });

    // Fungsi untuk mencari di dalam dropdown
    document.querySelectorAll(".searchInput").forEach((searchInput) => {
        searchInput.addEventListener("keyup", function () {
            const filter = this.value.toLowerCase();
            const dropdownList = this.closest(".dropdown").querySelector(
                ".dropdownList"
            );
            const items = dropdownList.querySelectorAll("ul li");

            let matchFound = false;

            // Loop through all items to see if any match the input
            items.forEach((item) => {
                const txtValue = item.textContent || item.innerText;
                if (txtValue.toLowerCase().indexOf(filter) > -1) {
                    item.style.display = ""; // Show matching items
                    matchFound = true;
                } else {
                    item.style.display = "none"; // Hide non-matching items
                }
            });

            // Add "Others" option if no match found
            const othersOption = dropdownList.querySelector(".others-option");
            if (!matchFound && !othersOption) {
                const othersOption = document.createElement("li");
                othersOption.textContent = "Others";
                othersOption.classList.add("others-option");
                dropdownList.querySelector("ul").appendChild(othersOption);

                othersOption.addEventListener("click", function () {
                    const mainInput = this.closest(".dropdown").querySelector(
                        ".dropdownInput"
                    );
                    mainInput.value = searchInput.value; // Set custom search value
                    dropdownList.style.display = "none"; // Close dropdown
                });
            } else if (matchFound && othersOption) {
                othersOption.remove(); // Remove "Others" option if there are matches
            }
        });
    });

    // Fungsi untuk memilih item dari dropdown
    document.querySelectorAll(".dropdownList ul li").forEach((item) => {
        item.addEventListener("click", function () {
            const mainInput = this.closest(".dropdown").querySelector(
                ".dropdownInput"
            );
            mainInput.value = this.textContent; // Set selected value
            this.closest(".dropdownList").style.display = "none"; // Close dropdown after selection
        });
    });

    // Menutup dropdown saat klik di luar
    document.addEventListener("click", function (event) {
        document.querySelectorAll(".dropdownList").forEach((list) => {
            if (
                !list.contains(event.target) &&
                !list.previousElementSibling.contains(event.target)
            ) {
                list.style.display = "none";
            }
        });
    });
});
