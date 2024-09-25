Algoritmo Ejercicio02
	Dimension a[3]
	Dimension b[3]
	
	Para i<-0 Hasta 2 Con Paso 1 Hacer
		Escribir "Ingrese el numero ",i
		Leer a[i]
	FinPara
	
	Para i<-0 Hasta 2 Con Paso 1 Hacer
		Escribir "Numero almacenado en el vector"
		Leer b[i]
		Si b[i] = a[i] Entonces
			Escribir "El numero se encuentra en el vector"
		SiNo
			Escribir "El numero no se encuentra en el vector"
		FinSi
	FinPara
	
FinAlgoritmo
