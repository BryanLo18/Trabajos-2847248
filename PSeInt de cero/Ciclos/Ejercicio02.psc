Algoritmo Ejercicio02
	
	Escribir "Cantidad de alumnos"
	Leer alumnos
	mejor_proemdio=0
	mejor_nombre=""
	mejor_codigo=0
	
	Para i<-1 Hasta alumnos Con Paso 1 Hacer
		Escribir "Nombre"
		Leer Nombre
		Escribir "Codigo"
		leer codigo
		Escribir "Nota 1"
		Leer nota1
		Escribir "Nota 2"
		leer nota2
		Escribir "Nota 3"
		Leer nota3
		
		promedio=nota1+nota2+nota3/3
		
		Si promedio>mejor_proemdio Entonces
			mejor_proemdio=promedio
			mejor_nombre=Nombre
			mejor_codigo=codigo
		FinSi
		
		
		
	Fin Para
	
	Escribir "El mayor promedio es: ",mejor_nombre
	Escribir "Codigo: ",mejor_codigo
	Escribir "promedio: ",mejor_proemdio
	
	
FinAlgoritmo
