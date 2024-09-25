Algoritmo  Ejercicio04
	
    total_estu <- 0
    prom_python <- 0
    prom_php <- 0
    prom_java <- 0
    prom_bd <- 0
    mayor_prom <- 0
    nombre_mayor_prom <- ""
    porc_gana_python <- 0
    porc_gana_php <- 0
    porc_gana_java <- 0
    porc_gana_bd <- 0
    desc_por_promedio_alto <- 0
    estu_con_desc <- 0
    total_estu_gana_python <- 0
    total_estu_gana_php <- 0
    total_estu_gana_java <- 0
    total_estu_gana_bd <- 0
	
    Escribir "Ingrese la cantidad de estudiantes: "
    Leer total_estu
	
    Para i <- 1 Hasta total_estu  Con Paso 1 Hacer
        
		
        Escribir "Ingrese el código del estudiante ", i, ": "
        Leer codigo
        Escribir "Ingrese el nombre del estudiante ", i, ": "
        Leer nombre
        Escribir "Ingrese la nota de Python del estudiante ", i, ": "
        Leer nota_python
        Escribir "Ingrese la nota de PHP del estudiante ", i, ": "
        Leer nota_php
        Escribir "Ingrese la nota de Java del estudiante ", i, ": "
        Leer nota_java
        Escribir "Ingrese la nota de Base de Datos del estudiante ", i, ": "
        Leer nota_bd
		
        prom_estu <- (nota_python + nota_php + nota_java + nota_bd) / 4
        prom_python <- promedio_python + nota_python
        prom_php <- prom_php + nota_php
        prom_java <- prom_java + nota_java
        prom_bd <- prom_bd + nota_bd
		
        Si prom_estu > mayor_prom Entonces
            mayor_prom <- prom_estu
            nombre_mayor_prom <- nombre
        FinSi
		
        Si (nota_python >= 3) Y (nota_php >= 3) Entonces
            estu_con_desc <- estu_con_desc + 1
        FinSi
		
        Si nota_python >= 3 Entonces
            total_estu_gana_python <- total_estu_gana_python + 1
        FinSi
        Si nota_php >= 3 Entonces
            total_estu_gana_php <- total_estu_gana_php + 1
        FinSi
        Si nota_java >= 3 Entonces
            total__gana_java <- total_estu_gana_java + 1
        FinSi
        Si nota_bd >= 3 Entonces
            total_estu_gana_bd <- total_estu_gana_bd + 1
        FinSi
    FinPara
	
    prome_python <- promedio_python / total_estu
    prom_php <- prom_php / total_estu
    prom_java <- prome_java / total_estu
    prom_bd <- prom_bd / total_estu
	
    porc_gana_python <- (total_estu_gana_python * 100) / total_estu
    porc_gana_php <- (total_estu_gana_php * 100) / total_estu
    porc_ganas_java <- (total_estu_gana_java * 100) / total_estu
    porc_gana_bd <- (total_estu_gana_bd * 100) / total_estu
	
    desc_por_prom_alto <- (estu_con_desc * 30) / total_estu
	
    Escribir "--------------------------------------"
    Escribir "Promedio de notas por materia:"
    Escribir "Python: ", prom_python
    Escribir "PHP: ", prom_php
    Escribir "Java: ", prom_java
    Escribir "Base de Datos: ", prom_bd
    Escribir "--------------------------------------"
    Escribir "Porcentaje de alumnos que ganaron cada materia:"
    Escribir "Python: ", porc_gana_python, "%"
    Escribir "PHP: ", porc_gana_php, "%"
    Escribir "Java: ", porc_gana_java, "%"
    Escribir "Base de Datos: ", porce_gana_bd, "%"
    Escribir "--------------------------------------"
    Escribir "Porcentaje de alumnos con descuento por promedio alto: ", desc_por_prom_alto, "%"
    Escribir "--------------------------------------"
    Escribir "Alumno con mayor promedio: ", nombre_mayor_prom, " - Promedio: ", mayor_prom
    Escribir "--------------------------------------"
	
FinAlgoritmo

