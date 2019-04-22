<?php
/*	
	base para todas las conexiones a base de datos con modulo de seguridad cnx.php
	@author Sebastian Roa Meneses
*/
$contraseña = "";
$usuario = "root";
$nombre_base_de_datos = "ajaxtabla";
try{
	$base_de_datos = new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario, $contraseña);
	$base_de_datos->query("set names utf8;");
    $base_de_datos->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base_de_datos->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}catch(Exception $e){
	echo "Error en conexion a la base de datos: " . $e->getMessage();
}
function limpiar($textos) 
{
	$textos = htmlentities($textos);
	$nopermitidos = array("'",'\\','<','>',"\"",";","#"); 
	$texto = str_replace($nopermitidos, "", $textos);
    return $texto; 
} 
?>