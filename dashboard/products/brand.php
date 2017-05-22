<?php
    require("../lib/page.php");
    Page::header("Agregar Marca");


if(!empty($_POST))
{
    try
    {
        $_POST = Validator::validateForm($_POST);
        $nombremarca = $_POST['marca'];
        if($nombremarca != "")
        {
            $sql = "INSERT INTO marca_producto(nombre_marca) VALUES (?)";
            $params = array($nombremarca);
            Database::executeRow($sql, $params);
            Page::showMessage(1, "Operación satisfactoria", "save.php");
        }
        else
        {
                throw new Exception("Debe ingresar una marca");
        }
    }
    catch (Exception $error)
    {
        Page::showMessage(2, $error->getMessage(), null);
    }


}
?>
<div class="section-private">
    <h5 class="center-elements">Agregar nueva Marca</h5>
    <form method="post">
        <div class='input-field col s12 m4 offset-m4'>
                <i class='material-icons prefix'>grade</i>
                <input id='marca' type='text' name='marca' class='validate' required/>
                <label for='marca'>Nueva Marca</label>
            </div>
        <div class='row center-align'>
            <button type='submit' class='btn waves-effect blue'><i class='material-icons'>save</i></button>
        </div>
    </form>
</div>

<?php
Page::footer();
?>