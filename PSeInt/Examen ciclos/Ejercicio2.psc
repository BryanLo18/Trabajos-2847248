Algoritmo Ejercicio2
	
	Escribir "Cantidad de trabajadores"
	Leer cantidad
	
	aumento1=60000
	aumento2=80000
	aumento3=120000
	aumento4=200000
	
	Para i<-1 Hasta cantidad Con Paso 1 Hacer
		
		Escribir "Trabajador #",i
		Escribir "Ingrese el tiempo en años de servicio"
		Leer tiempo
		
		si tiempo>=1 y tiempo<5 Entonces
			Escribir "Ingrese su salario"
			Leer salario
			Si salario>=2600000 Entonces
				
				auxilio=110000
				subtotal=salario+auxilio+aumento1
				
				salud=salario*0.04
				pension=salario*0.04
				
				Escribir "Valor de pago de comisiones"
				Leer comision 
				Escribir "Valor de pago de horas extras"
				Leer horas_extras
				
				salario_neto=subtotal+salud+pension+comision+horas_extras
				salario_devegado1=salario_neto-salud-pension
				
				Escribir "Salario neto ",salario_neto
				Escribir "Salario devengado: ",salario_devegado1
				
			SiNo
				subtotal=salario+aumento1
				salud=salario*0.04
				pension=salario*0.04
				
				Escribir "Valor de pago de comisiones"
				Leer comision 
				Escribir "Valor de pago de horas extras"
				Leer horas_extras
				
				salario_neto=subtotal+salud+pension+comision+horas_extras
				salario_devegado1=salario_neto-salud-pension
				
				Escribir "Salario neto: ",salario_neto
				Escribir "Salario devengado: ",salario_devegado1
				
			FinSi
			
		SiNo
			Escribir "Ingrese su salario"
			Leer salario
			si tiempo>=5 y tiempo<10 Entonces
				Si salario>=2600000 Entonces
					
					auxilio=110000
					subtotal=salario+auxilio+aumento2
					
					salud=salario*0.04
					pension=salario*0.04
					
					Escribir "Valor de pago de comisiones"
					Leer comision 
					Escribir "Valor de pago de horas extras"
					Leer horas_extras
					
					salario_neto=subtotal+salud+pension+comision+horas_extras
					salario_devegado1=salario_neto-salud-pension
					
					Escribir "Salario neto ",salario_neto
					Escribir "Salario devengado: ",salario_devegado1
					
				SiNo
					subtotal=salario+aumento2
					salud=salario*0.04
					pension=salario*0.04
					
					Escribir "Valor de pago de comisiones"
					Leer comision 
					Escribir "Valor de pago de horas extras"
					Leer horas_extras
					
					salario_neto=subtotal+salud+pension+comision+horas_extras
					salario_devegado1=salario_neto-salud-pension
					
					Escribir "Salario neto: ",salario_neto
					Escribir "Salario devengado: ",salario_devegado1
					
				FinSi
				
			SiNo
				
				si tiempo>=10 y tiempo<20 Entonces
					Si salario>=2600000 Entonces
						
						auxilio=110000
						subtotal=salario+auxilio+aumento3
						
						salud=salario*0.04
						pension=salario*0.04
						
						Escribir "Valor de pago de comisiones"
						Leer comision 
						Escribir "Valor de pago de horas extras"
						Leer horas_extras
						
						salario_neto=subtotal+salud+pension+comision+horas_extras
						salario_devegado1=salario_neto-salud-pension
						
						Escribir "Salario neto ",salario_neto
						Escribir "Salario devengado: ",salario_devegado1
						
					SiNo
						subtotal=salario+aumento3
						salud=salario*0.04
						pension=salario*0.04
						
						Escribir "Valor de pago de comisiones"
						Leer comision 
						Escribir "Valor de pago de horas extras"
						Leer horas_extras
						
						salario_neto=subtotal+salud+pension+comision+horas_extras
						salario_devegado1=salario_neto-salud-pension
						
						Escribir "Salario neto: ",salario_neto
						Escribir "Salario devengado: ",salario_devegado1
						
					FinSi
					
				SiNo
					
					Si tiempo>=20 Entonces
						Si salario>=2600000 Entonces
							
							auxilio=110000
							subtotal=salario+auxilio+aumento4
							
							salud=salario*0.04
							pension=salario*0.04
							
							Escribir "Valor de pago de comisiones"
							Leer comision 
							Escribir "Valor de pago de horas extras"
							Leer horas_extras
							
							salario_neto=subtotal+salud+pension+comision+horas_extras
							salario_devegado1=salario_neto-salud-pension
							
							Escribir "Salario neto ",salario_neto
							Escribir "Salario devengado: ",salario_devegado1
							
						SiNo
							subtotal=salario+aumento4
							salud=salario*0.04
							pension=salario*0.04
							
							Escribir "Valor de pago de comisiones"
							Leer comision 
							Escribir "Valor de pago de horas extras"
							Leer horas_extras
							
							salario_neto=subtotal+salud+pension+comision+horas_extras
							salario_devegado1=salario_neto-salud-pension
							
							Escribir "Salario neto: ",salario_neto
							Escribir "Salario devengado: ",salario_devegado1
							
						FinSi
						
					FinSi
				FinSi
			FinSi
		FinSi
		
		
	Fin Para
	
FinAlgoritmo
