<!DOCTYPE html>
<html lang="ES">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Cuenta</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../css/miestilo.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

    <!--Se inclye el Nav-->
    <?php
    include("inc/Menu.php");
    ?>


    <!--Formulario de Preguntas-->
        
        
    <div class="row">
        <div class="col s6 yellow brain">
        <h4 class="center white-text">Expresate con libertad</h4>
        </div>


        <div class="col s6  grey lighten-4">
        <form>
            <h4 class="center">Envianos tus sugerencias</h4>
        <div class="row">
            <div class="input-field col s12">
            <input id="first_name" type="text" class="validate">
            <label for="first_name">Como le parecen nuestros servicios?</label>
            </div>
            <div class="input-field col s12">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Le ha gustado la navegacion por nuestra pagina?</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
            <input disabled value="Estas sugerencias van directamente a nuestro correo para tomarlas en cuenta." id="disabled" type="text" class="validate">
            <label for="disabled">Informacion</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
            <input id="first_name" type="text" class="validate">
            <label for="last_name">Como le parece la calidad de nuestros productos?</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
            <input id="email" type="email" class="validate">
            <label for="email">A quedado satisfecho con nuestros servicios?</label>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
            Calificación Personal:
            <div class="input-field inline">
                <input id="email" type="email" class="validate">
                <label for="email" data-error="wrong" data-success="right">Estrellas</label>
            </div>
            </div>
                <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                    <i class="material-icons right">send</i>
            </button>
        </div>
        </form>
        </div>
    </div>
            


    <!--Se agrega el Footer-->

    <?php
    include("inc/Footer.php");
    ?>

</body>
        <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/inicia.js"></script>
</body>
</html>