Algoritmo  Ejercicio01
	
    empleados <- 0
    continuar <- 1
	
    Mientras continuar = 1 Hacer
        
        Escribir "Ingrese las horas que trabajo el empleado ", empleados + 1, ": "
        Leer horas_trabajadas
        Escribir "Ingrese el salario  del empleado ", empleados + 1, ": "
        Leer salario_base
		
        horas_extras_ordi <- horas_trabajadas * 0.025
		
        horas_extras_noct <- horas_trabajadas * 0.075
        recargo_noct <- salario_base * 0.035
		
        domi <- salario_base * 0.075
		
        salario_total <- salario_base + horas_extras_ordi + horas_extras_noct + recargo_noct + domi + auxilio_transporte
		
        desc_salud <- salario_total * 0.04
        desc_pension <- salario_total * 0.04
		
        salario_neto <- salario_total - desc_salud - desc_pension - prestamo
		
        Escribir "-----------------------------"
        Escribir "Empleado ", empleados + 1
        Escribir "Salario Total: ", salario_total
        Escribir "Descuento Salud: ", desc_salud
        Escribir "Descuento Pensión: ", desc_pension
        Escribir "Prestamo: ", prestamo
        Escribir "Salario Neto: ", salario_neto
        Escribir "-----------------------------"
		
        Escribir "¿Desea ingresar otro empleado? (1: Si, 0: No): "
        Leer continuar
		
        empleados <- empleados + 1
		
    FinMientras
	
FinAlgoritmo


