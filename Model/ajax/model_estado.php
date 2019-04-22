<?php 
require_once '../cnx.php';
if (!isset($_POST['id']) || !isset($_POST['valor'])) exit();
	
$id = limpiar($_POST['id']);
$valor = limpiar($_POST['valor']);
if ($valor==0) {
	$sentencia = $base_de_datos->prepare("UPDATE usuario SET estado = 0 WHERE usuario_id = ?;");
	$resultado = $sentencia->execute([$id]);
	echo "falso";
}elseif ($valor==1) {
	$sentencia = $base_de_datos->prepare("UPDATE usuario SET estado = 1 WHERE usuario_id = ?;");
	$resultado = $sentencia->execute([$id]);
	echo "falso";
}
?>