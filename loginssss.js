function toggleForms() {
    const loginForm = document.getElementById('login-form').parentElement;
    const signupForm = document.getElementsByClassName('form-container')[1];

    loginForm.classList.toggle('hidden');
    signupForm.classList.toggle('hidden');
}

function onSignIn(googleUser) {
    const profile = googleUser.getBasicProfile();
    alert('Logged in as: ' + profile.getName());
    // Here you can handle user login/signup and redirect
}