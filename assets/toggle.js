  document.addEventListener("DOMContentLoaded", function () {
    const passwordSpan = document.getElementById("password");
    const passwordToggle = document.getElementById("passwordToggle");
    const originalPassword = passwordSpan.textContent; // Get the actual password from the span

    // hide the actual password by defualt
    passwordSpan.textContent = "****";

    // Function to toggle between showing and hiding the password
    function togglePasswordVisibility() {
      if (passwordSpan.textContent === "****") {
        // If currently hidden, show the actual password
        passwordSpan.textContent = originalPassword;
        passwordToggle.textContent = "Hide";
      } else {
        // If currently shown, hide the actual password
        passwordSpan.textContent = "****";
        passwordToggle.textContent = "Show";
      }
    }

    // Add click event listener to the toggle button
    passwordToggle.addEventListener("click", togglePasswordVisibility);
  });
