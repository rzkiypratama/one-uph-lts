       // Get the radio buttons and the schoolarship input container
       const regularRadio = document.getElementById('regular');
       const schoolarshipRadio = document.getElementById('schoolarshipRadio');
       const schoolarshipInput = document.getElementById('schoolarshipInput');

       // Function to toggle schoolarship input visibility
       function toggleSchoolarshipInput() {
           if (schoolarshipRadio.checked) {
               schoolarshipInput.style.display = 'block';  // Show if 'schoolarship' is selected
           } else {
               schoolarshipInput.style.display = 'none';   // Hide if 'regular' is selected
           }
       }

       // Add event listeners for both radio buttons
       regularRadio.addEventListener('change', toggleSchoolarshipInput);
       schoolarshipRadio.addEventListener('change', toggleSchoolarshipInput);

       // Run the function on page load to set the correct initial state
       toggleSchoolarshipInput();
       // Handle form submission
       document.getElementById('submitBtn').addEventListener('click', function () {
           // Prevent default form submission
           const form = document.getElementById('myForm');

           // Gather form data
           const formData = {
               entryType: document.getElementById('entryType').value,
               collegeType: document.getElementById('collegeType').value,
               facultyType: document.getElementById('facultyType').value,
               // Add other form fields here
           };

           // Log form data to console
           console.log("Form Data Submitted: ", formData);

           // Reset form after submission
           form.reset();

           // Redirect to the next page
           window.location.href = '/dashboard/reviewpayment.html';
       });

       const checkbox = document.getElementById('agreeCheckbox');
       const submitBtn = document.getElementById('submitFirstModal');

       // Enable button when checkbox is checked
       checkbox.addEventListener('change', function () {
           submitBtn.disabled = !checkbox.checked;
       });