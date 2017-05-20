<?php
require("../lib/page.php");
Page::header("Productos");

if(!empty($_POST))
{
	$search = trim($_POST['buscar']);
	$sql = "SELECT * FROM productos, tipo_producto, marca_producto WHERE productos.id_tipo_producto1 = tipo_producto.id_tipo_producto AND productos.id_marca_producto1 = marca_producto.id_marca_producto AND nombre_producto LIKE ? ORDER BY nombre_producto";
	$params = array("%$search%");
}
else
{
	$sql = "SELECT * FROM productos, tipo_producto, marca_producto WHERE productos.id_tipo_producto1 = tipo_producto.id_tipo_producto AND productos.id_marca_producto1 = marca_producto.id_marca_producto ORDER BY nombre_producto";
	$params = null;
}
$data = Database::getRows($sql, $params);
if($data != null)
{
?>

<form method='post'>
	<div class='row'>
		<div class='input-field col s6 m4'>
			<i class='material-icons prefix'>search</i>
			<input id='buscar' type='text' name='buscar'/>
			<label for='buscar'>Buscar</label>
		</div>
		<div class='input-field col s6 m4'>
			<button type='submit' class='btn waves-effect green'><i class='material-icons'>check_circle</i></button> 	
		</div>
		<div class='input-field col s12 m4'>
			<a href='save.php' class='btn waves-effect indigo'><i class='material-icons'>add_circle</i></a>
		</div>
	</div>
</form>
<table class='striped'>
	<thead>
		<tr>
			<th>IMAGEN</th>
			<th>NOMBRE</th>
			<th>PRECIO ($)</th>
			<th>EXISTENCIAS</th>
			<th>MARCA</th>
			<th>TIPO</th>
			<th>ESTADO</th>
			<th>ACCIÓN</th>
		</tr>
	</thead>
	<tbody>

<?php
	foreach($data as $row)
	{
		print("
			<tr class='products'>
				<td><img src='data:image/*;base64,".$row['imagen_producto']."' class='materialboxed' width='100' height='100'></td>
				<td>".$row['nombre_producto']."</td>
				<td>".$row['precio_producto']."</td>
				<td>".$row['existencia']."</td>
				<td>".$row['nombre_marca']."</td>
				<td>".$row['nombre_tipo']."</td>
				<td>
		");
		if($row['estado_producto'] == 1)
		{
			print("<i class='material-icons'>visibility</i>");
		}
		else
		{
			print("<i class='material-icons'>visibility_off</i>");
		}
		print("
				</td>
				<td>
					<a href='save.php?id=".$row['id_producto']."' class='blue-text'><i class='material-icons'>mode_edit</i></a>
					<a href='delete.php?id=".$row['id_producto']."' class='red-text'><i class='material-icons'>delete</i></a>
				</td>
			</tr>
		");
	}
	print("
		</tbody>
	</table>
	");
} //Fin de if que comprueba la existencia de registros.
else
{
	Page::showMessage(4, "No hay registros disponibles", "save.php");
}
Page::footer();
?>