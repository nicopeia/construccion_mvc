<?php


require_once "./config/app.php";
require_once "./modelos/conexion.php";
require_once "./controladores/vistasControlador.php";








$conn = new Conexion();
$conectar = $conn->conectar();


if($conn == true){
    $plantilla = new vistasControlador();
    $plantilla->obtener_plantilla_controlador();
}else{
    echo ' no conectado';

}


?>