Algoritmo Ejercicio4
	Para i<-1 Hasta 4 Con Paso 1 Hacer
		Escribir "_______ MEN� PRINCIPAL  ______"
		Escribir "Ingreso de datos del cliente - 1"
		Escribir "Men� de art�culos con sus precios - 2"
		Escribir "Facturaci�n - 3"
		Escribir "Salir - 4"
		leer opciones
		
		i<-1
		
		Mientras i<3
			
			Si opciones=1 Entonces
				Escribir "__  INGRESO DE DATOS DEL CLIENTE  __"
				Escribir "Digite nombre"
				leer nombre
				Escribir "Ingrese tel�fono"
				leer telefono
				Escribir "Ingrese dirrecci�n"
				leer direccion
				Escribir "Ingrese profesi�n"
				leer profesion
				
			FinSi
			
			i=i+2
			
		FinMientras
		Escribir "_______ MEN� PRINCIPAL  ______"
		Escribir "Ingreso de datos del cliente - 1"
		Escribir "Men� de art�culos con sus precios - 2"
		Escribir "Facturaci�n - 3"
		Escribir "Salir - 4"
		leer opciones
		
		i<-1
		
		Mientras  i<3
			
			Si opciones=2 Entonces
				Escribir "_  MEN� DE PLATOS JUNTO CON SUS PRECIOS  _"
				Escribir "Arroz a la francesa: $20.000"
				Escribir "Arroz marinero: $35.000"
				Escribir "Sopa marinera: $25.000"
				Escribir "Salir al men� general"
			FinSi
			
			i=i+2
			
		FinMientras
		Escribir "_______ MEN� PRINCIPAL  ______"
		Escribir "Ingreso de datos del cliente - 1"
		Escribir "Men� de art�culos con sus precios - 2"
		Escribir "Facturaci�n - 3"
		Escribir "Salir - 4"
		leer opciones
		
		i<-1
		
		Mientras  i<3
		
				Si opciones=3 Entonces
					Escribir "___  FACTURACI�N  ___"
					Escribir "Ventas del d�a: XXXX"
					Escribir "Ventas por plato: XXXXX"
					Escribir "Dinero salido: XXXXX"
					
				FinSi
				
				i=i+2
				
			FinMientras
			Escribir "_______ MEN� PRINCIPAL  ______"
			Escribir "Ingreso de datos del cliente - 1"
			Escribir "Men� de art�culos con sus precios - 2"
			Escribir "Facturaci�n - 3"
			Escribir "Salir - 4"
			leer opciones	
			
			i<-1
		
			Mientras  i<3
				
					Si opciones=4
						i=i+2
						
					FinSi
				
			FinMientras
				
		i=i+5
				
	Fin Para
	
FinAlgoritmo
