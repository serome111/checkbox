<?php require_once "../cnx.php"; //llamamos la conexion

$consulta = $base_de_datos->query("SELECT * FROM usuario");
$usu = $consulta->fetchAll(PDO::FETCH_OBJ);
 foreach($usu as $usu){ 

 	if ($usu->estado ==1) { 
 	?>
 	<tr class="bg-danger" id="tabletr">
      <th scope="row"><?php echo $usu->usuario_id ?></th>
      <td><?php echo $usu->nombre; ?></td>
      <td><?php echo $usu->apellido; ?></td>
      <td><?php echo $usu->dinero; ?></td>
      <td><div class="btn-group" data-toggle="buttons">
      <label class="btn btn-success active" onchange="tabla('<?php echo $usu->usuario_id ?>');">
				<input type="radio" name="uno" id="<?php echo $usu->usuario_id ?>"  autocomplete="off">
				Listo
			</label>
      <label class="btn btn-danger" onchange="tabla('<?php echo $usu->usuario_id ?>');">
				<input type="radio" name="dos" id="<?php echo $usu->usuario_id ?>" autocomplete="off">
				falta
			</label>
    </div></td>
    </tr>
<?php }else{ ?>
	<tr class="bg-success">
      <th scope="row"><?php echo $usu->usuario_id ?></th>
      <td><?php echo $usu->nombre; ?></td>
      <td><?php echo $usu->apellido; ?></td>
      <td><?php echo $usu->dinero; ?></td>
      <td><div class="btn-group" data-toggle="buttons">
      <label class="btn btn-success active" onchange="tabla('<?php echo $usu->usuario_id ?>');">
				<input type="radio" name="options" id="<?php echo $usu->usuario_id ?>" autocomplete="off">
				Listo
			</label>
      
      <label class="btn btn-danger" onchange="tabla('<?php echo $usu->usuario_id ?>');">
				<input type="radio" name="options" id="<?php echo $usu->usuario_id ?>" autocomplete="off">
				falta
			</label>
    </div></td>
    </tr>

<?php } }
 ?>
    