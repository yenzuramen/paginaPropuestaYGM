// Funcion para Registrar un Usuario nuevo 
function registrar() {
    //Se obtienen los valores 
    usuario= $("#input_Rusuario").val()
    nombre= $("#input_Rnombre").val()
    contra= $("#input_Rcontra").val()
    contra2= $("#input_Rcontra2").val()

    //Se valida que ninguno este vacio
    if(usuario==""||nombre==""||contra==""||contra2==""){
         alerta("Atención", "Todos los campos de Registro son obligatorios.","warning")
    }else{ //Se valida que las contraseñas coincidan
        if(contra !== contra2){
            alerta("Error", "Las contraseñas no coinciden.","error")
            $("#input_Rcontra").val("")
            $("#input_Rcontra2").val("")
        }else{//Se hace el registro
            //Funcion ajax para llamar al php del registro 
            $.ajax({
                type: 'POST',
                data: {
                    usuario: usuario,
                    nombre: nombre,
                    contra: contra
                },
                url: "registro_usuario.php", //ruta del php
                success: function (data) {
                    //Si se obtuvo 1 alerta sobre el usuario ocupado
                    if(data==1){
                        alerta("Usuario Ocupado","Este nombre de usuario ya está registrado","error")
                        $("#input_Rusuario").val("")
                    }
                    if(data==0){ //Si se obtuvo 0 se alerta sobre el registro existoso 
                        alerta("Registro Exitoso","Ahora puedes iniciar sesión","success")
                        //Se limpian los inputs
                       $("#input_Rusuario").val("")
                        $("#input_Rnombre").val("")
                        $("#input_Rcontra").val("")
                        $("#input_Rcontra2").val("")
                    }
                }
            });
        }
    }
}

//Funcion que inicia sesion
function iniciarSesion() {
    //Se obtienen los datos 
    usuario= $("#input_Lusuario").val()
    contra= $("#input_Lcontra").val()
    //Se valida que no esten vacios 
    if(usuario==""||contra==""){
        alerta("Atención", "Todos los campos son obligatorios.","warning")
   }else{
    //Funcion ajax para llamar al php del login
    $.ajax({
        type: 'POST',
        data: {
            usuario: usuario,
            contra: contra
        },
        url: "login.php", //ruta del php
        success: function (data) {
            //si obtenemos 2 el inicio falló
            if(data==2){
                alerta("Inicio Fallido","Usuario o Contrasela Incorrectos","error")
            }else{
                //De ser correcto nos redirecciona a la pagina de inicio
                window.location.href = "inicio.php";
            }
            
  
        }
    });

   }
    

}
//Funcion de alerta, recibe parametros como el titulo, el texto y el icono (usa la libreria de sweetalert)
function alerta(titulo,texto,icono) {
    Swal.fire(
        titulo,
        texto,
        icono
      )
}

//Funcion que cierra sesion 
function cerrar() {
      //Se llama el php de salir. (Destruye sesión actual)
      $.post("salir.php", function (data, status) {
        if (data == 0) {
            //Se redirige al login.
            location.href = 'index.php';
        }
    });
}