Algoritmo Ejemplo_vectores
	Escribir "Ingrese la dimension del verctor"
	Leer n
	
	Dimension A[3]
	Dimension B[3]
	Dimension suma[3]
	
	Para i<-0 Hasta 2 Con Paso 1 Hacer
		Escribir "Ingrese los numeros al vector A. de la posicion ",i
		Leer A[i]
		Escribir "Ingrese los numeros al vector B, de la posicion ",i
		Leer B[i]
	Fin Para
	
	Para i<-0 Hasta 2 Con Paso 1 Hacer
		suma[i]=A[i]+B[i]
		Escribir "Esta es la suma de los dos vectores ",suma[i]
	Fin Para
	
	Para i<-0 Hasta 2 Con Paso 1 Hacer
		Escribir "Esta es la suma de los dos vectores ",suma[i]
	FinPara
FinAlgoritmo
