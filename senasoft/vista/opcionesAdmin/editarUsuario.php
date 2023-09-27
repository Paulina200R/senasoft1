<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manzana</title>
    <link rel="stylesheet" href="../css/styleMenuAdmin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mooli&family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">

</head>
<body class="fondo">
<div class="create-usuario cont-user">
        <form class="form-create form-user" action="" method="post">
            <h1>Editar</h1>
            <div class="reg1">
            <br><input type="text" name="texto11" class="inp-reg nombre" id="ipt-nom" placeholder="Ingrese los nombres" required><br>
            <br><input type="text" name="texto12" class="inp-reg nombre" id="ipt-ape" placeholder="Ingrese los apellidos" required><br>
            <br><input type="text" name="texto3" class="inp-reg nombre" id="ipt-doc" placeholder="Ingrese el tipo de documento" required><br>
            <br><input type="text" name="texto4" class="inp-reg nombre" id="ipt-doc" placeholder="Ingrese el documento" required><br>
            <br><input type="text" name="texto5" class="inp-reg nombre" id="ipt-tel" placeholder="Ingrese el teléfono" required><br>
            </div>
            <div class="reg2 div-edit">
            <br><input type="text" name="texto6" class="inp-reg nombre" id= "ipt-ciu" placeholder="Ingrese el ciudad" required><br>
            <br><input type="text" name="texto7" class="inp-reg nombre" id="ipt-dir" placeholder="Ingrese la dirección" required><br>
            <br><input type="text" name="texto8" class="inp-reg nombre" id="ipt-ocu" placeholder="Ingrese la ocupación" required><br>
            <br><input type="email" name="texto9" class="inp-reg nombre" id="ipt-correo" placeholder="Ingrese el correo" required><br>
            <br><input type="password" name="texto10" class="inp-reg nombre" id="ipt-contra" placeholder="Ingrese la contrasena" required><br>
            </div>
            <br><input class="btn-edit" type="submit" value="Editar" id="btn-edit">
            </div>
        </form>
    </div>
</body>
</html>