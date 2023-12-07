
function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    var showHideBtn = document.getElementById("showHideBtn");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        showHideBtn.textContent = "Hide Password";
    } else {
        passwordInput.type = "password";
        showHideBtn.textContent = "Show Password";
    }
}
