var producto = "";
var marca = "";


function camiseta2() {
document.getElementById("Camiseta").classList.toggle('camisetamorado');
document.getElementById("calcetinesboton").classList.toggle('ocultaboton');
producto = "Camiseta";
//caso que se seleccionen ambas opciones borra indicación
if (producto == "Camiseta" || producto == "Calcetines"){
if (marca == "Trebol" || marca == "Triangulo"){
var expli = document.getElementById("compraok");
expli.removeChild(expli.childNodes[0]);
};};
    };

function calcetines2() {
document.getElementById("calcetin1").classList.toggle('calcetinmorado');
document.getElementById("calcetin2").classList.toggle('calcetinmorado');
document.getElementById("camisetaboton").classList.toggle('ocultaboton');
producto = "Calcetines";
//caso que se seleccionen ambas opciones borra indicación
if (producto == "Camiseta" || producto == "Calcetines"){
if (marca == "Trebol" || marca == "Triangulo"){
var expli = document.getElementById("compraok");
expli.removeChild(expli.childNodes[0]);
};};
};

function trebol2() {
document.getElementById("Trebol").classList.toggle('trebolblanco');
document.getElementById("trianguloboton").classList.toggle('ocultaboton');
marca = "Trebol";
//caso que se seleccionen ambas opciones borra indicación
if (producto == "Camiseta" || producto == "Calcetines"){
if (marca == "Trebol" || marca == "Triangulo"){
var expli = document.getElementById("compraok");
expli.removeChild(expli.childNodes[0]);
};};
};

function triangulo2() {
document.getElementById("Triangulo").classList.toggle('trianguloblanco');
document.getElementById("trebolboton").classList.toggle('ocultaboton');
marca = "Triangulo";
//caso que se seleccionen ambas opciones borra indicación
if (producto == "Camiseta" || producto == "Calcetines"){
if (marca == "Trebol" || marca == "Triangulo"){
var expli = document.getElementById("compraok");
expli.removeChild(expli.childNodes[0]);
};};
};


var color;
function recibirDatos(){
var precio = 0;

//observar color
var colorProducto = document.getElementById("color").value;
console.log(colorProducto);
console.log(producto + " " + marca);
//recorrer opciones en caso de que sea Camiseta
//VIDEO2 agregamos otros dos switch según marca
if (producto == "Camiseta" && marca == "Trebol"){
switch (colorProducto){
	case "yellow":
	color = "amarillo";
	idProd = 1;
	document.getElementById("Camiseta").classList.toggle('camisetaamarilla');
	if ( marca == "Trebol"){
		document.getElementById("Trebol").classList.toggle('trebolmorado');
		} else if ( marca == "Triangulo"){
		document.getElementById("Triangulo").classList.toggle('triangulomorado');
		};
		break;
	case "red":
		color = "rojo";
	idProd = 2;
	document.getElementById("Camiseta").classList.toggle('camisetarojo');
		break;
	case "olive":
		color = "oliva";
		idProd = 3;
	document.getElementById("Camiseta").classList.toggle('camisetaolive');
		break;
		default:

};
};
if (producto == "Camiseta" && marca == "Triangulo"){
switch (colorProducto){
	case "yellow":
	color = "amarillo";
	idProd = 4;
	document.getElementById("Camiseta").classList.toggle('camisetaamarilla');
	if ( marca == "Trebol"){
		document.getElementById("Trebol").classList.toggle('trebolmorado');
		} else if ( marca == "Triangulo"){
		document.getElementById("Triangulo").classList.toggle('triangulomorado');
		};
		break;
	case "red":
		color = "rojo";
	idProd = 5;
	document.getElementById("Camiseta").classList.toggle('camisetarojo');
		break;
	
	case "olive":
		color = "oliva";
		idProd = 6;
	document.getElementById("Camiseta").classList.toggle('camisetaolive');
		break;
		default:

};
};
//recorrer opciones en caso de que sea Calcetines
//VIDEO2 RECORDAMOS: agregamos otros dos switch según marca
if (producto == "Calcetines" && marca == "Trebol"){
switch (colorProducto){
	case "yellow":
		color = "amarillo";
		idProd = 7;
document.getElementById("calcetin1").classList.toggle('calcetinamarillo');
document.getElementById("calcetin2").classList.toggle('calcetinamarillo');
	if (marca == "Trebol"){
		document.getElementById("Trebol").classList.toggle('trebolmorado');
		} else if (marca == "Triangulo"){
		document.getElementById("Triangulo").classList.toggle('triangulomorado');
		};
		break;
	case "red":
		color = "rojo";
		idProd = 8;
document.getElementById("calcetin1").classList.toggle('calcetinrojo');
document.getElementById("calcetin2").classList.toggle('calcetinrojo');
		break;
	
	case "olive":
		color = "oliva";
		idProd = 9;
document.getElementById("calcetin1").classList.toggle('calcetinolive');
document.getElementById("calcetin2").classList.toggle('calcetinolive');
		break;
		default:

};
};
if (producto == "Calcetines" && marca == "Triangulo"){
switch (colorProducto){
	case "yellow":
		color = "amarillo";
		idProd = 10;
document.getElementById("calcetin1").classList.toggle('calcetinamarillo');
document.getElementById("calcetin2").classList.toggle('calcetinamarillo');
	if (marca == "Trebol"){
		document.getElementById("Trebol").classList.toggle('trebolmorado');
		} else if (marca == "Triangulo"){
		document.getElementById("Triangulo").classList.toggle('triangulomorado');
		};
		break;
	case "red":
		color = "rojo";
		idProd = 11;
document.getElementById("calcetin1").classList.toggle('calcetinrojo');
document.getElementById("calcetin2").classList.toggle('calcetinrojo');
		break;
	
	case "olive":
		color = "oliva";
		idProd = 12;
document.getElementById("calcetin1").classList.toggle('calcetinolive');
document.getElementById("calcetin2").classList.toggle('calcetinolive');
		break;
		default:

};
};
//establecer precio



//establecer precio
if (producto == "Camiseta" && marca == "Trebol"){
precio = 6;} else if (producto == "Camiseta" && marca == "Triangulo"){
precio = 5;} else if (producto == "Calcetines" && marca == "Triangulo"){
precio = 1;} else if (producto == "Calcetines" && marca == "Trebol"){
precio = 2;};
console.log(precio);
//visualizar precio
if (producto != "" && marca != ""){
	var expli = document.getElementById("compra");
	var explica3 = document.createElement("p");
	explica3.innerHTML = producto + " " + marca + " " +color +":";
	explica3.classList.toggle('titExplicaPeq');
	expli.appendChild(explica3);
	var explica4 = document.createElement("p");
	explica4.innerHTML = precio + " €";
	explica4.classList.toggle('titExplica');
	expli.appendChild(explica4);
  var explica5 = document.createElement("p");
  explica5.innerHTML = "Pusle en AÑADIR o en COMENZAR";
  explica5.classList.toggle('titExplicaPeq');
  expli.appendChild(explica5);
	};
};

//caso que se seleccionen tres opciones permite url
function pasarDatos(){
console.log(idProd);

window.location.href = window.location.href + "?pedi" + "&idprod=" + idProd;
console.log(window.location.href);
};

