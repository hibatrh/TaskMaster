$(document).ready(function() {
    $('#loginForm, #signupForm').on('submit', function(event) {
        event.preventDefault();
        
        var isValid = true;
        var email = $(this).find('input[type="email"]').val();
        var password = $(this).find('input[type="password"]').val();

        if (!email || !validateEmail(email)) {
            $(this).find('input[type="email"]').addClass('is-invalid');
            isValid = false;
        } else {
            $(this).find('input[type="email"]').removeClass('is-invalid');
        }

        if (!password) {
            $(this).find('input[type="password"]').addClass('is-invalid');
            isValid = false;
        } else {
            $(this).find('input[type="password"]').removeClass('is-invalid');
        }

        if (isValid) {
            this.submit();
        }
    });

    function validateEmail(email) {
        var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(String(email).toLowerCase());
    }
});
