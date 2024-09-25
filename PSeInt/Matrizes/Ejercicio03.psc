Algoritmo Ejercicio03
	Dimension a[5]
	Dimension b[5]
	
	
	Para i<-0 Hasta 4 Con Paso 1 Hacer
		Escribir "Un numero"
		Leer a[i]
		f<-1
		Para x<-1 Hasta a[i] Con Paso 1 Hacer
			f<-f*x
		Fin Para
		b[i]=f
	Fin Para
	
	
	Para i=0 Hasta 4 Con Paso 1 Hacer
		Escribir "El factorial de ",a[i] " es: ",b[i]
	Fin Para
	
	

FinAlgoritmo