Algoritmo Ejercicio2
	
	Dimension tempMax[5]
	Dimension tempMin[5]
	Dimension tempMed[5]
	
	Para i<-0 Hasta 4 Con Paso 1 Hacer
		Escribir "Temperatura minima dia: ",i+1
		Leer tempMin[i]
		Escribir "Temperatura maxima dia: ",i+1
		Leer tempMax[i]
		tempMed[i]=(tempMin[i]+tempMax[i])/2
	Fin Para
	
	Escribir "Temperatura media"
	Para i<-0 Hasta 4 Con Paso 1 Hacer
		Escribir "Dia ",i+1," :",tempMed[i]
	Fin Para
	
	minTemp = tempMin[0]
	minDias = 1
	
	Para i<-0 Hasta 4 Con Paso 1 Hacer
		Si tempMin[i] < minTemp  Entonces
			minTemp = tempMin[i]
			minDias = i+1
		SiNo
			Si tempMin[i] = minTemp Entonces
				minDias = i+1
			FinSi
			
		Fin Si
	Fin Para
	Escribir "Días con menos temperatura: ", minDias
	
	Escribir "Introducir temperatura"
	Leer temp
	
	
	
FinAlgoritmo
