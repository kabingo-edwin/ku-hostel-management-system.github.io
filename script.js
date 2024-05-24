// Script for handling form submission
document.addEventListener('DOMContentLoaded', function() {
    const employeeSignupForm = document.getElementById('employee-signup-form');
    const studentSignupForm = document.getElementById('student-signup-form');
    const employeeRegistrationForm = document.getElementById('employee-registration');
    const studentRegistrationForm = document.getElementById('student-registration');
    const bookingForm = document.getElementById('booking');
  
    // Employee Signup form submission
    employeeSignupForm.addEventListener('submit', function(event) {
      event.preventDefault();
      const employee_name = document.getElementById('employee-name').value;
      const employee_username = document.getElementById('employee-username').value;
      const employee_password = document.getElementById('employee-password').value;
      // Perform signup validation and registration
      // Example: You can send an AJAX request to the server
      console.log('Employee Signup form submitted');
      // Redirect to employee registration page after signup
      window.location.href = "employee_registration.html";
    });
    
    // Student signup form submission
    studentSignupForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const student_fullname = document.getElementById('student-fullname').value;
        const student_email = document.getElementById('student-email').value;
        const student_username = document.getElementById('student-username').value;
        const student_password = document.getElementById('student-password').value;
        // Perform signup validation and registration
        // Example: You can send an AJAX request to the server
        console.log('Student Signup form submitted');
        // Redirect to student registration page after signup
        window.location.href = "student_registration.html";
      });
  
    // Employee Registration form submission
    employeeRegistrationForm.addEventListener('submit', function(event) {
      event.preventDefault();
      const employee_fullname = document.getElementById('employee-fullname').value;
      const employee_email = document.getElementById('employee-email').value;
      const employee_pf_id_no = document.getElementById('employee-pf-id-no').value;
      const employee_department = document.getElementById('employee-department').value;
      const empooyee_designation = document.getElementById('employee-designation').value;
      // Perform employee registration validation and submission
      // Example: You can send an AJAX request to the server
      console.log('Employee Registration form submitted');
    });

    // Student Registration form submission
    studentRegistrationForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const student_name = document.getElementById('name').value;
        const national_id_no = document.getElementById('id').value;
        const stuednt_registration_no = document.getElementById('reg').value;
        const gender = document.getElementById('gender').value;
        const telephone_no = document.getElementById('mobile').value;
        const institution_name = document.getElementById('institution').value;
        const guardianparent_name = document.getElementById('name').value;
        const guardianparent_phone_no = document.getElementById('mobile').value;
        const residence = document.getElementById('residence').value;
        const any_disability = document.getElementById('disability').value;
        const if_yes_nature_of_diasbility = document.getElementById('description').value;
        // Perform student registration validation and submission
        // Example: You can send an AJAX request to the server
        console.log('Student Registration form submitted');
        // Redirect to booking page after signup
        window.location.href = "booking.html";
      });

      // Booking form submission
    bookingForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const check_in_date = document.getElementById('checkin_date').value;
        const check_out_date = document.getElementById('checkout_date').value;
        const room_type = document.getElementById('room-type ').value;
        // Perform booking form validation and submission
        // Example: You can send an AJAX request to the server
        console.log('Booking submitted');
      });
  });
  