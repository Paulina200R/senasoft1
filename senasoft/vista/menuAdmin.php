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
                <a class="create" href="">Registrar</a>
                <a class="edit" href="">Editar</a>
                <a class="delete" href="">Eliminar</a>
            </div>
        </div>
        <div class="opciones">
            <div class="icon"><img src="img/categoria.png" alt=""></div>
            <p>Categorías</p>
            <div class="botones"><br>
                <a class="create" href="">Registrar</a>
                <a class="edit" href="">Editar</a>
                <a class="delete" href="">Eliminar</a>
            </div>
        </div>
        <div class="opciones">
            <div class="icon"><img src="img/apoyo-tecnico.png" alt=""></div>
            <p>Servicios</p>
            <div class="botones"><br>
                <a class="create" href="">Registrar</a>
                <a class="edit" href="">Editar</a>
                <a class="delete" href="">Eliminar</a>
            </div>
        </div>
        <div class="opciones">
            <div class="icon"><img src="img/usuario.png" alt=""></div>
            <p>Usuarios</p>
            <div class="botones"><br>
                <a class="create" href="">Registrar</a>
                <a class="edit" href="">Editar</a>
                <a class="delete" href="">Eliminar</a>
            </div>
        </div>
        <div class="opciones">
            <div class="icon"><img src="img/manzana.png" alt=""></div>
            <p>Manzanas</p>
            <div class="botones"><br>
                <a class="create" href="">Registrar</a>
                <a class="edit" href="">Editar</a>
                <a class="delete" href="">Eliminar</a>
            </div>
        </div>
        <div class="opciones">
            <div class="icon"><img src="img/mapa.png" alt=""></div>
            <p>Establecimientos</p>
            <div class="botones"><br>
                <a class="create" href="">Registrar</a>
                <a class="edit" href="">Editar</a>
                <a class="delete" href="">Eliminar</a>
            </div>
        </div>
        <!-- Registro municipio -->
    <div class="create-mun">
        <form class="form-create" action="" method="post">
            <h1>Registrar</h1>
            <input class="nombre" type="text" name="nombreMunicipio" placeholder="Ingrese el nombre del Municipio"><br>
            <br><input class="btn-create" type="submit" value="Registrar">
        </form>
    </div>
    <!-- Busqueda para editar municipio -->
    <div class="edit-mun">
        <form class="form-edit" action="" method="put">
            <h1>Editar</h1>
            <input class="nombre" type="text" name="nombreMunicipio" placeholder="Ingrese el nombre del Municipio"><br>
            <br><input class="btn-edit" type="submit" value="Buscar">
        </form>
    </div>
    <!-- Editar municipio -->
    <div class="edit2-mun">
        <form class="form-edit" action="" method="put">
            <h1>Editar</h1>
            <input class="nombre" type="text" name="nombreMunicipio" placeholder="Ingrese el nuevo nombre del Municipio"><br>
            <br><input class="btn-edit" type="submit" value="Guardar">
        </form>
    </div>
    <!-- Eliminar municipio -->
    <div class="delete-mun">
        <form class="form-delete" action="" method="put">
            <h1>Eliminar</h1>
            <input class="nombre" type="text" name="nombreMunicipio" placeholder="Ingrese el nombre del Municipio"><br>
            <br><input class="btn-delete" type="submit" value="Eliminar">
        </form>
    </div>

    <!-- Registro servicio -->
    <div class="create-ser">
        <form class="form-create" action="" method="post">
            <h1>Registrar</h1>
            <input class="nombre" type="text" name="nombreServicio" placeholder="Ingrese el nombre del Servicio"><br>
            <br><input class="btn-create" type="submit" value="Registrar">
        </form>
    </div>
    <!-- Busqueda para editar servicio -->
    <div class="edit-ser">
        <form class="form-edit" action="" method="put">
            <h1>Editar</h1>
            <input class="nombre" type="text" name="nombreServicio" placeholder="Ingrese el nombre del Servicio"><br>
            <br><input class="btn-edit" type="submit" value="Buscar">
        </form>
    </div>
    <!-- Editar servicio -->
    <div class="edit2-ser">
        <form class="form-edit" action="" method="put">
            <h1>Editar</h1>
            <input class="nombre" type="text" name="nombreServicio" placeholder="Ingrese el nuevo nombre del Servicio"><br>
            <br><input class="btn-edit" type="submit" value="Guardar">
        </form>
    </div>
    <!-- Eliminar servicio -->
    <div class="delete-ser">
        <form class="form-delete" action="" method="put">
            <h1>Eliminar</h1>
            <input class="nombre" type="text" name="nombreServicio" placeholder="Ingrese el nombre del Servicio"><br>
            <br><input class="btn-delete" type="submit" value="Eliminar">
        </form>
    </div>

    <!-- Registro categoria -->
    <div class="create-cat">
        <form class="form-create" action="" method="post">
            <h1>Registrar</h1>
            <input class="nombre" type="text" name="nombreCategoria" placeholder="Ingrese el nombre de la Categoría"><br>
            <br><input class="btn-create" type="submit" value="Registrar">
        </form>
    </div>
    <!-- Busqueda para editar categoria -->
    <div class="edit-cat">
        <form class="form-edit" action="" method="put">
            <h1>Editar</h1>
            <input class="nombre" type="text" name="nombreCategoria" placeholder="Ingrese el nombre de la Categoría"><br>
            <br><input class="btn-edit" type="submit" value="Buscar">
        </form>
    </div>
    <!-- Editar categoria -->
    <div class="edit2-cat">
        <form class="form-edit" action="" method="put">
            <h1>Editar</h1>
            <input class="nombre" type="text" name="nombreCategoria" placeholder="Ingrese el nuevo nombre de la Categoría"><br>
            <br><input class="btn-edit" type="submit" value="Guardar">
        </form>
    </div>
    <!-- Eliminar categoria -->
    <div class="delete-cat">
        <form class="form-delete" action="" method="put">
            <h1>Eliminar</h1>
            <input class="nombre" type="text" name="nombreCategoria" placeholder="Ingrese el nombre de la Categoría"><br>
            <br><input class="btn-delete" type="submit" value="Eliminar">
        </form>
    </div>

    <!-- Registro establecimiento -->
    <div class="create-est">
        <form class="form-create" action="" method="post">
            <h1>Registrar</h1>
            <input class="nombre" type="text" name="nombreEstablecimiento" placeholder="Ingrese el nombre del Establecimiento"><br>
            <br><input class="btn-create" type="submit" value="Registrar">
        </form>
    </div>
    <!-- Busqueda para editar establecimiento -->
    <div class="edit-est">
        <form class="form-edit" action="" method="put">
            <h1>Editar</h1>
            <input class="nombre" type="text" name="nombreEstablecimiento" placeholder="Ingrese el nombre del Establecimiento"><br>
            <br><input class="btn-edit" type="submit" value="Buscar">
        </form>
    </div>
    <!-- Editar establecimiento -->
    <div class="edit2-est">
        <form class="form-edit" action="" method="put">
            <h1>Editar</h1>
            <input class="nombre" type="text" name="nombreEstablecimiento" placeholder="Ingrese el nuevo nombre del Establecimiento"><br>
            <br><input class="btn-edit" type="submit" value="Guardar">
        </form>
    </div>
    <!-- Eliminar establecimiento -->
    <div class="delete-est">
        <form class="form-delete" action="" method="put">
            <h1>Eliminar</h1>
            <input class="nombre" type="text" name="nombreEstablecimiento" placeholder="Ingrese el nombre del Establecimiento"><br>
            <br><input class="btn-delete" type="submit" value="Eliminar">
        </form>
    </div>

    <!-- Registro manzana -->
    <div class="create-manz">
        <form class="form-create" action="" method="post">
            <h1>Registrar</h1>
            <input class="nombre" type="text" name="nombreManzana" placeholder="Ingrese el nombre de la Manzana"><br>
            <br><input class="btn-create" type="submit" value="Registrar">
        </form>
    </div>
    <!-- Busqueda para editar manzana -->
    <div class="edit-manz">
        <form class="form-edit" action="" method="put">
            <h1>Editar</h1>
            <input class="nombre" type="text" name="nombreManzana" placeholder="Ingrese el nombre de la Manzana"><br>
            <br><input class="btn-edit" type="submit" value="Buscar">
        </form>
    </div>
    <!-- Editar manzana -->
    <div class="edit2-manz">
        <form class="form-edit" action="" method="put">
            <h1>Editar</h1>
            <input class="nombre" type="text" name="nombreManzana" placeholder="Ingrese el nuevo nombre de la Manzana"><br>
            <br><input class="btn-edit" type="submit" value="Guardar">
        </form>
    </div>
    <!-- Eliminar manzana -->
    <div class="delete-manz">
        <form class="form-delete" action="" method="put">
            <h1>Eliminar</h1>
            <input class="nombre" type="text" name="nombreManzana" placeholder="Ingrese el nombre de la Manzana"><br>
            <br><input class="btn-delete" type="submit" value="Eliminar">
        </form>
    </div>
    </section>
</body>
</html>