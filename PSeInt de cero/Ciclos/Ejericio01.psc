Algoritmo Ejericio01
	
	Escribir "Ingrese la cantidad de clientes"
	Leer clientes
	
	kilo_naranja=1500
	acum=0
	
	Para i<-1 Hasta clientes Con Paso 1 Hacer
		Escribir "Cuantos kilos de narajan va comprar"
		Leer compra
		
		
		Si compra>=10 Entonces
			subtotal=compra*kilo_naranja
			descuento=subtotal*0.15
			Total=subtotal-descuento
			acum=acum+Total
			Escribir "El total a pagar es: ",Total
			
		SiNo
			Total=compra*kilo_naranja
			acum=acum+Total
			Escribir "El total a pagar es: ",Total
		Fin Si
		
	Fin Para
	
	Escribir "Esto es lo que gana la tienda: ",acum
	
	
FinAlgoritmo
