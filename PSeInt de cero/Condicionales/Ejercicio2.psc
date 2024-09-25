Algoritmo Ejercicio2
	Escribir "Valor total a pagar"
	Leer valor
	
	Si valor>=100000 Entonces
		descuento = valor*0.2
		total=valor-descuento
		Escribir "Este es su descuento: ",descuento
		Escribir "Este es el total a pagar: ",total
	SiNo
		Escribir "Este es el tota a pagar: ",valor
	FinSi
	
FinAlgoritmo
