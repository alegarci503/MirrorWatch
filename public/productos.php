<!DOCTYPE html>
<html lang="ES">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>MirrorWatch</title>
    <!--Import Google Icon Font-->
  
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    	<link type='text/css' rel='stylesheet' href='../css/icons.css'/>
    <link type="text/css" rel="stylesheet" href="../css/miestilo.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>   

      <body style="background-color:#e0e0e0;">
        <!-- Se llama al navbar-->
        <?php

        include("inc/menu.php");

        ?>

       <!-- Se agrega imagen con efecto parallax-->
      <div class="parallax-container">
        <div class="parallax"><img class="mediana" src="img/parallax.jpg"></div>
      </div>
      <!-- Contenido de la seccion productos-->
      <div class="container">
        <div class="row">
          <?php
          require("../lib/database.php");
          //Se hace la consulta para obtener los productos
          $sql = "SELECT * FROM productos,marca_producto,tipo_producto WHERE productos.id_marca_producto1 = marca_producto.id_marca_producto AND productos.id_tipo_producto1 = tipo_producto.id_tipo_producto AND productos.id_tipo_producto1 = 0"; //
          //llamo al metodo y le paso los parametros
          $data = Database::getRows($sql, null);

          if($data != null)
          {
            foreach ($data as $row)
            {
              print("
                    <div class='col s4'>
                      <div class='card'>
                         <div class='card-image waves-effect waves-block waves-light'>
                            <img class='activator grande' src='data:image/*;base64,".$row['imagen_producto']."'>
                          </div>

                            <div class='card-content'>
                              <span class='card-title activator grey-text text-darken-4'>$row[nombre_producto]<i class='material-icons right'>more_vert</i></span>
                              <p><a href='#'>Comprar<i class='material-icons left'>shopping_cart</i></a></p>
                            </div>

                               <div class='card-reveal'>
                                  <span class='card-title grey-text text-darken-4'><Especificaciones></Especificaciones><i class='material-icons right'>close</i></span>
                                  <div class='divider'></div>

                                  <div class='section'>
                                    <h5>Informacion</h5>
                                    <p>$row[descripcion]</p>
                                  </div>

                               </div>           
                      </div>
                    </div>      
              ");
            }
          }
          	else
          {
            print("<div class='card-panel yellow'><i class='material-icons left'>warning</i>No hay registros disponibles en este momento.</div>");
          }
          ?>
  
    </div>
    </div>

    <!-- Se agrega imagen con efecto parallax-->
    <div class="parallax-container">
        <div class="parallax"><img class= "mediana" src="img/parallax1.jpg"></div>
      </div>

      <!-- Contenido de la seccion productos-->
    <div class="container">
          <div class="row">
          <?php
          //Se hace la consulta para obtener los productos
          $sql1 = "SELECT * FROM productos,marca_producto,tipo_producto WHERE productos.id_marca_producto1 = marca_producto.id_marca_producto AND productos.id_tipo_producto1 = tipo_producto.id_tipo_producto AND productos.id_tipo_producto1 = 1"; //AND tipo_producto = 1
          //llamo al metodo y le paso los parametros
          $data1 = Database::getRows($sql1, null);
          if($data1 != null)
          {
            foreach ($data1 as $row1)
            {
              print("
                    <div class='col s4'>
                      <div class='card'>
                         <div class='card-image waves-effect waves-block waves-light'>
                            <img class='activator grande' src='data:image/*;base64,".$row1['imagen_producto']."'>
                          </div>

                            <div class='card-content'>
                              <span class='card-title activator grey-text text-darken-4'>$row1[nombre_producto]<i class='material-icons right'>more_vert</i></span>
                              <p><a href='#'>Comprar<i class='material-icons left'>shopping_cart</i></a></p>
                            </div>

                               <div class='card-reveal'>
                                  <span class='card-title grey-text text-darken-4'><Especificaciones></Especificaciones><i class='material-icons right'>close</i></span>
                                  <div class='divider'></div>

                                  <div class='section'>
                                    <h5>Informacion</h5>
                                    <p>$row1[descripcion]</p>
                                  </div>

                               </div>           
                      </div>
                    </div>      
              ");
            }
          }
          	else
          {
            print("<div class='card-panel yellow'><i class='material-icons left'>warning</i>No hay registros disponibles en este momento.</div>");
          }
          ?>
          </div>
    </div>

    <!-- Se llama al Footer-->
        
        <?php

        include("inc/footer.php");

        ?>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script>
        <script type="text/javascript" src="js/public.js"></script>
      </body>
    </html>
      