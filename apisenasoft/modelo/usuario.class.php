<?php
require_once "conexion/conexion.php";
require_once "respuestas.class.php";


class usuario extends conexion {

    private $table = "usuario";
    private $idUsuario = 0;
    private $tipoDocumento = "";
    private $documento = "";
    private $nombres = "";
    private $apellidos = "";
    private $telefono = "";
    private $correo = "";
    private $ciudad = "";
    private $direccion = "";
    private $ocupacion = "";
    private $rol = "Usuario";
    private $estado = "Activo";
    private $token = "";
//912bc00f049ac8464472020c5cd06759

    public function listaUsuarios($pagina = 1){
        $inicio  = 0 ;
        $cantidad = 100;
        if($pagina > 1){
            $inicio = ($cantidad * ($pagina - 1)) +1 ;
            $cantidad = $cantidad * $pagina;
        }
        $query = "SELECT idUsuario, Usuario FROM " . $this->table . " limit $inicio,$cantidad";
        $datos = parent::obtenerDatos($query);
        return ($datos);
    }

    public function obtenerUsuarios($id){
        $query = "SELECT * FROM " . $this->table . " WHERE idUsuario = '$idUsuario'";
        return parent::obtenerDatos($query);

    }

    public function login($json){
    
        $_respustas = new respuestas;//Se guardan las propiedades y metodos definidos en la clase respuestas.
        $datos = json_decode($json,true); //Decodifica la información.
        if(!isset($datos['texto1']) || !isset($datos["texto2"])){ // Se verifica si las variables estan vacias.
            return $_respustas->error_400();//Si las variables se encuentran vacias devuelve el error 400.
        }else{
            $usuario = $datos["texto1"]; //Se guarda la información de las claves para ser guardadas en las variables.
            $password = $datos["texto2"];
            // $password = parent::encriptar($password);
            $datos = $this->obtenerDatosUsuario($usuario); //Se llama esta función para obtener los datos de la base de datos.
            if($datos){//Si se encuentran los datos se pasa a verificar si la contraseña proporcionada por el usuario es correcta
                    if($password == $datos[0]["contrasena"]){
                          $verRol = $datos[0]["rol"];
                          $esta = $datos[0]["estado"]; //Si la contraseña es correcta se guarda el estado en la variable $esta.
                            if($esta == "Activo"){ //Si el estado es activo.
                                //crear el token
                                if($verRol == "Usuario"){
                                    header('Location: ../../senasoft/vista/menuUsuario.php');//Si el estado es activo redirecciona al usuario a la pagina principal.
                                    exit();
                                }else if($verRol == "Admin"){
                                    header('Location: ../../senasoft/vista/menuAdmin.php');//Si el estado es activo redirecciona al usuario a la pagina principal.
                                    exit();
                                }else{
                                    echo "Se ha ingresado un rol inadecuado";
                                }
                               // $verificar  = $this->insertarToken($datos[0]['UsuarioId']);
                                //if($verificar){
                                        // si se guardo
                                        // $result = $_respustas->response;
                                        //$result["result"] = array(
                                          //  "token" => $verificar
                                        //);
                                        // header("Location: ../../../camilo/vista/paginaprincipal/index.php");//Si el estado es activo redirecciona al usuario a la pagina principal.
                                        // exit();
                                        // return $result;
                                //}//else{
                                        //error al guardar
                                  //      return $_respustas->error_500("Error interno, No hemos podido guardar");
                               // }
                            }else{
                                //el usuario esta inactivo
                                return $_respustas->error_200("El usuario esta inactivo");
                                // return "El usuario esta inactivo";

                           }
                    }else{
                        //la contraseña no es igual
                       return $_respustas->error_200("El password es invalido");
                    // return "La contrasena es incorrecta";

                    }
            }else{
                //no existe el usuario
                return $_respustas->error_200("El usuario $usuario  no existe $datos ");
                // return "El usuario no existe";
            }
        }
    }

    private function obtenerDatosUsuario($correo){ //Se realiza la consulta del correo, contraseña y estado en la base de datos.
        $query = "SELECT correo, contrasena, rol, estado FROM usuario WHERE correo = '$correo'";
        $datos = parent::obtenerDatos($query); // Hace referencia a la función obtenerDatos de la clase padre (conexion.php)
        if(!isset($datos[0]["idUsuario"])){//Si se encuentran los datos se devolveran estos mismos.
            return $datos;
        }else{
            return 0;
        }
  
    }

    public function post($json){
        $_respuestas = new respuestas;
        $datos = json_decode($json,true);

        //if(!isset($datos['token'])){
               // return $_respuestas->error_401();
        //}//else{
           // $this->token = $datos['token'];
          //  $arrayToken =   $this->buscarToken();
            //if($arrayToken){

                if(!isset($datos['texto1']) || !isset($datos['texto2'])){
                    return $_respuestas->error_400();
                }else{
                    $this->idUsuario = 0;
                    $this->Usuario = $datos['texto2']; // se trae los datos de la vista Usuario
                     $resp = $this->insertarUsuario();

                     
                    if($resp){
                        $respuesta = $_respuestas->response;
                        $respuesta["result"] = array(
                            "texto2" => $resp
                        );
                        return $respuesta;
                    }else{
                        return $_respuestas->error_500();
                    }
                }

           // }else{
              //  return $_respuestas->error_401("El Token que envio es invalido o ha caducado");
            //}
       // } cierre del sino para el token


       

    }


    private function insertarUsuario(){
        $query = "INSERT INTO " . $this->table . " (idUsuario, tipoDocumento, documento, nombres, apellidos, telefono, correo, ciudad, direccion, ocupacion, rol, estado)
        values
        ('" . $this->idUsuario . "','" . $this->tipoDocumento . "','" . $this->documento . "','" . $this->nombres . "','" . $this->apellidos . "','" . $this->telefono . "','" . $this->correo . "','" . $this->ciudad . "','" . $this->direccion . "','" . $this->ocupacion . "','" . $this->rol . "','" . $this->estado . "')"; 
        $resp = parent::nonQueryId($query);
        if($resp){
             return $resp;
        }else{
            return 0;
        }
    }
    
    public function put($json){
        $_respuestas = new respuestas;
        $datos = json_decode($json,true);

        //if(!isset($datos['token'])){
         //   return $_respuestas->error_401();
        //}//else{
           // $this->token = $datos['token'];
           // $arrayToken =   $this->buscarToken();
            //if($arrayToken){
                if(!isset($datos['texto1'])){
                    return $_respuestas->error_400();
                }else{
                    $this->pacienteid = $datos['texto1'];
                    if(isset($datos['texto2'])) { $this->Usuario = $datos['texto2']; }
                    
        
                    $resp = $this->modificarUsuario();
                    if($resp){
                        $respuesta = $_respuestas->response;
                        $respuesta["result"] = array(
                            "texto1" => $this->idUsuario
                        );
                        return $respuesta;
                    }else{
                        return $_respuestas->error_500();
                    }
                }

            //} //else{
             //   return $_respuestas->error_401("El Token que envio es invalido o ha caducado");
           // }
        //} //cierre else del token 


    }


    private function modificarUsuario(){
        $query = "UPDATE " . $this->table . " SET Usuario ='" . $this->Usuario . "'"; 
        $resp = parent::nonQuery($query);
        if($resp >= 1){
             return $resp;
        }else{
            return 0;
        }
    }


    public function delete($json){
        $_respuestas = new respuestas;
        $datos = json_decode($json,true);

        if(!isset($datos['token'])){
            return $_respuestas->error_401();
        }else{
            $this->token = $datos['token'];
            $arrayToken =   $this->buscarToken();
            if($arrayToken){

                if(!isset($datos['pacienteId'])){
                    return $_respuestas->error_400();
                }else{
                    $this->pacienteid = $datos['pacienteId'];
                    $resp = $this->eliminarPaciente();
                    if($resp){
                        $respuesta = $_respuestas->response;
                        $respuesta["result"] = array(
                            "pacienteId" => $this->pacienteid
                        );
                        return $respuesta;
                    }else{
                        return $_respuestas->error_500();
                    }
                }

            }else{
                return $_respuestas->error_401("El Token que envio es invalido o ha caducado");
            }
        }



     
    }


    private function eliminarPaciente(){
        $query = "DELETE FROM " . $this->table . " WHERE PacienteId= '" . $this->pacienteid . "'";
        $resp = parent::nonQuery($query);
        if($resp >= 1 ){
            return $resp;
        }else{
            return 0;
        }
    }


    private function buscarToken(){
        $query = "SELECT  TokenId,UsuarioId,Estado from usuarios_token WHERE Token = '" . $this->token . "' AND Estado = 'Activo'";
        $resp = parent::obtenerDatos($query);
        if($resp){
            return $resp;
        }else{
            return 0;
        }
    }


    private function actualizarToken($tokenid){
        $date = date("Y-m-d H:i");
        $query = "UPDATE usuarios_token SET Fecha = '$date' WHERE TokenId = '$tokenid' ";
        $resp = parent::nonQuery($query);
        if($resp >= 1){
            return $resp;
        }else{
            return 0;
        }
    }



}





?>