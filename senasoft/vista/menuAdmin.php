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
                <a id="btn-create-mun" class="create" href="">Registrar</a>
                <a id="btn-edit-mun" class="edit" href="">Editar</a>
                <a id="btn-delete-mun" class="delete" href="">Eliminar</a>
            </div>
        </div>
        <div class="opciones">
            <div class="icon"><img src="img/categoria.png" alt=""></div>
            <p>Categorías</p>
            <div class="botones"><br>
                <a id="btn-create-cat" class="create" href="">Registrar</a>
                <a id="btn-edit-cat" class="edit" href="">Editar</a>
                <a id="btn-delete-cat" class="delete" href="">Eliminar</a>
            </div>
        </div>
        <div class="opciones">
            <div class="icon"><img src="img/apoyo-tecnico.png" alt=""></div>
            <p>Servicios</p>
            <div class="botones"><br>
                <a id="btn-create-ser" class="create" href="">Registrar</a>
                <a id="btn-edit-ser" class="edit" href="">Editar</a>
                <a id="btn-delete-ser" class="delete" href="">Eliminar</a>
            </div>
        </div>
        <div class="opciones">
            <div class="icon"><img src="img/usuario.png" alt=""></div>
            <p>Usuarios</p>
            <div class="botones"><br>
                <a id="btn-create-usuario" class="create" href="">Registrar</a>
                <a id="btn-edit-usuario" class="edit" href="">Editar</a>
                <a id="btn-delete-usuario" class="delete" href="">Eliminar</a>
            </div>
        </div>
        <div class="opciones">
            <div class="icon"><img src="img/manzana.png" alt=""></div>
            <p>Manzanas</p>
            <div class="botones"><br>
                <a id="btn-create-manz" class="create" href="">Registrar</a>
                <a id="btn-edit-manz" class="edit" href="">Editar</a>
                <a id="btn-delete-manz" class="delete" href="">Eliminar</a>
            </div>
        </div>
        <div class="opciones">
            <div class="icon"><img src="img/mapa.png" alt=""></div>
            <p>Establecimientos</p>
            <div class="botones"><br>
                <a id="btn-create-est" class="create" href="">Registrar</a>
                <a id="btn-edit-est" class="edit" href="">Editar</a>
                <a id="btn-delete-est" class="delete" href="">Eliminar</a>
            </div>
        </div>

        <!-- Registro municipio -->
    <div class="create-mun">
        <form class="form-create" action="" method="post">
            <h1>Registrar</h1>
            <input class="nombre" type="text" name="nombreMunicipio" placeholder="Ingrese el nombre del Municipio"><br>
            <br><button class="btn-create">Registrar</button>
        </form>
    </div>
    <!-- Busqueda para editar municipio -->
    <div class="edit-mun">
        <form class="form-edit" action="" method="put">
            <h1>Editar</h1>
            <input class="nombre" type="text" name="nombreMunicipio" placeholder="Ingrese el nombre del Municipio"><br>
            <br><button class="btn-edit">Buscar</button>
        </form>
    </div>
    <!-- Editar municipio -->
    <div class="edit2-mun">
        <form class="form-edit" action="" method="put">
            <h1>Editar</h1>
            <input class="nombre" type="text" name="nombreMunicipio" placeholder="Ingrese el nuevo nombre del Municipio"><br>
            <br><button id="btn-edit2-mun" class="btn-edit">Guardar</button>
        </form>
    </div>
    <!-- Eliminar municipio -->
    <div class="delete-mun">
        <form class="form-delete" action="" method="put">
            <h1>Eliminar</h1>
            <input class="nombre" type="text" name="nombreMunicipio" placeholder="Ingrese el nombre del Municipio"><br>
            <br><button class="btn-delete">Eliminar</button>
        </form>
    </div>

        <!-- Registro usuario -->
    <div class="create-usuario">
        <form class="form-create" action="" method="post">
            <h1>Registrar</h1>
            <input class="nombre" type="text" name="nombreUsuario" placeholder="Ingrese el nombre del Usuario"><br>
            <br><button class="btn-create">Registrar</button>
        </form>
    </div>
    <!-- Busqueda para editar usuario -->
    <div class="edit-usuario">
        <form class="form-edit" action="" method="put">
            <h1>Editar</h1>
            <input class="nombre" type="text" name="nombreUsuario" placeholder="Ingrese el nombre del Usuario"><br>
            <br><button class="btn-edit">Buscar</button>
        </form>
    </div>
    <!-- Editar usuario -->
    <div class="edit2-usuario">
        <form class="form-edit" action="" method="put">
            <h1>Editar</h1>
            <input class="nombre" type="text" name="nombreUsuario" placeholder="Ingrese el nuevo nombre del Usuario"><br>
            <br><button id="btn-edit2-usuario" class="btn-edit">Guardar</button>
        </form>
    </div>
    <!-- Eliminar usuario -->
    <div class="delete-usuario">
        <form class="form-delete" action="" method="put">
            <h1>Eliminar</h1>
            <input class="nombre" type="text" name="nombreUsuario" placeholder="Ingrese el nombre del Usuario"><br>
            <br><button class="btn-delete">Eliminar</button>
        </form>
    </div>

    <!-- Registro servicio -->
    <div class="create-ser">
        <form class="form-create" action="" method="post">
            <h1>Registrar</h1>
            <input class="nombre" type="text" name="nombreServicio" placeholder="Ingrese el nombre del Servicio"><br>
            <br><button class="btn-create">Registrar</button>
        </form>
    </div>
    <!-- Busqueda para editar servicio -->
    <div class="edit-ser">
        <form class="form-edit" action="" method="put">
            <h1>Editar</h1>
            <input class="nombre" type="text" name="nombreServicio" placeholder="Ingrese el nombre del Servicio"><br>
            <br><button class="btn-edit">Buscar</button>
        </form>
    </div>
    <!-- Editar servicio -->
    <div class="edit2-ser">
        <form class="form-edit" action="" method="put">
            <h1>Editar</h1>
            <input class="nombre" type="text" name="nombreServicio" placeholder="Ingrese el nuevo nombre del Servicio"><br>
            <br><button id="btn-edit2-ser" class="btn-edit">Guardar</button>
        </form>
    </div>
    <!-- Eliminar servicio -->
    <div class="delete-ser">
        <form class="form-delete" action="" method="put">
            <h1>Eliminar</h1>
            <input class="nombre" type="text" name="nombreServicio" placeholder="Ingrese el nombre del Servicio"><br>
            <br><button class="btn-delete">Eliminar</button>
        </form>
    </div>

    <!-- Registro categoria -->
    <div class="create-cat">
        <form class="form-create" action="" method="post">
            <h1>Registrar</h1>
            <input class="nombre" type="text" name="nombreCategoria" placeholder="Ingrese el nombre de la Categoría"><br>
            <br><button class="btn-create">Registrar</button>
        </form>
    </div>
    <!-- Busqueda para editar categoria -->
    <div class="edit-cat">
        <form class="form-edit" action="" method="put">
            <h1>Editar</h1>
            <input class="nombre" type="text" name="nombreCategoria" placeholder="Ingrese el nombre de la Categoría"><br>
            <br><button class="btn-edit">Buscar</button>
        </form>
    </div>
    <!-- Editar categoria -->
    <div class="edit2-cat">
        <form class="form-edit" action="" method="put">
            <h1>Editar</h1>
            <input class="nombre" type="text" name="nombreCategoria" placeholder="Ingrese el nuevo nombre de la Categoría"><br>
            <br><button id="btn-edit2-cat" class="btn-edit">Guardar</button>
        </form>
    </div>
    <!-- Eliminar categoria -->
    <div class="delete-cat">
        <form class="form-delete" action="" method="put">
            <h1>Eliminar</h1>
            <input class="nombre" type="text" name="nombreCategoria" placeholder="Ingrese el nombre de la Categoría"><br>
            <br><button class="btn-delete">Eliminar</button>
        </form>
    </div>

    <!-- Registro establecimiento -->
    <div class="create-est">
        <form class="form-create" action="" method="post">
            <h1>Registrar</h1>
            <input class="nombre" type="text" name="nombreEstablecimiento" placeholder="Ingrese el nombre del Establecimiento"><br>
            <br><button class="btn-create">Registrar</button>
        </form>
    </div>
    <!-- Busqueda para editar establecimiento -->
    <div class="edit-est">
        <form class="form-edit" action="" method="put">
            <h1>Editar</h1>
            <input class="nombre" type="text" name="nombreEstablecimiento" placeholder="Ingrese el nombre del Establecimiento"><br>
            <br><button class="btn-edit">Buscar</button>
        </form>
    </div>
    <!-- Editar establecimiento -->
    <div class="edit2-est">
        <form class="form-edit" action="" method="put">
            <h1>Editar</h1>
            <input class="nombre" type="text" name="nombreEstablecimiento" placeholder="Ingrese el nuevo nombre del Establecimiento"><br>
            <br><button id="btn-edit2-est" class="btn-edit">Guardar</button>
        </form>
    </div>
    <!-- Eliminar establecimiento -->
    <div class="delete-est">
        <form class="form-delete" action="" method="put">
            <h1>Eliminar</h1>
            <input class="nombre" type="text" name="nombreEstablecimiento" placeholder="Ingrese el nombre del Establecimiento"><br>
            <br><button class="btn-delete">Eliminar</button>
        </form>
    </div>

    <!-- Registro manzana -->
    <div class="create-manz">
        <form class="form-create" action="" method="post">
            <h1>Registrar</h1>
            <input class="nombre" type="text" name="nombreManzana" placeholder="Ingrese el nombre de la Manzana"><br>
            <br><button class="btn-create">Registrar</button>
        </form>
    </div>
    <!-- Busqueda para editar manzana -->
    <div class="edit-manz">
        <form class="form-edit" action="" method="put">
            <h1>Editar</h1>
            <input class="nombre" type="text" name="nombreManzana" placeholder="Ingrese el nombre de la Manzana"><br>
            <br><button class="btn-edit">Buscar</button>
        </form>
    </div>
    <!-- Editar manzana -->
    <div class="edit2-manz">
        <form class="form-edit" action="" method="put">
            <h1>Editar</h1>
            <input class="nombre" type="text" name="nombreManzana" placeholder="Ingrese el nuevo nombre de la Manzana"><br>
            <br><button id="btn-edit2-manz" class="btn-edit">Guardar</button>
        </form>
    </div>
    <!-- Eliminar manzana -->
    <div class="delete-manz">
        <form class="form-delete" action="" method="put">
            <h1>Eliminar</h1>
            <input class="nombre" type="text" name="nombreManzana" placeholder="Ingrese el nombre de la Manzana"><br>
            <br><button class="btn-delete">Eliminar</button>
        </form>
    </div>
    </section>
    <script src="js/funcionMenuAdmin.js"></script>
</body>
</html>