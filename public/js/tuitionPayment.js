document.addEventListener("DOMContentLoaded", function () {
    const paymentSelect = document.getElementById("installmentTuition");
    const installmentMethod = document.getElementById("installment-method");
    const cashMethod = document.getElementById("cash-method");
    const changeButton = document.getElementById("changePaymentMethod");
    const grandTotal = document.getElementById("grandTotal");

    // Fungsi untuk mengubah tampilan metode pembayaran
    function changePaymentMethod() {
        const selectedValue = paymentSelect.value;

        // Reset tampilan
        installmentMethod.classList.add("hidden");
        cashMethod.classList.add("hidden");

        // Tampilkan metode yang sesuai
        if (selectedValue === "installment") {
            installmentMethod.classList.remove("hidden");
            grandTotal.classList.remove("hidden");
        } else if (selectedValue === "cash") {
            grandTotal.classList.remove("hidden");
            cashMethod.classList.remove("hidden");
        }
    }

    changeButton.addEventListener("click", function () {
        changePaymentMethod();
    });
});
