Algoritmo sin_titulo
	Escribir "Cantidad de alumnos"
	Leer alumno
	
	acum_python=0
	acum_php=0
	acum_java=0
	acum_base_de_datos=0
	mayor_python=0
	mayor_php=0
	mayor_java=0
	mayor_base_de_datos=0
	mayor_nombre_python="b"
	mayor_nombre_php="b"
	mayor_nombre_java="b"
	mayor_nombre_base="b"
	
	
	Para i<-1 Hasta alumno Con Paso 1 Hacer
		Escribir "Codigo"
		Leer codigo
		Escribir "Nombre"
		Leer nombre
		
		Escribir "Nota Python"
		Para b<-1 Hasta 3 Con Paso 1 Hacer
			Escribir "Nota #",b
			Leer nota_python
			acum_python=acum_python+nota_python
		Fin Para
		promedio_python=acum_python/3
		
		Escribir "Nota PHP"
		Para b<-1 Hasta 3 Con Paso 1 Hacer
			Escribir "Nota #", b
			Leer nota_php
			acum_php=acum_php+nota_php
		Fin Para
		promedio_php=acum_php/3
		
		Escribir "Nota Java"
		Para b<-1 Hasta 3 Con Paso 1 Hacer
			Escribir "Nota #", b
			Leer nota_java
			acum_java=acum_java+nota_java
		Fin Para
		promedio_java=acum_java/3
		
		Escribir "Nota Base de datos"
		Para b<-1 Hasta 3 Con Paso 1 Hacer
			Escribir "Nota #",b
			Leer nota_base_de_datos
			acum_base_de_datos=acum_base_de_datos+nota_base_de_datos
		Fin Para
		promedio_base_de_datos=acum_base_de_datos/3
		
		Si promedio_python>mayor_python Entonces
			mayor_python=promedio_python
			mayor_nombre_python=nombre
		FinSi
		Si promedio_php>mayor_php Entonces
			mayor_php=promedio_php
			mayor_nombre_php=nombre
		FinSi
		
		Si promedio_java>mayor_java Entonces
			mayor_java=promedio_java
			mayor_nombre_java=nombre
		FinSi
		
		Si promedio_base_de_datos>mayor_base_de_datos Entonces
			mayor_base_de_datos=promedio_base_de_datos
			mayor_nombre_base=nombre
		FinSi
		
	Fin Para
	Escribir "Mayor promedio python: ", mayor_python
	Escribir "Nombre nota mayor python: ", mayor_nombre_python
	
	Escribir "Mayor promedio PHP: ", mayor_php
	Escribir "Nombre nota mayor PHP: ", mayor_nombre_php
	
	Escribir "Mayor promedio JAVA: ", mayor_java
	Escribir "Nombre nota mayor JAVA: ", mayor_nombre_java
	
	Escribir "Mayor promedio base de datos: ", mayor_base_de_datos
	Escribir "Nombre nota mayor base de datos: ", mayor_nombre_base
FinAlgoritmo
