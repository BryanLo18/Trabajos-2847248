function permiso_ingreso(){
   
    let valor = parseFloat(document.getElementById("valor").value);
    let tasa = parseFloat(document.getElementById("tasa_interes").value);
    let cuotas = parseInt(document.getElementById("cuota").value);

    let intereses=valor*tasa/100;
    let pago=(valor/cuotas)+intereses;
    let total=pago*cuotas;

    let codigoHTML="<p>Valor interese mensual: "+intereses+ "</p>";
    codigoHTML +="<p>Valor a pagar mensual: " + pago + "</p>";
    codigoHTML +="<p>Valor total a pagar: " + total + "</p>";

    const resultado=document.getElementById("total");
    resultado.innerHTML=codigoHTML;

}

function calcular(){

    let nombre=document.getElementById("nombre");
    let precio=document.getElementById("precio").value;
    let cantidad=document.getElementById("cantidad").value;
    let descuento=document.getElementById("descuento").value;

    let subtotal=precio*cantidad;
    
    if(descuento=="si"){
        let descontar=subtotal*0.1;
        let total=subtotal-descontar

        let resultado="<p>Descuento: "+descontar+"</p>";
        resultado +="<p>Totala a pagar: "+total+"</p>";

        const total1=document.getElementById("total1");
        total1.innerHTML=resultado;
    }else{
        let descontar=0;
        let total=subtotal
        let resultado="<p>Descuento: "+descontar+"</p>";
        resultado +="<p>Totala a pagar: "+total+"</p>";
        const total1=document.getElementById("total1");
        total1.innerHTML=resultado;
    }
}

function crear(){
    let numero=document.getElementById("numero");
    const genero=document.getElementById("generar");
    let html="";
    
    

    if(numero<1 || numero>10){
        html+="<h1>Numero fuera de rango</h1>"
    }else{
        for(let i=0;i<numero;i++){
            html+="<input type='number' class='col-2 ' id='numero'"+i+">" 
        }
        genero.innerHTML=html;
    }
}