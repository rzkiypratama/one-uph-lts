function toggleDropdown(dropdownId) {
    document.getElementById(dropdownId).classList.toggle("show");
}

function filterOptions(inputId, dropdownId) {
    const input = document.getElementById(inputId);
    const filter = input.value.toLowerCase();
    const dropdown = document.getElementById(dropdownId);
    const options = dropdown.getElementsByTagName("div");
    let hasMatch = false; // Deklarasi variabel hasMatch

    dropdown.classList.add("show");

    // Filter options
    for (let i = 0; i < options.length; i++) {
        const txtValue = options[i].textContent || options[i].innerText;
        if (txtValue.toLowerCase().indexOf(filter) > -1) {
            options[i].style.display = "";
            hasMatch = true; // Set hasMatch true jika menemukan kecocokan
        } else {
            options[i].style.display = "none";
        }
    }

    // Show 'Lainnya' if no match found
    const otherOption = document.getElementById(`${inputId}-other`);
    if (!hasMatch) {
        if (!otherOption) {
            const newOtherOption = document.createElement("div");
            newOtherOption.id = `${inputId}-other`;
            newOtherOption.textContent = "Lainnya";
            newOtherOption.style.cursor = "pointer";
            newOtherOption.onclick = () => selectOption("Lainnya", inputId);
            dropdown.appendChild(newOtherOption);
        }
    } else {
        if (otherOption) {
            otherOption.remove();
        }
    }
}

function selectOption(value, inputId) {
    // Temukan elemen input berdasarkan ID dan atur nilainya
    const input = document.getElementById(inputId);
    if (input) {
        input.value = value;
    }

    // Sembunyikan dropdown setelah memilih opsi
    const dropdown = document.getElementById(inputId + "Dropdown");
    if (dropdown) {
        dropdown.classList.remove("show");
    }
}

window.onclick = function (event) {
    if (!event.target.matches("input")) {
        document.querySelectorAll(".dropdown-content").forEach((dropdown) => {
            dropdown.classList.remove("show");
        });
    }
};
