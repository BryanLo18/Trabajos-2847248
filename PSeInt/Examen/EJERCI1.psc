Algoritmo sin_titulo
	Escribir "El numero de clientes"
	Leer n
	Escribir "Numero de proveedores"
	Leer provedores
	Escribir "Ingrese si tiene gastos externos 1 si 2 no"
	Leer externa
	acum_ventas=0
	acum_provedores=0
	acum_gastos=0
	acum_prestamo=0
	i<-1
	Mientras i<=n Hacer
		i=i+1
		Escribir "Cuanto pago"
		Leer venta
		acum_ventas=acum_ventas+venta
		Escribir "Cuando dinero de prestamo"
		Leer prestamo
		acum_prestamo=acum_prestamo+prestamo
	Fin Mientras
	Mientras i<=provedores Hacer
		i=i+1
		Escribir "Cuanto gasto conn este proveedor"
		Leer p
		acum_provedores=acum_provedores+p
	Fin Mientras
	Si externa =1 Entonces
		Escribir "Cuanto paga por implementos de aseo"
		Leer aseo
		Escribir "Cuanto paga de arriendo"
		Leer arriendo
		Escribir "Cuanto paga por servicios"
		Leer servicios
		suma=aseo+arriendo+servicios
		acum_gastos=acum_gastos+suma
	SiNo
		Escribir "Usted no cuenta con gastos adiccionales"
	FinSi
	total_pago=acum_gastos+acum_provedores
	total_caja= acum_ventas+acum_prestamo
	d=total_caja-total_pago
	Escribir "El dienero total en caja es: ",total_caja
	Escribir "Total en gastos: ",total_pago
	Escribir "Este es su sobrante: ",d
	Escribir "Este es el dinero por prestamos: ",acum_prestamo
	Escribir "Este es el total de dinero libre en caja: ",acum_ventas
	Si d<0 Entonces
		Escribir "Usted esta en la olla"
		
	SiNo
		Escribir "Vamos melos papa"
	Fin Si
	
FinAlgoritmo
