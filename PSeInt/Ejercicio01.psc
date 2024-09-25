Algoritmo Ejercicio01
	Dimension alumnos[100]
	Dimension edades[100]
	
	cantidad=0
	Mientras alumnos[cantidad] <> "*" Hacer
		cantidad=cantidad+1
		Escribir "Nombre del alumno #",cantidad
		Leer alumnos[cantidad]
		
		Si alumnos[cantidad] <> "*" Entonces
			Escribir "Edad del alumno #",cantidad
			Leer edades[cantidad]
			
		FinSi
		
	Fin Mientras
	
	i<-0
	Mientras i<=cantidad Hacer
		i=i+1
		Si edades[i]>=18 Entonces
			Escribir "Nombre de los alumnos ",alumnos[i]
			Escribir "Edades de los alumnos ", edades[i]
			
		FinSi
	Fin Mientras
	Escribir "Ingrese apatir de que edad necesita"
	
	Para x<-0 Hasta 1 Con Paso 1 Hacer
		
		Si edades[i]>=20 Entonces
			Escribir "Nombre de los alumnos ",alumnos[i]
			Escribir "Edades de los alumnos ", edades[i]
			
		FinSi
	Fin Para
	
	
	
	
FinAlgoritmo
