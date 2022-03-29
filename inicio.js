//Al cargar la pagina llamamos a la función que nos traerá los prestamos pendientes
$(document).ready(function () {
    llamarLibros() //Se llama por los libros registrados

});

//Funcion que trae los datos de los libros registrados 
function llamarLibros() {
    // alert("llamando libros")
    $("#tabla_usuarios").html("");

    $.ajax({
        url: "obtenerLibros.php",
        type: "get",
        dataType: 'JSON',
        success: function (data) {
            // console.log(data);
            datosCard = "";
            $.each(data, function (indiceLista, elemento) {
                //Se genera una card con los datos del libro 
                datosCard += '<div class="col-sm-4 mt-4 mb-4">' +
                    '<div class="card text-white bg-secondary">' +
                    '<div class="card-body">' +
                    '<h5 class="card-title">' + elemento.titulo + '</h5>' +
                    '<p class="card-text">' + elemento.categoria +' <strong> ( ' + elemento.lanzamiento+')</strong></p>' +
                    '<p class="card-text">' + elemento.sipnosis +'</p>' +
                    '</div>' +
                    '</div>' +
                    '</div>'
            })

             //Se inserta el string en el div 
             $("#containerCards").html(datosCard);

            
        }
    });


}

//Funcion que muestra el modal de registro de libros
function llamarModal() {
    $("#registrar_libro_modal").modal("show");
}

//Funcion que llama la tabla con los usuarios 
function llamarTabla() {  
    //Se limpia el div que tiene los libros 
    $("#containerCards").html("");
    //Se llama a la funcion que obtiene la tabla con usuarios 
$.ajax({
    type: 'POST',
    data: {
    },
    url: "obtenerUsuarios.php", //ruta de la funcion 
    success: function (data) {
        $("#tabla_usuarios").html(data); //Se inseta la tabla contenida en data en la etiqueta de tabla usuarios
    }
});
}

//Funcion que guarda los libros 
function guardarLibro() {
    //Se obtienen los datos de los inputs
    titulo= $("#titulo").val()
    lanzamiento= $("#lanzamiento").val()
    autor= $("#autor").val()
    categ= $("#select_categoria :selected").val()
    sipnosis= $("#sipnosis").val()

    //Se valida que no esten vacios 
    if(titulo==""||lanzamiento==""||autor==""||categ==""||sipnosis==""){
        alerta("Atención", "Todos los campos de Registro son obligatorios.","warning")
   }else{
       //funcion ajax que hace el registro
    $.ajax({
        type: 'POST',
        data: {
            titulo: titulo,
            lanzamiento: lanzamiento,
            autor: autor,
            categ:categ,
            sipnosis: sipnosis
        },
        url: "registro_libro.php", //ruta
        success: function (data) {
            //Se limpian los campos
            $("#titulo").val("")
            $("#lanzamiento").val("")
            $("#autor").val("")
            $("#sipnosis").val("")
            //Se esconde el modal de registro 
            $("#registrar_libro_modal").modal("hide");
            //Se muestra la alerta de registro exitoso
            alerta("Registro Exitoso","Ahora podras ver este libro en tu panel","success")
            //actualizamos las cards de libros existentes
            llamarLibros()
        }
    });
   }


}