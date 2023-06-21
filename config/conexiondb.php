<?php
define("DB_HOST","localhost");
define("DB_USERNAME","root");
define("DB_PASSWORD","");
define("DB_NAME","sujalito");

class ConexionDB{
    private $conn;
    function __construct(){
        $this->conn = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
        if($this->conn->connect_error){
            die("Connection failed: " . $this->conn->connect_error);
            echo "Conexion fallida";
        }
        echo "Conexion exitosa";
    }
    public function getConexion(){
        return $this->conn;
        echo "Conexion exitosa";

    }
    public function getUsuarios(){

$sql = "SELECT * FROM usuarios";

    }

    public function getUsuario($id){

$sql = "SELECT * FROM usuarios WHERE id = $id";

    }


}



?>