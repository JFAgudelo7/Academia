<!DOCTYPE html>
<html>
  <head>
    <title>RMIT music</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/styles.css" rel="stylesheet" media="screen">
      
    <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="home">
      <div class="container">
          <?php include "components/header.php"; ?>
          <?php include "components/carousel.php"; ?>
          
          <div class="row">
              <div class="col-lg-4">
                <h2>Eventos</h2>

               <?php include "components/acordeon-eventos.php"; ?>
                 
              </div>

              <div class="col-lg-4">
                <h2>Galeria</h2>
                <?php include "components/galeria.php"; ?>
              </div>

              <div class="col-lg-4">
                <h2>Registrarse</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <a href="registro.php" class="btn btn-success">Registrarse</a>
              </div>              
          </div>  
          
          <div class="row">
            <div class="clearfix">
                <h2>Artistas Nuevos</h2>
                <?php include "components/tira-artistas.php"; ?>
            </div>
          </div>
          
          <div class="row">
            <?php include "components/cursos-destacados.php"; ?> 
          </div>
          
          <div class="row">
            <?php include "components/footer.php"; ?> 
          </div>
             
      </div>            
  </body>
</html>