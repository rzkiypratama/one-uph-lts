function checkEcodeValidity() {
    const isValidEcode = localStorage.getItem('ecodeValid'); // Check e-code status from localStorage

    const proceedToPaymentBtn = document.getElementById('proceedToPaymentBtn');
    const verifyApplicationBtn = document.getElementById('verifyApplicationBtn');

    if (isValidEcode === 'true') {
        // Show "Verify Application" button and hide "Proceed to Payment"
        verifyApplicationBtn.style.display = 'block';
        proceedToPaymentBtn.style.display = 'none';
    } else {
        // Show "Proceed to Payment" button and hide "Verify Application"
        verifyApplicationBtn.style.display = 'none';
        proceedToPaymentBtn.style.display = 'block';
    }
}

// Call the function to check e-code validity on page load
checkEcodeValidity();