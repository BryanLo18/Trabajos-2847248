Algoritmo Ejercicio7
	Escribir "Ingrese el monto total"
	Leer monto
	
	Si monto<500000 Entonces
		dinero=monto*0.7
		credito=monto*0.3
		interes=credito*02
		totalcredi=credito+interes
		Escribir "La empresa usa de su propipo dinero: ",dinero
		Escribir "El credito a pagar es: ",credito
		Escribir "El valor de los intereses son: ",interes
	SiNo
		Escribir "La empresa sobrepaso su inversion "
	FinSi
	
FinAlgoritmo
