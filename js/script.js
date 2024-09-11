


//  login code password hide or show

document.getElementById('hide').addEventListener('click', function() {
    var profileDetails = document.getElementById('profileSection');
    if (profileDetails.style.display === 'block') {
        profileDetails.style.display = 'none';
    
    } else {
        profileDetails.style.display = 'block';

    }
});

document.getElementById('profile').addEventListener('click', function() {
    var profileDetails = document.getElementById('profileSection');
    if (profileDetails.style.display === 'none') {
        profileDetails.style.display = 'block';
    
    } else {
        profileDetails.style.display = 'none';

    }
});
function Passwordshow() {
    let passwordInput = document.getElementById('password');
    let toggleIcon = document.getElementById('toggleIcon');

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleIcon.classList.remove('fa-eye');
        toggleIcon.classList.add('fa-eye-slash');
    } else {
        passwordInput.type = 'password';
        toggleIcon.classList.remove('fa-eye-slash');
        toggleIcon.classList.add('fa-eye');
    }
}
// end login code password hide or show


