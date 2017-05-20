    <!DOCTYPE html>
    <html lang="ES">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Carrito de Compras</title>
    <!--Import Google Icon Font-->

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link type='text/css' rel='stylesheet' href='../css/icons.css'/>
    <link type="text/css" rel="stylesheet" href="../css/miestilo.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

    <!--Se incluye el Nav -->
    <?php

    include("inc/menu.php");
    ?>
    </body>

    <!--Empieza pagina-->
    <h5 class="center"> Carrito de Compras de MirrorWatch</h5>
    <div class="cuent indigo lighten-5">
    <div class="row">
    <div class="col s4 m3 l2">
        <div>
            <h6 class="title">Cliente</h6>
            <img src="img/user.png" alt="" class="o">
            <h6> Byron Solorzano </h7>
        </div>

        <div>

            <h5 class="center"> Metodo de Pago </h5>
              <form action="#">
                <p>
                <input name="group1" type="radio" id="test1" />
                <label for="test1">Paypal</label>
                </p>
                <p>
                <input name="group1" type="radio" id="test2" />
                <label for="test2">Tarjeta de Credito</label>
                </p>
                
            </form>
                    

            <a class="waves-effect waves-light btn" href="#modal1">Comprar</a>

            <!-- Modal Structure -->
            <div id="modal1" class="modal">
                <div class="modal-content">
                <h4>Compra de Productos</h4>
                <p>Esta seguro de comprar estos productos?</p>
                </div>
                <div class="modal-footer">
                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Si</a>
                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">No</a>
                </div>
            </div>
        </div>

    </div>

    <div class="col s8 m9 l10">
    <h6 class="center title">Productos</h6>
          <ul class="collection">

            <li class="collection-item avatar">
            <img src="img/rolex.jpg" alt="" class="circle">
            <span class="title">Producto</span>
            <p>Rolex Cosmograph Daytona</p>
            <span class="title">Cantidades</span>
            <p>1</p>
            <span class="title">Precio Unitario</span>
            <p>$$$</p>
            <span class="title">Precio</span>
            <p>$$$</p>
            <a href="#!" class="secondary-content"><i class="material-icons">add</i></a>

            <a href="#!" class="secondary-content ki"><i class="material-icons">remove</i></a>
            </li>

            <li class="collection-item avatar">
              <img src="img/rolex3.jpg" alt="" class="circle">
            <span class="title">Title</span>
            <p>Rolex Pearlmaster</p>
            <span class="title">Cantidades</span>
            <p>2</p>
            <span class="title">Precio Unitario</span>
            <p>$$$</p>
            <span class="title">Precio</span>
            <p>$$$</p>
            <a href="#!" class="secondary-content"><i class="material-icons">add</i></a>
            <a href="#!" class="secondary-content ki"><i class="material-icons">remove</i></a>
            </li>
            
            <li class="collection-item avatar">
              <img src="img/rolex2.jpg" alt="" class="circle">
            <span class="title">Title</span>
            <p>Rolex Explorer II</p>
            <span class="title">Cantidades</span>
            <p>4</p>
            <span class="title">Precio Unitario</span>
            <p>$$$</p>
            <span class="title">Precio</span>
            <p>$$$</p>
            <a href="#!" class="secondary-content"><i class="material-icons">add</i></a>
            <a href="#!" class="secondary-content ki"><i class="material-icons">remove</i></a>
            </li>
            
        </ul>
                    
    </div>
    </div>

    </div>


    <!--Se incluye el footer-->
    <?php

    include("inc/footer.php");

    ?>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="js/public.js"></script>
    </body>
    </html>