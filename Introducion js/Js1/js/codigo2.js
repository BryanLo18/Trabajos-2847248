function permiso_ingreso(){
    const resultado = document.getElementById("resultado_edad");
    let edad = document.getElementById("edad").value;
    if(edad>17){
        resultado.innerHTML = "Ya puede culiar con la cariñosa ";
    }else{
        resultado.innerHTML = "A domir con su mama ";
    }
}

function validar_numero(){
    const resultado=document.getElementById("resultado_numero");
    let numero = document.getElementById("numero").value;
    if(numero%2==0){
        if(numero > 0){
            resultado.innerHTML="Es par y positivo";
        }else{
            resultado.innerHTML="Es par pero no positivo";
        }
    }else if(numero>0){
        resultado.innerHTML="Es impar y positivo";
    }else{
        resultado.innerHTML="Es impar y negativo";
    }
}

function imprimir_pares(){
    const resultado=document.getElementById("resultado_pares")
    let pares = document.getElementById("Inicio").value;
    pares=parseInt(pares);
    for(let i = pares; i<=100;i=i+2){
        console.log(i);
    }
}

function imprimir_pares(){
    const resultado=document.getElementById("resultado_pares")
    let pares = document.getElementById("Inicio").value;
    pares=parseInt(pares);
    

    for(let i = pares; i<=100;i=i+2){
        console.log(i);
    }
}   