

function escribirEnPosicionUno(VarCant, VarProd, VarColores, VarSubtot) {

var txPos1 = document.getElementById("CantYProd1");
txPos1.removeChild(txPos1.childNodes[0]);

var NuevotxPos1vale = document.createElement("p");
NuevotxPos1vale.innerHTML = VarCant + " " + VarProd;
txPos1.appendChild(NuevotxPos1vale);

var tx2Pos1ColSub = document.getElementById("ColoresySubtot1");
tx2Pos1ColSub.removeChild(tx2Pos1ColSub.childNodes[0]);
var Nuevotx2Pos1Col = document.createElement("p");
Nuevotx2Pos1Col.innerHTML = VarColores;
tx2Pos1ColSub.appendChild(Nuevotx2Pos1Col);

var tx2Pos1ColSub = document.getElementById("ColoresySubtot1BB");
tx2Pos1ColSub.removeChild(tx2Pos1ColSub.childNodes[0]);
var Nuevotx2Pos1Sub = document.createElement("p");
Nuevotx2Pos1Sub.innerHTML = "Subtotal: " + VarSubtot;
tx2Pos1ColSub.appendChild(Nuevotx2Pos1Sub);

    };

function escribirEnPosicionDos(VarCant, VarProd, VarColores, VarSubtot) {

var txPos1 = document.getElementById("CantYProd2");
txPos1.removeChild(txPos1.childNodes[0]);

var NuevotxPos1 = document.createElement("p");
NuevotxPos1.innerHTML = VarCant + " " + VarProd;
txPos1.appendChild(NuevotxPos1);


var tx2Pos1ColSub = document.getElementById("ColoresySubtot2");
tx2Pos1ColSub.removeChild(tx2Pos1ColSub.childNodes[0]);
var Nuevotx2Pos1Col = document.createElement("p");
Nuevotx2Pos1Col.innerHTML = VarColores;
tx2Pos1ColSub.appendChild(Nuevotx2Pos1Col);

var tx2Pos1ColSub = document.getElementById("ColoresySubtot2BB");
tx2Pos1ColSub.removeChild(tx2Pos1ColSub.childNodes[0]);
var Nuevotx2Pos1Sub = document.createElement("p");
Nuevotx2Pos1Sub.innerHTML = "Subtotal: " + VarSubtot;
tx2Pos1ColSub.appendChild(Nuevotx2Pos1Sub);

    };
    
function escribirEnPosicionTres(VarCant, VarProd, VarColores, VarSubtot) {

var txPos1 = document.getElementById("CantYProd3");
txPos1.removeChild(txPos1.childNodes[0]);

var NuevotxPos1 = document.createElement("p");
NuevotxPos1.innerHTML = VarCant + " " + VarProd;
txPos1.appendChild(NuevotxPos1);


var tx2Pos1ColSub = document.getElementById("ColoresySubtot3");
tx2Pos1ColSub.removeChild(tx2Pos1ColSub.childNodes[0]);
var Nuevotx2Pos1Col = document.createElement("p");
Nuevotx2Pos1Col.innerHTML = VarColores;
tx2Pos1ColSub.appendChild(Nuevotx2Pos1Col);

var tx2Pos1ColSub = document.getElementById("ColoresySubtot3BB");
tx2Pos1ColSub.removeChild(tx2Pos1ColSub.childNodes[0]);
var Nuevotx2Pos1Sub = document.createElement("p");
Nuevotx2Pos1Sub.innerHTML = "Subtotal: " + VarSubtot;
tx2Pos1ColSub.appendChild(Nuevotx2Pos1Sub);

    };
    
function escribirEnPosicionCuatro(VarCant, VarProd, VarColores, VarSubtot) {

var txPos1 = document.getElementById("CantYProd4");
txPos1.removeChild(txPos1.childNodes[0]);
var NuevotxPos1 = document.createElement("p");
NuevotxPos1.innerHTML = VarCant + " " + VarProd;
txPos1.appendChild(NuevotxPos1);


var tx2Pos1ColSub = document.getElementById("ColoresySubtot4");
tx2Pos1ColSub.removeChild(tx2Pos1ColSub.childNodes[0]);
var Nuevotx2Pos1Col = document.createElement("p");
Nuevotx2Pos1Col.innerHTML = VarColores;
tx2Pos1ColSub.appendChild(Nuevotx2Pos1Col);

var tx2Pos1ColSub = document.getElementById("ColoresySubtot4BB");
tx2Pos1ColSub.removeChild(tx2Pos1ColSub.childNodes[0]);
var Nuevotx2Pos1Sub = document.createElement("p");
Nuevotx2Pos1Sub.innerHTML = "Subtotal: " + VarSubtot;
tx2Pos1ColSub.appendChild(Nuevotx2Pos1Sub);

    };

function escribirTotal(VarTotal){
var txTotal = document.getElementById("Total");	
txTotal.removeChild(txTotal.childNodes[0]);
var NuevoTotal = document.createElement("p");
NuevoTotal.innerHTML = "Total cesta: " + VarTotal;
txTotal.appendChild(NuevoTotal);
	}
