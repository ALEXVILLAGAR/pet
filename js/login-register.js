/*
 *
 * login-register modal
 * Autor: Creative Tim
 * Web-autor: creative.tim
 * Web script: http://creative-tim.com
 * 
 */
function showRegisterForm() {
    $('.lbU').fadeOut('fast', function() {
        $('.rbU').fadeIn('fast');
        $('.lfU').fadeOut('fast', function() {
            $('.rfU').fadeIn('fast');
        });
        $('.modal-title').html('Registrate');
    });
    $('.error').removeClass('alert alert-danger').html('');
}

function showLoginForm() {
    $('#loginModal #registerBoxU').fadeOut('fast', function() {
        $('#loginBoxU').fadeIn('fast');
        $('#register-footerU').fadeOut('fast', function() {
            $('#login-footerU').fadeIn('fast');
        });
        $('.modal-title').html('Iniciar Sesión');
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

function loginAjax() {
    /*   Remove this comments when moving to server
    $.post( "/login", function( data ) {
            if(data == 1){
                window.location.replace("/home");            
            } else {
                 shakeModal(); 
            }
        });
    */
    /*   Simulate error message from the server   */
    shakeModal();
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

function loginAjaxF() {
    /*   Remove this comments when moving to server
    $.post( "/login", function( data ) {
            if(data == 1){
                window.location.replace("/home");            
            } else {
                 shakeModal(); 
            }
        });
    */
    /*   Simulate error message from the server   */
    shakeModalF();
}

function shakeModalF() {
    $('#loginModalF .modal-dialog').addClass('shake');
    $('.error').addClass('alert alert-danger').html("Correo no valido/Contraseña Incorrecta");
    $('input[type="password"]').val('');
    setTimeout(function() {
        $('#loginModalF .modal-dialog').removeClass('shake');
    }, 1000);
}