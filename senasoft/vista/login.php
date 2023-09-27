<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $correo = $_POST["texto1"];
    $contrasena = $_POST["texto2"];

    $api_url = 'http://localhost/Antioquia-CentrodelDisenoyManufacturadelCuero/apisenasoft/controlador/login.php';
    $data = array('texto1' => $correo, 'texto2' => $contrasena);

    $ch = curl_init($api_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

    $response = curl_exec($ch);
    $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // Verificar la respuesta de la API y realizar acciones en consecuencia
    if ($http_status == 200) {
        // Autenticación exitosa, redirigir o mostrar un mensaje de éxito
        echo $http_status;
        // header("Location: welcome.php");
        // exit;
    } else {
        // Autenticación fallida, mostrar un mensaje de error
        $error_message = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    }
}else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipoDocumento = $_POST["texto1"];
    $documento = $_POST["texto2"];
    $nombres = $_POST["texto3"];
    $apellidos = $_POST["texto4"];
    $telefono = $_POST["texto5"];
    $correo = $_POST["texto6"];
    $contrasena = $_POST["texto7"];
    $ciudad = $_POST["texto8"];
    $direccion = $_POST["texto9"];
    $ocupacion = $_POST["texto10"];

    $api_url = 'http://localhost/Antioquia-CentrodelDisenoyManufacturadelCuero/apisenasoft/controlador/usuario.php';
    $data = array('texto1' => $tipoDocumento, 'texto2' => $documento,'texto3' => $nombres, 'texto4' => $apellidos,'texto5' => $telefono, 'texto6' => $correo,'texto7' => $contrasena, 'texto8' => $ciudad,'texto9' => $direccion, 'texto10' => $ocupacion);

    $ch = curl_init($api_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

    $response = curl_exec($ch);
    $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // Verificar la respuesta de la API y realizar acciones en consecuencia
    if ($http_status == 200) {
        // Autenticación exitosa, redirigir o mostrar un mensaje de éxito
        echo $http_status;
        // header("Location: welcome.php");
        // exit;
    } else {
        // Autenticación fallida, mostrar un mensaje de error
        $error_message = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    }
}
?>
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
                <div id="login" class="login">
                    <form class="form-login" action="http://localhost/Antioquia-CentrodelDisenoyManufacturadelCuero/apisenasoft/controlador/login.php" method="get">
                        <h1>Iniciar Sesión</h1>
                        <br><input type="text" name="texto1" class="inputs in-log" id="ipt-correo" placeholder="Ingrese su correo" required><br>
                        <br><input type="password" name="texto2" class="inputs in-log" id="ipt-contra" placeholder="Ingrese su contrasena" required>
                        <a class="btn-password" href="">¿Olvidaste tu contraseña?</a><br>
                        <br><input class="btn-ing" type="submit" value="Ingresar" id="btn-ing">
                    </form>
                    <p class="account-login">¿Aún no tienes una cuenta?<button id="change-signUp" class="btn-signup">Registrarse</button></p>
                </div>
                <div id="registro" class="registro">
                    <form class="form-registro" action="http://localhost/Antioquia-CentrodelDisenoyManufacturadelCuero/apisenasoft/controlador/usuario.php" method="post">
                        <h1>Registrarse</h1>
                        <div class="reg1">
                            <br><input type="text" name="texto1" class="inputs in-reg" id="ipt-nom" placeholder="Ingrese sus nombres" required><br>
                            <br><input type="text" name="texto2" class="inputs in-reg" id="ipt-ape" placeholder="Ingrese sus apellidos" required><br>
                            <br><select class="sel-doc" name="texto3" id="">
                                <option class="opt-doc" value="1">Cedula de Ciudadania</option>
                                <option class="opt-doc" value="2">Tarjate de Identidad</option>
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
                            <br><input class="btn-reg" type="submit" value="Registrarse" id="btn-reg">
                        </div>
                    </form>
                    <p class="account-signup">¿Ya tienes una cuenta?<button id="change-login" class="btn-login">Iniciar Sesión</button></p>
                </div>
            </div>
        </div>
    </section>
</section>
<script src="js/funcionLogin.js"></script>
</body>

</html>