from funciones import suma
from funciones import restar

print("Selecione una opcion")
print("Suma es 1")
print("Resta es 2")

opcion = int(input("Opcion :"))

if opcion == 1:
    num1= int(input("Ingrese un numero = "))
    num2= int(input("Ingrese otro un numero = "))
    sumar=suma(num1,num2)

    print(f"La suma es : {sumar}")
elif opcion == 2:
    num1= int(input("Ingrese un numero = "))
    num2= int(input("Ingrese otro un numero = "))
    resta=restar(num1,num2)
    print(f"La suma es : {resta}")
