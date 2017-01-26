<!DOCTYPE html>
<html>
  <head>
    <title>Eventos - Apolo Academia de Música 2013</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
      <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="eventos">
    <div class="container">
        <?php include "components/header.php"; ?>
        <div class="row">
          <div class="col-lg-8">   

          <h2> Planificación de Eventos</h2>
          <p id="p1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <ul class="nav nav-tabs" id="mistabs">
              <li><a href="#enero" data-toggle="tab"> Enero </a></li>
              <li><a href="#marzo" data-toggle="tab"> Marzo </a></li>
              <li><a href="#mayo" data-toggle="tab"> Mayo </a></li>
              <li><a href="#agosto" data-toggle="tab"> Agosto </a></li>
              <li><a href="#octbre" data-toggle="tab"> Octubre </a></li>
            </ul>

            <div class="tab-content">
              <div class="tab-pane active" id="enero">
                <?php include "components/eventos-enero.php"; ?>
              </div>
              <div class="tab-pane" id="marzo">
                <?php include "components/eventos-marzo.php"; ?>
              </div>
              <div class="tab-pane" id="mayo">
                <?php include "components/eventos-mayo.php"; ?>
              </div>
              <div class="tab-pane" id="agosto">
                <?php include "components/eventos-agosto.php"; ?>
              </div>
              <div class="tab-pane" id="octubre">
                <?php include "components/eventos-octubre.php"; ?>
              </div>
            </div>

          </div>

          <div class="col-lg-4">
            <h2>Registrarse</h2>
                  <p id="sign1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur.</p>
                  <a href="registro.php" class="btn btn-success">Registrarse</a>

            <h3>Nuestro Artistas</h3>
            <?php include "components/tira-artistas-vertical.php"; ?>
          </div>
        </div>           
      <?php include "components/footer.php"; ?>
    </div>
  </body>
</html>