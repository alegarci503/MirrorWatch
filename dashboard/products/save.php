<?php
require("../lib/page.php");
if(empty($_GET['id'])) 
{
    Page::header("Agregar producto");
    $id = null;
    $nombre = null;
    $precio = null;
    $existencia = null;
    $marca = null;
    $tipo = null;
    $descripcion = null;
    $imagen = null;
    $estado = 1;

}
else
{
    Page::header("Modificar producto");
    $id = $_GET['id'];
    $sql = "SELECT * FROM productos WHERE id_producto = ?";
    $params = array($id);
    $data = Database::getRow($sql, $params);
    $nombre = $data['nombre_producto'];
    $precio = $data['precio_producto'];
    $existencia = $data['existencia'];
    $marca = $data['id_marca_producto1'];
    $tipo = $data['id_tipo_producto1'];
    $descripcion = $data['descripcion'];
    $imagen = $data['imagen_producto'];
    $estado = $data['estado_producto'];

}

if(!empty($_POST))
{
    $_POST = Validator::validateForm($_POST);
  	$nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $existencia  = $_POST['existencia'];
    $marca = $_POST['marca'];
    $tipo = $_POST['tipo'];
  	$descripcion = $_POST['descripcion'];
    $archivo = $_FILES['imagen'];
    $estado = $_POST['estado'];
    
    try 
    {
        if($nombre != "")
        {
            if($precio != "")
            {
                if($precio > 0)
                {
                    if($descripcion != "")
                    {
                        if($existencia != "")
                        {
                            if($existencia > 0)
                            {
                                if($marca != "")
                                {
                                    if($tipo != "")
                                    {
                            if($archivo['name'] != null)
                            {
                                $base64 = Validator::validateImage($archivo);
                                if($base64 != false)
                                {
                                    $imagen = $base64;
                                }
                                else
                                {
                                    throw new Exception("Ocurrió un problema con la imagen");
                                }
                            }
                            else
                            {
                                if($imagen == null)
                                {
                                    throw new Exception("Debe seleccionar una imagen");
                                }
                            }
                            if($id == null)
                            {
                                $sql = "INSERT INTO productos(nombre_producto, precio_producto, existencia, id_marca_producto1, id_tipo_producto1, descripcion, imagen_producto, estado_producto) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
                                $params = array($nombre, $precio, $existencia, $marca, $tipo, $descripcion, $imagen, $estado);
                            }
                            else
                            {
                                $sql = "UPDATE productos SET nombre_producto = ?, precio_producto = ?, existencia = ?, id_marca_producto1 = ?, id_tipo_producto1 = ?, descripcion = ?, imagen_producto = ?, estado_producto = ? WHERE id_producto = ?";
                                $params = array($nombre, $precio, $existencia, $marca, $tipo, $descripcion, $imagen, $estado, $id);
                            }
                            Database::executeRow($sql, $params);
                            header("location: index.php");
                                    }
                                    else
                                    {
                                        throw new Exception("Debe seleccionar un tipo");
                                    }
                            }
                            else
                            {
                               throw new Exception("Debe seleccionar una marca"); 
                            }
                        }
                        else
                        {
                             throw new Exception("Las existencias deben ser mayor a 0");
                        }
                        }
                        else
                        {
                            throw new Exception("Debe digitar una existencia");
                        }
                    }
                    else
                    {
                        throw new Exception("Debe digitar una descripción");
                    }
                }
                else
                {
                    throw new Exception("El precio debe ser mayor que 0.00");
                }
            }
            else
            {
                throw new Exception("Debe ingresar el precio");
            }
        }
        else
        {
            throw new Exception("Debe digitar el nombre");
        }
    }
    catch (Exception $error)
    {
        Page::showMessage(2, $error->getMessage(), null);
    }
}
?>

<form method='post' enctype='multipart/form-data'>
    <div class='row'>
        <div class='input-field col s12 m6'>
          	<i class='material-icons prefix'>note_add</i>
          	<input id='nombre' type='text' name='nombre' class='validate' value='<?php print($nombre); ?>' required/>
          	<label for='nombre'>Nombre</label>
        </div>
        <div class='input-field col s12 m6'>
          	<i class='material-icons prefix'>shopping_cart</i>
          	<input id='precio' type='number' name='precio' class='validate' max='999.99' min='0.01' step='any' value='<?php print($precio); ?>' required/>
          	<label for='precio'>Precio ($)</label>
        </div>
         <div class='input-field col s12 m6'>
          	<i class='material-icons prefix'>shopping_cart</i>
          	<input id='existencia' type='number' name='existencia' class='validate' max='100' min='1' step='any' value='<?php print($existencia); ?>' required/>
          	<label for='existencia'>Existencia</label>
        </div>
        <div class='input-field col s12 m6'>
            <?php
            $sql = "SELECT id_marca_producto, nombre_marca FROM marca_producto";
            Page::setCombo("Marca", "marca", $marca, $sql);
            ?>
        </div>
        <div class='input-field col s12 m6'>
            <?php
            $sql = "SELECT id_tipo_producto, nombre_tipo FROM tipo_producto";
            Page::setCombo("Tipo Producto", "tipo", $tipo, $sql);
            ?>
        </div>
        <div class='input-field col s12 m6'>
          	<i class='material-icons prefix'>description</i>
          	<input id='descripcion' type='text' name='descripcion' class='validate' value='<?php print($descripcion); ?>'/>
          	<label for='descripcion'>Descripción</label>
        </div>
      	<div class='file-field input-field col s12 m6'>
            <div class='btn waves-effect'>
                <span><i class='material-icons'>image</i></span>
                <input type='file' name='imagen' <?php print(($imagen == null)?"required":""); ?>/>
            </div>
            <div class='file-path-wrapper'>
                <input class='file-path validate' type='text' placeholder='Seleccione una imagen'/>
            </div>
        </div>
        <div class='input-field col s12 m6'>
            <span>Estado:</span>
            <input id='activo' type='radio' name='estado' class='with-gap' value='1' <?php print(($estado == 1)?"checked":""); ?>/>
            <label for='activo'><i class='material-icons left'>visibility</i></label>
            <input id='inactivo' type='radio' name='estado' class='with-gap' value='0' <?php print(($estado == 0)?"checked":""); ?>/>
            <label for='inactivo'><i class='material-icons left'>visibility_off</i></label>
        </div>
    </div>
    <div class='row center-align'>
        <a href='index.php' class='btn waves-effect grey'><i class='material-icons'>cancel</i></a>
        <button type='submit' class='btn waves-effect blue'><i class='material-icons'>save</i></button>
    </div>
</form>

<?php
Page::footer();
?>