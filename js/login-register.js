/*
 *
 * login-register modal
 * Autor: Creative Tim
 * Web-autor: creative.tim
 * Web script: http://creative-tim.com
 * 
 */
$(function() {
    // codes works on all bootstrap modal windows in application
    // when the modal is closed
    $('#modal-container').on('hidden.bs.modal', function() {
        // remove the bs.modal data attribute from it
        $(this).removeData('bs.modal');
        // and empty the modal-content element
        $('#modal-container .modal-content').empty();
    });
});

function showRegisterForm() {
    $('.lbU').fadeOut('fast', function() {
        $('.rbU').fadeIn('fast');
        $('.lfU').fadeOut('fast', function() {
            $('.rfU').fadeIn('fast');
        });
        $('.titulo').html('Registrate');
    });
    $('.error').removeClass('alert alert-danger').html('');
}

function showLoginForm() {
    $('#loginModal #registerBoxU').fadeOut('fast', function() {
        $('#loginBoxU').fadeIn('fast');
        $('#register-footerU').fadeOut('fast', function() {
            $('#login-footerU').fadeIn('fast');
        });
        $('.titulo').html('Iniciar Sesión');
    });
    $('.error').removeClass('alert alert-danger').html('');
}

function openLoginModal() {
    showLoginForm();
    setTimeout(function() {
        $('#loginModal').modal('show');
    }, 230);
}

function openRegisterModal() {
    showRegisterForm();
    setTimeout(function() {
        $('#loginModal').modal('show');
    }, 230);
}

function shakeModal() {
    $('#loginModal .modal-dialog').addClass('shake');
    $('.error').addClass('alert alert-danger').html("Correo Invalido/Contraseña Incorrecta");
    $('input[type="password"]').val('');
    setTimeout(function() {
        $('#loginModal .modal-dialog').removeClass('shake');
    }, 1000);
}

function showRegisterFormF() {
    $('.lbF').fadeOut('fast', function() {
        $('.rbF').fadeIn('fast');
        $('.lfF').fadeOut('fast', function() {
            $('.rfF').fadeIn('fast');
        });
        $('.titulo').html('Registrate');
    });
    $('.error').removeClass('alert alert-danger').html('');
}

function showLoginFormF() {
    $('#loginModalF #registerBoxF').fadeOut('fast', function() {
        $('#loginBoxF').fadeIn('fast');
        $('#register-footerF').fadeOut('fast', function() {
            $('#login-footerF').fadeIn('fast');
        });
        $('.modal-title').html('Iniciar Sesión');
    });
    $('.error').removeClass('alert alert-danger').html('');
}

function openLoginModalF() {
    showLoginFormF();
    setTimeout(function() {
        $('#loginModalF').modal('show');
    }, 230);
}

function openRegisterModalF() {
    showRegisterFormF();
    setTimeout(function() {
        $('#loginModalF').modal('show');
    }, 230);
}

function shakeModalF() {
    $('#loginModalF .modal-dialog').addClass('shake');
    $('.error').addClass('alert alert-danger').html("Correo no valido/Contraseña Incorrecta");
    $('input[type="password"]').val('');
    setTimeout(function() {
        $('#loginModalF .modal-dialog').removeClass('shake');
    }, 1000);
}