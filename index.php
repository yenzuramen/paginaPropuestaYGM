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
  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body style="background-color:rgb(116, 145, 240);">
 
    <div class='d-flex card-columns  justify-content-center '>  <h1 >ReviewBook / Yeneli Garcia</h1></div>
  
    <div class="d-flex card-columns  min-vh-100 justify-content-center align-items-center">
<!-- ------- PANEL DE INICIO DE SESION------------ -->
      <div class="card text-white bg-dark mb-3 " style="max-width: 18rem;">
        <div class="card-header"><strong>INICIAR SESIÓN</strong></div>
        <div class="card-body text-center ">

          <div class="d-flex form-group">
            <i class="fas fa-user mt-2" style="margin-right: 10px;"></i>
            <input type="text" class="form-control" id="input_Lusuario" name="input_Lusuario" class="form-control"
              placeholder="Usuario" />
          </div>
          <div class="d-flex form-group mt-4">
            <i class="fas fa-lock mt-2" style="margin-right: 10px;"></i>
            <input type="password" class="form-control" id="input_Lcontra" name="input_Lcontra" class="form-control"
              placeholder="Contraseña" />
          </div>

          <button type="button" class="btn btn-outline-light mt-4" onclick="iniciarSesion()">Ingresar</button>

        </div>
      </div>
<!-- ------- PANEL DE REGISTRO------------ -->
      <div class="card text-dark bg-light mb-3  " style="max-width: 18rem; margin-left: 10px;">
        <div class="card-header"><strong>REGISTRO</strong></div>
        <div class="card-body text-center ">

          <form>

            <div class="d-flex form-group">
              <i class="fas fa-user mt-2" style="margin-right: 10px;"></i>
              <input type="text" class="form-control" id="input_Rusuario" name="input_Rusuario" class="form-control"
                placeholder="Usuario" required />
            </div>
            <div class="d-flex form-group mt-4">
              <i class="fas fa-keyboard mt-2" style="margin-right: 10px;"></i>
              <input type="text" class="form-control" id="input_Rnombre" name="input_Rnombre" class="form-control"
                placeholder="Nombre" />
            </div>
            <div class="d-flex form-group mt-4">
              <i class="fas fa-lock mt-2" style="margin-right: 10px;"></i>
              <input type="password" class="form-control" id="input_Rcontra" name="input_Rcontra" class="form-control"
                placeholder="Contraseña" />
            </div>
            <div class="d-flex form-group mt-4">
              <i class="fas fa-lock mt-2" style="margin-right: 10px;"></i>
              <input type="password" class="form-control" id="input_Rcontra2" name="input_Rcontra2" class="form-control"
                placeholder="Confirmar Contraseña" />
            </div>

            <button type="button" class="btn btn-primary mt-4" onclick="registrar()">Registrar</button>
          </form>
        </div>

      </div>
    </div>

  </div>


  <!-- JavaScript  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>

  <script type="text/javascript" src="login.js"></script>
</body>

</html>