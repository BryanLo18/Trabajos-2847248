Algoritmo Ejercicio05
	Dimension marcas_jeans[9]
	
	marcas_jeans[0]=" La pata brava"
	marcas_jeans[1]=" La pata gorda"
	marcas_jeans[2]=" La pata flaca"
	marcas_jeans[3]=" El fico"
	marcas_jeans[4]=" El fedex"
	marcas_jeans[5]=" Los edisons"
	marcas_jeans[6]=" Leandyorks"
	marcas_jeans[7]=" Tatishorts"
	marcas_jeans[8]=" Los nayibegolds"
	
	Para i<-0 Hasta 8 Con Paso 1 Hacer
		Escribir "# ",i marcas_jeans[i]
	Fin Para
	
	
	Para i<-0 Hasta 0 Con Paso 1 Hacer
		Escribir "Escribir el nombre vector 2"
		Leer  marcas_jeans[i]
		marcas_jeans[1] = marcas_jeans[i]
		Escribir "Escribir el nombre vector 4"
		Leer  marcas_jeans[i]
		marcas_jeans[3]=marcas_jeans[i]
	Fin Para
	
	Para i<-0 Hasta 8 Con Paso 1 Hacer
		Escribir "# ",i marcas_jeans[i]
	Fin Para
	
	
	
FinAlgoritmo
