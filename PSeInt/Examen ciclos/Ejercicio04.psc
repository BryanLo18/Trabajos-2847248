Algoritmo Ejercicio04
	Escribir "Escribir clientes"
	Leer clientes
	
	acum1=0
	acum2=0
	
	Para x<-1 Hasta clientes Con Paso 1 Hacer
		Escribir "Escribir cantidad de productos"
		Leer cantidad
		
		Para i<-1 Hasta cantidad Con Paso 1 Hacer
			Escribir "Cantidad de productos #",i
			Leer productos
			Escribir "Precio del producto"
			Leer precio
			
			subtotal=productos*precio
			acum1=acum1+subtotal
		Fin Para
		Escribir "El total es: ",acum1
		Escribir "Ingrese el codigo de la caja"
		Leer codigo
		Si codigo=123 Entonces
			Escribir "La caja se abrio"
			
		SiNo
			Escribir "Error codigo incorrecto"
		FinSi
		
		Escribir "Con cuanto paga"
		Leer pago
		cambio=pago-acum1
		Escribir "Este es su cambio: ",cambio
		acum2=acum2+acum1
		
	Fin Para
	
	Escribir "Este es el total de ventas: ",acum2
FinAlgoritmo
