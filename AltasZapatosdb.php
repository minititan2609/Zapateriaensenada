<?php
$precioZapatos = $_POST['precioZapatos'];
$modeloZapatos = $_POST['modeloZapatos'];
$colorZapatos = $_POST['colorZapatos'];
$tallasZapatos = $_POST['tallasZapatos'];

$imagenZapatosNombre = $_FILES['imagenZapatos']['name'];
$imagenZapatos = $_FILES['imagenZapatos']['tmp_name'];

$ruta="img/hombre";

$ruta = $ruta."/".$imagenZapatosNombre;

move_uploaded_file($imagenZapatos,$ruta);

require 'db.php';
$mysql = new mysqli(SERVER,USUARIO,PASWD,BD);
if ($mysql->connect_error){
    die("No me pude conectar; error: ".$mysql->connect_errno. "interpretacion: ".$mysql->connect_error);
}
$mysql->set_charset("utf8");

$insertar = "INSERT INTO altazapatos VALUES(Id_Zapatos,'$precioZapatos','$modeloZapatos','$colorZapatos','$tallasZapatos','$ruta')";
$resultado = $mysql->query($insertar);

if($resultado){
    echo "<script> alert('Se guardo correctamente'); location.href='AltaZapatos.php';</script>";
}
else{
    echo "<script> alert('No se guardo correctamente'); location.href='AltaZapatos.php'; </script>";

}