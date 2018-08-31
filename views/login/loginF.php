<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <script type="text/javascript">
        function loginAjaxF(email, clave) {
    var parametros = {"correo" : email,
    "clave": clave};
    if(parametros["correo"]!="" && parametros["clave"]!=""){
        $.ajax({
            data: parametros,
            url: 'ruta.php?variable=login_fundacion',
            type: 'post',
            success: function(response){
                if(response!=0){
                    window.location.assign("views/fundacion/userfundacion.php");
                }else{
                    shakeModalF();
                }
            },
            fail: function(response){
                shakeModalF();
            }
        });
    }else{
        shakeModalF();
    }
}

    </script>

    <div class="modal fade login" id="loginModalF" style="overflow-y: scroll;">
    <div class="modal-dialog login animated">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h2 class="modal-title text-dark px-5">
                    Iniciar Sesión
                </h2>
                <button aria-hidden="true" class="close" data-dismiss="modal" type="button" onclick="javascript:window.location.reload();">
                    ×
                </button>
            </div>
            <div class="modal-body">
                <div class="box">
                    <div class="content">
                        <div class="social">
                            <img src="img/user.jpg" style="">
                            </img>
                        </div>
                        <div class="division">
                            <div class="line.l">
                            </div>
                        </div>
                        <div class="error">
                        </div>
                        <div class="form loginBox lbF">
                            <form accept-charset="UTF-8" action="ruta.php?variable=login_fundacion" method="post">
                            <input autofocus="autofocus" class="form-control mx-auto" id="email_fundacion" name="correo" placeholder="Correo" required="" type="text">
                            </input>
                            <input autofocus="autofocus" class="form-control mx-auto" id="password_fundacion" name="clave" placeholder="clave" required="" type="password">
                            </input>
                            <div class="espacio1">
                            </div>
                            <input class="btn btn-default btn-login" onclick="loginAjaxF($('#email_fundacion').val(),$('#password_fundacion').val())" type="submit" value="Inicio Sesión">
                            </input>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="forgot login-footer lfF" id="login-footerF">
                    <span>
                        Pensando en
                        <a href="javascript: showRegisterFormF();">
                            Crear Una Cuenta
                        </a>
                        ?
                    </span>
                </div>
                <div class="forgot register-footer rfF" style="display:none">
                    <span>
                        Ya Tienes Una Cuenta?
                    </span>
                    <a href="javascript: showLoginFormF();">
                        Inicia Sesión
                    </a>
                </div>
            </div>
            <div class="box">
                <div class="content registerBox rbF" id="registerBoxF" style="display:none;">
                    <div class="form">
                        <form accept-charset="UTF-8" action="ruta.php?variable=registro_fundacion" data-remote="true" html="{:multipart=>true}" method="post">
                            <input class="form-control mx-auto" id="email" name="email" placeholder="Correo" required="" type="email">
                                <input class="form-control mx-auto" id="nombre" name="nombre" placeholder="Nombre" required="" type="text">
                                    <input class="form-control mx-auto" id="telefono" name="telefono" placeholder="Telefono" required="" type="text">
                                        <input class="form-control mx-auto" id="direccion" name="direccion" placeholder="Dirección" required="" type="text">
                                            <input class="form-control mx-auto" id="password" name="password" placeholder="Contraseña" required="" type="password">
                                                <input class="form-control mx-auto" id="password_confirmation" name="Confirma_Contraseña" placeholder="Confirmar_Contraseña" required="" type="password">
                                                    <div class="espacio1">
                                                    </div>
                                                    <input class="btn btn-default btn-register" name="commit" type="submit" value="Crea Tu Cuenta">
                                                    </input>
                                                    <div class="forgot register-footer rfF" id="register-footerF" style="display:none">
                                                        <span class="custom-checkbox">
                                                            <input id="checkbox1" name="options[]" required="" type="checkbox" value="1">
                                                                <label for="checkbox1">
                                                                    Acepta
                                                                </label>
                                                            </input>
                                                        </span>
                                                        <a data-target="#termsF" data-toggle="modal" href="#">
                                                            Terminos y Condiciones
                                                        </a>
                                                    </div>
                                                </input>
                                            </input>
                                        </input>
                                        <div class="espacio">
                                        </div>
                                    </input>
                                </input>
                            </input>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
</div>

   <?php include 'views/modal/terminosycondF.html'?>

</body>
</html>
