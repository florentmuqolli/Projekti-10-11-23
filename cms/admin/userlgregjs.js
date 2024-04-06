let emailRegex= /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/;
let passwordRegex= /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('registrationForm').addEventListener('submit', function(event) {
        let emailError = document.getElementById('emailgabim');
        let emailInput = document.getElementById('email');
        let passwordInput = document.getElementById('passi');
        let passwordError = document.getElementById('passigabim');

        emailError.innerText = '';
        passwordError.innerText = '';

        if (!emailRegex.test(emailInput.value)) {
            emailError.innerText = 'Invalid email';
            event.preventDefault(); 
        }

        if (!passwordRegex.test(passwordInput.value)) {
            passwordError.innerText = 'Invalid password';
            event.preventDefault(); 
        }
    });
});
