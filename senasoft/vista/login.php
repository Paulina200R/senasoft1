<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manzana</title>
    <link rel="stylesheet" href="css/styleLogin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mooli&family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <section class="blur-content">
    <section class="content">
        <div class="pizarra">
            <div class="info">
                <h1 class="titulo">Manzanas<p class="titulo-min">del Cuidado</p>
                </h1><br>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia facilis veniam unde excepturi eos
                    omnis quis, laboriosam labore quibusdam nemo exercitationem magni eveniet consequuntur molestias
                    corrupti quae sunt totam delectus?Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor
                    incidunt, id sed obcaecati quam iste commodi delectus.?</p>
            </div>
            <div class="login-reg">
                <div class="login">
                    <form class="form-login" action="" method="post">
                        <h1>Iniciar Sesión</h1>
                        <br><input type="text" name="texto1" class="inputs in-log" id="ipt-correo" placeholder="Ingrese su correo" required><br>
                        <br><input type="password" name="texto2" class="inputs in-log" id="ipt-contra" placeholder="Ingrese su contrasena" required>
                        <a class="btn-password" href="">¿Olvidaste tu contraseña?</a><br>
                        <br><input class="btn-ing" type="submit" value="Ingresar" id="btn-ing">
                        <p class="account-login">¿Aún no tienes una cuenta?<a id="change-signUp" class="btn-signup" href="">Registrarse</a></p>
                    </form>
                </div>
                <div class="registro">
                    <form class="form-registro" action="" method="post">
                        <h1>Registrarse</h1>
                        <div class="reg1">
                            <br><input type="text" name="texto1" class="inputs in-reg" id="ipt-nom" placeholder="Ingrese sus nombres" required><br>
                            <br><input type="text" name="texto2" class="inputs in-reg" id="ipt-ape" placeholder="Ingrese sus apellidos" required><br>
                            <br><select class="sel-doc" name="texto3" id="">
                                <option class="opt-doc" value="1">Cedula de Ciudadania</option>
                                <option class="opt-doc" value="2">Registro Civil</option>
                                <option class="opt-doc" value="3">Tarjate de Identidad</option>
                            </select><br>
                            <br><input type="text" name="texto4" class="inputs in-reg" id="ipt-doc" placeholder="Ingrese su documento" required><br>
                            <br><input type="text" name="texto5" class="inputs in-reg" id="ipt-tel" placeholder="Ingrese su teléfono" required><br>
                            <br><input type="text" name="texto6" class="inputs in-reg" id= "ipt-ciu" placeholder="Ingrese su ciudad" required><br>
                        </div>
                        <div class="reg2">
                            <br><input type="text" name="texto7" class="inputs in-reg" id="ipt-dir" placeholder="Ingrese su dirección" required><br>
                            <br><input type="text" name="texto8" class="inputs in-reg" id="ipt-ocu" placeholder="Ingrese su ocupación" required><br>
                            <br><input type="text" name="texto9" class="inputs in-reg" id="ipt-correo" placeholder="Ingrese su correo" required><br>
                            <br><input type="password" name="texto10" class="inputs in-reg" id="ipt-contra" placeholder="Ingrese su contrasena" required><br>
                            <br><select class="sel-rol" name="texto11" id="">
                                <option class="opt-rol" value="Admin">Administrador</option>
                                <option class="opt-rol" value="Usuario">Usuario</option>
                            </select><br>
                            <br><input class="btn-reg" type="submit" value="Registrarse" id="btn-reg">
                        <p class="account-signup">¿Ya tienes una cuenta?<a id="change-login" class="btn-login" href="">Iniciar Sesión</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</section>
<script src="js/funcionLogin.js"></script>
</body>

</html>