Algoritmo Ejercicio04
	
	Escribir "Ingrese cantidad de clientes"
	Leer clientes
	acum_ventas=0
	acum_dinero=0
	Para i<-1 Hasta clientes Con Paso 1 Hacer
		Escribir "Cliente #",i
		Escribir "Cantidad de productos"
		leer cantidad
		Escribir "Precio del producto"
		Leer valor
		subtotal=valor*cantidad
		iva=subtotal*0.19
		total=subtotal+iva
		Escribir "Iva: ",iva
		Escribir "Este es el total: ",total
		Escribir "Con cuanto paga el cliente"
		Leer pago
		cambio=pago-total
		Escribir "Este es su cambio: ",cambio
		acum_ventas=acum_ventas+cantidad
		acum_dinero=acum_dinero+total
	FinPara
	
	Escribir "Esto es el total de ventas: ",acum_ventas
	Escribir "Esta es la cantidad total de clientes: ",clientes
	Escribir "Este es el total de dinero generado: ",acum_dinero
	
FinAlgoritmo
