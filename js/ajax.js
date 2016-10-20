$(document).ready(function(){
partialRender("mostrar_home");
actualizarBotones();

function actualizarBotones(){

$("#mostrar_productos").on("click",function(){
partialRender("mostrar_productos");
});

$("#mostrar_home").on("click",function(){
partialRender("mostrar_home");
});

$("#mostrar_adm_productos").on("click",function(){
partialRender("mostrar_adm_productos");
});

$("#mostrar_adm_categorias").on("click",function(){
partialRender("mostrar_adm_categorias");
});

$(".linkproducto").on("click",function(ev){
	ev.preventDefault();
	$.ajax({
		url: $(this).attr("href"),
		success: MostrarContenido,
		dataType: "html",
		error: MostrarError
	});
});

}

function partialRender(bton) {
$(".active").removeClass();
$("#"+bton).addClass("active");
CargarAjax(bton);
}

function CargarAjax(bton) {
	$.ajax({
		url: "index.php?action="+bton,
		success: MostrarContenido,
		dataType: "html",
		error: MostrarError
	});
}

function MostrarContenido(data){
$("#contenido").html(data);
actualizarBotones();
}

function MostrarError(){
$("#contenido").html("ERROR");
}

});
