Algoritmo Ejercicio6
	
	Escribir "Ingrese el precio de la camisa"
	Leer precio
	Escribir "Ingrese la cantidad que va llevar"
	Leer cantidad
	
	Si cantidad>=3 Entonces
		subtotal=precio*cantidad
		descuento=subtotal*0.2
		Total=subtotal-descuento
		Escribir "Este es el descuento:",Total
	SiNo
		subtotal=precio*cantidad
		descuento=subtotal*0.1
		Total=subtotal-descuento
		Escribir "Este es el descuento:",Total
	FinSi
FinAlgoritmo
