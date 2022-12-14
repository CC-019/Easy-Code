<?php

session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Polar Privacity</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
    <link rel="icon" href="views/img/template/icono.png">
    <!--=================================================================
    =                       PLUGINS DE CSS                              =
    ==================================================================-->
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="views/bower_components/bootstrap/dist/css/bootstrap.min.css">
  
    <!-- Font Awesome -->
    <link rel="stylesheet" href="views/bower_components/font-awesome/css/font-awesome.min.css">
  
    <!-- Ionicons -->
    <link rel="stylesheet" href="views/bower_components/Ionicons/css/ionicons.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="views/dist/css/AdminLTE.css">

    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="views/dist/css/skins/_all-skins.min.css">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!--=================================================================
    =                       PLUGINS DE JAVASCRIPTS                      =
    ==================================================================-->
 
    <!-- jQuery 3 -->
    <script src="views/bower_components/jquery/dist/jquery.min.js"></script>
    
    <!-- Bootstrap 3.3.7 -->
    <script src="views/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    
    <!-- SlimScroll -->
    <script src="views/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    
    <!-- FastClick -->
    <script src="views/bower_components/fastclick/lib/fastclick.js"></script>
    
    <!-- AdminLTE App -->
    <script src="views/dist/js/adminlte.min.js"></script>

  
    

</head>

<!--=================================================================
=                       DOCUMENT BODY                                =
==================================================================-->

<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">

    <?php

    if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"]=="ok"){

    echo '<!-- Site wrapper -->
    <div class="wrapper">';

    include "modules/header.php";

    include "modules/menu.php";

    if(isset($_GET["ruta"])){

      if( $_GET["ruta"] == "inicio" ||
          $_GET["ruta"] == "usuarios" ||
          $_GET["ruta"] == "mapa" ||
          $_GET["ruta"] == "perfil" ||
          $_GET["ruta"] == "actualizar" ||
          $_GET["ruta"] == "chatbot" ||
          $_GET["ruta"] == "salir"
      ){
        
        include "modules/".$_GET["ruta"].".php";

      }else{

        include "modules/404.php";
      }
    }else{

      include "modules/inicio.php";
    }

    include "modules/footer.php";

    echo '</div>';

  }else{

    include "modules/login.php";

  }
    
    ?>
</div>
<script src="views/js/template.js"></script>



</body>
</html>
