/*var x;
=$(document);
x.ready(inicializarEventos);

function inicializarEventos() {
	
	  $(".modificacion").click(presionModificar);
	  $(".detalle").click(presionDetalles);
	  $(".users").click(presionCambiaColor);
	  $(".borrador").mouseover(CambiaColorBorrar);
	  $(".borrador").mouseout(CambiaColorNormal);
	  $(".modificacion").mouseover(CambiaColorModificar);
	  $(".modificacion").mouseout(CambiaColorNormal);
	  $(".detalle").mouseover(CambiaColorDetalles);
	  $(".detalle").mouseout(CambiaColorNormal);
}

function presionModificar() {
	  alert("Usted accederÃ¡ a modificar sus datos");
}

function presionDetalles() {
	  alert("Usted accederÃ¡ a comprobar los detalles");
}

function presionCambiaColor() {
	  var x;
	  x=$(this);
	  x.css("color","#ff0000")
	  x.css("background-color","#ffff00")
	  x.css("font-family","courier")
}

function CambiaColorBorrar() {
	  var x;
	  x=$(this);
	  x.css("color","#ffffff")
	  x.css("background-color","#FF0000")
	  x.css("font-family","Arial")
}

function CambiaColorModificar() {
	  var x;
	  x=$(this);
	  x.css("color","#ffffff")
	  x.css("background-color","#3b83bd")
	  x.css("font-family","Arial")
}

function CambiaColorDetalles() {
	  var x;
	  x=$(this);
	  x.css("color","#ffffff")
	  x.css("background-color","#e5be01")
	  x.css("font-family","Arial")
}

function CambiaColorNormal() {
	  var x;
	  x=$(this);
	  x.css("color","#ffffff")
	  x.css("background-color","#FFFFFF")
	  x.css("font-family","sanssolid")
}