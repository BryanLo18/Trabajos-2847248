Algoritmo Ejercicio05
	
	Escribir "Cantidad de trabajadores"
	Leer cantidad
	
	Para i<-1 Hasta cantidad Con Paso 1 Hacer
		Escribir "Cantidad de horas que trabaja"
		Leer horas
		Escribir "Valor de la hora"
		Leer valor
		Escribir "Selecione 1 Digitador y 2 Diseñador"
		Leer opcion
		sueldo=horas*valor
		Si opcion=1 y sueldo>1000000 Entonces
			impuesto=sueldo*0.12
			total_sueldo=sueldo-impuesto
			Escribir "Este es su sueldo: ",total_sueldo
		SiNo
			Si opcion=2 y sueldo>1000000 Entonces
				impuesto=sueldo*0.10
				total_sueldo=sueldo-impuesto
				Escribir "Este es su sueldo: ",total_sueldo
			SiNo
				Si opcion=1 y sueldo<1000000 Entonces
					total_sueldo=sueldo
					Escribir "Este es su sueldo: ",total_sueldo
				SiNo
					Si opcion=2 y sueldo<1000000 Entonces
						total_sueldo=sueldo
						Escribir "Este es su sueldo: ",total_sueldo
					FinSi
				FinSi
			FinSi
		FinSi
	Fin Para
	
FinAlgoritmo
