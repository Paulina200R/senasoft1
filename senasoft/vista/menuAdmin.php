<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manzana</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/styleMenuAdmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mooli&family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="barra">
        <a class="report" href="">Generar Reporte</a>
    </div>
    <section class="content">
        <div class="opciones">
            <div class="icon"><img src="img/colombia.png" alt=""></div>
            <p>Municipios</p>
            <div class="botones"><br>
            <input type="text" class="nombre" placeholder="Ingrese el nombre del municipio">    
            <br><a id="btn-create-mun" class="create" href="">Registrar</a>
                <a id="btn-edit-mun" class="edit" href="">Editar</a>
                <a id="btn-delete-mun" class="delete" href="">Eliminar</a>
            </div>
        </div>
        <div class="opciones">
            <div class="icon"><img src="img/categoria.png" alt=""></div>
            <p>Categorías</p>
            <div class="botones"><br>
            <input type="text" class="nombre" placeholder="Ingrese el nombre de la categoría">    
            <br><a id="btn-create-cat" class="create" href="">Registrar</a>
                <a id="btn-edit-cat" class="edit" href="">Editar</a>
                <a id="btn-delete-cat" class="delete" href="">Eliminar</a>
            </div>
        </div>
        <div class="opciones">
            <div class="icon"><img src="img/apoyo-tecnico.png" alt=""></div>
            <p>Servicios</p>
            <div class="botones"><br>
            <input type="text" class="nombre" placeholder="Ingrese el nombre del servicio">    
            <br><a id="btn-create-ser" class="create" href="">Registrar</a>
                <a id="btn-edit-ser" class="edit" href="">Editar</a>
                <a id="btn-delete-ser" class="delete" href="">Eliminar</a>
            </div>
        </div>
        <div class="opciones">
            <div class="icon"><img src="img/usuario.png" alt=""></div>
            <p>Usuarios</p>
            <div class="botones"><br>
            <input type="text" class="nombre" placeholder="Ingrese el nombre del usuario">    
            <br><a id="btn-create-usuario" class="create" href="">Registrar</a>
                <a id="btn-edit-usuario" class="edit" href="">Editar</a>
                <a id="btn-delete-usuario" class="delete" href="">Eliminar</a>
            </div>
        </div>
        <div class="opciones">
            <div class="icon"><img src="img/manzana.png" alt=""></div>
            <p>Manzanas</p>
            <div class="botones"><br>
            <input type="text" class="nombre" placeholder="Ingrese el nombre de la manzana">    
            <br><a id="btn-create-manz" class="create" href="">Registrar</a>
                <a id="btn-edit-manz" class="edit" href="">Editar</a>
                <a id="btn-delete-manz" class="delete" href="">Eliminar</a>
            </div>
        </div>
        <div class="opciones">
            <div class="icon"><img src="img/mapa.png" alt=""></div>
            <p>Establecimientos</p>
            <div class="botones"><br>
            <input type="text" class="nombre" placeholder="Ingrese el nombre del establecimiento">    
            <br><a id="btn-create-est" class="create" href="">Registrar</a>
                <a id="btn-edit-est" class="edit" href="">Editar</a>
                <a id="btn-delete-est" class="delete" href="">Eliminar</a>
            </div>
        </div>
    </section>
    <script src="js/funcionMenuAdmin.js"></script>
</body>
</html>