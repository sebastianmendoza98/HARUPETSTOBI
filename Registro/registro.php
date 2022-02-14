<?php 

class conexion{

    private $user = "root";
    private $pass ="";

    function conectar(){

        try{
            $pdo = new PDO('mysql:host=localhost;dbname=HARUPETSTOBI_WED',$this->user,$this->pass);
            echo "Conexion Correcta ";

        }catch(PDOException $error){
            echo "No me pude conectar" . $error->getMessage();
        }
        
    }
}

$nuevaconexion = new conexion();
$nuevaconexion ->conectar();


$nombre = $_GET['nombre'];
$tipo_doc = $_GET['tipdoc'];
$numero = $_GET['numdoc'];
$telefono = $_GET['telefono'];
$contraseña = $_GET['contraseña'];
$contraseña1 = $_GET['contraseña1'];
$observaciones= $_GET['observaciones'];

echo $nombre.' '.$tipo_doc.' '.$numero.' '.$telefono.' '.$contraseña.' '.$contraseña1.' '.$observaciones;

?>