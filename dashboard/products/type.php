<?php
    require("../lib/page.php");
    Page::header("Agregar Tipo");


if(!empty($_POST))
{
    try
    {
        $_POST = Validator::validateForm($_POST);
        $nombretipo = $_POST['tipo'];
        if($nombretipo != "")
        {
            $sql = "INSERT INTO tipo_producto(nombre_tipo) VALUES (?)";
            $params = array($nombretipo);
            Database::executeRow($sql, $params);
            Page::showMessage(1, "Operación satisfactoria", "save.php");
        }
        else
        {
                throw new Exception("Debe ingresar un nuevo tipo de reloj");
        }
    }
    catch (Exception $error)
    {
        Page::showMessage(2, $error->getMessage(), null);
    }


}
?>
<div class="section-private">
    <h5 class="center-elements">Agregar nuevo tipo de reloj</h5>
    <form method="post">
        <div class='input-field col s12 m4 offset-m4'>
                <i class='material-icons prefix'>playlist_add</i>
                <input id='tipo' type='text' name='tipo' class='validate' required/>
                <label for='tipo'>Nuevo Tipo</label>
            </div>
        <div class='row center-align'>
            <button type='submit' class='btn waves-effect blue'><i class='material-icons'>save</i></button>
        </div>
    </form>
</div>

<?php
Page::footer();
?>