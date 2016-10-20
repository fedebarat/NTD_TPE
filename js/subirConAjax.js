$(document).ready(function(){
"use strict";

var archivos;

$("#btnAgregarProducto").on("click", function(ev){
      ev.preventDefault();
      AgregarProducto();
  });

  $("#btnAgregarCategoria").on("click", function(ev){
        ev.preventDefault();
        AgregarMarca();
    });


  $("#imagenesASubir").on("change", function(ev){
      archivos = ev.target.files;
  });

  $('.btnBorrarCategoria').click(function(){
    event.preventDefault();
     var id_categoria = $(this).data("id");
      $.ajax({
                url:"index.php?action=borrar_categoria&id_categoria=" + id_categoria,
                dataType:'HTML',
                method: 'GET',
                success: function(data){
                  $('#contenido').html(data);
                  $( "#mostrar_adm_categorias" ).trigger( "click" );
                }
              });
              event.preventDefault();
});

$('.btnBorrarProducto').click(function(){
  event.preventDefault();
    var id_producto = $(this).data("id");
    $.ajax({
              url:"index.php?action=borrar_producto&id_producto=" + id_optica,
              dataType:'HTML',
              method: 'GET',
              success: function(data){
                $('#contenido').html(data);
                $( "#mostrar_adm_productos" ).trigger( "click" );
              }
            });
});

//$('.btnModificarMarca').click(function(){
  //event.preventDefault();
//});


  function AgregarCategoria(ev){
  if(($("#categoria").val()!="")) {
  var marca = $("#categoria").val();

  var datos = new FormData();

  datos.append("categoria",categoria);

  subirAjax(datos,"agregar_categoria");
  $( "#mostrar_adm_categorias" ).trigger( "click" );
  }
  else{
    alert("Faltaron datos");
  }
  ev.preventDefault();
  }

function subirAjax(datos,act){
  $.ajax({
    method: "POST",
    contentType: false,
    processData: false,
    data: datos,
    cache: false,
    url: "index.php?action="+act,
    success: function(data){
      alert("Se cargo perfectamente la informacion!.");
      $("#titulo").val("");
      $("#descripcion").val("");
      },
    error: function(data){$("#AjaxContent").text("Error");}

  });

}


function AgregarProducto(ev){
if(($("#titulo").val()!="")&&($("#descripcion").val()!="")) {
var titulo = $("#titulo").val();
var descripcion = $("#descripcion").val();
var categoria = $('#categoria :selected').val();

var datos = new FormData();

if(typeof archivos !== "undefined") {
  $.each(archivos, function(key, value)
  {
  datos.append(key, value);
  });
}

datos.append("titulo",titulo);
datos.append("descripcion",descripcion);
datos.append("categoria",categoria);

subirAjax(datos,"agregar_producto");
$( "#mostrar_adm_productos" ).trigger( "click" );
}
else{
  alert("Faltaron datos");
}
ev.preventDefault();
}

});
