Algoritmo Ejercicio1
	i<-1
	
	dinero_efectivo=0
	dineto_tarjeta=0
	dinero_plataformas=0
	
	
	Mientras i<4
		
		Escribir "____  TIENDA EL MILAGRO  ____"
		Escribir "Ingrese monto de la venta"
		leer venta
		Escribir "Efectivo - 1"
		Escribir "Tarjeta de credito - 2"
		Escribir "Plataformas - 3"
		leer concepto
		Escribir "Ingrese valor dado por el cliente"
		leer cliente
		
		Si concepto=1 Entonces
			iva=venta*0.08
			total=venta+iva
			cambio=cliente-total
			dinero_efectivo=dinero_efectivo+total
			Escribir "_______ FACTURA ______"
			Escribir "Valor IVA: $", iva
			Escribir "Valor a pagar: $", total
			Escribir "Valor devuelta: $", cambio
		Sino
			Si concepto=2 Entonces
				iva=venta*0.08
				total=venta+iva
				cambio=cliente-total
				dineto_tarjeta=dineto_tarjeta+total
				escribir "_______ FACTURA ______"
				Escribir "Valor IVA: $", iva
				Escribir "Valor a pagar: $", total
				Escribir "Valor devuelta: $", cambio
			SiNo
				Si concepto=3 Entonces
					iva=venta*0.08
					total=venta+iva
					cambio=cliente-total
					dinero_plataformas=dinero_plataformas+total
					Escribir  "_______ FACTURA ______"
					Escribir "Valor IVA: $", iva
					Escribir "Valor a pagar: $", total
					Escribir "Valor devuelta: $", cambio
					
				FinSi
			FinSi
		FinSi
		
		i=i+1
		
	
	
			Escribir "_______________________________"
			Escribir "¿Deseas realizar otra compra?"
			Escribir "Continuar - 1"
			Escribir "Salir - 2"
			leer desicion
			
			Si desicion=1 Entonces
				i=i-1
			SiNo
				Si desicion=2 Entonces
					i=i+3
					
					Escribir "_____  FACTURA  _____"
					Escribir "Dinero recibido en efectivo: $", dinero_efectivo
					Escribir "Dinero recibido en tarjeta: $", dineto_tarjeta
					Escribir "Dinero recibido en plataforma: $", dinero_plataformas
					Escribir "Dinero total: $", dinero_efectivo+dineto_tarjeta+dinero_plataformas
					
				FinSi
			FinSi
			
	FinMientras
FinAlgoritmo
