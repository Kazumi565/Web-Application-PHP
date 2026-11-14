async function reset_password() {
    const message = document.getElementById("parolaRecuperata");
    message.textContent = "Password reset is not available in this educational demo.";
}

function redirect_to_login_page() {
    window.open("LoginPage.php", "_self");
}
