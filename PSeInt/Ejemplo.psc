Algoritmo Ejemplo
	Dimension alumno[5]
	
	Para i<-0 Hasta 1 Con Paso 1 Hacer
		Escribir "Ingrese el numero de documento de la posicion", i
		Leer alumno[0]
		Escribir "Ingrese la primera nota en la posicion  ",i
		Leer alumno[1]
		Escribir "Ingrese la segunda nota eb la posicion ",i
		Leer alumno[2]
		Escribir "Ingrese la tercera nota en la posicion ",i
		Leer alumno[3]
		
	FinPara
	
	Para i<-0 Hasta 1 Con Paso 1 Hacer
		alumno[4]=(alumno[1]+alumno[2]+alumno[3])/3
		Escribir "Este es el promedio ",alumno[4]
	FinPara
	
FinAlgoritmo
