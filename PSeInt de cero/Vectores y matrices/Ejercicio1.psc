Algoritmo Ejercicio1
	
	Dimension alumnos[100]
	Dimension edades[100]
	
	cantidad=0
	mayorEdad = 0
	Mientras alumnos[cantidad] <> "*" Hacer
		cantidad=cantidad+1
		Escribir "Nombre del alumno #",cantidad
		Leer alumnos[cantidad]
		
		Si alumnos[cantidad] <> "*" Entonces
			Escribir "Edad del alumno #",cantidad
			Leer edades[cantidad]
			Si edades[cantidad] > mayorEdad Entonces
				mayorEdad = edades[cantidad]
			FinSi
		FinSi
		
	Fin Mientras
	
	Mientras i<=cantidad Hacer
		i=i+1
		Si edades[i]>=18 Entonces
			Escribir "Nombre de los alumnos ",alumnos[i]
			Escribir "Edades de los alumnos ", edades[i]
			
		FinSi
	Fin Mientras
	
	
	
	Escribir "Alumnos con la mayor edad:"
	i=0
	Mientras i<=cantidad Hacer
		Si edades[i] = mayorEdad Entonces
			Escribir alumnos[i]
		FinSi
		i=i+1
	Fin Mientras
	
	
	
FinAlgoritmo
