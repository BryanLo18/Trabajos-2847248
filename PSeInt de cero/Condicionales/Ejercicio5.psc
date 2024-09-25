Algoritmo Ejercicio5
	Escribir "Ingrese el nombre del articulo"
	Leer nombre
	Escribir "Ingrese el precio del articulo"
	Leer precio
	Escribir "Ingrese la clave 01 o 02"
	Leer clave
	
	Si clave=01 Entonces
		descuento= precio*0.1
		Total=precio-descuento
		Escribir "Nombre del articulo: ",nombre
		Escribir "Precio del articulo: ",precio
		Escribir "Precio con descuento: ",Total
	SiNo
		descuento= precio*0.2
		Total=precio-descuento
		Escribir "Nombre del articulo: ",nombre
		Escribir "Precio del articulo: ",precio
		Escribir "Precio con descuento: ",Total
	FinSi
	
FinAlgoritmo
