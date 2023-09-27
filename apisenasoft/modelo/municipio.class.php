<?php
require_once "conexion/conexion.php";
require_once "respuestas.class.php";


class municipio extends conexion   
{

    private $table = "municipio";
    private $idMunicipio = 0;
    private $nombreMunicipio = "";
    private $cantManzanas = "";
    
    //912bc00f049ac8464472020c5cd06759

    //FUNCIONES AGENDAMIENTO

    public function listaMunicipio($pagina = 1){
        $inicio  = 0 ;
        $cantidad = 100;
        if($pagina > 1){
            $inicio = ($cantidad * ($pagina - 1)) +1 ;
            $cantidad = $cantidad * $pagina;
        }
        $query = "SELECT idMunicipio, fecha, hora FROM " . $this->table . " limit $inicio,$cantidad";
        $datos = parent::obtenerDatos($query);
        return ($datos);
    }

    public function obtenerMunicipio($id){
        $query = "SELECT * FROM " . $this->table . " WHERE idMunicipio = '$idMunicipio'";
        return parent::obtenerDatos($query);

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

                if(!isset($datos['nombreMunicipio']) || !isset($datos["cantManzanas"])  ){
                    return $_respuestas->error_400();
                }else{
                    $this->nombreMunicipio = $datos['nombreMunicipio']; 
                    $this->cantManzanas = $datos['cantManzanas']; 
                  
                  

                     $resp = $this->insertarMunicipio();

                     
                    if($resp){
                        $respuesta = $_respuestas->response;
                        $respuesta["result"] = array(
                            "idMunicipio" => $resp
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


    private function insertaMunicipio(){
        $query = "INSERT INTO " . $this->table . " (idMunicipio, nombreMunicipio, cantManzanas)
        values
        ('" . $this->idMunicipio . "','" . $this->nombreMunicipio . "','" . $this->cantManzanas . "')"; 
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
            if(!isset($datos['idMunicipio'])){
                return $_respuestas->error_400();
            }else{
                $this->idMunicipio = $datos['idMunicipio'];
                if(isset($datos['nombreMunicipio'])) { 
                    $this->nombreMunicipio = $datos['nombreMunicipio']; 
                }
                if(isset($datos['cantManzanas'])) { 
                    $this->cantManzanas = $datos['cantManzanas']; 
                }
                
    
                $resp = $this->modificarMunicicpio();
                if($resp){
                    $respuesta = $_respuestas->response;
                    $respuesta["result"] = array(
                        "idMunicipio" => $this->idMunicicpio);
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


private function modificarMunicipio(){
    $query = "UPDATE " . $this->table . " SET idMunicipio ='" . $this->idMunicipio . "'"; 
    $resp = parent::nonQuery($query);
    if($resp >= 1){
         return $resp;
    }else{
        return 0;
    }
}

}

