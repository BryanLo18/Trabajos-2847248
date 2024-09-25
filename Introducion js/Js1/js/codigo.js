inicial("20 de junio 2024");

//imprimir en consola
console.log("Esto es un mensaje en la consola");
//alerta
alert("Mensaje alerta roja ");
// imprimir en el documento
document.write("Imprimir en el documento");

// tipos de datos

let letras ="Escribir letras"
let numeros = 23;
let flotantes = 245.67;
let booleano = true;
let nulos = null;
let valorindefinido;


console.log(letras);
console.log(numeros);
console.log(flotantes);
console.log(booleano);
console.log(nulos);
console.log(valorindefinido);

const URL = "https://developer.mozilla.org/es/docs/Web/JavaScript";
console.log(URL);

const caja = document.getElementById("ejemplo");
caja.innerHTML= "<h2>"+URL+" "+flotantes+"<h2>";

let edad = 19;

if(edad>18){
    alert("Puede ir con las cariñosas")
}else{
    alert("Esta muy chiquita vallase a dormi")
}

function inicial(fecha){
    alert("Fecha de hoy"+fecha);
}

let num=9;
