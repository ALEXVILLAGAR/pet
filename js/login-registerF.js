/*
 *
 * login-register modal
 * Autor: Creative Tim
 * Web-autor: creative.tim
 * Web script: http://creative-tim.com
 * 
 */
function showRegisterFormF() {
    $('.loginBox').fadeOut('fast', function() {
        $('.registerBox').fadeIn('fast');
        $('.login-footer').fadeOut('fast', function() {
            $('.register-footer').fadeIn('fast');
        });
        $('.modal-title').html('Registrate');
    });
    $('.error').removeClass('alert alert-danger').html('');
}

function showLoginFormF() {
    $('#loginModalF .registerBox').fadeOut('fast', function() {
        $('.loginBox').fadeIn('fast');
        $('.register-footer').fadeOut('fast', function() {
            $('.login-footer').fadeIn('fast');
        });
        $('.modal-title').html('Iniciar Sesión');
    });
    $('.error').removeClass('alert alert-danger').html('');
}

function openLoginModal() {
    showLoginFormF();
    setTimeout(function() {
        $('#loginModalF').modal('show');
    }, 230);
}

function openRegisterModal() {
    showRegisterFormF();
    setTimeout(function() {
        $('#loginModalF').modal('show');
    }, 230);
}

function shakeModalF() {
    $('#loginModalF .modal-dialog').addClass('shake');
    $('.error').addClass('alert alert-danger').html("Invalid email/password combination");
    $('input[type="password"]').val('');
    setTimeout(function() {
        $('#loginModalF .modal-dialog').removeClass('shake');
    }, 1000);
}