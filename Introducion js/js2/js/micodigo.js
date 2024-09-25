/*let descuento = true;

//let mensaje = descuento == true ? "Hay descuento": "No hay descuento";

//console.log(mensaje);
//
//let parrafo='';

//let i =0;


 //while(i<=10){
   // parrafo+= '<p>Perro hpta de federico</p>';
   // i++;
//}

//document.getElementById("respuesta").innerHTML=parrafo;

//do{

//}while(g);

//function calcularFactorial(num){
   // if (num === 0 || num === 1){
        //return 1;
    //}else {
       // return num * calcularFactorial(num-1);
    //}
  } 
let resultado = calcularFactorial(170);
console.log(resultado);


 const unValor = () => { return 3+5};
console.log(unValor());

const otrovalor = (n1,n2) => n1+n2
 console.log(otrovalor(18,19));*/

let frutas=["Manzana","Banana","Cereza","Coco","Naranja"];

console.log(frutas);

frutas[1]="Mango"

console.log(frutas);

/*let listaFrutas = `<ul>
                   <li>`+frutas[0]+`</li>
                   <li>`+frutas[1]+`</li>
                   <li>`+frutas[2]+`</li>
                </ul>`;
document.getElementById("respuesta").innerHTML=listaFrutas;*/


frutas.push("Pina","Guanabana")
frutas.pop();
let nuevaLista= "<ul>";
for(let i =0; i<frutas.length;i++){
    nuevaLista+= "<li>"+frutas[i]+"</li>";
}
nuevaLista += "</ul>";

document.getElementById("respuesta2").innerHTML=nuevaLista;

let filas =""
frutas.forEach(function(elememto){
    filas+="<tr>";
    filas+="<td style='border: 1px black solid;'>"+elememto+"</td>";
    filas+="</tr>";
})

document.getElementById("datos").innerHTML=filas;