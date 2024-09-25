Algoritmo  Ejericio03
	
    arti1 <- ""
    arti2 <- ""
    arti3 <- ""
    arti4 <- ""
    arti5 <- ""
    arti6 <- ""
    cantidad1 <- 0
    cantidad2 <- 0
    cantidad3 <- 0
    cantidad4 <- 0
    cantidad5 <- 0
    cantidad6 <- 0
    precio1 <- 0
    precio2 <- 0
    precio3 <- 0
    precio4 <- 0
    precio5 <- 0
    precio6 <- 0
    venta1 <- 0
    venta2 <- 0
    venta3 <- 0
    venta4 <- 0
    venta5 <- 0
    venta6 <- 0
    desc1 <- 0
    desc2 <- 0
    descuento3 <- 0
    descuento4 <- 0
    descuento5 <- 0
    descuento6 <- 0
    total_venta <- 0
    total_descuento <- 0
    total_recibido <- 0
    cliente_registrado <- Falso
    continuar <- 1
	
    
    Escribir "Ingrese el nombre del artículo 1: "
    Leer arti1
    Escribir "Ingrese la cantidad inicial de ", arti1, ": "
    Leer cantidad1
    Escribir "Ingrese el precio del artículo ", arti1, ": "
    Leer precio1
	
    Escribir "Ingrese el nombre del artículo 2: "
    Leer arti2
    Escribir "Ingrese la cantidad inicial de ", arti2, ": "
    Leer cantidad2
    Escribir "Ingrese el precio del artículo ", arti2, ": "
    Leer precio2
	
	Escribir "Ingrese el nombre del artículo 3: "
    Leer arti3
    Escribir "Ingrese la cantidad inicial de ", arti3, ": "
    Leer cantidad3
    Escribir "Ingrese el precio del artículo ", arti3, ": "
    Leer precio3
	
	Escribir "Ingrese el nombre del artículo 4: "
    Leer arti4
    Escribir "Ingrese la cantidad inicial de ", arti4, ": "
    Leer cantidad4
    Escribir "Ingrese el precio del artículo ", arti4, ": "
    Leer precio4
	
	Escribir "Ingrese el nombre del artículo 5: "
    Leer arti5
    Escribir "Ingrese la cantidad inicial de ", arti5, ": "
    Leer cantidad5
    Escribir "Ingrese el precio del artículo ", arti5, ": "
    Leer precio5
	
	Escribir "Ingrese el nombre del artículo 6: "
    Leer arti6
    Escribir "Ingrese la cantidad inicial de ", arti6, ": "
    Leer cantidad6
    Escribir "Ingrese el precio del artículo ", arti6, ": "
    Leer precio6
	
	
    Mientras continuar = 1 Hacer
        Escribir "Registro de venta"
        Escribir "Inventario disponible:"
        Escribir "1. ", arti1, " - Cantidad: ", cantidad1, " - Precio: $", precio1
        Escribir "2. ", arti2, " - Cantidad: ", cantidad2, " - Precio: $", precio2
		Escribir "2. ", arti3, " - Cantidad: ", cantidad3, " - Precio: $", precio3
		Escribir "2. ", arti4, " - Cantidad: ", cantidad4, " - Precio: $", precio4
		Escribir "2. ", arti5, " - Cantidad: ", cantidad5, " - Precio: $", precio5
		Escribir "2. ", arti6, " - Cantidad: ", cantidad6, " - Precio: $", precio6
		
        Escribir "Ingrese el número del artículo que desea vender: "
        Leer opcion
        Si opcion = 1 Entonces
            Escribir "Ingrese la cantidad a vender: "
            Leer venta1
        Sino 
			Si opcion = 2 Entonces
				Escribir "Ingrese la cantidad a vender: "
				Leer venta2
			SiNo
				Si opcion = 3 Entonces
					Escribir "Ingrese la cantidad a vender: "
					Leer venta3
				SiNo
					Si opcion = 4 Entonces
						Escribir "Ingrese la cantidad a vender: "
						Leer venta4
					SiNo
						Si opcion = 5 Entonces
							Escribir "Ingrese la cantidad a vender: "
							Leer venta5
						SiNo
							Si opcion = 6 Entonces
								Escribir "Ingrese la cantidad a vender: "
								Leer venta6
								
							FinSi
						FinSi
					FinSi
				FinSi
			FinSi
		FinSi
		
					Si opcion = 1 Entonces
						desc1 <- venta1 * 0.1 
					Sino 
						Si opcion = 2 Entonces
							desc2 <- venta2 * 0.1 
						Sino 
							Si opcion = 3 Entonces
								desc3 <- venta3 * 0.1 
							Sino 
								Si opcion = 4 Entonces
									desc4 <- venta4 * 0.1 
								Sino 
									Si opcion = 5 Entonces
										desc5 <- venta5 * 0.1 
										
										Si opcion = 6 Entonces
											desc6 <- venta6 * 0.1 
											
										FinSi
									FinSi
								FinSi
							FinSi
						FinSi
					FinSi
					
						Si opcion = 1 Entonces
							desc1 <- 0
						Sino Si opcion = 2 Entonces
								desc2 <- 0
							FinSi
						FinSi
						
						Si opcion = 1 Entonces
								cantidad1 <- cantidad1 - venta1
						Sino Si opcion = 2 Entonces
								cantidad2 <- cantidad2 - venta2
								total_venta <- total_venta + (venta1 * precio1) + (venta2 * precio2) 
								total_descuento <- total_descuento + desc1 + desc2 
							FinSi
						FinSi
						
									Escribir "Quiere registrar otra venta (1: Si, 0: No): "
									Leer continuar
	FinMientras
								
								
								Escribir "Informe de inventario"
								
								Escribir "Artículo: ", arti1, " - Cantidad restante: ", cantidad1
								Escribir "Artículo: ", arti2, " - Cantidad restante: ", cantidad2
								
								Escribir "Informe de ventas con descuento"
								
								Si desc1 > 0 Entonces
									Escribir "Artículo: ", arti1, " - Cantidad vendida: ", venta1, " - Descuento aplicado: $", desc1
								FinSi
								Si desc2 > 0 Entonces
									Escribir "Artículo: ", arti2, " - Cantidad vendida: ", venta2, " - Descuento aplicado: $", desc2
								FinSi
								
								total_recibido <- total_venta - total_descuento
								
								Escribir "---------------------------------"
								Escribir "Total recibido por la tienda: $", total_recibido
								Escribir "---------------------------------"
FinAlgoritmo

