<?php
//Se abre la sesión
    session_start();   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
  
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-md-center" id="navbarSupportedContent">
      <ul class="navbar-nav  mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link" href="">ReviewBook / Yeneli Garcia <i class="fas fa-book-open"></i></a>
        </li>
      </ul>
    </div>
    <!-- Div donde se despliega el nombre del usuario con session abierta.  -->
    <div id="usuario" class="" style="margin-right:30px">
      <i class="fas fa-user-circle" style="color:#b7b7b7; margin-right:5px"></i>
      <!-- ---Se imprime el nombre guardado en la variable de session--- -->
      <label id="label_usuario" style="color:#b7b7b7">  <?php
                      echo $_SESSION['nombre'];
                    ?></label>
    </div>
    <div class="d-flex justify-content-end">
    <!-- ------------Boton de cerrar sesion que llama a la funcion de cerrar---------------- -->
      <button class="btn btn-outline-primary" onclick="cerrar()">Cerrar Sesión <i
          class="fas fa-sign-out-alt"></i></button>
    </div>
  </div>
</nav>



<div class="d-flex">

<div class="container mt-4 mr-4" style="margin-left: 250px!important;">

  <h3 class="mt-5">ReviewBook <i class="fa-solid fa-cart-flatbed"></i></h3>
  <!-- ----------Si el rol del usuario es 0 (ADMIN) se le habilita el boton de registrar Libro  -->
  <?php
              if ($_SESSION['rol']==0) {
                    ?>
  <button type="button" class="btn btn-success" onclick="llamarModal()"><i class="fas fa-plus-circle"></i> Registrar Libro</button>
  <?php
              }
                    ?>
  <hr>
  <div class="row">
    <div class="col-12 col-md-12">
      <!-- Contenido -->

      <div class="da">
 

        <br>

        <div class="row">
          <div class="col-md-12">

            <div class="card text-center">
              <div class="card-header">
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                  <!-- Boton que llama a la funcion de llamarLibros  -->
                <button type="button" class="btn btn-primary" onclick="llamarLibros()">Libros <i class="fas fa-book-open"></i></button>

                <!-- Si el rol del usuario es 0 (Admin) se habilita el boton que llama a la funcion llamarTabla, que muestra los usuarios del sistema -->
                  <?php
              if ($_SESSION['rol']==0) {
                    ?>
                  <button type="button" class="btn btn-info" onclick="llamarTabla()">Ver Usuarios <i class="fas fa-users"></i></button>
                  <?php
              }
                    ?>
                </div>
              </div>
             
              <div class="mt-2">
                <table id="tabla_usuarios" class="table table-bordered pr-4">
                  <!-- Aquí va la tabla con los usuarios. -->

                </table>


                <div class="row" id="containerCards">
                  <!-- Aquí se despliegan las cards de los libros  -->
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- Fin row -->
</div>
<!----------------------------------------- Fin container ------------------------------------------------>
<br>
<!-- fin del div NOTA -->
<footer class="footer">
  <div class="container"> <span class="text-muted">
    </span> </div>
</footer>


<?php require_once("modalRegistroLibro.php");?>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

  <script type="text/javascript" src="login.js"></script>
  <script type="text/javascript" src="inicio.js"></script>
</body>
</html>