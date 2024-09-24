const ecodeInput = document.getElementById('ecodeInput');
const submitEcodeBtn = document.getElementById('submitEcodeBtn');
const successMessage = document.getElementById('successMessage');
const errorMessage = document.getElementById('errorMessage');

ecodeInput.addEventListener('input', function () {
    let value = ecodeInput.value.replace(/-/g, ''); // Remove existing dashes
    if (value.length > 3) {
        value = value.match(/.{1,3}/g).join('-'); // Re-add dashes every 3 characters
    }
    ecodeInput.value = value;

    // Enable submit button if e-code is filled
    submitEcodeBtn.disabled = value.length !== 11;
});

submitEcodeBtn.addEventListener('click', function () {
    const ecode = ecodeInput.value.trim();

    // Check if e-code matches '000-000-000' for test unit purpose
    if (ecode === '000-000-000') {
        successMessage.style.display = 'block';
        errorMessage.style.display = 'none';

        // Hide the first modal and show the second modal
        const ecodeModal = bootstrap.Modal.getInstance(document.getElementById('ecodeModal'));
        ecodeModal.hide(); // Hide the first modal

        // Wait for the first modal to close completely
        setTimeout(() => {
            const confirmationModal = new bootstrap.Modal(document.getElementById('eCodeValidModal'));
            confirmationModal.show(); // Show the second modal
        }, 500); // Small delay to ensure smooth transition
    } else {
        successMessage.style.display = 'none';
        errorMessage.style.display = 'block';
    }
    localStorage.setItem('ecodeValid', 'true');
});