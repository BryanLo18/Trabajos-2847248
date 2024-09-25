Algoritmo Ejercicio4
	Escribir "Ingre la actividad 1 para dormido y 2 sentado"
	Leer actividad
	Escribir "Ingrese la duracion de la actividad"
	leer minutos
	
	Si actividad=1 Entonces
		calorias= minutos*1.08
		Escribir "Esta son las calorias que consume en ",minutos " dumiendo: ",calorias
	SiNo
		calorias=minutos*1.66
		Escribir "Esta son las calorias que consume en ",minutos " sentado: ",calorias
	FinSi
	
FinAlgoritmo
