<!DOCTYPE html>
<html>
    </head>
    <body>

  <!--  verificar cuenta usuario  -->     
        <script>
    function loginAjax(email, clave) {
    var parametros = {"correo" : email,
    "clave": clave};
    if(parametros["correo"]!="" && parametros["clave"]!=""){
        $.ajax({
            data: parametros,
            url: 'ruta.php?variable=login',
            type: 'post',
            success: function(response){
                if(response!=0){
                    window.location.assign(response);
                }else{
                    shakeModal();
                }
            },
            fail: function(response){
                shakeModal();
            }
        });
    }else{
        shakeModal();
    }
}

</script>
        <div class="modal fade login" id="loginModal" >
            <div class="modal-dialog login animated" >
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h2 class="modal-title titulo text-dark px-5">
                            Iniciar Sesión
                        </h2>
                        <button aria-hidden="true" class="close" data-dismiss="modal" type="button"  onclick="javascript:window.location.reload();">
                            ×
                        </button>
                    </div>
                    <div class="modal-body" >
                        <div class="box">
                            <div class="content">
                                <div class="division">
                                    <div class="line.l">
                                    </div>
                                </div>
                                <div class="error">
                                </div>
                                <div class="form loginBox lbU" id="loginBoxU">
                                    <!-- <form accept-charset="UTF-8" action="ruta.php?variable=login" method="post"> -->
                                    <input autofocus="autofocus" class="form-control mx-auto" id="correo_login" name="correo" placeholder="Correo" required="" type="email">
                                    </input>
                                    <input autofocus="autofocus" class="form-control mx-auto" id="password_login" name="clave" placeholder="Contraseña" required="" type="password">
                                    </input>
                                    <div class="espacio1">
                                    </div>
                                    <input class="btn btn-default btn-login" onclick="loginAjax($('#correo_login').val(),$('#password_login').val())" type="submit" value="Inicio Sesión">
                                        <!-- href="user.php"  -->
                                    </input>
                                    <!-- </form> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="forgot login-footer lfU" id="login-footerU">
                            <span>
                                Pensando en
                                <a href="javascript: showRegisterForm();">
                                    Crear Una Cuenta
                                </a>
                                ?
                            </span>
                        </div>
                        <div class="forgot register-footer rfU" id="register-footerU" style="display:none;">
                            <span>
                                Ya Tienes Una Cuenta?
                            </span>
                            <a href="javascript: showLoginForm();">
                                Inicia Sesión
                            </a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="content registerBox rbU" id="registerBoxU" style="display:none;">
                            <div class="form">
                                <form accept-charset="UTF-8" action="ruta.php?variable=registrarme" data-remote="true" html="{:multipart=>true}" method="post">
                                    <!-- -->
                                    <input autofocus="autofocus" class="form-control mx-auto" id="correo" name="correo" placeholder="Correo" required="" type="email">
                                        <input autofocus="autofocus" class="form-control mx-auto" id="nombre" name="nombre" placeholder="Nombre" required="" type="text">
                                            <input autofocus="autofocus" class="form-control mx-auto" id="documento" name="documento" onkeypress="return valida(event)" placeholder="Cedula" required="" type="text">
                                                <input autofocus="autofocus" class="form-control mx-auto" id="telefono" name="telefono" onkeypress="return valida(event)" placeholder="Telefono" required="" type="text">
                                                    <input autofocus="autofocus" class="form-control mx-auto" id="direccion" name="direccion" placeholder="Dirección" required="" type="text">
                                                        <input autofocus="autofocus" class="form-control mx-auto" id="contra_registro" min="6" name="clave" placeholder="Contraseña" required="" type="password">
                                                            <input autofocus="autofocus" class="form-control mx-auto" id="confirm_contra" min="6" name="confirmar-contra" onkeypress="return igual(event)" placeholder="Confirmar_Contraseña" required="" type="password">
                                                                <span id="ContraOk">
                                                                </span>
                                                                <div class="espacio1">
                                                                </div>
                                                                <input class="btn btn-default btn-register" type="submit" value="Crea Tu Cuenta">
                                                                    <div class="forgot register-footer rfU" id="register-footerU" style="display:none">
                                                                        <span class="custom-checkbox">
                                                                            <input id="checkbox1" name="options[]" required="" type="checkbox" value="1">
                                                                                <label for="checkbox1">
                                                                                    Acepta
                                                                                </label>
                                                                            </input>
                                                                        </span>
                                                                        <a data-target="#terms" data-toggle="modal" href="#">
                                                                            Terminos y Condiciones
                                                                        </a>

                                                                    </div>
                                                                </input>
                                                            </input>
                                                        </input>
                                                    </input>
                                                    <div class="espacio">
                                                    </div>
                                                </input>
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
        <?php include 'views/modal/terminosycond.html'?>




    </body>
   
</html>
