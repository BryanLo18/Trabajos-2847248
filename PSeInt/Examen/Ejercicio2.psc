Algoritmo Ejercicio2
	
	i<-1 
	
	Mientras i<4
		Escribir "Ingrese horas de la materia de literatura Moderna"
		leer horas_moderna
		Escribir "Ingrese horas de la materia de literatura Griega"
		leer horas_griega
		Escribir "Ingrese horas de la materia de literatura Medieval"
		leer horas_medieval
		Escribir "Ingrese el valor de la hora"
		leer valor
		
		valor_moderna=horas_moderna*valor
		valor_griega=horas_griega*valor
		valor_medieval=horas_medieval*valor
		
		total_pago=valor_moderna+valor_griega+valor_medieval
		
		contador_horas=horas_moderna+horas_griega+horas_medieval
		
		Si contador_horas>100 Entonces
			bonificacion=total_pago*0.05
			pago=total_pago+bonificacion
		SiNo
			Si contador_horas<101 Entonces
			pago=total_pago	
			FinSi
			
		FinSi
		
		Escribir "_____ PAGO DOCENTE _____"
		Escribir "Valor pago por materia de literatura Moderna: $", valor_moderna
		Escribir "Valor pago por materia de literatura Griega: $", valor_griega
		Escribir "Valor pago por materia de literatura Medieval: $", valor_medieval
		Escribir "Valor total: $", pago
		Escribir "________________________"
		
		i=i+1
		
		Escribir "¿Deseas ingresar otro docente?"
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
		
	FinMientras
	
FinAlgoritmo
