Algoritmo Ejercicio03
	
	Escribir "Cantidad de votantes"
	Leer cantidad
	acum1=0
	acum2=0
	acum3=0
	aux = 0 
	
	Para i<-1 Hasta cantidad Con Paso 1 Hacer
		Escribir "Ingrese el numero de identificacion del votante #",i
		Leer identificacion
		
		Si identificacion = aux Entonces
			Escribir "Usted ya voto"
		SiNo
			aux = identificacion
			Escribir "Seleccion 1 Candidato#1, 2 para Candidato#2 y 3 para Candidato#3"
			Leer selecion 
			
			Si selecion=1 Entonces
				acum1=acum1+1
			SiNo
				Si selecion=2 Entonces
					acum2=acum2+1
				SiNo
					Si selecion=3 Entonces
						acum3=acum3+1
					FinSi
				FinSi
			FinSi
		FinSi
	Fin Para
	
	Si acum1>acum2 y acum1>acum3 Entonces
		Escribir "El ganador es el candidato#1"
	SiNo
		Si acum2>acum1 y acum2>acum3 Entonces
			Escribir "El ganador es el candidato#2"
		SiNo
			Si acum3>acum1 y acum3>acum2 Entonces
				Escribir "El ganador es el candidato#3"
			SiNo
				Si acum1=acum2 y acum1=acum3 Entonces
					Escribir "Es empate"
				SiNo
					Si acum2=acum1 y acum2=acum3 Entonces
						Escribir "Es empate"
					SiNo
						Si acum3=acum1 y acum3=acum2 Entonces
							Escribir "Es empate"
						FinSi
					FinSi
				FinSi
			FinSi
		FinSi
	FinSi
	
	Escribir "Total de votos candidato#1: ",acum1
	Escribir "Total de votos candidato#2: ",acum2
	Escribir "Total de votos candidato#3: ",acum3

	
	
	
	
	
	
FinAlgoritmo
