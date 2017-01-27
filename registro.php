<!DOCTYPE html>
<html>
  <head>
    <title>Registro - Apolo Academia de Música 2013</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Arsenal" rel="stylesheet">
      <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="registro">
    <div class="container">
        <?php include "components/header.php"; ?>
        <div class="container">
          <div class="col-lg-8">
          <h2>Formulario de Registro</h2>
            <form>
              <div class="form-group">
              <label for="nombre"> Nombre </label>
                <input id="nombre" class="form-control" placeholder="Ingresa tu nombre">
              </div>
              <div class="form-group">
                <label for="apellido">Apellido</label>
                <input id="apellido" class="form-control" placeholder="Ingresa tu apellido">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input id="email" class="form-control" placeholder="Ingresa un email">
              </div>
              <div class="form-group">
                <select class="form-control">
                  <option>Guitarra</option>
                  <option>Bajo</option>
                  <option>Batería</option>
                  <option>Violín</option>
                  <option>Piano</option>
                  <option>Trompeta</option>
                  <option>Composición</option>
                </select>                
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox">Suscribirse
                </label>                
              </div>
              <button type="submit" class="btn btn-success">Registrarse</button>
            </form>
          </div>
          
        </div>

    </div>
    <div  id="footer" class="row">
            <?php include "components/footer.php"; ?> 
      </div>  
  </body>
</html>