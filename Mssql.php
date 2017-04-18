<?php

include "procesos.php";

/**
 * Clase Conexion SQL Server
 */
class Mssql{

    private $HOST = "checksoft.no-ip.info";
    private $PORT = 4133;
    private $BASE = "LaPapa_Web";
    private $PASS = "78D.5284W/f";
    private $USER = "LaPapa_Web";

    private $SERVER_NAME;


    /* ----------------------------------
    |  Conexiones PHP
    */
    public function conex_php7(){
        // Metodo PHP 7
        $this->SERVER_NAME = $this->HOST.','.$this->PORT."\CHECKSOFT";
        $conex_info = array("Database" => $this->BASE, "UID" => $this->USER, "PWD" => $this->PASS);
        $conn = sqlsrv_connect($this->SERVER_NAME, $conex_info);
        if ($conn){
            // Funciona:
            echo "Conexion establecida \n";
            return $conn;
        }else{
            echo "Conexión no se pudo establecer.\n";
            die( print_r( sqlsrv_errors(), true));
        }
    }

    /* ----------------------------------
    |  Funciones PHP 7
    */

    public function consultar_php7($conex, $query){
      if($q = sqlsrv_query($conex,$query)){
        return $q;
      }else{echo "Error en la consulta";}
    }

    public function ejecutar_php7($conn, $query){
      if($q = sqlsrv_query($conex,$query)){
        return True;
      }else{echo "Error en la consulta";}
    }

    public function lista_objetos($conn,$query){
      $objetos = array();
      $query_obj = $this->consultar_php7($conn, $query);
      while ($obj = sqlsrv_fetch_object($query_obj)) {
        array_push($objetos, $obj);
      }
      return $objetos;
    }

    public function contar_registros_php7($conex, $tabla){
      $contar = "SELECT COUNT(*) AS contador FROM ".$tabla;
      $query_num = $this->consultar_php7($conex, $contar);
      $row = sqlsrv_fetch_array($query_num);
      return $row[0];
    }

    public function crear_procesos_php7($conn){
        /* Recorrrer Procesos */
        foreach($lista_procesos as $proceso){
          /* Codigo :D */
          //if($this->ejecutar_php7($conn, $proceso){echo "Proceso Creado";}
        }
    }

}

$sql = new Mssql;
$sql->conex();

?>
