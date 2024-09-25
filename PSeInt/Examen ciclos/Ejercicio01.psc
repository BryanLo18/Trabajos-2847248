Algoritmo Ejercicio01
	
	Escribir "Ingrese la cantidad de clientes"
	Leer cantidad
	
	servicio=10000
	acum=0
	acum_mesas=0
	acum_propina=0
	
	Para i<-1 Hasta cantidad Con Paso 1 Hacer
		Escribir "Mesa asignada"
		Leer mesas
		acum_mesas=acum_mesas+1
		
		si acum_mesas<50 Entonces
			Escribir "Mesa #",mesas
			Escribir "Valor del pedido"
			Leer pedido
			
			subtotal=servicio+pedido
			acum=acum+subtotal
			Escribir "Total a pagar: ",subtotal
			Escribir "Recaudado mesa #",mesas, " : " ,subtotal
		SiNo
			Si acum_mesas=50 Entonces
				Escribir "No hay mesas disponibles"
			FinSi
		FinSi
	Fin Para
	acum_propina=acum*0.1
	Escribir "Cuantos meseros son: "
	Leer meseros
	
	Si meseros=4 Entonces
		propina_mesero=acum_propina*0.80
		total_mesero=propina_mesero/4
		Escribir "Esto es lo que recibe cada mesero: ",total_mesero
	SiNo
		Si meseros>4 Entonces
			propina_mesero=acum_propina*0.70
			total_mesero=propina_mesero/meseros
			Escribir "Esto es lo que recibe cada mesero: ",total_mesero
		FinSi
		
	FinSi
	
	Escribir "Esto lo que recadudo el restaurante: ",acum
	
FinAlgoritmo
