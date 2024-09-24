// Handle form submission
document.getElementById('myForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent default form submission

    // Gather form data
    const formData = {
        intakeYear: document.getElementById('intakeYear').value,
        campus: document.getElementById('campus').value,
        studyCategory: document.getElementById('studyCategory').value,
    };

    // Log form data to console
    console.log("Form Data Submitted: ", formData);

    // Reset form after submission
    this.reset();

    // Redirect to the next page
    window.location.href = '/dashboard/personalinformations.html';
});