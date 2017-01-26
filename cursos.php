<!DOCTYPE html >
<html lang="es">
  <head>
    <title>Cursos - Apolo Academia de Música 2017</title>
    <meta charset="utf-8">
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
  <body id="cursos" data-spy="scroll" data-target="#miscroll">
    <?php include "components/header.php"; ?>    
       <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <div id="miscroll" class="scrollspy affix hidden-sm">
                <ul class="nav nav-list">
                  <li><a href="#guitarra"> Guitarra </a></li>
                  <li><a href="#bajo"> Bajo </a></li>
                  <li><a href="#bateria"> Bateria </a></li>
                  <li><a href="#piano"> Piano </a></li>
                  <li><a href="#violin"> Violin </a></li>
                  <li><a href="#trompeta"> Trompeta </a></li>
                  <li><a href="#composicion"> Composicion </a></li>                  
                </ul> 
              </div>
            </div>
            <div class="col-lg-9">
              <?php include"components/curso-guitarra.php" ?>
              <?php include"components/curso-bajo.php" ?>
              <?php include"components/curso-bateria.php" ?>
              <?php include"components/curso-piano.php" ?>
              <?php include"components/curso-violin.php" ?>
              <?php include"components/curso-trompeta.php" ?>
              <?php include"components/curso-composicion.php" ?>
            </div>
          </div>        
      </div>       
      <div class="row">
          <?php include "components/footer.php"; ?>  
      </div>
    </div>
  </body>
</html>