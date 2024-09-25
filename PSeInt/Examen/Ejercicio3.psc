Algoritmo Ejercicio3
	
	Para i<-1 Hasta 4 Con Paso 1 Hacer
		Escribir "Ingrese días hospedados"
		leer dias
		Escribir "Ingrese número de habitación"
		leer habitacion
		
		precio_dia=40000
		
		valor=dias*precio_dia
		
		Si dias>5 Entonces
			descuento=valor*0.10
			total=valor+descuento
		SiNo
			Si dias>10 Entonces
				descuento=valor*0.15
				total=valor+descuento
			SiNo
				Si dias>15 Entonces
					descuento=valor*0.2
					total=valor+descuento
				SiNo
					Si dias<6 Entonces
						total=valor
					FinSi
				FinSi
			FinSi
		FinSi
		
		Escribir "¿Tiene servicios adicionales"
		Escribir "Comida - 1"
		Escribir "Masaje - 2"
		Escribir "Sauna - 3"
		leer adicional
		
		Si adicional=1 Entonces
			comida=30
			adicion=comida
		SiNo
			Si adicional=2 Entonces
				masaje=40
				adicion=masaje
			SiNo
				Si adicional=3 Entonces
					sauna=20
					adicion=sauna
					
				FinSi
			FinSi
		FinSi
		
		Escribir "______  FACTURA ______"
		Escribir "Número de días: ", dias
		Escribir "Habitacion número: ", habitacion
		Escribir "Precio diario de hospedaje: $", precio_dia
		Escribir "Descuento: $", descuento
		Escribir "Servicio adicional: $", adicion
		Escribir "Total a pagar: $", total+adicion
		Escribir "______________________"
	
		i=i+1
		
		Escribir "¿Deseas ingresar otro cliente?"
		Escribir "Si - 1"
		Escribir "Salir - 2"
		leer desicion
		
		Si desicion=1 Entonces
			i=i-1
		SiNo
			Si desicion=2 Entonces
				i=i+3
			FinSi
		FinSi
		
	Fin Para
	
FinAlgoritmo
